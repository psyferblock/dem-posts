@extends('layouts.app') 
<!-- these layouts are the ones that surround the entire page which means everything inside it ie: section is the one that presents itself under it. 
i imagine there is also one that we can do for a footer  -->

@section('content')

     <div class="flex justify-center">
          <div class="w-4/12 mt-6 bg-white p-6 rounded-lg">
               Register
               <form action="{{route('register')}}" method"post">
                    <div class="mb-4"> 
                         <label for="name" class="sr-only">Name</label>
                         <input type="text" name="name" id="name" placeholder="your Name" class="bg-gray-100 border-2 w-fullp-4 rounded-lg"value="">
                    </div>
                    <div class="mb-4"> 
                         <label for="userName" class="sr-only">Username</label>
                         <input type="text" name="userName" id="userName" placeholder="your userName" class="bg-gray-100 border-2 w-fullp-4 rounded-lg"value="">
                    </div>
                    <div class="mb-4"> 
                         <label for="email" class="sr-only">Email</label>
                         <input type="text" name="email" id="email" placeholder="your Email" class="bg-gray-100 border-2 w-fullp-4 rounded-lg"value="">
                    </div> 
                     <div class="mb-4"> 
                         <label for="password" class="sr-only">Password</label>
                         <input type="text" name="password" id="password" placeholder="your Password" class="bg-gray-100 border-2 w-fullp-4 rounded-lg"value="">
                    </div>
                    <div class="mb-4"> 
                         <label for="password_confirmation" class="sr-only">repeat password</label>
                         <input type="text" name="password_confirmation" id="password_confirmation" placeholder="Repeat your Password" class="bg-gray-100 border-2 w-fullp-4 rounded-lg"value="">
                    </div>

               </form>
          </div>
     </div> 

@endsection