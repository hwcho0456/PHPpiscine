<?php
class Tea extends HotBeverage {
	private $description;
	private $comment;

	public function __construct($name, $price, $resistence, $description, $comment)
	{
		$this->setName($name);
		$this->setPrice($price);
		$this->setResistence($resistence);
		$this->description = $description;
		$this->comment = $comment;
	}
	public function getDescription()
	{
		return $this->description;
	}	
	public function getComment()
	{
		return $this->comment;
	}
}
?>
