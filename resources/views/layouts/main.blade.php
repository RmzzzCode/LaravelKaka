<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
{{--    @vite(['resources/css/app.css','resources/js/app.js'])--}}
    <link rel="stylesheet" href="{{asset('Bootstrap/bootstrap.css')}}">
</head>
<body>
<div>
    <div class="container ms-5">
    <div>
        <nav>
            <ul>
{{--                <li><a href="{{route('about.index')}}">About</a></li>--}}
                <li><a href="{{route('contacts.index')}}">Contacts</a></li>
                <li><a href="{{route('post.index')}}">Posts</a></li>
                <li><a href="{{route('register.index')}}">Registration</a></li>
                <li><a href="{{route('login.login')}}">Login</a></li>
            </ul>
        </nav>
    </div>
    @yield('content')
</div>
</div>
</body>
</html>
