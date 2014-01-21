<?php
/**
 * Created by PhpStorm.
 * User: robert
 * Date: 1/2/14
 * Time: 10:27 PM
 */

namespace WikiLingo\Expression;

use FLP\Events as FutureLinkProtocolEvents;
use WikiLingo;
use WikiLingo\Event;
use FLP;
use Phraser;
use WikiLingo\Expression\PastLink\Sender;

/**
 * Class PastLink
 * @package WikiLingo\Expression
 */
class PastLink extends Base
{
    public static $loaded = false;
    public static $ui;
    public static $existingCount = 0;
    public static $renderedCount = 0;
	public $past;
    public $phrase;

    /**
     * @param WikiLingo\Parsed $parsed
     */
    public function __construct(WikiLingo\Parsed &$parsed)
	{
		$this->parsed =& $parsed;

		//"@FLP(past)" to "past"
		$this->past = json_decode(urldecode(substr($parsed->text, 5, -1)));
        self::$existingCount++;
	}

    /**
     * @param $parser
     * @return String
     */
    public function render(&$parser)
	{
        if ( !$parser->wysiwyg ) {
            self::$renderedCount++;

            //FIRST
            //Bind initial render so that PastLink::$ui is set, this is only done once per parser render
            if ( self::$renderedCount == 1 ) {
                Sender::Setup();
                $parser->events->bind(new Event\PostRender(function(&$rendered) {
                    PastLink::$ui = new FLP\UI($rendered);
                }));
            }

            //EVERY
            //each child needs to be sent as a phrase to the ui
            $children = $this->renderedChildren;
            $parser->events->bind(new Event\PostRender(function(&$rendered) use ($children) {
                PastLink::$ui->addPhrase(new Phraser\Phrase($children));
            }));

            FLP\Events::triggerMetadataLookup('', $value);
            $pair = new FLP\Pair($this->past, $value);
            FLP\Pairs::add($pair);

            //LAST
            //if this is the last item in the count, then setup the post-render, reset the counters
            if (self::$existingCount == self::$renderedCount) {
                self::$existingCount = self::$renderedCount = 0;
                $parser->events->bind(new Event\PostRender(function(&$rendered) {
                    $rendered = PastLink::$ui->render();
                }));

                FLP\SendToPast::send();
            }
        }

        $element = $parser->element(__CLASS__, 'span');
        $element->staticChildren[] = $this->renderedChildren;
        $element->detailedAttributes['data-past'] = $this->past;
        $rendered = $element->render();
        return $rendered;
    }
}