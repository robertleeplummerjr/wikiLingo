<?php
namespace WikiLingo\Test\Expression;

use WikiLingo\Test\Base;

class BulletList3 extends Base
{
    public function __construct()
    {
        $this->source =
            "* foo{DIV()}\n" .
            " Continuation1\n" .
            "Continuation2{DIV}\n" .
            "* bar";

        $this->expected =
            "<ul>" .
                "<li><span class='whitespace'> </span>foo" .
                    "<div class='div' id='div1'>" .
                        "<br class='hidden'/>" .
                        "<span class='whitespace'> </span>Continuation1<br class='hidden'/>" .
                        "Continuation2" .
                    "</div>" .
                "</li>" .
                "<li><span class='whitespace'> </span>bar</li>" .
            "</ul>";
    }
}