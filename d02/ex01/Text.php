<?php
class Text {
	public function __construct ($strs) {
		$this->text = $strs;
	}
	public function addStr($str)
	{
		array_push($this->text, $str);
	}
	public function render()
	{
		$res = "<!DOCTYPE html>";
		$res .= "\n<html>";
		$res .= "\n\t<head>\n\t\t<title>title</title>\n\t</head>";
		$res .= "\n\t<body>";
		foreach ($this->text as $ele)
		{
			$res .= "\n\t\t";
			$res .= "<p>".$ele."</p>";
		}
		$res .= "\n\t<body>";
		$res .= "\n</html>";
		return $res;
	}
}
?>
