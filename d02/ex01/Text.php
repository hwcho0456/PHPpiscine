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
		$res;
		foreach ($this->text as $ele)
			$res .= "<p>".$ele."</p>";
		return $res;
	}
}
?>
