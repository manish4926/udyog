<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use App\job_opening;
use App\Applicant;
use App\Event;
use App\Advertisement;

use DB;
use Auth;
use Carbon\Carbon;
use Session;


class AdminController extends Controller
{   
    public function __construct()
    {
        //$user = Auth::user();    
        
        $this->middleware(function ($request, $next) {
            $user = Auth::user();            
            view()->share('user', $user);
            return $next($request);
        });
    } 

    public function alljobs(Request $request)
    {
        $jobs= job_opening::all();
        return view('admin.job.alljobs',compact('jobs'));
    }

    public function addevent()
    {
        return view('admin.job.addevent');
    }


    public function addeventSubmit(Request $request)
    {
       if(!empty($request->file('fileupload'))){
            $this->validate($request,[
                'fileupload' =>'mimes:jpeg,jpg,png']);
            $filename = $request->file('fileupload')->getClientOriginalName();
            $request->file('fileupload')->storeAs('eventphoto',$filename);
            
        } else {
            $fileupload= '';
        }


        $newevent = new Event;

        $newevent->title        = $request->title;
        $newevent->slug         = str_slug($request->title, '-');
        $newevent->description  = $request->description;
        $newevent->author       = $request->author;
        $newevent->date         = $request->date;


        $newevent->photo        = $filename;
    
        $newevent->save();

        return  redirect('admin/event/all')->with('status', 'Successfully Added!');
    }    


    public function allevents(Request $request)
    {

        $allevents= Event::all();
        return view('admin.job.allevents',compact('allevents'));

    }


    public function updateeventSubmit(Request $request)
    {


         $title        = $request->title;
         $slug         = str_slug($request->title, '-');
         $description  = $request->description;
         $author       = $request->author;
         $date         = $request->date;
       

       if(!empty($request->file('fileupload'))){
            $this->validate($request,[
                'fileupload' =>'mimes:jpeg,jpg,png']);
            $filename = $request->file('fileupload')->getClientOriginalName();
            $request->file('fileupload')->storeAs('eventphoto',$filename);
            
            Event::where('id',$request->id)->update(['title'=> $title, 'slug'=>$slug, 'description'=>$description, 'author'=>$author, 'date'=>$date, 'photo'=>$filename ]);
        }

       
        else
        Event::where('id',$request->id)->update(['title'=> $title, 'slug'=>$slug, 'description'=>$description, 'author'=>$author, 'date'=>$date ]);


        return  redirect('admin/event/all')->with('status', 'Successfully updated!');

        // Session::flash('success', 'New Event is added successfully!');
    }    


    public function updateevent(Request $request)
    {
       $update= Event::where('id' , $request->id)->first();
        return view('admin.job.updateevent',compact('update'));
    }


    public function deleteEvent(Request $request)
    {
        $id =$request->eventid;
        Event::where('id',$id)
                        ->delete();

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

    public function addadvt()
    {
        return view('admin.job.addadvt');
    }


    public function addadvtSubmit(Request $request)
    {
       if(!empty($request->file('fileupload'))){
            $this->validate($request,[
                'fileupload' =>'mimes:jpeg,jpg,png']);
                $file = $request->file('fileupload');
                $destinationPath = 'advtphoto';
                $filename = rand(10,100)."-".$file->getClientOriginalName();
                // dd($filename);
                $file->move($destinationPath,$filename);

            
        }


        $newadvt = new Advertisement;

        $newadvt->title        = $request->title;
        $newadvt->position     = $request->position;
        $newadvt->image        = $filename;
        $newadvt->link         = $request->link;
    
        $newadvt->save();

       return  redirect('admin/advt/all')->with('status', 'Successfully Added!');
    }    


    public function alladvts(Request $request)
    {

        $alladvts= Advertisement::all();
        return view('admin.job.alladvt',compact('alladvts'));

    }

    public function deleteAdvt(Request $request)
    {
        $id =$request->advtid;
        Advertisement::where('id',$id)
                        ->delete();

        return json_encode('success');
    }
}
