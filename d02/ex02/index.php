<?php
include("HotBeverage.php");
include("Coffee.php");
include("Tea.php");
include("TemplateEngine.php");

$coffee = new Coffee("americano", "10", "5", "common", "good");
$tea = new Tea("americano", "10", "5", "common", "good");
$tpl = new TemplateEngine;
$tpl->createFile($coffee);
?>
