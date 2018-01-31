<?php

namespace Engine\core\Router;

class UrlDispatcher
{

	/**
	 * @var array
	 */
	private $methods = [
		'GET',
		'POST'
	];

	/**
	 * @var array
	 */
	private $routes = [
		'GET' => [],
		'POST' =>[]	
	];

	/**
	 * @var array
	 */
	private $patterns = [
		'int' => '[0-9]+',
		'str' => '[a-zA-Z\.\-_%]+',
		'any' => '[a-zA-Z0-9\.\-_%]+'
	];

	/**
	 * @param $key
	 * @param $pattern
	 */
	public function addPattern ($key)
	{
		$this->patterns[$key] = $pattern;
	}

	private function routes ($method)
	{
		return isset($this->routes[$method]) ? $this->routes[$method] : [];
	}

	public function register($method, $pattern, $controller)
	{
		$convert = $this->convertPattern($pattern);
		$this->routes[strtoupper($method)][$convert] = $controller;
	}

	private function convertPattern($pattern)
	{
		if (strpos($pattern, '(') === false)
		{
			return $pattern;
		}

		return preg_replace_callback('#\((\w+):(\w+)\)#', [$this, 'replacePattern'], $pattern);
	}

	private function replacePattern($matches)
	{
		return '(?<' .$matches[1]. '>'. strtr($matches[2], $this->patterns) .')';
	}

	private function processParam($parameters)
	{
		foreach ($parameters as $key => $value) {
			if(is_int($key))
			{
				unset($parameters[$key]);
			}
		}

		return $parameters;
	}

	/**
	 * @param $method
	 * @param $uri
	 * @return DispatchedRoute|void
	 */
	public function dispatch($method, $uri)
	{
		$routes = $this->routes(strtoupper($method));

		if (array_key_exists($uri, $routes))
		{
			return new DispatchedRoute($routes[$uri]);
		}

		return $this->doDispatch($method, $uri);
	}

	/**
	 * @param $method
	 * @param $uri
	 * @return DispatchedRoute
	 */
	private function doDispatch($method, $uri)
	{
		foreach ($this->routes($method) as $route => $controller) 
		{

			$pattern = '#s' . $route . '$#s';
			
			if (preg_match($pattern, $uri, $parameters))
			{
				return new DispatchedRoute($controller, $this->processParam($parameters));
			}
		}

	}
}

?>