<?php
include("MyException.php");
include("TemplateEngine.php");
include("Elem.php");
$elem = new Elem('html');
$body = new Elem('body');
$body->pushElement(new Elem('p', 'Lorem ipsum', ['class' => 'text-muted']));
$elem->pushElement($body);
echo $elem->getHTML();
$tpl = new TemplateEngine($elem);
$elem = new Elem('undefined'); // Throws MyException
$tpl->createFile("result.html");
?>
