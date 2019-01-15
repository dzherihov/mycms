<?php
/**
 * List routes.
 */

	$this->router->add('home', '/', 'HomeController:index');
	//$this->router->add('news', '/news', 'HomeController:news');
	$this->router->add('news_single', '/news/(id:int)', 'HomeController:news');

	$this->router->add('page', '/(segment:any)', 'PageController:show');
	//$this->router->add('error404', '*', 'ErrorController:page404');


?>