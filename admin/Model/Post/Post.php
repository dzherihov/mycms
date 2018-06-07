<?php

namespace Admin\Model\Post;

use Engine\core\Database\ActiveRecord;

class Post
{
    use ActiveRecord;

    /**
     * @var string
     */
    protected $table = 'post';

    /**
     * @var Post id
     */
    public $id;

    /**
     * @var Post title
     */
    public $title;

    /**
     * @var Post seo_description
     */
    public $seo_description;

     /**
     * @var Post seo_keywords
     */
    public $seo_keywords;

     /**
     * @var Post content
     */
    public $content;

    /**
     * @var Post content
     */
    public $status;
    /**
     * @var Post date
     */
    public $date;
   /**
     * @var Post author
     */
    public $id_author;




    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param Post $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }


    /**
     * @param Post $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

     /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

     /**
     * @param Post $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param Post $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

     /**
     * @return string
     */
    public function getAuth()
    {
        return $this->id_author;
    }

    /**
     * @param Post $author
     */
    public function setAuth($id_author)
    {
        $this->id_author = $id_author;
    }

     /**
     * @return string
     */
    public function getSeoDescr()
    {
        return $this->seo_description;
    }

    /**
     * @param Post $seo_description
     */
    public function setSeoDescr($seo_description)
    {
        $this->seo_description = $seo_description;
    }

     /**
     * @return string
     */
    public function getSeoKeyw()
    {
        return $this->seo_keywords;
    }

    /**
     * @param Post $seo_keywords
     */
    public function setSeoKeyw($seo_keywords)
    {
        $this->seo_keywords = $seo_keywords;
    }
}