<?php
namespace WYSIWYGWikiLingo\Test\SyntaxGenerator;

use WYSIWYGWikiLingo\Test\Base;

class Center extends Base
{
	public function __construct()
	{

		$this->source = "::foo:: :: foo 2 ::";

		$this->expected = '<div class="center">foo</div> <div class="center"> foo 2 </div>';

	}
}
