<?php
namespace WYSIWYGWikiLingo\SyntaxGenerator;

class Block extends Base
{
	public function generate()
	{

		$newLineChar = "\n";
		$hasLineBefore = $this->expression->parameter("data-has-line-before");
		if ($hasLineBefore == "true" && $this->parser->inputAdjustedForLineAtBeginning == false && $this->index == 1) {
			$newLineChar = "\n\n";
			$this->parser->inputAdjustedForLineAtBeginning = true;
		}
		$this->parsed->isBlock = true;
		$trailer = "";

		switch ($this->expression->parameter('data-block-type'))
		{
			case "unorderedListItem":
				$trailer = $newLineChar . str_repeat("*", $this->parser->renderer->depth);
				break;
			case "orderedListItem":
				$trailer = $newLineChar . str_repeat("#", $this->parser->renderer->depth);
				break;
			case "header":
				$trailer = $newLineChar . str_repeat("", $this->parser->renderer->depth);
				break;
		}

		return $trailer . $this->expression->renderedChildren;
	}
}