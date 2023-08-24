<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
        //here we are using a constructor to call a middleware function named auth.

        //the function will be clled from \http\middleware\kernel

    public function __construct()
    {
        $this->middleware(['auth']);
    }
    public function index()
    {
    // dd(auth()->user());

    return view('dashboard');
}
}
