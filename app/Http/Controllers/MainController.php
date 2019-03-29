<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\File;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
    public function index() {
         $files = File::all();
        return view('main.index')->with('files',$files);
//dd('hello');
        $videos = Video::orderBy('id','desc')->first();
        dd(json_decode($videos->upload)[0]->download_link);
        return view('main.video',['videos'=>$videos]);
    }
}
