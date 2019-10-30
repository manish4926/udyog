<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use App\Video;


class LoginController extends Controller
{    
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
    * @var string
     */

    /*if ( $user->isAdmin() ) {// do your margic here
        return redirect()->route('dashboard');
    }*/

    
    /*if(!session()->has('url.intended'))
    {
        session(['url.intended' => url()->previous()]);
    }*/
    protected $redirectTo = '/';

    

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $recentpostedvideos = Video::orderBy('id','desc')->limit(4)->get();      
            view()->share(['recentpostedvideos' => $recentpostedvideos]);
            return $next($request);
        });
        $this->middleware('guest')->except('logout');
    }

    public function redirectTo()
    {
        if (auth()->user()->hasRole('Admin')) {
            return route('dashboard');
        }
        elseif (auth()->user()->hasRole('Company')) {
        return route('companydashboard');
        } 
        elseif (auth()->user()->hasRole('General User')) {
            return route('userprofile',['id' => auth()->user()->id]);
        }
        else
        return '/';
    }
}
