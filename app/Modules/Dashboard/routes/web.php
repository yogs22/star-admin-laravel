<?php


Route::group(['middleware' => ['web', 'auth', 'verified']], function (\Illuminate\Routing\Router $router) {
    $router->get('/', 'DashboardController@index')->name('dashboard');
    $router->get('/pages/{dir}/{page}', 'DashboardController@page')->name('dashboard.page');
});
