<?php
class WikiLingoWYSIWYG extends WikiLingo
{
	/* wiki syntax type tracking */
	static $typeIndex = array();
	static $typeShorthandName = array();
	static $typeShorthand = array(
		"preFormattedText" =>           "pp",
		"bold" =>                       "b",
		"box" =>                        "bx",
		"center" =>                     "c",
		"noParse" =>                    "np",
		"code" =>                       "cd",
		"color" =>                      "clr",
		"italic" =>                     "i",
		"l2r" =>                        "l2r",
		"r2l" =>                        "r2l",
		"header" =>                     "hdr",
		"horizontalRow" =>              "hr",
		"listParent" =>                 "lp",
		"listUnordered" =>              "lu",
		"listOrdered" =>                "lh",
		"listToggleUnordered" =>        "ltu",
		"listToggleOrdered" =>          "lto",
		"listBreak" =>                  "lb",
		"listDefinitionParent" =>       "ldp",
		"listDefinition" =>             "ld",
		"listDefinitionDescription" =>  "ldd",
		"listEmpty" =>                  "le",
		"line" =>                       "ln",
		"forcedLineEnd" =>              "fln",
		"unlink" =>                     "ul",
		"link" =>                       "l",
		"linkWord" =>                   "lw",
		"linkNp" =>                     "lnp",
		"linkExternal" =>               "el",
		"wikiLink" =>                   "wl",
		"strike" =>                     "stk",
		"doubleDash" =>                 "dd",
		"table" =>                      "t",
		"tableBody" =>                  "tbd",
		"tableRow" =>                   "tr",
		"tableData" =>                  "td",
		"titleBar" =>                   "tb",
		"underscore" =>                 "u",
		"comment" =>                    "cm",
		"plugin" =>                     "pl",
	);

	function __construct()
	{
		parent::__construct();

		if (empty(self::$typeShorthandName)) {
			foreach (self::$typeShorthand as $type => $shorthand) {
				self::$typeShorthandName[$shorthand] = $type;
			}
		}
	}

	//end state handlers
	//Wiki Syntax Objects Parsing Start
	/**
	 * syntax handler: noparse, ~np~$content~/np~
	 *
	 * @access  public
	 * @param   $content string parsed string found inside detected syntax
	 * @return  string  $content desired output from syntax
	 */
	public function noParse($content)
	{
		return $this->createWikiTag(
			"noParse",
			"span",
			parent::noParse($content),
			array(
				"class" => "noParse"
			)
		);
	}

	/**
	 * Handles plugins directly from the wiki parser.  A plugin can be on a different level of the current parser, and
	 * if so, the execution is delayed until the parser reaches that level.
	 *
	 * @access  private
	 * @param   array  &$pluginDetails plugins details in an array
	 * @return  string  either returns $key or block from execution message
	 */
	public function plugin(&$name, &$parameters, &$end, &$body)
	{
        $plugin = parent::plugin($name, $parameters, $end, $body);
		return $this->createWikiTag(
			"plugin",
			"span",
			"Plugin:" . $plugin->name,
			array(
				"data-syntax" => rawurlencode($plugin->syntax),
				"data-body" => rawurlencode($plugin->bodySyntax),
				"data-attributes" => json_encode($plugin->parameters),
				"data-name" => $plugin->name,
				"contenteditable" => "false"
			)
		);
	}

	/**
	 * syntax handler: double dynamic variable, %%$content%%
	 *
	 * @access  public
	 * @param   $content string parsed string found inside detected syntax
	 * @return  string  $content desired output from syntax
	 */
	function doubleDynamicVar($content)
	{
		return "%%" . $content . "%%";
	}

	/**
	 * syntax handler: single dynamic variable, %$content%
	 *
	 * @access  public
	 * @param   $content string parsed string found inside detected syntax
	 * @return  string  $content desired output from syntax
	 */
	function singleDynamicVar($content)
	{
		return "%" . $content . "%";
	}

	/**
	 * syntax handler: unlink, [[$content|$content]]
	 *
	 * @access  public
	 * @param   $content parsed string found inside detected syntax
	 * @return  string  $content desired output from syntax
	 */
	function unlink($content) //[[content|content]
	{
		$contentLength = strlen($content);

		if ($content[$contentLength - 3] == "@" &&
			$content[$contentLength - 2] == "n" &&
			$content[$contentLength - 1] == "p"
		) {
			$content = substr($content, 0, -3);
		}

		return $this->createWikiTag("unlink", "span", $content);
	}


	/**
	 * syntax handler: link, [$content|$content], ((Page)), ((Page|$content)), (type(Page)), (type(Page|$content)), ((external:Page)), ((external:Page|$content))
	 *
	 * @access  public
	 * @param   $type string type, np, wiki, alias (or whatever is "(here(", word
	 * @param   $content string found inside detected syntax
	 * @return  string  $content desired output from syntax
	 */
	function link($type, $page, $description = '') //[content|content]
	{
		if ($type == 'word') {
			return $page;
		}

		return parent::link($type, $page, $description, true);
	}


