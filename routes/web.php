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
Auth::routes();
Route::resource('admin', 'AdminController');

Route::resource('user', 'UserController');

Route::resource('categories', 'CategoriesController');

Route::resource('article', 'ArticleController');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('auth/google', 'Auth\GoogleController@redirectToGoogle');
Route::get('auth/google/callback', 'Auth\GoogleController@handleGoogleCallback');

Route::get('/changePassword','HomeController@showChangePasswordForm');
Route::post('/changePassword','HomeController@changePassword')->name('changePassword');

Route::get('/', 'FrontEndController@index')->name('front');
Route::get('/{id}', 'FrontEndController@show')->name('detail');
Route::get('/list/{id}', 'FrontEndController@showCategory')->name('showCategory');

// Route::get('/admin', 'FrontEndController@index')->name('front');


// Route::get('/home', 'HomeController@index')->name('home');


