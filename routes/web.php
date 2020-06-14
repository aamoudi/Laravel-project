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

Route::get('/', 'HomeController@index')->name('home');
Route::get('contact', 'ContactController@contact');
Route::get('singleProduct/{product}', 'HomeController@singleProduct')->name('singleProduct');
Route::get('add/comment/{product}', 'HomeController@add_comment')->name('addComment');

#Shop pages
Route::get('category', 'ShopeController@category');
Route::get('checkout', 'ShopeController@checkout');
Route::get('cart', 'ShopeController@cart');
Route::get('confirmation', 'ShopeController@confirmation');

#Auth
Route::get('login', 'Auth\loginController@login')->name('login');
Route::post('authenticate', 'Auth\LoginController@authenticate')->name('authenticate');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');

#Admin
Route::namespace('Admin')->middleware('auth')->prefix('admin')->name('admin.')->group(function () {
    Route::get('dashboard', 'AdminController@home')->name('dashboard');
    Route::resource('users', 'UserController');
    Route::resource('products', 'ProductController');
    Route::resource('categories', 'CategoryController');
});

