<?php 

namespace Engine;

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
		//$this->router->add('home', '/', 'HomeController:index');

		print_r($this->router);
	}
}

?>