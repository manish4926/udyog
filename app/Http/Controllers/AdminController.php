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

    
    public function pendingjobs(Request $request)
    {
        $joblist = job_opening::where('expdate','>=',Carbon::today()->toDateString())
                        ->where('status',0)
                        ->where('del',0)
                        ->get();
        return view('admin.job.pendingjobs')->with(['job_active'=>$joblist]);
    }

    public function activejobs(Request $request)
    {
        $joblist = job_opening::where('expdate','>=',Carbon::today()->toDateString())
                        ->where('status',1)
                        ->where('del',0)
        				->get();
        				//dd($joblist);
        return view('admin.job.activejobs')->with(['job_active'=>$joblist]);  
    }

    public function activeJobsSubmit(Request $request)
    {
        $job_id =$request->jobid;
        job_opening::where('job_id',$job_id)
                        ->update(['status' => 1]);

        return json_encode('success');
    }

    public function deleteJobsSubmit(Request $request)
    {
        $job_id =$request->jobid;
        job_opening::where('job_id',$job_id)
                        ->update(['del' => 1]);

        return json_encode('success');
    }


    public function expjobs(Request $request)
    {
        $joblist = job_opening::where('expdate','<',Carbon::today()->toDateString())
        				->get();
        				//dd($joblist);
        return view('admin.job.expjobs')->with(['job_expiry'=>$joblist]);
    }
	

	public function getapplicants(Request $request)
    {
        $applicants= job_opening::where('job_id' , $request->job_id)->get();
        return view('admin.job.allapplicants')->with(['job_opening'=>$applicants]);  
    }

}
