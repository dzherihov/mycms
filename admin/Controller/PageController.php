<?php

namespace Admin\Controller;

class PageController extends AdminController
{
	public function listing()
	{
		$this->load->model('Page');

		$this->data['pages'] = $this->model->page->getPages();

		$this->view->render('pages/list', $this->data);
	}

	public function create()
	{

		$this->view->render('pages/create');
	}

	public function edit($id)
	{
		$this->load->model('Page');

 		$this->data['baseUrl'] = \Engine\Core\Config\Config::item('baseUrl');
		$this->data['page'] = $this->model->page->getPageData($id);

		$this->view->render('pages/edit', $this->data);
	}

	public function add()
	{
		$this->load->model('Page');
		$params = $this->request->post;

		if(isset($params['title'])){
			$pageId = $this->model->page->createPage($params);

			echo $pageId;
		}
	}

	public function update()
	{
		$this->load->model('Page');
		$params = $this->request->post;

		if(isset($params['title'])){
			$pageId = $this->model->page->updatePage($params);

			echo $pageId;
		}
	}

	public function remove()
    {
        $params = $this->request->post;

        $this->load->model('Page');

        if (isset($params['page_id']) && strlen($params['page_id']) > 0) {
            $removeItem = $this->model->page->remove($params['page_id']);

            echo $removeItem;
        }
    }
}

?>