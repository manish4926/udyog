<?php
namespace App\Http\Controllers;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use DB;
use App\Directory;
use App\Product;
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

//***** for inputing new industry data for directory listing through form ******//
    public function create()
    {
        $user = Auth::user();
        $companydetail = Directory::where('user_id',$user->id)->first();

        $industry_type  = industry_type();
        $business_type = business_type();

        return view("directory.create", compact('industry_type','business_type','companydetail')); 
    }

    public function store(Request $request)
    {
        $user = Auth::user();
        
        $companydetail = Directory::where('user_id',$user->id)->first();

        //$countCOMPANY = Directory::where('cname',$request->cname)->count();
        if(!empty($request->file('logo'))){
            $this->validate($request,[
                'logo' =>'mimes:jpeg,jpg,png']);
                $file = $request->file('logo');
                $destinationPath = 'microweb/images/logo';
                $logo = rand(10,100)."-".$file->getClientOriginalName();
                // dd($filename);
                $file->move($destinationPath,$logo);  
        }

        if(!empty($request->file('image'))){
            $this->validate($request,[
                'image' =>'mimes:jpeg,jpg,png']);
                $file = $request->file('image');
                $destinationPath = 'microweb/images/team';
                $ceo = rand(10,100)."-".$file->getClientOriginalName();
                // dd($filename);
                $file->move($destinationPath,$ceo); 
        }
                  
            $c_emp = $request->input('cemp');
            $c_no = $request->input('phoneno');
            $c_email = $request->input('companyemail');
            // $slug = seoUrl($companydetail->cname);
            $c_industry = $request->input('industrytype');
            $c_business = $request->input('businesstype');
            $c_about = $request->input('about');
            $c_block = $request->input('block');
            $c_sector = $request->input('sector');
            $c_area = $request->input('area');
            $c_state = $request->input('state');
            $path = $ceo;
            $pathlogo = $logo;

           
            $data = array('cemp'=>$c_emp,'block'=>$c_block,'sector'=>$c_sector,'area'=>$c_area,'state'=>$c_state,'phoneno'=>$c_no,'email'=>$c_email ,'industrytype'=>$c_industry,'businesstype'=>$c_business,'about'=>$c_about, 'image'=>$path);
            Directory::where('user_id',$user->id)->update($data);
          //  DB::table('cdetails')->insert($data);
            return view('company.dashboard');
    
    }


    //******* For showing list of industries ********//
    function index(Request $request)
    {   
        $search=Directory::orderBy('c_id');//get data from table
        $product=Product::orderBy('comapany_id');
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

        if(!empty($request->about))
        {
            $search = $search->orwhere('about', $request->about);
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

        // if(!empty($request->material))
        // {
        //     $search = $search->orwhere('material', $request->material);
        // }

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
        return view('directory.industrylist',compact('search','materials','sectors','areas','companys','industry_type','business_type','product'));//sent data to view
    }


}
