<?php
include("TemplateEngine.php");
include("Elem.php");

$elem = new Elem('html');
$body = new Elem('body');
$body->pushElement(new Elem('p', 'Lorem ipsum'));
$elem->pushElement($body);
echo $elem->getHTML();

$tpl = new TemplateEngine($elem);
$tpl->createFile("result.html");
?>
