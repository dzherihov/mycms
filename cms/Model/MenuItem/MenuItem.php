<?php

namespace Cms\Model\MenuItem;

use Engine\core\Database\ActiveRecord;

class MenuItem
{
    use ActiveRecord;

    /**
     * @var string
     */
    protected $table = 'menu_item';

    /**
     * @var Menu id
     */
    public $id;

    /**
     * @var Menu menu_id
     */
    public $menu_id;

    /**
     * @var Menu name
     */
    public $name;

    /**
     * @var Menu parent
     */
    public $parent;

    /**
     * @var Menu position
     */
    public $position;

    /**
     * @var Menu link
     */
    public $link;

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
    public function getMenuId()
    {
        return $this->menu_id;
    }

    /**
     * @param Menu $menu_id
     */
    public function setMenuId($menu_id)
    {
        $this->menu_id = $menu_id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param Menu $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * @param Menu $parent
     */
    public function setParent($parent)
    {
        $this->parent = $parent;
    }

    /**
     * @return string
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @param Menu $position
     */
    public function setPosition($position)
    {
        $this->position = $position;
    }

    /**
     * @return string
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * @param Menu $link
     */
    public function setLink($link)
    {
        $this->link = $link;
    }
}