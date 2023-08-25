@extends('layouts.app')

@section('content')

     <div class="flex justify-center ">
          <div class="w-8/12 mt-6 bg-white p-6 rounded-lg">
          <!-- @auth -->
                <form action="{{ route('posts') }}" method="post" class="mb-4">
                    @csrf
                    <div class="mb-4">
                        <label for="body" class="sr-only">Body</label>
                        <textarea name="body" id="body" cols="30" rows="4" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('body') border-red-500 @enderror" placeholder="Post something!"></textarea>

                        @error('body')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div>
                        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded font-medium">Post</button>
                    </div>
                </form>
                @if($posts->count())
                @foreach($posts as $post)
                    <div class="mb-4">
                        <a href="" class=""font-bold>{{$post->user->name}}</a>
                        <span class="text-sm text-gray-500"> {{$post->user->email}}</span>
                       
                        <span class="text-sm text-gray-500" > {{$post->created_at}}</span>
                        <p class="mb-2"> {{$post->body}}</p>
                        <div class="flex items-center"> 
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
                                <span>{{ $post->likes->count()}} {{Str::plural('like',$post->likes->count())}}</span>
                            </div>
                    </div>

                    @endforeach
                    
                        {{$posts->links()}}
                    @else
                    <p>there are no posts </p>
                    @endif
                
            <!-- @endauth -->
          </div>
     </div> 

@endsection