<?php
namespace WikiLingo\Plugin;

use WikiLingo;
use Types\Type;

/**
 * Class Base
 * @package WikiLingo\Plugin
 */
abstract class Base
{

	public $label;
	public $description;

    public $expressionType = 'WikiLingo\\Expression\\Plugin';
	public $parameters = array();
	public $attributes = array();
    public $detailedAttributes = array(
        'contenteditable' => 'false'
    );
    public $htmlTagType = 'span';
    public $wysiwygTagType = '';
    public $permissibleParents = array();
    public $permissibleChildren = array();
    public $minChildCount = 0;
    public $events;

	public $permissible = true;
	public $hasHtmlBody = true;
	public $bodyIsAutoGenerated = false;
	public $inLineOnly = false;
	public $draggable = true;
	public $allowLines = false;
    public $allowWhiteSpace = false;

    public $style = array(
        '@keyframes' => true,
        'animation' => true,
        'animation-name' => true,
        'animation-duration' => true,
        'animation-timing-function' => true,
        'animation-delay' => true,
        'animation-iteration-count' => true,
        'animation-direction' => true,
        'animation-play-state' => true,
        //'background' => true,
        //'background-attachment' => true,
        'background-color' => true,
        'background-image' => true,
        //'background-position' => true,
        'background-repeat' => true,
        'background-clip' => true,
        'background-origin' => true,
        'background-size' => true,
        'border' => true,
        'border-bottom' => true,
        'border-bottom-color' => true,
        'border-bottom-style' => true,
        'border-bottom-width' => true,
        'border-color' => true,
        'border-left' => true,
        'border-left-color' => true,
        'border-left-style' => true,
        'border-left-width' => true,
        'border-right' => true,
        'border-right-color' => true,
        'border-right-style' => true,
        'border-right-width' => true,
        'border-style' => true,
        'border-top' => true,
        'border-top-color' => true,
        'border-top-style' => true,
        'border-top-width' => true,
        'border-width' => true,
        'outline' => true,
        'outline-color' => true,
        'outline-style' => true,
        'outline-width' => true,
        'border-bottom-left-radius' => true,
        'border-bottom-right-radius' => true,
        'border-image' => true,
        'border-image-outset' => true,
        'border-image-repeat' => true,
        'border-image-slice' => true,
        'border-image-source' => true,
        'border-image-width' => true,
        'border-radius' => true,
        'border-top-left-radius' => true,
        'border-top-right-radius' => true,
        'box-decoration-break' => true,
        'box-shadow' => true,
        'overflow-x' => true,
        'overflow-y' => true,
        'overflow-style' => true,
        'rotation' => true,
        'rotation-point' => true,
        'color-profile' => true,
        'opacity' => true,
        'rendering-intent' => true,
        'bookmark-label' => true,
        'bookmark-level' => true,
        'bookmark-target' => true,
        'float-offset' => true,
        'hyphenate-after' => true,
        'hyphenate-before' => true,
        'hyphenate-character' => true,
        'hyphenate-lines' => true,
        'hyphenate-resource' => true,
        'hyphens' => true,
        'image-resolution' => true,
        'marks' => true,
        'string-set' => true,
        'height' => true,
        'max-height' => true,
        'max-width' => true,
        'min-height' => true,
        'min-width' => true,
        'width' => true,
        'box-align' => true,
        'box-direction' => true,
        'box-flex' => true,
        'box-flex-group' => true,
        'box-lines' => true,
        'box-ordinal-group' => true,
        'box-orient' => true,
        'box-pack' => true,
        'font' => true,
        'font-family' => true,
        'font-size' => true,
        'font-style' => true,
        'font-variant' => true,
        'font-weight' => true,
        '@font-face' => true,
        'font-size-adjust' => true,
        'font-stretch' => true,
        'content' => true,
        'counter-increment' => true,
        'counter-reset' => true,
        'quotes' => true,
        'crop' => true,
        'move-to' => true,
        'page-policy' => true,
        'grid-columns' => true,
        'grid-rows' => true,
        'target' => true,
        'target-name' => true,
        'target-new' => true,
        'target-position' => true,
        'alignment-adjust' => true,
        'alignment-baseline' => true,
        'baseline-shift' => true,
        'dominant-baseline' => true,
        'drop-initial-after-adjust' => true,
        'drop-initial-after-align' => true,
        'drop-initial-before-adjust' => true,
        'drop-initial-before-align' => true,
        'drop-initial-size' => true,
        'drop-initial-value' => true,
        'inline-box-align' => true,
        'line-stacking' => true,
        'line-stacking-ruby' => true,
        'line-stacking-shift' => true,
        'line-stacking-strategy' => true,
        'text-height' => true,
        'list-style' => true,
        'list-style-image' => true,
        'list-style-position' => true,
        'list-style-type' => true,
        'margin' => true,
        'margin-bottom' => true,
        'margin-left' => true,
        'margin-right' => true,
        'margin-top' => true,
        'marquee-direction' => true,
        'marquee-play-count' => true,
        'marquee-speed' => true,
        'marquee-style' => true,
        'column-count' => true,
        'column-fill' => true,
        'column-gap' => true,
        'column-rule' => true,
        'column-rule-color' => true,
        'column-rule-style' => true,
        'column-rule-width' => true,
        'column-span' => true,
        'column-width' => true,
        'columns' => true,
        'padding' => true,
        'padding-bottom' => true,
        'padding-left' => true,
        'padding-right' => true,
        'padding-top' => true,
        'fit' => true,
        'fit-position' => true,
        'image-orientation' => true,
        'page' => true,
        'size' => true,
        'bottom' => true,
        'clear' => true,
        'clip' => true,
        'cursor' => true,
        'display' => true,
        'float' => true,
        'left' => true,
        'overflow' => true,
        'position' => true,
        'right' => true,
        'top' => true,
        'visibility' => true,
        'z-index' => true,
        'orphans' => true,
        'page-break-after' => true,
        'page-break-before' => true,
        'page-break-inside' => true,
        'widows' => true,
        'ruby-align' => true,
        'ruby-overhang' => true,
        'ruby-position' => true,
        'ruby-span' => true,
        'mark' => true,
        'mark-after' => true,
        'mark-before' => true,
        'phonemes' => true,
        'rest' => true,
        'rest-after' => true,
        'rest-before' => true,
        'voice-balance' => true,
        'voice-duration' => true,
        'voice-pitch' => true,
        'voice-pitch-range' => true,
        'voice-rate' => true,
        'voice-stress' => true,
        'voice-volume' => true,
        'border-collapse' => true,
        'border-spacing' => true,
        'caption-side' => true,
        'empty-cells' => true,
        'table-layout' => true,
        'color' => true,
        'direction' => true,
        'letter-spacing' => true,
        'line-height' => true,
        'text-align' => true,
        'text-decoration' => true,
        'text-indent' => true,
        'text-transform' => true,
        'unicode-bidi' => true,
        'vertical-align' => true,
        'white-space' => true,
        'word-spacing' => true,
        'hanging-punctuation' => true,
        'punctuation-trim' => true,
        'text-align-last' => true,
        'text-justify' => true,
        'text-outline' => true,
        'text-overflow' => true,
        'text-shadow' => true,
        'text-wrap' => true,
        'word-break' => true,
        'word-wrap' => true,
        'transform' => true,
        'transform-origin' => true,
        'transform-style' => true,
        'perspective' => true,
        'perspective-origin' => true,
        'backface-visibility' => true,
        'transition' => true,
        'transition-property' => true,
        'transition-duration' => true,
        'transition-timing-function' => true,
        'transition-delay' => true,
        'appearance' => true,
        'box-sizing' => true,
        'icon' => true,
        'nav-down' => true,
        'nav-index' => true,
        'nav-left' => true,
        'nav-right' => true,
        'nav-up' => true,
        'outline-offset' => true,
        'resize' => true,
    );

