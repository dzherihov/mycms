<?php

namespace Admin\Model\Page;

use Engine\Model;

class PageRepository extends Model
{
	public function getPages()
	{
		$sql = $this->queryBuilder
				->select()
				->from('page')
				->orderBy('id', 'DESC')
				->sql();

		return $this->db->query($sql);
	}

	public function getPagesValues($status, $type, $sort)
	{
		$sql = $this->queryBuilder
				->select()
				->from('page')
				->where('status', $status)
				->where('type', $type)
				->orderBy($sort, 'DESC')
				->sql();

		return $this->db->query($sql, $this->queryBuilder->values);
	}


	public function getPageData($id)
	{
		$page = new Page($id);

		return $page->findOne();
	}

	  /**
     * @param string $segment
     * @return object|bool
     */
    public function getPageBySegment($segment)
    {
        $sql = $this
            ->queryBuilder
            ->select()
            ->from('page')
            ->where('segment', $segment)
            ->limit(1)
            ->sql()
        ;
        $result = $this->db->query($sql, $this->queryBuilder->values);
        return isset($result[0]) ? $result[0] : false;
    }

	public function createPage($params)
	{
		$page = new Page;
		$page->setTitle($params['title']);
		$page->setContent($params['content']);
		$page->setSegment(\Engine\Helper\Text::transliteration($params['title']));
		$pageId = $page->save();

		return $pageId;
	}

	public function updatePage($params)
	{
		if(isset($params['page_id'])){
			$page = new Page($params['page_id']);
			$page->setTitle($params['title']);
			$page->setContent($params['content']);
			$page->setSeoDescr($params['seo_description']);
			$page->setSeoKeyw($params['seo_keywords']);
			$page->setSegment($params['segment']);
			$page->setCategory($params['category']);
			$page->setImagePage($params['imagepage']);
			$page->setStatus($params['status']);
            $page->setType($params['type']);
			$page->save();
		}
	}

	public function addViewPage($id, $view)
	{
		$view++;
		if($id>0){
			$page = new Page($id);
			$page->setQualView($view);
			$page->save();
		}
	}

	public function remove ($pageId)
    {
    	$sql = $this->queryBuilder
    		->delete()
    		->from('page')
    		->where('id', $pageId)
    		->sql();
    		
    	return $this->db->query($sql, $this->queryBuilder->values);
    }


}

?>