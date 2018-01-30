<?php

namespace Engine;

use Engine\DI\DifI;

abstract class Controller
{
	/**
	 * @var \Engine\DI\DI
	 */
	protected $di;

	protected $db;

	public function __construct(DifI $di)
	{
		$this->di = $di;
	}
}

?>