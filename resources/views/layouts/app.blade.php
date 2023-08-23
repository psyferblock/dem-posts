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
        <li class="p-3"><a href="{{route('index')}}">Home</a></li>
        <li class="p-3"><a href="">Dashbord</a></li>
        <li class="p-3"><a href="">Post</a></li>
</ul>
<ul class="flex items-center">
        <li class="p-3"><a href="">name</a></li>
        <li class="p-3"><a href="">login</a></li>
        <li class="p-3"><a href="{{route('register')}}">register</a></li>
        <li class="p-3"><a href="">logout</a></li>

</ul>
</nav>

    @yield('content')

</body>
</html>