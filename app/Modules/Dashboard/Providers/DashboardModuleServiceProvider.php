<?php

namespace App\Modules\Dashboard\Providers;

class DashboardModuleServiceProvider extends AbstractModuleServiceProvider
{
    protected $namespace = 'App\Modules\Dashboard\Http\Controllers';

    protected $name = 'dashboard';
}
