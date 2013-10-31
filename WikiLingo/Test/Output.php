<?php
namespace WikiLingo\Test\Expression;

use WikiLingo\Test;

class OutputTest extends Test\Base
{
	public function provider()
	{
		//self::$verbose = true;
		$this->syntaxSets = array(

			//good state tracking syntax
			'wikilink'          => array("((FakePage))", '<a href=\'tiki-index.php?page=FakePage\' title=\'FakePage\' class=\'wiki wiki_page\'>FakePage</a>'),
			'wikilink_not_exist'=> array("((NoExist))", '<span>NoExist</span><a href=\'tiki-editpage.php?page=NoExist\' title=\'Create page: NoExist\' class=\'wiki wikinew\'>?</a>'),
			'wikilink_alias'=> array("(alias(FakePage))", '<a href=\'tiki-index.php?page=FakePage\' title=\'FakePage\' class=\'wiki wiki_page alias\' data-reltype=\'alias\'>FakePage</a>'),
			'capitol_wikilink'  => array(),
			'np_wikilink'       => array(),
			'wikilink_w_wiki'   => array(),
			'wikilink_w_table'  => array(),
			'table'             => array("||A1|B1|C1\nA2|B2|C2||", '<table class=\'wikitable\'><tbody><tr><td class=\'wikicell\'>A1</td><td class=\'wikicell\'>B1</td><td class=\'wikicell\'>C1</td></tr><tr><td class=\'wikicell\'>A2</td><td class=\'wikicell\'>B2</td><td class=\'wikicell\'>C2</td></tr></tbody></table>'),


			//error recovery state tracking syntax
			'italic_r'          => array("''text", "''text"),
			'bold_r'            => array('__text', '__text'),
			'linethrough_r'     => array('--text', '--text'),
			'box_r'             => array('^text', '^text'),
			'center_r'          => array('::text', '::text'),
			'underscore_r'      => array('===text', '===text'),
			'titlebar_r'        => array("-=text", '-=text'),
			'color_text1_r'     => array('~~red:text', '~~red:text'),
			'color_text2_r'     => array('~~#ff00ff:text', '~~#ff00ff:text'),
			'htmllink_r'        => array("[www.google.com|Google", '[www.google.com|Google'),
			'wikilink_r'        => array("((FakePage", '((FakePage'),
			'table_r'           => array("||A1|B1|C1\nA2|B2|C2", "||A1|B1|C1<br/>\nA2|B2|C2"),

			'wikilink_nested'   => array("(([FakePage]))", '<a href=\'tiki-index.php?page=%5BFakePage%5D\' title=\'[FakePage]\' class=\'wiki wiki_page\'>[FakePage]</a>'),
			'htmllink_nested'   => array("[((Linked))]", '<a class=\'wiki\' href=\'((Linked))\'>((Linked))</a>'),

			//non state tracking syntax
			"forced_break"      => array('%%%', "<br/>"),
			'horizontal_line'   => array('---', "<hr/>"),

			'np'                => array('~np~~np~--np--~/np~~/np~', '~np~--np--~/np~'),
			'tc'                => array('~tc~text~/tc~', ''),
			'amp'               => array('&', '<span>&amp;</span>'),
			'bs'                => array('~bs~', '<span>&#92;</span>'),
			'hs'                => array('~hs~', '<span>&nbsp;</span>'),
			'amp2'              => array('~amp~', '<span>&amp;</span>'),
			'ldg'               => array('~ldq~', '<span>&ldquo;</span>'),
			'rdq'               => array('~rdq~', '<span>&rdquo;</span>'),
			'lsq'               => array('~lsq~', '<span>&lsquo;</span>'),
			'rsq'               => array('~rsq~', '<span>&rsquo;</span>'),
			'c'                 => array('~c~', '<span>&copy;</span>'),
			'dash1'             => array('~--~', '<span>&mdash;</span>'),
			'dash2'             => array(' -- ', '<span> &mdash; </span>'),
			'lt'                => array('~lt~', '<span>&lt;</span>'),
			'gt'                => array('~gt~', '<span>&gt;</span>'),
			//$content = preg_replace("/~([0-9]+)~/", "&#$1;", $content);

			//block level syntax
			'header1'           => array('!header1', '<h1 id=\'header1\'>header1</h1>'),
			'header2'           => array('!!header2', '<h2 id=\'header2\'>header2</h2>'),
			'header3'           => array('!!!header3', '<h3 id=\'header3\'>header3</h3>'),
			'header4'           => array('!!!!header4', '<h4 id=\'header4\'>header4</h4>'),
			'header5'           => array('!!!!!header5', '<h5 id=\'header5\'>header5</h5>'),
			'header6'           => array('!!!!!!header6', '<h6 id=\'header6\'>header6</h6>'),
			'header7'           => array('!!!!!!!header7', '<h6 id=\'header7\'>header7</h6>'),//max is 6

			'list1'             => array(),
			'list2'             => array(),
			'list3'             => array(),
			'list4'             => array(),

			'listnested1'       => array(),
			'listnested2'       => array(),

			'list_start_nested' => array(),

			//html output
			'html_not_allowed'  => array(),
			'html_allowed'  => array(),
			'complex_state_tracking' => array(),
			'no_line_skipping' => array(),
			'line_skipping_mixed' => array(),
			'odd_break_before_table_issue' => array("\n||test|test\ntest|test||\n", "<br/>\n<table class='wikitable'><tbody><tr><td class='wikicell'>test</td><td class='wikicell'>test</td></tr><tr><td class='wikicell'>test</td><td class='wikicell'>test</td></tr></tbody></table><br/>\n"),
		);
	}

