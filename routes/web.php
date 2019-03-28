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


Route::get('file','FileController@showUploadForm')->name('upload.file');

Route::post('file','FileController@storeFile');

Route::get('/','FileController@display');

Route::get('/video', function(){
	return view('main.video');
});
