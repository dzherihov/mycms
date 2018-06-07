<?php

namespace Admin\Model\Post;

use Engine\Model;

class PostRepository extends Model
{
	public function getPosts()
	{
		$sql = $this->queryBuilder
				->select()
				->from('post')
				->orderBy('id', 'DESC')
				->sql();

		return $this->db->query($sql);
	}

	public function getPostsValue($status, $params = [])
	{
		$sql = $this->queryBuilder
				->select()
				->from('post')
				->where('status', $status)
				->orderBy('date', 'DESC')
				->sql();

		return $this->db->query($sql, $this->queryBuilder->values);
	}

	public function getPostData($id)
	{
		$post = new Post($id);

		return $post->findOne();
	}

	public function createPost($params)
	{
		$post = new Post;
		$post->setTitle($params['title']);
		$post->setAuth($params['id_author']);
		$post->setSeoDescr($params['seo_description']);
		$post->setSeoKeyw($params['seo_keywords']);
		$post->setContent($params['content']);
		$post->setStatus($params['status']);
		$postId = $post->save();

		return $postId;
	}

	public function updatePost($params)
	{
		if(isset($params['post_id'])){
			$post = new Post($params['post_id']);
			$post->setAuth($params['id_author']);
			$post->setTitle($params['title']);
			$post->setContent($params['content']);
			$post->setSeoDescr($params['seo_description']);
			$post->setSeoKeyw($params['seo_keywords']);
			$post->setStatus($params['status']);
			$post->save();
		}
	}

	public function remove ($postId)
    {
    	$sql = $this->queryBuilder
    		->delete()
    		->from('post')
    		->where('id', $postId)
    		->sql();
    		
    	return $this->db->query($sql, $this->queryBuilder->values);
    }

}

?>