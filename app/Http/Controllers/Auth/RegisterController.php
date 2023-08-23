<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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


        //-> store user'
        // we import the user model from models in order to use it for creating the new user that is to be sent to the database. 
        User::create([
            'name'=>$request->name,
            'username'=>$request->username,
            'email'=>$request->email,
            'password'=> Hash::make($request->password) //  the "Hash facade" hashes the password
            // facades are a front for underlying functionality and implementation. the word facade is used to point out a shortcut for underlying functionality 
            // normally youll call a new Hash() and make a new hash with a password. in a seperate code block to call it later. 
        ]);


        //->sign user in
        // the request only method gets us back exactly what we request from the function so below itll only return email and password
        auth()->attempt(
            $request->only('email','password')
        );
        // we can add the page directly in the redirect function but if we link it then we benefit from the naming . so later on even when we change the page name we wont have to go around our code to change it every where. well only do it in one place.
        return redirect()->route("dashboard");

        
        //->redirect user to other page 
    }
}

