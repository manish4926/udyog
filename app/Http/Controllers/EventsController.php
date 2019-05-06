<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EventsController extends Controller
{
    
    public function show(Request $request, Event $event)
    {
        return $event;

    }

}
