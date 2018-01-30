<?php

namespace Engine\service\Database;

use Engine\service\AbstractProvider;
use Engine\core\Database\Connection;

class Provider extends AbstractProvider
{
	public $serviceName = 'db';

	public function init()
	{
		$db = new Connection();

		$this->di->set($this->serviceName, $db);
	}

}

?>