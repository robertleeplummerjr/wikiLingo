<?php
namespace WYSIWYGWikiLingo\Test\SyntaxGenerator;

use WikiLingoWYSIWYG;
use WikiLingo\Test\Expression as WikiLingoTestExpression;
use WikiLingo\Expression;
use WikiLingo\Test\Base;

class NumberedList3 extends Base
{
    public function __construct(WikiLingoWYSIWYG\Parser &$parser)
    {
	    $this->expected = (new WikiLingoTestExpression\NumberedList3())->source;
	    $this->source = $parser->parse($this->expected);
    }
}