    /**
     * @param $plugin
     * @return null
     */
    public function getParent( &$plugin )
    {
        if (isset($plugin->parent)) {
            return $plugin->parent;
        } else {
            return null;
        }
    }

    /**
     * @param $attributes
     */
    protected function attributeDefaults(&$attributes)
	{
		$defaults = array();
		foreach ($this->attributes as $param => $setting) {
			if (!empty($setting)) {
                $defaults[$param] = $setting;
			}
		}

        $attributes = array_merge($defaults, $attributes);
	}

    /**
     * @param $parameters
     * @param $parser
     * @return array
     */
    public function parameterValues($parameters, $parser)
    {
        $result = array();
        foreach ($this->parameters as $param => $setting) {
            $setting->label = $parser->events->triggerTranslate($setting->label, 'plugin.parameter');
            if (!empty($parameters[$param])) {
                $setting->value = $parameters[$param];
            }
            $result[$param] = new Parameter($setting->label, $setting->value, $setting->type);
        }
	    return $result;
    }

    /**
     * @param $cssStyles
     * @return string
     */
    protected function stylize(&$cssStyles)
    {
        $style = '';
        foreach ($cssStyles as $cssStyle => $setting) {
            if (!empty($cssStyle) && isset($this->style[$cssStyle])) {
                $style .= $cssStyle . ':' . trim($setting . '', "'") . ';';
            }
        }
        return $style;
    }

    /**
     * @param WikiLingo\Expression\Plugin $plugin
     * @param string $body
     * @param $parser
     * @return string
     */
    public function render(WikiLingo\Expression\Plugin &$plugin, &$body = '', &$parser)
    {
	    $elementName = (
            $parser->wysiwyg
            && !empty($this->wysiwygTagType)
            ?
                $this->wysiwygTagType
            :
                $this->htmlTagType
        );

        $element = Type::Element($parser->element($this->expressionType, $elementName));
        $element->classes[] = (!empty($this->attributes['class']) ? $this->attributes['class'] . ' ' : '') . $plugin->type;
        $element->attributes['id'] = $id = $plugin->id();

	    $parser->plugins[] = $id;

        $style = $this->stylize($plugin->parametersRaw);
        if (!empty($style)) {
            $element->attributes['style'] = $style;
        }

        $this->attributeDefaults($plugin->attributes);

        foreach ($plugin->attributes as $attribute => $value) {
            $element->attributes[$attribute] = $value;
        }

	    if ($parser->wysiwyg) {
		    Type::Scripts($parser->scripts)->addScript("");
	    }
        $element->detailedAttributes += $this->detailedAttributes;
        $element->detailedAttributes['data-plugin-type'] = $plugin->type;
        $element->detailedAttributes['data-draggable'] = ($this->draggable ? 'true' : 'false');
        $element->detailedAttributes['data-plugin-parameters'] = (empty($plugin->parametersRaw) ? null : urlencode(json_encode($plugin->parametersRaw)));
        $element->detailedAttributes['data-in-line'] = ($plugin->inLine ? 'true' : 'false');

        if ($plugin->inLine) {
            $element->detailedAttributes['contenteditable'] = 'false';

	        if ($this->hasHtmlBody == false && !$this->bodyIsAutoGenerated) {
		        $element->setInline();
	        }
        }

        if (!empty($body)) {
            $element->staticChildren[] = $body;
        }

        $renderedPluginElement = $element->render();

        return $renderedPluginElement;
    }
}
