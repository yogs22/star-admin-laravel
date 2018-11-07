<?php


Route::get('/', 'DashboardController@index')->name('dashboard');
Route::get('/pages/{dir}/{page}', 'DashboardController@page')->name('dashboard.page');

