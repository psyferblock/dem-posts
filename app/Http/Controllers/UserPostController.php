<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
class UserPostController extends Controller
{
    // the goal of this controller is to grab an authenticated user and show a list of their posts 
    public function index(User $user)
    {
        $posts=$user->posts()->with(['user','likes'])->paginate(20);
        return view('users.posts.index',[
            'user'=>$user,
            'posts'=>$posts,
        ]);
    }
    
}
