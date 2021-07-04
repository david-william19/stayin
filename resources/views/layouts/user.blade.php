<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

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
    <link rel="stylesheet" href="https://use.fontawesome.com/4abf6983ae.css">

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
            <div class="logo">
                <img src="{{asset('images/logo.png')}}" alt="logo" width="68" />
            </div>
            <div class="navbar-nav navbar-light d-flex flex-row">
                <a class="nav-item nav-link underline " href="#">New Experience</a>
                <a class="nav-item nav-link underline mx-5" href="#">Place to Stay</a>
                <a class="nav-item nav-link underline" href="#">Packages</a>
            </div>
            <div class="navbar-nav d-flex flex-row">
                <a class="nav-item nav-link mr-4" href="#">Login</a>
                <a class="btn-register" href="#">Register</a>
            </div>
        </div>
    </nav>
    <!-- end navigation section -->

    <div>
        <main>
            @yield('content')
        </main>
    </div>
</body>

</html>