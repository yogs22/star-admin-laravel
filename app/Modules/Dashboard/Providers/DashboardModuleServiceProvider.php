<?php

namespace App\Modules\Dashboard\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class DashboardModuleServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */

    protected $namespace = 'App\Modules\Dashboard\Http\Controllers';

    protected $moduleName = 'dashboard';

    protected $defer = false;

    /**
     * Boot the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerViews();
        $this->registerRoutes();
    }


    /**
     * Register views.
     *
     * @return void
     */
    public function registerViews()
    {
        $viewPath = resource_path('views/modules/'.$this->moduleName);

        $sourcePath = __DIR__ . '/../resources/views';

        $this->publishes([
            $sourcePath => $viewPath
        ], 'views');

        $this->loadViewsFrom(array_merge(array_map(function ($path) {
            return $path . '/modules/'.$this->moduleName;
        }, $this->app['config']->get('view.paths')), [$sourcePath]), $this->moduleName);
    }


    protected function registerRoutes()
    {
        Route::middleware(['web','auth','verified'])
            ->namespace($this->namespace)
            ->prefix($this->moduleName)
            ->group(__DIR__ . '/../routes/web.php');
    }


}
