<?php
class TemplateEngine {
	public function __construct(Elem $text)
	{
		$this->text = $text;
	}
	public function createFile($fileName) 
	{
		$file = fopen($fileName, "w") or die("Cannot open the file");
		fwrite($file, $this->text->getHTML());
		fclose($file);
	}
}
?>
