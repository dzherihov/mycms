<?php 

namespace Engine;

use Engine\Helper\Common;

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
			$this->router->add('home', '/', 'HomeController:index');
			$this->router->add('user', '/user', 'HomeController:user');
			$this->router->add('error404', '*', 'ErrorController:page404');

			$routerDispatch = $this->router->dispatch(Common::getMethod(), Common::getPathUrl());

			/**
			Нерабочий кусок на проверку несуществующей страницы 404. Пусть пока будет на всякий случай
			if($routerDispatch == null)
			{
				$routerDispatch = new DispatchedRoute('ErrorController:page404');

			}
			*/

			list($class, $action) = explode(':', $routerDispatch->getController(), 2);

			$controller = '\\Cms\\Controller\\' . $class;
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