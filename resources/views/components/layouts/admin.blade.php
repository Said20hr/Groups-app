<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" sizes="16x16" href="{{asset('assets/images/logo-3.png')}}" />
    <title>{{ __('Majed Analytics') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />


    <!--====== Slick CSS ======-->
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/LineIcons.2.0.css">
    <link href="{{asset('dashboard/assets/css/nucleo-icons.css')}}" rel="stylesheet" />
    <link href="{{asset('dashboard/assets/css/nucleo-svg.css')}}" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="{{asset('dashboard/assets/css/nucleo-svg.css')}}" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="{{asset('dashboard/assets/css/argon-dashboard.css?v=2.0.0')}}" rel="stylesheet" />
    <!--====== Line Icons CSS ======-->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>



<body class="g-sidenav-show bg-gray-100">

<x-includes.admin.navs.sidebar/>

<main class="main-content position-relative border-radius-lg ">
    <div class="min-height-300 bg-primary position-absolute w-100"></div>
    <x-includes.admin.navs.navbar/>
    {{ $slot }}
</main>



@stack('js')


<!--====== Jquery js ======-->
<script src="{{asset('dashboard/assets/js/core/popper.min.js')}}"></script>
<script src="{{asset('dashboard/assets/js/core/bootstrap.min.js')}}"></script>
<script src="{{asset('dashboard/assets/js/plugins/perfect-scrollbar.min.js')}}"></script>
<script src="{{asset('dashboard/assets/js/plugins/smooth-scrollbar.min.js')}}"></script>
<!--====== Plugins js ======-->
<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!--====== Main js ======-->
<!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{asset('dashboard/assets/js/argon-dashboard.min.js?v=2.0.0')}}"></script>


</body>
</html>
