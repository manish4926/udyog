<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;
use App\Http\Controllers\Controller;
use DB;
use App\Search;
use App\job_opening;


class MainController extends Controller
{
    public function index() {
         $videos = Video::all();

         $search=Search::whereIn('c_id',[1,2,3])->get();
        return view('main.index',compact('search','videos'));

         $jobs = job_opening::orderBy('job_id')->limit(10)->get();
        return view('main.index')->with(['videos'=>$videos, 'jobs' => $jobs]);
//dd('hello');
        /*$videos = Video::orderBy('id','desc')->first();
        dd(json_decode($videos->upload)[0]->download_link);
        return view('main.video',['videos'=>$videos]);*/
    }

    public function videothumb(Request $request){
        //$user = DB::table('files')->where('name', $name )->value('name'); 
        $video = Video::where('id', $request->id)
                        ->first();

        return view('video.video')->with('video',$video);

        
    }
}
