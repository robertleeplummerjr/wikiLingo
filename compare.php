<?php
require_once("index.php");

$original = "
{TABS()}
{TAB(title='test1 title')}Test1{TAB}
{TAB(title='test2 title')}Test2{TAB}
{TABS}

<div>Test</div>
";

$parser = new WikiLingo\Parser();
$wysiwygParser = new WikiLingoWYSIWYG\Parser();

$parser
	->addCssLocation("//code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css")
	->addScriptLocation("//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js")
	->addScriptLocation("ckeditor/ckeditor.js")
	->addScriptLocation("WikiLingoWYSIWYG/styles.js")
	->addScriptLocation("http://code.jquery.com/ui/1.10.3/jquery-ui.js")
	->addScript("
        CKEDITOR.config.enterMode = CKEDITOR.ENTER_BR;
        CKEDITOR.config.allowedContent =
            'h1[*];' +
            'h2[*];' +
            'h3[*];' +
            'h4[*];' +
            'h5[*];' +
            'h6[*];' +
            'ul[*];' +
            'ol[*];' +
            'li[*];' +
            'p blockquote em;' +
            'img[*];' +
            'embed[*];' +
            'div[*];' +
            'span[*];' +
            'strong[*];' +
            'br[*];' +
            'a[*];' +
            'table tr th td caption;' +
            'del ins';")
	->addScript("
        $(function() {
            $('#wysiwygToSource').click(function() {
                var data = CKEDITOR.instances.wysiwyg.getData();
                $('#dtsOutput').hide();
                $.post('dts.php', {data: data}, function(convert) {
                    $('#dtsOutput pre').html(convert);
                    $('#dtsOutput').show();
                });
            });
        });
    ");

$output = $parser->parse($original);
$outputWYSIWYG = $wysiwygParser->parse($original);

$css = $parser->renderCss();
$script = $parser->renderScript();
?><!DOCTYPE html>
<html>
<head>
<?php echo $css . $script; ?>
</head>
<body>
<h2>WikiLingo</h2>
<pre><?php echo $original;?></pre><br />

<h2>WikiLingo to Standard Html Output</h2>
<div><?php echo $output;?></div>

<h2>WikiLingo to WYSIWYG Html Output</h2>
<div contenteditable="true" id="wysiwyg"><?php echo $outputWYSIWYG;?></div>
<input type="button" value="To Source" id="wysiwygToSource"/>
<div id="dtsOutput" style="display: none;">
    <h2>WikiLingo to WYSIWYG Html Output and back to WikiLingo Source</h2>
    <pre></pre>
</div>
</body>
</html>