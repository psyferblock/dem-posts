<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    public function index(){
        return view('auth.register'); // here we are setting the location of the view in advance thinking of the auth directory that has a register file waiting to beused      
    }

    public function store( Request $request ){ // remember $request is the variable object from the input 
        //  dd('congrats you have registered'); // dd (die dump) will effectively kill the page and output anything you have there including variable or string 

        //VALIDATION 
        //->validate the user 
        $this->validate($request,[
            'name'=>['required','max:255'],//same as the one below just different syntax
            'username'=>'required|max:255',
            'email'=> 'required|email|max:255',
            'password'=>'required|confirmed', //ther confirmed will look for any data submitted with an _confirmed field and make sure the 2 fields match 
            

        ]);
        //-> store user
        //->sign user in
        //->redirect user to other page 
    }
}

