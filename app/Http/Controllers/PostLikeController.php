<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostLikeController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    // insert
    public function store(Post $post,Request  $request)
    {

        if($post->likedBy($request->user())){
            return response(null,409); // 409 is a conflict http code 
        };
        $post->likes()->create([
            'user_id'=> $request->user()->id,
        ]);

        return back();
        // dd($id);
    }

    //delete
    public function destroy(Post $post,Request $request)
    {
        if($post->likedBy($request->user()))
        {
            $request->user()->likes()->where('post_id',$post->id)->delete();
        }
        return back();
    }
}
