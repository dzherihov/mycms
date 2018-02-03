<?php

namespace Admin\Controller;

use Engine\Controller;
use Engine\DI\DifI;
use Engine\core\Auth\Auth;
use Engine\core\Database\QueryBuilder;

class LoginController extends Controller
{
	protected $auth;

	public function __construct(DifI $di)
	{
		parent::__construct($di);

		$this->auth = new Auth();

		if($this->auth->hashUser() !== null) {
			header('Location: /admin/');
 			exit;
		}
	}

	public function form()
	{
		$this->view->render('login');
	}

	public function authAdmin()
	{
		$params       = $this->request->post;
		$queryBuilder = new  QueryBuilder();

		$sql = $queryBuilder
				->select()
				->from('user')
				->where('email', $params['email'])
				->where('password', md5($params['password']))
				->limit(1)
				->sql();

		$query = $this->db->query($sql, $queryBuilder->values);

		if(!empty($query)) {
			$user = $query[0];
			if($user->role == 'admin') {
				$hash = md5($user->id . $user->email . $user->password . $this->auth->salt());

				$sql = $queryBuilder
					->update('user')
					->set(['hash' => $hash])
					->where('id', $user->id)
					->sql();

				$this->db->execute($sql, $queryBuilder->values);

				$this->auth->authorize($hash);

				header('Location: /admin/login/');
				exit;
			}
		}

		echo 'Incorrect email or password';
		
	}
}

?>