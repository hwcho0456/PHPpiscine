<?php
function array2hash_sorted($array)
{	
	$newarray = array();
	foreach($array as $arr)
		$newarray[$arr[0]] = $arr[1];
	krsort($newarray);
	return $newarray;
}
?>
