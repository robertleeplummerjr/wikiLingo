<?php
namespace WYSIWYGWikiLingo;

use WYSIWYGWikiLingo\Expression;

/**
 * Class Base
 * @package WYSIWYGWikiLingo
 */
class Base
{
	public $parsing = false;
	private $parserDebug = true;
	private $lexerDebug = true;

	public $events;

	/* html tag tracking */
	public $typeIndex = [];
	public $htmlElementStack = [];
	public $htmlElementStackCount = [];
	public $htmlElementsStackCount = 0;
	public $htmlElementsStack = [];

	public $typeStack = [];

	public $isStaticTag = false;
	public $processedTypeStack = '';
    public $closingTagRegex = "/^(?:(<\/(.|\n)[^>]*?>))/";
	public $inputAdjustedForLineAtBeginning = false;

/*
	function parser_performAction(&$thisS, $yytext, $yyleng, $yylineno, $yystate, $S, $_S, $O)
	{
		$result = parent::parser_performAction($thisS, $yytext, $yyleng, $yylineno, $yystate, $S, $_S, $O);
		if ($this->parserDebug == true) {
			$thisS = "{" . $thisS . ":" . $yystate ."}";
		}
		return $result;
	}

	function lexer_performAction(&$yy, $yy_, $avoiding_name_collisions, $YY_START = null) {
		$result = parent::lexer_performAction($yy, $yy_, $avoiding_name_collisions, $YY_START);
		if ($this->lexerDebug == true) {
			echo "{" . $result . ":" .$avoiding_name_collisions . "}" . $yy_->yytext . "\n";
		}
		return $result;
	}

	function parseError($error, $info)
	{
		echo $error;
		print_r($info);
		die;
	}
*/
    /**
     * @param $tag
     */
    public function stackHtmlElement($tag)
	{
		$this->htmlElementStack[] = $tag;
		$this->htmlElementStackCount++;
	}

    /**
     * @param String [$ending]
     * @param bool [$isLookAhead]
     * @return String|null
     */
    public function unStackHtmlElement($ending = null, $isLookAhead = false)
	{
		$name = strtolower(substr(str_replace(" ", "", $ending), 2, -1));

		$possibleTagMatch = end($this->htmlElementStack);

        $pos = strpos($possibleTagMatch->text, $name);

		if ($pos != 1) {
			return null;
		}

        if ($isLookAhead) {
            return $possibleTagMatch;
        }

		$this->htmlElementStackCount--;
		$this->htmlElementStackCount = max(0, $this->htmlElementStackCount);
		$beginning = array_pop($this->htmlElementStack);

		return $beginning;
	}

    /**
     *
     */
    public function killStackedHtmlElement()
    {
        $this->htmlElementStackCount--;
        $this->htmlElementStackCount = max(0, $this->htmlElementStackCount);
        array_pop($this->htmlElementStack);
    }

    /**
     * @return array
     */
    function getMissingClosingKeys()
	{
		end($this->htmlElementStack);
		$element = key($this->htmlElementStack);

		if (isset($this->htmlElementStack[$element])) {
			return ['element' => $element];
		}
	}

    public $types = array();
    public $typesCount = array();
    /**
     * @param WikiLingo\Expression\* &$type
     * @return Number
     */
    public function addType(&$type)
    {
        $class = get_class($type);
        if (empty($this->types[$class])) {
            $this->types[$class] = array();
            $this->typesCount[$class] = -1;
        }
        $this->types[$class][] =& $type;
        $this->typesCount[$class]++;
        $type->type = array_pop(explode('\\', $class));
        return $type->index = $this->typesCount[$class];
    }
}