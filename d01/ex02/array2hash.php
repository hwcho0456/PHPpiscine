<?php
function array2hash($array)
{
	$newarray = array();
	foreach($array as $arr)
		$newarray[$arr[1]] = $arr[0];
	return $newarray;
}
?>
