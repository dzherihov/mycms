<?php

namespace Engine\core\Config;

class Config
{
	/**
	 * @param $key
	 * @param string $group
	 * @return null
	 */
	public static function item($key, $group = 'main')
	{
		$groupItems = static::file($group);

		return isset($groupItems[$key]) ? $groupItems[$key] : null;
	}

	/**
	 * @param $group
	 * @return bool\mixed
	 * @throws \Exception
	 */
	public static function file($group)
	{
		$path = $_SERVER['DOCUMENT_ROOT'] . '/admin/Config/' . $group . '.php';

		if (file_exists($path))
		{
			$items = require_once $path;

			if(!empty($items))
			{
				return $items;
			}
			else
			{
				throw new \Exception(
					sprintf('Config file <strong>%s</strong> is not a volid array.', $path)
				);
				
			}
		}
		else
		{
			throw new \Exception(
				sprintf('Cannot load config from file, file <strong>%s</strong> does not exist.', $path)
			);
			
		}

		return false;
	}
}

?>