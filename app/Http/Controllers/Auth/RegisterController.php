<?php

namespace App\Http\Controllers\Auth ;

use App\User;
use App\Role;
use App\Directory;
use App\companyverify;
use App\CompanyDetail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Str;
use Mail;
use Illuminate\Http\Request;
use App\Mail\verifyEmail;
use Auth;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
    *  @var string
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *

     * @return void()
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        //dd($data);
        return Validator::make($data, [
            'firstname' => ['required', 'string', 'max:255'],
            'lastname'  => ['required', 'string', 'max:255'],
            'email'     => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password'  => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        
        $user =  User::create([
                'firstname'   => $data['firstname'],
                'lastname'    => $data['lastname'],
                'email'       => $data['email'],
                'password'    => Hash::make($data['password']),
                'verifyToken' => Str::random(40),
                'status'      => 0,
            ]);
        
         
        if(!empty($data['company_code'])) {
            //dd('dfff');
            $slug = seoUrl($data['company_name']);
//dd($slug);
            $companydetail = new Directory;
            $companydetail->user_id = $user->id;
            $companydetail->ccode = $data['company_code'];
            $companydetail->cname = $data['company_name'];
            $companydetail->slug = $slug;
            
            $companydetail->save();
            
            $user->roles()->attach(Role::where('name','Company')->first());

        } 
        else {
            $user->roles()->attach(Role::where('name','General User')->first());    
        }
        
        //$thisUser = User::findOrFail($user->id);
        return $user;
        
        
        //return redirect()->route('home');
        //$thisUser = User::findOrFail($user->id);

        //return redirect()->route('home');
        //$this->sendEmail($thisUser);
    }

    public function sendEmail($thisUser)
    {
        Mail::to($thisUser['email'])->send(new verifyEmail($thisUser));
    }

    public function verifyEmailFirst()
    {
        return view('email.verifyEmailFirst');
    }

    public function companydetails()
    {
        return view('directory.create');
    }


    public function sendEmailDone($email,$verifyToken)
    {
        $user=User::where(['email'=>$email,'verifyToken'=>$verifyToken])->first();
        if($user)
        {
            return User::where(['email'=>$email,'verifyToken'=>$verifyToken])->update(['status'=>'1','verifyToken'=>NULL]);
        }
        else{
            return 'user not found';
        }
    }


    public function companyregister()
    {
        
        return view("auth.companyuserRegister");
    }

    /*public function CompanyValidate(Request $request)
    {
$check=1;
        $cname = $request->input('cname');
        $code = $request->input('code');
        
         
                if(!empty($cname))
                {
                    $ccode=Directory::where('cname',$cname)->value('ccode');

                   if($ccode==$code)
                    {
                        return view('auth.companyuserRegister');
                    }
                    else
                    {
                        return view('auth.companyRegister');
                    } 

                 }

            else
            {
                 return view('auth.companyRegister');
            }
            
    }
    public Cvalidation(Request $request)
    {
        $validation= $request->validate( [
            'firstname' => 'required|max:100|string',
            'lastname' => 'required|max:100|string',
            'email' => 'required|max:50|email',
            'password'=>'required|max:10',
        
        ]);
        // print_r($validation);
        if($validation->true){}
            $firstname = $request->input('firstname');
        $lastname = $request->input('lastname');
        $email = $request->input('email');
        $password = Hash::make('password');
        
        $data = array('first'=>$firstname, 'lastname' => $lastname,'email'=>$email,'password'=>$password);
        create($data,$request);
        DB::table('user')->insert($data);
        echo "Record inserted successfully.<br/>";
    }
    */

    public function checkCompany(Request $request) {

        $companydetail = CompanyDetail::Where('ccode', $request->company_code)
                        ->count();
        
        if($companydetail==0) {
            $companyCount = companyverify::where('cname' , $request->company_name)
                            ->Where('ccode', $request->company_code)
                            ->count();
            
            $companydetail = CompanyDetail::Where('ccode', $request->company_code)
                            ->count();
        
            if($companyCount == 1) {
                return json_encode('true');
            } else {
                return json_encode('false');
            }
        }
        else{
            return json_encode('false');
        }
    }

    public function redirectTo()
    {
        if (auth()->user()->hasRole('Company')) {
            return route('directorycreate');
        } else {
            return '/';
        }
    }
}

    