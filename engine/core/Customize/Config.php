<?php
namespace Engine\core\Customize;

class Config
{
    /**
     * @var array
     */
    protected $config = [
        'dashboardMenu' => [
            'home' => [
                'classIcon' => 'home icon',
                'urlPath'   => '/admin/',
                'title'     => 'Home'
            ],
            'pages' => [
                'classIcon' => 'file text outline icon',
                'urlPath'   => '/admin/pages/',
                'title'     => 'Pages'
            ],
            'posts' => [
                'classIcon' => 'write icon',
                'urlPath'   => '/admin/posts/',
                'title'     => 'Posts'
            ],
           /** 'plugins' => [
                'classIcon' => 'icon-wrench icons',
                'urlPath'   => '/admin/plugins/',
                'title'     => 'Plugins'
            ],**/
            'settings' => [
                'classIcon' => 'setting icon',
                'urlPath'   => '/admin/settings/general/',
                'title'     => 'Settings'
            ]
          /**],
       'settingMenu' => [
            'general' => [
                'urlPath'   => '/admin/settings/general/',
                'title'     => 'General'
            ],
            'themes' => [
                'urlPath'   => '/admin/settings/appearance/themes/',
                'title'     => 'Themes'
            ],
            'menus' => [
                'urlPath'   => '/admin/settings/appearance/menus/',
                'title'     => 'Menus'
            ],
            'custom_fields' => [
                'urlPath'   => '/admin/settings/custom_fields/',
                'title'     => 'Custom Fields'
            ]*/
        ]
    ];
    /**
     * @param string $key
     * @return bool
     */
    public function has($key)
    {
        return isset($this->config[$key]);
    }
    /**
     * @param string $key
     * @return mixed|null
     */
    public function get($key)
    {
        return $this->has($key) ? $this->config[$key] : null;
    }
    /**
     * @param string $key
     * @param mixed $value
     */
    public function set($key, $value)
    {
        $this->config[$key] = $value;
    }
}