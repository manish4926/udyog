<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Search;
use App\CompanyDetail;

use DB;
use Auth;

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

    /**Company Panel */
    public function companyPanel(Request $request)
    {
        $user = Auth::user();

        
        $companydetail = CompanyDetail::where('user_id',$user->id)->first();
        
        return view('company.dashboard',compact('companydetail'));
    }
}
