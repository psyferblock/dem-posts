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

}
