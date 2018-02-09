<?php

namespace Cms\Model\Menu;

use Engine\core\Database\ActiveRecord;

class Menu
{
    use ActiveRecord;

    /**
     * @var string
     */
    protected $table = 'menu';

    /**
     * @var Menu id
     */
    public $id;

    /**
     * @var Menu name
     */
    public $name;

    
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
}