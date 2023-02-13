<?php

namespace Engine\Core\Template;

use Engine\DI\DI;
use Cms\Model\Menu\MenuRepository;
/**
* class Menu
* @package Engine\Core\Template
*/
class Menu 
{
	/**
	* @var DI
	*/
	protected static $di;
	/**
	* @var MenuRepository
	*/
	protected static $menuRepository;

	/**
	* Menu constructor.
	* @param $di
	*/
	public function __construct($di)
	{
	    self::$di = $di;
	    self::$menuRepository = new MenuRepository(self::$di);
	}

	public static function show() {

	}

	public static function getItems() {
		return self::$menuRepository->getAllItems();
	}
}

