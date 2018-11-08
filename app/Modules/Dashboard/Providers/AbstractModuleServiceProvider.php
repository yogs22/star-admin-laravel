<?php

namespace App\Modules\Dashboard\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

abstract class AbstractModuleServiceProvider extends ServiceProvider
{

    protected $namespace;

    protected $name;

    protected $defer = false;


    public function boot()
    {
        $this->registerViews();
        $this->registerWebRoutes();
        $this->bootModule();
    }

    /**
     * Register views.
     *
     * @return void
     */
    protected function registerViews(): void
    {
        $sourcePath = app_path('Modules/'.ucfirst($this->name).'/resources/views');

        if (file_exists($sourcePath)) {
            $viewPath = resource_path('views/modules/' . $this->name);


            $this->publishes([
                $sourcePath => $viewPath
            ], 'views');

            $this->loadViewsFrom(array_merge(array_map(function ($path) {
                return $path . '/modules/' . $this->name;
            }, $this->app['config']->get('view.paths')), [$sourcePath]), $this->name);
        }


    }

    /**
     * Register web routes.
     *
     * @return void
     */
    protected function registerWebRoutes(): void
    {

        $webRoutes = app_path('Modules/'.ucfirst($this->name).'/routes/web.php');
        if (file_exists($webRoutes)) {
            Route::namespace($this->namespace)
                ->prefix($this->name)
                ->group($webRoutes);
        }
    }

    public function bootModule()
    {
        // boot here whatever you want
    }



}