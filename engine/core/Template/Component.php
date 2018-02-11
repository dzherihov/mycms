<?php

namespace Engine\core\Template;

//use Engine\core\Template\Theme;

class Component
{
    /**
     * @param $name
     * @param array $data
     * @throws \Exception
     */
    public static function load($name, $data = [])
    {
        $templateFile = View::getThemePath() . $name . '.php';
        if (ENV == 'Admin') {
            $templateFile = path('view') . '/' . $name . '.php';
        }

        if (is_file($templateFile)) {
            extract(array_merge($data, Theme::getData()));
            require($templateFile);
        } else {
            throw new \Exception(
                sprintf('View file %s does not exist!', $templateFile)
            );
        }
    }
}