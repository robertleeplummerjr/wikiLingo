<?php
namespace WikiLingo\Plugin;

use WikiLingo;
use WikiLingo\Utilities\Parameter;
use WikiLingo\Expression\BlockType;

/**
 * Class Toc
 * @package WikiLingo\Plugin
 */
class Toc extends Base
{
    /**
     *
     */
    public function __construct()
    {
        $this->label = 'Table of Contents';
        $this->bodyIsAutoGenerated = true;
        $this->htmlTagType = 'div';
        $this->parameters['ordered'] = new Parameter('Ordered', true);
    }

    /**
     * @param WikiLingo\Expression\Plugin $plugin
     * @param string $body
     * @param WikiLingo\Renderer $renderer
     * @param WikiLingo\Parser $parser
     * @return string
     */
    public function render(WikiLingo\Expression\Plugin &$plugin, &$body, &$renderer, &$parser)
    {
	    $result = '';
        if (!isset($parser->types['WikiLingo\Expression\BlockType\Header'])) {
	        $rendered = parent::render($plugin, $result, $parser);
	        return $rendered;
        }

        /**
         * @var WikiLingo\Expression\BlockType\Header[]
         */
        $headers =& $parser->types['WikiLingo\Expression\BlockType\Header'];
        $orderedString = $plugin->parameter('ordered');
        $ordered = $orderedString == "true";

        /**
         * @var WikiLingo\Expression\BlockType\ListContainer
         */
        $container = null;

	    foreach($headers as &$header)
	    {
		    $header->pointer = true;
		    $block =& $header->block;

		    if ($container === null) {
                $container = new BlockType\ListContainer($block, $ordered);
		    } else {
                $container->add(new BlockType\ListItem($container, $block));
		    }
	    }
	    $result = $container->render($renderer, $parser);
	    foreach($headers as &$header)
	    {
		    $header->pointer = false;
	    }

        $rendered = parent::render($plugin, $result, $renderer, $parser);
        return $rendered;
    }
}