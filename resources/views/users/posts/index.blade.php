@extends('layouts.app')

@section('content')

    <div class="flex justify-center">
        <div class="w-8/12 ">
            <div class="p-6">
                <h1 class="text-xl mb-1 font-medium shadow-sm">{{$user->name}}</h1>
                <p>{{$posts->count()}} {{Str::plural('post',$posts->count())}} and recieved {{$user->recievedLikes()->count()}} likes</p>

            </div>
            <div class=" bg-white p-6 mt-6rounded-lg">
            @if($posts->count())
                @foreach($posts as $post)
                    <x-post :post="$post"/>
                @endforeach
                        
                    {{$posts->links()}}
            @else
                <p>there are no posts </p>
            @endif
            </div>
        </div>
    </div> 
     

@endsection