<?php
/**
 * @namespace
 */
namespace WikiLingo;

use Exception;
use Types\Type;

/**
 * @constructor
 */
class Parsed extends ParserValue
{
	public $type;
    public $render;
	public $firstSibling;
    public $siblingIndex = 0;
    public $siblingsLength = 0;
    public $lineIndex = 0;
    public $lineLength = 0;
    public $parser;
    public $stateEnd;
	public static $throwExceptions = true;

	public $lines = array();
	public function addLine(Parsed &$line)
	{
        $this->lineLength++;
        $line->lineIndex = $this->lineLength;

        $line->parent =& $this;
		$this->lines[$this->lineLength] =& $line;
	}
    public function previousLine()
    {
        $lineIndex = $this->lineIndex - 1;
        if ($lineIndex == 0) {
            return null;
        }
        $line = $this->parent->lines[$lineIndex];
        return $line;
    }
    public function nextLine()
    {
        $lineIndex = $this->lineIndex + 1;
        if ($lineIndex > $this->parent->lineLength) {
            return null;
        }
        return $this->parent->lines[$this->lineIndex + 1];
    }

	public $siblings = array();
	public function addContent(Parsed &$sibling)
	{
        $this->siblingsLength++;
        $sibling->siblingIndex = $this->siblingsLength;

        $this->siblings[] =& $sibling;
		$sibling->firstSibling =& $this;
	}
    public function previousSibling()
    {
        $siblingIndex = $this->siblingIndex - 1;
        if ($siblingIndex < 0) {
            return null;
        }

	    if (isset($this->parent->children[$siblingIndex])) {
		    return Type::Parsed($this->parent->children[$siblingIndex]);
	    }

	    if ($siblingIndex == 0) {
		    return Type::Parsed($this->firstSibling);
	    }

	    if (isset($this->firstSibling->siblings[$siblingIndex - 1])) {
            return Type::Parsed($this->firstSibling->siblings[$siblingIndex - 1]);
	    }

	    return null;
    }
    public function nextSibling()
    {
        $siblingIndex = $this->siblingIndex + 1;
        if ($siblingIndex > $this->parent->siblingLength) {
            return null;
        }
        return Type::Parsed($this->siblings[$siblingIndex]);
    }

	public $arguments = array();
	public function addArgument(Parsed &$argument)
	{
		$this->arguments[] =& $argument;
	}

	public function setType($type, &$parser)
	{
		$this->type = $type;
        $this->parser =& $parser;
        $this->setExpression();
	}

	public $options = array();
	public function setOption($key, $value)
	{
		$this->options[$key] = $value;
	}

	public $parent;
	public function setParent(Parsed &$parent)
	{
		$parent->addChild($this);

        foreach($this->siblings as &$sibling) {
            $sibling->setParent($parent);
	        array_shift($this->siblings);
        }
	}

	public $children = array();
	public $childrenLength = 0;
	public function addChild(Parsed &$child)
	{
		$child->parent =& $this;
		$this->children[] =& $child;
		$this->childrenLength++;
	}
    public function removeChildren()
    {
        $this->children = [];
	    $this->childrenLength = 0;
    }

    public $expression;
    public $expressionPermissible = true;
    public function setExpression()
    {
        $class = "WikiLingo\\Expression\\$this->type";
        if (class_exists($class)) {
            $expression = new $class($this);
            if ($expression) {
                $this->expression =& $expression;
            }
        } else if (self::$throwExceptions) {
	        throw new Exception("Type '" . $this->type . "' does not exist in WikiLingo\\Expression namespace.");
        }
    }

	public $cousins = array();
	public $cousinsCount = 0;
	public function addCousin(Parsed &$cousin)
	{
		$this->cousins[] =& $cousin;
		$this->cousinsCount++;
	}
}