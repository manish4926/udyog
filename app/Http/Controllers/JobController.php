<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use App\job_opening;
use App\Candidatedata;

use DB;
use Auth;
use Carbon\Carbon;

class JobController extends Controller
{
	public function postJob(Request $request)
	{
		return view('job.jobpost');	//,compact()
	}
    
    public function postJobSubmit(request $request)
    {

		$jobpost = new job_opening;

		$jobpost->job_title       = $request->title;
		$jobpost->company_name    = $request->companyname;
		$jobpost->hr_name         = $request->hrname;
		$jobpost->experience      = $request->exp;
		$jobpost->skills          = $request->skill;
		$jobpost->postdate        = $request->postdate;
		$jobpost->expdate         = $request->expdate;
		$jobpost->location        = $request->location;
		$jobpost->package         = $request->pack;
		$jobpost->job_desc        = $request->desc;
        $jobpost->ip_address      =$_SERVER['REMOTE_ADDR'];
		
		$jobpost->save();
		
		return redirect()->back();
}


	public function application(Request $request, $job_title )
	{
		$user = Auth::user();
		$job_opening = job_opening::where('title' , $job_title)->first();
		return view('job.application',compact('user','job_opening'));	}


	public function applicationSubmit(request $request)

	{
		$user = Auth::user();
    	
		$validatedData = $request->validate([

            'mobile_no' =>'required|max:10',
            'state' =>'required',
            'city' =>'required|max:20',
            'gender' =>'required',
            'dob' =>'required',
            'skills'=>'required',
            'jobtitle' =>'required|max:20',
            'companyname' =>'required',
            'graduation' =>'required',
            'fileupload'=> 'required'
            ]);

		if(!empty($request->file('fileupload'))){
			$this->validate($request,[
				'fileupload' =>'mimes:doc,docx,pdf']);

			$filename = $request->file('fileupload')->getClientOriginalName();

			$request->file('fileupload')->storeAs('resumes',$filename);
			
		} else {
			$fileupload= '';
		}

		$candidate = new Candidatedata;

		$tyear          = $request->tyear;
		$tmonth         = $request->tmonth;
		$ddlSalaryLacs  = $request->ddlSalaryLacs;
		$salThousand    = $request->salThousand;
		$yearduration   = $request->yearduration;
		$monthduration  = $request->monthduration;


		$candidate->user_id        = $user->id;
		$candidate->firstname      = $user->firstname;
		$candidate->lastname       = $user->lastname;
		$candidate->email          = $user->email;
		$candidate->state          = $request->state;
		$candidate->city           = $request->city;
		$candidate->gender         = $request->gender;
		$candidate->dob            = $request->dob;
		$candidate->skills         = $request->skills;
		$candidate->jobtitle       = $request->jobtitle;
		$candidate->companyname    = $request->companyname;
		$candidate->graduation     = $request->graduation;
		$candidate->postgraduation = $request->postgraduation;
		$candidate->doctorate      = $request->doctorate;
		$candidate->certificate    = $request->certificate;
		$candidate->experience     = $tyear.'.'.$tmonth;
		$candidate->salary         = $ddlSalaryLacs.'.'.$salThousand;
		$candidate->duration       = $yearduration.'.'.$monthduration;
		$candidate->save();
		
		return redirect()->back();

	}

	public function alljob (Request $request)
	{
		$jobs= job_opening::all();
		return view('job.alljob',compact('jobs'));
	}

	public function getdisplay(Request $request)
	{
		$description= job_opening::where('job_id' , $request->job_id)->first();
		return view('job.details')->with(['job_opening'=>$description]);  
	}


	public function search(Request $request)
	{
		$searchkey= $request->search;

		$job_search= job_opening::orderBy('job_id');
		if($searchkey && !empty($searchkey)){
			$job_search->where(function($query) use ($searchkey){
				$query->where('job_title' , 'like','%' .$searchkey. '%');
				$query->orWhere('skills' , 'like','%' .$searchkey. '%');
				$query->orwhere('company_name', 'LIKE', '%' .$searchkey. '%');
			});
		}

		$searchkey1=$request->get('place');
		if($searchkey1){
			$job_search->where('location' , 'like','%' .$searchkey1. '%');
		}
		$searchkey2=$request->get('exp1');
		if($searchkey2){
			$job_search->where('experience' , 'like','%' .$searchkey2. '%');
		}  

		$searchkey3=$request->get('sal');
		if($searchkey3){
			$job_search->where('package' , '=', $searchkey3);
		}
		
		$job_search = $job_search->paginate(5);
		
		return view('job.search')->with(['searching'=>$job_search]); 
	}

	public function candidatesearch(Request $request)
	{
       	$searchkey= $request->search;

		$candidatesearch=Candidatedata::orderBy('id');//get data from table
		
		if($searchkey && !empty($searchkey)){
			$candidatesearch->where(function($query) use ($searchkey){
				$query->Where('skills' , 'like','%' .$searchkey. '%');
			});
		}

		$searchkey1=$request->get('exp1');

		if($searchkey1){
			$searchkey1 = explode("-",$searchkey1);
			$candidatesearch->whereBetween('experience', [$searchkey1[0],$searchkey1[1]])->get();
		}  

		$searchkey2=$request->get('graduation');
		if($searchkey2){
			$candidatesearch->where('graduation' , '=', $searchkey3);
		}

		$searchkey3=$request->get('postgraduation');
		if($searchkey3){
			$candidatesearch->where('postgraduation' , '=', $searchkey3);
		}
		
		
		$candidatesearch = $candidatesearch->paginate(5);
		
		return view('job.searchcontent')->with(['searching'=>$candidatesearch]); 
		
	}

}

