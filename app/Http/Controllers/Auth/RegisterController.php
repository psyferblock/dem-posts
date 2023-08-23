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

    public function store(){
         dd('congrats you have registered'); // dd (die dump) will effectively kill the page and output anything you have there including variable or string
    }
}

