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


Route::group(['prefix' => 'admin','middleware'=>'auth'],function(){
    Route::get('news/create','Admin\NewsController@add');
    Route::post('news/create', 'Admin\NewsController@create');
    Route::get('news', 'Admin\NewsController@index');
    Route::get('news/edit', 'Admin\NewsController@edit');
    Route::post('news/edit', 'Admin\NewsController@update');
    Route::get('news/delete', 'Admin\NewsController@delete');
});

//問題３
Route::get('XXX','AAAController@bbb');

//問題４
Route::group(['prefix' => 'admin/profile','middleware'=>'auth'],function(){
    Route::get('create','Admin\ProfileController@add');
    Route::post('create','Admin\ProfileController@create');
    Route::get('edit','Admin\ProfileController@edit');
    Route::post('edit','Admin\ProfileController@update');
    Route::get('index', 'Admin\ProfileController@index');
});




Auth::routes();

Route::get('/home','HomeController@index')->name('home');

Route::get('/', 'NewsController@index');
Route::get('/profile','ProfileController@index');




