<?php

namespace Engine\service\Config;

use Engine\service\AbstractProvider;
use Engine\core\Config\Config;

class Provider extends AbstractProvider
{
	public $serviceName = 'config';

	public function init()
	{
		$config['main']     = Config::file('main'); 
		$config['database'] = Config::file('database');

		$this->di->set($this->serviceName, $config);
	}

}

?>