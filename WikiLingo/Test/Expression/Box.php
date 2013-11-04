<?php
namespace WikiLingo\Test\Expression;

use WikiLingo\Test\Base;

class Box extends Base
{
	public function __construct()
	{

		$this->source =
            "^foo^\n" .
            "^ Another Box ^";

		$this->expected =
            "<div class='box'>foo</div><br/>" .
            "<div class='box'><span class='whitespace'> </span>Another Box </div>";

	}
}
