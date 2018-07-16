<?php

class NewModel extends CI_Model {

	public $title;
	public $content;
	public $date;

	public function __construct()
	{
		// Call the CI_Model constructor
		parent::__construct();
//		$title = "not setting";
	}

	public function makeTitle()
	{
		$title = 'first';
		return $title;
	}

	public function outputTitle()
	{
		$title = "not setting";
		return $title;
	}
}

