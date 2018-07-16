<?php

class custom {

	private $name;

	public function __construct()
	{
		$this->name = "jjy";
	}

	public function speak(){
		return $this->name;
	}
}

