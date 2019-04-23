<?php

namespace App\Http\Controllers;

use App\Candidatedata;
use App\Applicant;
use Illuminate\Http\Request;



class CandidatedataController extends Controller
{
    public function userprofile(Request $request)
    {
        $userdatas= Candidatedata::where('user_id',$request->id)->get();
        return view('job.userprofile')->with(['users'=>$userdatas]);
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
    public function edit(Candidatedata $candidatedata)
    {
        //
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
