<?php
namespace WYSIWYGWikiLingo\Test\SyntaxGenerator;

use WYSIWYGWikiLingo\Test\Base;

class WikiLinkWithTable extends Base
{
	public function __construct()
	{

		$this->source = "((FakePage|||table|table|table||))";

		$this->expected = "<a href='FakePage'>||table|table|table||</a>";

	}
}