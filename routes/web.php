<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\Auth\RegisterControler;
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

Route::get('/register',[RegisterController::class,'index']) ;// the index is referencing hte method we created in the RegisterController file

Route::get('/posts', function () {
    return view('posts.index');
});
