<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/


Route::resource('categorys', 'CategoryController');
Route::get('/del/{id}', 'CategoryController@hapus');
Route::get('searchcat','CategoryController@search');
Route::resource('product', 'ProductsController');
Route::get('/delete/{id}', 'ProductsController@delete');
Route::get('searchpro', 'ProductsController@search');
Auth::routes();
Route::get('/detailproduct/{id}', 'FrontendController@show');
Route::get('/detail', 'LayoutController@index');
Route::resource('cart', 'CartController');
Route::get('/allproducts', 'FrontendController@allproducts');
Route::get('/shirt', 'FrontendController@tshirt');
Route::get('/jackets', 'FrontendController@jackets');
Route::get('/bags', 'FrontendController@bags');

Route::get('/home', 'HomeController@index');
Route::get('/', 'FrontendController@index');


