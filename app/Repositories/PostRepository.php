<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleSlugs;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\Post;

class PostRepository extends ModuleRepository
{
    use HandleSlugs;

    public function __construct(Post $model)
    {
        $this->model = $model;
    }

    public function afterSave($object, $fields)
    {
        $object->pages()->sync($fields['pages'] ?? []);

        parent::afterSave($object, $fields);
    }
}
