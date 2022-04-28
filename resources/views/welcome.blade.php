<x-guest-layout>
    <header class="header-area">
        <div id="home" class="header-hero" style="background-image: url({{asset('assets/images/banner-bg.svg')}})">
            <div class="container">
                <div class="justify-center row">
                    <div class="w-full lg:w-2/3">
                        <div class="pt-32 mb-12 text-center lg:pt-48 header-hero-content">
                            <h3 class="text-3xl font-light leading-tight text-white header-sub-title wow fadeInUp mb-4" data-wow-duration="1.3s" data-wow-delay="0.2s">{{ __('Welcome to') }}</h3>
                            <h2 class="mb-4 text-5xl font-bold text-white header-title wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.5s">{{ __('Majed Analytics') }}</h2>
                            <p class="mb-8 text-white text wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.8s">
                                {{ __('In the history of modern astronomy, there is probably no one
                                greater leap forward.')}}</p>
                            <a href="#" class="main-btn gradient-btn gradient-btn-2 wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="1.1s">Get Started</a>
                        </div> <!-- header hero content -->
                    </div>
                </div> <!-- row -->
                <div class="justify-center row">
                    <div class="w-full lg:w-2/3">
                        <div class="text-center header-hero-image wow fadeIn" data-wow-duration="1.3s" data-wow-delay="1.4s">
                            <img src="assets/images/header-hero.png" alt="hero">
                        </div> <!-- header hero image -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
            <div id="particles-1" class="particles"></div>
        </div> <!-- header hero -->
    </header>

    <!--====== SERVICES PART START ======-->
    <section id="features" class="services-area pt-120">
        <div class="container">
            <div class="justify-center row">
                <div class="w-full">
                    <div class="pb-10 text-center section-title">
                        <div class="m-auto line"></div>
                        <h3 class="title">{{ __('In the history of modern astronomy, there is probably no one
                            greater leap forward.')}}</h3>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="justify-center row">
                <div class="w-full sm:w-2/3 lg:w-1/3">
                    <div class="single-services wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                        <div class="services-icon">
                            <img class="shape" src="assets/images/services-shape.svg" alt="shape">
                            <img class="shape-1" src="assets/images/services-shape-1.svg" alt="shape">
                            <i class="lni lni-target-customer"></i>
                        </div>
                        <div class="mt-8 services-content">
                            <h4 class="mb-8 text-xl font-bold text-gray-900">{{ __('Get started')}}</h4>
                            <p class="mb-8">{{ __('In the history of modern astronomy, there is probably no one
                                greater leap forward.')}}</p>
                            <a class="duration-300 hover:text-theme-color" href="javascript:void(0)">{{ __('Learn More')}} <i class="ml-2 lni lni-chevron-right"></i></a>
                        </div>
                    </div> <!-- single services -->
                </div>
                <div class="w-full sm:w-2/3 lg:w-1/3">
                    <div class="mt-8 text-center single-services wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                        <div class="services-icon">
                            <img class="shape" src="assets/images/services-shape.svg" alt="shape">
                            <img class="shape-1" src="assets/images/services-shape-2.svg" alt="shape">
                            <i class="lni lni-comments-reply"></i>
                        </div>
                        <div class="mt-8 services-content">
                            <h4 class="mb-8 text-xl font-bold text-gray-900">{{ __('Join Groups')}}</h4>
                            <p class="mb-8">{{ __('In the history of modern astronomy, there is probably no one
                                greater leap forward.')}}</p>
                            <a class="duration-300 hover:text-theme-color" href="javascript:void(0)">{{ __('Learn More')}} <i class="ml-2 lni lni-chevron-right"></i></a>
                        </div>
                    </div> <!-- single services -->
                </div>
                <div class="w-full sm:w-2/3 lg:w-1/3">
                    <div class="mt-8 text-center single-services wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
                        <div class="services-icon">
                            <img class="shape" src="assets/images/services-shape.svg" alt="shape">
                            <img class="shape-1" src="assets/images/services-shape-3.svg" alt="shape">
                            <i class="lni lni-stats-up"></i>
                        </div>
                        <div class="mt-8 services-content">
                            <h4 class="mb-8 text-xl font-bold text-gray-900">{{ __('increase your profite')}}</h4>
                            <p class="mb-8">{{ __('In the history of modern astronomy, there is probably no one
                                greater leap forward.')}}</p>
                            <a class="duration-300 hover:text-theme-color" href="javascript:void(0)">{{ __('Learn More')}} <i class="ml-2 lni lni-chevron-right"></i></a>
                        </div>
                    </div> <!-- single services -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    <!--====== SERVICES PART ENDS ======-->
    <section class="relative pt-20 about-area">
        <div class="container">
            <div class="row">
                <div class="w-full lg:w-1/2">
                    <div class="mx-4 mt-12 about-content wow fadeInLeftBig" data-wow-duration="1s" data-wow-delay="0.5s">
                        <div class="mb-4 section-title">
                            <div class="line"></div>
                            <h3 class="title"><span>{{ __('Crafted for')}}</span> {{ __('SaaS, App and Software Landing Page')}}</h3>
                        </div> <!-- section title -->
                        <p class="mb-8">
                            {{ __('In the history of modern astronomy, there is probably no one
                            greater leap forward than the building and launch of the space
                            telescope known as the Hubble..')}}</p>
                        <a href="javascript:void(0)" class="main-btn gradient-btn">{{ __('Try it Free')}}</a>
                    </div> <!-- about content -->
                </div>
                <div class="w-full lg:w-1/2">
                    <div class="mx-4 mt-12 text-center about-image wow fadeInRightBig" data-wow-duration="1s" data-wow-delay="0.5s">
                        <img src="assets/images/about3.svg" alt="about">
                    </div> <!-- about image -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
        <div class="about-shape-1">
            <img src="assets/images/about-shape-1.svg" alt="shape">
        </div>
    </section>
    <!--====== ABOUT PART ENDS ======-->


    <!--====== VIDEO COUNTER PART START ======-->
    <section id="facts" class="pt-20 video-counter">
        <div class="container">
            <div class="row">
                <div class="w-full lg:w-1/2">
                    <div class="relative pb-8 mt-12 video-content wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                        <img class="absolute bottom-0 left-0 -ml-8 dots" src="assets/images/dots.svg" alt="dots">
                        <div class="relative mr-6 rounded-lg shadow-md video-wrapper">
                            <div class="video-image">
                                <img src="assets/images/video.png" alt="video">
                            </div>
                            <div class="absolute top-0 left-0 flex items-center justify-center w-full h-full bg-blue-900 bg-opacity-25 rounded-lg video-icon">
                                <a href="https://www.youtube.com/watch?v=r44RKWyfcFw" class="video-popup"><i class="lni lni-play"></i></a>
                            </div>
                        </div> <!-- video wrapper -->
                    </div> <!-- video content -->
                </div>
                <div class="w-full lg:w-1/2">
                    <div class="pl-0 mt-12 counter-wrapper lg:pl-16 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
                        <div class="counter-content">
                            <div class="mb-8 section-title">
                                <div class="line"></div>
                                <h3 class="title">{{ __('Cool facts ')}}<span> {{ __('about this app')}}</span></h3>
                            </div> <!-- section title -->
                            <p class="text">{{ __('
                                In the history of modern astronomy, there is probably no one
                                greater leap forward than the building and launch of the space
                                telescope known as the Hubble.
                                ')}}</p>
                        </div> <!-- counter content -->
                        <div class="row no-gutters">
                            <div class="flex items-center justify-center single-counter counter-color-1">
                                <div class="text-center counter-items">
                                    <span class="text-2xl font-bold text-white"><span class="counter">125</span>{{ __('K')}}</span>
                                    <p class="text-white">{{ __('Downloads')}}</p>
                                </div>
                            </div> <!-- single counter -->
                            <div class="flex items-center justify-center single-counter counter-color-2">
                                <div class="text-center counter-items">
                                    <span class="text-2xl font-bold text-white"><span class="counter">87</span>{{ __('K')}}</span>
                                    <p class="text-white">{{ __('Active Users')}}</p>
                                </div>
                            </div> <!-- single counter -->
                            <div class="flex items-center justify-center single-counter counter-color-3">
                                <div class="text-center counter-items">
                                    <span class="text-2xl font-bold text-white"><span class="counter">4.8</span></span>
                                    <p class="text-white">{{ __('User Rating')}}</p>
                                </div>
                            </div> <!-- single counter -->
                        </div> <!-- row -->
                    </div> <!-- counter wrapper -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    <!--====== VIDEO COUNTER PART ENDS ======-->


    <!--====== TESTIMONIAL PART START ======-->
    <section id="testimonial" class="testimonial-area pt-120">
        <div class="container">
            <div class="justify-center row">
                <div class="w-full lg:w-2/3">
                    <div class="pb-10 text-center section-title">
                        <div class="m-auto line"></div>
                        <h3 class="title">{{ __('Users sharing')}}<span> {{ __('their experience')}}</span></h3>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row testimonial-active wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="0.8s">
                <div class="w-full lg:w-1/3">
                    <div class="single-testimonial">
                        <div class="flex items-center justify-between mb-6">
                            <div class="quota">
                                <i class="text-4xl duration-300 lni lni-quotation text-theme-color"></i>
                            </div>
                            <div class="star">
                                <ul class="flex">
                                    <li><i class="lni lni-star-filled text-theme-color-2"></i></li>
                                    <li><i class="lni lni-star-filled text-theme-color-2"></i></li>
                                    <li><i class="lni lni-star-filled text-theme-color-2"></i></li>
                                    <li><i class="lni lni-star-filled text-theme-color-2"></i></li>
                                    <li><i class="lni lni-star-filled text-theme-color-2"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="mb-8">
                            <p>{{ __('In the history of modern astronomy, there is probably no one
                                greater leap forward.')}}</p>
                        </div>
                        <div class="flex items-center testimonial-author">
                            <div class="relative author-image">
                                <img class="shape" src="assets/images/textimonial-shape.svg" alt="shape">
                                <img class="author" src="assets/images/author-1.png" alt="author">
                            </div>
                            <div class="author-content media-body">
                                <h6 class="mb-1 text-xl font-bold text-gray-900">{{ __('Jenny Deo')}}</h6>
                                <p>{{ __('CEO, SpaceX')}}</p>
                            </div>
                        </div>
                    </div> <!-- single testimonial -->
                </div>
                <div class="col-lg-4">
                    <div class="single-testimonial">
                        <div class="flex items-center justify-between mb-6">
                            <div class="quota">
                                <i class="text-4xl duration-300 lni lni-quotation text-theme-color"></i>
                            </div>
                            <div class="star">
                                <ul class="flex">
                                    <li><i class="lni lni-star-filled text-theme-color-2"></i></li>
                                    <li><i class="lni lni-star-filled text-theme-color-2"></i></li>
                                    <li><i class="lni lni-star-filled text-theme-color-2"></i></li>
                                    <li><i class="lni lni-star-filled text-theme-color-2"></i></li>
                                    <li><i class="lni lni-star-filled text-theme-color-2"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="mb-8">
                            <p>{{ __('In the history of modern astronomy, there is probably no one
                                greater leap forward.')}}</p>
                        </div>
                        <div class="flex items-center testimonial-author">
                            <div class="relative author-image">
                                <img class="shape" src="assets/images/textimonial-shape.svg" alt="shape">
                                <img class="author" src="assets/images/author-2.png" alt="author">
                            </div>
                            <div class="author-content media-body">
                                <h6 class="mb-1 text-xl font-bold text-gray-900">{{ __('Marjin Otte')}}</h6>
                                <p>{{ __('UX Specialist, Yoast')}}</p>
                            </div>
                        </div>
                    </div> <!-- single testimonial -->
                </div>
                <div class="col-lg-4">
                    <div class="single-testimonial">
                        <div class="flex items-center justify-between mb-6">
                            <div class="quota">
                                <i class="text-4xl duration-300 lni lni-quotation text-theme-color"></i>
                            </div>
                            <div class="star">
                                <ul class="flex">
                                    <li><i class="lni lni-star-filled text-theme-color-2"></i></li>
                                    <li><i class="lni lni-star-filled text-theme-color-2"></i></li>
                                    <li><i class="lni lni-star-filled text-theme-color-2"></i></li>
                                    <li><i class="lni lni-star-filled text-theme-color-2"></i></li>
                                    <li><i class="lni lni-star-filled text-theme-color-2"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="mb-8">
                            <p>{{ __('In the history of modern astronomy, there is probably no one
                                greater leap forward.')}}</p>
                        </div>
                        <div class="flex items-center testimonial-author">
                            <div class="relative author-image">
                                <img class="shape" src="assets/images/textimonial-shape.svg" alt="shape">
                                <img class="author" src="assets/images/author-3.png" alt="author">
                            </div>
                            <div class="author-content media-body">
                                <h6 class="mb-1 text-xl font-bold text-gray-900">{{ __('David Smith')}}</h6>
                                <p>{{ __('CTO, Alphabet')}}</p>
                            </div>
                        </div>
                    </div> <!-- single testimonial -->
                </div>
                <div class="col-lg-4">
                    <div class="single-testimonial">
                        <div class="flex items-center justify-between mb-6">
                            <div class="quota">
                                <i class="text-4xl duration-300 lni lni-quotation text-theme-color"></i>
                            </div>
                            <div class="star">
                                <ul class="flex">
                                    <li><i class="lni lni-star-filled text-theme-color-2"></i></li>
                                    <li><i class="lni lni-star-filled text-theme-color-2"></i></li>
                                    <li><i class="lni lni-star-filled text-theme-color-2"></i></li>
                                    <li><i class="lni lni-star-filled text-theme-color-2"></i></li>
                                    <li><i class="lni lni-star-filled text-theme-color-2"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="mb-8">
                            <p>{{ __('In the history of modern astronomy, there is probably no one
                                greater leap forward.')}}</p>
                        </div>
                        <div class="flex items-center testimonial-author">
                            <div class="relative author-image">
                                <img class="shape" src="assets/images/textimonial-shape.svg" alt="shape">
                                <img class="author" src="assets/images/author-2.png" alt="author">
                            </div>
                            <div class="author-content media-body">
                                <h6 class="mb-1 text-xl font-bold text-gray-900">{{ __('Fajar Siddiq')}}</h6>
                                <p>{{ __('COO, MakerFlix')}}</p>
                            </div>
                        </div>
                    </div> <!-- single testimonial -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    <!--====== TESTIMONIAL PART ENDS ======-->
    <x-includes.footer/>

</x-guest-layout>
