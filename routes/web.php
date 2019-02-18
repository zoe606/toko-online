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

Route::get('/product/display', 'ProductController@showAll');
Route::get('/product/save', 'ProductController@saveNew');
// route param
Route::get('/product/{id}', 'ProductController@show');
// route param yang bersifat opsional
// *Route::get('/product/{id?}', 'ProductController@show');

Route::get('/pintu-masuk', function () {
    return 'Selamat Datang di pintu masuk!';
});

Route::get('/users/{user_id}/comments/{comment_id}', 'UserController@showComment');
