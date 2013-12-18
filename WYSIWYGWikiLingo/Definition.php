<?php
/* Jison generated parser */
namespace WYSIWYGWikiLingo;
use Exception;


use WikiLingo;

class Definition extends Base
{
    public $symbols = array();
    public $terminals = array();
    public $productions = array();
    public $table = array();
    public $defaultActions = array();
    public $version = '0.3.12';
    public $debug = false;
    public $none = 0;
    public $shift = 1;
    public $reduce = 2;
    public $accept = 3;

    function trace()
    {

    }

    function __construct()
    {
        //Setup Parser
        
			$symbol0 = new ParserSymbol("accept", 0);
			$symbol1 = new ParserSymbol("end", 1);
			$symbol2 = new ParserSymbol("error", 2);
			$symbol3 = new ParserSymbol("wiki", 3);
			$symbol4 = new ParserSymbol("content", 4);
			$symbol5 = new ParserSymbol("EOF", 5);
			$symbol6 = new ParserSymbol("CONTENT", 6);
			$symbol7 = new ParserSymbol("LINE_END", 7);
			$symbol8 = new ParserSymbol("element", 8);
			$symbol9 = new ParserSymbol("HTML_TAG_OPEN", 9);
			$symbol10 = new ParserSymbol("HTML_TAG_CLOSE", 10);
			$symbol11 = new ParserSymbol("HTML_TAG_INLINE", 11);
			$symbol12 = new ParserSymbol("BROKEN", 12);
			$this->symbols[0] = $symbol0;
			$this->symbols["accept"] = $symbol0;
			$this->symbols[1] = $symbol1;
			$this->symbols["end"] = $symbol1;
			$this->symbols[2] = $symbol2;
			$this->symbols["error"] = $symbol2;
			$this->symbols[3] = $symbol3;
			$this->symbols["wiki"] = $symbol3;
			$this->symbols[4] = $symbol4;
			$this->symbols["content"] = $symbol4;
			$this->symbols[5] = $symbol5;
			$this->symbols["EOF"] = $symbol5;
			$this->symbols[6] = $symbol6;
			$this->symbols["CONTENT"] = $symbol6;
			$this->symbols[7] = $symbol7;
			$this->symbols["LINE_END"] = $symbol7;
			$this->symbols[8] = $symbol8;
			$this->symbols["element"] = $symbol8;
			$this->symbols[9] = $symbol9;
			$this->symbols["HTML_TAG_OPEN"] = $symbol9;
			$this->symbols[10] = $symbol10;
			$this->symbols["HTML_TAG_CLOSE"] = $symbol10;
			$this->symbols[11] = $symbol11;
			$this->symbols["HTML_TAG_INLINE"] = $symbol11;
			$this->symbols[12] = $symbol12;
			$this->symbols["BROKEN"] = $symbol12;

			$this->terminals = array(
					2=>&$symbol2,
					5=>&$symbol5,
					6=>&$symbol6,
					7=>&$symbol7,
					9=>&$symbol9,
					10=>&$symbol10,
					11=>&$symbol11,
					12=>&$symbol12
				);

			$table0 = new ParserState(0);
			$table1 = new ParserState(1);
			$table2 = new ParserState(2);
			$table3 = new ParserState(3);
			$table4 = new ParserState(4);
			$table5 = new ParserState(5);
			$table6 = new ParserState(6);
			$table7 = new ParserState(7);
			$table8 = new ParserState(8);
			$table9 = new ParserState(9);
			$table10 = new ParserState(10);
			$table11 = new ParserState(11);
			$table12 = new ParserState(12);
			$table13 = new ParserState(13);
			$table14 = new ParserState(14);
			$table15 = new ParserState(15);
			$table16 = new ParserState(16);
			$table17 = new ParserState(17);

			$tableDefinition0 = array(
				
					3=>new ParserAction($this->none, $table1),
					4=>new ParserAction($this->none, $table2),
					5=>new ParserAction($this->shift, $table3),
					6=>new ParserAction($this->shift, $table4),
					7=>new ParserAction($this->shift, $table5),
					8=>new ParserAction($this->none, $table6),
					9=>new ParserAction($this->shift, $table7),
					10=>new ParserAction($this->shift, $table9),
					11=>new ParserAction($this->shift, $table8)
				);

			$tableDefinition1 = array(
				
					1=>new ParserAction($this->accept)
				);

			$tableDefinition2 = array(
				
					1=>new ParserAction($this->reduce, $table1),
					5=>new ParserAction($this->shift, $table10),
					6=>new ParserAction($this->shift, $table11),
					7=>new ParserAction($this->shift, $table12),
					8=>new ParserAction($this->none, $table13),
					9=>new ParserAction($this->shift, $table7),
					10=>new ParserAction($this->shift, $table9),
					11=>new ParserAction($this->shift, $table8)
				);

			$tableDefinition3 = array(
				
					1=>new ParserAction($this->reduce, $table3)
				);

			$tableDefinition4 = array(
				
					1=>new ParserAction($this->reduce, $table4),
					5=>new ParserAction($this->reduce, $table4),
					6=>new ParserAction($this->reduce, $table4),
					7=>new ParserAction($this->reduce, $table4),
					9=>new ParserAction($this->reduce, $table4),
					10=>new ParserAction($this->reduce, $table4),
					11=>new ParserAction($this->reduce, $table4),
					12=>new ParserAction($this->reduce, $table4)
				);

			$tableDefinition5 = array(
				
					1=>new ParserAction($this->reduce, $table6),
					5=>new ParserAction($this->reduce, $table6),
					6=>new ParserAction($this->reduce, $table6),
					7=>new ParserAction($this->reduce, $table6),
					9=>new ParserAction($this->reduce, $table6),
					10=>new ParserAction($this->reduce, $table6),
					11=>new ParserAction($this->reduce, $table6),
					12=>new ParserAction($this->reduce, $table6)
				);

			$tableDefinition6 = array(
				
					1=>new ParserAction($this->reduce, $table8),
					5=>new ParserAction($this->reduce, $table8),
					6=>new ParserAction($this->reduce, $table8),
					7=>new ParserAction($this->reduce, $table8),
					9=>new ParserAction($this->reduce, $table8),
					10=>new ParserAction($this->reduce, $table8),
					11=>new ParserAction($this->reduce, $table8),
					12=>new ParserAction($this->reduce, $table8)
				);

			$tableDefinition7 = array(
				
					1=>new ParserAction($this->reduce, $table13),
					4=>new ParserAction($this->none, $table15),
					5=>new ParserAction($this->reduce, $table13),
					6=>new ParserAction($this->shift, $table4),
					7=>new ParserAction($this->shift, $table5),
					8=>new ParserAction($this->none, $table6),
					9=>new ParserAction($this->shift, $table7),
					10=>new ParserAction($this->shift, $table14),
					11=>new ParserAction($this->shift, $table8),
					12=>new ParserAction($this->reduce, $table13)
				);

			$tableDefinition8 = array(
				
					1=>new ParserAction($this->reduce, $table11),
					5=>new ParserAction($this->reduce, $table11),
					6=>new ParserAction($this->reduce, $table11),
					7=>new ParserAction($this->reduce, $table11),
					9=>new ParserAction($this->reduce, $table11),
					10=>new ParserAction($this->reduce, $table11),
					11=>new ParserAction($this->reduce, $table11),
					12=>new ParserAction($this->reduce, $table11)
				);

			$tableDefinition9 = array(
				
					1=>new ParserAction($this->reduce, $table15),
					5=>new ParserAction($this->reduce, $table15),
					6=>new ParserAction($this->reduce, $table15),
					7=>new ParserAction($this->reduce, $table15),
					9=>new ParserAction($this->reduce, $table15),
					10=>new ParserAction($this->reduce, $table15),
					11=>new ParserAction($this->reduce, $table15)
				);

			$tableDefinition10 = array(
				
					1=>new ParserAction($this->reduce, $table2)
				);

			$tableDefinition11 = array(
				
					1=>new ParserAction($this->reduce, $table5),
					5=>new ParserAction($this->reduce, $table5),
					6=>new ParserAction($this->reduce, $table5),
					7=>new ParserAction($this->reduce, $table5),
					9=>new ParserAction($this->reduce, $table5),
					10=>new ParserAction($this->reduce, $table5),
					11=>new ParserAction($this->reduce, $table5),
					12=>new ParserAction($this->reduce, $table5)
				);

			$tableDefinition12 = array(
				
					1=>new ParserAction($this->reduce, $table7),
					5=>new ParserAction($this->reduce, $table7),
					6=>new ParserAction($this->reduce, $table7),
					7=>new ParserAction($this->reduce, $table7),
					9=>new ParserAction($this->reduce, $table7),
					10=>new ParserAction($this->reduce, $table7),
					11=>new ParserAction($this->reduce, $table7),
					12=>new ParserAction($this->reduce, $table7)
				);

			$tableDefinition13 = array(
				
					1=>new ParserAction($this->reduce, $table9),
					5=>new ParserAction($this->reduce, $table9),
					6=>new ParserAction($this->reduce, $table9),
					7=>new ParserAction($this->reduce, $table9),
					9=>new ParserAction($this->reduce, $table9),
					10=>new ParserAction($this->reduce, $table9),
					11=>new ParserAction($this->reduce, $table9),
					12=>new ParserAction($this->reduce, $table9)
				);

			$tableDefinition14 = array(
				
					1=>new ParserAction($this->reduce, $table10),
					5=>new ParserAction($this->reduce, $table10),
					6=>new ParserAction($this->reduce, $table10),
					7=>new ParserAction($this->reduce, $table10),
					9=>new ParserAction($this->reduce, $table10),
					10=>new ParserAction($this->reduce, $table10),
					11=>new ParserAction($this->reduce, $table10),
					12=>new ParserAction($this->reduce, $table10)
				);

			$tableDefinition15 = array(
				
					1=>new ParserAction($this->reduce, $table14),
					5=>new ParserAction($this->reduce, $table14),
					6=>new ParserAction($this->shift, $table11),
					7=>new ParserAction($this->shift, $table12),
					8=>new ParserAction($this->none, $table13),
					9=>new ParserAction($this->shift, $table7),
					10=>new ParserAction($this->shift, $table16),
					11=>new ParserAction($this->shift, $table8),
					12=>new ParserAction($this->shift, $table17)
				);

			$tableDefinition16 = array(
				
					1=>new ParserAction($this->reduce, $table12),
					5=>new ParserAction($this->reduce, $table12),
					6=>new ParserAction($this->reduce, $table12),
					7=>new ParserAction($this->reduce, $table12),
					9=>new ParserAction($this->reduce, $table12),
					10=>new ParserAction($this->reduce, $table12),
					11=>new ParserAction($this->reduce, $table12),
					12=>new ParserAction($this->reduce, $table12)
				);

			$tableDefinition17 = array(
				
					1=>new ParserAction($this->reduce, $table16),
					5=>new ParserAction($this->reduce, $table16),
					6=>new ParserAction($this->reduce, $table16),
					7=>new ParserAction($this->reduce, $table16),
					9=>new ParserAction($this->reduce, $table16),
					10=>new ParserAction($this->reduce, $table16),
					11=>new ParserAction($this->reduce, $table16),
					12=>new ParserAction($this->reduce, $table16)
				);

			$table0->setActions($tableDefinition0);
			$table1->setActions($tableDefinition1);
			$table2->setActions($tableDefinition2);
			$table3->setActions($tableDefinition3);
			$table4->setActions($tableDefinition4);
			$table5->setActions($tableDefinition5);
			$table6->setActions($tableDefinition6);
			$table7->setActions($tableDefinition7);
			$table8->setActions($tableDefinition8);
			$table9->setActions($tableDefinition9);
			$table10->setActions($tableDefinition10);
			$table11->setActions($tableDefinition11);
			$table12->setActions($tableDefinition12);
			$table13->setActions($tableDefinition13);
			$table14->setActions($tableDefinition14);
			$table15->setActions($tableDefinition15);
			$table16->setActions($tableDefinition16);
			$table17->setActions($tableDefinition17);

			$this->table = array(
				
					0=>$table0,
					1=>$table1,
					2=>$table2,
					3=>$table3,
					4=>$table4,
					5=>$table5,
					6=>$table6,
					7=>$table7,
					8=>$table8,
					9=>$table9,
					10=>$table10,
					11=>$table11,
					12=>$table12,
					13=>$table13,
					14=>$table14,
					15=>$table15,
					16=>$table16,
					17=>$table17
				);

			$this->defaultActions = array(
				
					3=>new ParserAction($this->reduce, $table3),
					10=>new ParserAction($this->reduce, $table2)
				);

			$this->productions = array(
				
					0=>new ParserProduction($symbol0),
					1=>new ParserProduction($symbol3,1),
					2=>new ParserProduction($symbol3,2),
					3=>new ParserProduction($symbol3,1),
					4=>new ParserProduction($symbol4,1),
					5=>new ParserProduction($symbol4,2),
					6=>new ParserProduction($symbol4,1),
					7=>new ParserProduction($symbol4,2),
					8=>new ParserProduction($symbol4,1),
					9=>new ParserProduction($symbol4,2),
					10=>new ParserProduction($symbol8,2),
					11=>new ParserProduction($symbol8,1),
					12=>new ParserProduction($symbol8,3),
					13=>new ParserProduction($symbol8,1),
					14=>new ParserProduction($symbol8,2),
					15=>new ParserProduction($symbol8,1),
					16=>new ParserProduction($symbol8,3)
				);




        //Setup Lexer
        
			$this->rules = array(
				
					0=>"/^(?:(<(.|\n)[^>]*?\/>))/",
					1=>"/^(?:(?=$))/",
					2=>"/^(?:(?=(<\/(.|\n)[^>]*?>)))/",
					3=>"/^(?:(<\/(.|\n)[^>]*?>))/",
					4=>"/^(?:(<(.|\n)[^>]*?>))/",
					5=>"/^(?:(<\/(.|\n)[^>]*?>))/",
					6=>"/^(?:([A-Za-z0-9 .,?;]+))/",
					7=>"/^(?:([ ])+)/",
					8=>"/^(?:((\n\r|\r\n|[\n\r])))/",
					9=>"/^(?:(.))/",
					10=>"/^(?:$)/"
				);

			$this->conditions = array(
				
					"htmlElement"=>new LexerConditions(array( 0,1,2,4,5,6,7,8,9,10), true),
					"htmlElementClosing"=>new LexerConditions(array( 0,3,4,5,6,7,8,9,10), true),
					"INITIAL"=>new LexerConditions(array( 0,4,5,6,7,8,9,10), true)
				);


    }

