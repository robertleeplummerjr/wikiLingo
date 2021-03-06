<?php
namespace WikiLingo\Expression\BlockType;

use WikiLingo;

/**
 * Class DescriptionListItem
 * @package WikiLingo\Expression
 */
class DescriptionListItem
{
	public $term;
	public $description;

    /**
     * @param $term
     * @param $description
     */
    public function __construct($term, $description)
	{
		$this->term = $term;
		$this->description = $description;
	}

    /**
     * @param WikiLingo\Renderer $renderer
     * @param WikiLingo\Parser $parser
     * @return string
     */
    public function render($renderer, $parser)
	{
		$elementTerm = $renderer->element(__CLASS__, 'dt');
		$elementTerm->staticChildren[] = $this->term;

		$elementDescription = $renderer->element(__CLASS__, 'dd');
		$elementDescription->staticChildren[] = $this->description;

		return $elementTerm->render() . $elementDescription->render();
	}
}