<?php

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
Route::group(['prefix' => 'directory'], function () 
{
    Route::get('/details',['as'=>'create','uses'=>'DirectoryController@create']);
    Route::post('/store',['as'=>'store','uses'=>'DirectoryController@store']);

    Route::get('/livesearch',['as'=>'IndustryList', 'uses'=>'DirectoryController@index']);

});


/*Job Controller*/
Route::group(['prefix' => 'job'], function () 
{
    Route::get('/post', ['as' => 'postjob', 'uses' =>'JobController@postJob']);

    Route::post('/post/submit', ['as' => 'postjobsubmit', 'uses' =>'JobController@postJobSubmit']);

    Route::get('/all', ['as' => 'alljob', 'uses' =>'PostingController@alljob']);

    Route::get('/post/alljobs/details/{job_id}', ['as' => 'getdisplay', 'uses' => 'PostingController@getdisplay']);   

    Route::any('/search',  ['as' => 'searchjob', 'uses' =>'PostingController@search']);

    Route::post('/search/searchcontent',  ['as' => 'searchcontent', 'uses' =>'PostingController@search']);

    Route::get('/application', ['as' => 'jobapplication', 'uses' =>'JobController@jobapplication']);

    Route::get('/application1', ['as' => 'application', 'uses' =>'JobController@application']);

    Route::post('/application1/submit', ['as' => 'applicationsubmit', 'uses' =>'JobController@applicationSubmit']);

   
});


/*Video Controller*/
Route::get('/','MainController@index');

/*Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});*/

Route::get('file','VideoController@showUploadForm')->name('uploadfile');
Route::post('file','FileController@storeFile');

/*Route::get('/','FileController@display');*/

Route::get('video/{id}/{slug?}', 'MainController@videothumb')->name('videothumb');
    //return $name;



/*Microsite*/
Route::group(['prefix' => 'company'], function () 
{
    Route::get('/', function () {
        return view('main.index');
    });

    Route::get('/microwebsite', function () {
        return view('main.microwebsite');
    });
});