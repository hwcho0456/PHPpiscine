<?php
define('TAGS', 
		["meta", "img", "hr", "br", "html", 
		"head", "body", "title", "h1", "h2", "h3", 
		"h4", "h5", "h6", "p", "span", "div",
		"table", "tr", "th", "td", "ul", "ol", "li"]);
define('NOCLOSING', 
		["meta", "img", "hr", "br"]);
class Elem {
	private $opentag;
	private $content;
	private $subElem = array();
	private $closetag;
	public function __construct($element, $content = NULL, $attributes = NULL)
	{
		try {
			if (!in_array($element, TAGS))
				throw new MyException($element);
			else {
				$this->opentag = "<$element";
				if (!in_array($element, NOCLOSING))
				{
					$this->closetag = "</$element>";
					if ($content)
					{
						$this->content = $content;
						$this->content = str_replace("<", "&lt;", $this->content);
						$this->content = str_replace(">", "&gt;", $this->content);
					}
				}				
				if ($attributes) {
					foreach ($attributes as $attribute => $value)
						$this->opentag .= " ".$attribute."="."\"$value\"";
				}
				$this->opentag .= ">";
			}
		}
		catch(Exception $e) {
//			$errormsg = $e->getMessage();
			return ;
		}
	}
	public function pushElement(Elem $text)
	{		
		if (!$text->opentag || !$this->closetag)
			return;
		array_push($this->subElem, $text);
	}
	public function getHTML()
	{
		if (!$this->subElem)
			return $this->opentag.$this->content.$this->closetag;
		$HTML = $this->opentag;
		if ($this->content)
			$HTML .= "\n\t".$this->content;
		foreach ($this->subElem as $elem)
		{
			$subHTML = "\n".$elem->getHTML();
			$subHTML = str_replace("\n", "\n\t", $subHTML);
			$HTML .= $subHTML;
		}
		$HTML .= "\n".$this->closetag;
		return $HTML;
	}
}
?>
