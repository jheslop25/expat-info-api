<?php

namespace App\Http\Controllers\Admin;

use A17\Twill\Http\Controllers\Admin\ModuleController;

class ModuleNameController extends ModuleController
{
    protected $moduleName = 'moduleNames';
    
    protected $indexOptions = [
        'permalink' => false
    ];
    
}
