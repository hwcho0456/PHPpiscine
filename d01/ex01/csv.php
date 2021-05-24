<?php
$strs = explode(',', file_get_contents('ex01.txt'));
foreach($strs as $str)
	echo "$str"."\n";
?>
