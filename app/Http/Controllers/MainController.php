<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
    public function index() {
        return view('main.video');
//dd('hello');
        $videos = Video::orderBy('id','desc')->first();
        dd(json_decode($videos->upload)[0]->download_link);
        return view('main.video',['videos'=>$videos]);
    }

}
