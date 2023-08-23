@extends('layouts.app')

@section('content')

     <div class="flex justify-center">
          <div class="w-8/12 mt-6 bg-white p-6 rounded-lg">
<form action="">
    @csrf
    <div class="mb-4"> 
                         <label for="email" class="sr-only">Name</label>
                         <input type="text" name="email" id="email" placeholder="your Email" class="bg-gray-100 border-2 w-full p-4 rounded-lg 
                         @error('name') border-red-600 @enderror 
                         "value="{{old('email')}}">
                         @error('name')
                         <div class=" text-red-500 mt-2 text-sm ">
                              <!-- scoped message vsriable will be the text outputted   -->
                              {{$message}} 
                         </div>
                         @enderror
                    </div>
                    <div class="mb-4"> 
                         <label for="password" class="sr-only">Name</label>
                         <input type="password" name="password" id="password" placeholder="your Password" class="bg-gray-100 border-2 w-full p-4 rounded-lg 
                         @error('name') border-red-600 @enderror 
                         "value="{{old('name')}}">
                         @error('password')
                         <div class=" text-red-500 mt-2 text-sm ">
                              <!-- scoped message vsriable will be the text outputted   -->
                              {{$message}} 
                         </div>
                         @enderror
                    </div>
</form>        
  </div>
     </div> 

@endsection