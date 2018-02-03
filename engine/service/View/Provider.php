<?php

namespace Engine\service\View;

use Engine\service\AbstractProvider;
use Engine\core\Template\View;

class Provider extends AbstractProvider
{
	public $serviceName = 'view';

	public function init()
	{
		$view = new View($this->di);

		$this->di->set($this->serviceName, $view);
	}

}

?>