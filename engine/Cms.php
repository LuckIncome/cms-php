<?php

namespace Engine;

class Cms
{
	/*
	* @var DI
	*/
	private $di;
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
		//echo 'Hello Cms!';
		$db = $this->di->get('test');
		print_r($db);
	}

}