    function parserPerformAction(&$thisS, &$yy, $yystate, &$s, $o)
    {
        
/* this == yyval */


switch ($yystate) {
case 1:
        return $s[$o];
    
break;
case 2:
        return $s[$o-1];
    
break;
case 3:
        return "";
    
break;
case 4:
        
            $s[$o]->setType('Content', $this);
        
    
break;
case 5:
        
            $s[$o]->setType('Content', $this);
            $s[$o-1]->addContent($s[$o]);
        
    
break;
case 6:
        
            $s[$o]->setType('Line', $this);
        
    
break;
case 7:
        
            $s[$o]->setType('Line', $this);
            $s[$o-1]->addContent($s[$o]);
        
    
break;
case 9:
        
            $s[$o-1]->addContent($s[$o]);
        
    
break;
case 10:
        
            $type =& $s[$o-1];
            $type->setType('Element', $this);
            $type->expression->setClosing($s[$o]);
        
    
break;
case 11:
        
            $s[$o]->setType('InlineElement', $this);
        
    
break;
case 12:
        
            $type =& $s[$o-2];
            $typeChild =& $s[$o-1];
            $typeChild->setParent($type);
            $type->setType('Element', $this);
            $type->expression->setClosing($s[$o]);
        
    
break;
case 13:
        
            $type =& $s[$o];
            $type->setType('BrokenElement', $this);
        
    
break;
case 14:
        
            $type =& $s[$o-1];
            $typeChild =& $s[$o];
            $type->addContent($typeChild);
            $type->setType('Element', $this);
        
    
break;
case 15:
        
            $type =& $s[$o];
            $type->setType('BrokenElement', $this);
        
    
break;
case 16:
        
            $type =& $s[$o-2];
            $typeChild =& $s[$o-1];
            $typeChild->setParent($type);
            $type->setType('BrokenElement', $this);
        
    
break;
}

    }

