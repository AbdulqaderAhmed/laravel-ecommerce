<?php

use App\Http\Controllers\AdminCatagoriesController;
use App\Http\Controllers\AdminProduct;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::controller(LoginController::class)->group(function () {

    Route::get('/sign-in/redirect', 'redirectToGitHub')->name('github-redirect');

    Route::get('/github/callback', 'callBackFromGitHub');
});

Route::controller(AdminCatagoriesController::class)->middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/admin', 'index');
    Route::get('/admin/create', 'create');
    Route::get('/admin/items', 'items');
    Route::post('/admin/store', 'store');
    Route::delete('/admin/{id}', 'destroy');
});

Route::controller(AdminProduct::class)->middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/admin/product', 'index');
    Route::get('/admin/product/create', 'create');
    Route::post('/admin/product/store', 'store');
    Route::get('/admin/product/{id}', 'destroy');
    Route::get('/admin/product/update/{id}', 'update_product');
    Route::put('/admin/product/update/{id}', 'update');
});
