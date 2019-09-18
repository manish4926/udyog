<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use App\job_opening;
use App\Candidatedata;
use App\Directory;
use App\User;
use App\Applicant;
use DB;
use Auth;
use Carbon\Carbon;

class JobController extends Controller
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
    
	public function postJob(Request $request)
	{
		$user = Auth::user();
		$companydetail = Directory::where('user_id',$user->id)->first();
		return view('job.jobpost',compact('companydetail'));	//,compact()
	}
    
    public function postJobSubmit(request $request)
    {
    	$user = Auth::user();
		$jobpost = new job_opening;

		$jobpost->job_title    = $request->title;
		// $jobpost->slug         = seoUrl($request->title."-".rand(10000,99999));
		$jobpost->company_name = $request->companyname;
		$jobpost->hr_name      = $request->hrname;
		$jobpost->experience   = $request->exp;
		$jobpost->skills       = $request->skill;
		$jobpost->postdate     = $request->postdate;
		$jobpost->expdate      = $request->expdate;
		$jobpost->location     = $request->location;
		$jobpost->package      = $request->pack;
		$jobpost->job_desc     = $request->desc;
		$jobpost->ip_address   = $_SERVER['REMOTE_ADDR'];
		
		$jobpost->save();
		
		return redirect('company/panel/dashboard')->with('status', 'Successfully Submitted!');
	}


	public function application(Request $request )
	{
		$user = Auth::user();
		// if(!empty($request->title))
		// {
			$job_title = $request->title;
		$job_opening = job_opening::where('job_id' , $job_title)->first();
		// return view('job.application',compact('user','job_opening'));	
		// // }
		// else
		// return view('job.application',compact('user'));

		$applicantinfo = User::where('id',$request->userid)->first();
        $applicantdetails = Candidatedata::where('user_id',$request->userid)->first();
        if($applicantdetails)
        // //dd($request->userid);
        {
        //     $durattn = (string)$applicantdetails->duration;
        //     $durat = explode('.',$durattn,2);
        //     $year = $durat[0];
        //     $month = $durat[1];
        //     $salary = (string)$applicantdetails->salary;
        //     $sal = explode('.',$salary,2);
        //     $lacs = $sal[0];
        //     $thousand = $sal[1];
        //     $experience = (string)$applicantdetails->experience;
        //     $exper = explode('.',$experience,2);
        //     $yearex = $exper[0];
        //     $monthex = $exper[1];

          	return view('job.applicationtrial',compact('user','job_opening','applicantinfo'));
        }

        else
            return view('job.editprofile',compact('user','applicantinfo'))->with('status', 'Please edit your profile first!');
		// }
		
		
	}



	public function applicationSubmit(request $request)
	{
		$user = Auth::user();
    	
		
		if(!empty($request->file('fileupload'))){
			$this->validate($request,[
				'fileupload' =>'mimes:doc,docx,pdf']);
			$filename = $request->file('fileupload')->getClientOriginalName();
			$request->file('fileupload')->storeAs('resumes',$filename);
			
		} else {
			$filename= '';
		}
		
		 $applicantdetails = Candidatedata::where('user_id',$user->id)->count();
		 

		 if($applicantdetails==1)

		{
		
		
				$tyear                     = $request->tyear;
				$tmonth                    = $request->tmonth;
				$ddlSalaryLacs             = $request->ddlSalaryLacs;
				$salThousand     		   = $request->salThousand;
				$yearduration   		   = $request->yearduration;
				$monthduration             = $request->monthduration;
				$user_id        = $user->id;
				$firstname      = $user->firstname;
				$lastname       = $user->lastname;
				$email          = $user->email;
				$mobile_no      = $request->mobile_no;
				$state          = $request->state;
				$city           = $request->city;
				$gender         = $request->gender;
				$dob            = $request->dob;
				$skills         = $request->skills;
				$jobtitle       = $request->jobtitle;
				$companyname    = $request->companyname;
				$industry       = $request->industry;
				$basicgraduation= $request->basicgraduation;
				$graduation     = $request->graduation;
				$diploma 	   = $request->diploma;
				$postgraduation = $request->postgraduation;
				$doctorate      = $request->doctorate;
				$certificate    = $request->certificate;
				$experience     = $tyear.'.'.$tmonth;
				$salary         = $ddlSalaryLacs.'.'.$salThousand;
				$duration       = $yearduration.'.'.$monthduration;
				if($filename != '')
				{
					$resume   	   = $filename;	

					 $data = array('firstname'=>$firstname,'lastname'=>$lastname,'email'=>$email,'mobile_no'=>$mobile_no,'state'=>$state,'city'=>$city,'gender'=>$gender ,'dob'=>$dob,'skills'=>$skills,'jobtitle'=>$jobtitle, 'companyname'=>$companyname , 'industry'=>$industry, 'basicgraduation'=>$basicgraduation, 'graduation'=>$graduation, 'diploma'=>$diploma, 'postgraduation'=>$postgraduation, 'doctorate'=>$doctorate, 'certificate'=>$certificate, 'resume'=>$resume, 'experience'=>$experience, 'salary'=>$salary , 'duration'=>$duration);
				}
		           
		           else
		           {
		           	 $data = array('firstname'=>$firstname,'lastname'=>$lastname,'email'=>$email,'mobile_no'=>$mobile_no,'state'=>$state,'city'=>$city,'gender'=>$gender ,'dob'=>$dob,'skills'=>$skills,'jobtitle'=>$jobtitle, 'companyname'=>$companyname , 'industry'=>$industry, 'basicgraduation'=>$basicgraduation, 'graduation'=>$graduation, 'diploma'=>$diploma, 'postgraduation'=>$postgraduation, 'doctorate'=>$doctorate, 'certificate'=>$certificate,'experience'=>$experience, 'salary'=>$salary , 'duration'=>$duration);
		           }
            Candidatedata::where('user_id',$user_id)->update($data);

        }

        else
        {
        	$validatedData = $request->validate([
            'mobile_no' =>'required|max:10',
            'state' =>'required',
            'city' =>'required|max:20',
            'gender' =>'required',
            'dob' =>'required',
            'skills'=>'required',
            //'jobtitle' =>'required|max:20',
            //'companyname' =>'required',
            //'graduation' =>'required',
            'fileupload'=> 'required'
            ]);
        		$candidate = new Candidatedata;
		
		$tyear                     = $request->tyear;
		$tmonth                    = $request->tmonth;
		$ddlSalaryLacs             = $request->ddlSalaryLacs;
		$salThousand     		   = $request->salThousand;
		$yearduration   		   = $request->yearduration;
		$monthduration             = $request->monthduration;
		$candidate->user_id        = $user->id;
		$candidate->firstname      = $user->firstname;
		$candidate->lastname       = $user->lastname;
		$candidate->email          = $user->email;
		$candidate->mobile_no      = $request->mobile_no;
		$candidate->state          = $request->state;
		$candidate->city           = $request->city;
		$candidate->gender         = $request->gender;
		$candidate->dob            = $request->dob;
		$candidate->skills         = $request->skills;
		$candidate->jobtitle       = $request->jobtitle;
		$candidate->companyname    = $request->companyname;
		$candidate->industry       = $request->industry;
		$candidate->basicgraduation= $request->basicgraduation;
		$candidate->graduation     = $request->graduation;
		$candidate->diploma 	   = $request->diploma;
		$candidate->postgraduation = $request->postgraduation;
		$candidate->doctorate      = $request->doctorate;
		$candidate->certificate    = $request->certificate;
		$candidate->resume   	   = $filename;
		$candidate->experience     = $tyear.'.'.$tmonth;
		$candidate->salary         = $ddlSalaryLacs.'.'.$salThousand;
		$candidate->duration       = $yearduration.'.'.$monthduration;

		$candidate->save();
        }
		
		return redirect('job/all')->with('status', 'Successfully updated! Now please apply for the job.');
	}

	public function applyjob (Request $request)
	{
		$user = Auth::user();
				$applicant = new Applicant;

				$applicant->job_id         = $request->jobid;
				$applicant->user_id        = $user->id;
				$applicant->firstname      = $user->firstname;
				$applicant->lastname       = $user->lastname;
				$applicant->email          = $user->email;

				$applicant->save();

				return redirect('job/all')->with('status', 'Successfully Submitted!');			
			
	}

	public function alljob (Request $request)
	{
		 $company=Directory::whereNotNull('cname')->get();
		$jobs= job_opening::where('expdate','>=',Carbon::today()->toDateString())->where('status','=','1')->orderBy('postdate','DESC')->paginate(5);
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

		$searchkey1=$request->get('loc');
		if($searchkey1){
			$job_search->where('location' , 'like','%' .$searchkey1. '%');
		}
		$searchkey2=$request->get('exp1');
		if($searchkey2){
			$job_search->where('experience' , 'like','%' .$searchkey2. '%');
		}  

		$searchkey3=$request->get('sal');
		if($searchkey3)
		{
		    if($searchkey3<200001)
		    {
				$searchto=$searchkey3-10000;
				$job_search->whereBetween('package', array($searchto, $searchkey3));
			}

			else
			{
				$job_search->where('package', '>=', 200001);
			}
		}
		
		$job_search = $job_search->where('expdate','>=',Carbon::today()->toDateString())->where('status','=','1')->orderBy('postdate','DESC')->paginate(5);
		
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
			$candidatesearch->where('graduation' , '=', $searchkey2);
		}

		$searchkey3=$request->get('postgraduation');
		if($searchkey3){
			$candidatesearch->where('postgraduation' , '=', $searchkey3);
		}

		
		
		
		$candidatesearch = $candidatesearch->paginate(5);
		
		return view('job.searchcontent')->with(['searching'=>$candidatesearch]); 
		
	}

}
