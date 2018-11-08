<?php

namespace App\Modules\Auth\Providers;

use App\Modules\Dashboard\Providers\AbstractModuleServiceProvider;

class AuthModuleServiceProvider extends AbstractModuleServiceProvider
{
    protected $namespace = 'App\Modules\Auth\Http\Controllers';

    protected $name = 'auth';
}
