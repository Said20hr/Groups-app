<!--====== HEADER PART START ======-->
<div class="navbar-area">
        <div class="container relative">
            <div class="row">
                <div class="w-full">
                    <nav class="flex items-center justify-between navbar navbar-expand-lg">
                        <a href="{{route('dashboard')}}" class="mr-4 navbar-brand" >
                            <img src="{{asset('assets/images/MAJED.svg')}}" alt="Logo" class="w-12">
                        </a>
                        <button class="block navbar-toggler focus:outline-none lg:hidden" type="button" data-toggle="collapse" data-target="#navbarOne" aria-controls="navbarOne" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                        </button>

                        <div class="absolute left-0 z-20 hidden w-full px-5 py-3 duration-300 bg-white shadow lg:w-auto collapse navbar-collapse lg:block top-100 mt-full lg:static lg:bg-transparent lg:shadow-none" id="navbarOne">
                            <ul id="nav" class="items-center content-start mr-auto lg:justify-end navbar-nav lg:flex">
                                <li class="nav-item active">
                                    <a class="page-scroll" href="#home">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll" href="#about">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll" href="#features">Groupes</a>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll" href="#team">Prices</a>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll" href="#blog">Blog</a>
                                </li>
                                <li class="nav-item float-end w-100">
                                    <div id="myDropdown"></div>
                                </li>

                            </ul>
                        </div> <!-- navbar collapse -->
                        @guest
                            <div class="flex items-center absolute right-0  mt-2 mr-12 navbar-btn  lg:mt-0 lg:static lg:mr-0">
                                <a class="main-btn my-0 gradient-btn-2 mx-2" data-scroll-nav="0" href="{{route('login')}}" rel="nofollow">{{ __('Login') }}</a>
                                <a class="main-btn my-0 gradient-btn mx-2" data-scroll-nav="0" href="{{route('register')}}" rel="nofollow">{{ __('Join Now') }}</a>
                            </div>

                        @else
                            <div class="absolute right-0 hidden mt-2 mr-24 navbar-btn sm:inline-block lg:mt-0 lg:static lg:mr-0">
                                <a class="main-btn gradient-btn-2" data-scroll-nav="0" href="{{route('dashboard')}}" rel="nofollow">My account</a>
                            </div>
                        @endguest
                    </nav> <!-- navbar -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div> <!-- navbar area -->
<!--====== HEADER PART ENDS ======-->
