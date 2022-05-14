<!--====== HEADER PART START ======-->
<div class="navbar-area" >
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

                        <div class="absolute left-0 right-0 z-20 hidden lg:block w-11/12 rounded-lg mx-auto duration-300 bg-white shadow lg:w-auto collapse navbar-collapse  mt-2 top-100 mt-full lg:static lg:bg-transparent lg:shadow-none" id="navbarOne">
                            <ul id="nav" class="items-center lg:py-3 py-0 content-start mr-auto lg:justify-end navbar-nav lg:flex">
                                <li class="nav-item active hover:bg-indigo-100 rounded-lg ">
                                    <a class="page-scroll" href="#home">{{__('Home')}}</a>
                                </li>
                                <li class="nav-item hover:bg-indigo-700  rounded-lg ">
                                    <a class="page-scroll" href="#about">{{__('About')}}</a>
                                </li>
                                <li class="nav-item hover:bg-indigo-700 rounded-lg ">
                                    <a class="page-scroll" href="#features">{{__('Groups')}}</a>
                                </li>
                                <li class="nav-item hover:bg-indigo-700  rounded-lg ">
                                    <a class="page-scroll" href="#team">{{__('Prices')}}</a>
                                </li>
                                <li class="nav-item hover:bg-indigo-700  rounded-lg ">
                                    <a class="page-scroll" href="#blog">{{__('Blog')}}</a>
                                </li>
                                <li class="nav-item text-indigo-600 hover:bg-indigo-100 rounded-lg flex lg:hidden">
                                    <a class="text-indigo-600"  href="{{route('login')}}" rel="nofollow">{{ __('Login') }}</a>
                                </li>
                                <li class="nav-item hover:bg-indigo-100 rounded-lg flex lg:hidden">
                                    <a class="text-red-500"  href="{{route('register')}}" rel="nofollow">{{ __('Join Now') }}</a>
                                </li>
                                <li class="nav-item float-end w-100 lg:flex hidden">
                                    <div id="languages"></div>
                                </li>

                                @guest
                                    <div class="lg:flex items-center absolute right-0 hidden  mr-12 navbar-btn mt-0static lg:mr-0">
                                        <a class="main-btn my-0 gradient-btn mx-2" data-scroll-nav="0" href="{{route('login')}}" rel="nofollow">{{ __('Login') }}</a>
                                    </div>
                                @else
                                    <div class="absolute right-0 hidden  mr-24 navbar-btn sm:inline-block lg:mt-0 lg:static lg:mr-0">
                                        <a class="main-btn gradient-btn-2" data-scroll-nav="0" href="{{route('dashboard')}}" rel="nofollow">My account</a>
                                    </div>
                                @endguest

                            </ul>
                        </div> <!-- navbar collapse -->

                    </nav> <!-- navbar -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div> <!-- navbar area -->
<!--====== HEADER PART ENDS ======-->
