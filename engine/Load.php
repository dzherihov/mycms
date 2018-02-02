<?php

namespace Engine;

use Engine\DI\DifI;

class Load
{
    const MASK_MODEL_ENTITY     = '\%s\Model\%s\%s';
    const MASK_MODEL_REPOSITORY = '\%s\Model\%s\%sRepository';

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
    public function model($modelName, $modelDir = false)
    {
        $modelName  = ucfirst($modelName);
        $modelDir   = $modelDir ? $modelDir : $modelName;

        $namespaceModel = sprintf(
            self::MASK_MODEL_REPOSITORY,
            ENV, $modelDir, $modelName
        );

        $isClassModel = class_exists($namespaceModel);

        if ($isClassModel){
            $modelRegistry = $this->di->get('model') ?: new \stdClass();
            $modelRegistry->{lcfirst($modelName)} = new $namespaceModel($this->di);

            $this->di->set('model', $modelRegistry);
        }

        return $isClassModel;
    }
}