	function capitol_wikilink()
	{
		global $prefs;
		$prefs['feature_wikiwords'] = 'y';
		$syntax = array(
			"FakePage", '<a href=\'tiki-index.php?page=FakePage\' title=\'FakePage\' class=\'wiki wiki_page\'>FakePage</a>'
		);

		$parsed = $this->parser->parse($syntax[0]);

		$prefs['feature_wikiwords'] = 'n';

		return array("parsed" => $parsed, "syntax" => $syntax);
	}

	function np_wikilink()
	{
		global $prefs;
		$prefs['feature_wikiwords'] = 'y';
		$syntax = array("))FakePage((", '<span>FakePage</span>');

		$parsed = $this->parser->parse($syntax[0]);

		$prefs['feature_wikiwords'] = 'n';

		return array("parsed" => $parsed, "syntax" => $syntax);
	}

	function wikilink_w_wiki()
	{
		global $prefs;
		$prefs['feature_wikiwords'] = 'y';
		$syntax = array(
			"((FakePage|__Fake Page__))"
		,
			'<a href=\'tiki-index.php?page=FakePage\' title=\'FakePage\' class=\'wiki wiki_page\'><strong>Fake Page</strong></a>'
		);

		$parsed = $this->parser->parse($syntax[0]);

		$prefs['feature_wikiwords'] = 'n';

		return array("parsed" => $parsed, "syntax" => $syntax);
	}


	function wikilink_w_table() //this isn't really a real use case test, but rather to check flexibility with wiki link parsing
	{
		global $prefs;
		$prefs['feature_wikiwords'] = 'y';
		$syntax = array(
			"((FakePage|||table|table|table||))"
		,
			'<a href=\'tiki-index.php?page=FakePage\' title=\'FakePage\' class=\'wiki wiki_page\'><table class=\'wikitable\'><tbody><tr><td class=\'wikicell\'>table</td><td class=\'wikicell\'>table</td><td class=\'wikicell\'>table</td></tr></tbody></table></a>'
		);

		$parsed = $this->parser->parse($syntax[0]);

		$prefs['feature_wikiwords'] = 'n';

		return array("parsed" => $parsed, "syntax" => $syntax);
	}

	function list1()
	{
		$syntax = array(
			"*line 1\n" .
			"*line 2\n" .
			"*line 3"
		,
			'<ul class=\'tikiList\' id=\'\'>' .
				'<li class=\'tikiListItem\'>line 1</li>' .
				'<li class=\'tikiListItem\'>line 2</li>' .
				'<li class=\'tikiListItem\'>line 3</li>' .
			'</ul>'
		);

		$parsed = $this->parser->parse($syntax[0]);
		$this->tryRemoveIdsFromHtmlList($parsed);

		return array("parsed" => $parsed, "syntax" => $syntax);
	}

