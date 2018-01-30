<?php

namespace Engine\core\Router;

class DispatchedRoute
{
	private $controller;
	private $parameters;

	/**
	 * @param $controller
	 * @param array $parameters
	 */
	public function __construct ($controller, $parameters = [])
	{
		$this->controller = $controller;
		$this->parameters = $parameters;
	}

	public function getController()
	{
		return $this->controller;
	}

	public function getParameters()
	{
		return $this->parameters;
	}
}

?>