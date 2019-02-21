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

Route::get('/hellow', function () {
    return 'Hello World';
});

Route::group(['prefix' => '/products'], function () {
    Route::get('/all', 'ProductController@all');
    Route::get('/bag', 'ProductController@bag');
    Route::get('/latest', 'ProductController@latest');
    Route::get('/discounts', 'ProductController@discounts');
});

Route::group(['prefix' => 'admin', 'middleware' => 'mustAdmin'], function () {
    Route::get('/dashboard', 'DashboardController@index');
    Route::get('/orders', 'DashboardController@orders');
});

Route::get('show-all-items', 'ItemController@showAllItems');

Route::resource('categories', 'CategoryController');

Route::get('/products/display', 'ProductController@showAll');
Route::get('/products/save', 'ProductController@saveNew');
// route param
Route::get('/products/{id}', 'ProductController@show');
// route param yang bersifat opsional
// *Route::get('/products/{id?}', 'ProductController@show');
Route::get('/products/list', 'ProductController@list')->name('products');
Route::post('/products/{id}', 'ProductController@create');
Route::match(['PUT', 'PATCH'], '/products/{id}', 'ProductController@update');
Route::get('search', 'ProductController@search');

Route::get('/users/{user_id}/comments/{comment_id}', 'UserController@showComment');

Route::group(['prefix' => 'latihan'], function () {
    Route::get('/kategori/all', 'CategoryController@index');
    Route::get('/kategori/search', 'CategoryController@serach');
    Route::get('/kategori/{id}/delete', 'CategoryController@delete');
    Route::get('/kategori/{id}/restore', 'CategoryController@restore');
    Route::get('/kategori/{id}/permanent-delete', 'CategoryController@permanentDelete');
});
