<?php
class TemplateEngine {
	public function createFile($fileName, Text $text) 
	{
		$file = fopen($fileName, "w") or die("cannot open the file");
		$str = $text->render();
		fwrite($file, $str);
        fclose($file);
	}
}
?>
