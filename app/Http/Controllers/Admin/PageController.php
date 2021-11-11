<?php

namespace App\Http\Controllers\Admin;

use A17\Twill\Http\Controllers\Admin\ModuleController;

class PageController extends ModuleController
{
    protected $moduleName = 'pages';

    protected $indexOptions = [
        'permalink' => false,
        'publish' => false,
    ];

    protected $titleColumnKey = 'name';

    protected $indexColumns = [
        'name' => [
            'title' => 'Name',
            'field' => 'name',
        ],
        'path' => [
            'title' => 'Path',
            'field' => 'path',
        ],
    ];

}
