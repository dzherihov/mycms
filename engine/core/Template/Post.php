<?php 

namespace Engine\core\Template;

use Admin\Model\Post\PostRepository;
use Engine\DI\DifI;

class Post
{

	protected static $di;

	protected static $postRepository;

	public function __construct($di)
	{
		self::$di = $di;
		self::$postRepository = new PostRepository(self::$di);
	}

	public static function get($keyField)
	{
		return self::$postRepository->getPostsValue($keyField);
	}

}

?>