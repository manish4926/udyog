<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;
use App\Http\Controllers\Controller;
use DB;
use App\Directory;
use App\job_opening;


class MainController extends Controller
{
    public function index() {
        //  $files = File::limit(6)->get();
        // return view('main.index')->with('files',$files);
         $videos = Video::limit(6)->get();
         $directory=Directory::orderBy('c_id')->limit(3)->get();

          $jobs = job_opening::orderBy('job_id')->limit(5)->get();
        return view('main.index',compact('directory','videos','jobs'));


//        return view('main.index')->with(['videos'=>$videos, 'jobs' => $jobs]);
//dd('hello');
        /*$videos = Video::orderBy('id','desc')->first();
        dd(json_decode($videos->upload)[0]->download_link);
        return view('main.video',['videos'=>$videos]);*/
    }

    public function videothumb(Request $request){
        //$user = DB::table('files')->where('name', $name )->value('name');
        $video = Video::where('id', $request->id)->first();
        // dd($video);
        //$tags = Video::where('id',$request->id)->get()->all();

        $all = Video::limit(6)->get();

        return view('video.video')->with('video',$video)->with('all',$all);
    }



    //current Law function

   public function currentLaw(Request $request)
    {
        return view('main.currentLaw'); 
    }


    //labour Laws function

   public function labourLaws(Request $request)
    {
        return view('main.labourlaws'); 
    }


    //taxation function

   public function taxation (Request $request)
    {
        return view('main.taxation'); 
    }


    //Presently Development function

   public function presentlyDevelopment(Request $request)
    {
        return view('main.presentlydevelopment'); 
    }


    //new technology function

    public function newTechnology(Request $request)
    {
        return view('main.newtechnology'); 
    }


    //new products function

    public function newProducts(Request $request)
    {
        return view('main.newproducts'); 
    }

    
    //health function

    public function health(Request $request)
    {
        return view('main.health'); 
    }


    //how to grow business function

    public function growBusiness(Request $request)
    {
        return view('main.growbusiness'); 
    }

    
     //registerations and arade marks function 

     public function regAradeMarks(Request $request)
    {
                 
        return view('main.regarademarks');
    }



}
