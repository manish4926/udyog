<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Search;
use Illuminate\Support\Facades\Input;

class SearchController extends Controller
{
   
    public function search()
    {
        return view('directory.search');
    }
   
    public function result(Request $request, Search $search){
        
        $company = Search::where(function ($search){
           $material = Input::has('material') ? Input::get('material') : null;
           $sectors = Input::has('sectors') ? Input::get('sectors'):null; 
           $q = Input::has('q') ? Input::get ( 'q' ) : null;

           if(isset($q))
        {
           $search->where ( 'Cname', 'LIKE', '%' . $q . '%' );
       
           if(isset($material))
           {
                $search->where('Material', 'LIKE' , '%' . $material . '%');

                        if(isset($sectors))
                    {
                        $search->where('Address' , 'LIKE' , '%' . $sectors . '%');    
                    }  
           } 
        }

        if(isset($material))
           {
                $search->where('Material', 'LIKE' , '%' . $material . '%');

                        if(isset($sectors))
                    {
                        $search->where('Material', 'LIKE' , '%' . $material . '%')->where('Address' , 'LIKE' , '%' . $sectors . '%');    
                    }  
           } 

        if(isset($sectors))
           {
               $search->where('Address' , 'LIKE' , '%' . $sectors . '%');    
           }  

        })->get();
    
       if (count ( $company ) > 0)
            return view ( 'directory.searchresult' )->withDetails ( $company )->withQuery ( $search );
        else
            return view ( 'directory.searchresult' )->withMessage ( 'No Details found. Try to search again !' );
    }
       
}
