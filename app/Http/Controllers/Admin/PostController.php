<?php

namespace App\Http\Controllers\Admin;

use A17\Twill\Http\Controllers\Admin\ModuleController;
use App\Repositories\PageRepository;

class PostController extends ModuleController
{
    protected $moduleName = 'posts';

    protected $indexOptions = [
        'permalink' => false,
        'publish' => false,
    ];

    protected $indexColumns = [
        'title' => [
            'title' => 'Title',
            'field' => 'title',
        ],
        'slug' => [
            'title' => 'Slug',
            'field' => 'slug',
        ]
    ];

    protected function formData($request): array
    {
        return [
            'pages' => app()->make(PageRepository::class)->listAll('name')
        ];
    }
}
