<?php

namespace Engine\core\Router;

class Router
{
	private $routes = [];
	private $dispatcher;
	private $host;

	public function __construct($host)
	{
		$this->host = $host;
	}

	public function add($key, $pattern, $controller, $method = 'GET')
	{
		$this->routes[$key] = [
			'pattern'    => $pattern,
			'controller' => $controller,
			'method'     => $method
		];
	}

	public function dispatch($method, $uri)
	{

	}

	public function getDispatcher()
	{
		if ($this->dispatcher == null)
		{

		}

		return $this->dispatcher;
	}
}

?>
