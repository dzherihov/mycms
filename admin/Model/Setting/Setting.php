<?php

namespace Admin\Model\Setting;

use Engine\core\Database\ActiveRecord;

class Setting
{
    use ActiveRecord;

    /**
     * @var string
     */
    protected $table = 'setting';

    /**
     * @var Setting id
     */
    public $id;

    /**
     * @var Setting name
     */
    public $name;

    /**
     * @var Setting key_field
     */
    public $key_field;

    /**
     * @var Setting value
     */
    public $value;

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
     * @param Setting $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param Setting $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    /**
     * @return string
     */
    public function getKey_field()
    {
        return $this->key_field;
    }

    /**
     * @param Setting $key_field
     */
    public function setKey_field($key_field)
    {
        $this->key_field = $key_field;
    }
}