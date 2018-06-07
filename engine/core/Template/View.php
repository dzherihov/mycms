<?php

namespace Engine\core\Template;

use Engine\DI\DifI;

class View
{
    /**
     * @var \Engine\DI\DI
     */
    public $di;

    /**
     * @var \Engine\Core\Template\Theme
     */
    protected $theme;

    protected $setting;

    protected $menu;

    protected $post;
    
    protected $user;

    /**
     * View constructor.
     * @param DI $di
     */
    public function __construct(DifI $di)
    {
        $this->di      = $di;
        $this->theme   = new Theme();
        $this->setting = new Setting($di);
        $this->menu    = new Menu($di);
        $this->post    = new Post($di);
        $this->user    = new User($di);
    }

    /**
     * @param $template
     * @param array $data
     * @throws \Exception
     */
    public function render($template, $data = [])
    {
        $functions = $this->getThemePath() . 'functions.php';
        if (file_exists($functions)) {
            include_once $functions; 
        }

        $templatePath = $this->getTemplatePath($template, ENV);
        
        if (!is_file($templatePath)) {
            throw new \InvalidArgumentException(
                sprintf('Template "%s" not found in "%s"', $template, $templatePath)
            );
        }

        // Add language in this template
        $data['lang'] = $this->di->get('language');

        $this->theme->setData($data);

        extract($data);
        ob_start();
        ob_implicit_flush(0);

        try {
            require($templatePath);
        } catch (\Exception $e){
            ob_end_clean();
            throw $e;
        }

        echo ob_get_clean();
    }


    /**
     * @param $template
     * @param null $env
     * @return string
     */
    private function getTemplatePath($template, $env = null)
    {
        if ($env === 'Cms') {
            $theme = \Setting::get('active_theme');
            if ($theme == '') {
                $theme = \Engine\core\Config\Config::item('defaultTheme');
            }
            return ROOT_DIR . '/content/themes/'. $theme. '/' . $template . '.php';
        }

        return path('view') . '/' . $template . '.php';
    }

     public static function getThemePath()
    {
        $theme = \Setting::get('active_theme');
        return ROOT_DIR . '/content/themes/' . $theme . '/';
    }
}