	function list2()
	{
		$syntax = array(
			"#line 1\n" .
			"#line 2\n" .
			"#line 3"
		,
			'<ol class=\'tikiList\' id=\'\'>' .
				'<li class=\'tikiListItem\'>line 1</li>' .
				'<li class=\'tikiListItem\'>line 2</li>' .
				'<li class=\'tikiListItem\'>line 3</li>' .
			'</ol>'
		);

		$parsed = $this->parser->parse($syntax[0]);
		$this->tryRemoveIdsFromHtmlList($parsed);

		return array("parsed" => $parsed, "syntax" => $syntax);
	}

	function list3()
	{
		$syntax = array(
			"*line 1\n" .
			"*line 2\n" .
			"+line 3"
		,
			'<ul class=\'tikiList\' id=\'\'>' .
				'<li class=\'tikiListItem\'>line 1</li>' .
				'<li class=\'tikiListItem\'>line 2</li>' .
				'<li style=\'list-style-type:none;\'>line 3</li>' .
			'</ul>'
		);

		$parsed = $this->parser->parse($syntax[0]);
		$this->tryRemoveIdsFromHtmlList($parsed);

		return array("parsed" => $parsed, "syntax" => $syntax);
	}

	function list4()
	{
		$syntax = array(
			"+line 1\n" .
			"*line 2\n" .
			"+line 3"
		,
			'<ul class=\'tikiList\' id=\'\'>' .
				'<li class=\'tikiListItem\'>line 1</li>' .
				'<li class=\'tikiListItem\'>line 2</li>' .
				'<li style=\'list-style-type:none;\'>line 3</li>' .
			'</ul>'
		);

		$parsed = $this->parser->parse($syntax[0]);
		$this->tryRemoveIdsFromHtmlList($parsed);

		return array("parsed" => $parsed, "syntax" => $syntax);
	}

	function listnested1()
	{
		$syntax = array(
			"*line 1\n" .
			"**line 2\n" .
			"***line 3\n" .
			"**line 4\n" .
			"*line 5\n" .
			"**line 6\n" .
			"***line 7\n" .
			"**line 8\n" .
			"*line 9"
		,
			'<ul class=\'tikiList\' id=\'\'>' .
				'<li class=\'tikiListItem\'>line 1' .
					'<ul class=\'tikiList\' id=\'\'>' .
						'<li class=\'tikiListItem\'>line 2' .
							'<ul class=\'tikiList\' id=\'\'>' .
								'<li class=\'tikiListItem\'>line 3</li>' .
							'</ul>' .
						'</li>' .
						'<li class=\'tikiListItem\'>line 4</li>' .
					'</ul>' .
				'</li>' .
				'<li class=\'tikiListItem\'>line 5' .
					'<ul class=\'tikiList\' id=\'\'>' .
						'<li class=\'tikiListItem\'>line 6' .
							'<ul class=\'tikiList\' id=\'\'>' .
								'<li class=\'tikiListItem\'>line 7</li>' .
							'</ul>' .
						'</li>' .
						'<li class=\'tikiListItem\'>line 8</li>' .
					'</ul>' .
				'</li>' .
				'<li class=\'tikiListItem\'>line 9</li>' .
			'</ul>'
		);

		$parsed = $this->parser->parse($syntax[0]);
		$this->tryRemoveIdsFromHtmlList($parsed);

		return array("parsed" => $parsed, "syntax" => $syntax);
	}

	function listnested2()
	{
		$syntax = array(
			"*line 1\n" .
			"##line 2\n" .
			"##line 3\n" .
			"**-line 4"
		,
			'<ul class=\'tikiList\' id=\'\'>' .
				'<li class=\'tikiListItem\'>line 1' .
					'<ol class=\'tikiList\' id=\'\'>' .
						'<li class=\'tikiListItem\'>line 2</li>' .
						'<li class=\'tikiListItem\'>line 3</li>' .
					'</ol>' .
					'<br/><a id=\'flipperid\' href=\'javascript:flipWithSign("");\' class=\'link\'>[+]</a><ul class=\'tikiList\' id=\'\'>' .
						'<li class=\'tikiListItem\'>line 4</li>' .
					'</ul>' .
				'</li>' .
			'</ul>'
		);

		$parsed = $this->parser->parse($syntax[0]);
		$this->tryRemoveIdsFromHtmlList($parsed);
		$parsed = preg_replace('/flipperid[0-9]+/', 'flipperid', $parsed);
		$parsed = preg_replace("/flipWithSign[(][\"']id[0-9]+[\"'][)]/", "flipWithSign(\"\")", $parsed);

		return array("parsed" => $parsed, "syntax" => $syntax);
	}

