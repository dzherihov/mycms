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
     * @var Page seo_description
     */
    public $seo_description;

     /**
     * @var Page seo_keywords
     */
    public $seo_keywords;


    /**
     * @var Page content
     */
    public $content;

    /**
     * @var Page segment
     */
    public $segment;

    /**
     * @var Page type
     */
    public $type;

    /**
     * @var Page status
     */
    public $status;

  /**
     * @var Page category
     */
    public $category;


    /**
     * @var Page imagepage
     */
    public $imagepage;

   /**
     * @var Page qual_view
     */
    public $qual_view;


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
    public function getSegment()
    {
        return $this->segment;
    }

    /**
     * @param Page $segment
     */
    public function setSegment($segment)
    {
        $this->segment = $segment;
    }

       /**
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param Page $category
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }


     /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param Page $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param Page $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return string
     */
    public function getImagePage()
    {
        return $this->imagepage;
    }

    /**
     * @param Page $imagepage
     */
    public function setImagePage($imagepage)
    {
        $this->imagepage = $imagepage;
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

     /**
     * @return string
     */
    public function getSeoDescr()
    {
        return $this->seo_description;
    }

    /**
     * @param Page $seo_description
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
     * @param Page $seo_keywords
     */
    public function setSeoKeyw($seo_keywords)
    {
        $this->seo_keywords = $seo_keywords;
    }

         /**
     * @return string
     */
    public function getQualView()
    {
        return $this->qual_view;
    }

    /**
     * @param Page $qual_view
     */
    public function setQualView($qual_view)
    {
        $this->qual_view = $qual_view;
    }
}