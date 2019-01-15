<?php 

namespace Engine\core\Template;

use Admin\Model\Page\PageRepository;
use Engine\DI\DifI;

class Page
{

	protected static $di;

	protected static $pageRepository;

	public function __construct($di)
	{
		self::$di = $di;
		self::$pageRepository = new PageRepository(self::$di);
	}

	public static function get($keyField)
	{
		return self::$pageRepository->getPagesValues($keyField);
	}

}

?>