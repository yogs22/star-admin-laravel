<?php

namespace App\Modules\Dashboard\Providers;

use Illuminate\Support\Facades\Auth;

class DashboardModuleServiceProvider extends AbstractModuleServiceProvider
{
    protected $namespace = 'App\Modules\Dashboard\Http\Controllers';

    protected $name = 'dashboard';

    public function bootModule()
    {
        view()->composer('dashboard::partials.*', function ($view) {
            $view->with('user', Auth::user());
        });
    }
}
