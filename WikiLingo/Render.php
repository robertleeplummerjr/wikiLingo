<?php

namespace WikiLingo;

use Types\Type;

class Render
{
	public $depth = 0;
	public $parser;

	function __construct(&$parser)
	{
		$this->parser = $parser;
	}

	public function render(Parsed &$parsed)
	{
        Type::Events($this->parser->events)
            ->triggerParsedRenderPermission($parsed);

        if (!$parsed->expressionPermissible) {
            if (isset($parsed->stateEnd)) {
                $syntax = $this->parser->syntax($parsed->loc, $parsed->stateEnd->loc);
            } else {
                $syntax = $this->parser->syntax($parsed->loc);
            }
            Type::Events($this->parser->events)
                ->triggerParsedRenderBlocked($parsed, $syntax);
            return $syntax;
        }

		//children are directly part of the family as a visible child
        $renderedChildren = '';
		if ($parsed->childrenLength > 0) {
			$isParent = false;
			if (
				isset($parsed->expression->isParent)
				&& ($isParent = $parsed->expression->isParent) == true) {
				$this->depth++;
			}

	        foreach ($parsed->children as &$child) {
	            $renderedChildren .= $this->render($child);
	        }

			if ($isParent) {
				$this->depth--;
			}
		}

		$renderedCousins = '';
		foreach ($parsed->cousins as &$cousin) {
			$renderedCousins .= $this->render($cousin);
		}

        $parsed->expression->renderedChildren =& $renderedChildren;
		if (isset($parsed->expression) && method_exists($parsed->expression, 'render')) {
			$rendered = $parsed->expression->render($this->parser, $this);
		} else {
			$rendered = '';
		}

		//siblings are directly part of the family as a visible sibling
		$renderedSiblings = '';
		foreach ($parsed->siblings as &$sibling) {
			$renderedSiblings .= $this->render($sibling);
			if ($parsed->parent != null) {
				$parsed->parent->children[] =& $sibling;
			}
		}

		$renderedLines = '';
		foreach ($parsed->lines as &$line) {
			$renderedLines .= $this->render($line);
		}

        return $rendered . $renderedSiblings . $renderedLines . $renderedCousins;
	}
}