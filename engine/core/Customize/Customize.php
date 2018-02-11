<?php
namespace Engine\core\Customize;

use Engine\DI\DifI;

class Customize
{
    public static $di;
    /**
     * @var Config
     */
    protected $config;
    /**
     * @var null|Customize
     */
    private static $instance = null;
    /**
     * Customize constructor.
     */
    public function __construct(DifI $di)
    {
        static::$di = $di;
        $this->config = new Config();
    }
    /**
     * @return Config
     */
    public function getConfig()
    {
        return $this->config;
    }
    protected function __clone()
    {
    }
    /**
     * @return Customize|null
     */
    static public function getInstance()
    {
        if (is_null(self::$instance)) {
            self::$instance = new self(static::$di);
        }
        return self::$instance;
    }
    /**
     * @return mixed|null
     */
    public function getAdminMenuItems()
    {
        return $this->getConfig()->get('dashboardMenu');
    }
    /**
     * @return mixed|null
     */
    public function getAdminSettingItems()
    {
        return $this->getConfig()->get('settingMenu');
    }
}