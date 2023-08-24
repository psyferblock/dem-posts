<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        //here we are using a constructor to call a middleware function named auth.
        //the function will be clled from \http\middleware\kernel
        $this->middlware((['auth']));
    }
    public function index(){
    // dd(auth()->user());

    return view('dashboard');
}
}
