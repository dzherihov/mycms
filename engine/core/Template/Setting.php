<?php 

namespace Engine\core\Template;

use Admin\Model\Setting\SettingRepository;
use Engine\DI\DifI;

class Setting
{

	protected static $di;

	protected static $settingRepository;

	public function __construct($di)
	{
		self::$di = $di;
		self::$settingRepository = new SettingRepository(self::$di);
	}

	public static function get($keyField)
	{
		return self::$settingRepository->getSettingValue($keyField);
	}

}

?>