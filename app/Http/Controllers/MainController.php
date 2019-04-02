<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
    public function index() {
         $videos = Video::all();
        return view('main.index')->with('videos',$videos);
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
