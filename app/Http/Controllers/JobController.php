<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use DB;


class JobController extends Controller
{

	public function postJob(Request $request)
	{
		return view('job.jobpost');	//,compact()
	}
    
    public function postJobSubmit(request $request)
    {
		
    	
		$title = $request->input('title');
		$companyname = $request->input('companyname');
		$hrname= $request->input('hrname');
		$exp = $request->input('exp');
		// $skills=!empty($request->input('skill')) ? $request->input('skill') : $request->input('skills');
		$skills= $request->input('skill');
		$postdate = $request->input('postdate');
		$expdate = $request->input('expdate');
		$location = $request->input('location');
		$package = $request->input('pack');
		$description = $request->input('desc');

		$validatedData = $request->validate([
            
            'title' =>'required|max:20',
            'companyname' =>'required|max:50',
            'hrname' =>'required|max:50',
            'exp' =>'required',
            'skill' =>'required|max:20',
            'postdate' =>'required',
            'expdate' =>'required',
            'location' =>'required|min:3',
            'pack'=> 'required|max:6',
            'desc' =>'required|max:70'
        ]);


       // print_r($val);


		$data = array('job_title'=>$title,'company_name'=>$companyname,'hr_name'=>$hrname,'experience'=>$exp, 'skills'=>$skills,'postdate'=>$postdate, 'expdate'=>$expdate,'location'=>$location,'package'=>$package,'job_desc'=>$description,'status'=>0,'del'=>0,'ip_address'=>$_SERVER['REMOTE_ADDR']);

		DB::table('job_openings')->insert($data);


		echo "Job Posted Successfully!!!";

    }


    public function jobapplication(Request $request)
	{
		
		return view('job.jobapplication');	//,compact()
	}

	public function application(Request $request)
		{
			return view('job.application');	//,compact()
		}


	public function applicationSubmit(request $request)
    {
    	 
		//$user_id = $request->input('user_id');
		$mobile_no = $request->input('mobile_no');
		$state = $request->input('state');
		$city= $request->input('city');
		$email = $request->input('email');
		$gender= $request->input('gender');
		$dob = $request->input('dob');
		$tyear = $request->input('tyear');
		$tmonth = $request->input('tmonth');
		$ddlSalaryLacs = $request->input('ddlSalaryLacs');
		$salThousand =$request->input('salThousand');
		$jobtitle = $request->input('jobtitle');
		$companyname = $request->input('companyname');
        $industry = $request->input('industry');
		$yearduration= $request->input('yearduration');
		$monthduration= $request->input('monthduration');
		$graduation = $request->input('graduation');
		$postgraduation= $request->input('postgraduation');
		$doctorate = $request->input('doctorate');
		$certificate = $request->input('certificate');
		$experience=$tyear.'.'.$tmonth;
		$salary= $ddlSalaryLacs.'.'.$salThousand;
		$duration=$yearduration.'.'.$monthduration;

		

		if(!empty($request->file('fileupload'))){
	        $this->validate($request,[
	          'fileupload' =>'mimes:doc,docx,pdf']);

	        $filename = $request->file('fileupload')->getClientOriginalName();

	        $request->file('fileupload')->storeAs('resumes',$filename);
	        
    	} else {
    		$fileupload= '';
    	}




		$data2 = array('mobile_no'=>$mobile_no,'state'=>$state,'city'=>$city,'email'=>$email,'gender'=>$gender,'dob'=>$dob, 'experience'=>$experience,'salary'=>$salary,'jobtitle'=>$jobtitle,'companyname'=>$companyname,'industry'=>$industry,'duration'=>$duration,'graduation'=>$graduation,'postgraduation'=>$postgraduation,'doctorate'=>$doctorate,'certificate'=>$certificate,'resume'=>$filename);

		DB::table('candidatedata')->insert($data2);

	}

}