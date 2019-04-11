<?php

namespace App\Http\Controllers\Auth ;

use App\User;
use App\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Str;
use Mail;
use Illuminate\Http\Request;
use App\Mail\verifyEmail;
use App\Directory;

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
    protected $redirectTo = '/home';

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
        return Validator::make($data, [
            'lastname' => ['required', 'string', 'max:255'],
            'firstname' => ['required', 'string', 'max:255'],
            

            'lastname' => ['required', 'string', 'max:255'],
            'firstname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
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
                'firstname' => $data['firstname'],
                'lastname' => $data['lastname'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
                'verifyToken'=>Str::random(40),
                'status' => 0,
            ]);
        

        $user->roles()->attach(Role::where('name','General User')->first());

        $thisUser = User::findOrFail($user->id);

        return redirect()->route('home');
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

    public function sendEmailDone($email,$verifyToken)
    {
        $user=User::where(['email'=>$email,'verifyToken'=>$verifyToken])->first();
        if($user)
        {
            return user::where(['email'=>$email,'verifyToken'=>$verifyToken])->update(['status'=>'1','verifyToken'=>NULL]);
        }
        else{
            return 'user not found';
        }
    }


    public function companyregister()
    {
        return view("auth.companyRegister");
    }

    public function CompanyValidate(Request $request)
    {

        $cname = $request->input('cname');
        $code = $request->input('code');

         
                if(!empty($cname))
                {
                    $ccode=Directory::where('cname',$cname)->value('ccode');

                   if($ccode==$code)
                    {
                        return view('auth.Register');
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

}

