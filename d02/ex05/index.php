<?php
include("MyException.php");
include("TemplateEngine.php");
include("Elem.php");

$elem = new Elem('html');
$body = new Elem('body');
$body->pushElement(new Elem('p', 'Lorem ipsum', ['class' => 'text-muted']));
$elem->pushElement($body);

$tpl = new TemplateEngine($elem);
$tpl->createFile("result.html");
?>
