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
		return $this->getDispatcher()->dispatch($method, $uri);
	}

	public function getDispatcher()
	{
		if ($this->dispatcher == null)
		{
			$this->dispatcher = new UrlDispatcher();

			foreach ($this->routes as $route) 
			{
				$this->dispatcher->register($route['method'], $route['pattern'], $route['controller']);
			}
		}

		return $this->dispatcher;
	}
}

?>
