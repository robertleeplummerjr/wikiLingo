<?php

namespace WikiLingo\Plugin;

use WikiLingo;
use WikiLingo\Utilities\Parameter;

/**
 * Class Slider
 * @package WikiLingo\Plugin
 */
class Slider extends Base
{
    /**
     *
     */
    public function __construct()
    {
        $this->label = 'Slider';

        $this->htmlTagType = 'li';
        $this->draggable = false;

        $this->parameters['title'] = new Parameter('Title', '');
    }

    /**
     * @param WikiLingo\Expression\Plugin $plugin
     * @param string $body
     * @param WikiLingo\Parser $parser
     * @return string
     */
    public function render(WikiLingo\Expression\Plugin &$plugin, &$body, &$parser)
	{
		$plugin->attributes['title'] = htmlspecialchars($plugin->parameter('title'));

		$slider = parent::render($plugin, $body, $parser);

		return $slider;
	}
} 