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
    <link href="http://fonts.cdnfonts.com/css/effra" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />


    <!--====== Slick CSS ======-->
    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/LineIcons.2.0.css')}}">
    <link href="{{asset('dashboards/assets/css/nucleo-icons.css')}}" rel="stylesheet" />
    <link href="{{asset('dashboards/assets/css/nucleo-svg.css')}}" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="{{asset('dashboards/assets/css/nucleo-svg.css')}}" rel="stylesheet" />
    <!-- CSS Files -->
    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    <link id="pagestyle" href="{{asset('dashboards/assets/css/argon-dashboard.css?v=2.0.0')}}" rel="stylesheet" />
    <!--====== Line Icons CSS ======-->
    @livewireStyles
</head>



<body class="g-sidenav-show bg-gray-100">
@if(!\Illuminate\Support\Facades\Auth::user()->email_verified_at)
    <x-includes.client.verify/>
@endif
<x-includes.client.sidebar/>

<main class="main-content position-relative border-radius-xl bg-white ">

    <x-includes.client.navbar/>
    {{ $slot }}
    <x-includes.admin.navs.footer/>
</main>



@stack('js')

@livewireScripts
<!--====== Jquery js ======-->
<script src="{{asset('dashboards/assets/js/core/popper.min.js')}}"></script>
<script src="{{asset('dashboards/assets/js/core/bootstrap.min.js')}}"></script>
<script src="{{asset('dashboards/assets/js/plugins/perfect-scrollbar.min.js')}}"></script>
<script src="{{asset('dashboards/assets/js/plugins/smooth-scrollbar.min.js')}}"></script>
<!--====== Plugins js ======-->
<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!--====== Main js ======-->
<!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{asset('dashboards/assets/js/argon-dashboard.js')}}"></script>


</body>
</html>
