<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

<<<<<<< HEAD

    class LoginController extends Controller
{    
=======
class LoginController extends Controller
{
>>>>>>> d2692a5e98b7dfc23494d27ca3b0d654eb1091c0
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
<<<<<<< HEAD
    * @var string
=======
     * @var string
>>>>>>> d2692a5e98b7dfc23494d27ca3b0d654eb1091c0
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
