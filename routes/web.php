<?php

use App\Admin\Controllers\AuthController;
use App\Http\Controllers\Business\BusinessController;
use App\Http\Controllers\Category\CategoryController;
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

Route::get('/', function () {
    return redirect('/login');
});

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'signin'])->name('signin');

Route::group(['middleware' => ['auth.check']], function () {
    Route::get('/create/business', [BusinessController::class, 'createBusiness'])->name('create.business');
    Route::post('/store/business', [BusinessController::class, 'store'])->name('store.business');
});


Route::group(['prefix' => 'dashboard', 'middleware' => ['auth.check', 'check.user.business'], 'as' => 'dashboard.'], function () {

    Route::get('/home', [DashboardController::class, 'index'])->name('index');
    Route::get('/pos', [DashboardController::class, 'pos'])->name('pos');
    Route::get('/sales', [DashboardController::class, 'sales'])->name('sales');

    // 
    Route::get('/customer', [DashboardController::class, 'customer'])->name('customer');

    // category realated routes
    Route::get('/category', [DashboardController::class, 'category'])->name('category');
    Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');

    Route::get('/product', [DashboardController::class, 'product'])->name('product');
    Route::get('/report', [DashboardController::class, 'report'])->name('report');
    Route::get('/setting', [DashboardController::class, 'setting'])->name('setting');
});
