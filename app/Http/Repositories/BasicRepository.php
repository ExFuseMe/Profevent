<?php

namespace App\Http\Repositories;

use ReflectionClass;
use ReflectionMethod;

abstract class BasicRepository
{
    protected mixed $model;

    public function __construct()
    {
        $this->model = app($this->getModelClass());
    }


    abstract protected function getModelClass();
    public function startConditions(){
        return clone $this->model;
    }
}
