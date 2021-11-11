<?php

namespace App\Repositories;


use A17\Twill\Repositories\ModuleRepository;
use App\Models\Page;
use A17\Twill\Repositories\Behaviors\HandleTags;

class PageRepository extends ModuleRepository
{
    use HandleTags;

    public function __construct(Page $model)
    {
        $this->model = $model;
    }
}