    function parserLex()
    {
        $token = $this->lexerLex(); // $end = 1

        if (isset($token)) {
            return $token;
        }

        return $this->symbols["end"];
    }

    function parseError($str = "", ParserError $hash = null)
    {
        throw new Exception($str);
    }

    function lexerError($str = "", LexerError $hash = null)
    {
        throw new Exception($str);
    }

    function parse($input)
    {
        if (empty($this->table)) {
            throw new Exception("Empty Table");
        }
        $this->eof = new ParserSymbol("Eof", 1);
        $firstAction = new ParserAction(0, $this->table[0]);
        $firstCachedAction = new ParserCachedAction($firstAction);
        $stack = array($firstCachedAction);
        $stackCount = 1;
        $vstack = array(null);
        $vstackCount = 1;
        $yy = null;
        $_yy = null;
        $recovering = 0;
        $symbol = null;
        $action = null;
        $errStr = "";
        $preErrorSymbol = null;
        $state = null;

        $this->setInput($input);

        while (true) {
            // retrieve state number from top of stack
            $state = $stack[$stackCount - 1]->action->state;
            // use default actions if available
            if ($state != null && isset($this->defaultActions[$state->index])) {
                $action = $this->defaultActions[$state->index];
            } else {
                if (empty($symbol) == true) {
                    $symbol = $this->parserLex();
                }
                // read action for current state and first input
                if (isset($state) && isset($state->actions[$symbol->index])) {
                    //$action = $this->table[$state][$symbol];
                    $action = $state->actions[$symbol->index];
                } else {
                    $action = null;
                }
            }

            if ($action == null) {
                if ($recovering == 0) {
                    // Report error
                    $expected = array();
                    foreach($this->table[$state->index]->actions as $p => $item) {
                        if (!empty($this->terminals[$p]) && $p > 2) {
                            $expected[] = $this->terminals[$p]->name;
                        }
                    }

                    $errStr = "Parse error on line " . ($this->yy->lineNo + 1) . ":\n" . $this->showPosition() . "\nExpecting " . implode(", ", $expected) . ", got '" . (isset($this->terminals[$symbol->index]) ? $this->terminals[$symbol->index]->name : 'NOTHING') . "'";

                    $this->parseError($errStr, new ParserError($this->match, $state, $symbol, $this->yy->lineNo, $this->yy->loc, $expected));
                }
            }

            if ($state === null || $action === null) {
                break;
            }

            switch ($action->action) {
                case 1:
                    // shift
                    //$this->shiftCount++;
                    $stack[] = new ParserCachedAction($action, $symbol);
                    $stackCount++;

                    $vstack[] = clone($this->yy);
                    $vstackCount++;

                    $symbol = "";
                    if ($preErrorSymbol == null) { // normal execution/no error
                        $yy = clone($this->yy);
                        if ($recovering > 0) $recovering--;
                    } else { // error just occurred, resume old look ahead f/ before error
                        $symbol = $preErrorSymbol;
                        $preErrorSymbol = null;
                    }
                    break;

                case 2:
                    // reduce
                    $len = $this->productions[$action->state->index]->len;
                    // perform semantic action
                    $_yy = $vstack[$vstackCount - $len];// default to $S = $1
                    // default location, uses first token for firsts, last for lasts

                    if (isset($this->ranges)) {
                        //TODO: add ranges
                    }

                    $r = $this->parserPerformAction($_yy->text, $yy, $action->state->index, $vstack, $vstackCount - 1);

                    if (isset($r)) {
                        return $r;
                    }

                    // pop off stack
                    while ($len > 0) {
                        $len--;

                        array_pop($stack);
                        $stackCount--;

                        array_pop($vstack);
                        $vstackCount--;
                    }

                    if (is_null($_yy))
                    {
                        $vstack[] = new Parsed();
                    }
                    else
                    {
                        $vstack[] = $_yy;
                    }
                    $vstackCount++;

                    $nextSymbol = $this->productions[$action->state->index]->symbol;
                    // goto new state = table[STATE][NONTERMINAL]
                    $nextState = $stack[$stackCount - 1]->action->state;
                    $nextAction = $nextState->actions[$nextSymbol->index];

                    $stack[] = new ParserCachedAction($nextAction, $nextSymbol);
                    $stackCount++;

                    break;

                case 3:
                    // accept
                    return true;
            }

        }

        return true;
    }


