<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\CompanyDetail;

use App\MicrowebCompanyProduct;
use App\MicrowebCompanyDetails;
use App\MicrowebTestimonial;

use DB;
use Auth;

class MicrowebController extends Controller
{
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
    public function companyPanel(Request $request)
    {
        $user = Auth::user();

        
        $companydetail = CompanyDetail::where('user_id',$user->id)->first();
        
        return view('company.dashboard',compact('companydetail'));
    }
}
