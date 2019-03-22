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
    return view('main.index');
});

Route::get('/details',['as'=>'create','uses'=>'PostController@create']);
Route::post('/store',['as'=>'store','uses'=>'PostController@store']);

Route::get('/search', 'SearchController@search');
Route::post('/result', 'SearchController@result');

Route::get('/livesearch', 'LiveSearch@index');
Route::get('/livesearch/action', 'LiveSearch@action')->name('livesearch.action');