    /* Jison generated lexer */
    public $eof;
    public $yy = null;
    public $match = "";
    public $matched = "";
    public $conditionStack = array();
    public $conditionStackCount = 0;
    public $rules = array();
    public $conditions = array();
    public $done = false;
    public $less;
    public $more;
    public $input;
    public $offset;
    public $ranges;
    public $flex = false;

    function setInput($input)
    {
        $this->input = $input;
        $this->more = $this->less = $this->done = false;
        $this->yy = new Parsed();
        $this->conditionStack = array('INITIAL');
        $this->conditionStackCount = 1;

        if (isset($this->ranges)) {
            $loc = $this->yy->loc = new ParserLocation();
            $loc->Range(new ParserRange(0, 0));
        } else {
            $this->yy->loc = new ParserLocation();
        }
        $this->offset = 0;
    }

    function input()
    {
        $ch = $this->input[0];
        $this->yy->text .= $ch;
        $this->yy->leng++;
        $this->offset++;
        $this->match .= $ch;
        $this->matched .= $ch;
        $lines = preg_match("/(?:\r\n?|\n).*/", $ch);
        if (count($lines) > 0) {
            $this->yy->lineNo++;
            $this->yy->lastLine++;
        } else {
            $this->yy->loc->lastColumn++;
        }
        if (isset($this->ranges)) {
            $this->yy->loc->range->y++;
        }

        $this->input = array_slice($this->input, 1);
        return $ch;
    }

