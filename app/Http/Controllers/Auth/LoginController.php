<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    //this middleware to make sure we cant access the login page if we are not logged in
    // its called guest because it only allows access to guests of hte website hence the cant access if logged in.
    public function __construct()
    {
        $this->middleware(['guest']);
    }

    public function index(){
        return view('auth.login');
    }


    public function log(Request $request){

        

       //validate
       $this->validate($request,[
        'email'=>['required','max:255'],
        'password'=>['required'],
       ]);
        // get log in info
        //check login info with db 
       

        if(!auth()->attempt(
            $request->only('email','password'),
            // were adding an argument for the auth attempt in order to remember the request of the user
            $request->remember
        ))
        {
            return back()->with('status','invalid login credentials');
        }
       //route log in info to page desired 
       return redirect()->route('dashboard');
    }
}

