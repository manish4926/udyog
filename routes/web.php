<?php

/*Authentication Controller*/
Auth::routes();

Route::get('admin/videos/getcurrentvideo', 'LivevideoController@getcurrentvideo')->name('getcurrentvideo');

//Route::post('/companyuserregister','Auth\RegisterController@CompanyuserValidate')->name('curegister');

Route::get('/companylogin','Auth\RegisterController@companyregister')->name('clogin');
//Route::post('/companylogin2','Auth\RegisterController@CompanyValidate')->name('cregister');
Route::post('/checkcompany','Auth\RegisterController@checkCompany')->name('checkcompany');

Route::get('verifyEmailFirst','Auth\RegisterController@verifyEmailFirst')->name('verifyEmailFirst');
Route::get('verify/{email}/{verifyToken}','Auth\RegisterController@sendEmailDone')->name('sendEmailDone');



/*General/Main Controller*/
Route::get('/','MainController@index')->name('home');

Route::get('/currentaffairs', ['as' => 'currentaffairs', 'uses' =>'MainController@currentAffairs']);

Route::get('/training', ['as' => 'training', 'uses' =>'MainController@training']);


Route::get('/currentlaw', ['as' => 'currentLaw', 'uses' =>'MainController@currentLaw']);

Route::get('/labourlaws', ['as' => 'labourlaws', 'uses' =>'MainController@labourLaws']);

Route::get('/taxation', ['as' => 'taxation', 'uses' =>'MainController@taxation']);

Route::get('/presentlydevelopment', ['as' => 'presentlydevelopment', 'uses' =>'MainController@presentlyDevelopment']);

Route::get('/newtechnology', ['as' => 'newtechnology', 'uses' =>'MainController@newTechnology']);

Route::get('/newproducts', ['as' => 'newproducts', 'uses' =>'MainController@newProducts']);

Route::get('/health', ['as' => 'health', 'uses' =>'MainController@health']);

Route::get('/growbusiness', ['as' => 'growbusiness', 'uses' =>'MainController@growBusiness']);

Route::get('/regarademarks', ['as' => 'regarademarks', 'uses' =>'MainController@regAradeMarks']);

Route::get('/latestjobs', ['as' => 'latestjobs', 'uses' =>'MainController@mainalljob']);




/*Directory Listing*/
Route::group(['prefix' => 'directory'], function ()
{
    Route::get('/details',['as'=>'directorycreate','uses'=>'DirectoryController@create']);
    Route::post('/store',['as'=>'store','uses'=>'DirectoryController@store']);

    Route::get('/industrylist/{tag?}',['as'=>'industrylist', 'uses'=>'DirectoryController@index']);

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

    Route::get('/alljobs/details/{job_id}', ['as' => 'getdisplay', 'uses' => 'JobController@getdisplay']);

    Route::any('/search',  ['as' => 'searchjob', 'uses' =>'JobController@search']);

    Route::post('/search/searchcontent',  ['as' => 'searchcontent', 'uses' =>'JobController@search']);

    Route::get('/applicationtrial', ['as' => 'applicationdata', 'uses' =>'JobController@application']);

    Route::post('/jobapplication', ['as' => 'application', 'uses' =>'JobController@applyjob']);

    Route::post('/application1/submit', ['as' => 'applicationsubmit', 'uses' =>'JobController@applicationSubmit']);


});

/*Video Controller*/


/*Route::get('/','FileController@display');*/

Route::get('video/{id}/{slug?}', 'MainController@videothumb')->name('videothumb');
    //return $name;

/*Company Admin 
Route::group(['prefix' => 'company/panel'], function ()
{

    Route::get('/',['as'=>'companypanel','uses'=>'MicrowebController@companyPanel']);

}); */

/*Company Admin */
Route::group(['prefix' => 'company/panel','middleware' => 'roles', 'roles' => ['Company']], function ()
{
    Route::get('/dashboard',['as'=>'companydashboard','uses'=>'MicrowebController@dashboard']);
    Route::get('/companyedit',['as'=>'companypanel','uses'=>'MicrowebController@companyPanel']);
    Route::get('/materialedit',['as'=>'materialpanel','uses'=>'MicrowebController@materialPanel']);
    Route::post('/materialedit/submit',['as'=>'materialpanelsubmit','uses'=>'MicrowebController@materialPanelSubmit']);
    Route::get('/ceopanel',['as'=>'ceopanel','uses'=>'MicrowebController@ceoPanel']); 
    Route::get('/aboutus',['as'=>'aboutuspanel','uses'=>'MicrowebController@aboutus']); 
    Route::get('/testimonialpanel',['as'=>'testimonialpanel','uses'=>'MicrowebController@testimonial']); 
    Route::get('/jobpostpannel',['as'=>'jobpostpanel','uses'=>'MicrowebController@jobpost']); 
    Route::post('/dashboard',['as'=>'dashboard2','uses'=>'MicrowebController@makechanges']);
    Route::get('/delete/{id}',['as'=>'delete','uses'=>'MicrowebController@deletion']); 
    Route::get('/applicantslist/{job_id}',['as'=>'applicantslist','uses'=>'MicrowebController@applicantslist']);
    Route::get('/clogo',['as'=>'clogo','uses'=>'MicrowebController@clogo']); 
    Route::get('/contactus',['as'=>'contactpannel','uses'=>'MicrowebController@contactus']); 
});



