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
	
	protected $config;

	protected $request;

	protected $load;

	//protected $model;

	public function __construct(DifI $di)
	{
		$this->di      = $di;
		$this->db      = $this->di->get('db');
		$this->view    = $this->di->get('view');
		$this->load    = $this->di->get('load');
		//$this->model   = $this->di->get('model');
		$this->config  = $this->di->get('config');
		$this->request = $this->di->get('request');

		$this->initVars();
	}

	public function __get($key)
	{
		return $this->di->get($key);
	}

	public function initVars()
	{
		$vars = array_keys(get_object_vars($this));

		foreach ($vars as $var) {
			if ($this->di->has($var)) {
				$this->{$var} = $this->di->get($var);
			}
		}

		return $this;
	}
}

?>