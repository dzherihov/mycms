<?php

namespace Engine\service\Router;

use Engine\service\AbstractProvider;
use Engine\core\Router\Router;

class Provider extends AbstractProvider
{
	public $serviceName = 'router';

	public function init()
	{
		$router = new Router('http://localhost/mycms/');

		$this->di->set($this->serviceName, $router);
	}

}

?>