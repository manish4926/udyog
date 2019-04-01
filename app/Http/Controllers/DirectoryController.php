<?php

namespace App\Http\Controllers;

use Illuminate\Validation\Rule;

use Illuminate\Http\Request;

use DB;

use App\Search;

class DirectoryController extends Controller
{
    //***** for inputing new industry data through form ******//
    
    public function create()
    {
        return view("directory.create"); 
    }

    public function store(Request $request)
    {
        $validation= $request->validate( [
        'name' => 'required|max:100|string',
        'ename' => 'required|max:100|string',
        'cno' => 'required|min:10|max:12|numeric',
        'cemail' => 'required|max:50|email',
        'caddress' => 'required|max:150|string'
        /*'cuan' => 'required|max:12|min:12|alpha_num',
        'crn' => 'required|max:8|min:8|alpha_num',
        'cgin' => 'required|max:15|min:15|alpha_num'*/
         ]);

        // print_r($validation);

        if($validation->true){}
        $c_name = $request->input('name');
        $c_emp = $request->input('cemp');
        $c_no = $request->input('cno');
        $c_email = $request->input('cemail');
        $c_address = $request->input('caddress');
      /*  $c_uan = $request->input('cuan');
        $c_rn = $request->input('crn');
        $c_gin = $request->input('cgin');*/
        $data = array('Cname'=>$c_name,'Cemp'=>$c_emp,'Phoneno'=>$c_no,'Email'=>$c_email
        ,'Address'=>$c_address);
     
        DB::table('cdetails')->insert($data);
      echo "Record inserted successfully.<br/>";
    }

    //******* For showing list of industries ********/
    function index(Request $request)
    {
      $search=Search::orderBy('c_id');//get data from table
/*      if(!empty($request->material))
      {
        $search = $search->where('Material', $request->material);

        if(!empty($request->address)) 
        {
          $search = $search->where('Material', $request->material)->orwhere('Address', $request->address);

          if(!empty($request->company)) 
          {
            $search = $search->where('Material', $request->material)->orwhere('Address', $request->address)->orwhere('Cname', $request->company);

          }
        }

        else if(!empty($request->company)) 
        {
          $search = $search->where('Material', $request->material)->orwhere('Cname', $request->company);
        }
      }

      else if(!empty($request->address)) 
      {
        $search = $search->where('Address', $request->address);

        if(!empty($request->company)) 
          {
            $search = $search->where('Address', $request->address)->orwhere('Cname', $request->company);

          }
      }

      else if(!empty($request->company)) 
      {
        $search = $search->where('Cname', $request->company);
      }
*/

      if(!empty($request->address))
      {
        $search = $search->orwhere('address', $request->address);
      }

      if(!empty($request->material))
      {
        $search = $search->orwhere('material', $request->material);
      }

      if(!empty($request->company))
      {
        $search = $search->orwhere('cname', $request->company);
      }

      $search = $search->paginate(5);
      //dd($request->material);

      $select=Search::whereRaw('material <> ""')->get();
      //$sectorlist = Search::->groupBy('browser')->get();
      return view('directory.livesearch',compact('search'),compact('select'));//sent data to view
    }
}