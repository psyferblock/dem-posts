@props(['post'=>$post])
<div>
    <!-- Nothing worth having comes easy. - Theodore Roosevelt -->
    <div class="mb-4">
            <a href="{{route('users.posts',$post->user)}}" class=""font-bold>{{$post->user->name}}</a>
            <span class="text-sm text-gray-500"> {{$post->user->email}}</span>
        
            <span class="text-sm text-gray-500" > {{$post->created_at}}</span>
            <p class="mb-2"> {{$post->body}}</p>
            <!-- we can use if statements to check the auth with the post depending on how we establish the controller of the 'delete' button. but its prefered to use the directives that laravel give us through policies. much cleaner and help is a smoother flow in writing code -->
                @can('delete',$post)
                <form action="{{route('posts.destroy',$post)}}" method="post"> 
                    @csrf
                    @method('DELETE')
                
                    <button type="submit" class="text-blue-500">delete</button>
                
                </form>
                @endcan 

        <div class="flex items-center"> 
            @auth
                @if(!$post->likedBy(auth()->user()))

            <!--  we dont have to use the root model binding setup $post->id since we set up the model for it. we take the post and extract the id from it. -->
                    <form action="{{route('posts.likes', $post)}}" method="post" class="mr-1">
                        @csrf
                        <button type="submit" class="text-blue-500">
                            like
                        </button>
                    </form>
                
                @else

            <!-- for some reason we cant use delete method in html so we use method spoofing  -->
                    <form action="{{route('posts.likes', $post)}}" method="post" class="mr-1">
                        @csrf
                        <!-- method spoofing  -->
                        @method('DELETE')

                        <button type="submit" class="text-blue-500">
                            unlike
                        </button>
                    </form>
                
                @endif
                @endauth    

                <span>{{ $post->likes->count()}} {{Str::plural('like',$post->likes->count())}}</span>
            </div>
        </div>
                        
</div>