	/**
	 * syntax handler: tiki comment, ~tc~$content~/tc~
	 *
	 * @access  public
	 * @param   $content parsed string found inside detected syntax
	 * @return  string  $content desired output from syntax
	 */
	function comment($content)
	{
		return $this->createWikiTag(
			"comment",
			"span",
			substr($content, 4, -5),
			array(
				"class" => "wikiComment"
			)
		);
	}


	/**
	 * syntax handler: header, \n!$content
	 * <p>
	 * Uses $this->Parser->header as a processor.  Is called from $this->block().
	 *
	 * @access  public
	 * @param   $content parsed string found inside detected syntax
	 * @return  string  $content desired output from syntax
	 */
	function header($content, $trackExclamationCount = true) //!content
	{
		return parent::header($content, true);
	}

	/**
	 * Increments the html tag
	 * are static, so that all index are unique
	 *
	 * @access  private
	 * @param   string  $name plugin name
	 * @return  string  $index
	 */
	static public function incrementTypeIndex($name)
	{
		$name = strtolower($name);

		if (isset(self::$typeIndex[$name]) == false) self::$typeIndex[$name] = 0;

		self::$typeIndex[$name]++;

		return self::$typeIndex[$name];
	}

	/**
	 * Gets wiki syntax type symbol shorthand, cuts down on information needed to send to browser, used in translating html to wiki
	 *
	 * @access  private
	 * @param   string  $name type name
	 * @return  string  $index
	 */
	static public function typeShorthand($name)
	{
		if (!isset(self::$typeShorthand[$name])) {
			throw new Exception("Type Doesn't Exists");
		}

		return self::$typeShorthand[$name];
	}

	/**
	 * Gets wiki syntax type name from shorthand, cuts down on information needed to send to browser, used in translating html to wiki
	 *
	 * @access  private
	 * @param   string  $name type shorthand
	 * @return  string  $index
	 */
	static public function typeFromShorthand($shorthand)
	{
		if (!isset(self::$typeShorthandName[$shorthand])) {
			return "";
		}

		return self::$typeShorthandName[$shorthand];
	}

	/**
	 * syntax handler: characters
	 *
	 * @access  public
	 * @param   $content char handler, upper or lower case
	 * @return  string output of char
	 */
	function char($content)
	{
		return $content;
	}

	/**
	 * syntax handler: new line, \n
	 * <p>
	 * Detects if a line break is needed and returns it. If $this->skipBr is set to true, skips output of <br /> and
	 * sets it back to false for the next line to process
	 *
	 * @access  public
	 * @param   $ch line line character
	 * @return  string  $result of line process
	 */
	function line($ch)
	{
		//TODO: We want to handle the items that we needed to select the br just after the syntax needing the br to go away and hide it using css because we need to maintain it when parsing back from html
		$this->skipBr = false;
		return parent::line($ch);
	}

	/**
	 * tag helper creation, noise items that will be disposed
	 *
	 * @access  public
	 * @param   $syntaxType string from what syntax type
	 * @param   $tagType string what output tag type
	 * @param   $content string what is inside the tag
	 * @param   $params array what params to add to the tag, array, key = param, value = value
	 * @param   $type default is "standard", of types : standard, inline, open, close
	 * @return  string  $tag desired output from syntax
	 */
	public function createWikiHelper($syntaxType, $tagType, $content = "", $attributes = array(), $type = "standard")
	{
		if (!isset($attributes['class'])) {
			$attributes['class'] = "";
		}

		$attributes['class'] .= " wlwh"; //WikiLingo WYSIWYG Helper tag

		$attributes['class'] = trim($attributes['class']);

		return parent::createWikiHelper($syntaxType, $tagType, $content, $attributes, $type);
	}

	/**
	 * tag creation, should only be used with items that are directly related to wiki syntax, buttons etc, should use createWikiHelper
	 *
	 * @access  public
	 * @param   $syntaxType string from what syntax type
	 * @param   $tagType string what output tag type
	 * @param   $content string what is inside the tag
	 * @param   $params array what params to add to the tag, array, key = param, value = value
	 * @param   $type string the content to be ignored and for tag to close, ie <tag />
	 * @return  string  $tag desired output from syntax
	 */
	public function createWikiTag($syntaxType, $tagType, $content = "", $params = array(), $type = "standard")
	{
		if ($type != "close") {
			$params['data-i'] = self::incrementTypeIndex($syntaxType);
			$params['data-t'] = self::typeShorthand($syntaxType);

			if (!isset($params['class'])) {
				$params['class'] = "";
			}

			$params['class'] .= " wlw"; //WikiLingo WYSIWYG tag

			$params['class'] = trim($params['class']);
		}

		if ($this->isRepairing($syntaxType) == true) {
			$params['data-repair'] = true;
		}

		return parent::createWikiTag($syntaxType, $tagType, $content, $params, $type);
	}
}
