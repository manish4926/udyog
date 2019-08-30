<?php

namespace App\Http\Controllers;

use App\User;
use App\Candidatedata;
use App\Applicant;
use Illuminate\Http\Request;

use Auth;



class CandidatedataController extends Controller
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

    public function userprofile(Request $request)
    {
        $applicantinfo = User::where('id',$request->userid)->first();
        $applicantdetails = Candidatedata::where('user_id',$request->userid)->first();
        if($applicantdetails)
        //dd($request->userid);
        {return view('job.userprofile')->with(['applicantinfo'=>$applicantinfo, 'applicantdetails'=> $applicantdetails]);}

        else

            return view('job.userprofile')->with(['applicantinfo'=>$applicantinfo]);
    }




    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Candidatedata  $candidatedata
     * @return \Illuminate\Http\Response
     */
    public function show(Candidatedata $candidatedata)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Candidatedata  $candidatedata
     * @return \Illuminate\Http\Response
     */
    public function editprofile(Candidatedata $candidatedata, Request $request)
    {
        $applicantinfo = User::where('id',$request->userid)->first();
        $applicantdetails = Candidatedata::where('user_id',$request->userid)->first();
        if($applicantdetails)
        //dd($request->userid);
        {
            $durattn = (string)$applicantdetails->duration;
            $durat = explode('.',$durattn,2);
            $year = $durat[0];
            $month = $durat[1];
            $salary = (string)$applicantdetails->salary;
            $sal = explode('.',$salary,2);
            $lacs = $sal[0];
            $thousand = $sal[1];
            $experience = (string)$applicantdetails->experience;
            $exper = explode('.',$experience,2);
            $yearex = $exper[0];
            $monthex = $exper[1];
            return view('job.editprofile')->with(['applicantinfo'=>$applicantinfo, 'applicantdetails'=> $applicantdetails, 'year'=>$year, 'month'=>$month ,'lacs'=>$lacs, 'thousand'=>$thousand ,'yearex'=>$yearex, 'monthex'=>$monthex ]);
        }
       

        else 
        return view('job.editprofile')->with(['applicantinfo'=>$applicantinfo]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Candidatedata  $candidatedata
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Candidatedata $candidatedata)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Candidatedata  $candidatedata
     * @return \Illuminate\Http\Response
     */
    public function destroy(Candidatedata $candidatedata)
    {
        //
    }
}