	function list_start_nested()
	{
		$syntax = array(
			"**test
*test
**test
*test
***test
****test
*test"
		,
			'<ul class=\'tikiList\' id=\'\'>' .
				'<li style=\'list-style-type:none;\'>' .
					'<ul class=\'tikiList\' id=\'\'>' .
						'<li class=\'tikiListItem\'>test</li>' .
					'</ul>'.
				'</li>'.
				'<li class=\'tikiListItem\'>test'.
					'<ul class=\'tikiList\' id=\'\'>' .
						'<li class=\'tikiListItem\'>test</li>'.
					'</ul>' .
				'</li>'.
				'<li class=\'tikiListItem\'>test'.
					'<ul class=\'tikiList\' id=\'\'>'.
						'<li style=\'list-style-type:none;\'>'.
							'<ul class=\'tikiList\' id=\'\'>'.
								'<li class=\'tikiListItem\'>test'.
									'<ul class=\'tikiList\' id=\'\'>'.
										'<li class=\'tikiListItem\'>test</li>'.
									'</ul>'.
								'</li>'.
							'</ul>'.
						'</li>'.
					'</ul>'.
				'</li>'.
				'<li class=\'tikiListItem\'>test</li>'.
			'</ul>'
		);

		$parsed = $this->parser->parse($syntax[0]);
		$this->tryRemoveIdsFromHtmlList($parsed);
		$parsed = preg_replace('/flipperid[0-9]+/', 'flipperid', $parsed);
		$parsed = preg_replace("/flipWithSign[(][\"']id[0-9]+[\"'][)]/", "flipWithSign(\"\")", $parsed);

		return array("parsed" => $parsed, "syntax" => $syntax);
	}

	function html_not_allowed()
	{

		$is_html = $this->parser->getOption('is_html');

		$this->parser->setOption(array('is_html' => false));
		$syntax = array(
			"\n" .
			"<div>\n" .
				"html not allowed\n" .
				"<script>\n" .
				"</script>\n" .
			"</div>\n" . //we should get a break here, between block tags
			"<script>\n" .
			"</script>\n" .
			"<span>give me a break</span>\n"
		,
			"<br/>\n" .
			"&lt;div&gt;\n" .
				"html not allowed\n" .
				"&lt;script&gt;\n" .
				"&lt;/script&gt;\n" .
			"&lt;/div&gt;\n" . //<-- note, break here
			"&lt;script&gt;\n" .
			"&lt;/script&gt;<br/>\n" .
			"&lt;span&gt;give me a break&lt;/span&gt;<br/>\n"
		);

		$parsed = $this->parser->parse($syntax[0]);

		$result = array("parsed" => $parsed, "syntax" => $syntax);

		$this->parser->setOption(array('is_html' => $is_html));

		return $result;
	}

	function html_allowed()
	{
		$this->parser->setOption(array('is_html' => true));

		$syntax = array(
			"\n" .
			"<div>html allowed\n" .
				"<script>\n\n\n</script>\n" .
			"</div>\n\n"
		,
			"<br/>\n" .
			"<div>html allowed\n" .
				"<script>\n\n\n</script>\n" .
			"</div>\n" .
			"<br/>\n"
		);

		$parsed = $this->parser->parse($syntax[0]);

		$result = array("parsed" => $parsed, "syntax" => $syntax);

		$this->parser->resetOption();

		return $result;
	}

