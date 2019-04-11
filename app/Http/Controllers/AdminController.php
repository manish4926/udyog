<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use App\job_opening;

use DB;
use Auth;
use Carbon\Carbon;


class AdminController extends Controller
{
    public function activejobs(Request $request)
    {
        $joblist = job_opening::where('expdate','>=',Carbon::today()->toDateString())
        				->get();
        				//dd($joblist);
        return view('admin.activejobs')->with(['job_active'=>$joblist]);  
    }

    public function expjobs(Request $request)
    {
        $joblist = job_opening::where('expdate','<',Carbon::today()->toDateString())
        				->get();
        				//dd($joblist);
        return view('admin.expjobs')->with(['job_expiry'=>$joblist]);
    }
	

	public function getapplicants(Request $request)
    {
        $applicants= job_opening::where('job_id' , $request->job_id)->get();
        return view('admin.allapplicants')->with(['job_opening'=>$applicants]);  
    }

}
