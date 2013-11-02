<?php

namespace WikiLingo\Expression;

use WikiLingo;
use Types\Type;

class WikiLinkType extends Base
{
    public $type;
    public $link;

    function __construct(WikiLingo\Parsed &$parsed)
    {
        $this->parsed =& $parsed;
        $this->type = $parsed->text;
    }

    public function render(&$parser)
    {
        $element = Type::Element($parser->element(__CLASS__, 'a'));

        $sides = explode("|", $this->renderedChildren);

        if (isset($sides[1])) {
            $text = $sides[1];
            $href = $sides[0];
        } else {
            $text = $this->renderedChildren;
            $href = $this->renderedChildren;
        }

        $element->staticChildren[] = $text;
        $element->attributes['href'] = $href;
        $element->detailedAttributes['data-wiki-link-type'] = $this->type;

        $parser->trigger(__CLASS__, "render", $element);

        return $element->render();
    }
}