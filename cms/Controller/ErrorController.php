<?php

namespace cms\Controller;

class ErrorController extends CmsController
{
	public function page404()
	{
		$data = ['name' => 'Denis'];
		$this->view->render('404', $data);
	}
}

?>