/*Microsite*/
Route::group(['prefix' => 'company'], function ()
{
    Route::get('/', function () {
        return view('main.index');
    });
    Route::get('/microweb/{slug}',['as'=>'microwebsite','uses'=>'MicrowebController@microweb']);

});



//Route::get('/companylogin','Auth\RegisterController@companyregister');
//Route::post('/companylogin2','Auth\RegisterController@CompanyValidate')->name('cregister');
//admin panel
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');


/*Admin*/
Route::group(['prefix' => 'admin', 'middleware'=>['auth','roles'],'roles' => ['Admin']], function ()
{
    Route::get('/dashboard','VideoController@dashboard')->name('dashboard');



    //video

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

    //category
    Route::get('/category/page',[
        'uses' => 'VideoCategoryController@page',
        'as' => 'categorypage'
    ]);
    Route::post('/category/add',[
        'uses' => 'VideoCategoryController@add',
        'as' => 'addcategory'
    ]);
    Route::get('/category/all','VideoCategoryController@fetch')->name('allcategory');

    Route::get('/category/delete/{id}',[
        'uses' => 'VideoCategoryController@delete',
        'as' => 'category.delete'
    ]);
    Route::get('/category/update/{id}',[
        'uses' => 'VideoCategoryController@update',
        'as' => 'category.update'
    ]);
    Route::post('/category/save/{id}',[
        'uses' => 'VideoCategoryController@save',
        'as' => 'savecategory'
    ]);

    //tostr notifications




    //admin jobs panel

    Route::get('/jobs/pending', ['as' => 'pendingjobs', 'uses' =>'AdminController@pendingjobs']);

    Route::get('/jobs/active', ['as' => 'activejobs', 'uses' =>'AdminController@activejobs']);

    Route::post('/jobs/active/submit', ['as' => 'activejobssubmit', 'uses' =>'AdminController@activeJobsSubmit']);

    Route::post('/jobs/delete/submit', ['as' => 'deletejobssubmit', 'uses' =>'AdminController@deleteJobsSubmit']);

    Route::get('/post/applicants/{job_id}', ['as' => 'getapplicants', 'uses' => 'AdminController@getapplicants']);

    Route::get('/jobs/expired', ['as' => 'expjobs', 'uses' =>'AdminController@expjobs']);

    Route::get('/all', ['as' => 'alljobs', 'uses' =>'AdminController@alljobs']);


    //Admin Event Panel

    Route::get('/event/add', ['as' => 'addevent', 'uses' =>'AdminController@addevent']);

    Route::post('/event/add/submit', ['as' => 'addeventSubmit', 'uses' =>'AdminController@addeventSubmit']);

    Route::get('/event/all', ['as' => 'allevents', 'uses' =>'AdminController@allevents']);

    Route::get('/event/update/{id}', ['as' => 'updateevent', 'uses' =>'AdminController@updateevent']);

    Route::post('/events/delete/submit', ['as' => 'deleteEvent', 'uses' =>'AdminController@deleteEvent']);

    //Admin Advertisement Panel
   
    Route::get('/advt/add',['as' => 'addadvt', 'uses' =>'AdminController@addadvt']);
    Route::post('/advt/add/submit', ['as' => 'addadvtSubmit', 'uses' =>'AdminController@addadvtSubmit']);
    Route::get('/advt/all', ['as' => 'alladvt', 'uses' =>'AdminController@alladvts']);   
    Route::post('/advts/delete/submit', ['as' => 'deleteAdvt', 'uses' =>'AdminController@deleteAdvt']);
});

    

//company job search

Route::get('/candidatesearch', ['as' => 'candidatesearch', 'uses' =>'JobController@candidatesearch']);


//Admin Live Video Scheduler
    
    Route::resource('admin/videos','LivevideoController');
    Route::delete('admin/deleteitem/{id}', 'LivevideoController@destroy')->name('videoinfo.delete');
    Route::post('admin/videos/updateall', 'LivevideoController@updateAll')->name('videoupdateall');
    //Route::patch('admin/videos/liveVideos/{id}','LivevideoController@updateLive')->name('updateLiveVideo');
    Route::post('admin/videos/updateAllLive', 'LivevideoController@updateAllLive')->name('videoupdatealllive');
    Route::post('admin/videos/getnextvideo', 'LivevideoController@getNextVideo')->name('getnextvideo');
// moving from all to live video
    Route::any('admin/videos/liveVideos/{id?}','LivevideoController@moveToLive')->name('moveToLive');



Route::group(['namespace' => 'Admin'], function ()
{
    require_once(__DIR__ . "/backend.php");
});


//userprofile
Route::get('/userprofile/{userid}',['as' => 'userprofile', 'uses' =>'CandidatedataController@userprofile']);
Route::get('/editprofile/{userid}',['as' => 'editprofile', 'uses' =>'CandidatedataController@editprofile']);

// //uploadAd
// Route::get('/uploadad',['as' => 'uploadad', 'uses' =>'MainController@uploadad']);

// //uploadAd
// Route::post('/uploadadsubmit',['as' => 'uploadadsubmit', 'uses' =>'MainController@uploadadsubmit']);

//Main Search

Route::any('/search',['as' => 'mainsearch', 'uses' =>'MainController@mainsearch']);

Route::post('/searchresult',['as' => 'mainsearchresult', 'uses' =>'MainController@mainsearch']);


