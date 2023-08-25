<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Display the posts index page.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        $posts = Post::paginate(20);
         // this gets the posts from the db
        return view('posts.index',[
            'posts'=> $posts
        ]);
    }

    /**
     * Store a new post.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // Validate the request
        $validatedData = $request->validate([
            'body' => 'required',
        ]);

        // Create a new post using the authenticated user's ID
        $request->user()->posts()->create($validatedData);

        // Redirect back to the previous page
        return back();
    }
}
    

