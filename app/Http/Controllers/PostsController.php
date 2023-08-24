<?php

namespace App\Http\Controllers;

use App\Models\Post;
// use App\Models\User;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    //
    public function index()
    {
        return view('posts.index');
    }




    public function store(Request $request)
{
    // dd($request);
    //validate 
    $this->validate($request,[
        'body'=> 'required '
    ]);

    // below is a straight forward one to initiate what posts do. but a user can have many posts which means we will have to create a more eloquent model
    // Post::create([
    //     'user_id'=>auth()->user()->id(),
    //     'body'=>$request->body
    // ])
    
    // creating the eloquent model 
 
    request()->user()->posts()->create([
    'body'=>$request->body

]); // in the user model well define the posts method.
return back();
}
}
