<?php 

namespace Engine\core\Template;

use Admin\Model\User\UserRepository;
use Engine\DI\DifI;

class User
{

	protected static $di;

	protected static $userRepository;

	public function __construct($di)
	{
		self::$di = $di;
		self::$userRepository = new UserRepository(self::$di);
	}

	public static function get($keyField)
	{
		return self::$userRepository->getUserValue($keyField);
	}

}

?>