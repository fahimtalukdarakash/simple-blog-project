<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('/')}}css/bootstrap.css"/>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a href="" class="navbar-brand">Blog</a>
        <ul class="navbar-nav">
            <li><a href="{{route('home')}}" class="nav-link">Home</a></li>
            <li><a href="{{route('about')}}" class="nav-link">About</a></li>
            @if(isset(Auth::user()->id))
            <li><a href="{{route('add-blog')}}" class="nav-link">Add-Blog</a></li>
            <li><a href="{{route('manage-blog')}}" class="nav-link">Manage-Blog</a></li>
                <li class="dropdown">
                    <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">{{Auth::user()->name}}</a>
                    <ul class="dropdown-menu">
                        <li><a href="{{route('dashboard')}}" class="dropdown-item">Dashboard</a></li>
                        <li><a href="" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logoutForm').submit();">Logout</a></li>
                        <form action="{{route('logout')}}" method="POST" id="logoutForm">
                            @csrf
                        </form>
                    </ul>
                </li>
            @else
                <li><a href="{{route('login')}}" class="nav-link">Login</a></li>
            @endif
        </ul>
    </div>
</nav>
@yield('body')
<script src="{{asset('/')}}js/bootstrap.bundle.js"></script>
</body>
</html>
