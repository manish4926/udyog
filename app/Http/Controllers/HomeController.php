<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        /*if(Auth::guest()) {
            dd('User Not Logged In.');
        }

        $user = Auth::user();
        if($user->hasRole('Admin')) {
            dd('User is Admin');
        } else {
            dd($user->user_roles());
            dd('Not Admin');
        }*/

        return view('home');
    }
}
