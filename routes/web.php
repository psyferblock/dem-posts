<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Home\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/dashboard',[DashboardController::class, 'index']) 
    -> name('dashboard')
    ->middleware('auth');// the index is referencing hte method we created in the RegisterController file


// register
Route::get('/register',[RegisterController::class, 'index']) -> name('register');// the index is referencing hte method we created in the RegisterController file
Route::post('/register',[RegisterController::class, 'store']) ; //for the same page but a different method in order to connect and post to the database 
// after here we head to the controller to create the method that will store /savethe data we want 

// logout
Route::post('/logout',[LogoutController::class, 'store']) -> name('logout');


// log in 
Route::get('/login',[LoginController::class, 'index']) -> name('login');
Route::post('/login',[LoginController::class, 'log']);


//home page 
Route::get('/',[HomeController::class,'index'])->name('home');


Route::get('/posts', function () {
    return view('posts.index');
});
