<?php

use App\Admin\Controllers\Business\BusinessController;
use App\Admin\Controllers\HomeController;
use App\Admin\Controllers\User\UserAdminController;
use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');

    // business
    $router->resource('businesses', BusinessController::class);
    // users
    $router->get('/users', [UserAdminController::class,'users'])->name('user');
    $router->get('/users/create', [UserAdminController::class,'create'])->name('user.create');
    $router->post('/users/create', [UserAdminController::class,'store'])->name('user.store');


    

});
