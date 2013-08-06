<?php
namespace WYSIWYGWikiLingo;

class Parser extends Definition
{
    public function preParse()
    {
        $this->typeIndex = [];
        $this->typeStack = [];
        $this->type = [];
        $this->lastBlockWasFrom = '';
        $this->firstLineType = '';
        $this->firstLineHandled = false;
        $this->processedTypeStack = [];

        $this->htmlElementStack = [];
        $this->htmlElementStackCount = [];
        $this->htmlElementsStackCount = 0;
        $this->htmlElementsStack = [];
    }

    public function parse($input)
    {
        if (empty($input)) {
            return $input;
        }

        $this->parsing = true;
        $this->preParse();
        $parsed = parent::parse($input);
        $this->parsing = false;
        $output = $this->postParse($parsed);

        return $output;
    }

    public function postParse(Parsed &$parsed)
    {
        /* While parsing we add a "\n" to the beginning of all block types, but if the input started with a block char,
         * it is also valid, but treated and restored as with "\n" just before it, here we remove that extra "\n" but
         * only if we are a block, which are determined from $this->blockChars
        */
        $render = new Render($this);
        return $render->render($parsed);

        if ($this->firstLineType == 'block' && $this->isStaticTag == false) {
            foreach($this->blockSyntax as $syntax) {
                if (strpos($output, $syntax) === 0) {
                    $output = substr($output, 1); //we only want to get rid of "\n", not the whole syntax
                }
            }
        }

    }
}