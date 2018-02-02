<?php

namespace cms\Controller;


class HomeController extends CmsController
{
	public function index()
	{
		$data = ['name' => 'Denis'];
		$this->view->render('index', $data);
	}

	public function news($id)
	{
		echo $id;
	}
}

?>