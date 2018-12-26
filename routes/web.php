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


Route::get('/', 'FrontendController@index'); //frontend view



Auth::routes();
//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', 'BackendController@index'); //backend view



//Category Route with prefix category
Route::prefix('category')->group(function() {

    Route::get('/save', 'CategoryController@index');
    Route::post('/save', 'CategoryController@save');
    Route::get('/manage', 'CategoryController@manage');
    Route::get('/edit/{id}', 'CategoryController@edit');
    Route::post('/edit', 'CategoryController@update');
    Route::get('/delete/{id}', 'CategoryController@destroy');

});

//Product Route with prefix product not yet done
Route::get('product/save', 'ProductController@index');
Route::post('product/save', 'ProductController@store');

Route::get('product/manage', 'ProductController@manage');

