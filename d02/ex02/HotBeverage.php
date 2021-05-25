<?php
class HotBeverage {
	private $name;
	private $price;
	private $resistence;

	public function getName()
	{
		return $this->name;
	}	
	public function getPrice()
	{
		return $this->price;
	}	
	public function getResistence()
	{
		return $this->resistence;
	}	
	public function setName($name)
	{
		$this->name = $name;
	}	
	public function setPrice($price)
	{
		$this->price = $price;
	}	
	public function setResistence($resistence)
	{
		$this->resistence = $resistence;
	}
}
?>
