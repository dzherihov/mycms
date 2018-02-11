<?php

namespace Engine\service\Customize;

use Engine\service\AbstractProvider;
use Engine\core\Customize\Customize;

class Provider extends AbstractProvider
{
	public $serviceName = 'customize';

	public function init()
	{
		$customize = new Customize($this->di);

		$this->di->set($this->serviceName, $customize);

		return $this;
	}

}

?>