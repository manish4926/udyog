<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use App\job_opening;
use App\Applicant;
use App\Event;

use DB;
use Auth;
use Carbon\Carbon;


class AdminController extends Controller
{    

    public function alljobs(Request $request)
    {
        $jobs= job_opening::all();
        return view('admin.job.alljobs',compact('jobs'));
    }

    public function addevent()
    {
        return view('admin.job.addevent');
    }


    public function addeventSubmit(request $request)
    {
       if(!empty($request->file('fileupload'))){
            $this->validate($request,[
                'fileupload' =>'mimes:jpeg,jpg,png']);
            $filename = $request->file('fileupload')->getClientOriginalName();
            $request->file('fileupload')->storeAs('eventphoto',$filename);
            
        } else {
            $fileupload= '';
        }

        var_dump($filename);

        $newevent = new Event;

        $newevent->title        = $request->title;
        $newevent->slug         = seoUrl($request->title."-".rand(10000,99999));
        $newevent->description  = $request->description;
        $newevent->author       = $request->author;
        $newevent->date         = $request->date;


        $newevent->photo        = $filename;
        
        
        $newevent->save();
        
        return redirect()->back();
    }    


    public function allevents(Request $request)
    {

        $allevents= Event::all();
        return view('admin.job.allevents',compact('allevents'));

    }


    public function updateevent(Request $request)
    {
       $update= Event::where('id' , $request->id)->first();
        return view('admin.job.update')->with(['update
            '=>$update]);  
    }


    public function deleteEvent(Request $request)
    {
        $id =$request->eventid;
        Event::where('id',$id)
                        ->update(['status' => 'INACTIVE']);

        return json_encode('success');
    }

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
        $applicants= Applicant::where('job_id' , $request->job_id)->get();
        
        return view('admin.job.allapplicants')->with(['applicants'=>$applicants]);  
    }

}
