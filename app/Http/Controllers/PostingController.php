<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\job_opening;
use Illuminate\Support\Facades\URL;
use DB;


class PostingController extends Controller
{

    public function alljob(Request $request)
    {
        
        $jobs= job_opening::all();
        return view('job.alljob',compact('jobs'));

    }


    public function getdisplay(Request $request)
    {
        //dd($request->job_id);
        $description= job_opening::where('job_id' , $request->job_id)->get();
        //$desc= $this->jobs->select('request','job_desc')->get();
        

        return view('job.details')->with(['desc'=>$description]);  

    }


    public function search(Request $request)
    {
        return view('job.search'); //,compact()
    }



    public function searchcontent(Request $request)
    {   

        //$searchkey=$request->get('search');
        $searchkey= $request->search;
        //dd($searchkey);

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
        

        return view('job.searchcontent')->with(['searching'=>$job_search]); 
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function validation(Request $request){
        
        dd('validation passes');
    }
}