    function unput($ch)
    {
        $len = strlen($ch);
        $lines = explode("/(?:\r\n?|\n)/", $ch);
        $linesCount = count($lines);

        $this->input = $ch . $this->input;
        $this->yy->text = substr($this->yy->text, 0, $len - 1);
        //$this->yylen -= $len;
        $this->offset -= $len;
        $oldLines = explode("/(?:\r\n?|\n)/", $this->match);
        $oldLinesCount = count($oldLines);
        $this->match = substr($this->match, 0, strlen($this->match) - 1);
        $this->matched = substr($this->matched, 0, strlen($this->matched) - 1);

        if (($linesCount - 1) > 0) $this->yy->lineNo -= $linesCount - 1;
        $r = $this->yy->loc->range;
        $oldLinesLength = (isset($oldLines[$oldLinesCount - $linesCount]) ? strlen($oldLines[$oldLinesCount - $linesCount]) : 0);

        $this->yy->loc = new ParserLocation(
            $this->yy->loc->firstLine,
            $this->yy->lineNo,
            $this->yy->loc->firstColumn,
            $this->yy->loc->firstLine,
            (empty($lines) ?
                ($linesCount == $oldLinesCount ? $this->yy->loc->firstColumn : 0) + $oldLinesLength :
                $this->yy->loc->firstColumn - $len)
        );

        if (isset($this->ranges)) {
            $this->yy->loc->range = array($r[0], $r[0] + $this->yy->leng - $len);
        }
    }

