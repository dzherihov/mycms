<?php
/**
 * List routes.
 */

	$this->router->add('login', '/admin/login', 'LoginController:form');
	$this->router->add('login2', '/admin/login/', 'LoginController:form');

	$this->router->add('dashboard', '/admin/', 'DashboardController:index');
	//$this->router->add('news', '/news', 'HomeController:news');
	//$this->router->add('news_single', '/news/(id:int)', 'HomeController:news');
	//$this->router->add('error404', '*', 'ErrorController:page404');


?>