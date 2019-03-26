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


//Route::get('/', function () {
//    return view('main.video');
//});

Route::get('/','MainController@index');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/testing','VideoController@index');

/*Route::get('/', function () {
    return view('main.index');
});*/


Route::get('file','FileController@showUploadForm')->name('upload.file');

Route::post('file','FileController@storeFile');

/*Route::get('/','FileController@display');*/