    function more()
    {
        $this->more = true;
    }

    function pastInput()
    {
        $past = substr($this->matched, 0, strlen($this->matched) - strlen($this->match));
        return (strlen($past) > 20 ? '...' : '') . preg_replace("/\n/", "", substr($past, -20));
    }

    function upcomingInput()
    {
        $next = $this->match;
        if (strlen($next) < 20) {
            $next .= substr($this->input, 0, 20 - strlen($next));
        }
        return preg_replace("/\n/", "", substr($next, 0, 20) . (strlen($next) > 20 ? '...' : ''));
    }

    function showPosition()
    {
        $pre = $this->pastInput();

        $c = '';
        for($i = 0, $preLength = strlen($pre); $i < $preLength; $i++) {
            $c .= '-';
        }

        return $pre . $this->upcomingInput() . "\n" . $c . "^";
    }

    function next()
    {
        if ($this->done == true) {
            return $this->eof;
        }

        if (empty($this->input)) {
            $this->done = true;
        }

        if ($this->more == false) {
            $this->yy->text = '';
            $this->match = '';
        }

        $rules = $this->currentRules();
        for ($i = 0, $j = count($rules); $i < $j; $i++) {
            preg_match($this->rules[$rules[$i]], $this->input, $tempMatch);
            if ($tempMatch && (empty($match) || count($tempMatch[0]) > count($match[0]))) {
                $match = $tempMatch;
                $index = $i;
                if (isset($this->flex) && $this->flex == false) {
                    break;
                }
            }
        }
        if ( $match ) {
            $matchCount = strlen($match[0]);
            $lineCount = preg_match("/(?:\r\n?|\n).*/", $match[0], $lines);
            $line = ($lines ? $lines[$lineCount - 1] : false);
            $this->yy->lineNo += $lineCount;

            $this->yy->loc = new ParserLocation(
                $this->yy->loc->lastLine,
                $this->yy->lineNo + 1,
                $this->yy->loc->lastColumn,
                ($line ?
                    count($line) - preg_match("/\r?\n?/", $line, $na) :
                    $this->yy->loc->lastColumn + $matchCount
                )
            );


            $this->yy->text .= $match[0];
            $this->match .= $match[0];
            $this->matches = $match;
            $this->matched .= $match[0];

            $this->yy->leng = strlen($this->yy->text);
            if (isset($this->ranges)) {
                $this->yy->loc->range = new ParserRange($this->offset, $this->offset += $this->yy->leng);
            }
            $this->more = false;
            $this->input = substr($this->input, $matchCount, strlen($this->input));
            $ruleIndex = $rules[$index];
            $nextCondition = $this->conditionStack[$this->conditionStackCount - 1];

            $token = $this->lexerPerformAction($ruleIndex, $nextCondition);

            if ($this->done == true && empty($this->input) == false) {
                $this->done = false;
            }

            if (empty($token) == false) {
                return $this->symbols[
                $token
                ];
            } else {
                return null;
            }
        }

        if (empty($this->input)) {
            return $this->eof;
        } else {
            $this->lexerError("Lexical error on line " . ($this->yy->lineNo + 1) . ". Unrecognized text.\n" . $this->showPosition(), new LexerError("", -1, $this->yy->lineNo));
            return null;
        }
    }

