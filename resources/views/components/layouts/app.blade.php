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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">


    <!--====== Slick CSS ======-->
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/LineIcons.2.0.css">
    <link href="{{asset('dashboards/assets/css/nucleo-icons.css')}}" rel="stylesheet" />
    <link href="{{asset('dashboards/assets/css/nucleo-svg.css')}}" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="{{asset('dashboards/assets/css/nucleo-svg.css')}}" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="{{asset('dashboards/assets/css/argon-dashboard.css?v=2.0.0')}}" rel="stylesheet" />
    <!--====== Line Icons CSS ======-->

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>
<body>
<div class="font-sans text-gray-900 antialiased">
    <x-includes.preloader/>
    {{ $slot }}
</div>


<!--====== Jquery js ======-->
<script src="assets/js/vendor/jquery-3.5.1-min.js"></script>
<script src="assets/js/vendor/modernizr-3.7.1.min.js"></script>
<!--====== Plugins js ======-->
<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>

<script src="assets/js/plugins.js"></script>
<!--===== Slick js ======-->
<script src="assets/js/slick.min.js"></script>
<!--====== Scrolling Nav js ======-->
<script src="assets/js/jquery.easing.min.js"></script>
<script src="assets/js/scrolling-nav.js"></script>
<!--====== wow js ======-->
<script src="assets/js/wow.min.js"></script>
<!--====== Particles js ======-->
<script src="assets/js/particles.min.js"></script>
<!--====== Main js ======-->
<!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{asset('dashboards/assets/js/argon-dashboard.min.js?v=2.0.0')}}"></script>
<script src="assets/js/main.js"></script>
</body>
</html>
