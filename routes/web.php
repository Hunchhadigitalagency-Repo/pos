<?php

use App\Admin\Controllers\AuthController;
use App\Http\Controllers\Dashboard\DashboardController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',function(){
    return redirect('/login');
});

Route::get('/login', [AuthController::class, 'login'])->name('login');

Route::group(['prefix' => 'dashboard',/* 'middleware' => 'auth',*/ 'as' => 'dashboard.'], function () {

    Route::get('/home', [DashboardController::class, 'index'])->name('index');
});
