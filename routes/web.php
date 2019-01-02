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



Auth::routes();
//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', 'BackendController@index'); //backend view

Route::get('/', 'FrontendController@index'); //frontend view
Route::get('/view_product/{id}','FrontendController@product_details');

//Category Route with prefix category
Route::prefix('category')->group(function() {
    Route::get('/save', 'CategoryController@index');
    Route::post('/save', 'CategoryController@save');
    Route::get('/manage', 'CategoryController@manage');
    Route::get('/edit/{id}', 'CategoryController@edit');
    Route::post('/edit', 'CategoryController@update');
    Route::get('/delete/{id}', 'CategoryController@destroy');
});//Group Route



//Product Route with prefix product
Route::prefix('product')->group(function() {
    Route::get('/save', 'ProductController@index');
    Route::post('/save', 'ProductController@store');
    Route::get('/manage', 'ProductController@manage');
    Route::get('/view/{id}', 'ProductController@singlePage');
    Route::get('/edit/{id}', 'ProductController@edit');
    Route::post('/edit', 'ProductController@update');
    Route::get('/delete/{id}', 'ProductController@destroy');
});//Group Route
