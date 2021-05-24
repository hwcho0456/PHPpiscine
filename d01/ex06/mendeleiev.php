<?php
$file = fopen("mendeleiev.html", "w");

$style = "<style>
*{margin:0;padding:0;box-sizing:border-box;}
body{margin:0 auto;width:90%;}
li{list-style:none;font-size:14px;}
table{margin:0 auto;border-collapse:collapse;width:100%;}
td{width:calc(100%/18);border:1px solid black;padding:10px;}
h1{text-align: left;margin:40px auto;}
h4{font-size:24px;}
.dummy{border:0;}
</style>";
$data .= $style;
$data .= "<h1>Periodic Table</h1>";
$data .= "<table>";
$elements = explode("\n", file_get_contents('ex06.txt'));
$arrayElement = array();
foreach ($elements as $element)
{
	$infos = explode(", ",$element);
	$name = explode(" ", $infos[0])[0];
	$pos = explode(":", $infos[0])[1];
	$num = explode(":", $infos[1])[1];
	$code = explode(": ", $infos[2])[1];
	$weight = explode(":", $infos[3])[1];
	$electron = explode(":", $infos[4])[1];
	$elementUnit = array(
		'name' => $name,
		'pos' => $pos,
		'num' => $num,
		'code' => $code,
		'weight' => $weight,
		'electron' => $electron);
	if ($num)
		array_push($arrayElement, $elementUnit);
}
$position = 0;
$number = 1;
$find = 0;
while ($number <= 118)
{
	if ($position == 0)
		$data .= "<tr>";

	$find = 0;
	foreach ($arrayElement as $ele)
	{
		if ($ele['pos'] == $position and $ele['num'] == $number)
		{
			$data .= "<td>";
			$data .= "<h5>".$ele['num']."</h5>";
			$data .= "<h4>".$ele['code']."</h4>";
			$data .= "<ul>";
			//$data .= "<li>No ".$ele['num']."</li>";
			$data .= "<li>".$ele['name']."</li>";
			$data .= "<li>".$ele['weight']." </li>";
			$data .= "<li>".$ele['electron']."</li>";
			$data .= "</ul>";
			$find = 1;
			$position = $position + 1;
			$number = $number + 1;
			break;
		}
	}
	if ($find == 0)
	{	
		$data .= "<td class=\"dummy\">";
		$position += 1;
		if ($number == 57)
			$number = 72;
		if ($number == 89)
			$number = 104;
	}
	$data .= "</td>";
	if ($position == 18)
	{
		$position = 0;
		$data .= "</tr>";
	}
}
$data .= "</table>";
fwrite($file, $data);
fclose($file);
?>
