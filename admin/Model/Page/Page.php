<?php

namespace Admin\Model\Page;

use Engine\core\Database\ActiveRecord;

class Page
{
    use ActiveRecord;

    /**
     * @var string
     */
    protected $table = 'page';

    /**
     * @var Page id
     */
    public $id;

    /**
     * @var Page title
     */
    public $title;

    /**
     * @var Page content
     */
    public $content;

    /**
     * @var Page date
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
     * @param Page $title
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
     * @param Page $content
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
     * @param Page $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }
}