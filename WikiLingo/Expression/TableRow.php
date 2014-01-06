<?php
namespace WikiLingo\Expression;

/**
 * Class TableRow
 * @package WikiLingo\Expression
 */
class TableRow extends Base
{
    /**
     * @var
     */
    public $columns;

    /**
     * @param \WikiLingo\Parsed $row
     */
    public function __construct($row)
    {
        $this->columns = $row->columns;
    }

    /**
     * @param $parser
     * @return mixed
     */
    public function render(&$parser)
    {
        $element = $parser->element(__CLASS__, "tr");
        foreach ($this->columns as $column) {
            $element->staticChildren[] = $column->render($parser);
        }
        return $element->render();
    }
}