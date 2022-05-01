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
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">


        <!--====== Slick CSS ======-->
        <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/slick.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/LineIcons.2.0.css')}}">
        <!--====== Line Icons CSS ======-->

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body>
        <div class="font-sans text-gray-900 antialiased">
            <x-includes.guest.header/>
            <x-includes.preloader/>
            {{ $slot }}
        </div>

        <!--====== Jquery js ======-->
        <script src="{{asset('assets/js/vendor/jquery-3.5.1-min.js')}}"></script>
        <script src="{{asset('assets/js/vendor/modernizr-3.7.1.min.js')}}"></script>
        <script type="text/javascript" src="https://cdn.rawgit.com/prashantchaudhary/ddslick/master/jquery.ddslick.min.js" ></script>

        <script>
            var ddData = [
                {
                    text: "العربية",
                    value: 1,
                    selected: true,
                    imageSrc: "https://flagcdn.com/16x12/sa.png"
                },
                {
                    text: "English",
                    value: 2,
                    selected: false,
                    imageSrc: "https://flagcdn.com/16x12/gb.png"
                },
                {
                    text: "French",
                    value: 3,
                    selected: false,
                    imageSrc: "https://flagcdn.com/16x12/fr.png"
                },
                {
                    text: "deutsch",
                    value: 4,
                    selected: false,
                    imageSrc: "https://flagcdn.com/16x12/de.png"
                }
            ];
            $('#myDropdown').ddslick({
                data:ddData,
                width:150,
                imagePosition:"right",
                onSelected: function(selectedData){
                    //callback function: do something with selectedData;
                }
            });
        </script>
        <!--====== Plugins js ======-->
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
        <script src="assets/js/main.js"></script>
    </body>
</html>
