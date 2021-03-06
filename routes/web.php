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

// Website Route
Route::get('/', 'WelcomeController@index')->name('welcome');
Route::get('/shop', 'ShopController@index')->name('shop');
Route::get('/product/show/{slug}', 'ProductController@show')->name('product.show');
Route::get('/product/compare/{slug}', 'ProductController@compare')->name('product.compare');
Route::get('/product/uncompare/{slug}', 'ProductController@uncompare')->name('product.uncompare');
Route::resource('/cart', 'CartController');
Route::resource('/checkout', 'CheckoutController')->middleware('auth');
Route::get('/refresh_captcha', 'HomeController@refreshCaptcha')->name('refresh_captcha');
Route::post('/search', 'SearchController@index')->name('search');
// Route::post('/search/autocomplete', 'SearchController@search')->name('search.autocomplete');


Auth::routes();


// Admin Route
Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth', 'admin']], function(){
    Route::resource('/dashboard', 'DashboardController');
    Route::get('slider/delete/{id}', 'SliderController@delete')->name('slider.delete');
    Route::resource('/slider', 'SliderController');
    Route::get('category/delete/{id}', 'CategoryController@delete')->name('category.delete');
    Route::resource('/category', 'CategoryController');
    Route::get('product/delete/{id}', 'ProductController@delete')->name('product.delete');
    Route::resource('/product', 'ProductController');
    Route::get('specification/delete/{id}', 'SpecificationController@delete')->name('specification.delete');
    Route::resource('/specification', 'SpecificationController');
});




Route::get('/empty', function(){
	Cart::destroy();
	return 'Destroyed Successfully';
});

