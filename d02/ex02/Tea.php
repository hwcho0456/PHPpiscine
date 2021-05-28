<?php
class Tea extends HotBeverage {
	private $description;
	private $comment;

	public function __construct($name, $price, $resistence, $description, $comment)
	{
		$this->name = $name;
		$this->price = $price;
		$this->resistence =$resistence;
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
