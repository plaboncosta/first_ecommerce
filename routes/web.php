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

Route::get('/', 'WelcomeController@index')->name('welcome');
Route::get('/shop', 'ShopController@index')->name('shop');
Route::get('/product', 'ProductController@index')->name('product');
Route::resource('/cart', 'CartController');
Route::resource('/checkout', 'CheckoutController');
