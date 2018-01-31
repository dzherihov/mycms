<?php 

namespace Engine;

use Engine\Helper\Common;
use Engine\core\Router\DispatchedRoute;

class Cms
{
	private $di;
	public $router;

	/**
	* Cms constructor.
	* @param $di
	*/
	public function __construct($di)
	{
		$this->di = $di;
		$this->router = $this->di->get('router');
	}


	// Run CMS
	public function run()
	{
		try{
			
			require_once __DIR__ . '/../' . mb_strtolower(ENV) . '/Route.php';

			$routerDispatch = $this->router->dispatch(Common::getMethod(), Common::getPathUrl());
			if($routerDispatch == null)
			{
				$routerDispatch = new DispatchedRoute('ErrorController:page404');

			}
			

			list($class, $action) = explode(':', $routerDispatch->getController(), 2);

			$controller = '\\' . ENV . '\\Controller\\' . $class;
			$parameters = $routerDispatch->getParameters();
			call_user_func_array([new $controller($this->di), $action], $parameters);
		}catch(\Exeption $e){
			echo $e->getMessage();
			exit;
		}
		//print_r($this->router);
		//print_r ($routerDispatch);
		//print_r($class);
		//echo '<br>';
		//print_r($action);

	}
}

?>