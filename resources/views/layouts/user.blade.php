<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Logo -->
    <link rel="icon" href="{{asset('images/logo.png')}}" type="image/icon type">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Unix | Unique Experience</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;500&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/style-packages.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" integrity="sha384-haqrlim99xjfMxRP6EWtafs0sB1WKcMdynwZleuUSwJR0mDeRYbhtY+KPMr+JL6f" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            new Splide('#image-slider', {
                'start': 1,
                'cover': true,
                'heightRatio': 0.5,
            }).mount();
        });
    </script>
</head>

<body>
    <!-- navigation section -->
    <nav>
        <div class="container-fluid d-flex justify-content-around align-items-center py-3">
            <div class="logo d-flex">
                <img src="{{asset('images/logo.png')}}" alt="logo" width="120" />
                <p class="ml-4 mt-3">Forget Your Work, Let’s Start New Experience!</p>
            </div>
            <div class="navbar-nav navbar-light d-flex flex-row">
                <a class="nav-item nav-link underline mr-4" href="{{route('home')}}">New Experience</a>
                <a class="nav-item nav-link underline" href="{{route('packages')}}">Packages</a>
            </div>

            @if (Auth::check())
            <div class="navbar-nav d-flex flex-row">
                <a class="nav-item nav-link mr-4" href="">Hi, {{Auth::User()->name}}</a>
                <form action="{{route('logout')}}" method="POST">
                    @csrf
                    <button type="submit" class="btn-register">Logout</button>
                </form>
            </div>
            @else
            <div class="navbar-nav d-flex flex-row">
                <a class="nav-item nav-link mr-4" href="{{route('login')}}">Login</a>
                <a class="btn-register" href="{{route('register')}}">Register</a>
            </div>
            @endif
        </div>
    </nav>
    <!-- end navigation section -->

    <div>
        <main>
            @yield('content')
        </main>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>