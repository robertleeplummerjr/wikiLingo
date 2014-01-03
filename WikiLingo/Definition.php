<?php
/* Jison generated parser */
namespace WikiLingo;
use Exception;


use WikiLingo\Utilities;

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
			$symbol4 = new ParserSymbol("contents", 4);
			$symbol5 = new ParserSymbol("EOF", 5);
			$symbol6 = new ParserSymbol("content", 6);
			$symbol7 = new ParserSymbol("CONTENT", 7);
			$symbol8 = new ParserSymbol("COMMENT_START", 8);
			$symbol9 = new ParserSymbol("COMMENT_END", 9);
			$symbol10 = new ParserSymbol("NO_PARSE_START", 10);
			$symbol11 = new ParserSymbol("NO_PARSE_END", 11);
			$symbol12 = new ParserSymbol("PREFORMATTED_TEXT_START", 12);
			$symbol13 = new ParserSymbol("PREFORMATTED_TEXT_END", 13);
			$symbol14 = new ParserSymbol("DOUBLE_DYNAMIC_VAR", 14);
			$symbol15 = new ParserSymbol("SINGLE_DYNAMIC_VAR", 15);
			$symbol16 = new ParserSymbol("VAR", 16);
			$symbol17 = new ParserSymbol("HTML_TAG", 17);
			$symbol18 = new ParserSymbol("HORIZONTAL_BAR", 18);
			$symbol19 = new ParserSymbol("BOLD_START", 19);
			$symbol20 = new ParserSymbol("BOLD_END", 20);
			$symbol21 = new ParserSymbol("BOX_START", 21);
			$symbol22 = new ParserSymbol("BOX_END", 22);
			$symbol23 = new ParserSymbol("CENTER_START", 23);
			$symbol24 = new ParserSymbol("CENTER_END", 24);
			$symbol25 = new ParserSymbol("CODE_START", 25);
			$symbol26 = new ParserSymbol("CODE_END", 26);
			$symbol27 = new ParserSymbol("COLOR_START", 27);
			$symbol28 = new ParserSymbol("COLOR_END", 28);
			$symbol29 = new ParserSymbol("ITALIC_START", 29);
			$symbol30 = new ParserSymbol("ITALIC_END", 30);
			$symbol31 = new ParserSymbol("LINK_START", 31);
			$symbol32 = new ParserSymbol("LINK_END", 32);
			$symbol33 = new ParserSymbol("STRIKE_START", 33);
			$symbol34 = new ParserSymbol("STRIKE_END", 34);
			$symbol35 = new ParserSymbol("DOUBLE_DASH", 35);
			$symbol36 = new ParserSymbol("TABLE_START", 36);
			$symbol37 = new ParserSymbol("TABLE_END", 37);
			$symbol38 = new ParserSymbol("TITLE_BAR_START", 38);
			$symbol39 = new ParserSymbol("TITLE_BAR_END", 39);
			$symbol40 = new ParserSymbol("UNDERSCORE_START", 40);
			$symbol41 = new ParserSymbol("UNDERSCORE_END", 41);
			$symbol42 = new ParserSymbol("FLP_START", 42);
			$symbol43 = new ParserSymbol("FLP_END", 43);
			$symbol44 = new ParserSymbol("WIKI_LINK_START", 44);
			$symbol45 = new ParserSymbol("WIKI_LINK_END", 45);
			$symbol46 = new ParserSymbol("WIKI_LINK_TYPE_START", 46);
			$symbol47 = new ParserSymbol("WIKI_LINK_TYPE_END", 47);
			$symbol48 = new ParserSymbol("WIKI_UNLINK_START", 48);
			$symbol49 = new ParserSymbol("WIKI_UNLINK_END", 49);
			$symbol50 = new ParserSymbol("WORD_LINK", 50);
			$symbol51 = new ParserSymbol("INLINE_PLUGIN_START", 51);
			$symbol52 = new ParserSymbol("INLINE_PLUGIN_PARAMETERS", 52);
			$symbol53 = new ParserSymbol("PLUGIN_START", 53);
			$symbol54 = new ParserSymbol("PLUGIN_PARAMETERS", 54);
			$symbol55 = new ParserSymbol("PLUGIN_END", 55);
			$symbol56 = new ParserSymbol("LINE_END", 56);
			$symbol57 = new ParserSymbol("FORCED_LINE_END", 57);
			$symbol58 = new ParserSymbol("CHAR", 58);
			$symbol59 = new ParserSymbol("SPECIAL_CHAR", 59);
			$symbol60 = new ParserSymbol("WHITE_SPACE", 60);
			$symbol61 = new ParserSymbol("PRE_BLOCK_START", 61);
			$symbol62 = new ParserSymbol("BLOCK_START", 62);
			$symbol63 = new ParserSymbol("BLOCK_END", 63);
			$this->symbols[0] = $symbol0;
			$this->symbols["accept"] = $symbol0;
			$this->symbols[1] = $symbol1;
			$this->symbols["end"] = $symbol1;
			$this->symbols[2] = $symbol2;
			$this->symbols["error"] = $symbol2;
			$this->symbols[3] = $symbol3;
			$this->symbols["wiki"] = $symbol3;
			$this->symbols[4] = $symbol4;
			$this->symbols["contents"] = $symbol4;
			$this->symbols[5] = $symbol5;
			$this->symbols["EOF"] = $symbol5;
			$this->symbols[6] = $symbol6;
			$this->symbols["content"] = $symbol6;
			$this->symbols[7] = $symbol7;
			$this->symbols["CONTENT"] = $symbol7;
			$this->symbols[8] = $symbol8;
			$this->symbols["COMMENT_START"] = $symbol8;
			$this->symbols[9] = $symbol9;
			$this->symbols["COMMENT_END"] = $symbol9;
			$this->symbols[10] = $symbol10;
			$this->symbols["NO_PARSE_START"] = $symbol10;
			$this->symbols[11] = $symbol11;
			$this->symbols["NO_PARSE_END"] = $symbol11;
			$this->symbols[12] = $symbol12;
			$this->symbols["PREFORMATTED_TEXT_START"] = $symbol12;
			$this->symbols[13] = $symbol13;
			$this->symbols["PREFORMATTED_TEXT_END"] = $symbol13;
			$this->symbols[14] = $symbol14;
			$this->symbols["DOUBLE_DYNAMIC_VAR"] = $symbol14;
			$this->symbols[15] = $symbol15;
			$this->symbols["SINGLE_DYNAMIC_VAR"] = $symbol15;
			$this->symbols[16] = $symbol16;
			$this->symbols["VAR"] = $symbol16;
			$this->symbols[17] = $symbol17;
			$this->symbols["HTML_TAG"] = $symbol17;
			$this->symbols[18] = $symbol18;
			$this->symbols["HORIZONTAL_BAR"] = $symbol18;
			$this->symbols[19] = $symbol19;
			$this->symbols["BOLD_START"] = $symbol19;
			$this->symbols[20] = $symbol20;
			$this->symbols["BOLD_END"] = $symbol20;
			$this->symbols[21] = $symbol21;
			$this->symbols["BOX_START"] = $symbol21;
			$this->symbols[22] = $symbol22;
			$this->symbols["BOX_END"] = $symbol22;
			$this->symbols[23] = $symbol23;
			$this->symbols["CENTER_START"] = $symbol23;
			$this->symbols[24] = $symbol24;
			$this->symbols["CENTER_END"] = $symbol24;
			$this->symbols[25] = $symbol25;
			$this->symbols["CODE_START"] = $symbol25;
			$this->symbols[26] = $symbol26;
			$this->symbols["CODE_END"] = $symbol26;
			$this->symbols[27] = $symbol27;
			$this->symbols["COLOR_START"] = $symbol27;
			$this->symbols[28] = $symbol28;
			$this->symbols["COLOR_END"] = $symbol28;
			$this->symbols[29] = $symbol29;
			$this->symbols["ITALIC_START"] = $symbol29;
			$this->symbols[30] = $symbol30;
			$this->symbols["ITALIC_END"] = $symbol30;
			$this->symbols[31] = $symbol31;
			$this->symbols["LINK_START"] = $symbol31;
			$this->symbols[32] = $symbol32;
			$this->symbols["LINK_END"] = $symbol32;
			$this->symbols[33] = $symbol33;
			$this->symbols["STRIKE_START"] = $symbol33;
			$this->symbols[34] = $symbol34;
			$this->symbols["STRIKE_END"] = $symbol34;
			$this->symbols[35] = $symbol35;
			$this->symbols["DOUBLE_DASH"] = $symbol35;
			$this->symbols[36] = $symbol36;
			$this->symbols["TABLE_START"] = $symbol36;
			$this->symbols[37] = $symbol37;
			$this->symbols["TABLE_END"] = $symbol37;
			$this->symbols[38] = $symbol38;
			$this->symbols["TITLE_BAR_START"] = $symbol38;
			$this->symbols[39] = $symbol39;
			$this->symbols["TITLE_BAR_END"] = $symbol39;
			$this->symbols[40] = $symbol40;
			$this->symbols["UNDERSCORE_START"] = $symbol40;
			$this->symbols[41] = $symbol41;
			$this->symbols["UNDERSCORE_END"] = $symbol41;
			$this->symbols[42] = $symbol42;
			$this->symbols["FLP_START"] = $symbol42;
			$this->symbols[43] = $symbol43;
			$this->symbols["FLP_END"] = $symbol43;
			$this->symbols[44] = $symbol44;
			$this->symbols["WIKI_LINK_START"] = $symbol44;
			$this->symbols[45] = $symbol45;
			$this->symbols["WIKI_LINK_END"] = $symbol45;
			$this->symbols[46] = $symbol46;
			$this->symbols["WIKI_LINK_TYPE_START"] = $symbol46;
			$this->symbols[47] = $symbol47;
			$this->symbols["WIKI_LINK_TYPE_END"] = $symbol47;
			$this->symbols[48] = $symbol48;
			$this->symbols["WIKI_UNLINK_START"] = $symbol48;
			$this->symbols[49] = $symbol49;
			$this->symbols["WIKI_UNLINK_END"] = $symbol49;
			$this->symbols[50] = $symbol50;
			$this->symbols["WORD_LINK"] = $symbol50;
			$this->symbols[51] = $symbol51;
			$this->symbols["INLINE_PLUGIN_START"] = $symbol51;
			$this->symbols[52] = $symbol52;
			$this->symbols["INLINE_PLUGIN_PARAMETERS"] = $symbol52;
			$this->symbols[53] = $symbol53;
			$this->symbols["PLUGIN_START"] = $symbol53;
			$this->symbols[54] = $symbol54;
			$this->symbols["PLUGIN_PARAMETERS"] = $symbol54;
			$this->symbols[55] = $symbol55;
			$this->symbols["PLUGIN_END"] = $symbol55;
			$this->symbols[56] = $symbol56;
			$this->symbols["LINE_END"] = $symbol56;
			$this->symbols[57] = $symbol57;
			$this->symbols["FORCED_LINE_END"] = $symbol57;
			$this->symbols[58] = $symbol58;
			$this->symbols["CHAR"] = $symbol58;
			$this->symbols[59] = $symbol59;
			$this->symbols["SPECIAL_CHAR"] = $symbol59;
			$this->symbols[60] = $symbol60;
			$this->symbols["WHITE_SPACE"] = $symbol60;
			$this->symbols[61] = $symbol61;
			$this->symbols["PRE_BLOCK_START"] = $symbol61;
			$this->symbols[62] = $symbol62;
			$this->symbols["BLOCK_START"] = $symbol62;
			$this->symbols[63] = $symbol63;
			$this->symbols["BLOCK_END"] = $symbol63;

			$this->terminals = array(
					2=>&$symbol2,
					5=>&$symbol5,
					7=>&$symbol7,
					8=>&$symbol8,
					9=>&$symbol9,
					10=>&$symbol10,
					11=>&$symbol11,
					12=>&$symbol12,
					13=>&$symbol13,
					14=>&$symbol14,
					15=>&$symbol15,
					16=>&$symbol16,
					17=>&$symbol17,
					18=>&$symbol18,
					19=>&$symbol19,
					20=>&$symbol20,
					21=>&$symbol21,
					22=>&$symbol22,
					23=>&$symbol23,
					24=>&$symbol24,
					25=>&$symbol25,
					26=>&$symbol26,
					27=>&$symbol27,
					28=>&$symbol28,
					29=>&$symbol29,
					30=>&$symbol30,
					31=>&$symbol31,
					32=>&$symbol32,
					33=>&$symbol33,
					34=>&$symbol34,
					35=>&$symbol35,
					36=>&$symbol36,
					37=>&$symbol37,
					38=>&$symbol38,
					39=>&$symbol39,
					40=>&$symbol40,
					41=>&$symbol41,
					42=>&$symbol42,
					43=>&$symbol43,
					44=>&$symbol44,
					45=>&$symbol45,
					46=>&$symbol46,
					47=>&$symbol47,
					48=>&$symbol48,
					49=>&$symbol49,
					50=>&$symbol50,
					51=>&$symbol51,
					52=>&$symbol52,
					53=>&$symbol53,
					54=>&$symbol54,
					55=>&$symbol55,
					56=>&$symbol56,
					57=>&$symbol57,
					58=>&$symbol58,
					59=>&$symbol59,
					60=>&$symbol60,
					61=>&$symbol61,
					62=>&$symbol62,
					63=>&$symbol63
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
			$table18 = new ParserState(18);
			$table19 = new ParserState(19);
			$table20 = new ParserState(20);
			$table21 = new ParserState(21);
			$table22 = new ParserState(22);
			$table23 = new ParserState(23);
			$table24 = new ParserState(24);
			$table25 = new ParserState(25);
			$table26 = new ParserState(26);
			$table27 = new ParserState(27);
			$table28 = new ParserState(28);
			$table29 = new ParserState(29);
			$table30 = new ParserState(30);
			$table31 = new ParserState(31);
			$table32 = new ParserState(32);
			$table33 = new ParserState(33);
			$table34 = new ParserState(34);
			$table35 = new ParserState(35);
			$table36 = new ParserState(36);
			$table37 = new ParserState(37);
			$table38 = new ParserState(38);
			$table39 = new ParserState(39);
			$table40 = new ParserState(40);
			$table41 = new ParserState(41);
			$table42 = new ParserState(42);
			$table43 = new ParserState(43);
			$table44 = new ParserState(44);
			$table45 = new ParserState(45);
			$table46 = new ParserState(46);
			$table47 = new ParserState(47);
			$table48 = new ParserState(48);
			$table49 = new ParserState(49);
			$table50 = new ParserState(50);
			$table51 = new ParserState(51);
			$table52 = new ParserState(52);
			$table53 = new ParserState(53);
			$table54 = new ParserState(54);
			$table55 = new ParserState(55);
			$table56 = new ParserState(56);
			$table57 = new ParserState(57);
			$table58 = new ParserState(58);
			$table59 = new ParserState(59);
			$table60 = new ParserState(60);
			$table61 = new ParserState(61);
			$table62 = new ParserState(62);
			$table63 = new ParserState(63);
			$table64 = new ParserState(64);
			$table65 = new ParserState(65);
			$table66 = new ParserState(66);
			$table67 = new ParserState(67);
			$table68 = new ParserState(68);
			$table69 = new ParserState(69);
			$table70 = new ParserState(70);
			$table71 = new ParserState(71);
			$table72 = new ParserState(72);
			$table73 = new ParserState(73);
			$table74 = new ParserState(74);
			$table75 = new ParserState(75);
			$table76 = new ParserState(76);
			$table77 = new ParserState(77);
			$table78 = new ParserState(78);
			$table79 = new ParserState(79);
			$table80 = new ParserState(80);
			$table81 = new ParserState(81);
			$table82 = new ParserState(82);
			$table83 = new ParserState(83);
			$table84 = new ParserState(84);
			$table85 = new ParserState(85);
			$table86 = new ParserState(86);
			$table87 = new ParserState(87);
			$table88 = new ParserState(88);
			$table89 = new ParserState(89);
			$table90 = new ParserState(90);
			$table91 = new ParserState(91);
			$table92 = new ParserState(92);
			$table93 = new ParserState(93);
			$table94 = new ParserState(94);
			$table95 = new ParserState(95);
			$table96 = new ParserState(96);
			$table97 = new ParserState(97);
			$table98 = new ParserState(98);
			$table99 = new ParserState(99);
			$table100 = new ParserState(100);
			$table101 = new ParserState(101);
			$table102 = new ParserState(102);
			$table103 = new ParserState(103);
			$table104 = new ParserState(104);

			$tableDefinition0 = array(
				
					3=>new ParserAction($this->none, $table1),
					4=>new ParserAction($this->none, $table2),
					5=>new ParserAction($this->shift, $table3),
					6=>new ParserAction($this->none, $table4),
					7=>new ParserAction($this->shift, $table5),
					8=>new ParserAction($this->shift, $table6),
					10=>new ParserAction($this->shift, $table7),
					12=>new ParserAction($this->shift, $table8),
					14=>new ParserAction($this->shift, $table9),
					15=>new ParserAction($this->shift, $table10),
					16=>new ParserAction($this->shift, $table11),
					17=>new ParserAction($this->shift, $table12),
					18=>new ParserAction($this->shift, $table13),
					19=>new ParserAction($this->shift, $table14),
					21=>new ParserAction($this->shift, $table15),
					23=>new ParserAction($this->shift, $table16),
					25=>new ParserAction($this->shift, $table17),
					27=>new ParserAction($this->shift, $table18),
					29=>new ParserAction($this->shift, $table19),
					31=>new ParserAction($this->shift, $table20),
					33=>new ParserAction($this->shift, $table21),
					35=>new ParserAction($this->shift, $table22),
					36=>new ParserAction($this->shift, $table23),
					38=>new ParserAction($this->shift, $table24),
					40=>new ParserAction($this->shift, $table25),
					42=>new ParserAction($this->shift, $table26),
					44=>new ParserAction($this->shift, $table27),
					46=>new ParserAction($this->shift, $table28),
					48=>new ParserAction($this->shift, $table29),
					50=>new ParserAction($this->shift, $table30),
					51=>new ParserAction($this->shift, $table31),
					53=>new ParserAction($this->shift, $table32),
					56=>new ParserAction($this->shift, $table33),
					57=>new ParserAction($this->shift, $table34),
					58=>new ParserAction($this->shift, $table35),
					59=>new ParserAction($this->shift, $table36),
					60=>new ParserAction($this->shift, $table37),
					61=>new ParserAction($this->shift, $table38)
				);

			$tableDefinition1 = array(
				
					1=>new ParserAction($this->accept)
				);

			$tableDefinition2 = array(
				
					1=>new ParserAction($this->reduce, $table1),
					5=>new ParserAction($this->shift, $table39),
					6=>new ParserAction($this->none, $table40),
					7=>new ParserAction($this->shift, $table5),
					8=>new ParserAction($this->shift, $table6),
					10=>new ParserAction($this->shift, $table7),
					12=>new ParserAction($this->shift, $table8),
					14=>new ParserAction($this->shift, $table9),
					15=>new ParserAction($this->shift, $table10),
					16=>new ParserAction($this->shift, $table11),
					17=>new ParserAction($this->shift, $table12),
					18=>new ParserAction($this->shift, $table13),
					19=>new ParserAction($this->shift, $table14),
					21=>new ParserAction($this->shift, $table15),
					23=>new ParserAction($this->shift, $table16),
					25=>new ParserAction($this->shift, $table17),
					27=>new ParserAction($this->shift, $table18),
					29=>new ParserAction($this->shift, $table19),
					31=>new ParserAction($this->shift, $table20),
					33=>new ParserAction($this->shift, $table21),
					35=>new ParserAction($this->shift, $table22),
					36=>new ParserAction($this->shift, $table23),
					38=>new ParserAction($this->shift, $table24),
					40=>new ParserAction($this->shift, $table25),
					42=>new ParserAction($this->shift, $table26),
					44=>new ParserAction($this->shift, $table27),
					46=>new ParserAction($this->shift, $table28),
					48=>new ParserAction($this->shift, $table29),
					50=>new ParserAction($this->shift, $table30),
					51=>new ParserAction($this->shift, $table31),
					53=>new ParserAction($this->shift, $table32),
					56=>new ParserAction($this->shift, $table33),
					57=>new ParserAction($this->shift, $table34),
					58=>new ParserAction($this->shift, $table35),
					59=>new ParserAction($this->shift, $table36),
					60=>new ParserAction($this->shift, $table37),
					61=>new ParserAction($this->shift, $table38)
				);

			$tableDefinition3 = array(
				
					1=>new ParserAction($this->reduce, $table3)
				);

			$tableDefinition4 = array(
				
					1=>new ParserAction($this->reduce, $table4),
					5=>new ParserAction($this->reduce, $table4),
					7=>new ParserAction($this->reduce, $table4),
					8=>new ParserAction($this->reduce, $table4),
					9=>new ParserAction($this->reduce, $table4),
					10=>new ParserAction($this->reduce, $table4),
					11=>new ParserAction($this->reduce, $table4),
					12=>new ParserAction($this->reduce, $table4),
					13=>new ParserAction($this->reduce, $table4),
					14=>new ParserAction($this->reduce, $table4),
					15=>new ParserAction($this->reduce, $table4),
					16=>new ParserAction($this->reduce, $table4),
					17=>new ParserAction($this->reduce, $table4),
					18=>new ParserAction($this->reduce, $table4),
					19=>new ParserAction($this->reduce, $table4),
					20=>new ParserAction($this->reduce, $table4),
					21=>new ParserAction($this->reduce, $table4),
					22=>new ParserAction($this->reduce, $table4),
					23=>new ParserAction($this->reduce, $table4),
					24=>new ParserAction($this->reduce, $table4),
					25=>new ParserAction($this->reduce, $table4),
					26=>new ParserAction($this->reduce, $table4),
					27=>new ParserAction($this->reduce, $table4),
					28=>new ParserAction($this->reduce, $table4),
					29=>new ParserAction($this->reduce, $table4),
					30=>new ParserAction($this->reduce, $table4),
					31=>new ParserAction($this->reduce, $table4),
					32=>new ParserAction($this->reduce, $table4),
					33=>new ParserAction($this->reduce, $table4),
					34=>new ParserAction($this->reduce, $table4),
					35=>new ParserAction($this->reduce, $table4),
					36=>new ParserAction($this->reduce, $table4),
					37=>new ParserAction($this->reduce, $table4),
					38=>new ParserAction($this->reduce, $table4),
					39=>new ParserAction($this->reduce, $table4),
					40=>new ParserAction($this->reduce, $table4),
					41=>new ParserAction($this->reduce, $table4),
					42=>new ParserAction($this->reduce, $table4),
					43=>new ParserAction($this->reduce, $table4),
					44=>new ParserAction($this->reduce, $table4),
					45=>new ParserAction($this->reduce, $table4),
					46=>new ParserAction($this->reduce, $table4),
					47=>new ParserAction($this->reduce, $table4),
					48=>new ParserAction($this->reduce, $table4),
					49=>new ParserAction($this->reduce, $table4),
					50=>new ParserAction($this->reduce, $table4),
					51=>new ParserAction($this->reduce, $table4),
					53=>new ParserAction($this->reduce, $table4),
					55=>new ParserAction($this->reduce, $table4),
					56=>new ParserAction($this->reduce, $table4),
					57=>new ParserAction($this->reduce, $table4),
					58=>new ParserAction($this->reduce, $table4),
					59=>new ParserAction($this->reduce, $table4),
					60=>new ParserAction($this->reduce, $table4),
					61=>new ParserAction($this->reduce, $table4),
					63=>new ParserAction($this->reduce, $table4)
				);

			$tableDefinition5 = array(
				
					1=>new ParserAction($this->reduce, $table6),
					5=>new ParserAction($this->reduce, $table6),
					7=>new ParserAction($this->reduce, $table6),
					8=>new ParserAction($this->reduce, $table6),
					9=>new ParserAction($this->reduce, $table6),
					10=>new ParserAction($this->reduce, $table6),
					11=>new ParserAction($this->reduce, $table6),
					12=>new ParserAction($this->reduce, $table6),
					13=>new ParserAction($this->reduce, $table6),
					14=>new ParserAction($this->reduce, $table6),
					15=>new ParserAction($this->reduce, $table6),
					16=>new ParserAction($this->reduce, $table6),
					17=>new ParserAction($this->reduce, $table6),
					18=>new ParserAction($this->reduce, $table6),
					19=>new ParserAction($this->reduce, $table6),
					20=>new ParserAction($this->reduce, $table6),
					21=>new ParserAction($this->reduce, $table6),
					22=>new ParserAction($this->reduce, $table6),
					23=>new ParserAction($this->reduce, $table6),
					24=>new ParserAction($this->reduce, $table6),
					25=>new ParserAction($this->reduce, $table6),
					26=>new ParserAction($this->reduce, $table6),
					27=>new ParserAction($this->reduce, $table6),
					28=>new ParserAction($this->reduce, $table6),
					29=>new ParserAction($this->reduce, $table6),
					30=>new ParserAction($this->reduce, $table6),
					31=>new ParserAction($this->reduce, $table6),
					32=>new ParserAction($this->reduce, $table6),
					33=>new ParserAction($this->reduce, $table6),
					34=>new ParserAction($this->reduce, $table6),
					35=>new ParserAction($this->reduce, $table6),
					36=>new ParserAction($this->reduce, $table6),
					37=>new ParserAction($this->reduce, $table6),
					38=>new ParserAction($this->reduce, $table6),
					39=>new ParserAction($this->reduce, $table6),
					40=>new ParserAction($this->reduce, $table6),
					41=>new ParserAction($this->reduce, $table6),
					42=>new ParserAction($this->reduce, $table6),
					43=>new ParserAction($this->reduce, $table6),
					44=>new ParserAction($this->reduce, $table6),
					45=>new ParserAction($this->reduce, $table6),
					46=>new ParserAction($this->reduce, $table6),
					47=>new ParserAction($this->reduce, $table6),
					48=>new ParserAction($this->reduce, $table6),
					49=>new ParserAction($this->reduce, $table6),
					50=>new ParserAction($this->reduce, $table6),
					51=>new ParserAction($this->reduce, $table6),
					53=>new ParserAction($this->reduce, $table6),
					55=>new ParserAction($this->reduce, $table6),
					56=>new ParserAction($this->reduce, $table6),
					57=>new ParserAction($this->reduce, $table6),
					58=>new ParserAction($this->reduce, $table6),
					59=>new ParserAction($this->reduce, $table6),
					60=>new ParserAction($this->reduce, $table6),
					61=>new ParserAction($this->reduce, $table6),
					63=>new ParserAction($this->reduce, $table6)
				);

			$tableDefinition6 = array(
				
					1=>new ParserAction($this->reduce, $table7),
					4=>new ParserAction($this->none, $table42),
					5=>new ParserAction($this->reduce, $table7),
					6=>new ParserAction($this->none, $table4),
					7=>new ParserAction($this->shift, $table5),
					8=>new ParserAction($this->shift, $table6),
					9=>new ParserAction($this->shift, $table41),
					10=>new ParserAction($this->shift, $table7),
					11=>new ParserAction($this->reduce, $table7),
					12=>new ParserAction($this->shift, $table8),
					13=>new ParserAction($this->reduce, $table7),
					14=>new ParserAction($this->shift, $table9),
					15=>new ParserAction($this->shift, $table10),
					16=>new ParserAction($this->shift, $table11),
					17=>new ParserAction($this->shift, $table12),
					18=>new ParserAction($this->shift, $table13),
					19=>new ParserAction($this->shift, $table14),
					20=>new ParserAction($this->reduce, $table7),
					21=>new ParserAction($this->shift, $table15),
					22=>new ParserAction($this->reduce, $table7),
					23=>new ParserAction($this->shift, $table16),
					24=>new ParserAction($this->reduce, $table7),
					25=>new ParserAction($this->shift, $table17),
					26=>new ParserAction($this->reduce, $table7),
					27=>new ParserAction($this->shift, $table18),
					28=>new ParserAction($this->reduce, $table7),
					29=>new ParserAction($this->shift, $table19),
					30=>new ParserAction($this->reduce, $table7),
					31=>new ParserAction($this->shift, $table20),
					32=>new ParserAction($this->reduce, $table7),
					33=>new ParserAction($this->shift, $table21),
					34=>new ParserAction($this->reduce, $table7),
					35=>new ParserAction($this->shift, $table22),
					36=>new ParserAction($this->shift, $table23),
					37=>new ParserAction($this->reduce, $table7),
					38=>new ParserAction($this->shift, $table24),
					39=>new ParserAction($this->reduce, $table7),
					40=>new ParserAction($this->shift, $table25),
					41=>new ParserAction($this->reduce, $table7),
					42=>new ParserAction($this->shift, $table26),
					43=>new ParserAction($this->reduce, $table7),
					44=>new ParserAction($this->shift, $table27),
					45=>new ParserAction($this->reduce, $table7),
					46=>new ParserAction($this->shift, $table28),
					47=>new ParserAction($this->reduce, $table7),
					48=>new ParserAction($this->shift, $table29),
					49=>new ParserAction($this->reduce, $table7),
					50=>new ParserAction($this->shift, $table30),
					51=>new ParserAction($this->shift, $table31),
					53=>new ParserAction($this->shift, $table32),
					55=>new ParserAction($this->reduce, $table7),
					56=>new ParserAction($this->shift, $table33),
					57=>new ParserAction($this->shift, $table34),
					58=>new ParserAction($this->shift, $table35),
					59=>new ParserAction($this->shift, $table36),
					60=>new ParserAction($this->shift, $table37),
					61=>new ParserAction($this->shift, $table38),
					63=>new ParserAction($this->reduce, $table7)
				);

			$tableDefinition7 = array(
				
					1=>new ParserAction($this->reduce, $table10),
					4=>new ParserAction($this->none, $table44),
					5=>new ParserAction($this->reduce, $table10),
					6=>new ParserAction($this->none, $table4),
					7=>new ParserAction($this->shift, $table5),
					8=>new ParserAction($this->shift, $table6),
					9=>new ParserAction($this->reduce, $table10),
					10=>new ParserAction($this->shift, $table7),
					11=>new ParserAction($this->shift, $table43),
					12=>new ParserAction($this->shift, $table8),
					13=>new ParserAction($this->reduce, $table10),
					14=>new ParserAction($this->shift, $table9),
					15=>new ParserAction($this->shift, $table10),
					16=>new ParserAction($this->shift, $table11),
					17=>new ParserAction($this->shift, $table12),
					18=>new ParserAction($this->shift, $table13),
					19=>new ParserAction($this->shift, $table14),
					20=>new ParserAction($this->reduce, $table10),
					21=>new ParserAction($this->shift, $table15),
					22=>new ParserAction($this->reduce, $table10),
					23=>new ParserAction($this->shift, $table16),
					24=>new ParserAction($this->reduce, $table10),
					25=>new ParserAction($this->shift, $table17),
					26=>new ParserAction($this->reduce, $table10),
					27=>new ParserAction($this->shift, $table18),
					28=>new ParserAction($this->reduce, $table10),
					29=>new ParserAction($this->shift, $table19),
					30=>new ParserAction($this->reduce, $table10),
					31=>new ParserAction($this->shift, $table20),
					32=>new ParserAction($this->reduce, $table10),
					33=>new ParserAction($this->shift, $table21),
					34=>new ParserAction($this->reduce, $table10),
					35=>new ParserAction($this->shift, $table22),
					36=>new ParserAction($this->shift, $table23),
					37=>new ParserAction($this->reduce, $table10),
					38=>new ParserAction($this->shift, $table24),
					39=>new ParserAction($this->reduce, $table10),
					40=>new ParserAction($this->shift, $table25),
					41=>new ParserAction($this->reduce, $table10),
					42=>new ParserAction($this->shift, $table26),
					43=>new ParserAction($this->reduce, $table10),
					44=>new ParserAction($this->shift, $table27),
					45=>new ParserAction($this->reduce, $table10),
					46=>new ParserAction($this->shift, $table28),
					47=>new ParserAction($this->reduce, $table10),
					48=>new ParserAction($this->shift, $table29),
					49=>new ParserAction($this->reduce, $table10),
					50=>new ParserAction($this->shift, $table30),
					51=>new ParserAction($this->shift, $table31),
					53=>new ParserAction($this->shift, $table32),
					55=>new ParserAction($this->reduce, $table10),
					56=>new ParserAction($this->shift, $table33),
					57=>new ParserAction($this->shift, $table34),
					58=>new ParserAction($this->shift, $table35),
					59=>new ParserAction($this->shift, $table36),
					60=>new ParserAction($this->shift, $table37),
					61=>new ParserAction($this->shift, $table38),
					63=>new ParserAction($this->reduce, $table10)
				);

			$tableDefinition8 = array(
				
					1=>new ParserAction($this->reduce, $table13),
					4=>new ParserAction($this->none, $table46),
					5=>new ParserAction($this->reduce, $table13),
					6=>new ParserAction($this->none, $table4),
					7=>new ParserAction($this->shift, $table5),
					8=>new ParserAction($this->shift, $table6),
					9=>new ParserAction($this->reduce, $table13),
					10=>new ParserAction($this->shift, $table7),
					11=>new ParserAction($this->reduce, $table13),
					12=>new ParserAction($this->shift, $table8),
					13=>new ParserAction($this->shift, $table45),
					14=>new ParserAction($this->shift, $table9),
					15=>new ParserAction($this->shift, $table10),
					16=>new ParserAction($this->shift, $table11),
					17=>new ParserAction($this->shift, $table12),
					18=>new ParserAction($this->shift, $table13),
					19=>new ParserAction($this->shift, $table14),
					20=>new ParserAction($this->reduce, $table13),
					21=>new ParserAction($this->shift, $table15),
					22=>new ParserAction($this->reduce, $table13),
					23=>new ParserAction($this->shift, $table16),
					24=>new ParserAction($this->reduce, $table13),
					25=>new ParserAction($this->shift, $table17),
					26=>new ParserAction($this->reduce, $table13),
					27=>new ParserAction($this->shift, $table18),
					28=>new ParserAction($this->reduce, $table13),
					29=>new ParserAction($this->shift, $table19),
					30=>new ParserAction($this->reduce, $table13),
					31=>new ParserAction($this->shift, $table20),
					32=>new ParserAction($this->reduce, $table13),
					33=>new ParserAction($this->shift, $table21),
					34=>new ParserAction($this->reduce, $table13),
					35=>new ParserAction($this->shift, $table22),
					36=>new ParserAction($this->shift, $table23),
					37=>new ParserAction($this->reduce, $table13),
					38=>new ParserAction($this->shift, $table24),
					39=>new ParserAction($this->reduce, $table13),
					40=>new ParserAction($this->shift, $table25),
					41=>new ParserAction($this->reduce, $table13),
					42=>new ParserAction($this->shift, $table26),
					43=>new ParserAction($this->reduce, $table13),
					44=>new ParserAction($this->shift, $table27),
					45=>new ParserAction($this->reduce, $table13),
					46=>new ParserAction($this->shift, $table28),
					47=>new ParserAction($this->reduce, $table13),
					48=>new ParserAction($this->shift, $table29),
					49=>new ParserAction($this->reduce, $table13),
					50=>new ParserAction($this->shift, $table30),
					51=>new ParserAction($this->shift, $table31),
					53=>new ParserAction($this->shift, $table32),
					55=>new ParserAction($this->reduce, $table13),
					56=>new ParserAction($this->shift, $table33),
					57=>new ParserAction($this->shift, $table34),
					58=>new ParserAction($this->shift, $table35),
					59=>new ParserAction($this->shift, $table36),
					60=>new ParserAction($this->shift, $table37),
					61=>new ParserAction($this->shift, $table38),
					63=>new ParserAction($this->reduce, $table13)
				);

			$tableDefinition9 = array(
				
					1=>new ParserAction($this->reduce, $table16),
					5=>new ParserAction($this->reduce, $table16),
					7=>new ParserAction($this->reduce, $table16),
					8=>new ParserAction($this->reduce, $table16),
					9=>new ParserAction($this->reduce, $table16),
					10=>new ParserAction($this->reduce, $table16),
					11=>new ParserAction($this->reduce, $table16),
					12=>new ParserAction($this->reduce, $table16),
					13=>new ParserAction($this->reduce, $table16),
					14=>new ParserAction($this->reduce, $table16),
					15=>new ParserAction($this->reduce, $table16),
					16=>new ParserAction($this->reduce, $table16),
					17=>new ParserAction($this->reduce, $table16),
					18=>new ParserAction($this->reduce, $table16),
					19=>new ParserAction($this->reduce, $table16),
					20=>new ParserAction($this->reduce, $table16),
					21=>new ParserAction($this->reduce, $table16),
					22=>new ParserAction($this->reduce, $table16),
					23=>new ParserAction($this->reduce, $table16),
					24=>new ParserAction($this->reduce, $table16),
					25=>new ParserAction($this->reduce, $table16),
					26=>new ParserAction($this->reduce, $table16),
					27=>new ParserAction($this->reduce, $table16),
					28=>new ParserAction($this->reduce, $table16),
					29=>new ParserAction($this->reduce, $table16),
					30=>new ParserAction($this->reduce, $table16),
					31=>new ParserAction($this->reduce, $table16),
					32=>new ParserAction($this->reduce, $table16),
					33=>new ParserAction($this->reduce, $table16),
					34=>new ParserAction($this->reduce, $table16),
					35=>new ParserAction($this->reduce, $table16),
					36=>new ParserAction($this->reduce, $table16),
					37=>new ParserAction($this->reduce, $table16),
					38=>new ParserAction($this->reduce, $table16),
					39=>new ParserAction($this->reduce, $table16),
					40=>new ParserAction($this->reduce, $table16),
					41=>new ParserAction($this->reduce, $table16),
					42=>new ParserAction($this->reduce, $table16),
					43=>new ParserAction($this->reduce, $table16),
					44=>new ParserAction($this->reduce, $table16),
					45=>new ParserAction($this->reduce, $table16),
					46=>new ParserAction($this->reduce, $table16),
					47=>new ParserAction($this->reduce, $table16),
					48=>new ParserAction($this->reduce, $table16),
					49=>new ParserAction($this->reduce, $table16),
					50=>new ParserAction($this->reduce, $table16),
					51=>new ParserAction($this->reduce, $table16),
					53=>new ParserAction($this->reduce, $table16),
					55=>new ParserAction($this->reduce, $table16),
					56=>new ParserAction($this->reduce, $table16),
					57=>new ParserAction($this->reduce, $table16),
					58=>new ParserAction($this->reduce, $table16),
					59=>new ParserAction($this->reduce, $table16),
					60=>new ParserAction($this->reduce, $table16),
					61=>new ParserAction($this->reduce, $table16),
					63=>new ParserAction($this->reduce, $table16)
				);

			$tableDefinition10 = array(
				
					1=>new ParserAction($this->reduce, $table17),
					5=>new ParserAction($this->reduce, $table17),
					7=>new ParserAction($this->reduce, $table17),
					8=>new ParserAction($this->reduce, $table17),
					9=>new ParserAction($this->reduce, $table17),
					10=>new ParserAction($this->reduce, $table17),
					11=>new ParserAction($this->reduce, $table17),
					12=>new ParserAction($this->reduce, $table17),
					13=>new ParserAction($this->reduce, $table17),
					14=>new ParserAction($this->reduce, $table17),
					15=>new ParserAction($this->reduce, $table17),
					16=>new ParserAction($this->reduce, $table17),
					17=>new ParserAction($this->reduce, $table17),
					18=>new ParserAction($this->reduce, $table17),
					19=>new ParserAction($this->reduce, $table17),
					20=>new ParserAction($this->reduce, $table17),
					21=>new ParserAction($this->reduce, $table17),
					22=>new ParserAction($this->reduce, $table17),
					23=>new ParserAction($this->reduce, $table17),
					24=>new ParserAction($this->reduce, $table17),
					25=>new ParserAction($this->reduce, $table17),
					26=>new ParserAction($this->reduce, $table17),
					27=>new ParserAction($this->reduce, $table17),
					28=>new ParserAction($this->reduce, $table17),
					29=>new ParserAction($this->reduce, $table17),
					30=>new ParserAction($this->reduce, $table17),
					31=>new ParserAction($this->reduce, $table17),
					32=>new ParserAction($this->reduce, $table17),
					33=>new ParserAction($this->reduce, $table17),
					34=>new ParserAction($this->reduce, $table17),
					35=>new ParserAction($this->reduce, $table17),
					36=>new ParserAction($this->reduce, $table17),
					37=>new ParserAction($this->reduce, $table17),
					38=>new ParserAction($this->reduce, $table17),
					39=>new ParserAction($this->reduce, $table17),
					40=>new ParserAction($this->reduce, $table17),
					41=>new ParserAction($this->reduce, $table17),
					42=>new ParserAction($this->reduce, $table17),
					43=>new ParserAction($this->reduce, $table17),
					44=>new ParserAction($this->reduce, $table17),
					45=>new ParserAction($this->reduce, $table17),
					46=>new ParserAction($this->reduce, $table17),
					47=>new ParserAction($this->reduce, $table17),
					48=>new ParserAction($this->reduce, $table17),
					49=>new ParserAction($this->reduce, $table17),
					50=>new ParserAction($this->reduce, $table17),
					51=>new ParserAction($this->reduce, $table17),
					53=>new ParserAction($this->reduce, $table17),
					55=>new ParserAction($this->reduce, $table17),
					56=>new ParserAction($this->reduce, $table17),
					57=>new ParserAction($this->reduce, $table17),
					58=>new ParserAction($this->reduce, $table17),
					59=>new ParserAction($this->reduce, $table17),
					60=>new ParserAction($this->reduce, $table17),
					61=>new ParserAction($this->reduce, $table17),
					63=>new ParserAction($this->reduce, $table17)
				);

			$tableDefinition11 = array(
				
					1=>new ParserAction($this->reduce, $table18),
					5=>new ParserAction($this->reduce, $table18),
					7=>new ParserAction($this->reduce, $table18),
					8=>new ParserAction($this->reduce, $table18),
					9=>new ParserAction($this->reduce, $table18),
					10=>new ParserAction($this->reduce, $table18),
					11=>new ParserAction($this->reduce, $table18),
					12=>new ParserAction($this->reduce, $table18),
					13=>new ParserAction($this->reduce, $table18),
					14=>new ParserAction($this->reduce, $table18),
					15=>new ParserAction($this->reduce, $table18),
					16=>new ParserAction($this->reduce, $table18),
					17=>new ParserAction($this->reduce, $table18),
					18=>new ParserAction($this->reduce, $table18),
					19=>new ParserAction($this->reduce, $table18),
					20=>new ParserAction($this->reduce, $table18),
					21=>new ParserAction($this->reduce, $table18),
					22=>new ParserAction($this->reduce, $table18),
					23=>new ParserAction($this->reduce, $table18),
					24=>new ParserAction($this->reduce, $table18),
					25=>new ParserAction($this->reduce, $table18),
					26=>new ParserAction($this->reduce, $table18),
					27=>new ParserAction($this->reduce, $table18),
					28=>new ParserAction($this->reduce, $table18),
					29=>new ParserAction($this->reduce, $table18),
					30=>new ParserAction($this->reduce, $table18),
					31=>new ParserAction($this->reduce, $table18),
					32=>new ParserAction($this->reduce, $table18),
					33=>new ParserAction($this->reduce, $table18),
					34=>new ParserAction($this->reduce, $table18),
					35=>new ParserAction($this->reduce, $table18),
					36=>new ParserAction($this->reduce, $table18),
					37=>new ParserAction($this->reduce, $table18),
					38=>new ParserAction($this->reduce, $table18),
					39=>new ParserAction($this->reduce, $table18),
					40=>new ParserAction($this->reduce, $table18),
					41=>new ParserAction($this->reduce, $table18),
					42=>new ParserAction($this->reduce, $table18),
					43=>new ParserAction($this->reduce, $table18),
					44=>new ParserAction($this->reduce, $table18),
					45=>new ParserAction($this->reduce, $table18),
					46=>new ParserAction($this->reduce, $table18),
					47=>new ParserAction($this->reduce, $table18),
					48=>new ParserAction($this->reduce, $table18),
					49=>new ParserAction($this->reduce, $table18),
					50=>new ParserAction($this->reduce, $table18),
					51=>new ParserAction($this->reduce, $table18),
					53=>new ParserAction($this->reduce, $table18),
					55=>new ParserAction($this->reduce, $table18),
					56=>new ParserAction($this->reduce, $table18),
					57=>new ParserAction($this->reduce, $table18),
					58=>new ParserAction($this->reduce, $table18),
					59=>new ParserAction($this->reduce, $table18),
					60=>new ParserAction($this->reduce, $table18),
					61=>new ParserAction($this->reduce, $table18),
					63=>new ParserAction($this->reduce, $table18)
				);

			$tableDefinition12 = array(
				
					1=>new ParserAction($this->reduce, $table19),
					5=>new ParserAction($this->reduce, $table19),
					7=>new ParserAction($this->reduce, $table19),
					8=>new ParserAction($this->reduce, $table19),
					9=>new ParserAction($this->reduce, $table19),
					10=>new ParserAction($this->reduce, $table19),
					11=>new ParserAction($this->reduce, $table19),
					12=>new ParserAction($this->reduce, $table19),
					13=>new ParserAction($this->reduce, $table19),
					14=>new ParserAction($this->reduce, $table19),
					15=>new ParserAction($this->reduce, $table19),
					16=>new ParserAction($this->reduce, $table19),
					17=>new ParserAction($this->reduce, $table19),
					18=>new ParserAction($this->reduce, $table19),
					19=>new ParserAction($this->reduce, $table19),
					20=>new ParserAction($this->reduce, $table19),
					21=>new ParserAction($this->reduce, $table19),
					22=>new ParserAction($this->reduce, $table19),
					23=>new ParserAction($this->reduce, $table19),
					24=>new ParserAction($this->reduce, $table19),
					25=>new ParserAction($this->reduce, $table19),
					26=>new ParserAction($this->reduce, $table19),
					27=>new ParserAction($this->reduce, $table19),
					28=>new ParserAction($this->reduce, $table19),
					29=>new ParserAction($this->reduce, $table19),
					30=>new ParserAction($this->reduce, $table19),
					31=>new ParserAction($this->reduce, $table19),
					32=>new ParserAction($this->reduce, $table19),
					33=>new ParserAction($this->reduce, $table19),
					34=>new ParserAction($this->reduce, $table19),
					35=>new ParserAction($this->reduce, $table19),
					36=>new ParserAction($this->reduce, $table19),
					37=>new ParserAction($this->reduce, $table19),
					38=>new ParserAction($this->reduce, $table19),
					39=>new ParserAction($this->reduce, $table19),
					40=>new ParserAction($this->reduce, $table19),
					41=>new ParserAction($this->reduce, $table19),
					42=>new ParserAction($this->reduce, $table19),
					43=>new ParserAction($this->reduce, $table19),
					44=>new ParserAction($this->reduce, $table19),
					45=>new ParserAction($this->reduce, $table19),
					46=>new ParserAction($this->reduce, $table19),
					47=>new ParserAction($this->reduce, $table19),
					48=>new ParserAction($this->reduce, $table19),
					49=>new ParserAction($this->reduce, $table19),
					50=>new ParserAction($this->reduce, $table19),
					51=>new ParserAction($this->reduce, $table19),
					53=>new ParserAction($this->reduce, $table19),
					55=>new ParserAction($this->reduce, $table19),
					56=>new ParserAction($this->reduce, $table19),
					57=>new ParserAction($this->reduce, $table19),
					58=>new ParserAction($this->reduce, $table19),
					59=>new ParserAction($this->reduce, $table19),
					60=>new ParserAction($this->reduce, $table19),
					61=>new ParserAction($this->reduce, $table19),
					63=>new ParserAction($this->reduce, $table19)
				);

			$tableDefinition13 = array(
				
					1=>new ParserAction($this->reduce, $table20),
					5=>new ParserAction($this->reduce, $table20),
					7=>new ParserAction($this->reduce, $table20),
					8=>new ParserAction($this->reduce, $table20),
					9=>new ParserAction($this->reduce, $table20),
					10=>new ParserAction($this->reduce, $table20),
					11=>new ParserAction($this->reduce, $table20),
					12=>new ParserAction($this->reduce, $table20),
					13=>new ParserAction($this->reduce, $table20),
					14=>new ParserAction($this->reduce, $table20),
					15=>new ParserAction($this->reduce, $table20),
					16=>new ParserAction($this->reduce, $table20),
					17=>new ParserAction($this->reduce, $table20),
					18=>new ParserAction($this->reduce, $table20),
					19=>new ParserAction($this->reduce, $table20),
					20=>new ParserAction($this->reduce, $table20),
					21=>new ParserAction($this->reduce, $table20),
					22=>new ParserAction($this->reduce, $table20),
					23=>new ParserAction($this->reduce, $table20),
					24=>new ParserAction($this->reduce, $table20),
					25=>new ParserAction($this->reduce, $table20),
					26=>new ParserAction($this->reduce, $table20),
					27=>new ParserAction($this->reduce, $table20),
					28=>new ParserAction($this->reduce, $table20),
					29=>new ParserAction($this->reduce, $table20),
					30=>new ParserAction($this->reduce, $table20),
					31=>new ParserAction($this->reduce, $table20),
					32=>new ParserAction($this->reduce, $table20),
					33=>new ParserAction($this->reduce, $table20),
					34=>new ParserAction($this->reduce, $table20),
					35=>new ParserAction($this->reduce, $table20),
					36=>new ParserAction($this->reduce, $table20),
					37=>new ParserAction($this->reduce, $table20),
					38=>new ParserAction($this->reduce, $table20),
					39=>new ParserAction($this->reduce, $table20),
					40=>new ParserAction($this->reduce, $table20),
					41=>new ParserAction($this->reduce, $table20),
					42=>new ParserAction($this->reduce, $table20),
					43=>new ParserAction($this->reduce, $table20),
					44=>new ParserAction($this->reduce, $table20),
					45=>new ParserAction($this->reduce, $table20),
					46=>new ParserAction($this->reduce, $table20),
					47=>new ParserAction($this->reduce, $table20),
					48=>new ParserAction($this->reduce, $table20),
					49=>new ParserAction($this->reduce, $table20),
					50=>new ParserAction($this->reduce, $table20),
					51=>new ParserAction($this->reduce, $table20),
					53=>new ParserAction($this->reduce, $table20),
					55=>new ParserAction($this->reduce, $table20),
					56=>new ParserAction($this->reduce, $table20),
					57=>new ParserAction($this->reduce, $table20),
					58=>new ParserAction($this->reduce, $table20),
					59=>new ParserAction($this->reduce, $table20),
					60=>new ParserAction($this->reduce, $table20),
					61=>new ParserAction($this->reduce, $table20),
					63=>new ParserAction($this->reduce, $table20)
				);

			$tableDefinition14 = array(
				
					1=>new ParserAction($this->reduce, $table21),
					4=>new ParserAction($this->none, $table47),
					5=>new ParserAction($this->reduce, $table21),
					6=>new ParserAction($this->none, $table4),
					7=>new ParserAction($this->shift, $table5),
					8=>new ParserAction($this->shift, $table6),
					9=>new ParserAction($this->reduce, $table21),
					10=>new ParserAction($this->shift, $table7),
					11=>new ParserAction($this->reduce, $table21),
					12=>new ParserAction($this->shift, $table8),
					13=>new ParserAction($this->reduce, $table21),
					14=>new ParserAction($this->shift, $table9),
					15=>new ParserAction($this->shift, $table10),
					16=>new ParserAction($this->shift, $table11),
					17=>new ParserAction($this->shift, $table12),
					18=>new ParserAction($this->shift, $table13),
					19=>new ParserAction($this->shift, $table14),
					20=>new ParserAction($this->shift, $table48),
					21=>new ParserAction($this->shift, $table15),
					22=>new ParserAction($this->reduce, $table21),
					23=>new ParserAction($this->shift, $table16),
					24=>new ParserAction($this->reduce, $table21),
					25=>new ParserAction($this->shift, $table17),
					26=>new ParserAction($this->reduce, $table21),
					27=>new ParserAction($this->shift, $table18),
					28=>new ParserAction($this->reduce, $table21),
					29=>new ParserAction($this->shift, $table19),
					30=>new ParserAction($this->reduce, $table21),
					31=>new ParserAction($this->shift, $table20),
					32=>new ParserAction($this->reduce, $table21),
					33=>new ParserAction($this->shift, $table21),
					34=>new ParserAction($this->reduce, $table21),
					35=>new ParserAction($this->shift, $table22),
					36=>new ParserAction($this->shift, $table23),
					37=>new ParserAction($this->reduce, $table21),
					38=>new ParserAction($this->shift, $table24),
					39=>new ParserAction($this->reduce, $table21),
					40=>new ParserAction($this->shift, $table25),
					41=>new ParserAction($this->reduce, $table21),
					42=>new ParserAction($this->shift, $table26),
					43=>new ParserAction($this->reduce, $table21),
					44=>new ParserAction($this->shift, $table27),
					45=>new ParserAction($this->reduce, $table21),
					46=>new ParserAction($this->shift, $table28),
					47=>new ParserAction($this->reduce, $table21),
					48=>new ParserAction($this->shift, $table29),
					49=>new ParserAction($this->reduce, $table21),
					50=>new ParserAction($this->shift, $table30),
					51=>new ParserAction($this->shift, $table31),
					53=>new ParserAction($this->shift, $table32),
					55=>new ParserAction($this->reduce, $table21),
					56=>new ParserAction($this->shift, $table33),
					57=>new ParserAction($this->shift, $table34),
					58=>new ParserAction($this->shift, $table35),
					59=>new ParserAction($this->shift, $table36),
					60=>new ParserAction($this->shift, $table37),
					61=>new ParserAction($this->shift, $table38),
					63=>new ParserAction($this->reduce, $table21)
				);

			$tableDefinition15 = array(
				
					1=>new ParserAction($this->reduce, $table25),
					4=>new ParserAction($this->none, $table49),
					5=>new ParserAction($this->reduce, $table25),
					6=>new ParserAction($this->none, $table4),
					7=>new ParserAction($this->shift, $table5),
					8=>new ParserAction($this->shift, $table6),
					9=>new ParserAction($this->reduce, $table25),
					10=>new ParserAction($this->shift, $table7),
					11=>new ParserAction($this->reduce, $table25),
					12=>new ParserAction($this->shift, $table8),
					13=>new ParserAction($this->reduce, $table25),
					14=>new ParserAction($this->shift, $table9),
					15=>new ParserAction($this->shift, $table10),
					16=>new ParserAction($this->shift, $table11),
					17=>new ParserAction($this->shift, $table12),
					18=>new ParserAction($this->shift, $table13),
					19=>new ParserAction($this->shift, $table14),
					20=>new ParserAction($this->reduce, $table25),
					21=>new ParserAction($this->shift, $table15),
					22=>new ParserAction($this->shift, $table50),
					23=>new ParserAction($this->shift, $table16),
					24=>new ParserAction($this->reduce, $table25),
					25=>new ParserAction($this->shift, $table17),
					26=>new ParserAction($this->reduce, $table25),
					27=>new ParserAction($this->shift, $table18),
					28=>new ParserAction($this->reduce, $table25),
					29=>new ParserAction($this->shift, $table19),
					30=>new ParserAction($this->reduce, $table25),
					31=>new ParserAction($this->shift, $table20),
					32=>new ParserAction($this->reduce, $table25),
					33=>new ParserAction($this->shift, $table21),
					34=>new ParserAction($this->reduce, $table25),
					35=>new ParserAction($this->shift, $table22),
					36=>new ParserAction($this->shift, $table23),
					37=>new ParserAction($this->reduce, $table25),
					38=>new ParserAction($this->shift, $table24),
					39=>new ParserAction($this->reduce, $table25),
					40=>new ParserAction($this->shift, $table25),
					41=>new ParserAction($this->reduce, $table25),
					42=>new ParserAction($this->shift, $table26),
					43=>new ParserAction($this->reduce, $table25),
					44=>new ParserAction($this->shift, $table27),
					45=>new ParserAction($this->reduce, $table25),
					46=>new ParserAction($this->shift, $table28),
					47=>new ParserAction($this->reduce, $table25),
					48=>new ParserAction($this->shift, $table29),
					49=>new ParserAction($this->reduce, $table25),
					50=>new ParserAction($this->shift, $table30),
					51=>new ParserAction($this->shift, $table31),
					53=>new ParserAction($this->shift, $table32),
					55=>new ParserAction($this->reduce, $table25),
					56=>new ParserAction($this->shift, $table33),
					57=>new ParserAction($this->shift, $table34),
					58=>new ParserAction($this->shift, $table35),
					59=>new ParserAction($this->shift, $table36),
					60=>new ParserAction($this->shift, $table37),
					61=>new ParserAction($this->shift, $table38),
					63=>new ParserAction($this->reduce, $table25)
				);

			$tableDefinition16 = array(
				
					1=>new ParserAction($this->reduce, $table29),
					4=>new ParserAction($this->none, $table51),
					5=>new ParserAction($this->reduce, $table29),
					6=>new ParserAction($this->none, $table4),
					7=>new ParserAction($this->shift, $table5),
					8=>new ParserAction($this->shift, $table6),
					9=>new ParserAction($this->reduce, $table29),
					10=>new ParserAction($this->shift, $table7),
					11=>new ParserAction($this->reduce, $table29),
					12=>new ParserAction($this->shift, $table8),
					13=>new ParserAction($this->reduce, $table29),
					14=>new ParserAction($this->shift, $table9),
					15=>new ParserAction($this->shift, $table10),
					16=>new ParserAction($this->shift, $table11),
					17=>new ParserAction($this->shift, $table12),
					18=>new ParserAction($this->shift, $table13),
					19=>new ParserAction($this->shift, $table14),
					20=>new ParserAction($this->reduce, $table29),
					21=>new ParserAction($this->shift, $table15),
					22=>new ParserAction($this->reduce, $table29),
					23=>new ParserAction($this->shift, $table16),
					24=>new ParserAction($this->shift, $table52),
					25=>new ParserAction($this->shift, $table17),
					26=>new ParserAction($this->reduce, $table29),
					27=>new ParserAction($this->shift, $table18),
					28=>new ParserAction($this->reduce, $table29),
					29=>new ParserAction($this->shift, $table19),
					30=>new ParserAction($this->reduce, $table29),
					31=>new ParserAction($this->shift, $table20),
					32=>new ParserAction($this->reduce, $table29),
					33=>new ParserAction($this->shift, $table21),
					34=>new ParserAction($this->reduce, $table29),
					35=>new ParserAction($this->shift, $table22),
					36=>new ParserAction($this->shift, $table23),
					37=>new ParserAction($this->reduce, $table29),
					38=>new ParserAction($this->shift, $table24),
					39=>new ParserAction($this->reduce, $table29),
					40=>new ParserAction($this->shift, $table25),
					41=>new ParserAction($this->reduce, $table29),
					42=>new ParserAction($this->shift, $table26),
					43=>new ParserAction($this->reduce, $table29),
					44=>new ParserAction($this->shift, $table27),
					45=>new ParserAction($this->reduce, $table29),
					46=>new ParserAction($this->shift, $table28),
					47=>new ParserAction($this->reduce, $table29),
					48=>new ParserAction($this->shift, $table29),
					49=>new ParserAction($this->reduce, $table29),
					50=>new ParserAction($this->shift, $table30),
					51=>new ParserAction($this->shift, $table31),
					53=>new ParserAction($this->shift, $table32),
					55=>new ParserAction($this->reduce, $table29),
					56=>new ParserAction($this->shift, $table33),
					57=>new ParserAction($this->shift, $table34),
					58=>new ParserAction($this->shift, $table35),
					59=>new ParserAction($this->shift, $table36),
					60=>new ParserAction($this->shift, $table37),
					61=>new ParserAction($this->shift, $table38),
					63=>new ParserAction($this->reduce, $table29)
				);

			$tableDefinition17 = array(
				
					1=>new ParserAction($this->reduce, $table33),
					4=>new ParserAction($this->none, $table53),
					5=>new ParserAction($this->reduce, $table33),
					6=>new ParserAction($this->none, $table4),
					7=>new ParserAction($this->shift, $table5),
					8=>new ParserAction($this->shift, $table6),
					9=>new ParserAction($this->reduce, $table33),
					10=>new ParserAction($this->shift, $table7),
					11=>new ParserAction($this->reduce, $table33),
					12=>new ParserAction($this->shift, $table8),
					13=>new ParserAction($this->reduce, $table33),
					14=>new ParserAction($this->shift, $table9),
					15=>new ParserAction($this->shift, $table10),
					16=>new ParserAction($this->shift, $table11),
					17=>new ParserAction($this->shift, $table12),
					18=>new ParserAction($this->shift, $table13),
					19=>new ParserAction($this->shift, $table14),
					20=>new ParserAction($this->reduce, $table33),
					21=>new ParserAction($this->shift, $table15),
					22=>new ParserAction($this->reduce, $table33),
					23=>new ParserAction($this->shift, $table16),
					24=>new ParserAction($this->reduce, $table33),
					25=>new ParserAction($this->shift, $table17),
					26=>new ParserAction($this->shift, $table54),
					27=>new ParserAction($this->shift, $table18),
					28=>new ParserAction($this->reduce, $table33),
					29=>new ParserAction($this->shift, $table19),
					30=>new ParserAction($this->reduce, $table33),
					31=>new ParserAction($this->shift, $table20),
					32=>new ParserAction($this->reduce, $table33),
					33=>new ParserAction($this->shift, $table21),
					34=>new ParserAction($this->reduce, $table33),
					35=>new ParserAction($this->shift, $table22),
					36=>new ParserAction($this->shift, $table23),
					37=>new ParserAction($this->reduce, $table33),
					38=>new ParserAction($this->shift, $table24),
					39=>new ParserAction($this->reduce, $table33),
					40=>new ParserAction($this->shift, $table25),
					41=>new ParserAction($this->reduce, $table33),
					42=>new ParserAction($this->shift, $table26),
					43=>new ParserAction($this->reduce, $table33),
					44=>new ParserAction($this->shift, $table27),
					45=>new ParserAction($this->reduce, $table33),
					46=>new ParserAction($this->shift, $table28),
					47=>new ParserAction($this->reduce, $table33),
					48=>new ParserAction($this->shift, $table29),
					49=>new ParserAction($this->reduce, $table33),
					50=>new ParserAction($this->shift, $table30),
					51=>new ParserAction($this->shift, $table31),
					53=>new ParserAction($this->shift, $table32),
					55=>new ParserAction($this->reduce, $table33),
					56=>new ParserAction($this->shift, $table33),
					57=>new ParserAction($this->shift, $table34),
					58=>new ParserAction($this->shift, $table35),
					59=>new ParserAction($this->shift, $table36),
					60=>new ParserAction($this->shift, $table37),
					61=>new ParserAction($this->shift, $table38),
					63=>new ParserAction($this->reduce, $table33)
				);

			$tableDefinition18 = array(
				
					1=>new ParserAction($this->reduce, $table37),
					4=>new ParserAction($this->none, $table55),
					5=>new ParserAction($this->reduce, $table37),
					6=>new ParserAction($this->none, $table4),
					7=>new ParserAction($this->shift, $table5),
					8=>new ParserAction($this->shift, $table6),
					9=>new ParserAction($this->reduce, $table37),
					10=>new ParserAction($this->shift, $table7),
					11=>new ParserAction($this->reduce, $table37),
					12=>new ParserAction($this->shift, $table8),
					13=>new ParserAction($this->reduce, $table37),
					14=>new ParserAction($this->shift, $table9),
					15=>new ParserAction($this->shift, $table10),
					16=>new ParserAction($this->shift, $table11),
					17=>new ParserAction($this->shift, $table12),
					18=>new ParserAction($this->shift, $table13),
					19=>new ParserAction($this->shift, $table14),
					20=>new ParserAction($this->reduce, $table37),
					21=>new ParserAction($this->shift, $table15),
					22=>new ParserAction($this->reduce, $table37),
					23=>new ParserAction($this->shift, $table16),
					24=>new ParserAction($this->reduce, $table37),
					25=>new ParserAction($this->shift, $table17),
					26=>new ParserAction($this->reduce, $table37),
					27=>new ParserAction($this->shift, $table18),
					28=>new ParserAction($this->shift, $table56),
					29=>new ParserAction($this->shift, $table19),
					30=>new ParserAction($this->reduce, $table37),
					31=>new ParserAction($this->shift, $table20),
					32=>new ParserAction($this->reduce, $table37),
					33=>new ParserAction($this->shift, $table21),
					34=>new ParserAction($this->reduce, $table37),
					35=>new ParserAction($this->shift, $table22),
					36=>new ParserAction($this->shift, $table23),
					37=>new ParserAction($this->reduce, $table37),
					38=>new ParserAction($this->shift, $table24),
					39=>new ParserAction($this->reduce, $table37),
					40=>new ParserAction($this->shift, $table25),
					41=>new ParserAction($this->reduce, $table37),
					42=>new ParserAction($this->shift, $table26),
					43=>new ParserAction($this->reduce, $table37),
					44=>new ParserAction($this->shift, $table27),
					45=>new ParserAction($this->reduce, $table37),
					46=>new ParserAction($this->shift, $table28),
					47=>new ParserAction($this->reduce, $table37),
					48=>new ParserAction($this->shift, $table29),
					49=>new ParserAction($this->reduce, $table37),
					50=>new ParserAction($this->shift, $table30),
					51=>new ParserAction($this->shift, $table31),
					53=>new ParserAction($this->shift, $table32),
					55=>new ParserAction($this->reduce, $table37),
					56=>new ParserAction($this->shift, $table33),
					57=>new ParserAction($this->shift, $table34),
					58=>new ParserAction($this->shift, $table35),
					59=>new ParserAction($this->shift, $table36),
					60=>new ParserAction($this->shift, $table37),
					61=>new ParserAction($this->shift, $table38),
					63=>new ParserAction($this->reduce, $table37)
				);

			$tableDefinition19 = array(
				
					1=>new ParserAction($this->reduce, $table41),
					4=>new ParserAction($this->none, $table57),
					5=>new ParserAction($this->reduce, $table41),
					6=>new ParserAction($this->none, $table4),
					7=>new ParserAction($this->shift, $table5),
					8=>new ParserAction($this->shift, $table6),
					9=>new ParserAction($this->reduce, $table41),
					10=>new ParserAction($this->shift, $table7),
					11=>new ParserAction($this->reduce, $table41),
					12=>new ParserAction($this->shift, $table8),
					13=>new ParserAction($this->reduce, $table41),
					14=>new ParserAction($this->shift, $table9),
					15=>new ParserAction($this->shift, $table10),
					16=>new ParserAction($this->shift, $table11),
					17=>new ParserAction($this->shift, $table12),
					18=>new ParserAction($this->shift, $table13),
					19=>new ParserAction($this->shift, $table14),
					20=>new ParserAction($this->reduce, $table41),
					21=>new ParserAction($this->shift, $table15),
					22=>new ParserAction($this->reduce, $table41),
					23=>new ParserAction($this->shift, $table16),
					24=>new ParserAction($this->reduce, $table41),
					25=>new ParserAction($this->shift, $table17),
					26=>new ParserAction($this->reduce, $table41),
					27=>new ParserAction($this->shift, $table18),
					28=>new ParserAction($this->reduce, $table41),
					29=>new ParserAction($this->shift, $table19),
					30=>new ParserAction($this->shift, $table58),
					31=>new ParserAction($this->shift, $table20),
					32=>new ParserAction($this->reduce, $table41),
					33=>new ParserAction($this->shift, $table21),
					34=>new ParserAction($this->reduce, $table41),
					35=>new ParserAction($this->shift, $table22),
					36=>new ParserAction($this->shift, $table23),
					37=>new ParserAction($this->reduce, $table41),
					38=>new ParserAction($this->shift, $table24),
					39=>new ParserAction($this->reduce, $table41),
					40=>new ParserAction($this->shift, $table25),
					41=>new ParserAction($this->reduce, $table41),
					42=>new ParserAction($this->shift, $table26),
					43=>new ParserAction($this->reduce, $table41),
					44=>new ParserAction($this->shift, $table27),
					45=>new ParserAction($this->reduce, $table41),
					46=>new ParserAction($this->shift, $table28),
					47=>new ParserAction($this->reduce, $table41),
					48=>new ParserAction($this->shift, $table29),
					49=>new ParserAction($this->reduce, $table41),
					50=>new ParserAction($this->shift, $table30),
					51=>new ParserAction($this->shift, $table31),
					53=>new ParserAction($this->shift, $table32),
					55=>new ParserAction($this->reduce, $table41),
					56=>new ParserAction($this->shift, $table33),
					57=>new ParserAction($this->shift, $table34),
					58=>new ParserAction($this->shift, $table35),
					59=>new ParserAction($this->shift, $table36),
					60=>new ParserAction($this->shift, $table37),
					61=>new ParserAction($this->shift, $table38),
					63=>new ParserAction($this->reduce, $table41)
				);

			$tableDefinition20 = array(
				
					1=>new ParserAction($this->reduce, $table45),
					4=>new ParserAction($this->none, $table59),
					5=>new ParserAction($this->reduce, $table45),
					6=>new ParserAction($this->none, $table4),
					7=>new ParserAction($this->shift, $table5),
					8=>new ParserAction($this->shift, $table6),
					9=>new ParserAction($this->reduce, $table45),
					10=>new ParserAction($this->shift, $table7),
					11=>new ParserAction($this->reduce, $table45),
					12=>new ParserAction($this->shift, $table8),
					13=>new ParserAction($this->reduce, $table45),
					14=>new ParserAction($this->shift, $table9),
					15=>new ParserAction($this->shift, $table10),
					16=>new ParserAction($this->shift, $table11),
					17=>new ParserAction($this->shift, $table12),
					18=>new ParserAction($this->shift, $table13),
					19=>new ParserAction($this->shift, $table14),
					20=>new ParserAction($this->reduce, $table45),
					21=>new ParserAction($this->shift, $table15),
					22=>new ParserAction($this->reduce, $table45),
					23=>new ParserAction($this->shift, $table16),
					24=>new ParserAction($this->reduce, $table45),
					25=>new ParserAction($this->shift, $table17),
					26=>new ParserAction($this->reduce, $table45),
					27=>new ParserAction($this->shift, $table18),
					28=>new ParserAction($this->reduce, $table45),
					29=>new ParserAction($this->shift, $table19),
					30=>new ParserAction($this->reduce, $table45),
					31=>new ParserAction($this->shift, $table20),
					32=>new ParserAction($this->shift, $table60),
					33=>new ParserAction($this->shift, $table21),
					34=>new ParserAction($this->reduce, $table45),
					35=>new ParserAction($this->shift, $table22),
					36=>new ParserAction($this->shift, $table23),
					37=>new ParserAction($this->reduce, $table45),
					38=>new ParserAction($this->shift, $table24),
					39=>new ParserAction($this->reduce, $table45),
					40=>new ParserAction($this->shift, $table25),
					41=>new ParserAction($this->reduce, $table45),
					42=>new ParserAction($this->shift, $table26),
					43=>new ParserAction($this->reduce, $table45),
					44=>new ParserAction($this->shift, $table27),
					45=>new ParserAction($this->reduce, $table45),
					46=>new ParserAction($this->shift, $table28),
					47=>new ParserAction($this->reduce, $table45),
					48=>new ParserAction($this->shift, $table29),
					49=>new ParserAction($this->reduce, $table45),
					50=>new ParserAction($this->shift, $table30),
					51=>new ParserAction($this->shift, $table31),
					53=>new ParserAction($this->shift, $table32),
					55=>new ParserAction($this->reduce, $table45),
					56=>new ParserAction($this->shift, $table33),
					57=>new ParserAction($this->shift, $table34),
					58=>new ParserAction($this->shift, $table35),
					59=>new ParserAction($this->shift, $table36),
					60=>new ParserAction($this->shift, $table37),
					61=>new ParserAction($this->shift, $table38),
					63=>new ParserAction($this->reduce, $table45)
				);

			$tableDefinition21 = array(
				
					1=>new ParserAction($this->reduce, $table49),
					4=>new ParserAction($this->none, $table61),
					5=>new ParserAction($this->reduce, $table49),
					6=>new ParserAction($this->none, $table4),
					7=>new ParserAction($this->shift, $table5),
					8=>new ParserAction($this->shift, $table6),
					9=>new ParserAction($this->reduce, $table49),
					10=>new ParserAction($this->shift, $table7),
					11=>new ParserAction($this->reduce, $table49),
					12=>new ParserAction($this->shift, $table8),
					13=>new ParserAction($this->reduce, $table49),
					14=>new ParserAction($this->shift, $table9),
					15=>new ParserAction($this->shift, $table10),
					16=>new ParserAction($this->shift, $table11),
					17=>new ParserAction($this->shift, $table12),
					18=>new ParserAction($this->shift, $table13),
					19=>new ParserAction($this->shift, $table14),
					20=>new ParserAction($this->reduce, $table49),
					21=>new ParserAction($this->shift, $table15),
					22=>new ParserAction($this->reduce, $table49),
					23=>new ParserAction($this->shift, $table16),
					24=>new ParserAction($this->reduce, $table49),
					25=>new ParserAction($this->shift, $table17),
					26=>new ParserAction($this->reduce, $table49),
					27=>new ParserAction($this->shift, $table18),
					28=>new ParserAction($this->reduce, $table49),
					29=>new ParserAction($this->shift, $table19),
					30=>new ParserAction($this->reduce, $table49),
					31=>new ParserAction($this->shift, $table20),
					32=>new ParserAction($this->reduce, $table49),
					33=>new ParserAction($this->shift, $table21),
					34=>new ParserAction($this->shift, $table62),
					35=>new ParserAction($this->shift, $table22),
					36=>new ParserAction($this->shift, $table23),
					37=>new ParserAction($this->reduce, $table49),
					38=>new ParserAction($this->shift, $table24),
					39=>new ParserAction($this->reduce, $table49),
					40=>new ParserAction($this->shift, $table25),
					41=>new ParserAction($this->reduce, $table49),
					42=>new ParserAction($this->shift, $table26),
					43=>new ParserAction($this->reduce, $table49),
					44=>new ParserAction($this->shift, $table27),
					45=>new ParserAction($this->reduce, $table49),
					46=>new ParserAction($this->shift, $table28),
					47=>new ParserAction($this->reduce, $table49),
					48=>new ParserAction($this->shift, $table29),
					49=>new ParserAction($this->reduce, $table49),
					50=>new ParserAction($this->shift, $table30),
					51=>new ParserAction($this->shift, $table31),
					53=>new ParserAction($this->shift, $table32),
					55=>new ParserAction($this->reduce, $table49),
					56=>new ParserAction($this->shift, $table33),
					57=>new ParserAction($this->shift, $table34),
					58=>new ParserAction($this->shift, $table35),
					59=>new ParserAction($this->shift, $table36),
					60=>new ParserAction($this->shift, $table37),
					61=>new ParserAction($this->shift, $table38),
					63=>new ParserAction($this->reduce, $table49)
				);

			$tableDefinition22 = array(
				
					1=>new ParserAction($this->reduce, $table53),
					5=>new ParserAction($this->reduce, $table53),
					7=>new ParserAction($this->reduce, $table53),
					8=>new ParserAction($this->reduce, $table53),
					9=>new ParserAction($this->reduce, $table53),
					10=>new ParserAction($this->reduce, $table53),
					11=>new ParserAction($this->reduce, $table53),
					12=>new ParserAction($this->reduce, $table53),
					13=>new ParserAction($this->reduce, $table53),
					14=>new ParserAction($this->reduce, $table53),
					15=>new ParserAction($this->reduce, $table53),
					16=>new ParserAction($this->reduce, $table53),
					17=>new ParserAction($this->reduce, $table53),
					18=>new ParserAction($this->reduce, $table53),
					19=>new ParserAction($this->reduce, $table53),
					20=>new ParserAction($this->reduce, $table53),
					21=>new ParserAction($this->reduce, $table53),
					22=>new ParserAction($this->reduce, $table53),
					23=>new ParserAction($this->reduce, $table53),
					24=>new ParserAction($this->reduce, $table53),
					25=>new ParserAction($this->reduce, $table53),
					26=>new ParserAction($this->reduce, $table53),
					27=>new ParserAction($this->reduce, $table53),
					28=>new ParserAction($this->reduce, $table53),
					29=>new ParserAction($this->reduce, $table53),
					30=>new ParserAction($this->reduce, $table53),
					31=>new ParserAction($this->reduce, $table53),
					32=>new ParserAction($this->reduce, $table53),
					33=>new ParserAction($this->reduce, $table53),
					34=>new ParserAction($this->reduce, $table53),
					35=>new ParserAction($this->reduce, $table53),
					36=>new ParserAction($this->reduce, $table53),
					37=>new ParserAction($this->reduce, $table53),
					38=>new ParserAction($this->reduce, $table53),
					39=>new ParserAction($this->reduce, $table53),
					40=>new ParserAction($this->reduce, $table53),
					41=>new ParserAction($this->reduce, $table53),
					42=>new ParserAction($this->reduce, $table53),
					43=>new ParserAction($this->reduce, $table53),
					44=>new ParserAction($this->reduce, $table53),
					45=>new ParserAction($this->reduce, $table53),
					46=>new ParserAction($this->reduce, $table53),
					47=>new ParserAction($this->reduce, $table53),
					48=>new ParserAction($this->reduce, $table53),
					49=>new ParserAction($this->reduce, $table53),
					50=>new ParserAction($this->reduce, $table53),
					51=>new ParserAction($this->reduce, $table53),
					53=>new ParserAction($this->reduce, $table53),
					55=>new ParserAction($this->reduce, $table53),
					56=>new ParserAction($this->reduce, $table53),
					57=>new ParserAction($this->reduce, $table53),
					58=>new ParserAction($this->reduce, $table53),
					59=>new ParserAction($this->reduce, $table53),
					60=>new ParserAction($this->reduce, $table53),
					61=>new ParserAction($this->reduce, $table53),
					63=>new ParserAction($this->reduce, $table53)
				);

			$tableDefinition23 = array(
				
					1=>new ParserAction($this->reduce, $table54),
					4=>new ParserAction($this->none, $table63),
					5=>new ParserAction($this->reduce, $table54),
					6=>new ParserAction($this->none, $table4),
					7=>new ParserAction($this->shift, $table5),
					8=>new ParserAction($this->shift, $table6),
					9=>new ParserAction($this->reduce, $table54),
					10=>new ParserAction($this->shift, $table7),
					11=>new ParserAction($this->reduce, $table54),
					12=>new ParserAction($this->shift, $table8),
					13=>new ParserAction($this->reduce, $table54),
					14=>new ParserAction($this->shift, $table9),
					15=>new ParserAction($this->shift, $table10),
					16=>new ParserAction($this->shift, $table11),
					17=>new ParserAction($this->shift, $table12),
					18=>new ParserAction($this->shift, $table13),
					19=>new ParserAction($this->shift, $table14),
					20=>new ParserAction($this->reduce, $table54),
					21=>new ParserAction($this->shift, $table15),
					22=>new ParserAction($this->reduce, $table54),
					23=>new ParserAction($this->shift, $table16),
					24=>new ParserAction($this->reduce, $table54),
					25=>new ParserAction($this->shift, $table17),
					26=>new ParserAction($this->reduce, $table54),
					27=>new ParserAction($this->shift, $table18),
					28=>new ParserAction($this->reduce, $table54),
					29=>new ParserAction($this->shift, $table19),
					30=>new ParserAction($this->reduce, $table54),
					31=>new ParserAction($this->shift, $table20),
					32=>new ParserAction($this->reduce, $table54),
					33=>new ParserAction($this->shift, $table21),
					34=>new ParserAction($this->reduce, $table54),
					35=>new ParserAction($this->shift, $table22),
					36=>new ParserAction($this->shift, $table23),
					37=>new ParserAction($this->shift, $table64),
					38=>new ParserAction($this->shift, $table24),
					39=>new ParserAction($this->reduce, $table54),
					40=>new ParserAction($this->shift, $table25),
					41=>new ParserAction($this->reduce, $table54),
					42=>new ParserAction($this->shift, $table26),
					43=>new ParserAction($this->reduce, $table54),
					44=>new ParserAction($this->shift, $table27),
					45=>new ParserAction($this->reduce, $table54),
					46=>new ParserAction($this->shift, $table28),
					47=>new ParserAction($this->reduce, $table54),
					48=>new ParserAction($this->shift, $table29),
					49=>new ParserAction($this->reduce, $table54),
					50=>new ParserAction($this->shift, $table30),
					51=>new ParserAction($this->shift, $table31),
					53=>new ParserAction($this->shift, $table32),
					55=>new ParserAction($this->reduce, $table54),
					56=>new ParserAction($this->shift, $table33),
					57=>new ParserAction($this->shift, $table34),
					58=>new ParserAction($this->shift, $table35),
					59=>new ParserAction($this->shift, $table36),
					60=>new ParserAction($this->shift, $table37),
					61=>new ParserAction($this->shift, $table38),
					63=>new ParserAction($this->reduce, $table54)
				);

			$tableDefinition24 = array(
				
					1=>new ParserAction($this->reduce, $table58),
					4=>new ParserAction($this->none, $table65),
					5=>new ParserAction($this->reduce, $table58),
					6=>new ParserAction($this->none, $table4),
					7=>new ParserAction($this->shift, $table5),
					8=>new ParserAction($this->shift, $table6),
					9=>new ParserAction($this->reduce, $table58),
					10=>new ParserAction($this->shift, $table7),
					11=>new ParserAction($this->reduce, $table58),
					12=>new ParserAction($this->shift, $table8),
					13=>new ParserAction($this->reduce, $table58),
					14=>new ParserAction($this->shift, $table9),
					15=>new ParserAction($this->shift, $table10),
					16=>new ParserAction($this->shift, $table11),
					17=>new ParserAction($this->shift, $table12),
					18=>new ParserAction($this->shift, $table13),
					19=>new ParserAction($this->shift, $table14),
					20=>new ParserAction($this->reduce, $table58),
					21=>new ParserAction($this->shift, $table15),
					22=>new ParserAction($this->reduce, $table58),
					23=>new ParserAction($this->shift, $table16),
					24=>new ParserAction($this->reduce, $table58),
					25=>new ParserAction($this->shift, $table17),
					26=>new ParserAction($this->reduce, $table58),
					27=>new ParserAction($this->shift, $table18),
					28=>new ParserAction($this->reduce, $table58),
					29=>new ParserAction($this->shift, $table19),
					30=>new ParserAction($this->reduce, $table58),
					31=>new ParserAction($this->shift, $table20),
					32=>new ParserAction($this->reduce, $table58),
					33=>new ParserAction($this->shift, $table21),
					34=>new ParserAction($this->reduce, $table58),
					35=>new ParserAction($this->shift, $table22),
					36=>new ParserAction($this->shift, $table23),
					37=>new ParserAction($this->reduce, $table58),
					38=>new ParserAction($this->shift, $table24),
					39=>new ParserAction($this->shift, $table66),
					40=>new ParserAction($this->shift, $table25),
					41=>new ParserAction($this->reduce, $table58),
					42=>new ParserAction($this->shift, $table26),
					43=>new ParserAction($this->reduce, $table58),
					44=>new ParserAction($this->shift, $table27),
					45=>new ParserAction($this->reduce, $table58),
					46=>new ParserAction($this->shift, $table28),
					47=>new ParserAction($this->reduce, $table58),
					48=>new ParserAction($this->shift, $table29),
					49=>new ParserAction($this->reduce, $table58),
					50=>new ParserAction($this->shift, $table30),
					51=>new ParserAction($this->shift, $table31),
					53=>new ParserAction($this->shift, $table32),
					55=>new ParserAction($this->reduce, $table58),
					56=>new ParserAction($this->shift, $table33),
					57=>new ParserAction($this->shift, $table34),
					58=>new ParserAction($this->shift, $table35),
					59=>new ParserAction($this->shift, $table36),
					60=>new ParserAction($this->shift, $table37),
					61=>new ParserAction($this->shift, $table38),
					63=>new ParserAction($this->reduce, $table58)
				);

			$tableDefinition25 = array(
				
					1=>new ParserAction($this->reduce, $table62),
					4=>new ParserAction($this->none, $table67),
					5=>new ParserAction($this->reduce, $table62),
					6=>new ParserAction($this->none, $table4),
					7=>new ParserAction($this->shift, $table5),
					8=>new ParserAction($this->shift, $table6),
					9=>new ParserAction($this->reduce, $table62),
					10=>new ParserAction($this->shift, $table7),
					11=>new ParserAction($this->reduce, $table62),
					12=>new ParserAction($this->shift, $table8),
					13=>new ParserAction($this->reduce, $table62),
					14=>new ParserAction($this->shift, $table9),
					15=>new ParserAction($this->shift, $table10),
					16=>new ParserAction($this->shift, $table11),
					17=>new ParserAction($this->shift, $table12),
					18=>new ParserAction($this->shift, $table13),
					19=>new ParserAction($this->shift, $table14),
					20=>new ParserAction($this->reduce, $table62),
					21=>new ParserAction($this->shift, $table15),
					22=>new ParserAction($this->reduce, $table62),
					23=>new ParserAction($this->shift, $table16),
					24=>new ParserAction($this->reduce, $table62),
					25=>new ParserAction($this->shift, $table17),
					26=>new ParserAction($this->reduce, $table62),
					27=>new ParserAction($this->shift, $table18),
					28=>new ParserAction($this->reduce, $table62),
					29=>new ParserAction($this->shift, $table19),
					30=>new ParserAction($this->reduce, $table62),
					31=>new ParserAction($this->shift, $table20),
					32=>new ParserAction($this->reduce, $table62),
					33=>new ParserAction($this->shift, $table21),
					34=>new ParserAction($this->reduce, $table62),
					35=>new ParserAction($this->shift, $table22),
					36=>new ParserAction($this->shift, $table23),
					37=>new ParserAction($this->reduce, $table62),
					38=>new ParserAction($this->shift, $table24),
					39=>new ParserAction($this->reduce, $table62),
					40=>new ParserAction($this->shift, $table25),
					41=>new ParserAction($this->shift, $table68),
					42=>new ParserAction($this->shift, $table26),
					43=>new ParserAction($this->reduce, $table62),
					44=>new ParserAction($this->shift, $table27),
					45=>new ParserAction($this->reduce, $table62),
					46=>new ParserAction($this->shift, $table28),
					47=>new ParserAction($this->reduce, $table62),
					48=>new ParserAction($this->shift, $table29),
					49=>new ParserAction($this->reduce, $table62),
					50=>new ParserAction($this->shift, $table30),
					51=>new ParserAction($this->shift, $table31),
					53=>new ParserAction($this->shift, $table32),
					55=>new ParserAction($this->reduce, $table62),
					56=>new ParserAction($this->shift, $table33),
					57=>new ParserAction($this->shift, $table34),
					58=>new ParserAction($this->shift, $table35),
					59=>new ParserAction($this->shift, $table36),
					60=>new ParserAction($this->shift, $table37),
					61=>new ParserAction($this->shift, $table38),
					63=>new ParserAction($this->reduce, $table62)
				);

			$tableDefinition26 = array(
				
					1=>new ParserAction($this->reduce, $table66),
					4=>new ParserAction($this->none, $table69),
					5=>new ParserAction($this->reduce, $table66),
					6=>new ParserAction($this->none, $table4),
					7=>new ParserAction($this->shift, $table5),
					8=>new ParserAction($this->shift, $table6),
					9=>new ParserAction($this->reduce, $table66),
					10=>new ParserAction($this->shift, $table7),
					11=>new ParserAction($this->reduce, $table66),
					12=>new ParserAction($this->shift, $table8),
					13=>new ParserAction($this->reduce, $table66),
					14=>new ParserAction($this->shift, $table9),
					15=>new ParserAction($this->shift, $table10),
					16=>new ParserAction($this->shift, $table11),
					17=>new ParserAction($this->shift, $table12),
					18=>new ParserAction($this->shift, $table13),
					19=>new ParserAction($this->shift, $table14),
					20=>new ParserAction($this->reduce, $table66),
					21=>new ParserAction($this->shift, $table15),
					22=>new ParserAction($this->reduce, $table66),
					23=>new ParserAction($this->shift, $table16),
					24=>new ParserAction($this->reduce, $table66),
					25=>new ParserAction($this->shift, $table17),
					26=>new ParserAction($this->reduce, $table66),
					27=>new ParserAction($this->shift, $table18),
					28=>new ParserAction($this->reduce, $table66),
					29=>new ParserAction($this->shift, $table19),
					30=>new ParserAction($this->reduce, $table66),
					31=>new ParserAction($this->shift, $table20),
					32=>new ParserAction($this->reduce, $table66),
					33=>new ParserAction($this->shift, $table21),
					34=>new ParserAction($this->reduce, $table66),
					35=>new ParserAction($this->shift, $table22),
					36=>new ParserAction($this->shift, $table23),
					37=>new ParserAction($this->reduce, $table66),
					38=>new ParserAction($this->shift, $table24),
					39=>new ParserAction($this->reduce, $table66),
					40=>new ParserAction($this->shift, $table25),
					41=>new ParserAction($this->reduce, $table66),
					42=>new ParserAction($this->shift, $table26),
					43=>new ParserAction($this->shift, $table70),
					44=>new ParserAction($this->shift, $table27),
					45=>new ParserAction($this->reduce, $table66),
					46=>new ParserAction($this->shift, $table28),
					47=>new ParserAction($this->reduce, $table66),
					48=>new ParserAction($this->shift, $table29),
					49=>new ParserAction($this->reduce, $table66),
					50=>new ParserAction($this->shift, $table30),
					51=>new ParserAction($this->shift, $table31),
					53=>new ParserAction($this->shift, $table32),
					55=>new ParserAction($this->reduce, $table66),
					56=>new ParserAction($this->shift, $table33),
					57=>new ParserAction($this->shift, $table34),
					58=>new ParserAction($this->shift, $table35),
					59=>new ParserAction($this->shift, $table36),
					60=>new ParserAction($this->shift, $table37),
					61=>new ParserAction($this->shift, $table38),
					63=>new ParserAction($this->reduce, $table66)
				);

			$tableDefinition27 = array(
				
					1=>new ParserAction($this->reduce, $table70),
					4=>new ParserAction($this->none, $table71),
					5=>new ParserAction($this->reduce, $table70),
					6=>new ParserAction($this->none, $table4),
					7=>new ParserAction($this->shift, $table5),
					8=>new ParserAction($this->shift, $table6),
					9=>new ParserAction($this->reduce, $table70),
					10=>new ParserAction($this->shift, $table7),
					11=>new ParserAction($this->reduce, $table70),
					12=>new ParserAction($this->shift, $table8),
					13=>new ParserAction($this->reduce, $table70),
					14=>new ParserAction($this->shift, $table9),
					15=>new ParserAction($this->shift, $table10),
					16=>new ParserAction($this->shift, $table11),
					17=>new ParserAction($this->shift, $table12),
					18=>new ParserAction($this->shift, $table13),
					19=>new ParserAction($this->shift, $table14),
					20=>new ParserAction($this->reduce, $table70),
					21=>new ParserAction($this->shift, $table15),
					22=>new ParserAction($this->reduce, $table70),
					23=>new ParserAction($this->shift, $table16),
					24=>new ParserAction($this->reduce, $table70),
					25=>new ParserAction($this->shift, $table17),
					26=>new ParserAction($this->reduce, $table70),
					27=>new ParserAction($this->shift, $table18),
					28=>new ParserAction($this->reduce, $table70),
					29=>new ParserAction($this->shift, $table19),
					30=>new ParserAction($this->reduce, $table70),
					31=>new ParserAction($this->shift, $table20),
					32=>new ParserAction($this->reduce, $table70),
					33=>new ParserAction($this->shift, $table21),
					34=>new ParserAction($this->reduce, $table70),
					35=>new ParserAction($this->shift, $table22),
					36=>new ParserAction($this->shift, $table23),
					37=>new ParserAction($this->reduce, $table70),
					38=>new ParserAction($this->shift, $table24),
					39=>new ParserAction($this->reduce, $table70),
					40=>new ParserAction($this->shift, $table25),
					41=>new ParserAction($this->reduce, $table70),
					42=>new ParserAction($this->shift, $table26),
					43=>new ParserAction($this->reduce, $table70),
					44=>new ParserAction($this->shift, $table27),
					45=>new ParserAction($this->shift, $table72),
					46=>new ParserAction($this->shift, $table28),
					47=>new ParserAction($this->reduce, $table70),
					48=>new ParserAction($this->shift, $table29),
					49=>new ParserAction($this->reduce, $table70),
					50=>new ParserAction($this->shift, $table30),
					51=>new ParserAction($this->shift, $table31),
					53=>new ParserAction($this->shift, $table32),
					55=>new ParserAction($this->reduce, $table70),
					56=>new ParserAction($this->shift, $table33),
					57=>new ParserAction($this->shift, $table34),
					58=>new ParserAction($this->shift, $table35),
					59=>new ParserAction($this->shift, $table36),
					60=>new ParserAction($this->shift, $table37),
					61=>new ParserAction($this->shift, $table38),
					63=>new ParserAction($this->reduce, $table70)
				);

			$tableDefinition28 = array(
				
					1=>new ParserAction($this->reduce, $table74),
					4=>new ParserAction($this->none, $table73),
					5=>new ParserAction($this->reduce, $table74),
					6=>new ParserAction($this->none, $table4),
					7=>new ParserAction($this->shift, $table5),
					8=>new ParserAction($this->shift, $table6),
					9=>new ParserAction($this->reduce, $table74),
					10=>new ParserAction($this->shift, $table7),
					11=>new ParserAction($this->reduce, $table74),
					12=>new ParserAction($this->shift, $table8),
					13=>new ParserAction($this->reduce, $table74),
					14=>new ParserAction($this->shift, $table9),
					15=>new ParserAction($this->shift, $table10),
					16=>new ParserAction($this->shift, $table11),
					17=>new ParserAction($this->shift, $table12),
					18=>new ParserAction($this->shift, $table13),
					19=>new ParserAction($this->shift, $table14),
					20=>new ParserAction($this->reduce, $table74),
					21=>new ParserAction($this->shift, $table15),
					22=>new ParserAction($this->reduce, $table74),
					23=>new ParserAction($this->shift, $table16),
					24=>new ParserAction($this->reduce, $table74),
					25=>new ParserAction($this->shift, $table17),
					26=>new ParserAction($this->reduce, $table74),
					27=>new ParserAction($this->shift, $table18),
					28=>new ParserAction($this->reduce, $table74),
					29=>new ParserAction($this->shift, $table19),
					30=>new ParserAction($this->reduce, $table74),
					31=>new ParserAction($this->shift, $table20),
					32=>new ParserAction($this->reduce, $table74),
					33=>new ParserAction($this->shift, $table21),
					34=>new ParserAction($this->reduce, $table74),
					35=>new ParserAction($this->shift, $table22),
					36=>new ParserAction($this->shift, $table23),
					37=>new ParserAction($this->reduce, $table74),
					38=>new ParserAction($this->shift, $table24),
					39=>new ParserAction($this->reduce, $table74),
					40=>new ParserAction($this->shift, $table25),
					41=>new ParserAction($this->reduce, $table74),
					42=>new ParserAction($this->shift, $table26),
					43=>new ParserAction($this->reduce, $table74),
					44=>new ParserAction($this->shift, $table27),
					45=>new ParserAction($this->reduce, $table74),
					46=>new ParserAction($this->shift, $table28),
					47=>new ParserAction($this->shift, $table74),
					48=>new ParserAction($this->shift, $table29),
					49=>new ParserAction($this->reduce, $table74),
					50=>new ParserAction($this->shift, $table30),
					51=>new ParserAction($this->shift, $table31),
					53=>new ParserAction($this->shift, $table32),
					55=>new ParserAction($this->reduce, $table74),
					56=>new ParserAction($this->shift, $table33),
					57=>new ParserAction($this->shift, $table34),
					58=>new ParserAction($this->shift, $table35),
					59=>new ParserAction($this->shift, $table36),
					60=>new ParserAction($this->shift, $table37),
					61=>new ParserAction($this->shift, $table38),
					63=>new ParserAction($this->reduce, $table74)
				);

			$tableDefinition29 = array(
				
					1=>new ParserAction($this->reduce, $table78),
					4=>new ParserAction($this->none, $table75),
					5=>new ParserAction($this->reduce, $table78),
					6=>new ParserAction($this->none, $table4),
					7=>new ParserAction($this->shift, $table5),
					8=>new ParserAction($this->shift, $table6),
					9=>new ParserAction($this->reduce, $table78),
					10=>new ParserAction($this->shift, $table7),
					11=>new ParserAction($this->reduce, $table78),
					12=>new ParserAction($this->shift, $table8),
					13=>new ParserAction($this->reduce, $table78),
					14=>new ParserAction($this->shift, $table9),
					15=>new ParserAction($this->shift, $table10),
					16=>new ParserAction($this->shift, $table11),
					17=>new ParserAction($this->shift, $table12),
					18=>new ParserAction($this->shift, $table13),
					19=>new ParserAction($this->shift, $table14),
					20=>new ParserAction($this->reduce, $table78),
					21=>new ParserAction($this->shift, $table15),
					22=>new ParserAction($this->reduce, $table78),
					23=>new ParserAction($this->shift, $table16),
					24=>new ParserAction($this->reduce, $table78),
					25=>new ParserAction($this->shift, $table17),
					26=>new ParserAction($this->reduce, $table78),
					27=>new ParserAction($this->shift, $table18),
					28=>new ParserAction($this->reduce, $table78),
					29=>new ParserAction($this->shift, $table19),
					30=>new ParserAction($this->reduce, $table78),
					31=>new ParserAction($this->shift, $table20),
					32=>new ParserAction($this->reduce, $table78),
					33=>new ParserAction($this->shift, $table21),
					34=>new ParserAction($this->reduce, $table78),
					35=>new ParserAction($this->shift, $table22),
					36=>new ParserAction($this->shift, $table23),
					37=>new ParserAction($this->reduce, $table78),
					38=>new ParserAction($this->shift, $table24),
					39=>new ParserAction($this->reduce, $table78),
					40=>new ParserAction($this->shift, $table25),
					41=>new ParserAction($this->reduce, $table78),
					42=>new ParserAction($this->shift, $table26),
					43=>new ParserAction($this->reduce, $table78),
					44=>new ParserAction($this->shift, $table27),
					45=>new ParserAction($this->reduce, $table78),
					46=>new ParserAction($this->shift, $table28),
					47=>new ParserAction($this->reduce, $table78),
					48=>new ParserAction($this->shift, $table29),
					49=>new ParserAction($this->shift, $table76),
					50=>new ParserAction($this->shift, $table30),
					51=>new ParserAction($this->shift, $table31),
					53=>new ParserAction($this->shift, $table32),
					55=>new ParserAction($this->reduce, $table78),
					56=>new ParserAction($this->shift, $table33),
					57=>new ParserAction($this->shift, $table34),
					58=>new ParserAction($this->shift, $table35),
					59=>new ParserAction($this->shift, $table36),
					60=>new ParserAction($this->shift, $table37),
					61=>new ParserAction($this->shift, $table38),
					63=>new ParserAction($this->reduce, $table78)
				);

			$tableDefinition30 = array(
				
					1=>new ParserAction($this->reduce, $table82),
					5=>new ParserAction($this->reduce, $table82),
					7=>new ParserAction($this->reduce, $table82),
					8=>new ParserAction($this->reduce, $table82),
					9=>new ParserAction($this->reduce, $table82),
					10=>new ParserAction($this->reduce, $table82),
					11=>new ParserAction($this->reduce, $table82),
					12=>new ParserAction($this->reduce, $table82),
					13=>new ParserAction($this->reduce, $table82),
					14=>new ParserAction($this->reduce, $table82),
					15=>new ParserAction($this->reduce, $table82),
					16=>new ParserAction($this->reduce, $table82),
					17=>new ParserAction($this->reduce, $table82),
					18=>new ParserAction($this->reduce, $table82),
					19=>new ParserAction($this->reduce, $table82),
					20=>new ParserAction($this->reduce, $table82),
					21=>new ParserAction($this->reduce, $table82),
					22=>new ParserAction($this->reduce, $table82),
					23=>new ParserAction($this->reduce, $table82),
					24=>new ParserAction($this->reduce, $table82),
					25=>new ParserAction($this->reduce, $table82),
					26=>new ParserAction($this->reduce, $table82),
					27=>new ParserAction($this->reduce, $table82),
					28=>new ParserAction($this->reduce, $table82),
					29=>new ParserAction($this->reduce, $table82),
					30=>new ParserAction($this->reduce, $table82),
					31=>new ParserAction($this->reduce, $table82),
					32=>new ParserAction($this->reduce, $table82),
					33=>new ParserAction($this->reduce, $table82),
					34=>new ParserAction($this->reduce, $table82),
					35=>new ParserAction($this->reduce, $table82),
					36=>new ParserAction($this->reduce, $table82),
					37=>new ParserAction($this->reduce, $table82),
					38=>new ParserAction($this->reduce, $table82),
					39=>new ParserAction($this->reduce, $table82),
					40=>new ParserAction($this->reduce, $table82),
					41=>new ParserAction($this->reduce, $table82),
					42=>new ParserAction($this->reduce, $table82),
					43=>new ParserAction($this->reduce, $table82),
					44=>new ParserAction($this->reduce, $table82),
					45=>new ParserAction($this->reduce, $table82),
					46=>new ParserAction($this->reduce, $table82),
					47=>new ParserAction($this->reduce, $table82),
					48=>new ParserAction($this->reduce, $table82),
					49=>new ParserAction($this->reduce, $table82),
					50=>new ParserAction($this->reduce, $table82),
					51=>new ParserAction($this->reduce, $table82),
					53=>new ParserAction($this->reduce, $table82),
					55=>new ParserAction($this->reduce, $table82),
					56=>new ParserAction($this->reduce, $table82),
					57=>new ParserAction($this->reduce, $table82),
					58=>new ParserAction($this->reduce, $table82),
					59=>new ParserAction($this->reduce, $table82),
					60=>new ParserAction($this->reduce, $table82),
					61=>new ParserAction($this->reduce, $table82),
					63=>new ParserAction($this->reduce, $table82)
				);

			$tableDefinition31 = array(
				
					1=>new ParserAction($this->reduce, $table83),
					4=>new ParserAction($this->none, $table77),
					5=>new ParserAction($this->reduce, $table83),
					6=>new ParserAction($this->none, $table4),
					7=>new ParserAction($this->shift, $table5),
					8=>new ParserAction($this->shift, $table6),
					9=>new ParserAction($this->reduce, $table83),
					10=>new ParserAction($this->shift, $table7),
					11=>new ParserAction($this->reduce, $table83),
					12=>new ParserAction($this->shift, $table8),
					13=>new ParserAction($this->reduce, $table83),
					14=>new ParserAction($this->shift, $table9),
					15=>new ParserAction($this->shift, $table10),
					16=>new ParserAction($this->shift, $table11),
					17=>new ParserAction($this->shift, $table12),
					18=>new ParserAction($this->shift, $table13),
					19=>new ParserAction($this->shift, $table14),
					20=>new ParserAction($this->reduce, $table83),
					21=>new ParserAction($this->shift, $table15),
					22=>new ParserAction($this->reduce, $table83),
					23=>new ParserAction($this->shift, $table16),
					24=>new ParserAction($this->reduce, $table83),
					25=>new ParserAction($this->shift, $table17),
					26=>new ParserAction($this->reduce, $table83),
					27=>new ParserAction($this->shift, $table18),
					28=>new ParserAction($this->reduce, $table83),
					29=>new ParserAction($this->shift, $table19),
					30=>new ParserAction($this->reduce, $table83),
					31=>new ParserAction($this->shift, $table20),
					32=>new ParserAction($this->reduce, $table83),
					33=>new ParserAction($this->shift, $table21),
					34=>new ParserAction($this->reduce, $table83),
					35=>new ParserAction($this->shift, $table22),
					36=>new ParserAction($this->shift, $table23),
					37=>new ParserAction($this->reduce, $table83),
					38=>new ParserAction($this->shift, $table24),
					39=>new ParserAction($this->reduce, $table83),
					40=>new ParserAction($this->shift, $table25),
					41=>new ParserAction($this->reduce, $table83),
					42=>new ParserAction($this->shift, $table26),
					43=>new ParserAction($this->reduce, $table83),
					44=>new ParserAction($this->shift, $table27),
					45=>new ParserAction($this->reduce, $table83),
					46=>new ParserAction($this->shift, $table28),
					47=>new ParserAction($this->reduce, $table83),
					48=>new ParserAction($this->shift, $table29),
					49=>new ParserAction($this->reduce, $table83),
					50=>new ParserAction($this->shift, $table30),
					51=>new ParserAction($this->shift, $table31),
					52=>new ParserAction($this->shift, $table78),
					53=>new ParserAction($this->shift, $table32),
					55=>new ParserAction($this->reduce, $table83),
					56=>new ParserAction($this->shift, $table33),
					57=>new ParserAction($this->shift, $table34),
					58=>new ParserAction($this->shift, $table35),
					59=>new ParserAction($this->shift, $table36),
					60=>new ParserAction($this->shift, $table37),
					61=>new ParserAction($this->shift, $table38),
					63=>new ParserAction($this->reduce, $table83)
				);

			$tableDefinition32 = array(
				
					1=>new ParserAction($this->reduce, $table89),
					5=>new ParserAction($this->reduce, $table89),
					7=>new ParserAction($this->reduce, $table89),
					8=>new ParserAction($this->reduce, $table89),
					9=>new ParserAction($this->reduce, $table89),
					10=>new ParserAction($this->reduce, $table89),
					11=>new ParserAction($this->reduce, $table89),
					12=>new ParserAction($this->reduce, $table89),
					13=>new ParserAction($this->reduce, $table89),
					14=>new ParserAction($this->reduce, $table89),
					15=>new ParserAction($this->reduce, $table89),
					16=>new ParserAction($this->reduce, $table89),
					17=>new ParserAction($this->reduce, $table89),
					18=>new ParserAction($this->reduce, $table89),
					19=>new ParserAction($this->reduce, $table89),
					20=>new ParserAction($this->reduce, $table89),
					21=>new ParserAction($this->reduce, $table89),
					22=>new ParserAction($this->reduce, $table89),
					23=>new ParserAction($this->reduce, $table89),
					24=>new ParserAction($this->reduce, $table89),
					25=>new ParserAction($this->reduce, $table89),
					26=>new ParserAction($this->reduce, $table89),
					27=>new ParserAction($this->reduce, $table89),
					28=>new ParserAction($this->reduce, $table89),
					29=>new ParserAction($this->reduce, $table89),
					30=>new ParserAction($this->reduce, $table89),
					31=>new ParserAction($this->reduce, $table89),
					32=>new ParserAction($this->reduce, $table89),
					33=>new ParserAction($this->reduce, $table89),
					34=>new ParserAction($this->reduce, $table89),
					35=>new ParserAction($this->reduce, $table89),
					36=>new ParserAction($this->reduce, $table89),
					37=>new ParserAction($this->reduce, $table89),
					38=>new ParserAction($this->reduce, $table89),
					39=>new ParserAction($this->reduce, $table89),
					40=>new ParserAction($this->reduce, $table89),
					41=>new ParserAction($this->reduce, $table89),
					42=>new ParserAction($this->reduce, $table89),
					43=>new ParserAction($this->reduce, $table89),
					44=>new ParserAction($this->reduce, $table89),
					45=>new ParserAction($this->reduce, $table89),
					46=>new ParserAction($this->reduce, $table89),
					47=>new ParserAction($this->reduce, $table89),
					48=>new ParserAction($this->reduce, $table89),
					49=>new ParserAction($this->reduce, $table89),
					50=>new ParserAction($this->reduce, $table89),
					51=>new ParserAction($this->reduce, $table89),
					53=>new ParserAction($this->reduce, $table89),
					54=>new ParserAction($this->shift, $table79),
					55=>new ParserAction($this->reduce, $table89),
					56=>new ParserAction($this->reduce, $table89),
					57=>new ParserAction($this->reduce, $table89),
					58=>new ParserAction($this->reduce, $table89),
					59=>new ParserAction($this->reduce, $table89),
					60=>new ParserAction($this->reduce, $table89),
					61=>new ParserAction($this->reduce, $table89),
					63=>new ParserAction($this->reduce, $table89)
				);

			$tableDefinition33 = array(
				
					1=>new ParserAction($this->reduce, $table90),
					5=>new ParserAction($this->reduce, $table90),
					7=>new ParserAction($this->reduce, $table90),
					8=>new ParserAction($this->reduce, $table90),
					9=>new ParserAction($this->reduce, $table90),
					10=>new ParserAction($this->reduce, $table90),
					11=>new ParserAction($this->reduce, $table90),
					12=>new ParserAction($this->reduce, $table90),
					13=>new ParserAction($this->reduce, $table90),
					14=>new ParserAction($this->reduce, $table90),
					15=>new ParserAction($this->reduce, $table90),
					16=>new ParserAction($this->reduce, $table90),
					17=>new ParserAction($this->reduce, $table90),
					18=>new ParserAction($this->reduce, $table90),
					19=>new ParserAction($this->reduce, $table90),
					20=>new ParserAction($this->reduce, $table90),
					21=>new ParserAction($this->reduce, $table90),
					22=>new ParserAction($this->reduce, $table90),
					23=>new ParserAction($this->reduce, $table90),
					24=>new ParserAction($this->reduce, $table90),
					25=>new ParserAction($this->reduce, $table90),
					26=>new ParserAction($this->reduce, $table90),
					27=>new ParserAction($this->reduce, $table90),
					28=>new ParserAction($this->reduce, $table90),
					29=>new ParserAction($this->reduce, $table90),
					30=>new ParserAction($this->reduce, $table90),
					31=>new ParserAction($this->reduce, $table90),
					32=>new ParserAction($this->reduce, $table90),
					33=>new ParserAction($this->reduce, $table90),
					34=>new ParserAction($this->reduce, $table90),
					35=>new ParserAction($this->reduce, $table90),
					36=>new ParserAction($this->reduce, $table90),
					37=>new ParserAction($this->reduce, $table90),
					38=>new ParserAction($this->reduce, $table90),
					39=>new ParserAction($this->reduce, $table90),
					40=>new ParserAction($this->reduce, $table90),
					41=>new ParserAction($this->reduce, $table90),
					42=>new ParserAction($this->reduce, $table90),
					43=>new ParserAction($this->reduce, $table90),
					44=>new ParserAction($this->reduce, $table90),
					45=>new ParserAction($this->reduce, $table90),
					46=>new ParserAction($this->reduce, $table90),
					47=>new ParserAction($this->reduce, $table90),
					48=>new ParserAction($this->reduce, $table90),
					49=>new ParserAction($this->reduce, $table90),
					50=>new ParserAction($this->reduce, $table90),
					51=>new ParserAction($this->reduce, $table90),
					53=>new ParserAction($this->reduce, $table90),
					55=>new ParserAction($this->reduce, $table90),
					56=>new ParserAction($this->reduce, $table90),
					57=>new ParserAction($this->reduce, $table90),
					58=>new ParserAction($this->reduce, $table90),
					59=>new ParserAction($this->reduce, $table90),
					60=>new ParserAction($this->reduce, $table90),
					61=>new ParserAction($this->reduce, $table90),
					63=>new ParserAction($this->reduce, $table90)
				);

			$tableDefinition34 = array(
				
					1=>new ParserAction($this->reduce, $table91),
					5=>new ParserAction($this->reduce, $table91),
					7=>new ParserAction($this->reduce, $table91),
					8=>new ParserAction($this->reduce, $table91),
					9=>new ParserAction($this->reduce, $table91),
					10=>new ParserAction($this->reduce, $table91),
					11=>new ParserAction($this->reduce, $table91),
					12=>new ParserAction($this->reduce, $table91),
					13=>new ParserAction($this->reduce, $table91),
					14=>new ParserAction($this->reduce, $table91),
					15=>new ParserAction($this->reduce, $table91),
					16=>new ParserAction($this->reduce, $table91),
					17=>new ParserAction($this->reduce, $table91),
					18=>new ParserAction($this->reduce, $table91),
					19=>new ParserAction($this->reduce, $table91),
					20=>new ParserAction($this->reduce, $table91),
					21=>new ParserAction($this->reduce, $table91),
					22=>new ParserAction($this->reduce, $table91),
					23=>new ParserAction($this->reduce, $table91),
					24=>new ParserAction($this->reduce, $table91),
					25=>new ParserAction($this->reduce, $table91),
					26=>new ParserAction($this->reduce, $table91),
					27=>new ParserAction($this->reduce, $table91),
					28=>new ParserAction($this->reduce, $table91),
					29=>new ParserAction($this->reduce, $table91),
					30=>new ParserAction($this->reduce, $table91),
					31=>new ParserAction($this->reduce, $table91),
					32=>new ParserAction($this->reduce, $table91),
					33=>new ParserAction($this->reduce, $table91),
					34=>new ParserAction($this->reduce, $table91),
					35=>new ParserAction($this->reduce, $table91),
					36=>new ParserAction($this->reduce, $table91),
					37=>new ParserAction($this->reduce, $table91),
					38=>new ParserAction($this->reduce, $table91),
					39=>new ParserAction($this->reduce, $table91),
					40=>new ParserAction($this->reduce, $table91),
					41=>new ParserAction($this->reduce, $table91),
					42=>new ParserAction($this->reduce, $table91),
					43=>new ParserAction($this->reduce, $table91),
					44=>new ParserAction($this->reduce, $table91),
					45=>new ParserAction($this->reduce, $table91),
					46=>new ParserAction($this->reduce, $table91),
					47=>new ParserAction($this->reduce, $table91),
					48=>new ParserAction($this->reduce, $table91),
					49=>new ParserAction($this->reduce, $table91),
					50=>new ParserAction($this->reduce, $table91),
					51=>new ParserAction($this->reduce, $table91),
					53=>new ParserAction($this->reduce, $table91),
					55=>new ParserAction($this->reduce, $table91),
					56=>new ParserAction($this->reduce, $table91),
					57=>new ParserAction($this->reduce, $table91),
					58=>new ParserAction($this->reduce, $table91),
					59=>new ParserAction($this->reduce, $table91),
					60=>new ParserAction($this->reduce, $table91),
					61=>new ParserAction($this->reduce, $table91),
					63=>new ParserAction($this->reduce, $table91)
				);

			$tableDefinition35 = array(
				
					1=>new ParserAction($this->reduce, $table92),
					5=>new ParserAction($this->reduce, $table92),
					7=>new ParserAction($this->reduce, $table92),
					8=>new ParserAction($this->reduce, $table92),
					9=>new ParserAction($this->reduce, $table92),
					10=>new ParserAction($this->reduce, $table92),
					11=>new ParserAction($this->reduce, $table92),
					12=>new ParserAction($this->reduce, $table92),
					13=>new ParserAction($this->reduce, $table92),
					14=>new ParserAction($this->reduce, $table92),
					15=>new ParserAction($this->reduce, $table92),
					16=>new ParserAction($this->reduce, $table92),
					17=>new ParserAction($this->reduce, $table92),
					18=>new ParserAction($this->reduce, $table92),
					19=>new ParserAction($this->reduce, $table92),
					20=>new ParserAction($this->reduce, $table92),
					21=>new ParserAction($this->reduce, $table92),
					22=>new ParserAction($this->reduce, $table92),
					23=>new ParserAction($this->reduce, $table92),
					24=>new ParserAction($this->reduce, $table92),
					25=>new ParserAction($this->reduce, $table92),
					26=>new ParserAction($this->reduce, $table92),
					27=>new ParserAction($this->reduce, $table92),
					28=>new ParserAction($this->reduce, $table92),
					29=>new ParserAction($this->reduce, $table92),
					30=>new ParserAction($this->reduce, $table92),
					31=>new ParserAction($this->reduce, $table92),
					32=>new ParserAction($this->reduce, $table92),
					33=>new ParserAction($this->reduce, $table92),
					34=>new ParserAction($this->reduce, $table92),
					35=>new ParserAction($this->reduce, $table92),
					36=>new ParserAction($this->reduce, $table92),
					37=>new ParserAction($this->reduce, $table92),
					38=>new ParserAction($this->reduce, $table92),
					39=>new ParserAction($this->reduce, $table92),
					40=>new ParserAction($this->reduce, $table92),
					41=>new ParserAction($this->reduce, $table92),
					42=>new ParserAction($this->reduce, $table92),
					43=>new ParserAction($this->reduce, $table92),
					44=>new ParserAction($this->reduce, $table92),
					45=>new ParserAction($this->reduce, $table92),
					46=>new ParserAction($this->reduce, $table92),
					47=>new ParserAction($this->reduce, $table92),
					48=>new ParserAction($this->reduce, $table92),
					49=>new ParserAction($this->reduce, $table92),
					50=>new ParserAction($this->reduce, $table92),
					51=>new ParserAction($this->reduce, $table92),
					53=>new ParserAction($this->reduce, $table92),
					55=>new ParserAction($this->reduce, $table92),
					56=>new ParserAction($this->reduce, $table92),
					57=>new ParserAction($this->reduce, $table92),
					58=>new ParserAction($this->reduce, $table92),
					59=>new ParserAction($this->reduce, $table92),
					60=>new ParserAction($this->reduce, $table92),
					61=>new ParserAction($this->reduce, $table92),
					63=>new ParserAction($this->reduce, $table92)
				);

			$tableDefinition36 = array(
				
					1=>new ParserAction($this->reduce, $table93),
					5=>new ParserAction($this->reduce, $table93),
					7=>new ParserAction($this->reduce, $table93),
					8=>new ParserAction($this->reduce, $table93),
					9=>new ParserAction($this->reduce, $table93),
					10=>new ParserAction($this->reduce, $table93),
					11=>new ParserAction($this->reduce, $table93),
					12=>new ParserAction($this->reduce, $table93),
					13=>new ParserAction($this->reduce, $table93),
					14=>new ParserAction($this->reduce, $table93),
					15=>new ParserAction($this->reduce, $table93),
					16=>new ParserAction($this->reduce, $table93),
					17=>new ParserAction($this->reduce, $table93),
					18=>new ParserAction($this->reduce, $table93),
					19=>new ParserAction($this->reduce, $table93),
					20=>new ParserAction($this->reduce, $table93),
					21=>new ParserAction($this->reduce, $table93),
					22=>new ParserAction($this->reduce, $table93),
					23=>new ParserAction($this->reduce, $table93),
					24=>new ParserAction($this->reduce, $table93),
					25=>new ParserAction($this->reduce, $table93),
					26=>new ParserAction($this->reduce, $table93),
					27=>new ParserAction($this->reduce, $table93),
					28=>new ParserAction($this->reduce, $table93),
					29=>new ParserAction($this->reduce, $table93),
					30=>new ParserAction($this->reduce, $table93),
					31=>new ParserAction($this->reduce, $table93),
					32=>new ParserAction($this->reduce, $table93),
					33=>new ParserAction($this->reduce, $table93),
					34=>new ParserAction($this->reduce, $table93),
					35=>new ParserAction($this->reduce, $table93),
					36=>new ParserAction($this->reduce, $table93),
					37=>new ParserAction($this->reduce, $table93),
					38=>new ParserAction($this->reduce, $table93),
					39=>new ParserAction($this->reduce, $table93),
					40=>new ParserAction($this->reduce, $table93),
					41=>new ParserAction($this->reduce, $table93),
					42=>new ParserAction($this->reduce, $table93),
					43=>new ParserAction($this->reduce, $table93),
					44=>new ParserAction($this->reduce, $table93),
					45=>new ParserAction($this->reduce, $table93),
					46=>new ParserAction($this->reduce, $table93),
					47=>new ParserAction($this->reduce, $table93),
					48=>new ParserAction($this->reduce, $table93),
					49=>new ParserAction($this->reduce, $table93),
					50=>new ParserAction($this->reduce, $table93),
					51=>new ParserAction($this->reduce, $table93),
					53=>new ParserAction($this->reduce, $table93),
					55=>new ParserAction($this->reduce, $table93),
					56=>new ParserAction($this->reduce, $table93),
					57=>new ParserAction($this->reduce, $table93),
					58=>new ParserAction($this->reduce, $table93),
					59=>new ParserAction($this->reduce, $table93),
					60=>new ParserAction($this->reduce, $table93),
					61=>new ParserAction($this->reduce, $table93),
					63=>new ParserAction($this->reduce, $table93)
				);

			$tableDefinition37 = array(
				
					1=>new ParserAction($this->reduce, $table94),
					5=>new ParserAction($this->reduce, $table94),
					7=>new ParserAction($this->reduce, $table94),
					8=>new ParserAction($this->reduce, $table94),
					9=>new ParserAction($this->reduce, $table94),
					10=>new ParserAction($this->reduce, $table94),
					11=>new ParserAction($this->reduce, $table94),
					12=>new ParserAction($this->reduce, $table94),
					13=>new ParserAction($this->reduce, $table94),
					14=>new ParserAction($this->reduce, $table94),
					15=>new ParserAction($this->reduce, $table94),
					16=>new ParserAction($this->reduce, $table94),
					17=>new ParserAction($this->reduce, $table94),
					18=>new ParserAction($this->reduce, $table94),
					19=>new ParserAction($this->reduce, $table94),
					20=>new ParserAction($this->reduce, $table94),
					21=>new ParserAction($this->reduce, $table94),
					22=>new ParserAction($this->reduce, $table94),
					23=>new ParserAction($this->reduce, $table94),
					24=>new ParserAction($this->reduce, $table94),
					25=>new ParserAction($this->reduce, $table94),
					26=>new ParserAction($this->reduce, $table94),
					27=>new ParserAction($this->reduce, $table94),
					28=>new ParserAction($this->reduce, $table94),
					29=>new ParserAction($this->reduce, $table94),
					30=>new ParserAction($this->reduce, $table94),
					31=>new ParserAction($this->reduce, $table94),
					32=>new ParserAction($this->reduce, $table94),
					33=>new ParserAction($this->reduce, $table94),
					34=>new ParserAction($this->reduce, $table94),
					35=>new ParserAction($this->reduce, $table94),
					36=>new ParserAction($this->reduce, $table94),
					37=>new ParserAction($this->reduce, $table94),
					38=>new ParserAction($this->reduce, $table94),
					39=>new ParserAction($this->reduce, $table94),
					40=>new ParserAction($this->reduce, $table94),
					41=>new ParserAction($this->reduce, $table94),
					42=>new ParserAction($this->reduce, $table94),
					43=>new ParserAction($this->reduce, $table94),
					44=>new ParserAction($this->reduce, $table94),
					45=>new ParserAction($this->reduce, $table94),
					46=>new ParserAction($this->reduce, $table94),
					47=>new ParserAction($this->reduce, $table94),
					48=>new ParserAction($this->reduce, $table94),
					49=>new ParserAction($this->reduce, $table94),
					50=>new ParserAction($this->reduce, $table94),
					51=>new ParserAction($this->reduce, $table94),
					53=>new ParserAction($this->reduce, $table94),
					55=>new ParserAction($this->reduce, $table94),
					56=>new ParserAction($this->reduce, $table94),
					57=>new ParserAction($this->reduce, $table94),
					58=>new ParserAction($this->reduce, $table94),
					59=>new ParserAction($this->reduce, $table94),
					60=>new ParserAction($this->reduce, $table94),
					61=>new ParserAction($this->reduce, $table94),
					63=>new ParserAction($this->reduce, $table94)
				);

			$tableDefinition38 = array(
				
					1=>new ParserAction($this->reduce, $table99),
					5=>new ParserAction($this->reduce, $table99),
					7=>new ParserAction($this->reduce, $table99),
					8=>new ParserAction($this->reduce, $table99),
					9=>new ParserAction($this->reduce, $table99),
					10=>new ParserAction($this->reduce, $table99),
					11=>new ParserAction($this->reduce, $table99),
					12=>new ParserAction($this->reduce, $table99),
					13=>new ParserAction($this->reduce, $table99),
					14=>new ParserAction($this->reduce, $table99),
					15=>new ParserAction($this->reduce, $table99),
					16=>new ParserAction($this->reduce, $table99),
					17=>new ParserAction($this->reduce, $table99),
					18=>new ParserAction($this->reduce, $table99),
					19=>new ParserAction($this->reduce, $table99),
					20=>new ParserAction($this->reduce, $table99),
					21=>new ParserAction($this->reduce, $table99),
					22=>new ParserAction($this->reduce, $table99),
					23=>new ParserAction($this->reduce, $table99),
					24=>new ParserAction($this->reduce, $table99),
					25=>new ParserAction($this->reduce, $table99),
					26=>new ParserAction($this->reduce, $table99),
					27=>new ParserAction($this->reduce, $table99),
					28=>new ParserAction($this->reduce, $table99),
					29=>new ParserAction($this->reduce, $table99),
					30=>new ParserAction($this->reduce, $table99),
					31=>new ParserAction($this->reduce, $table99),
					32=>new ParserAction($this->reduce, $table99),
					33=>new ParserAction($this->reduce, $table99),
					34=>new ParserAction($this->reduce, $table99),
					35=>new ParserAction($this->reduce, $table99),
					36=>new ParserAction($this->reduce, $table99),
					37=>new ParserAction($this->reduce, $table99),
					38=>new ParserAction($this->reduce, $table99),
					39=>new ParserAction($this->reduce, $table99),
					40=>new ParserAction($this->reduce, $table99),
					41=>new ParserAction($this->reduce, $table99),
					42=>new ParserAction($this->reduce, $table99),
					43=>new ParserAction($this->reduce, $table99),
					44=>new ParserAction($this->reduce, $table99),
					45=>new ParserAction($this->reduce, $table99),
					46=>new ParserAction($this->reduce, $table99),
					47=>new ParserAction($this->reduce, $table99),
					48=>new ParserAction($this->reduce, $table99),
					49=>new ParserAction($this->reduce, $table99),
					50=>new ParserAction($this->reduce, $table99),
					51=>new ParserAction($this->reduce, $table99),
					53=>new ParserAction($this->reduce, $table99),
					55=>new ParserAction($this->reduce, $table99),
					56=>new ParserAction($this->reduce, $table99),
					57=>new ParserAction($this->reduce, $table99),
					58=>new ParserAction($this->reduce, $table99),
					59=>new ParserAction($this->reduce, $table99),
					60=>new ParserAction($this->reduce, $table99),
					61=>new ParserAction($this->reduce, $table99),
					62=>new ParserAction($this->shift, $table80),
					63=>new ParserAction($this->reduce, $table99)
				);

			$tableDefinition39 = array(
				
					1=>new ParserAction($this->reduce, $table2)
				);

			$tableDefinition40 = array(
				
					1=>new ParserAction($this->reduce, $table5),
					5=>new ParserAction($this->reduce, $table5),
					7=>new ParserAction($this->reduce, $table5),
					8=>new ParserAction($this->reduce, $table5),
					9=>new ParserAction($this->reduce, $table5),
					10=>new ParserAction($this->reduce, $table5),
					11=>new ParserAction($this->reduce, $table5),
					12=>new ParserAction($this->reduce, $table5),
					13=>new ParserAction($this->reduce, $table5),
					14=>new ParserAction($this->reduce, $table5),
					15=>new ParserAction($this->reduce, $table5),
					16=>new ParserAction($this->reduce, $table5),
					17=>new ParserAction($this->reduce, $table5),
					18=>new ParserAction($this->reduce, $table5),
					19=>new ParserAction($this->reduce, $table5),
					20=>new ParserAction($this->reduce, $table5),
					21=>new ParserAction($this->reduce, $table5),
					22=>new ParserAction($this->reduce, $table5),
					23=>new ParserAction($this->reduce, $table5),
					24=>new ParserAction($this->reduce, $table5),
					25=>new ParserAction($this->reduce, $table5),
					26=>new ParserAction($this->reduce, $table5),
					27=>new ParserAction($this->reduce, $table5),
					28=>new ParserAction($this->reduce, $table5),
					29=>new ParserAction($this->reduce, $table5),
					30=>new ParserAction($this->reduce, $table5),
					31=>new ParserAction($this->reduce, $table5),
					32=>new ParserAction($this->reduce, $table5),
					33=>new ParserAction($this->reduce, $table5),
					34=>new ParserAction($this->reduce, $table5),
					35=>new ParserAction($this->reduce, $table5),
					36=>new ParserAction($this->reduce, $table5),
					37=>new ParserAction($this->reduce, $table5),
					38=>new ParserAction($this->reduce, $table5),
					39=>new ParserAction($this->reduce, $table5),
					40=>new ParserAction($this->reduce, $table5),
					41=>new ParserAction($this->reduce, $table5),
					42=>new ParserAction($this->reduce, $table5),
					43=>new ParserAction($this->reduce, $table5),
					44=>new ParserAction($this->reduce, $table5),
					45=>new ParserAction($this->reduce, $table5),
					46=>new ParserAction($this->reduce, $table5),
					47=>new ParserAction($this->reduce, $table5),
					48=>new ParserAction($this->reduce, $table5),
					49=>new ParserAction($this->reduce, $table5),
					50=>new ParserAction($this->reduce, $table5),
					51=>new ParserAction($this->reduce, $table5),
					53=>new ParserAction($this->reduce, $table5),
					55=>new ParserAction($this->reduce, $table5),
					56=>new ParserAction($this->reduce, $table5),
					57=>new ParserAction($this->reduce, $table5),
					58=>new ParserAction($this->reduce, $table5),
					59=>new ParserAction($this->reduce, $table5),
					60=>new ParserAction($this->reduce, $table5),
					61=>new ParserAction($this->reduce, $table5),
					63=>new ParserAction($this->reduce, $table5)
				);

			$tableDefinition41 = array(
				
					1=>new ParserAction($this->reduce, $table8),
					5=>new ParserAction($this->reduce, $table8),
					7=>new ParserAction($this->reduce, $table8),
					8=>new ParserAction($this->reduce, $table8),
					9=>new ParserAction($this->reduce, $table8),
					10=>new ParserAction($this->reduce, $table8),
					11=>new ParserAction($this->reduce, $table8),
					12=>new ParserAction($this->reduce, $table8),
					13=>new ParserAction($this->reduce, $table8),
					14=>new ParserAction($this->reduce, $table8),
					15=>new ParserAction($this->reduce, $table8),
					16=>new ParserAction($this->reduce, $table8),
					17=>new ParserAction($this->reduce, $table8),
					18=>new ParserAction($this->reduce, $table8),
					19=>new ParserAction($this->reduce, $table8),
					20=>new ParserAction($this->reduce, $table8),
					21=>new ParserAction($this->reduce, $table8),
					22=>new ParserAction($this->reduce, $table8),
					23=>new ParserAction($this->reduce, $table8),
					24=>new ParserAction($this->reduce, $table8),
					25=>new ParserAction($this->reduce, $table8),
					26=>new ParserAction($this->reduce, $table8),
					27=>new ParserAction($this->reduce, $table8),
					28=>new ParserAction($this->reduce, $table8),
					29=>new ParserAction($this->reduce, $table8),
					30=>new ParserAction($this->reduce, $table8),
					31=>new ParserAction($this->reduce, $table8),
					32=>new ParserAction($this->reduce, $table8),
					33=>new ParserAction($this->reduce, $table8),
					34=>new ParserAction($this->reduce, $table8),
					35=>new ParserAction($this->reduce, $table8),
					36=>new ParserAction($this->reduce, $table8),
					37=>new ParserAction($this->reduce, $table8),
					38=>new ParserAction($this->reduce, $table8),
					39=>new ParserAction($this->reduce, $table8),
					40=>new ParserAction($this->reduce, $table8),
					41=>new ParserAction($this->reduce, $table8),
					42=>new ParserAction($this->reduce, $table8),
					43=>new ParserAction($this->reduce, $table8),
					44=>new ParserAction($this->reduce, $table8),
					45=>new ParserAction($this->reduce, $table8),
					46=>new ParserAction($this->reduce, $table8),
					47=>new ParserAction($this->reduce, $table8),
					48=>new ParserAction($this->reduce, $table8),
					49=>new ParserAction($this->reduce, $table8),
					50=>new ParserAction($this->reduce, $table8),
					51=>new ParserAction($this->reduce, $table8),
					53=>new ParserAction($this->reduce, $table8),
					55=>new ParserAction($this->reduce, $table8),
					56=>new ParserAction($this->reduce, $table8),
					57=>new ParserAction($this->reduce, $table8),
					58=>new ParserAction($this->reduce, $table8),
					59=>new ParserAction($this->reduce, $table8),
					60=>new ParserAction($this->reduce, $table8),
					61=>new ParserAction($this->reduce, $table8),
					63=>new ParserAction($this->reduce, $table8)
				);

			$tableDefinition42 = array(
				
					6=>new ParserAction($this->none, $table40),
					7=>new ParserAction($this->shift, $table5),
					8=>new ParserAction($this->shift, $table6),
					9=>new ParserAction($this->shift, $table81),
					10=>new ParserAction($this->shift, $table7),
					12=>new ParserAction($this->shift, $table8),
					14=>new ParserAction($this->shift, $table9),
					15=>new ParserAction($this->shift, $table10),
					16=>new ParserAction($this->shift, $table11),
					17=>new ParserAction($this->shift, $table12),
					18=>new ParserAction($this->shift, $table13),
					19=>new ParserAction($this->shift, $table14),
					21=>new ParserAction($this->shift, $table15),
					23=>new ParserAction($this->shift, $table16),
					25=>new ParserAction($this->shift, $table17),
					27=>new ParserAction($this->shift, $table18),
					29=>new ParserAction($this->shift, $table19),
					31=>new ParserAction($this->shift, $table20),
					33=>new ParserAction($this->shift, $table21),
					35=>new ParserAction($this->shift, $table22),
					36=>new ParserAction($this->shift, $table23),
					38=>new ParserAction($this->shift, $table24),
					40=>new ParserAction($this->shift, $table25),
					42=>new ParserAction($this->shift, $table26),
					44=>new ParserAction($this->shift, $table27),
					46=>new ParserAction($this->shift, $table28),
					48=>new ParserAction($this->shift, $table29),
					50=>new ParserAction($this->shift, $table30),
					51=>new ParserAction($this->shift, $table31),
					53=>new ParserAction($this->shift, $table32),
					56=>new ParserAction($this->shift, $table33),
					57=>new ParserAction($this->shift, $table34),
					58=>new ParserAction($this->shift, $table35),
					59=>new ParserAction($this->shift, $table36),
					60=>new ParserAction($this->shift, $table37),
					61=>new ParserAction($this->shift, $table38)
				);

			$tableDefinition43 = array(
				
					1=>new ParserAction($this->reduce, $table11),
					5=>new ParserAction($this->reduce, $table11),
					7=>new ParserAction($this->reduce, $table11),
					8=>new ParserAction($this->reduce, $table11),
					9=>new ParserAction($this->reduce, $table11),
					10=>new ParserAction($this->reduce, $table11),
					11=>new ParserAction($this->reduce, $table11),
					12=>new ParserAction($this->reduce, $table11),
					13=>new ParserAction($this->reduce, $table11),
					14=>new ParserAction($this->reduce, $table11),
					15=>new ParserAction($this->reduce, $table11),
					16=>new ParserAction($this->reduce, $table11),
					17=>new ParserAction($this->reduce, $table11),
					18=>new ParserAction($this->reduce, $table11),
					19=>new ParserAction($this->reduce, $table11),
					20=>new ParserAction($this->reduce, $table11),
					21=>new ParserAction($this->reduce, $table11),
					22=>new ParserAction($this->reduce, $table11),
					23=>new ParserAction($this->reduce, $table11),
					24=>new ParserAction($this->reduce, $table11),
					25=>new ParserAction($this->reduce, $table11),
					26=>new ParserAction($this->reduce, $table11),
					27=>new ParserAction($this->reduce, $table11),
					28=>new ParserAction($this->reduce, $table11),
					29=>new ParserAction($this->reduce, $table11),
					30=>new ParserAction($this->reduce, $table11),
					31=>new ParserAction($this->reduce, $table11),
					32=>new ParserAction($this->reduce, $table11),
					33=>new ParserAction($this->reduce, $table11),
					34=>new ParserAction($this->reduce, $table11),
					35=>new ParserAction($this->reduce, $table11),
					36=>new ParserAction($this->reduce, $table11),
					37=>new ParserAction($this->reduce, $table11),
					38=>new ParserAction($this->reduce, $table11),
					39=>new ParserAction($this->reduce, $table11),
					40=>new ParserAction($this->reduce, $table11),
					41=>new ParserAction($this->reduce, $table11),
					42=>new ParserAction($this->reduce, $table11),
					43=>new ParserAction($this->reduce, $table11),
					44=>new ParserAction($this->reduce, $table11),
					45=>new ParserAction($this->reduce, $table11),
					46=>new ParserAction($this->reduce, $table11),
					47=>new ParserAction($this->reduce, $table11),
					48=>new ParserAction($this->reduce, $table11),
					49=>new ParserAction($this->reduce, $table11),
					50=>new ParserAction($this->reduce, $table11),
					51=>new ParserAction($this->reduce, $table11),
					53=>new ParserAction($this->reduce, $table11),
					55=>new ParserAction($this->reduce, $table11),
					56=>new ParserAction($this->reduce, $table11),
					57=>new ParserAction($this->reduce, $table11),
					58=>new ParserAction($this->reduce, $table11),
					59=>new ParserAction($this->reduce, $table11),
					60=>new ParserAction($this->reduce, $table11),
					61=>new ParserAction($this->reduce, $table11),
					63=>new ParserAction($this->reduce, $table11)
				);

			$tableDefinition44 = array(
				
					6=>new ParserAction($this->none, $table40),
					7=>new ParserAction($this->shift, $table5),
					8=>new ParserAction($this->shift, $table6),
					10=>new ParserAction($this->shift, $table7),
					11=>new ParserAction($this->shift, $table82),
					12=>new ParserAction($this->shift, $table8),
					14=>new ParserAction($this->shift, $table9),
					15=>new ParserAction($this->shift, $table10),
					16=>new ParserAction($this->shift, $table11),
					17=>new ParserAction($this->shift, $table12),
					18=>new ParserAction($this->shift, $table13),
					19=>new ParserAction($this->shift, $table14),
					21=>new ParserAction($this->shift, $table15),
					23=>new ParserAction($this->shift, $table16),
					25=>new ParserAction($this->shift, $table17),
					27=>new ParserAction($this->shift, $table18),
					29=>new ParserAction($this->shift, $table19),
					31=>new ParserAction($this->shift, $table20),
					33=>new ParserAction($this->shift, $table21),
					35=>new ParserAction($this->shift, $table22),
					36=>new ParserAction($this->shift, $table23),
					38=>new ParserAction($this->shift, $table24),
					40=>new ParserAction($this->shift, $table25),
					42=>new ParserAction($this->shift, $table26),
					44=>new ParserAction($this->shift, $table27),
					46=>new ParserAction($this->shift, $table28),
					48=>new ParserAction($this->shift, $table29),
					50=>new ParserAction($this->shift, $table30),
					51=>new ParserAction($this->shift, $table31),
					53=>new ParserAction($this->shift, $table32),
					56=>new ParserAction($this->shift, $table33),
					57=>new ParserAction($this->shift, $table34),
					58=>new ParserAction($this->shift, $table35),
					59=>new ParserAction($this->shift, $table36),
					60=>new ParserAction($this->shift, $table37),
					61=>new ParserAction($this->shift, $table38)
				);

			$tableDefinition45 = array(
				
					1=>new ParserAction($this->reduce, $table14),
					5=>new ParserAction($this->reduce, $table14),
					7=>new ParserAction($this->reduce, $table14),
					8=>new ParserAction($this->reduce, $table14),
					9=>new ParserAction($this->reduce, $table14),
					10=>new ParserAction($this->reduce, $table14),
					11=>new ParserAction($this->reduce, $table14),
					12=>new ParserAction($this->reduce, $table14),
					13=>new ParserAction($this->reduce, $table14),
					14=>new ParserAction($this->reduce, $table14),
					15=>new ParserAction($this->reduce, $table14),
					16=>new ParserAction($this->reduce, $table14),
					17=>new ParserAction($this->reduce, $table14),
					18=>new ParserAction($this->reduce, $table14),
					19=>new ParserAction($this->reduce, $table14),
					20=>new ParserAction($this->reduce, $table14),
					21=>new ParserAction($this->reduce, $table14),
					22=>new ParserAction($this->reduce, $table14),
					23=>new ParserAction($this->reduce, $table14),
					24=>new ParserAction($this->reduce, $table14),
					25=>new ParserAction($this->reduce, $table14),
					26=>new ParserAction($this->reduce, $table14),
					27=>new ParserAction($this->reduce, $table14),
					28=>new ParserAction($this->reduce, $table14),
					29=>new ParserAction($this->reduce, $table14),
					30=>new ParserAction($this->reduce, $table14),
					31=>new ParserAction($this->reduce, $table14),
					32=>new ParserAction($this->reduce, $table14),
					33=>new ParserAction($this->reduce, $table14),
					34=>new ParserAction($this->reduce, $table14),
					35=>new ParserAction($this->reduce, $table14),
					36=>new ParserAction($this->reduce, $table14),
					37=>new ParserAction($this->reduce, $table14),
					38=>new ParserAction($this->reduce, $table14),
					39=>new ParserAction($this->reduce, $table14),
					40=>new ParserAction($this->reduce, $table14),
					41=>new ParserAction($this->reduce, $table14),
					42=>new ParserAction($this->reduce, $table14),
					43=>new ParserAction($this->reduce, $table14),
					44=>new ParserAction($this->reduce, $table14),
					45=>new ParserAction($this->reduce, $table14),
					46=>new ParserAction($this->reduce, $table14),
					47=>new ParserAction($this->reduce, $table14),
					48=>new ParserAction($this->reduce, $table14),
					49=>new ParserAction($this->reduce, $table14),
					50=>new ParserAction($this->reduce, $table14),
					51=>new ParserAction($this->reduce, $table14),
					53=>new ParserAction($this->reduce, $table14),
					55=>new ParserAction($this->reduce, $table14),
					56=>new ParserAction($this->reduce, $table14),
					57=>new ParserAction($this->reduce, $table14),
					58=>new ParserAction($this->reduce, $table14),
					59=>new ParserAction($this->reduce, $table14),
					60=>new ParserAction($this->reduce, $table14),
					61=>new ParserAction($this->reduce, $table14),
					63=>new ParserAction($this->reduce, $table14)
				);

			$tableDefinition46 = array(
				
					6=>new ParserAction($this->none, $table40),
					7=>new ParserAction($this->shift, $table5),
					8=>new ParserAction($this->shift, $table6),
					10=>new ParserAction($this->shift, $table7),
					12=>new ParserAction($this->shift, $table8),
					13=>new ParserAction($this->shift, $table83),
					14=>new ParserAction($this->shift, $table9),
					15=>new ParserAction($this->shift, $table10),
					16=>new ParserAction($this->shift, $table11),
					17=>new ParserAction($this->shift, $table12),
					18=>new ParserAction($this->shift, $table13),
					19=>new ParserAction($this->shift, $table14),
					21=>new ParserAction($this->shift, $table15),
					23=>new ParserAction($this->shift, $table16),
					25=>new ParserAction($this->shift, $table17),
					27=>new ParserAction($this->shift, $table18),
					29=>new ParserAction($this->shift, $table19),
					31=>new ParserAction($this->shift, $table20),
					33=>new ParserAction($this->shift, $table21),
					35=>new ParserAction($this->shift, $table22),
					36=>new ParserAction($this->shift, $table23),
					38=>new ParserAction($this->shift, $table24),
					40=>new ParserAction($this->shift, $table25),
					42=>new ParserAction($this->shift, $table26),
					44=>new ParserAction($this->shift, $table27),
					46=>new ParserAction($this->shift, $table28),
					48=>new ParserAction($this->shift, $table29),
					50=>new ParserAction($this->shift, $table30),
					51=>new ParserAction($this->shift, $table31),
					53=>new ParserAction($this->shift, $table32),
					56=>new ParserAction($this->shift, $table33),
					57=>new ParserAction($this->shift, $table34),
					58=>new ParserAction($this->shift, $table35),
					59=>new ParserAction($this->shift, $table36),
					60=>new ParserAction($this->shift, $table37),
					61=>new ParserAction($this->shift, $table38)
				);

			$tableDefinition47 = array(
				
					1=>new ParserAction($this->reduce, $table22),
					5=>new ParserAction($this->reduce, $table22),
					6=>new ParserAction($this->none, $table40),
					7=>new ParserAction($this->shift, $table5),
					8=>new ParserAction($this->shift, $table6),
					9=>new ParserAction($this->reduce, $table22),
					10=>new ParserAction($this->shift, $table7),
					11=>new ParserAction($this->reduce, $table22),
					12=>new ParserAction($this->shift, $table8),
					13=>new ParserAction($this->reduce, $table22),
					14=>new ParserAction($this->shift, $table9),
					15=>new ParserAction($this->shift, $table10),
					16=>new ParserAction($this->shift, $table11),
					17=>new ParserAction($this->shift, $table12),
					18=>new ParserAction($this->shift, $table13),
					19=>new ParserAction($this->shift, $table14),
					20=>new ParserAction($this->shift, $table84),
					21=>new ParserAction($this->shift, $table15),
					22=>new ParserAction($this->reduce, $table22),
					23=>new ParserAction($this->shift, $table16),
					24=>new ParserAction($this->reduce, $table22),
					25=>new ParserAction($this->shift, $table17),
					26=>new ParserAction($this->reduce, $table22),
					27=>new ParserAction($this->shift, $table18),
					28=>new ParserAction($this->reduce, $table22),
					29=>new ParserAction($this->shift, $table19),
					30=>new ParserAction($this->reduce, $table22),
					31=>new ParserAction($this->shift, $table20),
					32=>new ParserAction($this->reduce, $table22),
					33=>new ParserAction($this->shift, $table21),
					34=>new ParserAction($this->reduce, $table22),
					35=>new ParserAction($this->shift, $table22),
					36=>new ParserAction($this->shift, $table23),
					37=>new ParserAction($this->reduce, $table22),
					38=>new ParserAction($this->shift, $table24),
					39=>new ParserAction($this->reduce, $table22),
					40=>new ParserAction($this->shift, $table25),
					41=>new ParserAction($this->reduce, $table22),
					42=>new ParserAction($this->shift, $table26),
					43=>new ParserAction($this->reduce, $table22),
					44=>new ParserAction($this->shift, $table27),
					45=>new ParserAction($this->reduce, $table22),
					46=>new ParserAction($this->shift, $table28),
					47=>new ParserAction($this->reduce, $table22),
					48=>new ParserAction($this->shift, $table29),
					49=>new ParserAction($this->reduce, $table22),
					50=>new ParserAction($this->shift, $table30),
					51=>new ParserAction($this->shift, $table31),
					53=>new ParserAction($this->shift, $table32),
					55=>new ParserAction($this->reduce, $table22),
					56=>new ParserAction($this->shift, $table33),
					57=>new ParserAction($this->shift, $table34),
					58=>new ParserAction($this->shift, $table35),
					59=>new ParserAction($this->shift, $table36),
					60=>new ParserAction($this->shift, $table37),
					61=>new ParserAction($this->shift, $table38),
					63=>new ParserAction($this->reduce, $table22)
				);

			$tableDefinition48 = array(
				
					1=>new ParserAction($this->reduce, $table23),
					5=>new ParserAction($this->reduce, $table23),
					7=>new ParserAction($this->reduce, $table23),
					8=>new ParserAction($this->reduce, $table23),
					9=>new ParserAction($this->reduce, $table23),
					10=>new ParserAction($this->reduce, $table23),
					11=>new ParserAction($this->reduce, $table23),
					12=>new ParserAction($this->reduce, $table23),
					13=>new ParserAction($this->reduce, $table23),
					14=>new ParserAction($this->reduce, $table23),
					15=>new ParserAction($this->reduce, $table23),
					16=>new ParserAction($this->reduce, $table23),
					17=>new ParserAction($this->reduce, $table23),
					18=>new ParserAction($this->reduce, $table23),
					19=>new ParserAction($this->reduce, $table23),
					20=>new ParserAction($this->reduce, $table23),
					21=>new ParserAction($this->reduce, $table23),
					22=>new ParserAction($this->reduce, $table23),
					23=>new ParserAction($this->reduce, $table23),
					24=>new ParserAction($this->reduce, $table23),
					25=>new ParserAction($this->reduce, $table23),
					26=>new ParserAction($this->reduce, $table23),
					27=>new ParserAction($this->reduce, $table23),
					28=>new ParserAction($this->reduce, $table23),
					29=>new ParserAction($this->reduce, $table23),
					30=>new ParserAction($this->reduce, $table23),
					31=>new ParserAction($this->reduce, $table23),
					32=>new ParserAction($this->reduce, $table23),
					33=>new ParserAction($this->reduce, $table23),
					34=>new ParserAction($this->reduce, $table23),
					35=>new ParserAction($this->reduce, $table23),
					36=>new ParserAction($this->reduce, $table23),
					37=>new ParserAction($this->reduce, $table23),
					38=>new ParserAction($this->reduce, $table23),
					39=>new ParserAction($this->reduce, $table23),
					40=>new ParserAction($this->reduce, $table23),
					41=>new ParserAction($this->reduce, $table23),
					42=>new ParserAction($this->reduce, $table23),
					43=>new ParserAction($this->reduce, $table23),
					44=>new ParserAction($this->reduce, $table23),
					45=>new ParserAction($this->reduce, $table23),
					46=>new ParserAction($this->reduce, $table23),
					47=>new ParserAction($this->reduce, $table23),
					48=>new ParserAction($this->reduce, $table23),
					49=>new ParserAction($this->reduce, $table23),
					50=>new ParserAction($this->reduce, $table23),
					51=>new ParserAction($this->reduce, $table23),
					53=>new ParserAction($this->reduce, $table23),
					55=>new ParserAction($this->reduce, $table23),
					56=>new ParserAction($this->reduce, $table23),
					57=>new ParserAction($this->reduce, $table23),
					58=>new ParserAction($this->reduce, $table23),
					59=>new ParserAction($this->reduce, $table23),
					60=>new ParserAction($this->reduce, $table23),
					61=>new ParserAction($this->reduce, $table23),
					63=>new ParserAction($this->reduce, $table23)
				);

			$tableDefinition49 = array(
				
					1=>new ParserAction($this->reduce, $table26),
					5=>new ParserAction($this->reduce, $table26),
					6=>new ParserAction($this->none, $table40),
					7=>new ParserAction($this->shift, $table5),
					8=>new ParserAction($this->shift, $table6),
					9=>new ParserAction($this->reduce, $table26),
					10=>new ParserAction($this->shift, $table7),
					11=>new ParserAction($this->reduce, $table26),
					12=>new ParserAction($this->shift, $table8),
					13=>new ParserAction($this->reduce, $table26),
					14=>new ParserAction($this->shift, $table9),
					15=>new ParserAction($this->shift, $table10),
					16=>new ParserAction($this->shift, $table11),
					17=>new ParserAction($this->shift, $table12),
					18=>new ParserAction($this->shift, $table13),
					19=>new ParserAction($this->shift, $table14),
					20=>new ParserAction($this->reduce, $table26),
					21=>new ParserAction($this->shift, $table15),
					22=>new ParserAction($this->shift, $table85),
					23=>new ParserAction($this->shift, $table16),
					24=>new ParserAction($this->reduce, $table26),
					25=>new ParserAction($this->shift, $table17),
					26=>new ParserAction($this->reduce, $table26),
					27=>new ParserAction($this->shift, $table18),
					28=>new ParserAction($this->reduce, $table26),
					29=>new ParserAction($this->shift, $table19),
					30=>new ParserAction($this->reduce, $table26),
					31=>new ParserAction($this->shift, $table20),
					32=>new ParserAction($this->reduce, $table26),
					33=>new ParserAction($this->shift, $table21),
					34=>new ParserAction($this->reduce, $table26),
					35=>new ParserAction($this->shift, $table22),
					36=>new ParserAction($this->shift, $table23),
					37=>new ParserAction($this->reduce, $table26),
					38=>new ParserAction($this->shift, $table24),
					39=>new ParserAction($this->reduce, $table26),
					40=>new ParserAction($this->shift, $table25),
					41=>new ParserAction($this->reduce, $table26),
					42=>new ParserAction($this->shift, $table26),
					43=>new ParserAction($this->reduce, $table26),
					44=>new ParserAction($this->shift, $table27),
					45=>new ParserAction($this->reduce, $table26),
					46=>new ParserAction($this->shift, $table28),
					47=>new ParserAction($this->reduce, $table26),
					48=>new ParserAction($this->shift, $table29),
					49=>new ParserAction($this->reduce, $table26),
					50=>new ParserAction($this->shift, $table30),
					51=>new ParserAction($this->shift, $table31),
					53=>new ParserAction($this->shift, $table32),
					55=>new ParserAction($this->reduce, $table26),
					56=>new ParserAction($this->shift, $table33),
					57=>new ParserAction($this->shift, $table34),
					58=>new ParserAction($this->shift, $table35),
					59=>new ParserAction($this->shift, $table36),
					60=>new ParserAction($this->shift, $table37),
					61=>new ParserAction($this->shift, $table38),
					63=>new ParserAction($this->reduce, $table26)
				);

			$tableDefinition50 = array(
				
					1=>new ParserAction($this->reduce, $table27),
					5=>new ParserAction($this->reduce, $table27),
					7=>new ParserAction($this->reduce, $table27),
					8=>new ParserAction($this->reduce, $table27),
					9=>new ParserAction($this->reduce, $table27),
					10=>new ParserAction($this->reduce, $table27),
					11=>new ParserAction($this->reduce, $table27),
					12=>new ParserAction($this->reduce, $table27),
					13=>new ParserAction($this->reduce, $table27),
					14=>new ParserAction($this->reduce, $table27),
					15=>new ParserAction($this->reduce, $table27),
					16=>new ParserAction($this->reduce, $table27),
					17=>new ParserAction($this->reduce, $table27),
					18=>new ParserAction($this->reduce, $table27),
					19=>new ParserAction($this->reduce, $table27),
					20=>new ParserAction($this->reduce, $table27),
					21=>new ParserAction($this->reduce, $table27),
					22=>new ParserAction($this->reduce, $table27),
					23=>new ParserAction($this->reduce, $table27),
					24=>new ParserAction($this->reduce, $table27),
					25=>new ParserAction($this->reduce, $table27),
					26=>new ParserAction($this->reduce, $table27),
					27=>new ParserAction($this->reduce, $table27),
					28=>new ParserAction($this->reduce, $table27),
					29=>new ParserAction($this->reduce, $table27),
					30=>new ParserAction($this->reduce, $table27),
					31=>new ParserAction($this->reduce, $table27),
					32=>new ParserAction($this->reduce, $table27),
					33=>new ParserAction($this->reduce, $table27),
					34=>new ParserAction($this->reduce, $table27),
					35=>new ParserAction($this->reduce, $table27),
					36=>new ParserAction($this->reduce, $table27),
					37=>new ParserAction($this->reduce, $table27),
					38=>new ParserAction($this->reduce, $table27),
					39=>new ParserAction($this->reduce, $table27),
					40=>new ParserAction($this->reduce, $table27),
					41=>new ParserAction($this->reduce, $table27),
					42=>new ParserAction($this->reduce, $table27),
					43=>new ParserAction($this->reduce, $table27),
					44=>new ParserAction($this->reduce, $table27),
					45=>new ParserAction($this->reduce, $table27),
					46=>new ParserAction($this->reduce, $table27),
					47=>new ParserAction($this->reduce, $table27),
					48=>new ParserAction($this->reduce, $table27),
					49=>new ParserAction($this->reduce, $table27),
					50=>new ParserAction($this->reduce, $table27),
					51=>new ParserAction($this->reduce, $table27),
					53=>new ParserAction($this->reduce, $table27),
					55=>new ParserAction($this->reduce, $table27),
					56=>new ParserAction($this->reduce, $table27),
					57=>new ParserAction($this->reduce, $table27),
					58=>new ParserAction($this->reduce, $table27),
					59=>new ParserAction($this->reduce, $table27),
					60=>new ParserAction($this->reduce, $table27),
					61=>new ParserAction($this->reduce, $table27),
					63=>new ParserAction($this->reduce, $table27)
				);

			$tableDefinition51 = array(
				
					1=>new ParserAction($this->reduce, $table30),
					5=>new ParserAction($this->reduce, $table30),
					6=>new ParserAction($this->none, $table40),
					7=>new ParserAction($this->shift, $table5),
					8=>new ParserAction($this->shift, $table6),
					9=>new ParserAction($this->reduce, $table30),
					10=>new ParserAction($this->shift, $table7),
					11=>new ParserAction($this->reduce, $table30),
					12=>new ParserAction($this->shift, $table8),
					13=>new ParserAction($this->reduce, $table30),
					14=>new ParserAction($this->shift, $table9),
					15=>new ParserAction($this->shift, $table10),
					16=>new ParserAction($this->shift, $table11),
					17=>new ParserAction($this->shift, $table12),
					18=>new ParserAction($this->shift, $table13),
					19=>new ParserAction($this->shift, $table14),
					20=>new ParserAction($this->reduce, $table30),
					21=>new ParserAction($this->shift, $table15),
					22=>new ParserAction($this->reduce, $table30),
					23=>new ParserAction($this->shift, $table16),
					24=>new ParserAction($this->shift, $table86),
					25=>new ParserAction($this->shift, $table17),
					26=>new ParserAction($this->reduce, $table30),
					27=>new ParserAction($this->shift, $table18),
					28=>new ParserAction($this->reduce, $table30),
					29=>new ParserAction($this->shift, $table19),
					30=>new ParserAction($this->reduce, $table30),
					31=>new ParserAction($this->shift, $table20),
					32=>new ParserAction($this->reduce, $table30),
					33=>new ParserAction($this->shift, $table21),
					34=>new ParserAction($this->reduce, $table30),
					35=>new ParserAction($this->shift, $table22),
					36=>new ParserAction($this->shift, $table23),
					37=>new ParserAction($this->reduce, $table30),
					38=>new ParserAction($this->shift, $table24),
					39=>new ParserAction($this->reduce, $table30),
					40=>new ParserAction($this->shift, $table25),
					41=>new ParserAction($this->reduce, $table30),
					42=>new ParserAction($this->shift, $table26),
					43=>new ParserAction($this->reduce, $table30),
					44=>new ParserAction($this->shift, $table27),
					45=>new ParserAction($this->reduce, $table30),
					46=>new ParserAction($this->shift, $table28),
					47=>new ParserAction($this->reduce, $table30),
					48=>new ParserAction($this->shift, $table29),
					49=>new ParserAction($this->reduce, $table30),
					50=>new ParserAction($this->shift, $table30),
					51=>new ParserAction($this->shift, $table31),
					53=>new ParserAction($this->shift, $table32),
					55=>new ParserAction($this->reduce, $table30),
					56=>new ParserAction($this->shift, $table33),
					57=>new ParserAction($this->shift, $table34),
					58=>new ParserAction($this->shift, $table35),
					59=>new ParserAction($this->shift, $table36),
					60=>new ParserAction($this->shift, $table37),
					61=>new ParserAction($this->shift, $table38),
					63=>new ParserAction($this->reduce, $table30)
				);

			$tableDefinition52 = array(
				
					1=>new ParserAction($this->reduce, $table31),
					5=>new ParserAction($this->reduce, $table31),
					7=>new ParserAction($this->reduce, $table31),
					8=>new ParserAction($this->reduce, $table31),
					9=>new ParserAction($this->reduce, $table31),
					10=>new ParserAction($this->reduce, $table31),
					11=>new ParserAction($this->reduce, $table31),
					12=>new ParserAction($this->reduce, $table31),
					13=>new ParserAction($this->reduce, $table31),
					14=>new ParserAction($this->reduce, $table31),
					15=>new ParserAction($this->reduce, $table31),
					16=>new ParserAction($this->reduce, $table31),
					17=>new ParserAction($this->reduce, $table31),
					18=>new ParserAction($this->reduce, $table31),
					19=>new ParserAction($this->reduce, $table31),
					20=>new ParserAction($this->reduce, $table31),
					21=>new ParserAction($this->reduce, $table31),
					22=>new ParserAction($this->reduce, $table31),
					23=>new ParserAction($this->reduce, $table31),
					24=>new ParserAction($this->reduce, $table31),
					25=>new ParserAction($this->reduce, $table31),
					26=>new ParserAction($this->reduce, $table31),
					27=>new ParserAction($this->reduce, $table31),
					28=>new ParserAction($this->reduce, $table31),
					29=>new ParserAction($this->reduce, $table31),
					30=>new ParserAction($this->reduce, $table31),
					31=>new ParserAction($this->reduce, $table31),
					32=>new ParserAction($this->reduce, $table31),
					33=>new ParserAction($this->reduce, $table31),
					34=>new ParserAction($this->reduce, $table31),
					35=>new ParserAction($this->reduce, $table31),
					36=>new ParserAction($this->reduce, $table31),
					37=>new ParserAction($this->reduce, $table31),
					38=>new ParserAction($this->reduce, $table31),
					39=>new ParserAction($this->reduce, $table31),
					40=>new ParserAction($this->reduce, $table31),
					41=>new ParserAction($this->reduce, $table31),
					42=>new ParserAction($this->reduce, $table31),
					43=>new ParserAction($this->reduce, $table31),
					44=>new ParserAction($this->reduce, $table31),
					45=>new ParserAction($this->reduce, $table31),
					46=>new ParserAction($this->reduce, $table31),
					47=>new ParserAction($this->reduce, $table31),
					48=>new ParserAction($this->reduce, $table31),
					49=>new ParserAction($this->reduce, $table31),
					50=>new ParserAction($this->reduce, $table31),
					51=>new ParserAction($this->reduce, $table31),
					53=>new ParserAction($this->reduce, $table31),
					55=>new ParserAction($this->reduce, $table31),
					56=>new ParserAction($this->reduce, $table31),
					57=>new ParserAction($this->reduce, $table31),
					58=>new ParserAction($this->reduce, $table31),
					59=>new ParserAction($this->reduce, $table31),
					60=>new ParserAction($this->reduce, $table31),
					61=>new ParserAction($this->reduce, $table31),
					63=>new ParserAction($this->reduce, $table31)
				);

			$tableDefinition53 = array(
				
					1=>new ParserAction($this->reduce, $table34),
					5=>new ParserAction($this->reduce, $table34),
					6=>new ParserAction($this->none, $table40),
					7=>new ParserAction($this->shift, $table5),
					8=>new ParserAction($this->shift, $table6),
					9=>new ParserAction($this->reduce, $table34),
					10=>new ParserAction($this->shift, $table7),
					11=>new ParserAction($this->reduce, $table34),
					12=>new ParserAction($this->shift, $table8),
					13=>new ParserAction($this->reduce, $table34),
					14=>new ParserAction($this->shift, $table9),
					15=>new ParserAction($this->shift, $table10),
					16=>new ParserAction($this->shift, $table11),
					17=>new ParserAction($this->shift, $table12),
					18=>new ParserAction($this->shift, $table13),
					19=>new ParserAction($this->shift, $table14),
					20=>new ParserAction($this->reduce, $table34),
					21=>new ParserAction($this->shift, $table15),
					22=>new ParserAction($this->reduce, $table34),
					23=>new ParserAction($this->shift, $table16),
					24=>new ParserAction($this->reduce, $table34),
					25=>new ParserAction($this->shift, $table17),
					26=>new ParserAction($this->shift, $table87),
					27=>new ParserAction($this->shift, $table18),
					28=>new ParserAction($this->reduce, $table34),
					29=>new ParserAction($this->shift, $table19),
					30=>new ParserAction($this->reduce, $table34),
					31=>new ParserAction($this->shift, $table20),
					32=>new ParserAction($this->reduce, $table34),
					33=>new ParserAction($this->shift, $table21),
					34=>new ParserAction($this->reduce, $table34),
					35=>new ParserAction($this->shift, $table22),
					36=>new ParserAction($this->shift, $table23),
					37=>new ParserAction($this->reduce, $table34),
					38=>new ParserAction($this->shift, $table24),
					39=>new ParserAction($this->reduce, $table34),
					40=>new ParserAction($this->shift, $table25),
					41=>new ParserAction($this->reduce, $table34),
					42=>new ParserAction($this->shift, $table26),
					43=>new ParserAction($this->reduce, $table34),
					44=>new ParserAction($this->shift, $table27),
					45=>new ParserAction($this->reduce, $table34),
					46=>new ParserAction($this->shift, $table28),
					47=>new ParserAction($this->reduce, $table34),
					48=>new ParserAction($this->shift, $table29),
					49=>new ParserAction($this->reduce, $table34),
					50=>new ParserAction($this->shift, $table30),
					51=>new ParserAction($this->shift, $table31),
					53=>new ParserAction($this->shift, $table32),
					55=>new ParserAction($this->reduce, $table34),
					56=>new ParserAction($this->shift, $table33),
					57=>new ParserAction($this->shift, $table34),
					58=>new ParserAction($this->shift, $table35),
					59=>new ParserAction($this->shift, $table36),
					60=>new ParserAction($this->shift, $table37),
					61=>new ParserAction($this->shift, $table38),
					63=>new ParserAction($this->reduce, $table34)
				);

			$tableDefinition54 = array(
				
					1=>new ParserAction($this->reduce, $table35),
					5=>new ParserAction($this->reduce, $table35),
					7=>new ParserAction($this->reduce, $table35),
					8=>new ParserAction($this->reduce, $table35),
					9=>new ParserAction($this->reduce, $table35),
					10=>new ParserAction($this->reduce, $table35),
					11=>new ParserAction($this->reduce, $table35),
					12=>new ParserAction($this->reduce, $table35),
					13=>new ParserAction($this->reduce, $table35),
					14=>new ParserAction($this->reduce, $table35),
					15=>new ParserAction($this->reduce, $table35),
					16=>new ParserAction($this->reduce, $table35),
					17=>new ParserAction($this->reduce, $table35),
					18=>new ParserAction($this->reduce, $table35),
					19=>new ParserAction($this->reduce, $table35),
					20=>new ParserAction($this->reduce, $table35),
					21=>new ParserAction($this->reduce, $table35),
					22=>new ParserAction($this->reduce, $table35),
					23=>new ParserAction($this->reduce, $table35),
					24=>new ParserAction($this->reduce, $table35),
					25=>new ParserAction($this->reduce, $table35),
					26=>new ParserAction($this->reduce, $table35),
					27=>new ParserAction($this->reduce, $table35),
					28=>new ParserAction($this->reduce, $table35),
					29=>new ParserAction($this->reduce, $table35),
					30=>new ParserAction($this->reduce, $table35),
					31=>new ParserAction($this->reduce, $table35),
					32=>new ParserAction($this->reduce, $table35),
					33=>new ParserAction($this->reduce, $table35),
					34=>new ParserAction($this->reduce, $table35),
					35=>new ParserAction($this->reduce, $table35),
					36=>new ParserAction($this->reduce, $table35),
					37=>new ParserAction($this->reduce, $table35),
					38=>new ParserAction($this->reduce, $table35),
					39=>new ParserAction($this->reduce, $table35),
					40=>new ParserAction($this->reduce, $table35),
					41=>new ParserAction($this->reduce, $table35),
					42=>new ParserAction($this->reduce, $table35),
					43=>new ParserAction($this->reduce, $table35),
					44=>new ParserAction($this->reduce, $table35),
					45=>new ParserAction($this->reduce, $table35),
					46=>new ParserAction($this->reduce, $table35),
					47=>new ParserAction($this->reduce, $table35),
					48=>new ParserAction($this->reduce, $table35),
					49=>new ParserAction($this->reduce, $table35),
					50=>new ParserAction($this->reduce, $table35),
					51=>new ParserAction($this->reduce, $table35),
					53=>new ParserAction($this->reduce, $table35),
					55=>new ParserAction($this->reduce, $table35),
					56=>new ParserAction($this->reduce, $table35),
					57=>new ParserAction($this->reduce, $table35),
					58=>new ParserAction($this->reduce, $table35),
					59=>new ParserAction($this->reduce, $table35),
					60=>new ParserAction($this->reduce, $table35),
					61=>new ParserAction($this->reduce, $table35),
					63=>new ParserAction($this->reduce, $table35)
				);

			$tableDefinition55 = array(
				
					1=>new ParserAction($this->reduce, $table38),
					5=>new ParserAction($this->reduce, $table38),
					6=>new ParserAction($this->none, $table40),
					7=>new ParserAction($this->shift, $table5),
					8=>new ParserAction($this->shift, $table6),
					9=>new ParserAction($this->reduce, $table38),
					10=>new ParserAction($this->shift, $table7),
					11=>new ParserAction($this->reduce, $table38),
					12=>new ParserAction($this->shift, $table8),
					13=>new ParserAction($this->reduce, $table38),
					14=>new ParserAction($this->shift, $table9),
					15=>new ParserAction($this->shift, $table10),
					16=>new ParserAction($this->shift, $table11),
					17=>new ParserAction($this->shift, $table12),
					18=>new ParserAction($this->shift, $table13),
					19=>new ParserAction($this->shift, $table14),
					20=>new ParserAction($this->reduce, $table38),
					21=>new ParserAction($this->shift, $table15),
					22=>new ParserAction($this->reduce, $table38),
					23=>new ParserAction($this->shift, $table16),
					24=>new ParserAction($this->reduce, $table38),
					25=>new ParserAction($this->shift, $table17),
					26=>new ParserAction($this->reduce, $table38),
					27=>new ParserAction($this->shift, $table18),
					28=>new ParserAction($this->shift, $table88),
					29=>new ParserAction($this->shift, $table19),
					30=>new ParserAction($this->reduce, $table38),
					31=>new ParserAction($this->shift, $table20),
					32=>new ParserAction($this->reduce, $table38),
					33=>new ParserAction($this->shift, $table21),
					34=>new ParserAction($this->reduce, $table38),
					35=>new ParserAction($this->shift, $table22),
					36=>new ParserAction($this->shift, $table23),
					37=>new ParserAction($this->reduce, $table38),
					38=>new ParserAction($this->shift, $table24),
					39=>new ParserAction($this->reduce, $table38),
					40=>new ParserAction($this->shift, $table25),
					41=>new ParserAction($this->reduce, $table38),
					42=>new ParserAction($this->shift, $table26),
					43=>new ParserAction($this->reduce, $table38),
					44=>new ParserAction($this->shift, $table27),
					45=>new ParserAction($this->reduce, $table38),
					46=>new ParserAction($this->shift, $table28),
					47=>new ParserAction($this->reduce, $table38),
					48=>new ParserAction($this->shift, $table29),
					49=>new ParserAction($this->reduce, $table38),
					50=>new ParserAction($this->shift, $table30),
					51=>new ParserAction($this->shift, $table31),
					53=>new ParserAction($this->shift, $table32),
					55=>new ParserAction($this->reduce, $table38),
					56=>new ParserAction($this->shift, $table33),
					57=>new ParserAction($this->shift, $table34),
					58=>new ParserAction($this->shift, $table35),
					59=>new ParserAction($this->shift, $table36),
					60=>new ParserAction($this->shift, $table37),
					61=>new ParserAction($this->shift, $table38),
					63=>new ParserAction($this->reduce, $table38)
				);

			$tableDefinition56 = array(
				
					1=>new ParserAction($this->reduce, $table39),
					5=>new ParserAction($this->reduce, $table39),
					7=>new ParserAction($this->reduce, $table39),
					8=>new ParserAction($this->reduce, $table39),
					9=>new ParserAction($this->reduce, $table39),
					10=>new ParserAction($this->reduce, $table39),
					11=>new ParserAction($this->reduce, $table39),
					12=>new ParserAction($this->reduce, $table39),
					13=>new ParserAction($this->reduce, $table39),
					14=>new ParserAction($this->reduce, $table39),
					15=>new ParserAction($this->reduce, $table39),
					16=>new ParserAction($this->reduce, $table39),
					17=>new ParserAction($this->reduce, $table39),
					18=>new ParserAction($this->reduce, $table39),
					19=>new ParserAction($this->reduce, $table39),
					20=>new ParserAction($this->reduce, $table39),
					21=>new ParserAction($this->reduce, $table39),
					22=>new ParserAction($this->reduce, $table39),
					23=>new ParserAction($this->reduce, $table39),
					24=>new ParserAction($this->reduce, $table39),
					25=>new ParserAction($this->reduce, $table39),
					26=>new ParserAction($this->reduce, $table39),
					27=>new ParserAction($this->reduce, $table39),
					28=>new ParserAction($this->reduce, $table39),
					29=>new ParserAction($this->reduce, $table39),
					30=>new ParserAction($this->reduce, $table39),
					31=>new ParserAction($this->reduce, $table39),
					32=>new ParserAction($this->reduce, $table39),
					33=>new ParserAction($this->reduce, $table39),
					34=>new ParserAction($this->reduce, $table39),
					35=>new ParserAction($this->reduce, $table39),
					36=>new ParserAction($this->reduce, $table39),
					37=>new ParserAction($this->reduce, $table39),
					38=>new ParserAction($this->reduce, $table39),
					39=>new ParserAction($this->reduce, $table39),
					40=>new ParserAction($this->reduce, $table39),
					41=>new ParserAction($this->reduce, $table39),
					42=>new ParserAction($this->reduce, $table39),
					43=>new ParserAction($this->reduce, $table39),
					44=>new ParserAction($this->reduce, $table39),
					45=>new ParserAction($this->reduce, $table39),
					46=>new ParserAction($this->reduce, $table39),
					47=>new ParserAction($this->reduce, $table39),
					48=>new ParserAction($this->reduce, $table39),
					49=>new ParserAction($this->reduce, $table39),
					50=>new ParserAction($this->reduce, $table39),
					51=>new ParserAction($this->reduce, $table39),
					53=>new ParserAction($this->reduce, $table39),
					55=>new ParserAction($this->reduce, $table39),
					56=>new ParserAction($this->reduce, $table39),
					57=>new ParserAction($this->reduce, $table39),
					58=>new ParserAction($this->reduce, $table39),
					59=>new ParserAction($this->reduce, $table39),
					60=>new ParserAction($this->reduce, $table39),
					61=>new ParserAction($this->reduce, $table39),
					63=>new ParserAction($this->reduce, $table39)
				);

			$tableDefinition57 = array(
				
					1=>new ParserAction($this->reduce, $table42),
					5=>new ParserAction($this->reduce, $table42),
					6=>new ParserAction($this->none, $table40),
					7=>new ParserAction($this->shift, $table5),
					8=>new ParserAction($this->shift, $table6),
					9=>new ParserAction($this->reduce, $table42),
					10=>new ParserAction($this->shift, $table7),
					11=>new ParserAction($this->reduce, $table42),
					12=>new ParserAction($this->shift, $table8),
					13=>new ParserAction($this->reduce, $table42),
					14=>new ParserAction($this->shift, $table9),
					15=>new ParserAction($this->shift, $table10),
					16=>new ParserAction($this->shift, $table11),
					17=>new ParserAction($this->shift, $table12),
					18=>new ParserAction($this->shift, $table13),
					19=>new ParserAction($this->shift, $table14),
					20=>new ParserAction($this->reduce, $table42),
					21=>new ParserAction($this->shift, $table15),
					22=>new ParserAction($this->reduce, $table42),
					23=>new ParserAction($this->shift, $table16),
					24=>new ParserAction($this->reduce, $table42),
					25=>new ParserAction($this->shift, $table17),
					26=>new ParserAction($this->reduce, $table42),
					27=>new ParserAction($this->shift, $table18),
					28=>new ParserAction($this->reduce, $table42),
					29=>new ParserAction($this->shift, $table19),
					30=>new ParserAction($this->shift, $table89),
					31=>new ParserAction($this->shift, $table20),
					32=>new ParserAction($this->reduce, $table42),
					33=>new ParserAction($this->shift, $table21),
					34=>new ParserAction($this->reduce, $table42),
					35=>new ParserAction($this->shift, $table22),
					36=>new ParserAction($this->shift, $table23),
					37=>new ParserAction($this->reduce, $table42),
					38=>new ParserAction($this->shift, $table24),
					39=>new ParserAction($this->reduce, $table42),
					40=>new ParserAction($this->shift, $table25),
					41=>new ParserAction($this->reduce, $table42),
					42=>new ParserAction($this->shift, $table26),
					43=>new ParserAction($this->reduce, $table42),
					44=>new ParserAction($this->shift, $table27),
					45=>new ParserAction($this->reduce, $table42),
					46=>new ParserAction($this->shift, $table28),
					47=>new ParserAction($this->reduce, $table42),
					48=>new ParserAction($this->shift, $table29),
					49=>new ParserAction($this->reduce, $table42),
					50=>new ParserAction($this->shift, $table30),
					51=>new ParserAction($this->shift, $table31),
					53=>new ParserAction($this->shift, $table32),
					55=>new ParserAction($this->reduce, $table42),
					56=>new ParserAction($this->shift, $table33),
					57=>new ParserAction($this->shift, $table34),
					58=>new ParserAction($this->shift, $table35),
					59=>new ParserAction($this->shift, $table36),
					60=>new ParserAction($this->shift, $table37),
					61=>new ParserAction($this->shift, $table38),
					63=>new ParserAction($this->reduce, $table42)
				);

			$tableDefinition58 = array(
				
					1=>new ParserAction($this->reduce, $table43),
					5=>new ParserAction($this->reduce, $table43),
					7=>new ParserAction($this->reduce, $table43),
					8=>new ParserAction($this->reduce, $table43),
					9=>new ParserAction($this->reduce, $table43),
					10=>new ParserAction($this->reduce, $table43),
					11=>new ParserAction($this->reduce, $table43),
					12=>new ParserAction($this->reduce, $table43),
					13=>new ParserAction($this->reduce, $table43),
					14=>new ParserAction($this->reduce, $table43),
					15=>new ParserAction($this->reduce, $table43),
					16=>new ParserAction($this->reduce, $table43),
					17=>new ParserAction($this->reduce, $table43),
					18=>new ParserAction($this->reduce, $table43),
					19=>new ParserAction($this->reduce, $table43),
					20=>new ParserAction($this->reduce, $table43),
					21=>new ParserAction($this->reduce, $table43),
					22=>new ParserAction($this->reduce, $table43),
					23=>new ParserAction($this->reduce, $table43),
					24=>new ParserAction($this->reduce, $table43),
					25=>new ParserAction($this->reduce, $table43),
					26=>new ParserAction($this->reduce, $table43),
					27=>new ParserAction($this->reduce, $table43),
					28=>new ParserAction($this->reduce, $table43),
					29=>new ParserAction($this->reduce, $table43),
					30=>new ParserAction($this->reduce, $table43),
					31=>new ParserAction($this->reduce, $table43),
					32=>new ParserAction($this->reduce, $table43),
					33=>new ParserAction($this->reduce, $table43),
					34=>new ParserAction($this->reduce, $table43),
					35=>new ParserAction($this->reduce, $table43),
					36=>new ParserAction($this->reduce, $table43),
					37=>new ParserAction($this->reduce, $table43),
					38=>new ParserAction($this->reduce, $table43),
					39=>new ParserAction($this->reduce, $table43),
					40=>new ParserAction($this->reduce, $table43),
					41=>new ParserAction($this->reduce, $table43),
					42=>new ParserAction($this->reduce, $table43),
					43=>new ParserAction($this->reduce, $table43),
					44=>new ParserAction($this->reduce, $table43),
					45=>new ParserAction($this->reduce, $table43),
					46=>new ParserAction($this->reduce, $table43),
					47=>new ParserAction($this->reduce, $table43),
					48=>new ParserAction($this->reduce, $table43),
					49=>new ParserAction($this->reduce, $table43),
					50=>new ParserAction($this->reduce, $table43),
					51=>new ParserAction($this->reduce, $table43),
					53=>new ParserAction($this->reduce, $table43),
					55=>new ParserAction($this->reduce, $table43),
					56=>new ParserAction($this->reduce, $table43),
					57=>new ParserAction($this->reduce, $table43),
					58=>new ParserAction($this->reduce, $table43),
					59=>new ParserAction($this->reduce, $table43),
					60=>new ParserAction($this->reduce, $table43),
					61=>new ParserAction($this->reduce, $table43),
					63=>new ParserAction($this->reduce, $table43)
				);

			$tableDefinition59 = array(
				
					1=>new ParserAction($this->reduce, $table46),
					5=>new ParserAction($this->reduce, $table46),
					6=>new ParserAction($this->none, $table40),
					7=>new ParserAction($this->shift, $table5),
					8=>new ParserAction($this->shift, $table6),
					9=>new ParserAction($this->reduce, $table46),
					10=>new ParserAction($this->shift, $table7),
					11=>new ParserAction($this->reduce, $table46),
					12=>new ParserAction($this->shift, $table8),
					13=>new ParserAction($this->reduce, $table46),
					14=>new ParserAction($this->shift, $table9),
					15=>new ParserAction($this->shift, $table10),
					16=>new ParserAction($this->shift, $table11),
					17=>new ParserAction($this->shift, $table12),
					18=>new ParserAction($this->shift, $table13),
					19=>new ParserAction($this->shift, $table14),
					20=>new ParserAction($this->reduce, $table46),
					21=>new ParserAction($this->shift, $table15),
					22=>new ParserAction($this->reduce, $table46),
					23=>new ParserAction($this->shift, $table16),
					24=>new ParserAction($this->reduce, $table46),
					25=>new ParserAction($this->shift, $table17),
					26=>new ParserAction($this->reduce, $table46),
					27=>new ParserAction($this->shift, $table18),
					28=>new ParserAction($this->reduce, $table46),
					29=>new ParserAction($this->shift, $table19),
					30=>new ParserAction($this->reduce, $table46),
					31=>new ParserAction($this->shift, $table20),
					32=>new ParserAction($this->shift, $table90),
					33=>new ParserAction($this->shift, $table21),
					34=>new ParserAction($this->reduce, $table46),
					35=>new ParserAction($this->shift, $table22),
					36=>new ParserAction($this->shift, $table23),
					37=>new ParserAction($this->reduce, $table46),
					38=>new ParserAction($this->shift, $table24),
					39=>new ParserAction($this->reduce, $table46),
					40=>new ParserAction($this->shift, $table25),
					41=>new ParserAction($this->reduce, $table46),
					42=>new ParserAction($this->shift, $table26),
					43=>new ParserAction($this->reduce, $table46),
					44=>new ParserAction($this->shift, $table27),
					45=>new ParserAction($this->reduce, $table46),
					46=>new ParserAction($this->shift, $table28),
					47=>new ParserAction($this->reduce, $table46),
					48=>new ParserAction($this->shift, $table29),
					49=>new ParserAction($this->reduce, $table46),
					50=>new ParserAction($this->shift, $table30),
					51=>new ParserAction($this->shift, $table31),
					53=>new ParserAction($this->shift, $table32),
					55=>new ParserAction($this->reduce, $table46),
					56=>new ParserAction($this->shift, $table33),
					57=>new ParserAction($this->shift, $table34),
					58=>new ParserAction($this->shift, $table35),
					59=>new ParserAction($this->shift, $table36),
					60=>new ParserAction($this->shift, $table37),
					61=>new ParserAction($this->shift, $table38),
					63=>new ParserAction($this->reduce, $table46)
				);

			$tableDefinition60 = array(
				
					1=>new ParserAction($this->reduce, $table47),
					5=>new ParserAction($this->reduce, $table47),
					7=>new ParserAction($this->reduce, $table47),
					8=>new ParserAction($this->reduce, $table47),
					9=>new ParserAction($this->reduce, $table47),
					10=>new ParserAction($this->reduce, $table47),
					11=>new ParserAction($this->reduce, $table47),
					12=>new ParserAction($this->reduce, $table47),
					13=>new ParserAction($this->reduce, $table47),
					14=>new ParserAction($this->reduce, $table47),
					15=>new ParserAction($this->reduce, $table47),
					16=>new ParserAction($this->reduce, $table47),
					17=>new ParserAction($this->reduce, $table47),
					18=>new ParserAction($this->reduce, $table47),
					19=>new ParserAction($this->reduce, $table47),
					20=>new ParserAction($this->reduce, $table47),
					21=>new ParserAction($this->reduce, $table47),
					22=>new ParserAction($this->reduce, $table47),
					23=>new ParserAction($this->reduce, $table47),
					24=>new ParserAction($this->reduce, $table47),
					25=>new ParserAction($this->reduce, $table47),
					26=>new ParserAction($this->reduce, $table47),
					27=>new ParserAction($this->reduce, $table47),
					28=>new ParserAction($this->reduce, $table47),
					29=>new ParserAction($this->reduce, $table47),
					30=>new ParserAction($this->reduce, $table47),
					31=>new ParserAction($this->reduce, $table47),
					32=>new ParserAction($this->reduce, $table47),
					33=>new ParserAction($this->reduce, $table47),
					34=>new ParserAction($this->reduce, $table47),
					35=>new ParserAction($this->reduce, $table47),
					36=>new ParserAction($this->reduce, $table47),
					37=>new ParserAction($this->reduce, $table47),
					38=>new ParserAction($this->reduce, $table47),
					39=>new ParserAction($this->reduce, $table47),
					40=>new ParserAction($this->reduce, $table47),
					41=>new ParserAction($this->reduce, $table47),
					42=>new ParserAction($this->reduce, $table47),
					43=>new ParserAction($this->reduce, $table47),
					44=>new ParserAction($this->reduce, $table47),
					45=>new ParserAction($this->reduce, $table47),
					46=>new ParserAction($this->reduce, $table47),
					47=>new ParserAction($this->reduce, $table47),
					48=>new ParserAction($this->reduce, $table47),
					49=>new ParserAction($this->reduce, $table47),
					50=>new ParserAction($this->reduce, $table47),
					51=>new ParserAction($this->reduce, $table47),
					53=>new ParserAction($this->reduce, $table47),
					55=>new ParserAction($this->reduce, $table47),
					56=>new ParserAction($this->reduce, $table47),
					57=>new ParserAction($this->reduce, $table47),
					58=>new ParserAction($this->reduce, $table47),
					59=>new ParserAction($this->reduce, $table47),
					60=>new ParserAction($this->reduce, $table47),
					61=>new ParserAction($this->reduce, $table47),
					63=>new ParserAction($this->reduce, $table47)
				);

			$tableDefinition61 = array(
				
					1=>new ParserAction($this->reduce, $table50),
					5=>new ParserAction($this->reduce, $table50),
					6=>new ParserAction($this->none, $table40),
					7=>new ParserAction($this->shift, $table5),
					8=>new ParserAction($this->shift, $table6),
					9=>new ParserAction($this->reduce, $table50),
					10=>new ParserAction($this->shift, $table7),
					11=>new ParserAction($this->reduce, $table50),
					12=>new ParserAction($this->shift, $table8),
					13=>new ParserAction($this->reduce, $table50),
					14=>new ParserAction($this->shift, $table9),
					15=>new ParserAction($this->shift, $table10),
					16=>new ParserAction($this->shift, $table11),
					17=>new ParserAction($this->shift, $table12),
					18=>new ParserAction($this->shift, $table13),
					19=>new ParserAction($this->shift, $table14),
					20=>new ParserAction($this->reduce, $table50),
					21=>new ParserAction($this->shift, $table15),
					22=>new ParserAction($this->reduce, $table50),
					23=>new ParserAction($this->shift, $table16),
					24=>new ParserAction($this->reduce, $table50),
					25=>new ParserAction($this->shift, $table17),
					26=>new ParserAction($this->reduce, $table50),
					27=>new ParserAction($this->shift, $table18),
					28=>new ParserAction($this->reduce, $table50),
					29=>new ParserAction($this->shift, $table19),
					30=>new ParserAction($this->reduce, $table50),
					31=>new ParserAction($this->shift, $table20),
					32=>new ParserAction($this->reduce, $table50),
					33=>new ParserAction($this->shift, $table21),
					34=>new ParserAction($this->shift, $table91),
					35=>new ParserAction($this->shift, $table22),
					36=>new ParserAction($this->shift, $table23),
					37=>new ParserAction($this->reduce, $table50),
					38=>new ParserAction($this->shift, $table24),
					39=>new ParserAction($this->reduce, $table50),
					40=>new ParserAction($this->shift, $table25),
					41=>new ParserAction($this->reduce, $table50),
					42=>new ParserAction($this->shift, $table26),
					43=>new ParserAction($this->reduce, $table50),
					44=>new ParserAction($this->shift, $table27),
					45=>new ParserAction($this->reduce, $table50),
					46=>new ParserAction($this->shift, $table28),
					47=>new ParserAction($this->reduce, $table50),
					48=>new ParserAction($this->shift, $table29),
					49=>new ParserAction($this->reduce, $table50),
					50=>new ParserAction($this->shift, $table30),
					51=>new ParserAction($this->shift, $table31),
					53=>new ParserAction($this->shift, $table32),
					55=>new ParserAction($this->reduce, $table50),
					56=>new ParserAction($this->shift, $table33),
					57=>new ParserAction($this->shift, $table34),
					58=>new ParserAction($this->shift, $table35),
					59=>new ParserAction($this->shift, $table36),
					60=>new ParserAction($this->shift, $table37),
					61=>new ParserAction($this->shift, $table38),
					63=>new ParserAction($this->reduce, $table50)
				);

			$tableDefinition62 = array(
				
					1=>new ParserAction($this->reduce, $table51),
					5=>new ParserAction($this->reduce, $table51),
					7=>new ParserAction($this->reduce, $table51),
					8=>new ParserAction($this->reduce, $table51),
					9=>new ParserAction($this->reduce, $table51),
					10=>new ParserAction($this->reduce, $table51),
					11=>new ParserAction($this->reduce, $table51),
					12=>new ParserAction($this->reduce, $table51),
					13=>new ParserAction($this->reduce, $table51),
					14=>new ParserAction($this->reduce, $table51),
					15=>new ParserAction($this->reduce, $table51),
					16=>new ParserAction($this->reduce, $table51),
					17=>new ParserAction($this->reduce, $table51),
					18=>new ParserAction($this->reduce, $table51),
					19=>new ParserAction($this->reduce, $table51),
					20=>new ParserAction($this->reduce, $table51),
					21=>new ParserAction($this->reduce, $table51),
					22=>new ParserAction($this->reduce, $table51),
					23=>new ParserAction($this->reduce, $table51),
					24=>new ParserAction($this->reduce, $table51),
					25=>new ParserAction($this->reduce, $table51),
					26=>new ParserAction($this->reduce, $table51),
					27=>new ParserAction($this->reduce, $table51),
					28=>new ParserAction($this->reduce, $table51),
					29=>new ParserAction($this->reduce, $table51),
					30=>new ParserAction($this->reduce, $table51),
					31=>new ParserAction($this->reduce, $table51),
					32=>new ParserAction($this->reduce, $table51),
					33=>new ParserAction($this->reduce, $table51),
					34=>new ParserAction($this->reduce, $table51),
					35=>new ParserAction($this->reduce, $table51),
					36=>new ParserAction($this->reduce, $table51),
					37=>new ParserAction($this->reduce, $table51),
					38=>new ParserAction($this->reduce, $table51),
					39=>new ParserAction($this->reduce, $table51),
					40=>new ParserAction($this->reduce, $table51),
					41=>new ParserAction($this->reduce, $table51),
					42=>new ParserAction($this->reduce, $table51),
					43=>new ParserAction($this->reduce, $table51),
					44=>new ParserAction($this->reduce, $table51),
					45=>new ParserAction($this->reduce, $table51),
					46=>new ParserAction($this->reduce, $table51),
					47=>new ParserAction($this->reduce, $table51),
					48=>new ParserAction($this->reduce, $table51),
					49=>new ParserAction($this->reduce, $table51),
					50=>new ParserAction($this->reduce, $table51),
					51=>new ParserAction($this->reduce, $table51),
					53=>new ParserAction($this->reduce, $table51),
					55=>new ParserAction($this->reduce, $table51),
					56=>new ParserAction($this->reduce, $table51),
					57=>new ParserAction($this->reduce, $table51),
					58=>new ParserAction($this->reduce, $table51),
					59=>new ParserAction($this->reduce, $table51),
					60=>new ParserAction($this->reduce, $table51),
					61=>new ParserAction($this->reduce, $table51),
					63=>new ParserAction($this->reduce, $table51)
				);

			$tableDefinition63 = array(
				
					1=>new ParserAction($this->reduce, $table55),
					5=>new ParserAction($this->reduce, $table55),
					6=>new ParserAction($this->none, $table40),
					7=>new ParserAction($this->shift, $table5),
					8=>new ParserAction($this->shift, $table6),
					9=>new ParserAction($this->reduce, $table55),
					10=>new ParserAction($this->shift, $table7),
					11=>new ParserAction($this->reduce, $table55),
					12=>new ParserAction($this->shift, $table8),
					13=>new ParserAction($this->reduce, $table55),
					14=>new ParserAction($this->shift, $table9),
					15=>new ParserAction($this->shift, $table10),
					16=>new ParserAction($this->shift, $table11),
					17=>new ParserAction($this->shift, $table12),
					18=>new ParserAction($this->shift, $table13),
					19=>new ParserAction($this->shift, $table14),
					20=>new ParserAction($this->reduce, $table55),
					21=>new ParserAction($this->shift, $table15),
					22=>new ParserAction($this->reduce, $table55),
					23=>new ParserAction($this->shift, $table16),
					24=>new ParserAction($this->reduce, $table55),
					25=>new ParserAction($this->shift, $table17),
					26=>new ParserAction($this->reduce, $table55),
					27=>new ParserAction($this->shift, $table18),
					28=>new ParserAction($this->reduce, $table55),
					29=>new ParserAction($this->shift, $table19),
					30=>new ParserAction($this->reduce, $table55),
					31=>new ParserAction($this->shift, $table20),
					32=>new ParserAction($this->reduce, $table55),
					33=>new ParserAction($this->shift, $table21),
					34=>new ParserAction($this->reduce, $table55),
					35=>new ParserAction($this->shift, $table22),
					36=>new ParserAction($this->shift, $table23),
					37=>new ParserAction($this->shift, $table92),
					38=>new ParserAction($this->shift, $table24),
					39=>new ParserAction($this->reduce, $table55),
					40=>new ParserAction($this->shift, $table25),
					41=>new ParserAction($this->reduce, $table55),
					42=>new ParserAction($this->shift, $table26),
					43=>new ParserAction($this->reduce, $table55),
					44=>new ParserAction($this->shift, $table27),
					45=>new ParserAction($this->reduce, $table55),
					46=>new ParserAction($this->shift, $table28),
					47=>new ParserAction($this->reduce, $table55),
					48=>new ParserAction($this->shift, $table29),
					49=>new ParserAction($this->reduce, $table55),
					50=>new ParserAction($this->shift, $table30),
					51=>new ParserAction($this->shift, $table31),
					53=>new ParserAction($this->shift, $table32),
					55=>new ParserAction($this->reduce, $table55),
					56=>new ParserAction($this->shift, $table33),
					57=>new ParserAction($this->shift, $table34),
					58=>new ParserAction($this->shift, $table35),
					59=>new ParserAction($this->shift, $table36),
					60=>new ParserAction($this->shift, $table37),
					61=>new ParserAction($this->shift, $table38),
					63=>new ParserAction($this->reduce, $table55)
				);

			$tableDefinition64 = array(
				
					1=>new ParserAction($this->reduce, $table56),
					5=>new ParserAction($this->reduce, $table56),
					7=>new ParserAction($this->reduce, $table56),
					8=>new ParserAction($this->reduce, $table56),
					9=>new ParserAction($this->reduce, $table56),
					10=>new ParserAction($this->reduce, $table56),
					11=>new ParserAction($this->reduce, $table56),
					12=>new ParserAction($this->reduce, $table56),
					13=>new ParserAction($this->reduce, $table56),
					14=>new ParserAction($this->reduce, $table56),
					15=>new ParserAction($this->reduce, $table56),
					16=>new ParserAction($this->reduce, $table56),
					17=>new ParserAction($this->reduce, $table56),
					18=>new ParserAction($this->reduce, $table56),
					19=>new ParserAction($this->reduce, $table56),
					20=>new ParserAction($this->reduce, $table56),
					21=>new ParserAction($this->reduce, $table56),
					22=>new ParserAction($this->reduce, $table56),
					23=>new ParserAction($this->reduce, $table56),
					24=>new ParserAction($this->reduce, $table56),
					25=>new ParserAction($this->reduce, $table56),
					26=>new ParserAction($this->reduce, $table56),
					27=>new ParserAction($this->reduce, $table56),
					28=>new ParserAction($this->reduce, $table56),
					29=>new ParserAction($this->reduce, $table56),
					30=>new ParserAction($this->reduce, $table56),
					31=>new ParserAction($this->reduce, $table56),
					32=>new ParserAction($this->reduce, $table56),
					33=>new ParserAction($this->reduce, $table56),
					34=>new ParserAction($this->reduce, $table56),
					35=>new ParserAction($this->reduce, $table56),
					36=>new ParserAction($this->reduce, $table56),
					37=>new ParserAction($this->reduce, $table56),
					38=>new ParserAction($this->reduce, $table56),
					39=>new ParserAction($this->reduce, $table56),
					40=>new ParserAction($this->reduce, $table56),
					41=>new ParserAction($this->reduce, $table56),
					42=>new ParserAction($this->reduce, $table56),
					43=>new ParserAction($this->reduce, $table56),
					44=>new ParserAction($this->reduce, $table56),
					45=>new ParserAction($this->reduce, $table56),
					46=>new ParserAction($this->reduce, $table56),
					47=>new ParserAction($this->reduce, $table56),
					48=>new ParserAction($this->reduce, $table56),
					49=>new ParserAction($this->reduce, $table56),
					50=>new ParserAction($this->reduce, $table56),
					51=>new ParserAction($this->reduce, $table56),
					53=>new ParserAction($this->reduce, $table56),
					55=>new ParserAction($this->reduce, $table56),
					56=>new ParserAction($this->reduce, $table56),
					57=>new ParserAction($this->reduce, $table56),
					58=>new ParserAction($this->reduce, $table56),
					59=>new ParserAction($this->reduce, $table56),
					60=>new ParserAction($this->reduce, $table56),
					61=>new ParserAction($this->reduce, $table56),
					63=>new ParserAction($this->reduce, $table56)
				);

			$tableDefinition65 = array(
				
					1=>new ParserAction($this->reduce, $table59),
					5=>new ParserAction($this->reduce, $table59),
					6=>new ParserAction($this->none, $table40),
					7=>new ParserAction($this->shift, $table5),
					8=>new ParserAction($this->shift, $table6),
					9=>new ParserAction($this->reduce, $table59),
					10=>new ParserAction($this->shift, $table7),
					11=>new ParserAction($this->reduce, $table59),
					12=>new ParserAction($this->shift, $table8),
					13=>new ParserAction($this->reduce, $table59),
					14=>new ParserAction($this->shift, $table9),
					15=>new ParserAction($this->shift, $table10),
					16=>new ParserAction($this->shift, $table11),
					17=>new ParserAction($this->shift, $table12),
					18=>new ParserAction($this->shift, $table13),
					19=>new ParserAction($this->shift, $table14),
					20=>new ParserAction($this->reduce, $table59),
					21=>new ParserAction($this->shift, $table15),
					22=>new ParserAction($this->reduce, $table59),
					23=>new ParserAction($this->shift, $table16),
					24=>new ParserAction($this->reduce, $table59),
					25=>new ParserAction($this->shift, $table17),
					26=>new ParserAction($this->reduce, $table59),
					27=>new ParserAction($this->shift, $table18),
					28=>new ParserAction($this->reduce, $table59),
					29=>new ParserAction($this->shift, $table19),
					30=>new ParserAction($this->reduce, $table59),
					31=>new ParserAction($this->shift, $table20),
					32=>new ParserAction($this->reduce, $table59),
					33=>new ParserAction($this->shift, $table21),
					34=>new ParserAction($this->reduce, $table59),
					35=>new ParserAction($this->shift, $table22),
					36=>new ParserAction($this->shift, $table23),
					37=>new ParserAction($this->reduce, $table59),
					38=>new ParserAction($this->shift, $table24),
					39=>new ParserAction($this->shift, $table93),
					40=>new ParserAction($this->shift, $table25),
					41=>new ParserAction($this->reduce, $table59),
					42=>new ParserAction($this->shift, $table26),
					43=>new ParserAction($this->reduce, $table59),
					44=>new ParserAction($this->shift, $table27),
					45=>new ParserAction($this->reduce, $table59),
					46=>new ParserAction($this->shift, $table28),
					47=>new ParserAction($this->reduce, $table59),
					48=>new ParserAction($this->shift, $table29),
					49=>new ParserAction($this->reduce, $table59),
					50=>new ParserAction($this->shift, $table30),
					51=>new ParserAction($this->shift, $table31),
					53=>new ParserAction($this->shift, $table32),
					55=>new ParserAction($this->reduce, $table59),
					56=>new ParserAction($this->shift, $table33),
					57=>new ParserAction($this->shift, $table34),
					58=>new ParserAction($this->shift, $table35),
					59=>new ParserAction($this->shift, $table36),
					60=>new ParserAction($this->shift, $table37),
					61=>new ParserAction($this->shift, $table38),
					63=>new ParserAction($this->reduce, $table59)
				);

			$tableDefinition66 = array(
				
					1=>new ParserAction($this->reduce, $table60),
					5=>new ParserAction($this->reduce, $table60),
					7=>new ParserAction($this->reduce, $table60),
					8=>new ParserAction($this->reduce, $table60),
					9=>new ParserAction($this->reduce, $table60),
					10=>new ParserAction($this->reduce, $table60),
					11=>new ParserAction($this->reduce, $table60),
					12=>new ParserAction($this->reduce, $table60),
					13=>new ParserAction($this->reduce, $table60),
					14=>new ParserAction($this->reduce, $table60),
					15=>new ParserAction($this->reduce, $table60),
					16=>new ParserAction($this->reduce, $table60),
					17=>new ParserAction($this->reduce, $table60),
					18=>new ParserAction($this->reduce, $table60),
					19=>new ParserAction($this->reduce, $table60),
					20=>new ParserAction($this->reduce, $table60),
					21=>new ParserAction($this->reduce, $table60),
					22=>new ParserAction($this->reduce, $table60),
					23=>new ParserAction($this->reduce, $table60),
					24=>new ParserAction($this->reduce, $table60),
					25=>new ParserAction($this->reduce, $table60),
					26=>new ParserAction($this->reduce, $table60),
					27=>new ParserAction($this->reduce, $table60),
					28=>new ParserAction($this->reduce, $table60),
					29=>new ParserAction($this->reduce, $table60),
					30=>new ParserAction($this->reduce, $table60),
					31=>new ParserAction($this->reduce, $table60),
					32=>new ParserAction($this->reduce, $table60),
					33=>new ParserAction($this->reduce, $table60),
					34=>new ParserAction($this->reduce, $table60),
					35=>new ParserAction($this->reduce, $table60),
					36=>new ParserAction($this->reduce, $table60),
					37=>new ParserAction($this->reduce, $table60),
					38=>new ParserAction($this->reduce, $table60),
					39=>new ParserAction($this->reduce, $table60),
					40=>new ParserAction($this->reduce, $table60),
					41=>new ParserAction($this->reduce, $table60),
					42=>new ParserAction($this->reduce, $table60),
					43=>new ParserAction($this->reduce, $table60),
					44=>new ParserAction($this->reduce, $table60),
					45=>new ParserAction($this->reduce, $table60),
					46=>new ParserAction($this->reduce, $table60),
					47=>new ParserAction($this->reduce, $table60),
					48=>new ParserAction($this->reduce, $table60),
					49=>new ParserAction($this->reduce, $table60),
					50=>new ParserAction($this->reduce, $table60),
					51=>new ParserAction($this->reduce, $table60),
					53=>new ParserAction($this->reduce, $table60),
					55=>new ParserAction($this->reduce, $table60),
					56=>new ParserAction($this->reduce, $table60),
					57=>new ParserAction($this->reduce, $table60),
					58=>new ParserAction($this->reduce, $table60),
					59=>new ParserAction($this->reduce, $table60),
					60=>new ParserAction($this->reduce, $table60),
					61=>new ParserAction($this->reduce, $table60),
					63=>new ParserAction($this->reduce, $table60)
				);

			$tableDefinition67 = array(
				
					1=>new ParserAction($this->reduce, $table63),
					5=>new ParserAction($this->reduce, $table63),
					6=>new ParserAction($this->none, $table40),
					7=>new ParserAction($this->shift, $table5),
					8=>new ParserAction($this->shift, $table6),
					9=>new ParserAction($this->reduce, $table63),
					10=>new ParserAction($this->shift, $table7),
					11=>new ParserAction($this->reduce, $table63),
					12=>new ParserAction($this->shift, $table8),
					13=>new ParserAction($this->reduce, $table63),
					14=>new ParserAction($this->shift, $table9),
					15=>new ParserAction($this->shift, $table10),
					16=>new ParserAction($this->shift, $table11),
					17=>new ParserAction($this->shift, $table12),
					18=>new ParserAction($this->shift, $table13),
					19=>new ParserAction($this->shift, $table14),
					20=>new ParserAction($this->reduce, $table63),
					21=>new ParserAction($this->shift, $table15),
					22=>new ParserAction($this->reduce, $table63),
					23=>new ParserAction($this->shift, $table16),
					24=>new ParserAction($this->reduce, $table63),
					25=>new ParserAction($this->shift, $table17),
					26=>new ParserAction($this->reduce, $table63),
					27=>new ParserAction($this->shift, $table18),
					28=>new ParserAction($this->reduce, $table63),
					29=>new ParserAction($this->shift, $table19),
					30=>new ParserAction($this->reduce, $table63),
					31=>new ParserAction($this->shift, $table20),
					32=>new ParserAction($this->reduce, $table63),
					33=>new ParserAction($this->shift, $table21),
					34=>new ParserAction($this->reduce, $table63),
					35=>new ParserAction($this->shift, $table22),
					36=>new ParserAction($this->shift, $table23),
					37=>new ParserAction($this->reduce, $table63),
					38=>new ParserAction($this->shift, $table24),
					39=>new ParserAction($this->reduce, $table63),
					40=>new ParserAction($this->shift, $table25),
					41=>new ParserAction($this->shift, $table94),
					42=>new ParserAction($this->shift, $table26),
					43=>new ParserAction($this->reduce, $table63),
					44=>new ParserAction($this->shift, $table27),
					45=>new ParserAction($this->reduce, $table63),
					46=>new ParserAction($this->shift, $table28),
					47=>new ParserAction($this->reduce, $table63),
					48=>new ParserAction($this->shift, $table29),
					49=>new ParserAction($this->reduce, $table63),
					50=>new ParserAction($this->shift, $table30),
					51=>new ParserAction($this->shift, $table31),
					53=>new ParserAction($this->shift, $table32),
					55=>new ParserAction($this->reduce, $table63),
					56=>new ParserAction($this->shift, $table33),
					57=>new ParserAction($this->shift, $table34),
					58=>new ParserAction($this->shift, $table35),
					59=>new ParserAction($this->shift, $table36),
					60=>new ParserAction($this->shift, $table37),
					61=>new ParserAction($this->shift, $table38),
					63=>new ParserAction($this->reduce, $table63)
				);

			$tableDefinition68 = array(
				
					1=>new ParserAction($this->reduce, $table64),
					5=>new ParserAction($this->reduce, $table64),
					7=>new ParserAction($this->reduce, $table64),
					8=>new ParserAction($this->reduce, $table64),
					9=>new ParserAction($this->reduce, $table64),
					10=>new ParserAction($this->reduce, $table64),
					11=>new ParserAction($this->reduce, $table64),
					12=>new ParserAction($this->reduce, $table64),
					13=>new ParserAction($this->reduce, $table64),
					14=>new ParserAction($this->reduce, $table64),
					15=>new ParserAction($this->reduce, $table64),
					16=>new ParserAction($this->reduce, $table64),
					17=>new ParserAction($this->reduce, $table64),
					18=>new ParserAction($this->reduce, $table64),
					19=>new ParserAction($this->reduce, $table64),
					20=>new ParserAction($this->reduce, $table64),
					21=>new ParserAction($this->reduce, $table64),
					22=>new ParserAction($this->reduce, $table64),
					23=>new ParserAction($this->reduce, $table64),
					24=>new ParserAction($this->reduce, $table64),
					25=>new ParserAction($this->reduce, $table64),
					26=>new ParserAction($this->reduce, $table64),
					27=>new ParserAction($this->reduce, $table64),
					28=>new ParserAction($this->reduce, $table64),
					29=>new ParserAction($this->reduce, $table64),
					30=>new ParserAction($this->reduce, $table64),
					31=>new ParserAction($this->reduce, $table64),
					32=>new ParserAction($this->reduce, $table64),
					33=>new ParserAction($this->reduce, $table64),
					34=>new ParserAction($this->reduce, $table64),
					35=>new ParserAction($this->reduce, $table64),
					36=>new ParserAction($this->reduce, $table64),
					37=>new ParserAction($this->reduce, $table64),
					38=>new ParserAction($this->reduce, $table64),
					39=>new ParserAction($this->reduce, $table64),
					40=>new ParserAction($this->reduce, $table64),
					41=>new ParserAction($this->reduce, $table64),
					42=>new ParserAction($this->reduce, $table64),
					43=>new ParserAction($this->reduce, $table64),
					44=>new ParserAction($this->reduce, $table64),
					45=>new ParserAction($this->reduce, $table64),
					46=>new ParserAction($this->reduce, $table64),
					47=>new ParserAction($this->reduce, $table64),
					48=>new ParserAction($this->reduce, $table64),
					49=>new ParserAction($this->reduce, $table64),
					50=>new ParserAction($this->reduce, $table64),
					51=>new ParserAction($this->reduce, $table64),
					53=>new ParserAction($this->reduce, $table64),
					55=>new ParserAction($this->reduce, $table64),
					56=>new ParserAction($this->reduce, $table64),
					57=>new ParserAction($this->reduce, $table64),
					58=>new ParserAction($this->reduce, $table64),
					59=>new ParserAction($this->reduce, $table64),
					60=>new ParserAction($this->reduce, $table64),
					61=>new ParserAction($this->reduce, $table64),
					63=>new ParserAction($this->reduce, $table64)
				);

			$tableDefinition69 = array(
				
					1=>new ParserAction($this->reduce, $table67),
					5=>new ParserAction($this->reduce, $table67),
					6=>new ParserAction($this->none, $table40),
					7=>new ParserAction($this->shift, $table5),
					8=>new ParserAction($this->shift, $table6),
					9=>new ParserAction($this->reduce, $table67),
					10=>new ParserAction($this->shift, $table7),
					11=>new ParserAction($this->reduce, $table67),
					12=>new ParserAction($this->shift, $table8),
					13=>new ParserAction($this->reduce, $table67),
					14=>new ParserAction($this->shift, $table9),
					15=>new ParserAction($this->shift, $table10),
					16=>new ParserAction($this->shift, $table11),
					17=>new ParserAction($this->shift, $table12),
					18=>new ParserAction($this->shift, $table13),
					19=>new ParserAction($this->shift, $table14),
					20=>new ParserAction($this->reduce, $table67),
					21=>new ParserAction($this->shift, $table15),
					22=>new ParserAction($this->reduce, $table67),
					23=>new ParserAction($this->shift, $table16),
					24=>new ParserAction($this->reduce, $table67),
					25=>new ParserAction($this->shift, $table17),
					26=>new ParserAction($this->reduce, $table67),
					27=>new ParserAction($this->shift, $table18),
					28=>new ParserAction($this->reduce, $table67),
					29=>new ParserAction($this->shift, $table19),
					30=>new ParserAction($this->reduce, $table67),
					31=>new ParserAction($this->shift, $table20),
					32=>new ParserAction($this->reduce, $table67),
					33=>new ParserAction($this->shift, $table21),
					34=>new ParserAction($this->reduce, $table67),
					35=>new ParserAction($this->shift, $table22),
					36=>new ParserAction($this->shift, $table23),
					37=>new ParserAction($this->reduce, $table67),
					38=>new ParserAction($this->shift, $table24),
					39=>new ParserAction($this->reduce, $table67),
					40=>new ParserAction($this->shift, $table25),
					41=>new ParserAction($this->reduce, $table67),
					42=>new ParserAction($this->shift, $table26),
					43=>new ParserAction($this->shift, $table95),
					44=>new ParserAction($this->shift, $table27),
					45=>new ParserAction($this->reduce, $table67),
					46=>new ParserAction($this->shift, $table28),
					47=>new ParserAction($this->reduce, $table67),
					48=>new ParserAction($this->shift, $table29),
					49=>new ParserAction($this->reduce, $table67),
					50=>new ParserAction($this->shift, $table30),
					51=>new ParserAction($this->shift, $table31),
					53=>new ParserAction($this->shift, $table32),
					55=>new ParserAction($this->reduce, $table67),
					56=>new ParserAction($this->shift, $table33),
					57=>new ParserAction($this->shift, $table34),
					58=>new ParserAction($this->shift, $table35),
					59=>new ParserAction($this->shift, $table36),
					60=>new ParserAction($this->shift, $table37),
					61=>new ParserAction($this->shift, $table38),
					63=>new ParserAction($this->reduce, $table67)
				);

			$tableDefinition70 = array(
				
					1=>new ParserAction($this->reduce, $table68),
					5=>new ParserAction($this->reduce, $table68),
					7=>new ParserAction($this->reduce, $table68),
					8=>new ParserAction($this->reduce, $table68),
					9=>new ParserAction($this->reduce, $table68),
					10=>new ParserAction($this->reduce, $table68),
					11=>new ParserAction($this->reduce, $table68),
					12=>new ParserAction($this->reduce, $table68),
					13=>new ParserAction($this->reduce, $table68),
					14=>new ParserAction($this->reduce, $table68),
					15=>new ParserAction($this->reduce, $table68),
					16=>new ParserAction($this->reduce, $table68),
					17=>new ParserAction($this->reduce, $table68),
					18=>new ParserAction($this->reduce, $table68),
					19=>new ParserAction($this->reduce, $table68),
					20=>new ParserAction($this->reduce, $table68),
					21=>new ParserAction($this->reduce, $table68),
					22=>new ParserAction($this->reduce, $table68),
					23=>new ParserAction($this->reduce, $table68),
					24=>new ParserAction($this->reduce, $table68),
					25=>new ParserAction($this->reduce, $table68),
					26=>new ParserAction($this->reduce, $table68),
					27=>new ParserAction($this->reduce, $table68),
					28=>new ParserAction($this->reduce, $table68),
					29=>new ParserAction($this->reduce, $table68),
					30=>new ParserAction($this->reduce, $table68),
					31=>new ParserAction($this->reduce, $table68),
					32=>new ParserAction($this->reduce, $table68),
					33=>new ParserAction($this->reduce, $table68),
					34=>new ParserAction($this->reduce, $table68),
					35=>new ParserAction($this->reduce, $table68),
					36=>new ParserAction($this->reduce, $table68),
					37=>new ParserAction($this->reduce, $table68),
					38=>new ParserAction($this->reduce, $table68),
					39=>new ParserAction($this->reduce, $table68),
					40=>new ParserAction($this->reduce, $table68),
					41=>new ParserAction($this->reduce, $table68),
					42=>new ParserAction($this->reduce, $table68),
					43=>new ParserAction($this->reduce, $table68),
					44=>new ParserAction($this->reduce, $table68),
					45=>new ParserAction($this->reduce, $table68),
					46=>new ParserAction($this->reduce, $table68),
					47=>new ParserAction($this->reduce, $table68),
					48=>new ParserAction($this->reduce, $table68),
					49=>new ParserAction($this->reduce, $table68),
					50=>new ParserAction($this->reduce, $table68),
					51=>new ParserAction($this->reduce, $table68),
					53=>new ParserAction($this->reduce, $table68),
					55=>new ParserAction($this->reduce, $table68),
					56=>new ParserAction($this->reduce, $table68),
					57=>new ParserAction($this->reduce, $table68),
					58=>new ParserAction($this->reduce, $table68),
					59=>new ParserAction($this->reduce, $table68),
					60=>new ParserAction($this->reduce, $table68),
					61=>new ParserAction($this->reduce, $table68),
					63=>new ParserAction($this->reduce, $table68)
				);

			$tableDefinition71 = array(
				
					1=>new ParserAction($this->reduce, $table71),
					5=>new ParserAction($this->reduce, $table71),
					6=>new ParserAction($this->none, $table40),
					7=>new ParserAction($this->shift, $table5),
					8=>new ParserAction($this->shift, $table6),
					9=>new ParserAction($this->reduce, $table71),
					10=>new ParserAction($this->shift, $table7),
					11=>new ParserAction($this->reduce, $table71),
					12=>new ParserAction($this->shift, $table8),
					13=>new ParserAction($this->reduce, $table71),
					14=>new ParserAction($this->shift, $table9),
					15=>new ParserAction($this->shift, $table10),
					16=>new ParserAction($this->shift, $table11),
					17=>new ParserAction($this->shift, $table12),
					18=>new ParserAction($this->shift, $table13),
					19=>new ParserAction($this->shift, $table14),
					20=>new ParserAction($this->reduce, $table71),
					21=>new ParserAction($this->shift, $table15),
					22=>new ParserAction($this->reduce, $table71),
					23=>new ParserAction($this->shift, $table16),
					24=>new ParserAction($this->reduce, $table71),
					25=>new ParserAction($this->shift, $table17),
					26=>new ParserAction($this->reduce, $table71),
					27=>new ParserAction($this->shift, $table18),
					28=>new ParserAction($this->reduce, $table71),
					29=>new ParserAction($this->shift, $table19),
					30=>new ParserAction($this->reduce, $table71),
					31=>new ParserAction($this->shift, $table20),
					32=>new ParserAction($this->reduce, $table71),
					33=>new ParserAction($this->shift, $table21),
					34=>new ParserAction($this->reduce, $table71),
					35=>new ParserAction($this->shift, $table22),
					36=>new ParserAction($this->shift, $table23),
					37=>new ParserAction($this->reduce, $table71),
					38=>new ParserAction($this->shift, $table24),
					39=>new ParserAction($this->reduce, $table71),
					40=>new ParserAction($this->shift, $table25),
					41=>new ParserAction($this->reduce, $table71),
					42=>new ParserAction($this->shift, $table26),
					43=>new ParserAction($this->reduce, $table71),
					44=>new ParserAction($this->shift, $table27),
					45=>new ParserAction($this->shift, $table96),
					46=>new ParserAction($this->shift, $table28),
					47=>new ParserAction($this->reduce, $table71),
					48=>new ParserAction($this->shift, $table29),
					49=>new ParserAction($this->reduce, $table71),
					50=>new ParserAction($this->shift, $table30),
					51=>new ParserAction($this->shift, $table31),
					53=>new ParserAction($this->shift, $table32),
					55=>new ParserAction($this->reduce, $table71),
					56=>new ParserAction($this->shift, $table33),
					57=>new ParserAction($this->shift, $table34),
					58=>new ParserAction($this->shift, $table35),
					59=>new ParserAction($this->shift, $table36),
					60=>new ParserAction($this->shift, $table37),
					61=>new ParserAction($this->shift, $table38),
					63=>new ParserAction($this->reduce, $table71)
				);

			$tableDefinition72 = array(
				
					1=>new ParserAction($this->reduce, $table72),
					5=>new ParserAction($this->reduce, $table72),
					7=>new ParserAction($this->reduce, $table72),
					8=>new ParserAction($this->reduce, $table72),
					9=>new ParserAction($this->reduce, $table72),
					10=>new ParserAction($this->reduce, $table72),
					11=>new ParserAction($this->reduce, $table72),
					12=>new ParserAction($this->reduce, $table72),
					13=>new ParserAction($this->reduce, $table72),
					14=>new ParserAction($this->reduce, $table72),
					15=>new ParserAction($this->reduce, $table72),
					16=>new ParserAction($this->reduce, $table72),
					17=>new ParserAction($this->reduce, $table72),
					18=>new ParserAction($this->reduce, $table72),
					19=>new ParserAction($this->reduce, $table72),
					20=>new ParserAction($this->reduce, $table72),
					21=>new ParserAction($this->reduce, $table72),
					22=>new ParserAction($this->reduce, $table72),
					23=>new ParserAction($this->reduce, $table72),
					24=>new ParserAction($this->reduce, $table72),
					25=>new ParserAction($this->reduce, $table72),
					26=>new ParserAction($this->reduce, $table72),
					27=>new ParserAction($this->reduce, $table72),
					28=>new ParserAction($this->reduce, $table72),
					29=>new ParserAction($this->reduce, $table72),
					30=>new ParserAction($this->reduce, $table72),
					31=>new ParserAction($this->reduce, $table72),
					32=>new ParserAction($this->reduce, $table72),
					33=>new ParserAction($this->reduce, $table72),
					34=>new ParserAction($this->reduce, $table72),
					35=>new ParserAction($this->reduce, $table72),
					36=>new ParserAction($this->reduce, $table72),
					37=>new ParserAction($this->reduce, $table72),
					38=>new ParserAction($this->reduce, $table72),
					39=>new ParserAction($this->reduce, $table72),
					40=>new ParserAction($this->reduce, $table72),
					41=>new ParserAction($this->reduce, $table72),
					42=>new ParserAction($this->reduce, $table72),
					43=>new ParserAction($this->reduce, $table72),
					44=>new ParserAction($this->reduce, $table72),
					45=>new ParserAction($this->reduce, $table72),
					46=>new ParserAction($this->reduce, $table72),
					47=>new ParserAction($this->reduce, $table72),
					48=>new ParserAction($this->reduce, $table72),
					49=>new ParserAction($this->reduce, $table72),
					50=>new ParserAction($this->reduce, $table72),
					51=>new ParserAction($this->reduce, $table72),
					53=>new ParserAction($this->reduce, $table72),
					55=>new ParserAction($this->reduce, $table72),
					56=>new ParserAction($this->reduce, $table72),
					57=>new ParserAction($this->reduce, $table72),
					58=>new ParserAction($this->reduce, $table72),
					59=>new ParserAction($this->reduce, $table72),
					60=>new ParserAction($this->reduce, $table72),
					61=>new ParserAction($this->reduce, $table72),
					63=>new ParserAction($this->reduce, $table72)
				);

			$tableDefinition73 = array(
				
					1=>new ParserAction($this->reduce, $table75),
					5=>new ParserAction($this->reduce, $table75),
					6=>new ParserAction($this->none, $table40),
					7=>new ParserAction($this->shift, $table5),
					8=>new ParserAction($this->shift, $table6),
					9=>new ParserAction($this->reduce, $table75),
					10=>new ParserAction($this->shift, $table7),
					11=>new ParserAction($this->reduce, $table75),
					12=>new ParserAction($this->shift, $table8),
					13=>new ParserAction($this->reduce, $table75),
					14=>new ParserAction($this->shift, $table9),
					15=>new ParserAction($this->shift, $table10),
					16=>new ParserAction($this->shift, $table11),
					17=>new ParserAction($this->shift, $table12),
					18=>new ParserAction($this->shift, $table13),
					19=>new ParserAction($this->shift, $table14),
					20=>new ParserAction($this->reduce, $table75),
					21=>new ParserAction($this->shift, $table15),
					22=>new ParserAction($this->reduce, $table75),
					23=>new ParserAction($this->shift, $table16),
					24=>new ParserAction($this->reduce, $table75),
					25=>new ParserAction($this->shift, $table17),
					26=>new ParserAction($this->reduce, $table75),
					27=>new ParserAction($this->shift, $table18),
					28=>new ParserAction($this->reduce, $table75),
					29=>new ParserAction($this->shift, $table19),
					30=>new ParserAction($this->reduce, $table75),
					31=>new ParserAction($this->shift, $table20),
					32=>new ParserAction($this->reduce, $table75),
					33=>new ParserAction($this->shift, $table21),
					34=>new ParserAction($this->reduce, $table75),
					35=>new ParserAction($this->shift, $table22),
					36=>new ParserAction($this->shift, $table23),
					37=>new ParserAction($this->reduce, $table75),
					38=>new ParserAction($this->shift, $table24),
					39=>new ParserAction($this->reduce, $table75),
					40=>new ParserAction($this->shift, $table25),
					41=>new ParserAction($this->reduce, $table75),
					42=>new ParserAction($this->shift, $table26),
					43=>new ParserAction($this->reduce, $table75),
					44=>new ParserAction($this->shift, $table27),
					45=>new ParserAction($this->reduce, $table75),
					46=>new ParserAction($this->shift, $table28),
					47=>new ParserAction($this->shift, $table97),
					48=>new ParserAction($this->shift, $table29),
					49=>new ParserAction($this->reduce, $table75),
					50=>new ParserAction($this->shift, $table30),
					51=>new ParserAction($this->shift, $table31),
					53=>new ParserAction($this->shift, $table32),
					55=>new ParserAction($this->reduce, $table75),
					56=>new ParserAction($this->shift, $table33),
					57=>new ParserAction($this->shift, $table34),
					58=>new ParserAction($this->shift, $table35),
					59=>new ParserAction($this->shift, $table36),
					60=>new ParserAction($this->shift, $table37),
					61=>new ParserAction($this->shift, $table38),
					63=>new ParserAction($this->reduce, $table75)
				);

			$tableDefinition74 = array(
				
					1=>new ParserAction($this->reduce, $table76),
					5=>new ParserAction($this->reduce, $table76),
					7=>new ParserAction($this->reduce, $table76),
					8=>new ParserAction($this->reduce, $table76),
					9=>new ParserAction($this->reduce, $table76),
					10=>new ParserAction($this->reduce, $table76),
					11=>new ParserAction($this->reduce, $table76),
					12=>new ParserAction($this->reduce, $table76),
					13=>new ParserAction($this->reduce, $table76),
					14=>new ParserAction($this->reduce, $table76),
					15=>new ParserAction($this->reduce, $table76),
					16=>new ParserAction($this->reduce, $table76),
					17=>new ParserAction($this->reduce, $table76),
					18=>new ParserAction($this->reduce, $table76),
					19=>new ParserAction($this->reduce, $table76),
					20=>new ParserAction($this->reduce, $table76),
					21=>new ParserAction($this->reduce, $table76),
					22=>new ParserAction($this->reduce, $table76),
					23=>new ParserAction($this->reduce, $table76),
					24=>new ParserAction($this->reduce, $table76),
					25=>new ParserAction($this->reduce, $table76),
					26=>new ParserAction($this->reduce, $table76),
					27=>new ParserAction($this->reduce, $table76),
					28=>new ParserAction($this->reduce, $table76),
					29=>new ParserAction($this->reduce, $table76),
					30=>new ParserAction($this->reduce, $table76),
					31=>new ParserAction($this->reduce, $table76),
					32=>new ParserAction($this->reduce, $table76),
					33=>new ParserAction($this->reduce, $table76),
					34=>new ParserAction($this->reduce, $table76),
					35=>new ParserAction($this->reduce, $table76),
					36=>new ParserAction($this->reduce, $table76),
					37=>new ParserAction($this->reduce, $table76),
					38=>new ParserAction($this->reduce, $table76),
					39=>new ParserAction($this->reduce, $table76),
					40=>new ParserAction($this->reduce, $table76),
					41=>new ParserAction($this->reduce, $table76),
					42=>new ParserAction($this->reduce, $table76),
					43=>new ParserAction($this->reduce, $table76),
					44=>new ParserAction($this->reduce, $table76),
					45=>new ParserAction($this->reduce, $table76),
					46=>new ParserAction($this->reduce, $table76),
					47=>new ParserAction($this->reduce, $table76),
					48=>new ParserAction($this->reduce, $table76),
					49=>new ParserAction($this->reduce, $table76),
					50=>new ParserAction($this->reduce, $table76),
					51=>new ParserAction($this->reduce, $table76),
					53=>new ParserAction($this->reduce, $table76),
					55=>new ParserAction($this->reduce, $table76),
					56=>new ParserAction($this->reduce, $table76),
					57=>new ParserAction($this->reduce, $table76),
					58=>new ParserAction($this->reduce, $table76),
					59=>new ParserAction($this->reduce, $table76),
					60=>new ParserAction($this->reduce, $table76),
					61=>new ParserAction($this->reduce, $table76),
					63=>new ParserAction($this->reduce, $table76)
				);

			$tableDefinition75 = array(
				
					1=>new ParserAction($this->reduce, $table79),
					5=>new ParserAction($this->reduce, $table79),
					6=>new ParserAction($this->none, $table40),
					7=>new ParserAction($this->shift, $table5),
					8=>new ParserAction($this->shift, $table6),
					9=>new ParserAction($this->reduce, $table79),
					10=>new ParserAction($this->shift, $table7),
					11=>new ParserAction($this->reduce, $table79),
					12=>new ParserAction($this->shift, $table8),
					13=>new ParserAction($this->reduce, $table79),
					14=>new ParserAction($this->shift, $table9),
					15=>new ParserAction($this->shift, $table10),
					16=>new ParserAction($this->shift, $table11),
					17=>new ParserAction($this->shift, $table12),
					18=>new ParserAction($this->shift, $table13),
					19=>new ParserAction($this->shift, $table14),
					20=>new ParserAction($this->reduce, $table79),
					21=>new ParserAction($this->shift, $table15),
					22=>new ParserAction($this->reduce, $table79),
					23=>new ParserAction($this->shift, $table16),
					24=>new ParserAction($this->reduce, $table79),
					25=>new ParserAction($this->shift, $table17),
					26=>new ParserAction($this->reduce, $table79),
					27=>new ParserAction($this->shift, $table18),
					28=>new ParserAction($this->reduce, $table79),
					29=>new ParserAction($this->shift, $table19),
					30=>new ParserAction($this->reduce, $table79),
					31=>new ParserAction($this->shift, $table20),
					32=>new ParserAction($this->reduce, $table79),
					33=>new ParserAction($this->shift, $table21),
					34=>new ParserAction($this->reduce, $table79),
					35=>new ParserAction($this->shift, $table22),
					36=>new ParserAction($this->shift, $table23),
					37=>new ParserAction($this->reduce, $table79),
					38=>new ParserAction($this->shift, $table24),
					39=>new ParserAction($this->reduce, $table79),
					40=>new ParserAction($this->shift, $table25),
					41=>new ParserAction($this->reduce, $table79),
					42=>new ParserAction($this->shift, $table26),
					43=>new ParserAction($this->reduce, $table79),
					44=>new ParserAction($this->shift, $table27),
					45=>new ParserAction($this->reduce, $table79),
					46=>new ParserAction($this->shift, $table28),
					47=>new ParserAction($this->reduce, $table79),
					48=>new ParserAction($this->shift, $table29),
					49=>new ParserAction($this->shift, $table98),
					50=>new ParserAction($this->shift, $table30),
					51=>new ParserAction($this->shift, $table31),
					53=>new ParserAction($this->shift, $table32),
					55=>new ParserAction($this->reduce, $table79),
					56=>new ParserAction($this->shift, $table33),
					57=>new ParserAction($this->shift, $table34),
					58=>new ParserAction($this->shift, $table35),
					59=>new ParserAction($this->shift, $table36),
					60=>new ParserAction($this->shift, $table37),
					61=>new ParserAction($this->shift, $table38),
					63=>new ParserAction($this->reduce, $table79)
				);

			$tableDefinition76 = array(
				
					1=>new ParserAction($this->reduce, $table80),
					5=>new ParserAction($this->reduce, $table80),
					7=>new ParserAction($this->reduce, $table80),
					8=>new ParserAction($this->reduce, $table80),
					9=>new ParserAction($this->reduce, $table80),
					10=>new ParserAction($this->reduce, $table80),
					11=>new ParserAction($this->reduce, $table80),
					12=>new ParserAction($this->reduce, $table80),
					13=>new ParserAction($this->reduce, $table80),
					14=>new ParserAction($this->reduce, $table80),
					15=>new ParserAction($this->reduce, $table80),
					16=>new ParserAction($this->reduce, $table80),
					17=>new ParserAction($this->reduce, $table80),
					18=>new ParserAction($this->reduce, $table80),
					19=>new ParserAction($this->reduce, $table80),
					20=>new ParserAction($this->reduce, $table80),
					21=>new ParserAction($this->reduce, $table80),
					22=>new ParserAction($this->reduce, $table80),
					23=>new ParserAction($this->reduce, $table80),
					24=>new ParserAction($this->reduce, $table80),
					25=>new ParserAction($this->reduce, $table80),
					26=>new ParserAction($this->reduce, $table80),
					27=>new ParserAction($this->reduce, $table80),
					28=>new ParserAction($this->reduce, $table80),
					29=>new ParserAction($this->reduce, $table80),
					30=>new ParserAction($this->reduce, $table80),
					31=>new ParserAction($this->reduce, $table80),
					32=>new ParserAction($this->reduce, $table80),
					33=>new ParserAction($this->reduce, $table80),
					34=>new ParserAction($this->reduce, $table80),
					35=>new ParserAction($this->reduce, $table80),
					36=>new ParserAction($this->reduce, $table80),
					37=>new ParserAction($this->reduce, $table80),
					38=>new ParserAction($this->reduce, $table80),
					39=>new ParserAction($this->reduce, $table80),
					40=>new ParserAction($this->reduce, $table80),
					41=>new ParserAction($this->reduce, $table80),
					42=>new ParserAction($this->reduce, $table80),
					43=>new ParserAction($this->reduce, $table80),
					44=>new ParserAction($this->reduce, $table80),
					45=>new ParserAction($this->reduce, $table80),
					46=>new ParserAction($this->reduce, $table80),
					47=>new ParserAction($this->reduce, $table80),
					48=>new ParserAction($this->reduce, $table80),
					49=>new ParserAction($this->reduce, $table80),
					50=>new ParserAction($this->reduce, $table80),
					51=>new ParserAction($this->reduce, $table80),
					53=>new ParserAction($this->reduce, $table80),
					55=>new ParserAction($this->reduce, $table80),
					56=>new ParserAction($this->reduce, $table80),
					57=>new ParserAction($this->reduce, $table80),
					58=>new ParserAction($this->reduce, $table80),
					59=>new ParserAction($this->reduce, $table80),
					60=>new ParserAction($this->reduce, $table80),
					61=>new ParserAction($this->reduce, $table80),
					63=>new ParserAction($this->reduce, $table80)
				);

			$tableDefinition77 = array(
				
					1=>new ParserAction($this->reduce, $table84),
					5=>new ParserAction($this->reduce, $table84),
					6=>new ParserAction($this->none, $table40),
					7=>new ParserAction($this->shift, $table5),
					8=>new ParserAction($this->shift, $table6),
					9=>new ParserAction($this->reduce, $table84),
					10=>new ParserAction($this->shift, $table7),
					11=>new ParserAction($this->reduce, $table84),
					12=>new ParserAction($this->shift, $table8),
					13=>new ParserAction($this->reduce, $table84),
					14=>new ParserAction($this->shift, $table9),
					15=>new ParserAction($this->shift, $table10),
					16=>new ParserAction($this->shift, $table11),
					17=>new ParserAction($this->shift, $table12),
					18=>new ParserAction($this->shift, $table13),
					19=>new ParserAction($this->shift, $table14),
					20=>new ParserAction($this->reduce, $table84),
					21=>new ParserAction($this->shift, $table15),
					22=>new ParserAction($this->reduce, $table84),
					23=>new ParserAction($this->shift, $table16),
					24=>new ParserAction($this->reduce, $table84),
					25=>new ParserAction($this->shift, $table17),
					26=>new ParserAction($this->reduce, $table84),
					27=>new ParserAction($this->shift, $table18),
					28=>new ParserAction($this->reduce, $table84),
					29=>new ParserAction($this->shift, $table19),
					30=>new ParserAction($this->reduce, $table84),
					31=>new ParserAction($this->shift, $table20),
					32=>new ParserAction($this->reduce, $table84),
					33=>new ParserAction($this->shift, $table21),
					34=>new ParserAction($this->reduce, $table84),
					35=>new ParserAction($this->shift, $table22),
					36=>new ParserAction($this->shift, $table23),
					37=>new ParserAction($this->reduce, $table84),
					38=>new ParserAction($this->shift, $table24),
					39=>new ParserAction($this->reduce, $table84),
					40=>new ParserAction($this->shift, $table25),
					41=>new ParserAction($this->reduce, $table84),
					42=>new ParserAction($this->shift, $table26),
					43=>new ParserAction($this->reduce, $table84),
					44=>new ParserAction($this->shift, $table27),
					45=>new ParserAction($this->reduce, $table84),
					46=>new ParserAction($this->shift, $table28),
					47=>new ParserAction($this->reduce, $table84),
					48=>new ParserAction($this->shift, $table29),
					49=>new ParserAction($this->reduce, $table84),
					50=>new ParserAction($this->shift, $table30),
					51=>new ParserAction($this->shift, $table31),
					53=>new ParserAction($this->shift, $table32),
					55=>new ParserAction($this->reduce, $table84),
					56=>new ParserAction($this->shift, $table33),
					57=>new ParserAction($this->shift, $table34),
					58=>new ParserAction($this->shift, $table35),
					59=>new ParserAction($this->shift, $table36),
					60=>new ParserAction($this->shift, $table37),
					61=>new ParserAction($this->shift, $table38),
					63=>new ParserAction($this->reduce, $table84)
				);

			$tableDefinition78 = array(
				
					1=>new ParserAction($this->reduce, $table85),
					5=>new ParserAction($this->reduce, $table85),
					7=>new ParserAction($this->reduce, $table85),
					8=>new ParserAction($this->reduce, $table85),
					9=>new ParserAction($this->reduce, $table85),
					10=>new ParserAction($this->reduce, $table85),
					11=>new ParserAction($this->reduce, $table85),
					12=>new ParserAction($this->reduce, $table85),
					13=>new ParserAction($this->reduce, $table85),
					14=>new ParserAction($this->reduce, $table85),
					15=>new ParserAction($this->reduce, $table85),
					16=>new ParserAction($this->reduce, $table85),
					17=>new ParserAction($this->reduce, $table85),
					18=>new ParserAction($this->reduce, $table85),
					19=>new ParserAction($this->reduce, $table85),
					20=>new ParserAction($this->reduce, $table85),
					21=>new ParserAction($this->reduce, $table85),
					22=>new ParserAction($this->reduce, $table85),
					23=>new ParserAction($this->reduce, $table85),
					24=>new ParserAction($this->reduce, $table85),
					25=>new ParserAction($this->reduce, $table85),
					26=>new ParserAction($this->reduce, $table85),
					27=>new ParserAction($this->reduce, $table85),
					28=>new ParserAction($this->reduce, $table85),
					29=>new ParserAction($this->reduce, $table85),
					30=>new ParserAction($this->reduce, $table85),
					31=>new ParserAction($this->reduce, $table85),
					32=>new ParserAction($this->reduce, $table85),
					33=>new ParserAction($this->reduce, $table85),
					34=>new ParserAction($this->reduce, $table85),
					35=>new ParserAction($this->reduce, $table85),
					36=>new ParserAction($this->reduce, $table85),
					37=>new ParserAction($this->reduce, $table85),
					38=>new ParserAction($this->reduce, $table85),
					39=>new ParserAction($this->reduce, $table85),
					40=>new ParserAction($this->reduce, $table85),
					41=>new ParserAction($this->reduce, $table85),
					42=>new ParserAction($this->reduce, $table85),
					43=>new ParserAction($this->reduce, $table85),
					44=>new ParserAction($this->reduce, $table85),
					45=>new ParserAction($this->reduce, $table85),
					46=>new ParserAction($this->reduce, $table85),
					47=>new ParserAction($this->reduce, $table85),
					48=>new ParserAction($this->reduce, $table85),
					49=>new ParserAction($this->reduce, $table85),
					50=>new ParserAction($this->reduce, $table85),
					51=>new ParserAction($this->reduce, $table85),
					53=>new ParserAction($this->reduce, $table85),
					55=>new ParserAction($this->reduce, $table85),
					56=>new ParserAction($this->reduce, $table85),
					57=>new ParserAction($this->reduce, $table85),
					58=>new ParserAction($this->reduce, $table85),
					59=>new ParserAction($this->reduce, $table85),
					60=>new ParserAction($this->reduce, $table85),
					61=>new ParserAction($this->reduce, $table85),
					63=>new ParserAction($this->reduce, $table85)
				);

			$tableDefinition79 = array(
				
					1=>new ParserAction($this->reduce, $table88),
					4=>new ParserAction($this->none, $table99),
					5=>new ParserAction($this->reduce, $table88),
					6=>new ParserAction($this->none, $table4),
					7=>new ParserAction($this->shift, $table5),
					8=>new ParserAction($this->shift, $table6),
					9=>new ParserAction($this->reduce, $table88),
					10=>new ParserAction($this->shift, $table7),
					11=>new ParserAction($this->reduce, $table88),
					12=>new ParserAction($this->shift, $table8),
					13=>new ParserAction($this->reduce, $table88),
					14=>new ParserAction($this->shift, $table9),
					15=>new ParserAction($this->shift, $table10),
					16=>new ParserAction($this->shift, $table11),
					17=>new ParserAction($this->shift, $table12),
					18=>new ParserAction($this->shift, $table13),
					19=>new ParserAction($this->shift, $table14),
					20=>new ParserAction($this->reduce, $table88),
					21=>new ParserAction($this->shift, $table15),
					22=>new ParserAction($this->reduce, $table88),
					23=>new ParserAction($this->shift, $table16),
					24=>new ParserAction($this->reduce, $table88),
					25=>new ParserAction($this->shift, $table17),
					26=>new ParserAction($this->reduce, $table88),
					27=>new ParserAction($this->shift, $table18),
					28=>new ParserAction($this->reduce, $table88),
					29=>new ParserAction($this->shift, $table19),
					30=>new ParserAction($this->reduce, $table88),
					31=>new ParserAction($this->shift, $table20),
					32=>new ParserAction($this->reduce, $table88),
					33=>new ParserAction($this->shift, $table21),
					34=>new ParserAction($this->reduce, $table88),
					35=>new ParserAction($this->shift, $table22),
					36=>new ParserAction($this->shift, $table23),
					37=>new ParserAction($this->reduce, $table88),
					38=>new ParserAction($this->shift, $table24),
					39=>new ParserAction($this->reduce, $table88),
					40=>new ParserAction($this->shift, $table25),
					41=>new ParserAction($this->reduce, $table88),
					42=>new ParserAction($this->shift, $table26),
					43=>new ParserAction($this->reduce, $table88),
					44=>new ParserAction($this->shift, $table27),
					45=>new ParserAction($this->reduce, $table88),
					46=>new ParserAction($this->shift, $table28),
					47=>new ParserAction($this->reduce, $table88),
					48=>new ParserAction($this->shift, $table29),
					49=>new ParserAction($this->reduce, $table88),
					50=>new ParserAction($this->shift, $table30),
					51=>new ParserAction($this->shift, $table31),
					53=>new ParserAction($this->shift, $table32),
					55=>new ParserAction($this->shift, $table100),
					56=>new ParserAction($this->shift, $table33),
					57=>new ParserAction($this->shift, $table34),
					58=>new ParserAction($this->shift, $table35),
					59=>new ParserAction($this->shift, $table36),
					60=>new ParserAction($this->shift, $table37),
					61=>new ParserAction($this->shift, $table38),
					63=>new ParserAction($this->reduce, $table88)
				);

			$tableDefinition80 = array(
				
					1=>new ParserAction($this->reduce, $table98),
					4=>new ParserAction($this->none, $table102),
					5=>new ParserAction($this->reduce, $table98),
					6=>new ParserAction($this->none, $table4),
					7=>new ParserAction($this->shift, $table5),
					8=>new ParserAction($this->shift, $table6),
					9=>new ParserAction($this->reduce, $table98),
					10=>new ParserAction($this->shift, $table7),
					11=>new ParserAction($this->reduce, $table98),
					12=>new ParserAction($this->shift, $table8),
					13=>new ParserAction($this->reduce, $table98),
					14=>new ParserAction($this->shift, $table9),
					15=>new ParserAction($this->shift, $table10),
					16=>new ParserAction($this->shift, $table11),
					17=>new ParserAction($this->shift, $table12),
					18=>new ParserAction($this->shift, $table13),
					19=>new ParserAction($this->shift, $table14),
					20=>new ParserAction($this->reduce, $table98),
					21=>new ParserAction($this->shift, $table15),
					22=>new ParserAction($this->reduce, $table98),
					23=>new ParserAction($this->shift, $table16),
					24=>new ParserAction($this->reduce, $table98),
					25=>new ParserAction($this->shift, $table17),
					26=>new ParserAction($this->reduce, $table98),
					27=>new ParserAction($this->shift, $table18),
					28=>new ParserAction($this->reduce, $table98),
					29=>new ParserAction($this->shift, $table19),
					30=>new ParserAction($this->reduce, $table98),
					31=>new ParserAction($this->shift, $table20),
					32=>new ParserAction($this->reduce, $table98),
					33=>new ParserAction($this->shift, $table21),
					34=>new ParserAction($this->reduce, $table98),
					35=>new ParserAction($this->shift, $table22),
					36=>new ParserAction($this->shift, $table23),
					37=>new ParserAction($this->reduce, $table98),
					38=>new ParserAction($this->shift, $table24),
					39=>new ParserAction($this->reduce, $table98),
					40=>new ParserAction($this->shift, $table25),
					41=>new ParserAction($this->reduce, $table98),
					42=>new ParserAction($this->shift, $table26),
					43=>new ParserAction($this->reduce, $table98),
					44=>new ParserAction($this->shift, $table27),
					45=>new ParserAction($this->reduce, $table98),
					46=>new ParserAction($this->shift, $table28),
					47=>new ParserAction($this->reduce, $table98),
					48=>new ParserAction($this->shift, $table29),
					49=>new ParserAction($this->reduce, $table98),
					50=>new ParserAction($this->shift, $table30),
					51=>new ParserAction($this->shift, $table31),
					53=>new ParserAction($this->shift, $table32),
					55=>new ParserAction($this->reduce, $table98),
					56=>new ParserAction($this->shift, $table33),
					57=>new ParserAction($this->shift, $table34),
					58=>new ParserAction($this->shift, $table35),
					59=>new ParserAction($this->shift, $table36),
					60=>new ParserAction($this->shift, $table37),
					61=>new ParserAction($this->shift, $table38),
					63=>new ParserAction($this->shift, $table101)
				);

			$tableDefinition81 = array(
				
					1=>new ParserAction($this->reduce, $table9),
					5=>new ParserAction($this->reduce, $table9),
					7=>new ParserAction($this->reduce, $table9),
					8=>new ParserAction($this->reduce, $table9),
					9=>new ParserAction($this->reduce, $table9),
					10=>new ParserAction($this->reduce, $table9),
					11=>new ParserAction($this->reduce, $table9),
					12=>new ParserAction($this->reduce, $table9),
					13=>new ParserAction($this->reduce, $table9),
					14=>new ParserAction($this->reduce, $table9),
					15=>new ParserAction($this->reduce, $table9),
					16=>new ParserAction($this->reduce, $table9),
					17=>new ParserAction($this->reduce, $table9),
					18=>new ParserAction($this->reduce, $table9),
					19=>new ParserAction($this->reduce, $table9),
					20=>new ParserAction($this->reduce, $table9),
					21=>new ParserAction($this->reduce, $table9),
					22=>new ParserAction($this->reduce, $table9),
					23=>new ParserAction($this->reduce, $table9),
					24=>new ParserAction($this->reduce, $table9),
					25=>new ParserAction($this->reduce, $table9),
					26=>new ParserAction($this->reduce, $table9),
					27=>new ParserAction($this->reduce, $table9),
					28=>new ParserAction($this->reduce, $table9),
					29=>new ParserAction($this->reduce, $table9),
					30=>new ParserAction($this->reduce, $table9),
					31=>new ParserAction($this->reduce, $table9),
					32=>new ParserAction($this->reduce, $table9),
					33=>new ParserAction($this->reduce, $table9),
					34=>new ParserAction($this->reduce, $table9),
					35=>new ParserAction($this->reduce, $table9),
					36=>new ParserAction($this->reduce, $table9),
					37=>new ParserAction($this->reduce, $table9),
					38=>new ParserAction($this->reduce, $table9),
					39=>new ParserAction($this->reduce, $table9),
					40=>new ParserAction($this->reduce, $table9),
					41=>new ParserAction($this->reduce, $table9),
					42=>new ParserAction($this->reduce, $table9),
					43=>new ParserAction($this->reduce, $table9),
					44=>new ParserAction($this->reduce, $table9),
					45=>new ParserAction($this->reduce, $table9),
					46=>new ParserAction($this->reduce, $table9),
					47=>new ParserAction($this->reduce, $table9),
					48=>new ParserAction($this->reduce, $table9),
					49=>new ParserAction($this->reduce, $table9),
					50=>new ParserAction($this->reduce, $table9),
					51=>new ParserAction($this->reduce, $table9),
					53=>new ParserAction($this->reduce, $table9),
					55=>new ParserAction($this->reduce, $table9),
					56=>new ParserAction($this->reduce, $table9),
					57=>new ParserAction($this->reduce, $table9),
					58=>new ParserAction($this->reduce, $table9),
					59=>new ParserAction($this->reduce, $table9),
					60=>new ParserAction($this->reduce, $table9),
					61=>new ParserAction($this->reduce, $table9),
					63=>new ParserAction($this->reduce, $table9)
				);

			$tableDefinition82 = array(
				
					1=>new ParserAction($this->reduce, $table12),
					5=>new ParserAction($this->reduce, $table12),
					7=>new ParserAction($this->reduce, $table12),
					8=>new ParserAction($this->reduce, $table12),
					9=>new ParserAction($this->reduce, $table12),
					10=>new ParserAction($this->reduce, $table12),
					11=>new ParserAction($this->reduce, $table12),
					12=>new ParserAction($this->reduce, $table12),
					13=>new ParserAction($this->reduce, $table12),
					14=>new ParserAction($this->reduce, $table12),
					15=>new ParserAction($this->reduce, $table12),
					16=>new ParserAction($this->reduce, $table12),
					17=>new ParserAction($this->reduce, $table12),
					18=>new ParserAction($this->reduce, $table12),
					19=>new ParserAction($this->reduce, $table12),
					20=>new ParserAction($this->reduce, $table12),
					21=>new ParserAction($this->reduce, $table12),
					22=>new ParserAction($this->reduce, $table12),
					23=>new ParserAction($this->reduce, $table12),
					24=>new ParserAction($this->reduce, $table12),
					25=>new ParserAction($this->reduce, $table12),
					26=>new ParserAction($this->reduce, $table12),
					27=>new ParserAction($this->reduce, $table12),
					28=>new ParserAction($this->reduce, $table12),
					29=>new ParserAction($this->reduce, $table12),
					30=>new ParserAction($this->reduce, $table12),
					31=>new ParserAction($this->reduce, $table12),
					32=>new ParserAction($this->reduce, $table12),
					33=>new ParserAction($this->reduce, $table12),
					34=>new ParserAction($this->reduce, $table12),
					35=>new ParserAction($this->reduce, $table12),
					36=>new ParserAction($this->reduce, $table12),
					37=>new ParserAction($this->reduce, $table12),
					38=>new ParserAction($this->reduce, $table12),
					39=>new ParserAction($this->reduce, $table12),
					40=>new ParserAction($this->reduce, $table12),
					41=>new ParserAction($this->reduce, $table12),
					42=>new ParserAction($this->reduce, $table12),
					43=>new ParserAction($this->reduce, $table12),
					44=>new ParserAction($this->reduce, $table12),
					45=>new ParserAction($this->reduce, $table12),
					46=>new ParserAction($this->reduce, $table12),
					47=>new ParserAction($this->reduce, $table12),
					48=>new ParserAction($this->reduce, $table12),
					49=>new ParserAction($this->reduce, $table12),
					50=>new ParserAction($this->reduce, $table12),
					51=>new ParserAction($this->reduce, $table12),
					53=>new ParserAction($this->reduce, $table12),
					55=>new ParserAction($this->reduce, $table12),
					56=>new ParserAction($this->reduce, $table12),
					57=>new ParserAction($this->reduce, $table12),
					58=>new ParserAction($this->reduce, $table12),
					59=>new ParserAction($this->reduce, $table12),
					60=>new ParserAction($this->reduce, $table12),
					61=>new ParserAction($this->reduce, $table12),
					63=>new ParserAction($this->reduce, $table12)
				);

			$tableDefinition83 = array(
				
					1=>new ParserAction($this->reduce, $table15),
					5=>new ParserAction($this->reduce, $table15),
					7=>new ParserAction($this->reduce, $table15),
					8=>new ParserAction($this->reduce, $table15),
					9=>new ParserAction($this->reduce, $table15),
					10=>new ParserAction($this->reduce, $table15),
					11=>new ParserAction($this->reduce, $table15),
					12=>new ParserAction($this->reduce, $table15),
					13=>new ParserAction($this->reduce, $table15),
					14=>new ParserAction($this->reduce, $table15),
					15=>new ParserAction($this->reduce, $table15),
					16=>new ParserAction($this->reduce, $table15),
					17=>new ParserAction($this->reduce, $table15),
					18=>new ParserAction($this->reduce, $table15),
					19=>new ParserAction($this->reduce, $table15),
					20=>new ParserAction($this->reduce, $table15),
					21=>new ParserAction($this->reduce, $table15),
					22=>new ParserAction($this->reduce, $table15),
					23=>new ParserAction($this->reduce, $table15),
					24=>new ParserAction($this->reduce, $table15),
					25=>new ParserAction($this->reduce, $table15),
					26=>new ParserAction($this->reduce, $table15),
					27=>new ParserAction($this->reduce, $table15),
					28=>new ParserAction($this->reduce, $table15),
					29=>new ParserAction($this->reduce, $table15),
					30=>new ParserAction($this->reduce, $table15),
					31=>new ParserAction($this->reduce, $table15),
					32=>new ParserAction($this->reduce, $table15),
					33=>new ParserAction($this->reduce, $table15),
					34=>new ParserAction($this->reduce, $table15),
					35=>new ParserAction($this->reduce, $table15),
					36=>new ParserAction($this->reduce, $table15),
					37=>new ParserAction($this->reduce, $table15),
					38=>new ParserAction($this->reduce, $table15),
					39=>new ParserAction($this->reduce, $table15),
					40=>new ParserAction($this->reduce, $table15),
					41=>new ParserAction($this->reduce, $table15),
					42=>new ParserAction($this->reduce, $table15),
					43=>new ParserAction($this->reduce, $table15),
					44=>new ParserAction($this->reduce, $table15),
					45=>new ParserAction($this->reduce, $table15),
					46=>new ParserAction($this->reduce, $table15),
					47=>new ParserAction($this->reduce, $table15),
					48=>new ParserAction($this->reduce, $table15),
					49=>new ParserAction($this->reduce, $table15),
					50=>new ParserAction($this->reduce, $table15),
					51=>new ParserAction($this->reduce, $table15),
					53=>new ParserAction($this->reduce, $table15),
					55=>new ParserAction($this->reduce, $table15),
					56=>new ParserAction($this->reduce, $table15),
					57=>new ParserAction($this->reduce, $table15),
					58=>new ParserAction($this->reduce, $table15),
					59=>new ParserAction($this->reduce, $table15),
					60=>new ParserAction($this->reduce, $table15),
					61=>new ParserAction($this->reduce, $table15),
					63=>new ParserAction($this->reduce, $table15)
				);

			$tableDefinition84 = array(
				
					1=>new ParserAction($this->reduce, $table24),
					5=>new ParserAction($this->reduce, $table24),
					7=>new ParserAction($this->reduce, $table24),
					8=>new ParserAction($this->reduce, $table24),
					9=>new ParserAction($this->reduce, $table24),
					10=>new ParserAction($this->reduce, $table24),
					11=>new ParserAction($this->reduce, $table24),
					12=>new ParserAction($this->reduce, $table24),
					13=>new ParserAction($this->reduce, $table24),
					14=>new ParserAction($this->reduce, $table24),
					15=>new ParserAction($this->reduce, $table24),
					16=>new ParserAction($this->reduce, $table24),
					17=>new ParserAction($this->reduce, $table24),
					18=>new ParserAction($this->reduce, $table24),
					19=>new ParserAction($this->reduce, $table24),
					20=>new ParserAction($this->reduce, $table24),
					21=>new ParserAction($this->reduce, $table24),
					22=>new ParserAction($this->reduce, $table24),
					23=>new ParserAction($this->reduce, $table24),
					24=>new ParserAction($this->reduce, $table24),
					25=>new ParserAction($this->reduce, $table24),
					26=>new ParserAction($this->reduce, $table24),
					27=>new ParserAction($this->reduce, $table24),
					28=>new ParserAction($this->reduce, $table24),
					29=>new ParserAction($this->reduce, $table24),
					30=>new ParserAction($this->reduce, $table24),
					31=>new ParserAction($this->reduce, $table24),
					32=>new ParserAction($this->reduce, $table24),
					33=>new ParserAction($this->reduce, $table24),
					34=>new ParserAction($this->reduce, $table24),
					35=>new ParserAction($this->reduce, $table24),
					36=>new ParserAction($this->reduce, $table24),
					37=>new ParserAction($this->reduce, $table24),
					38=>new ParserAction($this->reduce, $table24),
					39=>new ParserAction($this->reduce, $table24),
					40=>new ParserAction($this->reduce, $table24),
					41=>new ParserAction($this->reduce, $table24),
					42=>new ParserAction($this->reduce, $table24),
					43=>new ParserAction($this->reduce, $table24),
					44=>new ParserAction($this->reduce, $table24),
					45=>new ParserAction($this->reduce, $table24),
					46=>new ParserAction($this->reduce, $table24),
					47=>new ParserAction($this->reduce, $table24),
					48=>new ParserAction($this->reduce, $table24),
					49=>new ParserAction($this->reduce, $table24),
					50=>new ParserAction($this->reduce, $table24),
					51=>new ParserAction($this->reduce, $table24),
					53=>new ParserAction($this->reduce, $table24),
					55=>new ParserAction($this->reduce, $table24),
					56=>new ParserAction($this->reduce, $table24),
					57=>new ParserAction($this->reduce, $table24),
					58=>new ParserAction($this->reduce, $table24),
					59=>new ParserAction($this->reduce, $table24),
					60=>new ParserAction($this->reduce, $table24),
					61=>new ParserAction($this->reduce, $table24),
					63=>new ParserAction($this->reduce, $table24)
				);

			$tableDefinition85 = array(
				
					1=>new ParserAction($this->reduce, $table28),
					5=>new ParserAction($this->reduce, $table28),
					7=>new ParserAction($this->reduce, $table28),
					8=>new ParserAction($this->reduce, $table28),
					9=>new ParserAction($this->reduce, $table28),
					10=>new ParserAction($this->reduce, $table28),
					11=>new ParserAction($this->reduce, $table28),
					12=>new ParserAction($this->reduce, $table28),
					13=>new ParserAction($this->reduce, $table28),
					14=>new ParserAction($this->reduce, $table28),
					15=>new ParserAction($this->reduce, $table28),
					16=>new ParserAction($this->reduce, $table28),
					17=>new ParserAction($this->reduce, $table28),
					18=>new ParserAction($this->reduce, $table28),
					19=>new ParserAction($this->reduce, $table28),
					20=>new ParserAction($this->reduce, $table28),
					21=>new ParserAction($this->reduce, $table28),
					22=>new ParserAction($this->reduce, $table28),
					23=>new ParserAction($this->reduce, $table28),
					24=>new ParserAction($this->reduce, $table28),
					25=>new ParserAction($this->reduce, $table28),
					26=>new ParserAction($this->reduce, $table28),
					27=>new ParserAction($this->reduce, $table28),
					28=>new ParserAction($this->reduce, $table28),
					29=>new ParserAction($this->reduce, $table28),
					30=>new ParserAction($this->reduce, $table28),
					31=>new ParserAction($this->reduce, $table28),
					32=>new ParserAction($this->reduce, $table28),
					33=>new ParserAction($this->reduce, $table28),
					34=>new ParserAction($this->reduce, $table28),
					35=>new ParserAction($this->reduce, $table28),
					36=>new ParserAction($this->reduce, $table28),
					37=>new ParserAction($this->reduce, $table28),
					38=>new ParserAction($this->reduce, $table28),
					39=>new ParserAction($this->reduce, $table28),
					40=>new ParserAction($this->reduce, $table28),
					41=>new ParserAction($this->reduce, $table28),
					42=>new ParserAction($this->reduce, $table28),
					43=>new ParserAction($this->reduce, $table28),
					44=>new ParserAction($this->reduce, $table28),
					45=>new ParserAction($this->reduce, $table28),
					46=>new ParserAction($this->reduce, $table28),
					47=>new ParserAction($this->reduce, $table28),
					48=>new ParserAction($this->reduce, $table28),
					49=>new ParserAction($this->reduce, $table28),
					50=>new ParserAction($this->reduce, $table28),
					51=>new ParserAction($this->reduce, $table28),
					53=>new ParserAction($this->reduce, $table28),
					55=>new ParserAction($this->reduce, $table28),
					56=>new ParserAction($this->reduce, $table28),
					57=>new ParserAction($this->reduce, $table28),
					58=>new ParserAction($this->reduce, $table28),
					59=>new ParserAction($this->reduce, $table28),
					60=>new ParserAction($this->reduce, $table28),
					61=>new ParserAction($this->reduce, $table28),
					63=>new ParserAction($this->reduce, $table28)
				);

			$tableDefinition86 = array(
				
					1=>new ParserAction($this->reduce, $table32),
					5=>new ParserAction($this->reduce, $table32),
					7=>new ParserAction($this->reduce, $table32),
					8=>new ParserAction($this->reduce, $table32),
					9=>new ParserAction($this->reduce, $table32),
					10=>new ParserAction($this->reduce, $table32),
					11=>new ParserAction($this->reduce, $table32),
					12=>new ParserAction($this->reduce, $table32),
					13=>new ParserAction($this->reduce, $table32),
					14=>new ParserAction($this->reduce, $table32),
					15=>new ParserAction($this->reduce, $table32),
					16=>new ParserAction($this->reduce, $table32),
					17=>new ParserAction($this->reduce, $table32),
					18=>new ParserAction($this->reduce, $table32),
					19=>new ParserAction($this->reduce, $table32),
					20=>new ParserAction($this->reduce, $table32),
					21=>new ParserAction($this->reduce, $table32),
					22=>new ParserAction($this->reduce, $table32),
					23=>new ParserAction($this->reduce, $table32),
					24=>new ParserAction($this->reduce, $table32),
					25=>new ParserAction($this->reduce, $table32),
					26=>new ParserAction($this->reduce, $table32),
					27=>new ParserAction($this->reduce, $table32),
					28=>new ParserAction($this->reduce, $table32),
					29=>new ParserAction($this->reduce, $table32),
					30=>new ParserAction($this->reduce, $table32),
					31=>new ParserAction($this->reduce, $table32),
					32=>new ParserAction($this->reduce, $table32),
					33=>new ParserAction($this->reduce, $table32),
					34=>new ParserAction($this->reduce, $table32),
					35=>new ParserAction($this->reduce, $table32),
					36=>new ParserAction($this->reduce, $table32),
					37=>new ParserAction($this->reduce, $table32),
					38=>new ParserAction($this->reduce, $table32),
					39=>new ParserAction($this->reduce, $table32),
					40=>new ParserAction($this->reduce, $table32),
					41=>new ParserAction($this->reduce, $table32),
					42=>new ParserAction($this->reduce, $table32),
					43=>new ParserAction($this->reduce, $table32),
					44=>new ParserAction($this->reduce, $table32),
					45=>new ParserAction($this->reduce, $table32),
					46=>new ParserAction($this->reduce, $table32),
					47=>new ParserAction($this->reduce, $table32),
					48=>new ParserAction($this->reduce, $table32),
					49=>new ParserAction($this->reduce, $table32),
					50=>new ParserAction($this->reduce, $table32),
					51=>new ParserAction($this->reduce, $table32),
					53=>new ParserAction($this->reduce, $table32),
					55=>new ParserAction($this->reduce, $table32),
					56=>new ParserAction($this->reduce, $table32),
					57=>new ParserAction($this->reduce, $table32),
					58=>new ParserAction($this->reduce, $table32),
					59=>new ParserAction($this->reduce, $table32),
					60=>new ParserAction($this->reduce, $table32),
					61=>new ParserAction($this->reduce, $table32),
					63=>new ParserAction($this->reduce, $table32)
				);

			$tableDefinition87 = array(
				
					1=>new ParserAction($this->reduce, $table36),
					5=>new ParserAction($this->reduce, $table36),
					7=>new ParserAction($this->reduce, $table36),
					8=>new ParserAction($this->reduce, $table36),
					9=>new ParserAction($this->reduce, $table36),
					10=>new ParserAction($this->reduce, $table36),
					11=>new ParserAction($this->reduce, $table36),
					12=>new ParserAction($this->reduce, $table36),
					13=>new ParserAction($this->reduce, $table36),
					14=>new ParserAction($this->reduce, $table36),
					15=>new ParserAction($this->reduce, $table36),
					16=>new ParserAction($this->reduce, $table36),
					17=>new ParserAction($this->reduce, $table36),
					18=>new ParserAction($this->reduce, $table36),
					19=>new ParserAction($this->reduce, $table36),
					20=>new ParserAction($this->reduce, $table36),
					21=>new ParserAction($this->reduce, $table36),
					22=>new ParserAction($this->reduce, $table36),
					23=>new ParserAction($this->reduce, $table36),
					24=>new ParserAction($this->reduce, $table36),
					25=>new ParserAction($this->reduce, $table36),
					26=>new ParserAction($this->reduce, $table36),
					27=>new ParserAction($this->reduce, $table36),
					28=>new ParserAction($this->reduce, $table36),
					29=>new ParserAction($this->reduce, $table36),
					30=>new ParserAction($this->reduce, $table36),
					31=>new ParserAction($this->reduce, $table36),
					32=>new ParserAction($this->reduce, $table36),
					33=>new ParserAction($this->reduce, $table36),
					34=>new ParserAction($this->reduce, $table36),
					35=>new ParserAction($this->reduce, $table36),
					36=>new ParserAction($this->reduce, $table36),
					37=>new ParserAction($this->reduce, $table36),
					38=>new ParserAction($this->reduce, $table36),
					39=>new ParserAction($this->reduce, $table36),
					40=>new ParserAction($this->reduce, $table36),
					41=>new ParserAction($this->reduce, $table36),
					42=>new ParserAction($this->reduce, $table36),
					43=>new ParserAction($this->reduce, $table36),
					44=>new ParserAction($this->reduce, $table36),
					45=>new ParserAction($this->reduce, $table36),
					46=>new ParserAction($this->reduce, $table36),
					47=>new ParserAction($this->reduce, $table36),
					48=>new ParserAction($this->reduce, $table36),
					49=>new ParserAction($this->reduce, $table36),
					50=>new ParserAction($this->reduce, $table36),
					51=>new ParserAction($this->reduce, $table36),
					53=>new ParserAction($this->reduce, $table36),
					55=>new ParserAction($this->reduce, $table36),
					56=>new ParserAction($this->reduce, $table36),
					57=>new ParserAction($this->reduce, $table36),
					58=>new ParserAction($this->reduce, $table36),
					59=>new ParserAction($this->reduce, $table36),
					60=>new ParserAction($this->reduce, $table36),
					61=>new ParserAction($this->reduce, $table36),
					63=>new ParserAction($this->reduce, $table36)
				);

			$tableDefinition88 = array(
				
					1=>new ParserAction($this->reduce, $table40),
					5=>new ParserAction($this->reduce, $table40),
					7=>new ParserAction($this->reduce, $table40),
					8=>new ParserAction($this->reduce, $table40),
					9=>new ParserAction($this->reduce, $table40),
					10=>new ParserAction($this->reduce, $table40),
					11=>new ParserAction($this->reduce, $table40),
					12=>new ParserAction($this->reduce, $table40),
					13=>new ParserAction($this->reduce, $table40),
					14=>new ParserAction($this->reduce, $table40),
					15=>new ParserAction($this->reduce, $table40),
					16=>new ParserAction($this->reduce, $table40),
					17=>new ParserAction($this->reduce, $table40),
					18=>new ParserAction($this->reduce, $table40),
					19=>new ParserAction($this->reduce, $table40),
					20=>new ParserAction($this->reduce, $table40),
					21=>new ParserAction($this->reduce, $table40),
					22=>new ParserAction($this->reduce, $table40),
					23=>new ParserAction($this->reduce, $table40),
					24=>new ParserAction($this->reduce, $table40),
					25=>new ParserAction($this->reduce, $table40),
					26=>new ParserAction($this->reduce, $table40),
					27=>new ParserAction($this->reduce, $table40),
					28=>new ParserAction($this->reduce, $table40),
					29=>new ParserAction($this->reduce, $table40),
					30=>new ParserAction($this->reduce, $table40),
					31=>new ParserAction($this->reduce, $table40),
					32=>new ParserAction($this->reduce, $table40),
					33=>new ParserAction($this->reduce, $table40),
					34=>new ParserAction($this->reduce, $table40),
					35=>new ParserAction($this->reduce, $table40),
					36=>new ParserAction($this->reduce, $table40),
					37=>new ParserAction($this->reduce, $table40),
					38=>new ParserAction($this->reduce, $table40),
					39=>new ParserAction($this->reduce, $table40),
					40=>new ParserAction($this->reduce, $table40),
					41=>new ParserAction($this->reduce, $table40),
					42=>new ParserAction($this->reduce, $table40),
					43=>new ParserAction($this->reduce, $table40),
					44=>new ParserAction($this->reduce, $table40),
					45=>new ParserAction($this->reduce, $table40),
					46=>new ParserAction($this->reduce, $table40),
					47=>new ParserAction($this->reduce, $table40),
					48=>new ParserAction($this->reduce, $table40),
					49=>new ParserAction($this->reduce, $table40),
					50=>new ParserAction($this->reduce, $table40),
					51=>new ParserAction($this->reduce, $table40),
					53=>new ParserAction($this->reduce, $table40),
					55=>new ParserAction($this->reduce, $table40),
					56=>new ParserAction($this->reduce, $table40),
					57=>new ParserAction($this->reduce, $table40),
					58=>new ParserAction($this->reduce, $table40),
					59=>new ParserAction($this->reduce, $table40),
					60=>new ParserAction($this->reduce, $table40),
					61=>new ParserAction($this->reduce, $table40),
					63=>new ParserAction($this->reduce, $table40)
				);

			$tableDefinition89 = array(
				
					1=>new ParserAction($this->reduce, $table44),
					5=>new ParserAction($this->reduce, $table44),
					7=>new ParserAction($this->reduce, $table44),
					8=>new ParserAction($this->reduce, $table44),
					9=>new ParserAction($this->reduce, $table44),
					10=>new ParserAction($this->reduce, $table44),
					11=>new ParserAction($this->reduce, $table44),
					12=>new ParserAction($this->reduce, $table44),
					13=>new ParserAction($this->reduce, $table44),
					14=>new ParserAction($this->reduce, $table44),
					15=>new ParserAction($this->reduce, $table44),
					16=>new ParserAction($this->reduce, $table44),
					17=>new ParserAction($this->reduce, $table44),
					18=>new ParserAction($this->reduce, $table44),
					19=>new ParserAction($this->reduce, $table44),
					20=>new ParserAction($this->reduce, $table44),
					21=>new ParserAction($this->reduce, $table44),
					22=>new ParserAction($this->reduce, $table44),
					23=>new ParserAction($this->reduce, $table44),
					24=>new ParserAction($this->reduce, $table44),
					25=>new ParserAction($this->reduce, $table44),
					26=>new ParserAction($this->reduce, $table44),
					27=>new ParserAction($this->reduce, $table44),
					28=>new ParserAction($this->reduce, $table44),
					29=>new ParserAction($this->reduce, $table44),
					30=>new ParserAction($this->reduce, $table44),
					31=>new ParserAction($this->reduce, $table44),
					32=>new ParserAction($this->reduce, $table44),
					33=>new ParserAction($this->reduce, $table44),
					34=>new ParserAction($this->reduce, $table44),
					35=>new ParserAction($this->reduce, $table44),
					36=>new ParserAction($this->reduce, $table44),
					37=>new ParserAction($this->reduce, $table44),
					38=>new ParserAction($this->reduce, $table44),
					39=>new ParserAction($this->reduce, $table44),
					40=>new ParserAction($this->reduce, $table44),
					41=>new ParserAction($this->reduce, $table44),
					42=>new ParserAction($this->reduce, $table44),
					43=>new ParserAction($this->reduce, $table44),
					44=>new ParserAction($this->reduce, $table44),
					45=>new ParserAction($this->reduce, $table44),
					46=>new ParserAction($this->reduce, $table44),
					47=>new ParserAction($this->reduce, $table44),
					48=>new ParserAction($this->reduce, $table44),
					49=>new ParserAction($this->reduce, $table44),
					50=>new ParserAction($this->reduce, $table44),
					51=>new ParserAction($this->reduce, $table44),
					53=>new ParserAction($this->reduce, $table44),
					55=>new ParserAction($this->reduce, $table44),
					56=>new ParserAction($this->reduce, $table44),
					57=>new ParserAction($this->reduce, $table44),
					58=>new ParserAction($this->reduce, $table44),
					59=>new ParserAction($this->reduce, $table44),
					60=>new ParserAction($this->reduce, $table44),
					61=>new ParserAction($this->reduce, $table44),
					63=>new ParserAction($this->reduce, $table44)
				);

			$tableDefinition90 = array(
				
					1=>new ParserAction($this->reduce, $table48),
					5=>new ParserAction($this->reduce, $table48),
					7=>new ParserAction($this->reduce, $table48),
					8=>new ParserAction($this->reduce, $table48),
					9=>new ParserAction($this->reduce, $table48),
					10=>new ParserAction($this->reduce, $table48),
					11=>new ParserAction($this->reduce, $table48),
					12=>new ParserAction($this->reduce, $table48),
					13=>new ParserAction($this->reduce, $table48),
					14=>new ParserAction($this->reduce, $table48),
					15=>new ParserAction($this->reduce, $table48),
					16=>new ParserAction($this->reduce, $table48),
					17=>new ParserAction($this->reduce, $table48),
					18=>new ParserAction($this->reduce, $table48),
					19=>new ParserAction($this->reduce, $table48),
					20=>new ParserAction($this->reduce, $table48),
					21=>new ParserAction($this->reduce, $table48),
					22=>new ParserAction($this->reduce, $table48),
					23=>new ParserAction($this->reduce, $table48),
					24=>new ParserAction($this->reduce, $table48),
					25=>new ParserAction($this->reduce, $table48),
					26=>new ParserAction($this->reduce, $table48),
					27=>new ParserAction($this->reduce, $table48),
					28=>new ParserAction($this->reduce, $table48),
					29=>new ParserAction($this->reduce, $table48),
					30=>new ParserAction($this->reduce, $table48),
					31=>new ParserAction($this->reduce, $table48),
					32=>new ParserAction($this->reduce, $table48),
					33=>new ParserAction($this->reduce, $table48),
					34=>new ParserAction($this->reduce, $table48),
					35=>new ParserAction($this->reduce, $table48),
					36=>new ParserAction($this->reduce, $table48),
					37=>new ParserAction($this->reduce, $table48),
					38=>new ParserAction($this->reduce, $table48),
					39=>new ParserAction($this->reduce, $table48),
					40=>new ParserAction($this->reduce, $table48),
					41=>new ParserAction($this->reduce, $table48),
					42=>new ParserAction($this->reduce, $table48),
					43=>new ParserAction($this->reduce, $table48),
					44=>new ParserAction($this->reduce, $table48),
					45=>new ParserAction($this->reduce, $table48),
					46=>new ParserAction($this->reduce, $table48),
					47=>new ParserAction($this->reduce, $table48),
					48=>new ParserAction($this->reduce, $table48),
					49=>new ParserAction($this->reduce, $table48),
					50=>new ParserAction($this->reduce, $table48),
					51=>new ParserAction($this->reduce, $table48),
					53=>new ParserAction($this->reduce, $table48),
					55=>new ParserAction($this->reduce, $table48),
					56=>new ParserAction($this->reduce, $table48),
					57=>new ParserAction($this->reduce, $table48),
					58=>new ParserAction($this->reduce, $table48),
					59=>new ParserAction($this->reduce, $table48),
					60=>new ParserAction($this->reduce, $table48),
					61=>new ParserAction($this->reduce, $table48),
					63=>new ParserAction($this->reduce, $table48)
				);

			$tableDefinition91 = array(
				
					1=>new ParserAction($this->reduce, $table52),
					5=>new ParserAction($this->reduce, $table52),
					7=>new ParserAction($this->reduce, $table52),
					8=>new ParserAction($this->reduce, $table52),
					9=>new ParserAction($this->reduce, $table52),
					10=>new ParserAction($this->reduce, $table52),
					11=>new ParserAction($this->reduce, $table52),
					12=>new ParserAction($this->reduce, $table52),
					13=>new ParserAction($this->reduce, $table52),
					14=>new ParserAction($this->reduce, $table52),
					15=>new ParserAction($this->reduce, $table52),
					16=>new ParserAction($this->reduce, $table52),
					17=>new ParserAction($this->reduce, $table52),
					18=>new ParserAction($this->reduce, $table52),
					19=>new ParserAction($this->reduce, $table52),
					20=>new ParserAction($this->reduce, $table52),
					21=>new ParserAction($this->reduce, $table52),
					22=>new ParserAction($this->reduce, $table52),
					23=>new ParserAction($this->reduce, $table52),
					24=>new ParserAction($this->reduce, $table52),
					25=>new ParserAction($this->reduce, $table52),
					26=>new ParserAction($this->reduce, $table52),
					27=>new ParserAction($this->reduce, $table52),
					28=>new ParserAction($this->reduce, $table52),
					29=>new ParserAction($this->reduce, $table52),
					30=>new ParserAction($this->reduce, $table52),
					31=>new ParserAction($this->reduce, $table52),
					32=>new ParserAction($this->reduce, $table52),
					33=>new ParserAction($this->reduce, $table52),
					34=>new ParserAction($this->reduce, $table52),
					35=>new ParserAction($this->reduce, $table52),
					36=>new ParserAction($this->reduce, $table52),
					37=>new ParserAction($this->reduce, $table52),
					38=>new ParserAction($this->reduce, $table52),
					39=>new ParserAction($this->reduce, $table52),
					40=>new ParserAction($this->reduce, $table52),
					41=>new ParserAction($this->reduce, $table52),
					42=>new ParserAction($this->reduce, $table52),
					43=>new ParserAction($this->reduce, $table52),
					44=>new ParserAction($this->reduce, $table52),
					45=>new ParserAction($this->reduce, $table52),
					46=>new ParserAction($this->reduce, $table52),
					47=>new ParserAction($this->reduce, $table52),
					48=>new ParserAction($this->reduce, $table52),
					49=>new ParserAction($this->reduce, $table52),
					50=>new ParserAction($this->reduce, $table52),
					51=>new ParserAction($this->reduce, $table52),
					53=>new ParserAction($this->reduce, $table52),
					55=>new ParserAction($this->reduce, $table52),
					56=>new ParserAction($this->reduce, $table52),
					57=>new ParserAction($this->reduce, $table52),
					58=>new ParserAction($this->reduce, $table52),
					59=>new ParserAction($this->reduce, $table52),
					60=>new ParserAction($this->reduce, $table52),
					61=>new ParserAction($this->reduce, $table52),
					63=>new ParserAction($this->reduce, $table52)
				);

			$tableDefinition92 = array(
				
					1=>new ParserAction($this->reduce, $table57),
					5=>new ParserAction($this->reduce, $table57),
					7=>new ParserAction($this->reduce, $table57),
					8=>new ParserAction($this->reduce, $table57),
					9=>new ParserAction($this->reduce, $table57),
					10=>new ParserAction($this->reduce, $table57),
					11=>new ParserAction($this->reduce, $table57),
					12=>new ParserAction($this->reduce, $table57),
					13=>new ParserAction($this->reduce, $table57),
					14=>new ParserAction($this->reduce, $table57),
					15=>new ParserAction($this->reduce, $table57),
					16=>new ParserAction($this->reduce, $table57),
					17=>new ParserAction($this->reduce, $table57),
					18=>new ParserAction($this->reduce, $table57),
					19=>new ParserAction($this->reduce, $table57),
					20=>new ParserAction($this->reduce, $table57),
					21=>new ParserAction($this->reduce, $table57),
					22=>new ParserAction($this->reduce, $table57),
					23=>new ParserAction($this->reduce, $table57),
					24=>new ParserAction($this->reduce, $table57),
					25=>new ParserAction($this->reduce, $table57),
					26=>new ParserAction($this->reduce, $table57),
					27=>new ParserAction($this->reduce, $table57),
					28=>new ParserAction($this->reduce, $table57),
					29=>new ParserAction($this->reduce, $table57),
					30=>new ParserAction($this->reduce, $table57),
					31=>new ParserAction($this->reduce, $table57),
					32=>new ParserAction($this->reduce, $table57),
					33=>new ParserAction($this->reduce, $table57),
					34=>new ParserAction($this->reduce, $table57),
					35=>new ParserAction($this->reduce, $table57),
					36=>new ParserAction($this->reduce, $table57),
					37=>new ParserAction($this->reduce, $table57),
					38=>new ParserAction($this->reduce, $table57),
					39=>new ParserAction($this->reduce, $table57),
					40=>new ParserAction($this->reduce, $table57),
					41=>new ParserAction($this->reduce, $table57),
					42=>new ParserAction($this->reduce, $table57),
					43=>new ParserAction($this->reduce, $table57),
					44=>new ParserAction($this->reduce, $table57),
					45=>new ParserAction($this->reduce, $table57),
					46=>new ParserAction($this->reduce, $table57),
					47=>new ParserAction($this->reduce, $table57),
					48=>new ParserAction($this->reduce, $table57),
					49=>new ParserAction($this->reduce, $table57),
					50=>new ParserAction($this->reduce, $table57),
					51=>new ParserAction($this->reduce, $table57),
					53=>new ParserAction($this->reduce, $table57),
					55=>new ParserAction($this->reduce, $table57),
					56=>new ParserAction($this->reduce, $table57),
					57=>new ParserAction($this->reduce, $table57),
					58=>new ParserAction($this->reduce, $table57),
					59=>new ParserAction($this->reduce, $table57),
					60=>new ParserAction($this->reduce, $table57),
					61=>new ParserAction($this->reduce, $table57),
					63=>new ParserAction($this->reduce, $table57)
				);

			$tableDefinition93 = array(
				
					1=>new ParserAction($this->reduce, $table61),
					5=>new ParserAction($this->reduce, $table61),
					7=>new ParserAction($this->reduce, $table61),
					8=>new ParserAction($this->reduce, $table61),
					9=>new ParserAction($this->reduce, $table61),
					10=>new ParserAction($this->reduce, $table61),
					11=>new ParserAction($this->reduce, $table61),
					12=>new ParserAction($this->reduce, $table61),
					13=>new ParserAction($this->reduce, $table61),
					14=>new ParserAction($this->reduce, $table61),
					15=>new ParserAction($this->reduce, $table61),
					16=>new ParserAction($this->reduce, $table61),
					17=>new ParserAction($this->reduce, $table61),
					18=>new ParserAction($this->reduce, $table61),
					19=>new ParserAction($this->reduce, $table61),
					20=>new ParserAction($this->reduce, $table61),
					21=>new ParserAction($this->reduce, $table61),
					22=>new ParserAction($this->reduce, $table61),
					23=>new ParserAction($this->reduce, $table61),
					24=>new ParserAction($this->reduce, $table61),
					25=>new ParserAction($this->reduce, $table61),
					26=>new ParserAction($this->reduce, $table61),
					27=>new ParserAction($this->reduce, $table61),
					28=>new ParserAction($this->reduce, $table61),
					29=>new ParserAction($this->reduce, $table61),
					30=>new ParserAction($this->reduce, $table61),
					31=>new ParserAction($this->reduce, $table61),
					32=>new ParserAction($this->reduce, $table61),
					33=>new ParserAction($this->reduce, $table61),
					34=>new ParserAction($this->reduce, $table61),
					35=>new ParserAction($this->reduce, $table61),
					36=>new ParserAction($this->reduce, $table61),
					37=>new ParserAction($this->reduce, $table61),
					38=>new ParserAction($this->reduce, $table61),
					39=>new ParserAction($this->reduce, $table61),
					40=>new ParserAction($this->reduce, $table61),
					41=>new ParserAction($this->reduce, $table61),
					42=>new ParserAction($this->reduce, $table61),
					43=>new ParserAction($this->reduce, $table61),
					44=>new ParserAction($this->reduce, $table61),
					45=>new ParserAction($this->reduce, $table61),
					46=>new ParserAction($this->reduce, $table61),
					47=>new ParserAction($this->reduce, $table61),
					48=>new ParserAction($this->reduce, $table61),
					49=>new ParserAction($this->reduce, $table61),
					50=>new ParserAction($this->reduce, $table61),
					51=>new ParserAction($this->reduce, $table61),
					53=>new ParserAction($this->reduce, $table61),
					55=>new ParserAction($this->reduce, $table61),
					56=>new ParserAction($this->reduce, $table61),
					57=>new ParserAction($this->reduce, $table61),
					58=>new ParserAction($this->reduce, $table61),
					59=>new ParserAction($this->reduce, $table61),
					60=>new ParserAction($this->reduce, $table61),
					61=>new ParserAction($this->reduce, $table61),
					63=>new ParserAction($this->reduce, $table61)
				);

			$tableDefinition94 = array(
				
					1=>new ParserAction($this->reduce, $table65),
					5=>new ParserAction($this->reduce, $table65),
					7=>new ParserAction($this->reduce, $table65),
					8=>new ParserAction($this->reduce, $table65),
					9=>new ParserAction($this->reduce, $table65),
					10=>new ParserAction($this->reduce, $table65),
					11=>new ParserAction($this->reduce, $table65),
					12=>new ParserAction($this->reduce, $table65),
					13=>new ParserAction($this->reduce, $table65),
					14=>new ParserAction($this->reduce, $table65),
					15=>new ParserAction($this->reduce, $table65),
					16=>new ParserAction($this->reduce, $table65),
					17=>new ParserAction($this->reduce, $table65),
					18=>new ParserAction($this->reduce, $table65),
					19=>new ParserAction($this->reduce, $table65),
					20=>new ParserAction($this->reduce, $table65),
					21=>new ParserAction($this->reduce, $table65),
					22=>new ParserAction($this->reduce, $table65),
					23=>new ParserAction($this->reduce, $table65),
					24=>new ParserAction($this->reduce, $table65),
					25=>new ParserAction($this->reduce, $table65),
					26=>new ParserAction($this->reduce, $table65),
					27=>new ParserAction($this->reduce, $table65),
					28=>new ParserAction($this->reduce, $table65),
					29=>new ParserAction($this->reduce, $table65),
					30=>new ParserAction($this->reduce, $table65),
					31=>new ParserAction($this->reduce, $table65),
					32=>new ParserAction($this->reduce, $table65),
					33=>new ParserAction($this->reduce, $table65),
					34=>new ParserAction($this->reduce, $table65),
					35=>new ParserAction($this->reduce, $table65),
					36=>new ParserAction($this->reduce, $table65),
					37=>new ParserAction($this->reduce, $table65),
					38=>new ParserAction($this->reduce, $table65),
					39=>new ParserAction($this->reduce, $table65),
					40=>new ParserAction($this->reduce, $table65),
					41=>new ParserAction($this->reduce, $table65),
					42=>new ParserAction($this->reduce, $table65),
					43=>new ParserAction($this->reduce, $table65),
					44=>new ParserAction($this->reduce, $table65),
					45=>new ParserAction($this->reduce, $table65),
					46=>new ParserAction($this->reduce, $table65),
					47=>new ParserAction($this->reduce, $table65),
					48=>new ParserAction($this->reduce, $table65),
					49=>new ParserAction($this->reduce, $table65),
					50=>new ParserAction($this->reduce, $table65),
					51=>new ParserAction($this->reduce, $table65),
					53=>new ParserAction($this->reduce, $table65),
					55=>new ParserAction($this->reduce, $table65),
					56=>new ParserAction($this->reduce, $table65),
					57=>new ParserAction($this->reduce, $table65),
					58=>new ParserAction($this->reduce, $table65),
					59=>new ParserAction($this->reduce, $table65),
					60=>new ParserAction($this->reduce, $table65),
					61=>new ParserAction($this->reduce, $table65),
					63=>new ParserAction($this->reduce, $table65)
				);

			$tableDefinition95 = array(
				
					1=>new ParserAction($this->reduce, $table69),
					5=>new ParserAction($this->reduce, $table69),
					7=>new ParserAction($this->reduce, $table69),
					8=>new ParserAction($this->reduce, $table69),
					9=>new ParserAction($this->reduce, $table69),
					10=>new ParserAction($this->reduce, $table69),
					11=>new ParserAction($this->reduce, $table69),
					12=>new ParserAction($this->reduce, $table69),
					13=>new ParserAction($this->reduce, $table69),
					14=>new ParserAction($this->reduce, $table69),
					15=>new ParserAction($this->reduce, $table69),
					16=>new ParserAction($this->reduce, $table69),
					17=>new ParserAction($this->reduce, $table69),
					18=>new ParserAction($this->reduce, $table69),
					19=>new ParserAction($this->reduce, $table69),
					20=>new ParserAction($this->reduce, $table69),
					21=>new ParserAction($this->reduce, $table69),
					22=>new ParserAction($this->reduce, $table69),
					23=>new ParserAction($this->reduce, $table69),
					24=>new ParserAction($this->reduce, $table69),
					25=>new ParserAction($this->reduce, $table69),
					26=>new ParserAction($this->reduce, $table69),
					27=>new ParserAction($this->reduce, $table69),
					28=>new ParserAction($this->reduce, $table69),
					29=>new ParserAction($this->reduce, $table69),
					30=>new ParserAction($this->reduce, $table69),
					31=>new ParserAction($this->reduce, $table69),
					32=>new ParserAction($this->reduce, $table69),
					33=>new ParserAction($this->reduce, $table69),
					34=>new ParserAction($this->reduce, $table69),
					35=>new ParserAction($this->reduce, $table69),
					36=>new ParserAction($this->reduce, $table69),
					37=>new ParserAction($this->reduce, $table69),
					38=>new ParserAction($this->reduce, $table69),
					39=>new ParserAction($this->reduce, $table69),
					40=>new ParserAction($this->reduce, $table69),
					41=>new ParserAction($this->reduce, $table69),
					42=>new ParserAction($this->reduce, $table69),
					43=>new ParserAction($this->reduce, $table69),
					44=>new ParserAction($this->reduce, $table69),
					45=>new ParserAction($this->reduce, $table69),
					46=>new ParserAction($this->reduce, $table69),
					47=>new ParserAction($this->reduce, $table69),
					48=>new ParserAction($this->reduce, $table69),
					49=>new ParserAction($this->reduce, $table69),
					50=>new ParserAction($this->reduce, $table69),
					51=>new ParserAction($this->reduce, $table69),
					53=>new ParserAction($this->reduce, $table69),
					55=>new ParserAction($this->reduce, $table69),
					56=>new ParserAction($this->reduce, $table69),
					57=>new ParserAction($this->reduce, $table69),
					58=>new ParserAction($this->reduce, $table69),
					59=>new ParserAction($this->reduce, $table69),
					60=>new ParserAction($this->reduce, $table69),
					61=>new ParserAction($this->reduce, $table69),
					63=>new ParserAction($this->reduce, $table69)
				);

			$tableDefinition96 = array(
				
					1=>new ParserAction($this->reduce, $table73),
					5=>new ParserAction($this->reduce, $table73),
					7=>new ParserAction($this->reduce, $table73),
					8=>new ParserAction($this->reduce, $table73),
					9=>new ParserAction($this->reduce, $table73),
					10=>new ParserAction($this->reduce, $table73),
					11=>new ParserAction($this->reduce, $table73),
					12=>new ParserAction($this->reduce, $table73),
					13=>new ParserAction($this->reduce, $table73),
					14=>new ParserAction($this->reduce, $table73),
					15=>new ParserAction($this->reduce, $table73),
					16=>new ParserAction($this->reduce, $table73),
					17=>new ParserAction($this->reduce, $table73),
					18=>new ParserAction($this->reduce, $table73),
					19=>new ParserAction($this->reduce, $table73),
					20=>new ParserAction($this->reduce, $table73),
					21=>new ParserAction($this->reduce, $table73),
					22=>new ParserAction($this->reduce, $table73),
					23=>new ParserAction($this->reduce, $table73),
					24=>new ParserAction($this->reduce, $table73),
					25=>new ParserAction($this->reduce, $table73),
					26=>new ParserAction($this->reduce, $table73),
					27=>new ParserAction($this->reduce, $table73),
					28=>new ParserAction($this->reduce, $table73),
					29=>new ParserAction($this->reduce, $table73),
					30=>new ParserAction($this->reduce, $table73),
					31=>new ParserAction($this->reduce, $table73),
					32=>new ParserAction($this->reduce, $table73),
					33=>new ParserAction($this->reduce, $table73),
					34=>new ParserAction($this->reduce, $table73),
					35=>new ParserAction($this->reduce, $table73),
					36=>new ParserAction($this->reduce, $table73),
					37=>new ParserAction($this->reduce, $table73),
					38=>new ParserAction($this->reduce, $table73),
					39=>new ParserAction($this->reduce, $table73),
					40=>new ParserAction($this->reduce, $table73),
					41=>new ParserAction($this->reduce, $table73),
					42=>new ParserAction($this->reduce, $table73),
					43=>new ParserAction($this->reduce, $table73),
					44=>new ParserAction($this->reduce, $table73),
					45=>new ParserAction($this->reduce, $table73),
					46=>new ParserAction($this->reduce, $table73),
					47=>new ParserAction($this->reduce, $table73),
					48=>new ParserAction($this->reduce, $table73),
					49=>new ParserAction($this->reduce, $table73),
					50=>new ParserAction($this->reduce, $table73),
					51=>new ParserAction($this->reduce, $table73),
					53=>new ParserAction($this->reduce, $table73),
					55=>new ParserAction($this->reduce, $table73),
					56=>new ParserAction($this->reduce, $table73),
					57=>new ParserAction($this->reduce, $table73),
					58=>new ParserAction($this->reduce, $table73),
					59=>new ParserAction($this->reduce, $table73),
					60=>new ParserAction($this->reduce, $table73),
					61=>new ParserAction($this->reduce, $table73),
					63=>new ParserAction($this->reduce, $table73)
				);

			$tableDefinition97 = array(
				
					1=>new ParserAction($this->reduce, $table77),
					5=>new ParserAction($this->reduce, $table77),
					7=>new ParserAction($this->reduce, $table77),
					8=>new ParserAction($this->reduce, $table77),
					9=>new ParserAction($this->reduce, $table77),
					10=>new ParserAction($this->reduce, $table77),
					11=>new ParserAction($this->reduce, $table77),
					12=>new ParserAction($this->reduce, $table77),
					13=>new ParserAction($this->reduce, $table77),
					14=>new ParserAction($this->reduce, $table77),
					15=>new ParserAction($this->reduce, $table77),
					16=>new ParserAction($this->reduce, $table77),
					17=>new ParserAction($this->reduce, $table77),
					18=>new ParserAction($this->reduce, $table77),
					19=>new ParserAction($this->reduce, $table77),
					20=>new ParserAction($this->reduce, $table77),
					21=>new ParserAction($this->reduce, $table77),
					22=>new ParserAction($this->reduce, $table77),
					23=>new ParserAction($this->reduce, $table77),
					24=>new ParserAction($this->reduce, $table77),
					25=>new ParserAction($this->reduce, $table77),
					26=>new ParserAction($this->reduce, $table77),
					27=>new ParserAction($this->reduce, $table77),
					28=>new ParserAction($this->reduce, $table77),
					29=>new ParserAction($this->reduce, $table77),
					30=>new ParserAction($this->reduce, $table77),
					31=>new ParserAction($this->reduce, $table77),
					32=>new ParserAction($this->reduce, $table77),
					33=>new ParserAction($this->reduce, $table77),
					34=>new ParserAction($this->reduce, $table77),
					35=>new ParserAction($this->reduce, $table77),
					36=>new ParserAction($this->reduce, $table77),
					37=>new ParserAction($this->reduce, $table77),
					38=>new ParserAction($this->reduce, $table77),
					39=>new ParserAction($this->reduce, $table77),
					40=>new ParserAction($this->reduce, $table77),
					41=>new ParserAction($this->reduce, $table77),
					42=>new ParserAction($this->reduce, $table77),
					43=>new ParserAction($this->reduce, $table77),
					44=>new ParserAction($this->reduce, $table77),
					45=>new ParserAction($this->reduce, $table77),
					46=>new ParserAction($this->reduce, $table77),
					47=>new ParserAction($this->reduce, $table77),
					48=>new ParserAction($this->reduce, $table77),
					49=>new ParserAction($this->reduce, $table77),
					50=>new ParserAction($this->reduce, $table77),
					51=>new ParserAction($this->reduce, $table77),
					53=>new ParserAction($this->reduce, $table77),
					55=>new ParserAction($this->reduce, $table77),
					56=>new ParserAction($this->reduce, $table77),
					57=>new ParserAction($this->reduce, $table77),
					58=>new ParserAction($this->reduce, $table77),
					59=>new ParserAction($this->reduce, $table77),
					60=>new ParserAction($this->reduce, $table77),
					61=>new ParserAction($this->reduce, $table77),
					63=>new ParserAction($this->reduce, $table77)
				);

			$tableDefinition98 = array(
				
					1=>new ParserAction($this->reduce, $table81),
					5=>new ParserAction($this->reduce, $table81),
					7=>new ParserAction($this->reduce, $table81),
					8=>new ParserAction($this->reduce, $table81),
					9=>new ParserAction($this->reduce, $table81),
					10=>new ParserAction($this->reduce, $table81),
					11=>new ParserAction($this->reduce, $table81),
					12=>new ParserAction($this->reduce, $table81),
					13=>new ParserAction($this->reduce, $table81),
					14=>new ParserAction($this->reduce, $table81),
					15=>new ParserAction($this->reduce, $table81),
					16=>new ParserAction($this->reduce, $table81),
					17=>new ParserAction($this->reduce, $table81),
					18=>new ParserAction($this->reduce, $table81),
					19=>new ParserAction($this->reduce, $table81),
					20=>new ParserAction($this->reduce, $table81),
					21=>new ParserAction($this->reduce, $table81),
					22=>new ParserAction($this->reduce, $table81),
					23=>new ParserAction($this->reduce, $table81),
					24=>new ParserAction($this->reduce, $table81),
					25=>new ParserAction($this->reduce, $table81),
					26=>new ParserAction($this->reduce, $table81),
					27=>new ParserAction($this->reduce, $table81),
					28=>new ParserAction($this->reduce, $table81),
					29=>new ParserAction($this->reduce, $table81),
					30=>new ParserAction($this->reduce, $table81),
					31=>new ParserAction($this->reduce, $table81),
					32=>new ParserAction($this->reduce, $table81),
					33=>new ParserAction($this->reduce, $table81),
					34=>new ParserAction($this->reduce, $table81),
					35=>new ParserAction($this->reduce, $table81),
					36=>new ParserAction($this->reduce, $table81),
					37=>new ParserAction($this->reduce, $table81),
					38=>new ParserAction($this->reduce, $table81),
					39=>new ParserAction($this->reduce, $table81),
					40=>new ParserAction($this->reduce, $table81),
					41=>new ParserAction($this->reduce, $table81),
					42=>new ParserAction($this->reduce, $table81),
					43=>new ParserAction($this->reduce, $table81),
					44=>new ParserAction($this->reduce, $table81),
					45=>new ParserAction($this->reduce, $table81),
					46=>new ParserAction($this->reduce, $table81),
					47=>new ParserAction($this->reduce, $table81),
					48=>new ParserAction($this->reduce, $table81),
					49=>new ParserAction($this->reduce, $table81),
					50=>new ParserAction($this->reduce, $table81),
					51=>new ParserAction($this->reduce, $table81),
					53=>new ParserAction($this->reduce, $table81),
					55=>new ParserAction($this->reduce, $table81),
					56=>new ParserAction($this->reduce, $table81),
					57=>new ParserAction($this->reduce, $table81),
					58=>new ParserAction($this->reduce, $table81),
					59=>new ParserAction($this->reduce, $table81),
					60=>new ParserAction($this->reduce, $table81),
					61=>new ParserAction($this->reduce, $table81),
					63=>new ParserAction($this->reduce, $table81)
				);

			$tableDefinition99 = array(
				
					6=>new ParserAction($this->none, $table40),
					7=>new ParserAction($this->shift, $table5),
					8=>new ParserAction($this->shift, $table6),
					10=>new ParserAction($this->shift, $table7),
					12=>new ParserAction($this->shift, $table8),
					14=>new ParserAction($this->shift, $table9),
					15=>new ParserAction($this->shift, $table10),
					16=>new ParserAction($this->shift, $table11),
					17=>new ParserAction($this->shift, $table12),
					18=>new ParserAction($this->shift, $table13),
					19=>new ParserAction($this->shift, $table14),
					21=>new ParserAction($this->shift, $table15),
					23=>new ParserAction($this->shift, $table16),
					25=>new ParserAction($this->shift, $table17),
					27=>new ParserAction($this->shift, $table18),
					29=>new ParserAction($this->shift, $table19),
					31=>new ParserAction($this->shift, $table20),
					33=>new ParserAction($this->shift, $table21),
					35=>new ParserAction($this->shift, $table22),
					36=>new ParserAction($this->shift, $table23),
					38=>new ParserAction($this->shift, $table24),
					40=>new ParserAction($this->shift, $table25),
					42=>new ParserAction($this->shift, $table26),
					44=>new ParserAction($this->shift, $table27),
					46=>new ParserAction($this->shift, $table28),
					48=>new ParserAction($this->shift, $table29),
					50=>new ParserAction($this->shift, $table30),
					51=>new ParserAction($this->shift, $table31),
					53=>new ParserAction($this->shift, $table32),
					55=>new ParserAction($this->shift, $table103),
					56=>new ParserAction($this->shift, $table33),
					57=>new ParserAction($this->shift, $table34),
					58=>new ParserAction($this->shift, $table35),
					59=>new ParserAction($this->shift, $table36),
					60=>new ParserAction($this->shift, $table37),
					61=>new ParserAction($this->shift, $table38)
				);

			$tableDefinition100 = array(
				
					1=>new ParserAction($this->reduce, $table87),
					5=>new ParserAction($this->reduce, $table87),
					7=>new ParserAction($this->reduce, $table87),
					8=>new ParserAction($this->reduce, $table87),
					9=>new ParserAction($this->reduce, $table87),
					10=>new ParserAction($this->reduce, $table87),
					11=>new ParserAction($this->reduce, $table87),
					12=>new ParserAction($this->reduce, $table87),
					13=>new ParserAction($this->reduce, $table87),
					14=>new ParserAction($this->reduce, $table87),
					15=>new ParserAction($this->reduce, $table87),
					16=>new ParserAction($this->reduce, $table87),
					17=>new ParserAction($this->reduce, $table87),
					18=>new ParserAction($this->reduce, $table87),
					19=>new ParserAction($this->reduce, $table87),
					20=>new ParserAction($this->reduce, $table87),
					21=>new ParserAction($this->reduce, $table87),
					22=>new ParserAction($this->reduce, $table87),
					23=>new ParserAction($this->reduce, $table87),
					24=>new ParserAction($this->reduce, $table87),
					25=>new ParserAction($this->reduce, $table87),
					26=>new ParserAction($this->reduce, $table87),
					27=>new ParserAction($this->reduce, $table87),
					28=>new ParserAction($this->reduce, $table87),
					29=>new ParserAction($this->reduce, $table87),
					30=>new ParserAction($this->reduce, $table87),
					31=>new ParserAction($this->reduce, $table87),
					32=>new ParserAction($this->reduce, $table87),
					33=>new ParserAction($this->reduce, $table87),
					34=>new ParserAction($this->reduce, $table87),
					35=>new ParserAction($this->reduce, $table87),
					36=>new ParserAction($this->reduce, $table87),
					37=>new ParserAction($this->reduce, $table87),
					38=>new ParserAction($this->reduce, $table87),
					39=>new ParserAction($this->reduce, $table87),
					40=>new ParserAction($this->reduce, $table87),
					41=>new ParserAction($this->reduce, $table87),
					42=>new ParserAction($this->reduce, $table87),
					43=>new ParserAction($this->reduce, $table87),
					44=>new ParserAction($this->reduce, $table87),
					45=>new ParserAction($this->reduce, $table87),
					46=>new ParserAction($this->reduce, $table87),
					47=>new ParserAction($this->reduce, $table87),
					48=>new ParserAction($this->reduce, $table87),
					49=>new ParserAction($this->reduce, $table87),
					50=>new ParserAction($this->reduce, $table87),
					51=>new ParserAction($this->reduce, $table87),
					53=>new ParserAction($this->reduce, $table87),
					55=>new ParserAction($this->reduce, $table87),
					56=>new ParserAction($this->reduce, $table87),
					57=>new ParserAction($this->reduce, $table87),
					58=>new ParserAction($this->reduce, $table87),
					59=>new ParserAction($this->reduce, $table87),
					60=>new ParserAction($this->reduce, $table87),
					61=>new ParserAction($this->reduce, $table87),
					63=>new ParserAction($this->reduce, $table87)
				);

			$tableDefinition101 = array(
				
					1=>new ParserAction($this->reduce, $table95),
					5=>new ParserAction($this->reduce, $table95),
					7=>new ParserAction($this->reduce, $table95),
					8=>new ParserAction($this->reduce, $table95),
					9=>new ParserAction($this->reduce, $table95),
					10=>new ParserAction($this->reduce, $table95),
					11=>new ParserAction($this->reduce, $table95),
					12=>new ParserAction($this->reduce, $table95),
					13=>new ParserAction($this->reduce, $table95),
					14=>new ParserAction($this->reduce, $table95),
					15=>new ParserAction($this->reduce, $table95),
					16=>new ParserAction($this->reduce, $table95),
					17=>new ParserAction($this->reduce, $table95),
					18=>new ParserAction($this->reduce, $table95),
					19=>new ParserAction($this->reduce, $table95),
					20=>new ParserAction($this->reduce, $table95),
					21=>new ParserAction($this->reduce, $table95),
					22=>new ParserAction($this->reduce, $table95),
					23=>new ParserAction($this->reduce, $table95),
					24=>new ParserAction($this->reduce, $table95),
					25=>new ParserAction($this->reduce, $table95),
					26=>new ParserAction($this->reduce, $table95),
					27=>new ParserAction($this->reduce, $table95),
					28=>new ParserAction($this->reduce, $table95),
					29=>new ParserAction($this->reduce, $table95),
					30=>new ParserAction($this->reduce, $table95),
					31=>new ParserAction($this->reduce, $table95),
					32=>new ParserAction($this->reduce, $table95),
					33=>new ParserAction($this->reduce, $table95),
					34=>new ParserAction($this->reduce, $table95),
					35=>new ParserAction($this->reduce, $table95),
					36=>new ParserAction($this->reduce, $table95),
					37=>new ParserAction($this->reduce, $table95),
					38=>new ParserAction($this->reduce, $table95),
					39=>new ParserAction($this->reduce, $table95),
					40=>new ParserAction($this->reduce, $table95),
					41=>new ParserAction($this->reduce, $table95),
					42=>new ParserAction($this->reduce, $table95),
					43=>new ParserAction($this->reduce, $table95),
					44=>new ParserAction($this->reduce, $table95),
					45=>new ParserAction($this->reduce, $table95),
					46=>new ParserAction($this->reduce, $table95),
					47=>new ParserAction($this->reduce, $table95),
					48=>new ParserAction($this->reduce, $table95),
					49=>new ParserAction($this->reduce, $table95),
					50=>new ParserAction($this->reduce, $table95),
					51=>new ParserAction($this->reduce, $table95),
					53=>new ParserAction($this->reduce, $table95),
					55=>new ParserAction($this->reduce, $table95),
					56=>new ParserAction($this->reduce, $table95),
					57=>new ParserAction($this->reduce, $table95),
					58=>new ParserAction($this->reduce, $table95),
					59=>new ParserAction($this->reduce, $table95),
					60=>new ParserAction($this->reduce, $table95),
					61=>new ParserAction($this->reduce, $table95),
					63=>new ParserAction($this->reduce, $table95)
				);

			$tableDefinition102 = array(
				
					1=>new ParserAction($this->reduce, $table97),
					5=>new ParserAction($this->reduce, $table97),
					6=>new ParserAction($this->none, $table40),
					7=>new ParserAction($this->shift, $table5),
					8=>new ParserAction($this->shift, $table6),
					9=>new ParserAction($this->reduce, $table97),
					10=>new ParserAction($this->shift, $table7),
					11=>new ParserAction($this->reduce, $table97),
					12=>new ParserAction($this->shift, $table8),
					13=>new ParserAction($this->reduce, $table97),
					14=>new ParserAction($this->shift, $table9),
					15=>new ParserAction($this->shift, $table10),
					16=>new ParserAction($this->shift, $table11),
					17=>new ParserAction($this->shift, $table12),
					18=>new ParserAction($this->shift, $table13),
					19=>new ParserAction($this->shift, $table14),
					20=>new ParserAction($this->reduce, $table97),
					21=>new ParserAction($this->shift, $table15),
					22=>new ParserAction($this->reduce, $table97),
					23=>new ParserAction($this->shift, $table16),
					24=>new ParserAction($this->reduce, $table97),
					25=>new ParserAction($this->shift, $table17),
					26=>new ParserAction($this->reduce, $table97),
					27=>new ParserAction($this->shift, $table18),
					28=>new ParserAction($this->reduce, $table97),
					29=>new ParserAction($this->shift, $table19),
					30=>new ParserAction($this->reduce, $table97),
					31=>new ParserAction($this->shift, $table20),
					32=>new ParserAction($this->reduce, $table97),
					33=>new ParserAction($this->shift, $table21),
					34=>new ParserAction($this->reduce, $table97),
					35=>new ParserAction($this->shift, $table22),
					36=>new ParserAction($this->shift, $table23),
					37=>new ParserAction($this->reduce, $table97),
					38=>new ParserAction($this->shift, $table24),
					39=>new ParserAction($this->reduce, $table97),
					40=>new ParserAction($this->shift, $table25),
					41=>new ParserAction($this->reduce, $table97),
					42=>new ParserAction($this->shift, $table26),
					43=>new ParserAction($this->reduce, $table97),
					44=>new ParserAction($this->shift, $table27),
					45=>new ParserAction($this->reduce, $table97),
					46=>new ParserAction($this->shift, $table28),
					47=>new ParserAction($this->reduce, $table97),
					48=>new ParserAction($this->shift, $table29),
					49=>new ParserAction($this->reduce, $table97),
					50=>new ParserAction($this->shift, $table30),
					51=>new ParserAction($this->shift, $table31),
					53=>new ParserAction($this->shift, $table32),
					55=>new ParserAction($this->reduce, $table97),
					56=>new ParserAction($this->shift, $table33),
					57=>new ParserAction($this->shift, $table34),
					58=>new ParserAction($this->shift, $table35),
					59=>new ParserAction($this->shift, $table36),
					60=>new ParserAction($this->shift, $table37),
					61=>new ParserAction($this->shift, $table38),
					63=>new ParserAction($this->shift, $table104)
				);

			$tableDefinition103 = array(
				
					1=>new ParserAction($this->reduce, $table86),
					5=>new ParserAction($this->reduce, $table86),
					7=>new ParserAction($this->reduce, $table86),
					8=>new ParserAction($this->reduce, $table86),
					9=>new ParserAction($this->reduce, $table86),
					10=>new ParserAction($this->reduce, $table86),
					11=>new ParserAction($this->reduce, $table86),
					12=>new ParserAction($this->reduce, $table86),
					13=>new ParserAction($this->reduce, $table86),
					14=>new ParserAction($this->reduce, $table86),
					15=>new ParserAction($this->reduce, $table86),
					16=>new ParserAction($this->reduce, $table86),
					17=>new ParserAction($this->reduce, $table86),
					18=>new ParserAction($this->reduce, $table86),
					19=>new ParserAction($this->reduce, $table86),
					20=>new ParserAction($this->reduce, $table86),
					21=>new ParserAction($this->reduce, $table86),
					22=>new ParserAction($this->reduce, $table86),
					23=>new ParserAction($this->reduce, $table86),
					24=>new ParserAction($this->reduce, $table86),
					25=>new ParserAction($this->reduce, $table86),
					26=>new ParserAction($this->reduce, $table86),
					27=>new ParserAction($this->reduce, $table86),
					28=>new ParserAction($this->reduce, $table86),
					29=>new ParserAction($this->reduce, $table86),
					30=>new ParserAction($this->reduce, $table86),
					31=>new ParserAction($this->reduce, $table86),
					32=>new ParserAction($this->reduce, $table86),
					33=>new ParserAction($this->reduce, $table86),
					34=>new ParserAction($this->reduce, $table86),
					35=>new ParserAction($this->reduce, $table86),
					36=>new ParserAction($this->reduce, $table86),
					37=>new ParserAction($this->reduce, $table86),
					38=>new ParserAction($this->reduce, $table86),
					39=>new ParserAction($this->reduce, $table86),
					40=>new ParserAction($this->reduce, $table86),
					41=>new ParserAction($this->reduce, $table86),
					42=>new ParserAction($this->reduce, $table86),
					43=>new ParserAction($this->reduce, $table86),
					44=>new ParserAction($this->reduce, $table86),
					45=>new ParserAction($this->reduce, $table86),
					46=>new ParserAction($this->reduce, $table86),
					47=>new ParserAction($this->reduce, $table86),
					48=>new ParserAction($this->reduce, $table86),
					49=>new ParserAction($this->reduce, $table86),
					50=>new ParserAction($this->reduce, $table86),
					51=>new ParserAction($this->reduce, $table86),
					53=>new ParserAction($this->reduce, $table86),
					55=>new ParserAction($this->reduce, $table86),
					56=>new ParserAction($this->reduce, $table86),
					57=>new ParserAction($this->reduce, $table86),
					58=>new ParserAction($this->reduce, $table86),
					59=>new ParserAction($this->reduce, $table86),
					60=>new ParserAction($this->reduce, $table86),
					61=>new ParserAction($this->reduce, $table86),
					63=>new ParserAction($this->reduce, $table86)
				);

			$tableDefinition104 = array(
				
					1=>new ParserAction($this->reduce, $table96),
					5=>new ParserAction($this->reduce, $table96),
					7=>new ParserAction($this->reduce, $table96),
					8=>new ParserAction($this->reduce, $table96),
					9=>new ParserAction($this->reduce, $table96),
					10=>new ParserAction($this->reduce, $table96),
					11=>new ParserAction($this->reduce, $table96),
					12=>new ParserAction($this->reduce, $table96),
					13=>new ParserAction($this->reduce, $table96),
					14=>new ParserAction($this->reduce, $table96),
					15=>new ParserAction($this->reduce, $table96),
					16=>new ParserAction($this->reduce, $table96),
					17=>new ParserAction($this->reduce, $table96),
					18=>new ParserAction($this->reduce, $table96),
					19=>new ParserAction($this->reduce, $table96),
					20=>new ParserAction($this->reduce, $table96),
					21=>new ParserAction($this->reduce, $table96),
					22=>new ParserAction($this->reduce, $table96),
					23=>new ParserAction($this->reduce, $table96),
					24=>new ParserAction($this->reduce, $table96),
					25=>new ParserAction($this->reduce, $table96),
					26=>new ParserAction($this->reduce, $table96),
					27=>new ParserAction($this->reduce, $table96),
					28=>new ParserAction($this->reduce, $table96),
					29=>new ParserAction($this->reduce, $table96),
					30=>new ParserAction($this->reduce, $table96),
					31=>new ParserAction($this->reduce, $table96),
					32=>new ParserAction($this->reduce, $table96),
					33=>new ParserAction($this->reduce, $table96),
					34=>new ParserAction($this->reduce, $table96),
					35=>new ParserAction($this->reduce, $table96),
					36=>new ParserAction($this->reduce, $table96),
					37=>new ParserAction($this->reduce, $table96),
					38=>new ParserAction($this->reduce, $table96),
					39=>new ParserAction($this->reduce, $table96),
					40=>new ParserAction($this->reduce, $table96),
					41=>new ParserAction($this->reduce, $table96),
					42=>new ParserAction($this->reduce, $table96),
					43=>new ParserAction($this->reduce, $table96),
					44=>new ParserAction($this->reduce, $table96),
					45=>new ParserAction($this->reduce, $table96),
					46=>new ParserAction($this->reduce, $table96),
					47=>new ParserAction($this->reduce, $table96),
					48=>new ParserAction($this->reduce, $table96),
					49=>new ParserAction($this->reduce, $table96),
					50=>new ParserAction($this->reduce, $table96),
					51=>new ParserAction($this->reduce, $table96),
					53=>new ParserAction($this->reduce, $table96),
					55=>new ParserAction($this->reduce, $table96),
					56=>new ParserAction($this->reduce, $table96),
					57=>new ParserAction($this->reduce, $table96),
					58=>new ParserAction($this->reduce, $table96),
					59=>new ParserAction($this->reduce, $table96),
					60=>new ParserAction($this->reduce, $table96),
					61=>new ParserAction($this->reduce, $table96),
					63=>new ParserAction($this->reduce, $table96)
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
			$table18->setActions($tableDefinition18);
			$table19->setActions($tableDefinition19);
			$table20->setActions($tableDefinition20);
			$table21->setActions($tableDefinition21);
			$table22->setActions($tableDefinition22);
			$table23->setActions($tableDefinition23);
			$table24->setActions($tableDefinition24);
			$table25->setActions($tableDefinition25);
			$table26->setActions($tableDefinition26);
			$table27->setActions($tableDefinition27);
			$table28->setActions($tableDefinition28);
			$table29->setActions($tableDefinition29);
			$table30->setActions($tableDefinition30);
			$table31->setActions($tableDefinition31);
			$table32->setActions($tableDefinition32);
			$table33->setActions($tableDefinition33);
			$table34->setActions($tableDefinition34);
			$table35->setActions($tableDefinition35);
			$table36->setActions($tableDefinition36);
			$table37->setActions($tableDefinition37);
			$table38->setActions($tableDefinition38);
			$table39->setActions($tableDefinition39);
			$table40->setActions($tableDefinition40);
			$table41->setActions($tableDefinition41);
			$table42->setActions($tableDefinition42);
			$table43->setActions($tableDefinition43);
			$table44->setActions($tableDefinition44);
			$table45->setActions($tableDefinition45);
			$table46->setActions($tableDefinition46);
			$table47->setActions($tableDefinition47);
			$table48->setActions($tableDefinition48);
			$table49->setActions($tableDefinition49);
			$table50->setActions($tableDefinition50);
			$table51->setActions($tableDefinition51);
			$table52->setActions($tableDefinition52);
			$table53->setActions($tableDefinition53);
			$table54->setActions($tableDefinition54);
			$table55->setActions($tableDefinition55);
			$table56->setActions($tableDefinition56);
			$table57->setActions($tableDefinition57);
			$table58->setActions($tableDefinition58);
			$table59->setActions($tableDefinition59);
			$table60->setActions($tableDefinition60);
			$table61->setActions($tableDefinition61);
			$table62->setActions($tableDefinition62);
			$table63->setActions($tableDefinition63);
			$table64->setActions($tableDefinition64);
			$table65->setActions($tableDefinition65);
			$table66->setActions($tableDefinition66);
			$table67->setActions($tableDefinition67);
			$table68->setActions($tableDefinition68);
			$table69->setActions($tableDefinition69);
			$table70->setActions($tableDefinition70);
			$table71->setActions($tableDefinition71);
			$table72->setActions($tableDefinition72);
			$table73->setActions($tableDefinition73);
			$table74->setActions($tableDefinition74);
			$table75->setActions($tableDefinition75);
			$table76->setActions($tableDefinition76);
			$table77->setActions($tableDefinition77);
			$table78->setActions($tableDefinition78);
			$table79->setActions($tableDefinition79);
			$table80->setActions($tableDefinition80);
			$table81->setActions($tableDefinition81);
			$table82->setActions($tableDefinition82);
			$table83->setActions($tableDefinition83);
			$table84->setActions($tableDefinition84);
			$table85->setActions($tableDefinition85);
			$table86->setActions($tableDefinition86);
			$table87->setActions($tableDefinition87);
			$table88->setActions($tableDefinition88);
			$table89->setActions($tableDefinition89);
			$table90->setActions($tableDefinition90);
			$table91->setActions($tableDefinition91);
			$table92->setActions($tableDefinition92);
			$table93->setActions($tableDefinition93);
			$table94->setActions($tableDefinition94);
			$table95->setActions($tableDefinition95);
			$table96->setActions($tableDefinition96);
			$table97->setActions($tableDefinition97);
			$table98->setActions($tableDefinition98);
			$table99->setActions($tableDefinition99);
			$table100->setActions($tableDefinition100);
			$table101->setActions($tableDefinition101);
			$table102->setActions($tableDefinition102);
			$table103->setActions($tableDefinition103);
			$table104->setActions($tableDefinition104);

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
					17=>$table17,
					18=>$table18,
					19=>$table19,
					20=>$table20,
					21=>$table21,
					22=>$table22,
					23=>$table23,
					24=>$table24,
					25=>$table25,
					26=>$table26,
					27=>$table27,
					28=>$table28,
					29=>$table29,
					30=>$table30,
					31=>$table31,
					32=>$table32,
					33=>$table33,
					34=>$table34,
					35=>$table35,
					36=>$table36,
					37=>$table37,
					38=>$table38,
					39=>$table39,
					40=>$table40,
					41=>$table41,
					42=>$table42,
					43=>$table43,
					44=>$table44,
					45=>$table45,
					46=>$table46,
					47=>$table47,
					48=>$table48,
					49=>$table49,
					50=>$table50,
					51=>$table51,
					52=>$table52,
					53=>$table53,
					54=>$table54,
					55=>$table55,
					56=>$table56,
					57=>$table57,
					58=>$table58,
					59=>$table59,
					60=>$table60,
					61=>$table61,
					62=>$table62,
					63=>$table63,
					64=>$table64,
					65=>$table65,
					66=>$table66,
					67=>$table67,
					68=>$table68,
					69=>$table69,
					70=>$table70,
					71=>$table71,
					72=>$table72,
					73=>$table73,
					74=>$table74,
					75=>$table75,
					76=>$table76,
					77=>$table77,
					78=>$table78,
					79=>$table79,
					80=>$table80,
					81=>$table81,
					82=>$table82,
					83=>$table83,
					84=>$table84,
					85=>$table85,
					86=>$table86,
					87=>$table87,
					88=>$table88,
					89=>$table89,
					90=>$table90,
					91=>$table91,
					92=>$table92,
					93=>$table93,
					94=>$table94,
					95=>$table95,
					96=>$table96,
					97=>$table97,
					98=>$table98,
					99=>$table99,
					100=>$table100,
					101=>$table101,
					102=>$table102,
					103=>$table103,
					104=>$table104
				);

			$this->defaultActions = array(
				
					3=>new ParserAction($this->reduce, $table3),
					39=>new ParserAction($this->reduce, $table2)
				);

			$this->productions = array(
				
					0=>new ParserProduction($symbol0),
					1=>new ParserProduction($symbol3,1),
					2=>new ParserProduction($symbol3,2),
					3=>new ParserProduction($symbol3,1),
					4=>new ParserProduction($symbol4,1),
					5=>new ParserProduction($symbol4,2),
					6=>new ParserProduction($symbol6,1),
					7=>new ParserProduction($symbol6,1),
					8=>new ParserProduction($symbol6,2),
					9=>new ParserProduction($symbol6,3),
					10=>new ParserProduction($symbol6,1),
					11=>new ParserProduction($symbol6,2),
					12=>new ParserProduction($symbol6,3),
					13=>new ParserProduction($symbol6,1),
					14=>new ParserProduction($symbol6,2),
					15=>new ParserProduction($symbol6,3),
					16=>new ParserProduction($symbol6,1),
					17=>new ParserProduction($symbol6,1),
					18=>new ParserProduction($symbol6,1),
					19=>new ParserProduction($symbol6,1),
					20=>new ParserProduction($symbol6,1),
					21=>new ParserProduction($symbol6,1),
					22=>new ParserProduction($symbol6,2),
					23=>new ParserProduction($symbol6,2),
					24=>new ParserProduction($symbol6,3),
					25=>new ParserProduction($symbol6,1),
					26=>new ParserProduction($symbol6,2),
					27=>new ParserProduction($symbol6,2),
					28=>new ParserProduction($symbol6,3),
					29=>new ParserProduction($symbol6,1),
					30=>new ParserProduction($symbol6,2),
					31=>new ParserProduction($symbol6,2),
					32=>new ParserProduction($symbol6,3),
					33=>new ParserProduction($symbol6,1),
					34=>new ParserProduction($symbol6,2),
					35=>new ParserProduction($symbol6,2),
					36=>new ParserProduction($symbol6,3),
					37=>new ParserProduction($symbol6,1),
					38=>new ParserProduction($symbol6,2),
					39=>new ParserProduction($symbol6,2),
					40=>new ParserProduction($symbol6,3),
					41=>new ParserProduction($symbol6,1),
					42=>new ParserProduction($symbol6,2),
					43=>new ParserProduction($symbol6,2),
					44=>new ParserProduction($symbol6,3),
					45=>new ParserProduction($symbol6,1),
					46=>new ParserProduction($symbol6,2),
					47=>new ParserProduction($symbol6,2),
					48=>new ParserProduction($symbol6,3),
					49=>new ParserProduction($symbol6,1),
					50=>new ParserProduction($symbol6,2),
					51=>new ParserProduction($symbol6,2),
					52=>new ParserProduction($symbol6,3),
					53=>new ParserProduction($symbol6,1),
					54=>new ParserProduction($symbol6,1),
					55=>new ParserProduction($symbol6,2),
					56=>new ParserProduction($symbol6,2),
					57=>new ParserProduction($symbol6,3),
					58=>new ParserProduction($symbol6,1),
					59=>new ParserProduction($symbol6,2),
					60=>new ParserProduction($symbol6,2),
					61=>new ParserProduction($symbol6,3),
					62=>new ParserProduction($symbol6,1),
					63=>new ParserProduction($symbol6,2),
					64=>new ParserProduction($symbol6,2),
					65=>new ParserProduction($symbol6,3),
					66=>new ParserProduction($symbol6,1),
					67=>new ParserProduction($symbol6,2),
					68=>new ParserProduction($symbol6,2),
					69=>new ParserProduction($symbol6,3),
					70=>new ParserProduction($symbol6,1),
					71=>new ParserProduction($symbol6,2),
					72=>new ParserProduction($symbol6,2),
					73=>new ParserProduction($symbol6,3),
					74=>new ParserProduction($symbol6,1),
					75=>new ParserProduction($symbol6,2),
					76=>new ParserProduction($symbol6,2),
					77=>new ParserProduction($symbol6,3),
					78=>new ParserProduction($symbol6,1),
					79=>new ParserProduction($symbol6,2),
					80=>new ParserProduction($symbol6,2),
					81=>new ParserProduction($symbol6,3),
					82=>new ParserProduction($symbol6,1),
					83=>new ParserProduction($symbol6,1),
					84=>new ParserProduction($symbol6,2),
					85=>new ParserProduction($symbol6,2),
					86=>new ParserProduction($symbol6,4),
					87=>new ParserProduction($symbol6,3),
					88=>new ParserProduction($symbol6,2),
					89=>new ParserProduction($symbol6,1),
					90=>new ParserProduction($symbol6,1),
					91=>new ParserProduction($symbol6,1),
					92=>new ParserProduction($symbol6,1),
					93=>new ParserProduction($symbol6,1),
					94=>new ParserProduction($symbol6,1),
					95=>new ParserProduction($symbol6,3),
					96=>new ParserProduction($symbol6,4),
					97=>new ParserProduction($symbol6,3),
					98=>new ParserProduction($symbol6,2),
					99=>new ParserProduction($symbol6,1)
				);




        //Setup Lexer
        
			$this->rules = array(
				
					0=>"/^(?:≤REAL_EOF≥)/",
					1=>"/^(?:[<][!][-][-](.*?)[-][-][>])/",
					2=>"/^(?:$)/",
					3=>"/^(?:~\/np~)/",
					4=>"/^(?:~np~)/",
					5=>"/^(?:$)/",
					6=>"/^(?:~\/pp~)/",
					7=>"/^(?:~pp~)/",
					8=>"/^(?:$)/",
					9=>"/^(?:~\/tc~)/",
					10=>"/^(?:~tc~)/",
					11=>"/^(?:[%][%](([0-9A-Za-z ]{3,}))[%][%])/",
					12=>"/^(?:[%](([0-9A-Za-z ]{3,}))[%])/",
					13=>"/^(?:\{\{(([0-9A-Za-z ]{3,}))([|](([0-9A-Za-z ]{3,})))?\}\})/",
					14=>"/^(?:$)/",
					15=>"/^(?:(([\!*#;]+)([-+])?))/",
					16=>"/^(?:(?=((\n))))/",
					17=>"/^(?:$)/",
					18=>"/^(?:((\n))(?=(([\!*#;]+)([-+])?)))/",
					19=>"/^(?:(?!(([\!*#;]+)([-+])?)))/",
					20=>"/^(?:(?=(([\!*#;]+)([-+])?)))/",
					21=>"/^(?:((\n)))/",
					22=>"/^(?:(.+?\})|(\}))/",
					23=>"/^(?:\{([a-z0-9_]+))/",
					24=>"/^(?:.*?\)\})/",
					25=>"/^(?:\{([A-Z0-9_]+)\()/",
					26=>"/^(?:$)/",
					27=>"/^(?:\{([A-Z0-9_]+)\})/",
					28=>"/^(?:$)/",
					29=>"/^(?:[@][)])/",
					30=>"/^(?:@FLP\(.+?\))/",
					31=>"/^(?:---)/",
					32=>"/^(?:%%%)/",
					33=>"/^(?:[ ][-][-][ ])/",
					34=>"/^(?:$)/",
					35=>"/^(?:[_][_])/",
					36=>"/^(?:[_][_])/",
					37=>"/^(?:$)/",
					38=>"/^(?:[\^])/",
					39=>"/^(?:[\^])/",
					40=>"/^(?:$)/",
					41=>"/^(?:[:][:])/",
					42=>"/^(?:[:][:])/",
					43=>"/^(?:$)/",
					44=>"/^(?:\+-)/",
					45=>"/^(?:-\+)/",
					46=>"/^(?:$)/",
					47=>"/^(?:~~)/",
					48=>"/^(?:~~)/",
					49=>"/^(?:$)/",
					50=>"/^(?:[']['])/",
					51=>"/^(?:[']['])/",
					52=>"/^(?:$)/",
					53=>"/^(?:\])/",
					54=>"/^(?:\[(?![ ]))/",
					55=>"/^(?:$)/",
					56=>"/^(?:--)/",
					57=>"/^(?:--)/",
					58=>"/^(?:$)/",
					59=>"/^(?:[|][|])/",
					60=>"/^(?:[|][|])/",
					61=>"/^(?:$)/",
					62=>"/^(?:[=][-])/",
					63=>"/^(?:[-][=])/",
					64=>"/^(?:$)/",
					65=>"/^(?:[=][=][=])/",
					66=>"/^(?:[=][=][=])/",
					67=>"/^(?:$)/",
					68=>"/^(?:\)\))/",
					69=>"/^(?:\(\()/",
					70=>"/^(?:\(\()/",
					71=>"/^(?:$)/",
					72=>"/^(?:\)\))/",
					73=>"/^(?:\(((([a-z0-9-]+)))\()/",
					74=>"/^(?:$)/",
					75=>"/^(?:\)\))/",
					76=>"/^(?:.)/",
					77=>"/^(?:(([A-Z]{1,})([A-Za-z\-\x80-\xFF]{1,}))(?=$|[ \n\t\r\,\;\.]))/",
					78=>"/^(?:&(?![ ]))/",
					79=>"/^(?:<(?![a-zA-Z\/])|>)/",
					80=>"/^(?:[<](.|\n)*?[>])/",
					81=>"/^(?:≤REAL_EOF≥)/",
					82=>"/^(?:(([A-Za-z0-9.,?;]+[ ]?|[&][ ])+))/",
					83=>"/^(?:(?!([@{}\n_\^:\~'-|=\(\)\[\]*#+%<≤ ]))(((.?)))?(?=([@{}\n_\^:\~'-|=\(\)\[\]*#+%<≤ ])))/",
					84=>"/^(?:(([ ])+))/",
					85=>"/^(?:(.))/",
					86=>"/^(?:$)/"
				);

			$this->conditions = array(
				
					"flp"=>new LexerConditions(array( 0,1,4,7,10,11,12,13,18,21,23,25,28,29,30,31,32,33,36,39,42,45,48,51,54,57,60,63,66,70,73,75,77,78,79,80,81,82,83,84,85,86), true),
					"wikiLink"=>new LexerConditions(array( 0,1,4,7,10,11,12,13,18,21,23,25,30,31,32,33,36,39,42,45,48,51,54,57,60,63,66,67,68,70,73,75,77,78,79,80,81,82,83,84,85,86), true),
					"wikiLinkType"=>new LexerConditions(array( 0,1,4,7,10,11,12,13,18,21,23,25,30,31,32,33,36,39,42,45,48,51,54,57,60,63,66,70,71,72,73,75,77,78,79,80,81,82,83,84,85,86), true),
					"wikiUnlink"=>new LexerConditions(array( 0,1,4,7,10,11,12,13,18,21,23,25,30,31,32,33,36,39,42,45,48,51,54,57,60,63,66,69,70,73,74,75,77,78,79,80,81,82,83,84,85,86), true),
					"line"=>new LexerConditions(array( 0,1,4,7,10,11,12,13,18,21,23,25,30,31,32,33,36,39,42,45,48,51,54,57,60,63,66,70,73,75,77,78,79,80,81,82,83,84,85,86), true),
					"preBlock"=>new LexerConditions(array( 0,1,4,7,10,11,12,13,15,18,21,23,25,30,31,32,33,36,39,42,45,48,51,54,57,60,63,66,70,73,75,77,78,79,80,81,82,83,84,85,86), true),
					"block"=>new LexerConditions(array( 0,1,4,7,10,11,12,13,14,16,17,18,21,23,25,30,31,32,33,36,39,42,45,48,51,54,57,60,63,66,70,73,75,77,78,79,80,81,82,83,84,85,86), true),
					"bold"=>new LexerConditions(array( 0,1,4,7,10,11,12,13,18,21,23,25,30,31,32,33,34,35,36,39,42,45,48,51,54,57,60,63,66,70,73,75,77,78,79,80,81,82,83,84,85,86), true),
					"box"=>new LexerConditions(array( 0,1,4,7,10,11,12,13,18,21,23,25,30,31,32,33,36,37,38,39,42,45,48,51,54,57,60,63,66,70,73,75,77,78,79,80,81,82,83,84,85,86), true),
					"center"=>new LexerConditions(array( 0,1,4,7,10,11,12,13,18,21,23,25,30,31,32,33,36,39,40,41,42,45,48,51,54,57,60,63,66,70,73,75,77,78,79,80,81,82,83,84,85,86), true),
					"code"=>new LexerConditions(array( 0,1,4,7,10,11,12,13,18,21,23,25,30,31,32,33,36,39,42,43,44,45,48,51,54,57,60,63,66,70,73,75,77,78,79,80,81,82,83,84,85,86), true),
					"color"=>new LexerConditions(array( 0,1,4,7,10,11,12,13,18,21,23,25,30,31,32,33,36,39,42,45,46,47,48,51,54,57,60,63,66,70,73,75,77,78,79,80,81,82,83,84,85,86), true),
					"italic"=>new LexerConditions(array( 0,1,4,7,10,11,12,13,18,21,23,25,30,31,32,33,36,39,42,45,48,49,50,51,54,57,60,63,66,70,73,75,77,78,79,80,81,82,83,84,85,86), true),
					"link"=>new LexerConditions(array( 0,1,4,7,10,11,12,13,18,21,23,25,30,31,32,33,36,39,42,45,48,51,52,53,54,57,60,63,66,70,73,75,77,78,79,80,81,82,83,84,85,86), true),
					"skip"=>new LexerConditions(array( 0,1,4,7,10,11,12,13,18,21,23,25,30,31,32,33,36,39,42,45,48,51,54,57,60,63,66,70,73,75,76,77,78,79,80,81,82,83,84,85,86), true),
					"strike"=>new LexerConditions(array( 0,1,4,7,10,11,12,13,18,21,23,25,30,31,32,33,36,39,42,45,48,51,54,55,56,57,60,63,66,70,73,75,77,78,79,80,81,82,83,84,85,86), true),
					"table"=>new LexerConditions(array( 0,1,4,7,10,11,12,13,18,21,23,25,30,31,32,33,36,39,42,45,48,51,54,57,58,59,60,63,66,70,73,75,77,78,79,80,81,82,83,84,85,86), true),
					"titleBar"=>new LexerConditions(array( 0,1,4,7,10,11,12,13,18,21,23,25,30,31,32,33,36,39,42,45,48,51,54,57,60,61,62,63,66,70,73,75,77,78,79,80,81,82,83,84,85,86), true),
					"underscore"=>new LexerConditions(array( 0,1,4,7,10,11,12,13,18,21,23,25,30,31,32,33,36,39,42,45,48,51,54,57,60,63,64,65,66,70,73,75,77,78,79,80,81,82,83,84,85,86), true),
					"pluginStart"=>new LexerConditions(array( 0,1,4,7,10,11,12,13,18,21,23,24,25,30,31,32,33,36,39,42,45,48,51,54,57,60,63,66,70,73,75,77,78,79,80,81,82,83,84,85,86), true),
					"plugin"=>new LexerConditions(array( 0,1,4,7,10,11,12,13,18,21,23,25,26,27,30,31,32,33,36,39,42,45,48,51,54,57,60,63,66,70,73,75,77,78,79,80,81,82,83,84,85,86), true),
					"inlinePlugin"=>new LexerConditions(array( 0,1,4,7,10,11,12,13,18,21,22,23,25,30,31,32,33,36,39,42,45,48,51,54,57,60,63,66,70,73,75,77,78,79,80,81,82,83,84,85,86), true),
					"BOF"=>new LexerConditions(array( 0,1,4,7,10,11,12,13,18,19,20,21,23,25,30,31,32,33,36,39,42,45,48,51,54,57,60,63,66,70,73,75,77,78,79,80,81,82,83,84,85,86), true),
					"np"=>new LexerConditions(array( 0,1,2,3,4,7,10,11,12,13,18,21,23,25,30,31,32,33,36,39,42,45,48,51,54,57,60,63,66,70,73,75,77,78,79,80,81,82,83,84,85,86), true),
					"pp"=>new LexerConditions(array( 0,1,4,5,6,7,10,11,12,13,18,21,23,25,30,31,32,33,36,39,42,45,48,51,54,57,60,63,66,70,73,75,77,78,79,80,81,82,83,84,85,86), true),
					"tc"=>new LexerConditions(array( 0,1,4,7,8,9,10,11,12,13,18,21,23,25,30,31,32,33,36,39,42,45,48,51,54,57,60,63,66,70,73,75,77,78,79,80,81,82,83,84,85,86), true),
					"INITIAL"=>new LexerConditions(array( 0,1,4,7,10,11,12,13,18,21,23,25,30,31,32,33,36,39,42,45,48,51,54,57,60,63,66,70,73,75,77,78,79,80,81,82,83,84,85,86), true)
				);


    }

    function parserPerformAction(&$thisS, &$yy, $yystate, &$s, $o)
    {
        


switch ($yystate) {
case 1:
 	    return $s[$o];
 	
break;
case 2:
    	
		    return $s[$o-1];
        
	
break;
case 3:
        
            return $s[$o];
        
    
break;
case 5:
		
			$s[$o-1]->addContent($s[$o]);
        
	
break;
case 6:
	    
	        $s[$o]->setType('Content', $this);
	    
	
break;
case 9:
        
			$type =& $s[$o-2];
			$s[$o-1]->setParent($type);
            $type->setType('Comment', $this);
        
    
break;
case 12:
        
            $type =& $s[$o-2];
            $s[$o-1]->setParent($type);
            $type->setType('NoParse', $this);
        
    
break;
case 15:
        
            $type =& $s[$o-2];
            $s[$o-1]->setParent($type);
            $type->setType('PreFormattedText', $this);
        
    
break;
case 16:
         
            $type =& $s[$o];
            $type->setOption('Double', true);
            $type->setType('DynamicVariable', $this);
        
    
break;
case 17:
        
            $s[$o]->setType('DynamicVariable', $this);
        
    
break;
case 18:
        
            $s[$o]->setType('Variable', $this);
        
    
break;
case 19:
        
            $s[$o]->setType('Tag', $this);
        
    
break;
case 20:
		
		    $s[$o]->setType('Row', $this);
        
	
break;
case 21:
        
            $s[$o]->setType('Content');
        
    
break;
case 22:
        
            $s[$o-1]->setType('Content', $this);
            $s[$o-1]->addContent($s[$o]);
        
    
break;
case 24:
		
		    $type =& $s[$o-2];
            $s[$o-1]->setParent($type);
            $type->setType('Bold', $this);
        
	
break;
case 26:
        
            $s[$o-1]->setType('Content', $this);
            $s[$o-1]->addContent($s[$o]);
        
    
break;
case 28:
		
		    $type =& $s[$o-2];
            $s[$o-1]->setParent($type);
            $type->setType('Box', $this);
        
	
break;
case 30:
        
            $s[$o-1]->setType('Content', $this);
            $s[$o-1]->addContent($s[$o]);
        
    
break;
case 32:
		
		    $type =& $s[$o-2];
            $s[$o-1]->setParent($type);
            $type->setType('Center', $this);
        
	
break;
case 34:
        
            $s[$o-1]->setType('Content', $this);
            $s[$o-1]->addContent($s[$o]);
        
    
break;
case 36:
		
		    $type =& $s[$o-2];
            $s[$o-1]->setParent($type);
            $type->setType('Code', $this);
        
	
break;
case 38:
        
            $s[$o-1]->setType('Content', $this);
            $s[$o-1]->addContent($s[$o]);
        
    
break;
case 40:
		
		    $type =& $s[$o-2];
            $s[$o-1]->setParent($type);
            $type->setType('Color', $this);
        
	
break;
case 42:
        
            $s[$o-1]->setType('Content', $this);
            $s[$o-1]->addContent($s[$o]);
        
    
break;
case 44:
		
		    $type =& $s[$o-2];
            $s[$o-1]->setParent($type);
            $type->setType('Italic', $this);
        
	
break;
case 45:
        
            $s[$o]->setType('Content', $this);
        
    
break;
case 46:
        
            $s[$o-1]->setType('Content', $this);
            $s[$o-1]->addContent($s[$o]);
        
    
break;
case 48:
		
		    //type already set

		    $type =& $s[$o-2];
            $s[$o-1]->setParent($type);
            $type->setType('Link', $this);
        
	
break;
case 50:
        
            $s[$o-1]->setType('Content', $this);
            $s[$o-1]->addContent($s[$o]);
        
    
break;
case 52:
		
		    $type =& $s[$o-2];
            $s[$o-1]->setParent($type);
            $type->setType('Strike', $this);
        
	
break;
case 53:
        
            $s[$o]->setType('DoubleDash', $this);
        
    
break;
case 55:
        
            $s[$o-1]->setType('Content', $this);
            $s[$o-1]->addContent($s[$o]);
        
    
break;
case 57:
		
		    $type =& $s[$o-2];
            $s[$o-1]->setParent($type);
            $type->setType('Table', $this);
        
	
break;
case 59:
        
            $s[$o-1]->setType('Content', $this);
            $s[$o-1]->addContent($s[$o]);
        
    
break;
case 61:
		
			$type =& $s[$o-2];
            $s[$o-1]->setParent($type);
            $type->setType('TitleBar', $this);
        
	
break;
case 63:
        
            $s[$o-1]->setType('Content', $this);
            $s[$o-1]->addContent($s[$o]);
        
    
break;
case 65:
		
		    $type =& $s[$o-2];
            $s[$o-1]->setParent($type);
            $type->setType('Underscore', $this);
        
	
break;
case 67:
        
            $s[$o-1]->setType('Content', $this);
            $s[$o-1]->addContent($s[$o]);
        
    
break;
case 69:
        
            //Type already set
            $type =& $s[$o-2];
            $s[$o-1]->setParent($type);
            $type->setType('FLP', $this);
        
    
break;
case 71:
        
            $s[$o-1]->setType('Content', $this);
            $s[$o-1]->addContent($s[$o]);
        
    
break;
case 73:
		
			//Type already set
			$type =& $s[$o-2];
			$s[$o-1]->setParent($type);
			$type->setType('WikiLink', $this);
        
	
break;
case 75:
        
            $s[$o-1]->setType('Content', $this);
            $s[$o-1]->addContent($s[$o]);
        
    
break;
case 77:
        
            //Type already set
            $type =& $s[$o-2];
            $s[$o-1]->setParent($type);
            $type->setType('WikiLinkType', $this);
        
    
break;
case 79:
        
            $s[$o-1]->setType('Content', $this);
            $s[$o-1]->addContent($s[$o]);
        
    
break;
case 81:
        
            //Type already set
            $type =& $s[$o-2];
            $s[$o-1]->setParent($type);
            $type->setType('WikiUnlink', $this);
        
    
break;
case 82:
        
            $type =& $s[$o];
            $type->addArgument($s[$o]);
            $type->setType('WordLink', $this);

        
    
break;
case 84:
        
            $s[$o-1]->setType('Content', $this);
            $s[$o-1]->addContent($s[$o]);
        
    
break;
case 85:
 		
 		    $type =& $s[$o-1];
            $type->setOption('NoBody', true);
            $type->setOption('Inline', true);
            $type->addArgument($s[$o]);
            $type->setType('InlinePlugin', $this);
        
 	
break;
case 86:
 	    
 		    $type =& $s[$o-3];
 		    $type->addArgument($s[$o-2]);
 		    $s[$o-1]->setParent($type);
 		    $type->stateEnd = $s[$o];
 		    $type->setType('Plugin', $this);
        
 	
break;
case 87:
  	    
            $type =& $s[$o-2];
            $type->addArgument($s[$o-1]);
            $type->addArgument($s[$o]);
            $type->stateEnd = $s[$o];
            $type->setType('Plugin', $this);
        
     
break;
case 90:
        
            $s[$o]->setType('Line', $this);
        
    
break;
case 91:
        
            $s[$o]->setType('ForcedLine', $this);
        
    
break;
case 92:
        
            $s[$o]->setType('Char', $this);
        
    
break;
case 93:
        
            $s[$o]->setType('SpecialChar', $this);
        
    
break;
case 94:
        
            $s[$o]->setType('WhiteSpace', $this);
        
    
break;
case 95:
        
	        $s[$o-2]->setOption('Empty', 'true');
	        $s[$o-2]->setType('Block', $this);
	    
	
break;
case 96:
        
			$type = $s[$o-3];
			$type->addArgument($s[$o-2]);
			$type->addArgument($s[$o-1]);
			$s[$o-1]->setParent($type);
			$type->setType('Block', $this);
		
    
break;
case 97:
        
            $type = $s[$o-2];
            $type->addArgument($s[$o-1]);
            $type->addArgument($s[$o]);
            $s[$o]->setParent($type);
            $type->setType('Block', $this);
        
    
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
        


switch($avoidingNameCollisions) {
case 0:
break;
case 1:
    return 17;

break;
case 2:
    
        $this->conditionStackCount = 0;
        $this->conditionStack = array();
    

    return 5;

break;
case 3:
    
        if ($this->npStack != true) return 7;
        $this->popState();
        $this->npStack = false;
    

    return 'NO_PARSE_END';

break;
case 4:
    
        if ($this->isContent()) return 7;
        $this->begin('np');
        $this->npStack = true;
    

    return 'NO_PARSE_START';

break;
case 5:
    
        $this->conditionStackCount = 0;
        $this->conditionStack = array();
    

    return 5;

break;
case 6:
    
        if ($this->ppStack != true) return 7;
        $this->popState();
        $this->ppStack = false;
    

    return 'PREFORMATTED_TEXT_END';

break;
case 7:
    
        if ($this->isContent()) return 7;
        $this->begin('pp');
        $this->ppStack = true;
    

    return 'PREFORMATTED_TEXT_START';

break;
case 8:
    
        $this->conditionStackCount = 0;
        $this->conditionStack = array();
    

    return 5;

break;
case 9:
    
        if ($this->tcStack != true) return 7;
        $this->popState();
        $this->tcStack = false;
    

    return 'COMMENT_END';

break;
case 10:
    
        if ($this->isContent()) return 7;
        $this->begin('tc');
        $this->tcStack = true;
    

    return 'COMMENT_START';

break;
case 11:
    
        if ($this->isContent()) return 7;
    

    return 'DOUBLE_DYNAMIC_VAR';

break;
case 12:
    
        if ($this->isContent()) return 7;
    

    return 'SINGLE_DYNAMIC_VAR';

break;
case 13:
    
        if ($this->isContent(array('linkStack'))) return 7;
    

    return 'VAR';

break;
case 14:
    
        $this->conditionStackCount = 0;
        $this->conditionStack = array();
    

    return 5;

break;
case 15:
	
		$this->popState();
		$this->begin('block');
		return 62;
	

break;
case 16:
    
        //returns block end
        if ($this->isContent()) return 7;
        $this->popState();
        return 'BLOCK_END';
    

break;
case 17:
    
        $this->popState();
        return 5;
    

break;
case 18:
    
        if ($this->isContent()) return 7;
        $this->begin('preBlock');
        return 'PRE_BLOCK_START';
    

break;
case 19:
    
        $this->popState();
    

break;
case 20:
    
        $this->popState();
        if ($this->isContent()) return 7;
        $this->begin('preBlock');
    

    return 'PRE_BLOCK_START';

break;
case 21:
    
        if ($this->isContent() || !empty($this->tableStack)) return 7;
    

    return 'LINE_END';

break;
case 22:
    
        $this->popState();
        return 52;
    

break;
case 23:
    
        $this->begin('inlinePlugin');
    

    return 51;

break;
case 24:
    
        $this->popState();
        $this->begin('plugin');
        return 54;
    

break;
case 25:
    
        $this->begin('pluginStart');
        $this->stackPlugin($this->yy->text);
        return 53;
    

break;
case 26:
    
        $this->conditionStackCount = 0;
        $this->conditionStack = array();
    

    return 5;

break;
case 27:
    
        $name = end($this->pluginStack);
        if (substr($this->yy->text, 1, -1) == $name && $this->pluginStackCount > 0) {
            $this->popState();
            $this->pluginStackCount--;
            array_pop($this->pluginStack);
            return 55;
        }
    

    return 'CONTENT';

break;
case 28:
    
        $this->conditionStackCount = 0;
        $this->conditionStack = array();
    

    return 5;

break;
case 29:
	
		$this->popState();
	

	return 43;

break;
case 30:
	
		if ($this->isContent()) return 7;
		$this->begin('flp');
	

	return 'FLP_START';

break;
case 31:
    
        if ($this->isContent()) return 7;
    

    return 'HORIZONTAL_BAR';

break;
case 32:
    
        if ($this->isContent()) return 7;
    

    return 'FORCED_LINE_END';

break;
case 33:
     return 35;
 
break;
case 34:
    
        $this->conditionStackCount = 0;
        $this->conditionStack = array();
    

    return 5;

break;
case 35:
    
        if ($this->isContent()) return 7;
        $this->popState();
    

    return 'BOLD_END';

break;
case 36:
    
        if ($this->isContent()) return 7;
        $this->begin('bold');
    

    return 'BOLD_START';

break;
case 37:
    
        $this->conditionStackCount = 0;
        $this->conditionStack = array();
    

    return 5;

break;
case 38:
    
        if ($this->isContent()) return 7;
        $this->popState();
    

    return 'BOX_END';

break;
case 39:
    
        if ($this->isContent()) return 7;
        $this->begin('box');
    

    return 'BOX_START';

break;
case 40:
    
        $this->conditionStackCount = 0;
        $this->conditionStack = array();
    

    return 5;

break;
case 41:
    
        if ($this->isContent()) return 7;
        $this->popState();
    


    return 'CENTER_END';

break;
case 42:
    
        if ($this->isContent()) return 7;
        $this->begin('center');
    

    return 'CENTER_START';

break;
case 43:
    
        $this->conditionStackCount = 0;
        $this->conditionStack = array();
    

    return 5;

break;
case 44:
    
        if ($this->isContent()) return 7;
        $this->popState();
    

    return 'CODE_END';

break;
case 45:
    
        if ($this->isContent()) return 7;
        $this->begin('code');
    

    return 'CODE_START';

break;
case 46:
    
        $this->conditionStackCount = 0;
        $this->conditionStack = array();
    

    return 5;

break;
case 47:
    
        if ($this->isContent()) return 7;
        $this->popState();
    

    return 'COLOR_END';

break;
case 48:
    
        if ($this->isContent()) return 7;
        $this->begin('color');
    

    return 'COLOR_START';

break;
case 49:
    
        $this->conditionStackCount = 0;
        $this->conditionStack = array();
    

    return 5;

break;
case 50:
    
        if ($this->isContent()) return 7;
        $this->popState();
    

    return 'ITALIC_END';

break;
case 51:
    
        if ($this->isContent()) return 7;
        $this->begin('italic');
    

    return 'ITALIC_START';

break;
case 52:
    
        $this->conditionStackCount = 0;
        $this->conditionStack = array();
    

    return 5;

break;
case 53:
    
        if ($this->isContent(array('linkStack'))) return 7;
        $this->linkStack = false;
        $this->popState();
    

    return 'LINK_END';

break;
case 54:
    
        if ($this->isContent()) return 7;
        $this->linkStack = true;
        $this->begin('link');
    

    return 'LINK_START';

break;
case 55:
    
        $this->conditionStackCount = 0;
        $this->conditionStack = array();
    

    return 5;

break;
case 56:
    
        if ($this->isContent()) return 7;
        $this->popState();
    

    return 'STRIKE_END';

break;
case 57:
    
        if ($this->isContent()) return 7;
        $this->begin('strike');
    

    return 'STRIKE_START';

break;
case 58:
    
        $this->conditionStackCount = 0;
        $this->conditionStack = array();
    

    return 5;

break;
case 59:
   
        if ($this->isContent()) return 7;
        $this->popState();
        array_pop($this->tableStack);
    

    return 'TABLE_END';

break;
case 60:
    
        if ($this->isContent()) return 7;
        $this->begin('table');
        $this->tableStack[] = true;
    

    return 'TABLE_START';

break;
case 61:
    
        $this->conditionStackCount = 0;
        $this->conditionStack = array();
    

    return 5;

break;
case 62:
    
        if ($this->isContent()) return 7;
        $this->popState();
    

    return 'TITLE_BAR_END';

break;
case 63:
    
        if ($this->isContent()) return 7;
        $this->begin('titleBar');
    

    return 'TITLE_BAR_START';

break;
case 64:
    
        $this->conditionStackCount = 0;
        $this->conditionStack = array();
    

    return 5;

break;
case 65:
    
        if ($this->isContent()) return 7;
        $this->popState();
    

    return 'UNDERSCORE_END';

break;
case 66:
    
        if ($this->isContent()) return 7;
        $this->begin('underscore');
    

    return 'UNDERSCORE_START';

break;
case 67:
    
        $this->conditionStackCount = 0;
        $this->conditionStack = array();
    

    return 5;

break;
case 68:
    
        if ($this->isContent(array('linkStack'))) return 7;
        $this->linkStack = false;
        $this->popState();
    

    return 'WIKI_LINK_END';

break;
case 69:
    
        if ($this->isContent(array('linkStack'))) return 7;
        $this->linkStack = false;
        $this->popState();
    

    return 'WIKI_UNLINK_END';

break;
case 70:
    
        if ($this->isContent()) return 7;
        $this->linkStack = true;
        $this->begin('wikiLink');
    

    return 'WIKI_LINK_START';

break;
case 71:
    
        $this->conditionStackCount = 0;
        $this->conditionStack = array();
    

    return 5;

break;
case 72:
    
        if ($this->isContent(array('linkStack'))) return 7;
        $this->linkStack = false;
        $this->popState();
    

    return 'WIKI_LINK_TYPE_END';

break;
case 73:
    
        if ($this->isContent()) return 7;
        $this->linkStack = true;
        $this->begin('wikiLinkType');
        $this->yy->text = substr($this->yy->text, 1, -1);
    

    return 'WIKI_LINK_TYPE_START';

break;
case 74:
    
        $this->conditionStackCount = 0;
        $this->conditionStack = array();
    

    return 5;

break;
case 75:
    
        if ($this->isContent()) return 7;
        $this->linkStack = true;
        $this->begin('wikiUnlink');
    

    return 'WIKI_UNLINK_START';

break;
case 76:
	
		$this->popState();
		return 7;
	

break;
case 77:
    
        if ($this->isContent()) return 7;

        $isLink = false;
        $this->events->triggerExpressionWordLinkExists($this->yy->text, $isLink);

        if ($isLink) {
            return 'WORD_LINK';
        } else {
            $this->unput($this->yy->text);
            $this->begin('skip');
        }
    

break;
case 78:
    return 58;

break;
case 79:
	
	
		if ($this->isContent()) return 7;
		return 'SPECIAL_CHAR';
	

break;
case 80:
    
        //html tag
        return 17;
    

break;
case 81:
break;
case 82:return 7;
break;
case 83:return 7;
break;
case 84:
	
		if ($this->isContent()) return 7;
		return 'WHITE_SPACE';
	

break;
case 85:return 7;
break;
case 86:return 5;
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