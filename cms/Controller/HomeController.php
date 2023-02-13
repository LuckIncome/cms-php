<?php
namespace Cms\Controller;

use Engine\Controller;

class HomeController extends Controller
{
	/**
	*HomeController constructor
	*@param \Engine\DI\DI $di
	*/
	public function __construct($di) 
	{
		parent::__construct($di);
	}

	public function index() 
	{
		echo 'Index Page';
	}

	public function news() 
	{
		echo 'News Page';
	}
}