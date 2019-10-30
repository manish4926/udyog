<?php

namespace App\Http\Controllers;

use App\Event;
use App\Video;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EventsController extends Controller
{

	public function __construct()
    {
        //$user = Auth::user();    
        
        $this->middleware(function ($request, $next) {
            $user = Auth::user();      
            $recentpostedvideos = Video::orderBy('id','desc')->limit(4)->get();      
            view()->share(['user'=> $user,'recentpostedvideos' => $recentpostedvideos]);
            return $next($request);
        });
    }
    
    public function show(Request $request, Event $event)
    {
        return $event;

    }
}

