<?php

Route::group(['middleware' => 'web'], function (\Illuminate\Routing\Router $router) {

    // Authentication Routes...
    $router->get('login', 'LoginController@showLoginForm')->name('login');
    $router->post('login', 'LoginController@login');
    $router->post('logout', 'LoginController@logout')->name('logout');

    // Registration Routes...
    $router->get('register', 'RegisterController@showRegistrationForm')->name('register');
    $router->post('register', 'RegisterController@register');

    // Password Reset Routes...
    $router->get('password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('password.request');
    $router->post('password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    $router->get('password/reset/{token}', 'ResetPasswordController@showResetForm')->name('password.reset');
    $router->post('password/reset', 'ResetPasswordController@reset')->name('password.update');

    // Email Verify
    $router->get('email/verify', 'VerificationController@show')->name('verification.notice');
    $router->get('email/verify/{id}', 'VerificationController@verify')->name('verification.verify');
    $router->get('email/resend', 'VerificationController@resend')->name('verification.resend');

    // Social Login
    $router->get('/login/{social}', 'SocialLoginController@redirectToProvider')->where('social', 'twitter|facebook|linkedin|google|github|bitbucket')->name('social.login');
    $router->get('/login/{social}/callback', 'SocialLoginController@handleProviderCallback')->where('social', 'twitter|facebook|linkedin|google|github|bitbucket');

});


