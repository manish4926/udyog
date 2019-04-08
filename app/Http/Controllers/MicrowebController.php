<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Search;

use DB;

class MicrowebController extends Controller
{
        function microweb(Request $request)
    {

        if(!empty($request->slug))
        {
            $sites = Search::where('slug',$request->slug)->first(); 
        }
        return view('microweb',compact('sites'));
    }
}
