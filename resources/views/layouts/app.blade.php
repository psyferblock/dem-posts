<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <title>Postie</title>

</head>
<body class=" bg-gray-200">
<nav class="p-6 bg-white flex justify-between">
    <ul class="flex items-center">
        <li class="p-3"><a href="{{route('home')}}">Home</a></li>
        <li class="p-3"><a href="{{route('dashboard')}}">Dashbord</a></li>
        <li class="p-3"><a href="">Post</a></li>
</ul>
<ul class="flex items-center">
    <!-- for authenticated users -->
    @auth 
    <li class="p-3"><a href="">name</a></li>
    <li class="p-3">
        <form action="{{route('logout')}}" method="post"  class="inline p-3"
            > 
            @csrf
            <button type="submit">logout</button></form></li>
    @endauth

    <!-- // for anyone not signed up on the platform -->
    @guest 
    <li class="p-3"><a href="{{route('login')}}">login</a></li>
    <li class="p-3"><a href="{{route('register')}}">register</a></li>
    @endguest

</ul>
</nav>

    @yield('content')

</body>
</html>