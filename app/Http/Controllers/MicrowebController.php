<?php

namespace App\Http\Controllers;

use App\MicrowebCompanyProduct;
use App\MicrowebCompanyDetails;
use App\MicrowebTestimonial;
use App\MicrowebServices;
use App\Directory;
use App\job_opening;
use App\Candidatedata;
use App\Applicant;
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
            $companydetail = Directory::where('slug',$request->slug)->first();
            $companyproduct = MicrowebCompanyProduct::where('slug',$request->slug)->get();
            $testimonials = MicrowebTestimonial::where('slug',$request->slug)->get(); 
            $services = MicrowebServices::where('slug',$request->slug)->get();
        }

       // dd($companyproduct);

         return view('microweb',compact('companydetail','companyproduct','testimonials','services'));
    }

    /**Company Panel */
    public function dashboard()
    {
        return view('company.dashboard');
    }

    public function companyPanel(Request $request)
    {
        $user = Auth::user();
        
        $companydetail = Directory::where('user_id',$user->id)->first();
        
        return view('company.companyedit',compact('companydetail'));
    } 

    public function materialPanel(Request $request)
    {
        $user = Auth::user();

        $companydetail = Directory::where('user_id',$user->id)->first();
        $companyproucts = DB::table('companyproduct')->where('company_id',$companydetail->c_id)->get();
        
        return view('company.materialedit',compact('companydetail','companyproucts'));

    }


    public function materialPanelSubmit(Request $request)
    {
        $user = Auth::user();
        $companydetail = Directory::where('user_id',$user->id)->first();

        $file = $request->file('image');
        $destinationPath = 'products';
        $filename = rand(10,100)."-".$file->getClientOriginalName();
        // dd($filename);
        $file->move($destinationPath,$filename);

         $id = $request->input('id');
        $company_id = $companydetail->c_id;
        $product_name = $request->input('material');
        $slug = $companydetail->slug;
         $data = array('id'=>$id, 'company_id' => $company_id,'product_name'=>$product_name,'image'=>$filename,'slug'=>$slug);
        DB::table('companyproduct')->insert($data);

        return redirect()->back();
        
    }

    public function ceoPanel(Request $request)
    {
        $user = Auth::user();

        $companydetail = Directory::where('user_id',$user->id)->first();

        return view('company.ceopanel',compact('companydetail'));
    }    

    public function clogo(Request $request)
    {
        $user = Auth::user();

        $companydetail = Directory::where('user_id',$user->id)->first();

        return view('company.clogo',compact('companydetail'));
    }

    public function cheader(Request $request)
    {
        $user = Auth::user();

        $companydetail = Directory::where('user_id',$user->id)->first();

        return view('company.cheader',compact('companydetail'));
    }
    
    public function contactus(Request $request)
    {
        $user = Auth::user();

        $companydetail = Directory::where('user_id',$user->id)->first();

        return view('company.contactus',compact('companydetail'));
    }

    public function aboutus(Request $request)
    {
        $user = Auth::user();

        $companydetail = Directory::where('user_id',$user->id)->first();

        return view('company.aboutus',compact('companydetail'));
    }


    public function testimonial(Request $request)
    {
        $user = Auth::user();

        $companydetail = Directory::where('user_id',$user->id)->first();
        $testimonials = DB::table('testimonial')->where('slug',$companydetail->slug)->get();

        return view('company.testimonialpanel',compact('companydetail','testimonials'));
    }



    public function testimonialsubmit(Request $request)
    {
        $user = Auth::user();
        $companydetail = Directory::where('user_id',$user->id)->first();

        $file = $request->file('image');
        $destinationPath = 'testimonials';
        $filename = rand(10,100)."-".$file->getClientOriginalName();
        // dd($filename);
        $file->move($destinationPath,$filename);

         $cstid = $request->input('id');
        $customer_name = $request->input('customer');
         $review = $request->input('review');
        $slug = $companydetail->slug;
         $data = array('cstid'=>$cstid,'customername'=>$customer_name,'review'=>$review,'image'=>$filename,'slug'=>$slug);
        DB::table('testimonial')->insert($data);

        return redirect()->back();
    }

    public function services(Request $request)
    {
        $user = Auth::user();

        $companydetail = Directory::where('user_id',$user->id)->first();
        $services = DB::table('services')->where('slug',$companydetail->slug)->get();

        return view('company.services',compact('companydetail','services'));

    }


    public function servicesubmit(Request $request)
    {
        
        $user = Auth::user();
        $companydetail = Directory::where('user_id',$user->id)->first();

        $file = $request->file('image');
        $destinationPath = 'microweb/images/services';
        $filename = rand(10,100)."-".$file->getClientOriginalName();
        // dd($filename);
        $file->move($destinationPath,$filename);

         $svid = $request->input('id');
      //  $company_id = $companydetail->c_id;
        $service_title = $request->input('service');
         $description = $request->input('description');
        $slug = $companydetail->slug;
         $data = array('svid'=>$svid,'title'=>$service_title,'description'=>$description,'image'=>$filename,'slug'=>$slug);
        DB::table('services')->insert($data);

        return redirect()->back();
    }

