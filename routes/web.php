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

Route::get('/', 'HomeController@get');
Route::get('/home', 'HomeController@get')->name('home');

Route::get('/login', 'Auth\LoginController@showLoginForm')->name('auth.login');
Route::post('/login', 'Auth\LoginController@login');

Route::get('/logout', 'Auth\LoginController@logout')->name('auth.logout');

Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('auth.register');
Route::post('/register', 'Auth\RegisterController@register');

Route::get('/users', 'UserController@index')->name('users');
Route::get('/users/add', 'UserController@add')->name('users.add');
Route::post('/users/add', 'UserController@addPost');
