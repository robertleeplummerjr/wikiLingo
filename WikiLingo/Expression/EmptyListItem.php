<?
namespace WikiLingo\Expression;

class EmptyListItem extends ListItem
{
    function __construct($lineNo)
    {
        $this->lineNo = $lineNo;
    }

    public function render(&$parser)
    {
        $helper = $parser->helper('li');
        $helper->classes[] = 'empty';
        $helper->staticChildren[] = $this->renderedChildren;
        return $helper->render();
    }
}