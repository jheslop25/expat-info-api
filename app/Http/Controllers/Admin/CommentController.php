<?php

namespace App\Http\Controllers\Admin;

use A17\Twill\Http\Controllers\Admin\ModuleController;
use App\Repositories\PageRepository;
use App\Repositories\PostRepository;

class CommentController extends ModuleController
{
    protected $moduleName = 'comments';

    protected $indexOptions = [
        'permalink' => false,
        'publish' => false,
        'skipCreateModal' => 'edit',
    ];

    protected $titleColumnKey = 'body';

    protected $indexColumns = [
        'body' => [
            'title' => 'Body',
            'field' => 'body',
        ],
        'post' => [
            'title' => 'Post',
            'relationship' => 'post',
            'field' => 'title'
        ],
    ];

    protected function formData($request): array
    {
        return [
            'posts' => app()->make(PostRepository::class)->listAll()
        ];
    }
}
