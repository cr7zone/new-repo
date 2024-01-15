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

Auth::routes();

Route::get('/', 'HomeSpace\HomeController@index')->name('home');
Route::get('/about', 'HomeSpace\HomeController@about')->name('about');
Route::get('/service', 'HomeSpace\HomeController@service')->name('service');
Route::get('/pricing', 'HomeSpace\HomeController@pricing')->name('pricing');
Route::get('/contact', 'HomeSpace\HomeController@contact')->name('contact');


Route::prefix('panel')->group(function () {
    Route::get('/',"PanelSpace\PanelController@dashboard")->name("dashboard");
});