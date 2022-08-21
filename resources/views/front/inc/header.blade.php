<!DOCTYPE html>
<html lang="en">



<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>{{ $content->name }}</title>

    <link rel="shortcut icon" href="{{ asset('/') }}images/{{ $content->favicon }}">


    <link rel="stylesheet" href="{{ asset('/') }}assets/front/css/fontawesome.min.css">

    <link rel="stylesheet" href="{{ asset('/') }}assets/front/css/animate.css">

    <link rel="stylesheet" href="{{ asset('/') }}assets/front/css/aos.css">

    <link rel="stylesheet" href="{{ asset('/') }}assets/front/css/magnific-popup.css">

    <link rel="stylesheet" href="{{ asset('/') }}assets/front/css/owl.carousel.min.css">

    <link rel="stylesheet" href="{{ asset('/') }}assets/front/css/slick.css">

    <link rel="stylesheet" href="{{ asset('/') }}assets/front/css/slick-theme.css">

    <link rel="stylesheet" href="{{ asset('/') }}assets/front/css/meanmenu.min.css">

    <link rel="stylesheet" href="{{ asset('/') }}assets/front/css/owl.theme.css">

    <link rel="stylesheet" href="{{ asset('/') }}assets/front/css/bootstrap.min.css">

    <link rel="stylesheet" href="{{ asset('/') }}assets/front/css/style.css">

    <style>
        :root {
            --primary: #091069;
            --secondary: #8624e1;
        }
    </style>

</head>

<body>


    <header class="header-wraper transparent-header agency-header">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-xl-2 col-lg-2 col-md-4">
                    <a class="navbar-brand logo" href="{{ url('/') }}">
                        <img src="{{ asset('/') }}images/{{ $content->logo }}" alt="SaasNext">
                        <img src="{{ asset('/') }}images/{{ $content->logo }}" class="d-none" alt="SaasNext">
                    </a>
                </div>
                <div class="col-xl-6 col-lg-6 text-left pr-0 d-none d-lg-block">
                    <nav id="responsive-menu" class="main-menu">
                        <ul class="menu-items">

                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="{{ url('/blogs') }}">Blogs</a></li>
                            <li><a href="#service">Services</a></li>
                            <li><a href="#feature">About us</a></li>
                            <li><a href="#review">contact us</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-xl-4 col-lg-4 d-none d-lg-block text-right">
                    <span class="phone-number mr-4">Call Us: {{ $content->phone }}</span>
                    {{-- <a href="#" class="theme-btn sign-btn">Sing in</a> --}}
                </div>
                <div class="col-md-12 d-lg-none">
                    <div class="responsive-menu"></div>
                </div>
            </div>
        </div>
    </header>
    <div class="wrapper">
