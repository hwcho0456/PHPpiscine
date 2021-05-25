<?php
class TemplateEngine {
	public function createFile($fileName, $templateName, $parameters) 
	{
		$file = fopen($fileName, "w") or die("can't open file");
		$tpl = file_get_contents("$templateName");
		foreach ($parameters as $key => $value)
			$tpl = str_replace("{".$key."}", $value, $tpl);
		fwrite($file, $tpl);
        fclose($file);
	}
}
?>
