<?php
class TemplateEngine {
	public function __construct(Elem $text)
	{
		$this->text = $text;
	}
	public function createFile($fileName) 
	{
		$file = fopen($fileName, "w") or die("Cannot open the file");
		$HTML = "<!DOCTYPE html>\n";
		$HTML .= $this->text->getHTML();
		fwrite($file, $HTML);		
		fclose($file);
	}
}
?>