	function complex_state_tracking()
	{
		$this->parser->setOption(array('is_html' => true));

		$syntax = array(
			"__Here\n" .
				"''we are test\n" .
					"^testing state^\n" .
				"''\n" .
				"===Tracking===\n" .
				"--it can get--\n" .
				"::complex at times, so we want it\n" .
					"~~purple:to be right\n" .
						"^even in complex scenarios^\n" .
						"so that it is easy on the end user~~\n" .
					"See how we can handle multi lines easily?\n" .
				"::.\n" .
				"This should be bold\n\n"
			,
				"__Here<br/>\n" .
					"<em>we are test<br/>\n" .
						"<div class='simplebox'>testing state</div><br/>\n" .
					"</em><br/>\n" .
					"<u>Tracking</u><br/>\n" .
					"<strike>it can get</strike><br/>\n" .
					'<div style=\'text-align: center;\'>complex at times, so we want it' . "<br/>\n" .
						"<span style='color:purple;'>to be right<br/>\n" .
						"<div class='simplebox'>even in complex scenarios</div><br/>\n" .
						"so that it is easy on the end user</span><br/>\n" .
						"See how we can handle multi lines easily?<br/>\n" .
					"</div>.<br/>\n" .
					"This should be bold<br/>\n" .
					"<br/>\n"
			); //this is detected as open and auto closed.

		$parsed = $this->parser->parse($syntax[0]);

		$result = array("parsed" => $parsed, "syntax" => $syntax);

		//$this->parser->resetOption();

		return $result;
	}

	function no_line_skipping()
	{
		//$this->parser->setOption(array('is_html' => true));

		$syntax = array(
			"{DIV()}\n" .
			"{DIV()}\n" .
			"{DIV()}\n" .
			"{DIV()}\n" .
			"{DIV}{DIV}{DIV}{DIV}\n" .
			";foo:foo definition\n" .
			";foo2:foo2 definition\n" .
			"[[__bold__]\n" .
			"Test" .
			"''Test Italics''\n"
		,
			"<div  >\n" .
			"<div  >\n" .
			"<div  >\n" .
			"<div  >\n" .
			"</div></div></div></div>" .
			'<dl class=\'tikiList\' id=\'\'><dt>foo</dt><dd>foo definition</dd>' .
			"<dt>foo2</dt><dd>foo2 definition</dd>" .
			"</dl>\n" .
			"<span>[<strong>bold</strong>]</span><br/>\n" .
			"Test<em>Test Italics</em><br/>\n"
		);


		$parsed = $this->parser->parse($syntax[0]);

		$this->tryRemoveIdsFromHtmlList($parsed);

		$result = array("parsed" => $parsed, "syntax" => $syntax);

		$this->parser->resetOption();

		return $result;
	}

	function line_skipping_mixed()
	{
		$syntax = array(
			"!header\n" .
			"test\n" .
			"test\n" .
			"test\n" .
			"*test\n" .
			"*test\n" .
			"*test\n" .
			"*test\n" .
			"*test\n" .
			"*test\n" .
			"test\n" .
			"test\n" .
			"test\n" .
			"!header\n" .
			"!header\n" .
			"!header\n" .
			"!header\n" .
			"test\n" .
			"test\n"
		,
			'<h1 id=\'header\'>header</h1>' . "\n" .
			'test<br/>' . "\n" .
			'test<br/>' . "\n" .
			'test' .
			'<ul class=\'tikiList\' id=\'\'>' .
			'<li class=\'tikiListItem\'>test</li>' .
			'<li class=\'tikiListItem\'>test</li>' .
			'<li class=\'tikiListItem\'>test</li>' .
			'<li class=\'tikiListItem\'>test</li>' .
			'<li class=\'tikiListItem\'>test</li>' .
			'<li class=\'tikiListItem\'>test</li>' .
			'</ul>' . "\n" .
			'test<br/>' . "\n" .
			'test<br/>' . "\n" .
			'test' .
			'<h1 id=\'header1\'>header</h1>' .
			'<h1 id=\'header2\'>header</h1>' .
			'<h1 id=\'header3\'>header</h1>' .
			'<h1 id=\'header4\'>header</h1>' . "\n" .
			'test<br/>' . "\n" .
			'test<br/>' . "\n"

		);

		$parsed = $this->parser->parse($syntax[0]);
		$this->tryRemoveIdsFromHtmlList($parsed);

		return array("parsed" => $parsed, "syntax" => $syntax);
	}
}

