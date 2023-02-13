<?php

namespace Engine;

class Cms
{
	/*
	* @var DI
	*/
	private $di;

	public $db;
	/*
	* CMS constructor
	* @param $di
	*/
	public function __construct($di) 
	{
		$this->di = $di;
	}
	/*
	* Run cms
	*/
	public function run() 
	{
		print_r($this->di);
	}

}