    function lexerLex()
    {
        $r = $this->next();

        while (is_null($r) && !$this->done) {
            $r = $this->next();
        }

        return $r;
    }

    function begin($condition)
    {
        $this->conditionStackCount++;
        $this->conditionStack[] = $condition;
    }

    function popState()
    {
        $this->conditionStackCount--;
        return array_pop($this->conditionStack);
    }

    function currentRules()
    {
        $peek = $this->conditionStack[$this->conditionStackCount - 1];
        return $this->conditions[$peek]->rules;
    }

    function LexerPerformAction($avoidingNameCollisions, $YY_START = null)
    {
        

;
switch($avoidingNameCollisions) {
case 0:
    
        //A tag that doesn't need to track state
        if (WikiLingo\Utilities\Html::isHtmlTag($this->yy->text)) {
           return "HTML_TAG_INLINE";
        }

        //A non-valid html tag, return "<" put the rest back into the parser
        if (isset($this->yy->text{0})) {
           $tag = $this->yy->text;
           $this->yy->text = $this->yy->text{0};
           $this->unput(substr($tag, 1));
        }
        return 6;
    

break;
case 1:
    
        //A tag that was left open, and needs to close
        $this->popState();
    

break;
case 2:
    
        //A look ahead for closing tag
        if ($closingTag = preg_match($this->closingTagRegex, $this->input, $match)) {
            if (!$this->unStackHtmlElement($match[0], true)) {
                $this->killStackedHtmlElement();
                $this->popState();
                return "BROKEN";
            }

            $this->popState();
            $this->begin("htmlElementClosing");
        }
    

break;
case 3:
    
        //A tag that is open and we just found the close for it
        $element = $this->unStackHtmlElement($this->yy->text);
        if (isset($element)) {
           $this->popState();
           return "HTML_TAG_CLOSE";
        }
        return "CONTENT";
    

break;
case 4:
    
        $isHtmlTag = WikiLingo\Utilities\Html::isHtmlTag($this->yy->text, true);
        //An tag open
        if ($isHtmlTag === true) {
           $this->stackHtmlElement(clone($this->yy));
           $this->begin('htmlElement');
           return "HTML_TAG_OPEN";
        } else if ($isHtmlTag === false) {
            return "HTML_TAG_INLINE";
        }

        //A non-valid html tag, return the first character in the stack and put the rest back into the parser
        if (isset($this->yy->text{0})) {
           $tag = $this->yy->text;
           $this->yy->text = $this->yy->text{0};
           $this->unput(substr($tag, 1));
        }

        return 6;
    

break;
case 5:
    
        //A tag that was not opened, needs to be ignored
        return 6;
    

break;
case 6:return 6;
break;
case 7:return 6;
break;
case 8:
    
        if ($this->htmlElementsStackCount == 0 || $this->isStaticTag == true) {
           return 7;
        }
        return 6;
    

break;
case 9:return 6;
break;
case 10:return 5;
break;
}

    }
}

