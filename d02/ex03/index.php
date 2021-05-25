<?php
include("TemplateEngine.php");
include("Elem.php");

$elem = new Elem('html');
$body = new Elem('body');
$body->pushElement(new Elem('p', 'Lorem ipsum'));
$body->pushElement(new Elem('p', 'Lorem ipsum'));
$body->pushElement(new Elem('p', 'Lorem ipsum'));
$body->pushElement(new Elem('p', 'Lorem ipsum'));
$body->pushElement(new Elem('p', 'Lorem ipsum'));
$body->pushElement(new Elem('p', 'Lorem ipsum'));
$elem->pushElement($body);

$tpl = new TemplateEngine($elem);
$tpl->createFile("result.html");
?>
