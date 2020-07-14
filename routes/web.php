<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::prefix('admin')
    ->middleware(['setTheme:ADMIN_THEME'])
    ->namespace('Admin')
    ->group(function() {

    Auth::routes(['register' => false]);

    Route::get('/', 'HomeController@index');

    Route::prefix('settings')
        ->namespace('Settings')
        ->group(function() {

        Route::get('/', 'SettingsController@index');
    });
});

Route::get('/', 'HomeController@index')->name('home');
