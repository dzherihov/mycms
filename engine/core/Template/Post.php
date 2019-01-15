<?php 

namespace Engine\core\Template;

use Admin\Model\Post\PostRepository;

use Admin\Model\Page\PageRepository;

use Engine\DI\DifI;

class Post
{

	protected static $di;

	protected static $postRepository;
	protected static $pageRepository;

	public function __construct($di)
	{
		self::$di = $di;
		self::$postRepository = new PostRepository(self::$di);
		self::$pageRepository = new PageRepository(self::$di);
	}

	public static function get($keyField)
	{
		return self::$postRepository->getPostsValue($keyField);
	}

	public static function getPage($keyField, $type, $sort='date')
	{
		return self::$pageRepository->getPagesValues($keyField, $type, $sort);
	}

	public static function setPage($id, $view)
	{
		self::$pageRepository->addViewPage($id, $view);
	}

}

?>