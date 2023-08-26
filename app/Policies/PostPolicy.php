<?php

namespace App\Policies;

use App\Models\Post;
use App\Models\User;

class PostPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
        
    }
    public function delete(User $user,Post $post)
    {
        return $user->id ===$post->user_id; //creating hte policy is basically a check. its the same as a controller but its sole purpose is to add rls to our tables in an eloquent way ==> after this we adjust in the AuthSserviceProviders where we want to use it 
    }

}
