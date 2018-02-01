<?php

namespace Engine\service\Request;

use Engine\service\AbstractProvider;
use Engine\core\Request\Request;

class Provider extends AbstractProvider
{
	public $serviceName = 'request';

	public function init()
	{
		$request = new Request();

		$this->di->set($this->serviceName, $request);
	}

}

?>