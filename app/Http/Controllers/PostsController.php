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
        $posts = Post::orderBy('created_at','desc')->with(['user','likes'])->paginate(20); // eager loading at once instead of one thing at a time 
         // this gets the posts from the db
        return view('posts.index',[
            'posts'=> $posts
        ]);
    }
    public function show(Post $post)
    {
        return view('post.show',[
            'post'=>$post
        ])
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
    public function destroy(Post $post)

    {

        $this->authorize('delete',$post); // authorize calls the policy we need on the argument we want it to check and approve of. 'delete' is the policy we created
        // with authorize ... laravel already is connectd with the auth helpers so even though we defined the user in the policy creation its implicitly defined here since it only world with authorized individfuals
        $post->delete();
        return back();
    }
}
    

