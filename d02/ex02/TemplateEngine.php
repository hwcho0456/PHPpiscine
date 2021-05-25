<?php
class TemplateEngine {
	public function createFile(HotBeverage $text) 
	{
		$tpl = file_get_contents("template.html");
		$file = fopen("result.html", "w") or die("can't open file");
		$ref = new ReflectionClass(get_class($text));
		$object = $ref->newInstance(
			$text->getName(),
			$text->getPrice(),
			$text->getResistence(),
			$text->getDescription(),
			$text->getComment()
		);
		$info = array(
			'nom' => $object->getName(),
			'prix' => $object->getPrice(),
			'resistence' => $object->getResistence(),
			'description' => $object->getDescription(),
			'commentaire' => $object->getComment(),
		);
		foreach ($info as $key => $value)
			$tpl = str_replace("{".$key."}", $value, $tpl);	
		fwrite($file, $tpl);
		fclose($file);
	}
}
?>
