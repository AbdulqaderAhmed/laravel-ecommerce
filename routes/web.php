<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::controller(LoginController::class)->group(function () {

    Route::get('/sign-in/redirect', 'redirectToGitHub')->name('github-redirect');

    Route::get('/github/callback', 'callBackFromGitHub');
});

Route::get('/test', [TestController::class, 'test']);

Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/admin', function () {
        return view('pages.dashboard');
    });
});
