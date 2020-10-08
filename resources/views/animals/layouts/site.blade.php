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
    <link rel="stylesheet" href="{{asset(env('THEME'))}}/css/animals.css">
</head>
<body>

<header role="banner">
    @yield('menu')
</header>
<!-- END header -->

<!-- START slider -->
@yield('slider')
<!-- END slider -->

@if(isset($errors))
    <div style="background-color:red; text-align: center;" >
        <ul>
            @foreach($errors->all() as $error)
                <li style="list-style-type: none"><h3>{{$error}}</h3></li>
            @endforeach
        </ul>
    </div>
@endif

@if(session('status'))
    <div style="background-color: green; text-align: center;">
        {{session('status')}}
    </div>
@endif

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