/* to see posted jobs and to post job openings */
     public function jobpost(Request $request)
    {
        $user = Auth::user();

         //$companydetail = 'SHARMA AUTO';
        $company = Directory::where('user_id',$user->id)->first();
        $jobs= job_opening::where('company_name' , $company->cname)->paginate(5); 

        return view('company.jobpostpanel',compact('jobs','company'));
    }
/* to see Applicants list */
         public function applicantslist(Request $request)
    {
        $user = Auth::user();

        if(!empty($request->job_id))
        $applicants= Applicant::where('job_id' , $request->job_id)->paginate(5); 

        return view('company.applicantslist',compact('applicants'));
    }
    



    /* edit module*/
    public function makechanges(Request $request)
    {
        $user = Auth::user();

        $companydetail = Directory::where('user_id',$user->id)->first();

// to update company's name       
        if(!empty($request->cname))
        {
            $validation= $request->validate( [
            'cname' => 'required|max:100|string']);

                $c_name = $request->input('cname');

        Directory::where('c_id',$companydetail->c_id)->update(['cname'=> $c_name]);
        }


// to update company's ceo name and image 
         if(!empty($request->cemp) || !empty($request->image))
        {

           $validation= $request->validate( [
            'cemp' => 'required|max:100|string']);

                $c_emp = $request->input('cemp');

                if(!empty($request->image))
                    {
                         $this->validate($request,[
                            'image' =>'mimes:jpeg,jpg,png']);
                            $file = $request->file('image');
                            $destinationPath = 'microweb/images/team';
                            $image = rand(10,100)."-".$file->getClientOriginalName();
                            $file->move($destinationPath,$image);
                            
                            Directory::where('c_id',$companydetail->c_id)->update(['cemp'=>$c_emp,'image'=>$image]);
                    }

                else
                {
                     Directory::where('c_id',$companydetail->c_id)->update(['cemp'=> $c_emp ]);
                }
               
        }


        

        //to udate company's logo
        if(!empty($request->logo))
        {
            $this->validate($request,[
                'logo' =>'mimes:jpeg,jpg,png']);
                $file = $request->file('logo');
                $destinationPath = 'microweb/images/logo';
                $logo = rand(10,100)."-".$file->getClientOriginalName();
                $file->move($destinationPath,$logo);
                
                Directory::where('c_id',$companydetail->c_id)->update(['logo'=>$logo]);
        }

        //to udate company's header image
        if(!empty($request->header))
        {
            $this->validate($request,[
                'header' =>'mimes:jpeg,jpg,png']);
                // |dimensions:max_width=1920,max_height=700,min_width=1100,min_height=500']);
                $file = $request->file('header');
                $destinationPath = 'microweb/images/header';
                $header = rand(10,100)."-".$file->getClientOriginalName();
                $file->move($destinationPath,$header);
                
                Directory::where('c_id',$companydetail->c_id)->update(['header'=>$header]);
        }


// to update company's about us
         if(!empty($request->about))
        {
            // $validation= $request->validate( [
            // 'material' => 'required|max:100|string']);

                $c_aboutus = $request->input('about');

        Directory::where('c_id',$companydetail->c_id)->update(['about'=> $c_aboutus]);
        }

      


        // // to update company's testimonial  
         if(!empty($request->testimonial))
        {
            $validation= $request->validate( [
            'testimonial' => 'required|max:100|string']);

                $c_testimonial = $request->input('testimonial');

        Directory::where('c_id',$companydetail->c_id)->update(['testimonial'=> $c_testimonial]);
        }
        
               // dd($companydetail->company_id);

        if(!empty($request->companyemail) || !empty($request->block) || !empty($request->sector) || !empty($request->area) || !empty($request->state) || !empty($request->phoneno))
        {
            $validation= $request->validate( [
            'companyemail' => 'required',
            'block'=> 'required',
            'sector'=> 'required',
            'area'=> 'required',
            'state'=> 'required',
            'phoneno'=> 'required'
            ]);

             $cemail = $request->input('companyemail');
             $cblock = $request->input('block');
             $sector = $request->input('sector');
             $area = $request->input('area');
             $state = $request->input('state');
             $phoneno = $request->input('phoneno');
             Directory::where('c_id',$companydetail->c_id)->update(['email'=> $cemail , 'block'=>$cblock, 'sector'=>$sector, 'area'=>$area, 'state'=>$state, 'phoneno'=> $phoneno]);
        
        }

        return  redirect('company/panel/dashboard')->with('status', 'Successfully updated!'); 
    }

    
    public function deletionmaterial($id) {
       
                DB::table("companyproduct")->delete($id);
            return  redirect('company/panel/materialedit')->with('status', 'Product Deleted!');
        }

     public function deletiontestimonial($cstid) {
       
                // DB::table("testimonial")->delete($cstid);
        MicrowebTestimonial::where('cstid',$cstid)->delete();
            return  redirect('company/panel/testimonialpanel')->with('status', 'Review Deleted!');
        }

    public function deletionservice($svid) {
       
                // DB::table("testimonial")->delete($cstid);
        MicrowebServices::where('svid',$svid)->delete();
            return  redirect('company/panel/services')->with('status', 'Service Deleted!');
        }


}
