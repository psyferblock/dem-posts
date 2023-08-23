@extends('layouts.app') 
<!-- these layouts are the ones that surround the entire page which means everything inside it ie: section is the one that presents itself under it. 
i imagine there is also one that we can do for a footer  -->

@section('content')

     <div class="flex justify-center">
          <div class="w-4/12 mt-6 bg-white p-6 rounded-lg flex justify-center">
               <form action="{{route('register')}}" method="post">
                    @csrf 
                    <!-- cross site request forgery check to pass the token you can inspectt the source of hte page (/register) to see the token generated when the form is uploaded to the page -->
                    <div class="mb-4"> 
                         <label for="name" class="sr-only">Name</label>
                         <input type="text" name="name" id="name" placeholder="your Name" class="bg-gray-100 border-2 w-full p-4 rounded-lg 
                         @error('name') border-red-600 @enderror 
                         "value="{{old('name')}}">
                         @error('name')
                         <div class=" text-red-500 mt-2 text-sm ">
                              <!-- scoped message vsriable will be the text outputted   -->
                              {{$message}} 
                         </div>
                         @enderror
                    </div>
                    <div class="mb-4"> 
                         <label for="username" class="sr-only">Username</label>
                         <input type="text" name="username" id="username" placeholder="your Username" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('username') border-red-600 @enderror "value="{{old('username')}} ">
                         @error('username')
                         <div class=" text-red-500 mt-2 text-sm ">
                              <!-- scoped message vsriable will be the text outputted   -->
                              {{$message}} 
                         </div>
                         @enderror
                    </div>
                    <div class="mb-4"> 
                         <label for="email" class="sr-only">Email</label>
                         <input type="text" name="email" id="email" placeholder="your Email" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('email') border-red-600 @enderror "value="{{old('email')}}">
                         @error('email')
                         <div class=" text-red-500 mt-2 text-sm ">
                              <!-- scoped message vsriable will be the text outputted   -->
                              {{$message}} 
                         </div>
                         @enderror
                    </div> 
                     <div class="mb-4"> 
                         <label for="password" class="sr-only">Password</label>
                         <input type="password" name="password" id="password" placeholder="your Password" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('password') border-red-600 @enderror "value="{{old('password')}}">
                         @error('password')
                         <div class=" text-red-500 mt-2 text-sm ">
                              <!-- scoped message vsriable will be the text outputted   -->
                              {{$message}} 
                         </div>
                         @enderror
                    </div>
                    <div class="mb-4"> 
                         <label for="password_confirmation" class="sr-only">repeat password</label>
                         <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Repeat your Password" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('password_confirmation') border-red-600 @enderror "value="{{old('password_confirmation')}}">
                         @error('password_confirmation')
                         <div class=" text-red-500 mt-2 text-sm ">
                              <!-- scoped message vsriable will be the text outputted   -->
                              {{$message}} 
                         </div>
                         @enderror
                    </div>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">Register</button>

               </form>
          </div>
     </div> 

@endsection