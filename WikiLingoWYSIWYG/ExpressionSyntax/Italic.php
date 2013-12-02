<?php
namespace WikiLingoWYSIWYG\ExpressionSyntax;

use WikiLingoWYSIWYG;

class Italic extends Base
{
    public $icon = '';
    public $iconClass = 'icon-italic';
    public $group = 'common';

    public function example(WikiLingoWYSIWYG\Parser &$parser)
    {
        return "''expression''";
    }
}