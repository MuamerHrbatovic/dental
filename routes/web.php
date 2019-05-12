<?php

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

Route::get('/home', 'HomeController@index')->name('home');

Route::group([
    'middleware' => 'admin',
    'prefix' => 'admin',
    'namespace' => 'Admin'
], function () {
    Route::get('/dashboard', 'AdminController@dashboard')->name('dashboard');
    Route::get('/icons', 'AdminController@icons')->name('icons');
    Route::get('/appointment', 'AppointmentController@index')->name('appointments');
    Route::resource('user', 'UserController');
    Route::get('/user', 'UserController@index')->name('users');
    Route::get('/user/{user}', 'UserController@show')->name('user');
});
