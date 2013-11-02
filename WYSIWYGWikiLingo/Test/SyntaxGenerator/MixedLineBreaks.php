<?php
namespace WYSIWYGWikiLingo\Test\SyntaxGenerator;

use WYSIWYGWikiLingo\Test\Base;

class MixedLineBreaks extends Base
{
	public function __construct()
	{
		$this->source =
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
			"test\n";

		$this->expected =
            "<h1 id='header'>header</h1>" .
            "<br/>\n" .
            "test<br/>\n" .
			"test<br/>\n" .
            "test" .
            '<ul>' .
                '<li>test</li>' .
                '<li>test</li>' .
                '<li>test</li>' .
                '<li>test</li>' .
                '<li>test</li>' .
                '<li>test</li>' .
            '</ul>' .
            "<br/>\n" .
            "test<br/>\n" .
            "test<br/>\n" .
            "test" .
            "<h1 id='header1'>header</h1>" .
            "<h1 id='header2'>header</h1>" .
            "<h1 id='header3'>header</h1>" .
            "<h1 id='header4'>header</h1>" .
            "<br/>\n" .
            "test<br/>\n" .
            "test<br/>\n";
	}
}