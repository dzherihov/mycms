<?php

namespace Engine\Helper;

class Common
{
	static function isPost()
	{
		if($_SERVER['REQUEST_METHOD'] == 'POST')
		{
			return true;
		}

		return false;
	}

	static function getMethod()
	{
		return $_SERVER['REQUEST_METHOD'];
	}

	static function getPathUrl()
	{
		$pathUrl = $_SERVER['REQUEST_URI'];

		if ($position = strpos($pathUrl, '?'))
		{
			$pathUrl = substr ($pathUrl, 0, $position);
		}

		return $pathUrl;
	}
}

?>