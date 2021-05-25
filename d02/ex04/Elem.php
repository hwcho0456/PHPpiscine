<?php
class Elem extends MyException{
	private $allowed_tag = 
		array("meta", "img", "hr", "br", "html", 
		"head", "body", "title", "h1", "h2", "h3", 
		"h4", "h5", "h6", "p", "span", "div",
		"table", "tr", "th", "td", "ul", "ol", "li");
	private $start;
	private $content;
	private $end;
	public function __construct(...$element)
	{
		if (func_num_args() == 0)
			error("no arguments");	
		if (func_num_args() >= 4)
			error("too many arguments");		
		if (!in_array($element[0], $this->allowed_tag))
			error("invalid tag");
		$this->start = "<$element[0]";
		$this->end = "</$element[0]>";
		if (func_num_args() >= 2)
			$this->content = $element[1];
		if (func_num_args() == 3) {
			foreach ($element[2] as $key => $value)
				$this->start .= " ".$key."="."\"$value\"";
		}
		$this->start .= ">";
	}	
	public function pushElement(Elem $text)
	{
		$str = $text->getHTML();
		$str = str_replace("\n", "\n\t", $str);
		if (!$this->content)
			$this->content = "\n\t".$str."\n";
		else
			$this->content .= "\t".$str."\n";
	}
	public function getHTML()
	{
		return $this->start.$this->content.$this->end;
	}	
}
?>
