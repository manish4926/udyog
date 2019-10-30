<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Search;
use App\Video;
use DB;

class LiveSearch extends Controller
{
    public function __construct()
    {
        //$user = Auth::user();    
        
        $this->middleware(function ($request, $next) {
            $user = Auth::user();      
            $recentpostedvideos = Video::orderBy('id','desc')->limit(4)->get();      
            view()->share(['user'=> $user,'recentpostedvideos' => $recentpostedvideos]);
            return $next($request);
        });
    }

    
    function index()
    {
      $search = Search::paginate(10);
      return view('directory.livesearch2',compact('search'));
    }

    function action(Request $request)
    {
     if($request->ajax())
     {
      $output = '';
      $query = $request->get('query');
      if($query != '')
      {
       $data = DB::table('cdetails')
         ->where('Cname', 'like', '%'.$query.'%')
         ->orWhere('Address', 'like', '%'.$query.'%')
         ->orWhere('Cemp', 'like', '%'.$query.'%')
         ->orderBy('C_id', 'asc')
         ->get();
         
      }
      else
      {
       $data = DB::table('cdetails')
         ->orderBy('C_id', 'asc')
         ->paginate(5);
      }
      $total_row = $data->count();
      if($total_row > 0)
      {
       foreach($data as $row)
       {
        $output .= '
        <tr>
         <td>'.$row->Cname.'</td>
         <td>'.$row->Cemp.'</td>
         <td>'.$row->Material.'</td>
         <td>'.$row->Address.'</td>
        </tr>
        ';
       }
      }
      else
      {
       $output = '
       <tr>
        <td align="center" colspan="5">No Data Found</td>
       </tr>
       ';
      }
      $data = array(
       'table_data'  => $output,
       'total_data'  => $total_row
      );

      echo json_encode($data);
     }
    }
}
