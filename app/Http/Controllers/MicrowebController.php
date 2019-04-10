<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

<<<<<<< HEAD
use App\Search;
use App\CompanyDetail;

=======
use App\MicrowebCompanyProduct;
use App\MicrowebCompanyDetails;
use App\MicrowebTestimonial;
>>>>>>> 2c67432518c4e3e23cab6b951d54ef824d784cde
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
