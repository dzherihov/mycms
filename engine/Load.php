<?php

namespace Engine;

use Engine\DI\DifI;

use Engine\core\Template\Setting;

class Load
{
    const MASK_MODEL_ENTITY     = '\%s\Model\%s\%s';
    const MASK_MODEL_REPOSITORY = '\%s\Model\%s\%sRepository';

    const FILE_MASK_LANGUAGE    = 'Language/%s/%s.ini';

    public $di;

    public function __construct(DifI $di)
    {
        $this->di = $di;

        return $this;
    }

    /**
     * @param $modelName
     * @param bool $modelDir
     * @return \stdClass
     */
    public function model($modelName, $modelDir = false, $env = false)
    {
        $modelName  = ucfirst($modelName);
        $modelDir   = $modelDir ? $modelDir : $modelName;
        $env        = $env ? $env : ENV;

        $namespaceModel = sprintf(
            self::MASK_MODEL_REPOSITORY,
            $env, $modelDir, $modelName
        );

        $isClassModel = class_exists($namespaceModel);

        if ($isClassModel){
            $modelRegistry = $this->di->get('model') ?: new \stdClass();
            $modelRegistry->{lcfirst($modelName)} = new $namespaceModel($this->di);

            $this->di->set('model', $modelRegistry);
        }

        return $isClassModel;
    }

    public function language ($path)
    {
        
        $lang = Setting::get('language');
        $file = sprintf(
            self::FILE_MASK_LANGUAGE,
            $lang, $path
        );

        $content = parse_ini_file($file, true);

        // Set to DI
        $languageName = $this->toCamelClass($path);

        $language = $this->di->get('language') ?: new \stdClass();
        //var_dump(Setting::get('language'));
        $language->{$languageName} = $content;

        $this->di->set('language', $language);

        return $content;
    }

    private function toCamelClass($str)
    {
        $replace = preg_replace('/[^a-zA-Z0-9]/', ' ', $str);
        $convert = mb_convert_case($replace, MB_CASE_TITLE);
        $result  = lcfirst(str_replace(' ', '', $convert));

        return $result;
    }
}