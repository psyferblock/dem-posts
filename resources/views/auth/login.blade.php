@extends('layouts.app')

@section('content')

     <div class="flex justify-center">
          <div class="w-4/12 mt-6 bg-white p-6 rounded-lg">
<form action="{{route('login')}}" method="post">
    @csrf
    <div class="mb-4"> 
     @if(session('status'))
          <div class="bg-red-500 p-4 rounded-lg mb-6 text-white text-center"> {{session('status')}}
          </div>
          @endif
                         <label for="email" class="sr-only">Email</label>
                         <input type="text" name="email" id="email" placeholder="your Email" class="bg-gray-100 border-2 w-full p-4 rounded-lg 
                         @error('name') border-red-600 @enderror "value="{{old('email')}}">
                         @error('name')
                         <div class=" text-red-500 mt-2 text-sm ">
                              <!-- scoped message vsriable will be the text outputted   -->
                              {{$message}} 
                         </div>
                         @enderror
                    </div>
                    <div class="mb-4"> 
                         <label for="password" class="sr-only">Password</label>
                         <input type="password" name="password" id="password" placeholder="your Password" class="bg-gray-100 border-2 w-full p-4 rounded-lg 
                         @error('name') border-red-600 @enderror 
                         "value="{{old('passworfd')}}">
                         @error('password')
                         <div class=" text-red-500 mt-2 text-sm ">
                              <!-- scoped message vsriable will be the text outputted   -->
                              {{$message}} 
                         </div>
                         @enderror

                    </div>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full"> Log In</button>
</form>        
  </div>
     </div> 

@endsection