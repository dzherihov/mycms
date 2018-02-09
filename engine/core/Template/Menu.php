<?php 

namespace Engine\core\Template;

use Engine\DI\DifI;
use Cms\Model\MenuItem\MenuItemRepository;

class Menu
{
	protected static $di;

	protected static $menuRepository;

	public function __construct($di)
	{
		self::$di = $di;
		self::$menuRepository = new MenuItemRepository(self::$di);
	}

	public static function show()
	{

	}

	public static function getItems()
	{
		return self::$menuRepository->getAllItems();
	}

}

?>