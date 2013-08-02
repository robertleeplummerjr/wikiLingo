<?php
namespace WikiLingo\Utilities;

class Html
{
    /**
     * syntax handler: generic html
     * <p>
     * Used in detecting if we need a break, and line number in some cases
     *
     * @access  public
     * @param   $text string parsed string found inside detected syntax
     * @return  string  $content desired output from syntax
     */
    public static function isTag($text)
    {
        $parts = preg_split("/[ >]/", substr($text, 1)); //<tag> || <tag name="">
        $name = $parts[0];
        switch ($name) {
            //start block level
            case 'h1':
            case 'h2':
            case 'h3':
            case 'h4':
            case 'h5':
            case 'h6':
            case 'pre':
            case 'ul':
            case 'li':
            case 'dl':
            case 'div':
            case 'table':
            case 'p':
                //$this->skipBr = true;
            case 'script':
                //$this->nonBreakingTagDepth++;
                //$this->line++;
                break;

            //end block level
            case '/h1':
            case '/h2':
            case '/h3':
            case '/h4':
            case '/h5':
            case '/h6':
            case '/pre':
            case '/ul':
            case '/li':
            case '/dl':
            case '/div':
            case '/table':
            case '/p':
                //$this->skipBr = true;
            case '/script':
                //$this->nonBreakingTagDepth--;
                //$this->nonBreakingTagDepth = max($this->nonBreakingTagDepth, 0);
                //$this->line++;
                break;

            //skip next block level
            case 'hr':
            case 'br':
                //$this->skipBr = true;
                break;
        }

        return $text;
    }

    public static function isHtmlTag(&$yytext)
    {
        $parts = explode(" ", substr($yytext, 1, -1));
        $parts = array_filter($parts, 'strlen');

        if ($parts[0]{0} == "/") {
            $parts[0] = substr($parts[0], 1);
        } else if ($parts[0]{strlen($parts[0]) - 1} == "/") {
            $parts[0] = substr($parts[0], 0, -1);
        }

        switch (strtolower($parts[0])) {
            case "!doctype":
            case "a":
            case "abbr":
            case "acronym":
            case "address":
            case "applet":
            case "area":
            case "article":
            case "aside":
            case "audio":
            case "b":
            case "base":
            case "basefront":
            case "bdi":
            case "bdo":
            case "big":
            case "blockquote":
            case "body":
            case "br":
            case "button":
            case "canvas":
            case "caption":
            case "center":
            case "cite":
            case "code":
            case "col":
            case "colgroup":
            case "command":
            case "datalist":
            case "dd":
            case "del":
            case "details":
            case "dfn":
            case "dir":
            case "div":
            case "dl":
            case "dt":
            case "em":
            case "embed":
            case "fieldset":
            case "figcaption":
            case "figure":
            case "font":
            case "footer":
            case "form":
            case "frameset":
            case "h1":
            case "h2":
            case "h3":
            case "h4":
            case "h5":
            case "h6":
            case "head":
            case "header":
            case "hgroup":
            case "hr":
            case "html":
            case "i":
            case "iframe":
            case "img":
            case "input":
            case "ins":
            case "kbd":
            case "keygen":
            case "label":
            case "legend":
            case "li":
            case "link":
            case "map":
            case "mark":
            case "menu":
            case "meta":
            case "meter":
            case "nav":
            case "noframes":
            case "noscript":
            case "object":
            case "ol":
            case "optgroup":
            case "option":
            case "output":
            case "p":
            case "param":
            case "pre":
            case "progress":
            case "q":
            case "q":
            case "rp":
            case "rt":
            case "ruby":
            case "s":
            case "samp":
            case "script":
            case "section":
            case "select":
            case "small":
            case "source":
            case "span":
            case "strike":
            case "strong":
            case "style":
            case "sub":
            case "summary":
            case "sup":
            case "table":
            case "tbody":
            case "td":
            case "textarea":
            case "tfoot":
            case "th":
            case "thead":
            case "time":
            case "title":
            case "tr":
            case "track":
            case "tt":
            case "u":
            case "ul":
            case "var":
            case "video":
            case "wbr":
                return true;
        }

        return false;
    }
}