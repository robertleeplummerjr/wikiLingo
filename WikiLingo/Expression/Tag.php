<?php
class WikiLingo_Expression_Tag extends WikiLingo_Expression
{
    public $hasChildren = false;

    function __construct($tagOpen, $tagClose = '', $content = '')
    {
        $this->stringBefore = $tagOpen;
        $this->stringAfter = $tagClose;

        if (!empty($content)) {
            $this->hasChildren = true;
            if (is_string($content)) {
                $this->staticContent = $content;
            } else {
                $this->children[] = $content;
                $this->childrenCount++;
            }
        }
    }

    function addSibling(&$sibling)
    {
        return parent::addSibling($sibling);
    }
}