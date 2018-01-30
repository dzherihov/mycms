<?php

namespace Engine\service;

abstract class AbstractProvider
{

	protected $di;

	public function __construct(\Engine\DI\DifI $di)
	{

		$this->di = $di;
	}

	abstract function init();
}

?>