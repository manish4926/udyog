    <?php

/*Authentication Controller*/
Auth::routes();

Route::get('verifyEmailFirst','Auth\RegisterController@verifyEmailFirst')->name('verifyEmailFirst');
Route::get('verify/{email}/{verifyToken}','Auth\RegisterController@sendEmailDone')->name('sendEmailDone');


/*General/Main Controller*/
Route::get('/','MainController@index')->name('home');

/*
Route::get('/', function () {
    return view('main.index');
});*/

Route::get('/puneet', function () {
    return view('auth.companylogin');
});

/*
Route::get('/home', 'HomeController@index')->name('home');*/

/*Directory Listing*/
Route::group(['prefix' => 'directory'], function () 
{
    Route::get('/details',['as'=>'create','uses'=>'DirectoryController@create']);
    Route::post('/store',['as'=>'store','uses'=>'DirectoryController@store']);

    Route::get('/industrylist/{tag?}',['as'=>'IndustryList', 'uses'=>'DirectoryController@index']);

     /*   Route::get('/microweb', function () {
        return view('microweb');
    })->name('microwebsite');*/

        
});



/*Job Controller*/
Route::group(['prefix' => 'job'], function () 
{
    Route::get('/post', ['as' => 'postjob', 'uses' =>'JobController@postJob']);

    Route::post('/post/submit', ['as' => 'postjobsubmit', 'uses' =>'JobController@postJobSubmit']);

    Route::get('/all', ['as' => 'alljob', 'uses' =>'JobController@alljob']);

    Route::get('/post/alljobs/details/{job_id}', ['as' => 'getdisplay', 'uses' => 'JobController@getdisplay']);   

    Route::any('/search',  ['as' => 'searchjob', 'uses' =>'JobController@search']);

    Route::post('/search/searchcontent',  ['as' => 'searchcontent', 'uses' =>'JobController@search']);

    Route::get('/application1', ['as' => 'application', 'uses' =>'JobController@application']);

    Route::post('/application1/submit', ['as' => 'applicationsubmit', 'uses' =>'JobController@applicationSubmit']);




   
});


/*Video Controller*/






/*Route::get('/','FileController@display');*/

Route::get('video/{id}/{slug?}', 'MainController@videothumb')->name('videothumb');
    //return $name;

/*Company Admin */
Route::group(['prefix' => 'company/panel'], function () 
{
    
    Route::get('/',['as'=>'companypanel','uses'=>'MicrowebController@companyPanel']);

});
/*Microsite*/
Route::group(['prefix' => 'company'], function () 
{
    Route::get('/', function () {
        return view('main.index');
    });
    Route::get('/microweb/{slug}',['as'=>'microwebsite','uses'=>'MicrowebController@microweb']);

});


Route::get('/companylogin','Auth\RegisterController@companyregister');
Route::post('/companylogin2','Auth\RegisterController@CompanyValidate')->name('cregister');
//admin panel
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');


//dashboard

Route::group(['prefix' => 'admin', 'middleware'=>'auth'], function () {
    Route::get('/dashboard','VideoController@dashboard')->name('dashboard');
    
    //video

    Route::get('/video/upload','VideoController@upload')->name('uploadfile');
    Route::post('/video/upload','VideoController@storeFile');

    Route::get('/video/all','VideoController@fetch')->name('videoall');
    Route::get('/video/delete/{id}',[
        'uses' => 'VideoController@delete',
        'as' => 'video.delete'
    ]);
    Route::get('/video/update/{id}',[
        'uses' => 'VideoController@update',
        'as' => 'video.update'
    ]);
    Route::post('/video/save/{id}',[
        'uses' => 'VideoController@save',
        'as' => 'videosave'
    ]);

    //admin jobs panel

    Route::get('/jobs/active', ['as' => 'activejobs', 'uses' =>'AdminController@activejobs']);

    Route::get('/post/applicants/{job_id}', ['as' => 'getapplicants', 'uses' => 'AdminController@getapplicants']);

    Route::get('/jobs/expired', ['as' => 'expjobs', 'uses' =>'AdminController@expjobs']);


    //Route::post('/alljobs/details/{job_id}', ['as' => 'application', 'uses' =>'AdminController@application']);

    });



//Main Page Routes

Route::group(['prefix' => 'main'], function () 
{
    Route::get('/currentlaw', ['as' => 'currentLaw', 'uses' =>'MainController@currentLaw']);

    Route::get('/labourlaws', ['as' => 'labourlaws', 'uses' =>'MainController@labourLaws']);

    Route::get('/taxation', ['as' => 'taxation', 'uses' =>'MainController@taxation']);

    Route::get('/presentlydevelopment', ['as' => 'presentlydevelopment', 'uses' =>'MainController@presentlyDevelopment']);

    Route::get('/newtechnology', ['as' => 'newtechnology', 'uses' =>'MainController@newTechnology']);

    Route::get('/newproducts', ['as' => 'newproducts', 'uses' =>'MainController@newProducts']);

    Route::get('/health', ['as' => 'health', 'uses' =>'MainController@health']);

    Route::get('/growbusiness', ['as' => 'growbusiness', 'uses' =>'MainController@growBusiness']);

    Route::get('/regarademarks', ['as' => 'regarademarks', 'uses' =>'MainController@regAradeMarks']);



});

