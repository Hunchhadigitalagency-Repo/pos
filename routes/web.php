<?php

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
    return 'hello';
});

Route::prefix('dashboard')->middleware('auth')->group(function () {
    // Dashboard home page
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');

    // Other dashboard routes
    // ...

    // Example of nested routes
    Route::prefix('settings')->group(function () {
        Route::get('/', [DashboardController::class, 'settings'])->name('dashboard.settings');
        // Other settings routes
        // ...
    });
});