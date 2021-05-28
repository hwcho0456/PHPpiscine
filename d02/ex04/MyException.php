<?php
class MyException extends Exception {
	public function __construct ($tag)
	{
		$this->message = "'$tag' is not allowed tag";
	}
}
?>
