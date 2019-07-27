<?php

namespace App\Http\Controllers;

use App\MicrowebCompanyProduct;
use App\MicrowebCompanyDetails;
use App\MicrowebTestimonial;
use App\Directory;
use DB;
use Auth;
use Illuminate\Http\Request;

use App\CompanyDetail;


class MicrowebController extends Controller
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
    
    function microweb(Request $request)
    {

        if(!empty($request->slug))
        {
            $companydetail = MicrowebCompanyDetails::where('slug',$request->slug)->first();
            $companyproduct = MicrowebCompanyProduct::where('slug',$request->slug)->first();
            $testimonials = MicrowebTestimonial::where('slug',$request->slug)->first(); 
        }

         return view('microweb',compact('companydetail','companyproduct','testimonials'));
    }

    /**Company Panel */
    public function dashboard()
    {
        return view('company.dashboard');
    }

    public function companyPanel(Request $request)
    {
        $user = Auth::user();
        
        $companydetail = CompanyDetail::where('user_id',$user->id)->first();
        
        return view('company.companyedit',compact('companydetail'));
    } 

    public function materialPanel(Request $request)
    {
        $user = Auth::user();

        $companydetail = CompanyDetail::where('user_id',$user->id)->first();
        
        return view('company.materialedit',compact('companydetail'));

    }

    public function ceoPanel(Request $request)
    {
        $user = Auth::user();

        $companydetail = CompanyDetail::where('user_id',$user->id)->first();

        return view('company.ceopanel',compact('companydetail'));
    }    

    public function aboutus(Request $request)
    {
        $user = Auth::user();

        $companydetail = CompanyDetail::where('user_id',$user->id)->first();

        return view('company.aboutus',compact('companydetail'));
    }
    
    public function testimonial(Request $request)
    {
        $user = Auth::user();

        $companydetail = CompanyDetail::where('user_id',$user->id)->first();

        return view('company.testimonialpanel',compact('companydetail'));
    }
    
    public function makechanges(Request $request)
    {
        $user = Auth::user();

        $companydetail = CompanyDetail::where('user_id',$user->id)->first();

// to update company's name       
        if(!empty($request->cname))
        {
            $validation= $request->validate( [
            'cname' => 'required|max:100|string']);

                $c_name = $request->input('cname');

        Directory::where('c_id',$companydetail->company_id)->update(['cname'=> $c_name]);
        }


// to update company's ceo name and image 
         if(!empty($request->cemp)|| !empty($request->image))
        {
           $validation= $request->validate( [
            'cemp' => 'required|max:100|string',
            'image' => 'required|mimes:jpeg,png,jpg',]);

                $c_emp = $request->input('cemp');
                $path = $request->file('image')->store('microweb\images\team');
                Directory::where('c_id',$companydetail->company_id)->update(['cemp'=> $c_emp , 'image'=>$path]);
        }

// to update company's material
         if(!empty($request->material))
        {
            $validation= $request->validate( [
            'material' => 'required|max:100|string']);

                $c_material = $request->input('material');

        Directory::where('c_id',$companydetail->company_id)->update(['material'=> $c_material]);
        }


        // to update company's testimonial  
         if(!empty($request->testimonial))
        {
            $validation= $request->validate( [
            'testimonial' => 'required|max:100|string']);

                $c_testimonial = $request->input('testimonial');

        Directory::where('c_id',$companydetail->company_id)->update(['testimonial'=> $c_testimonial]);
        }
        
               // dd($companydetail->company_id);
               return view('company.dashboard'); 
    }
}
