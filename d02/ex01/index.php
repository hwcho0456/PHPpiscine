<?php
include("TemplateEngine.php");
include("Text.php");
$fileName = "test.html";
$text = new Text(array("already1", "already2"));
$text->addStr("added");
$tpl = new TemplateEngine;
$tpl->createFile($fileName, $text);

?>
