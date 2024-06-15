<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\DashboardController;

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
})->name('home');

Route::post( 'login', [ LoginController::class, 'login' ] )->name('login');

Route::group(['middleware' => 'auth'], function(){
    Route::get( 'logout', [ LoginController::class, 'logout' ] )->name('logout');

    Route::get( 'dashboard', [ DashboardController::class, 'dashboard' ] )->name('dashboard');

    Route::prefix('users')->name('users.')->group(function(){

        Route::get( 'list', [ UserController::class, 'list' ] )->name('list');
        Route::get( 'show/{id}', [ UserController::class, 'show' ] )->name('show');
    });

    Route::prefix('articles')->name('articles.')->group(function(){

        Route::get( 'list', [ ArticleController::class, 'list' ] )->name('list');

        Route::get( 'create', [ ArticleController::class, 'create' ] )->name('create');
        Route::post( 'create', [ ArticleController::class, 'store' ] )->name('store');

        Route::get( 'edit/{id}', [ ArticleController::class, 'edit' ] )->name('edit');
        Route::put( 'edit/{id}', [ ArticleController::class, 'update' ] )->name('update');

        Route::delete( 'delete/{id}', [ ArticleController::class, 'delete' ] )->name('delete');
    });
});


