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
	private $attributes;
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
					{
						$this->opentag .= " ".$attribute."="."\"$value\"";
						$this->attributes .= $attribute;
					}
				}
				$this->opentag .= ">";
			}
		}
		catch(Exception $e) {
			$errormsg = $e->getMessage();
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
	public function validPage()
	{
		if (strpos($this->opentag, "<html") !== false)
		{
			if ($this->content)
				return false;
			if (count($this->subElem) != 2)
				return false;
			if (strpos($this->subElem[0]->opentag, "<head") === false)
				return false;
			if (strpos($this->subElem[1]->opentag, "<body") === false)
				return false;
			return $this->subElem[0]->validPage() and $this->subElem[1]->validPage();
		}
		if (strpos($this->opentag, "<head") !== false)
		{
			if ($this->content)
				return false;
			if (count($this->subElem) != 2)
				return false;
			if (strpos($this->subElem[0]->opentag, "<meta") === false)
				return false;
			if (strpos($this->subElem[1]->opentag, "<title") === false)
				return false;
			if (strcmp($this->subElem[0]->attributes, "charset"))
				return false;
			return $this->subElem[0]->validPage() and $this->subElem[1]->validPage();
		}
		if (strpos($this->opentag, "<p") !== false)
		{
			if (!empty($this->subElem))
				return false;
			return true;
		}		
		if (strpos($this->opentag, "<table") !== false)
		{
			$valid = true;
			if ($this->content)
				return false;
			for ($i = 0; $i < count($this->subElem); $i++)
			{
				if (strpos($this->subElem[$i]->opentag, "<tr") === false)
					return false;
				$valid = $valid and $this->subElem[$i]->validPage();
			}	
			return $valid;
		}		
		if (strpos($this->opentag, "<tr") !== false)
		{
			$valid = true;
			if ($this->content)
				return false;
			for ($i = 0; $i < count($this->subElem); $i++)
			{
				if ((strpos($this->subElem[$i]->opentag, "<th") === false)
					and (strpos($this->subElem[$i]->opentag, "<td") === false))
					return false;
				$valid = $valid and $this->subElem[$i]->validPage();
			}	
			return $valid;
		}
		if ((strpos($this->opentag, "<ul") !== false) 
			or (strpos($this->opentag, "<ol") !== false))
		{
			$valid = true;
			if ($this->content)
				return false;
			for ($i = 0; $i < count($this->subElem); $i++)
			{
				if (strpos($this->subElem[$i]->opentag, "<li") === false)
					return false;
				$valid = $valid and $this->subElem[$i]->validPage();
			}	
			return $valid;
		}
		return true;
	}
}
?>
