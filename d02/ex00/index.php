<?php
include("TemplateEngine.php");
$tpl = new TemplateEngine;
$fileName = "test.html";
$templateName = "book_description.html";
$parameters = array(
        "nom" => "testTITLE",
        "auteur" => "testAUTEUR",
        "description" => "testDESC",
        "prix" => "testPRIX");
$tpl->createFile($fileName, $templateName, $parameters);
?>
