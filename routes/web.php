<?php

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

Route::get('/', 'PagesController@pages')->name('page');

Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function() {
    Route::get('/login', 'AccountController@login')->name('login');
    Route::get('/', 'DashboardController@index')->name('admin');
});