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

	protected $view;

	public function __construct(DifI $di)
	{
		$this->di = $di;
		$this->view = $this->di->get('view');
	}
}

?>