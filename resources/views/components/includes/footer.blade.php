<!--====== FOOTER PART START ======-->

<footer id="footer" class="relative z-10 footer-area pt-120">
    <div class="footer-bg" style="background-image: url({{asset('assets/images/footer-bg.svg')}});"></div>
    <div class="container">
        <div class="w-10/12 mx-auto px-6 pt-10 pb-20 mb-12 bg-white rounded-lg shadow-xl md:px-12 subscribe-area border wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
            <div class="flex justify-between items-center">
                <div class="w-full lg:w-1/2">
                    <div class="lg:mt-12 subscribe-content">
                        <h3 class="text-xl font-medium lg:text-3xl subscribe-title">
                            {{ __('Subscribe Our Newsletter')}}
                        </h3>
                    </div>
                </div>
                <div class="w-full lg:w-1/2">
                    <div class="mt-12 subscribe-form">
                        <form action="#" class="relative focus:outline-none">
                            <input type="email" placeholder="Enter eamil" class="w-full py-4 pl-6 pr-40 duration-300 border border-gray-300 rounded focus:border-theme-color focus:outline-none">
                            <button class="main-btn gradient-btn">{{ __('Subscribe')}}</button>
                        </form>
                    </div>
                </div>
            </div> <!-- row -->
        </div> <!-- subscribe area -->
        <div class="footer-widget pb-120">
            <div class="row">
                <div class="w-4/5 md:w-3/5 lg:w-2/6">
                    <div class="mt-12 footer-about wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                        <a class="inline-block mb-8 logo w-16" href="{{ route('dashboard') }}">
                            <img src="{{asset('assets/images/MAJED.svg')}}" alt="logo" class="w-40">
                        </a>
                        <p class="pb-10 pr-10 leading-snug text-white">{{ __('In the history of modern astronomy, there is probably no one greater leap forward than the building and launch of the space telescope known as the Hubble..')}}</p>
                        <ul class="flex footer-social">
                            <li><a href="javascript:void(0)"><i class="lni lni-facebook-filled"></i></a></li>
                            <li><a href="javascript:void(0)"><i class="lni lni-twitter-filled"></i></a></li>
                            <li><a href="javascript:void(0)"><i class="lni lni-instagram-filled"></i></a></li>
                            <li><a href="javascript:void(0)"><i class="lni lni-linkedin-original"></i></a></li>
                        </ul>
                    </div> <!-- footer about -->
                </div>
                <div class="w-4/5 sm:w-2/3 md:w-3/5 lg:w-2/6">
                    <div class="row">
                        <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/2">
                            <div class="mt-12 link-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                                <div class="footer-title">
                                    <h4 class="mb-8 text-2xl font-bold text-white">{{ __('Quick Link')}}</h4>
                                </div>
                                <ul class="link">
                                    <li><a href="javascript:void(0)">{{ __('Road Map')}}</a></li>
                                    <li><a href="javascript:void(0)">{{ __('Privacy Policy')}}</a></li>
                                    <li><a href="javascript:void(0)">{{ __('Refund Policy')}}</a></li>
                                    <li><a href="javascript:void(0)">{{ __('Terms of Service')}}</a></li>
                                    <li><a href="javascript:void(0)">{{ __('Pricing')}}</a></li>
                                </ul>
                            </div> <!-- footer wrapper -->
                        </div>
                        <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/2">
                            <div class="mt-12 link-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
                                <div class="footer-title">
                                    <h4 class="mb-8 text-2xl font-bold text-white">{{ __('Resources')}}</h4>
                                </div>
                                <ul class="link">
                                    <li><a href="javascript:void(0)">{{ __('Home')}}</a></li>
                                    <li><a href="javascript:void(0)">{{ __('Page')}}</a></li>
                                    <li><a href="javascript:void(0)">{{ __('Portfolio')}}</a></li>
                                    <li><a href="javascript:void(0)">{{ __('Blog')}}</a></li>
                                    <li><a href="javascript:void(0)">{{ __('Contact')}}</a></li>
                                </ul>
                            </div> <!-- footer wrapper -->
                        </div>
                    </div>
                </div>
                <div class="w-4/5 sm:w-1/3 md:w-2/5 lg:w-2/6">
                    <div class="mt-12 footer-contact wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
                        <div class="footer-title">
                            <h4 class="mb-8 text-2xl font-bold text-white">{{ __('Contact Us')}}</h4>
                        </div>
                        <ul class="contact">
                            <li>{{ __('+0000000000000')}}</li>
                            <li>{{ __('MADJED@gmail.com')}}</li>
                            <li>{{ __('www.MADJED.com')}}</li>
                            <li>{{ __('123  Djeddah , EL riyadh <br>KSA 750.')}}</li>
                        </ul>
                    </div> <!-- footer contact -->
                </div>
            </div> <!-- row -->
        </div> <!-- footer widget -->
        <div class="py-8 border-t border-gray-200 footer-copyright">
            <p class="text-white">
                {{ __('Created by')}} <a class="duration-300 hover:text-theme-color-2" href="https://tailwindtemplates.co" rel="nofollow" target="_blank">{{ __('Majed Mubarek')}}</a> {{ __('and')}}
                <a class="duration-300 hover:text-theme-color-2" href="https://ruya.studio" rel="nofollow" target="_blank">{{ __('Said HADJ RAMDANE')}}</a>
            </p>
        </div> <!-- footer copyright -->
    </div> <!-- container -->
    <div id="particles-2" class="particles"></div>
    <!--====== BACK TOP TOP PART START ======-->
    <a href="#" class="back-to-top"><i class="lni lni-chevron-up"></i></a>
    <!--====== BACK TOP TOP PART ENDS ======-->
</footer>

<!--====== FOOTER PART ENDS ======-->
