<?php
namespace WYSIWYGWikiLingo;

use WikiLingo;

/**
 * Class Parsed
 * @package WYSIWYGWikiLingo
 */
class Parsed extends WikiLingo\Parsed
{
	public $isBlock = false;

    /**
     *
     */
    public function setExpression()
    {
        $class = "WYSIWYGWikiLingo\\Expression\\$this->type";
        if (class_exists($class)) {
            $expression = new $class($this);
            if ($expression) {
                $this->expression =& $expression;
            }
        }
    }
}