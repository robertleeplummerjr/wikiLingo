<?php
namespace WikiLingo\Test\Expression;

use WikiLingo\Test\Base;

class Strike extends Base
{
	public function __construct()
	{
		$this->source = "--foo--";

		$this->expected = "<strike>foo</strike>";
	}
}