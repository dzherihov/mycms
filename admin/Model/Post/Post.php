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
     * @var Post content
     */
    public $content;

    /**
     * @var Post date
     */
    public $date;


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
}