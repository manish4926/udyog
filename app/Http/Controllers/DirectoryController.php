<?php
namespace App\Http\Controllers;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use DB;
use App\Directory;
use Auth;

class DirectoryController extends Controller
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
            'businesstype' => 'required|max:20|string',
            'industrytype'=>'required|max:20|String',
            'block'=>'required|max:10|String',
            'sector'=>'required|max:20|String',
            'area'=>'required|max:20|String',
            'state'=>'required|max:20|String'
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
        $slug = seoUrl($request->input('name'));
        $c_industry = $request->input('industrytype');
        $c_business = $request->input('businesstype');
        $c_block = $request->input('block');
        $c_sector = $request->input('sector');
        $c_area = $request->input('area');
        $c_state = $request->input('state');
        /*  $c_uan = $request->input('cuan');
        $c_rn = $request->input('crn');
        $c_gin = $request->input('cgin');*/
        $data = array('cname'=>$c_name, 'slug' => $slug,'cemp'=>$c_emp,'block'=>$c_block,'sector'=>$c_sector,'area'=>$c_area,'state'=>$c_state,'phoneno'=>$c_no,'email'=>$c_email ,'industryttype'=>$c_industry,'businesstype'=>$c_business);
        DB::table('cdetails')->insert($data);
        echo "Record inserted successfully.<br/>";
    }

    //******* For showing list of industries ********//
    function index(Request $request)
    {
        $search=Directory::orderBy('c_id');//get data from table
        $industry_type  = industry_type();
        $business_type = business_type();
        if(!empty($request->business_types))
        {
            $search = $search->orwhere('businesstype', $request->business_types);
        }

        if(!empty($request->industry_types))
        {
            $search = $search->orwhere('industrytype', $request->industry_types);
        }

        if(!empty($request->block))
        {
            $search = $search->orwhere('block', $request->block);
        }

        if(!empty($request->area))
        {
            $search = $search->orwhere('area', $request->area);
        }

        if(!empty($request->sector))
        {
            $search = $search->orwhere('sector', $request->sector);
        }

        if(!empty($request->material))
        {
            $search = $search->orwhere('material', $request->material);
        }

        if(!empty($request->company))
        {
            $search = $search->orwhere('cname', $request->company);
        }
        //$search = $search->paginate(5);
        //dd($request->material);
        $materials=Directory::whereNotNull('material')->groupBy('material')->get();
        //******* search for material tags in cards *************
        if(!empty($request->tag))
        {
            $search = $search->where('material', $request->tag);
        }
        // pagination
        $search = $search->paginate(5);
        //dd($request->material);
        $materials=Directory::where('material','!=','')->groupBy('material')->get();
        //dd($materials);
        $sectors=Directory::whereNotNull('sector')->groupBy('sector')->get();
        $areas=Directory::whereNotNull('area')->groupBy('area')->get();
        $companys=Directory::whereNotNull('cname')->get();
        return view('directory.industrylist',compact('search','materials','sectors','areas','companys','industry_type','business_type'));//sent data to view
    }
}
