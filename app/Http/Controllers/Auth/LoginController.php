<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function index(){
        return view('auth.login');
    }


    public function log(){
       // get log in info
       //check login info with db 
       //route log in info to page desired 
    }
}

