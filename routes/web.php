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





/*Authentication Controller*/
Auth::routes();

Route::get('verifyEmailFirst','Auth\RegisterController@verifyEmailFirst')->name('verifyEmailFirst');
Route::get('verify/{email}/{verifyToken}','Auth\RegisterController@sendEmailDone')->name('sendEmailDone');


/*General/Main Controller*/
Route::get('/', function () {
    return view('main.index');
});

Route::get('/home', 'HomeController@index')->name('home');


/*Directory Listing*/
Route::get('/details',['as'=>'create','uses'=>'PostController@create']);
Route::post('/store',['as'=>'store','uses'=>'PostController@store']);

Route::get('/search', 'SearchController@search');
Route::post('/result', 'SearchController@result');

Route::get('/livesearch', 'LiveSearch@index');
Route::get('/livesearch/action', 'LiveSearch@action')->name('livesearch.action');


/*Job Controller*/
Route::group(['prefix' => 'job'], function () 
{
    Route::get('/post', ['as' => 'postjob', 'uses' =>'JobController@postJob']);

    Route::post('/post/submit', ['as' => 'postjobsubmit', 'uses' =>'JobController@postJobSubmit']);

    Route::get('/all', ['as' => 'alljob', 'uses' =>'PostingController@alljob']);

    Route::get('/post/alljobs/details/{job_id}', ['as' => 'getdisplay', 'uses' => 'PostingController@getdisplay']);   

    Route::get('/search',  ['as' => 'search', 'uses' =>'PostingController@search']);

    Route::post('/search/searchcontent',  ['as' => 'searchcontent', 'uses' =>'PostingController@searchcontent']);
   

});

/*Video Controller*/
Route::get('/','MainController@index');

/*Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});*/


Route::get('file','FileController@showUploadForm')->name('upload.file');

Route::post('file','FileController@storeFile');

/*Route::get('/','FileController@display');*/