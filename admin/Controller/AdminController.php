<?php

namespace Admin\Controller;

use Engine\Controller;
use Engine\core\Auth\Auth;

class AdminController extends Controller
{
	protected $auth;

	/**
	 * AdminController constructor. 
	 * @param \Engine\DI\DI $di
	 */
	public function __construct($di)
	{
		parent::__construct($di);

		$this->auth = new Auth();


		if($this->auth->hashUser() == null) {
			header('Location: /mycms/admin/login/');
 			exit;
		}

		$this->checkAuthorization();
	}

	public function checkAuthorization()
	{
		
	}

	public function logout()
	{
		$this->auth->unAuthorize();
		header('Location: /mycms/admin/login/');
 		exit;
	}
}

?>