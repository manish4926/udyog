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
        $description= job_opening::where('job_id' , $request->job_id)->first();
        return view('job.details')->with(['job_opening'=>$description]);  
    }


    public function search(Request $request)
    {
        //return view('job.search'); //,compact()

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
    
}
