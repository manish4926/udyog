<?php

<<<<<<< HEAD
=======

>>>>>>> d2692a5e98b7dfc23494d27ca3b0d654eb1091c0
namespace App\Http\Controllers\Auth ;

use App\User;
use App\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Str;
<<<<<<< HEAD
//use App\User;
use Mail;
use App\Mail\verifyEmail;
=======
use Mail;
use App\Mail\verifyEmail;

>>>>>>> d2692a5e98b7dfc23494d27ca3b0d654eb1091c0
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
<<<<<<< HEAD
    *  @var string
=======
     * @var string
>>>>>>> d2692a5e98b7dfc23494d27ca3b0d654eb1091c0
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
<<<<<<< HEAD
=======

>>>>>>> d2692a5e98b7dfc23494d27ca3b0d654eb1091c0
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
<<<<<<< HEAD
            'lastname' => ['required', 'string', 'max:255'],
            'firstname' => ['required', 'string', 'max:255'],
            
=======

            'lastname' => ['required', 'string', 'max:255'],
            'firstname' => ['required', 'string', 'max:255'],
>>>>>>> d2692a5e98b7dfc23494d27ca3b0d654eb1091c0
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
<<<<<<< HEAD
        
=======
>>>>>>> d2692a5e98b7dfc23494d27ca3b0d654eb1091c0
        $user =  User::create([
                'firstname' => $data['firstname'],
                'lastname' => $data['lastname'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
                'verifyToken'=>Str::random(40),
<<<<<<< HEAD
                'status' => 0,
            ]);
=======
            ]);

>>>>>>> d2692a5e98b7dfc23494d27ca3b0d654eb1091c0
        $user->roles()->attach(Role::where('name','General User')->first());

        $thisUser = User::findOrFail($user->id);


        $this->sendEmail($thisUser);
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
<<<<<<< HEAD
}
=======
}
>>>>>>> d2692a5e98b7dfc23494d27ca3b0d654eb1091c0