class ParserLocation
{
    public $firstLine = 1;
    public $lastLine = 0;
    public $firstColumn = 1;
    public $lastColumn = 0;
    public $range;

    public function __construct($firstLine = 1, $lastLine = 0, $firstColumn = 1, $lastColumn = 0)
    {
        $this->firstLine = $firstLine;
        $this->lastLine = $lastLine;
        $this->firstColumn = $firstColumn;
        $this->lastColumn = $lastColumn;
    }

    public function Range($range)
    {
        $this->range = $range;
    }

    public function __clone()
    {
        return new ParserLocation($this->firstLine, $this->lastLine, $this->firstColumn, $this->lastColumn);
    }
}

class ParserValue
{
    public $leng = 0;
    public $loc;
    public $lineNo = 0;
    public $text;

    function __clone() {
        $clone = new ParserValue();
        $clone->leng = $this->leng;
        if (isset($this->loc)) {
            $clone->loc = clone $this->loc;
        }
        $clone->lineNo = $this->lineNo;
        $clone->text = $this->text;
        return $clone;
    }
}

class LexerConditions
{
    public $rules;
    public $inclusive;

    function __construct($rules, $inclusive)
    {
        $this->rules = $rules;
        $this->inclusive = $inclusive;
    }
}

class ParserProduction
{
    public $len = 0;
    public $symbol;

    public function __construct($symbol, $len = 0)
    {
        $this->symbol = $symbol;
        $this->len = $len;
    }
}

class ParserCachedAction
{
    public $action;
    public $symbol;

    function __construct($action, $symbol = null)
    {
        $this->action = $action;
        $this->symbol = $symbol;
    }
}

class ParserAction
{
    public $action;
    public $state;
    public $symbol;

    function __construct($action, &$state = null, &$symbol = null)
    {
        $this->action = $action;
        $this->state = $state;
        $this->symbol = $symbol;
    }
}

class ParserSymbol
{
    public $name;
    public $index = -1;
    public $symbols = array();
    public $symbolsByName = array();

    function __construct($name, $index)
    {
        $this->name = $name;
        $this->index = $index;
    }

    public function addAction($a)
    {
        $this->symbols[$a->index] = $this->symbolsByName[$a->name] = $a;
    }
}

class ParserError
{
    public $text;
    public $state;
    public $symbol;
    public $lineNo;
    public $loc;
    public $expected;

    function __construct($text, $state, $symbol, $lineNo, $loc, $expected)
    {
        $this->text = $text;
        $this->state = $state;
        $this->symbol = $symbol;
        $this->lineNo = $lineNo;
        $this->loc = $loc;
        $this->expected = $expected;
    }
}

class LexerError
{
    public $text;
    public $token;
    public $lineNo;

    public function __construct($text, $token, $lineNo)
    {
        $this->text = $text;
        $this->token = $token;
        $this->lineNo = $lineNo;
    }
}

class ParserState
{
    public $index;
    public $actions = array();

    function __construct($index)
    {
        $this->index = $index;
    }

    public function setActions(&$actions)
    {
        $this->actions = $actions;
    }
}

class ParserRange
{
    public $x;
    public $y;

    function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }
}