<!doctype html>
<html lang="en">
<head>
    <title>Colorlib Breed</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800" rel="stylesheet">

    <link rel="stylesheet" href="{{asset(env('THEME'))}}/css/bootstrap.css">
    <link rel="stylesheet" href="{{asset(env('THEME'))}}/css/animate.css">
    <link rel="stylesheet" href="{{asset(env('THEME'))}}/css/owl.carousel.min.css">

    <link rel="stylesheet" href="{{asset(env('THEME'))}}/fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="{{asset(env('THEME'))}}/fonts/fontawesome/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{asset(env('THEME'))}}/fonts/flaticon/font/flaticon.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="{{asset(env('THEME'))}}/css/style.css">
</head>
<body>

<header role="banner">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand absolute" href="{{asset(env('THEME'))}}/index.html">breed</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExample05">
                <ul class="navbar-nav mx-auto pl-lg-5 pl-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{asset(env('THEME'))}}/index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{asset(env('THEME'))}}/about.html">About</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="{{asset(env('THEME'))}}/services.html" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Breed</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown04">
                            <a class="dropdown-item" href="{{asset(env('THEME'))}}/#">German Shepherd</a>
                            <a class="dropdown-item" href="{{asset(env('THEME'))}}/#">Labrador</a>
                            <a class="dropdown-item" href="{{asset(env('THEME'))}}/#">Rottweiler</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{asset(env('THEME'))}}/blog.html">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{asset(env('THEME'))}}/contact.html">Contact</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
</header>
<!-- END header -->

<!-- START slider -->
@yield('slider')
<!-- END slider -->

@yield('content')

@yield('footer')

<!-- loader -->
<div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>

<script src="{{asset(env('THEME'))}}/js/jquery-3.2.1.min.js"></script>
<script src="{{asset(env('THEME'))}}/js/popper.min.js"></script>
<script src="{{asset(env('THEME'))}}/js/bootstrap.min.js"></script>
<script src="{{asset(env('THEME'))}}/js/owl.carousel.min.js"></script>
<script src="{{asset(env('THEME'))}}/js/jquery.waypoints.min.js"></script>
<script src="{{asset(env('THEME'))}}/js/main.js"></script>
</body>
</html>
