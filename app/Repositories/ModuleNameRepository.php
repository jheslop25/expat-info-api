<?php

namespace App\Repositories;


use A17\Twill\Repositories\ModuleRepository;
use App\Models\ModuleName;

class ModuleNameRepository extends ModuleRepository
{
    

    public function __construct(ModuleName $model)
    {
        $this->model = $model;
    }
}
