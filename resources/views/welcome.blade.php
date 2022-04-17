<x-guest-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
            <!-- home section -->
                <section class="bg-white py-10 md:mb-10">

                    <div class="container max-w-screen-xl mx-auto px-4">

                        <nav class="flex-wrap lg:flex items-center" x-data="{navbarOpen:false}">
                            <div class="flex items-center mb-10 lg:mb-0">
                                <img src="{{asset('image/navbar-logo.png')}}" alt="Logo">

                                <button class="lg:hidden w-10 h-10 ml-auto flex items-center justify-center border border-blue-500 text-blue-500 rounded-md" @click="navbarOpen = !navbarOpen">
                                    <i data-feather="menu"></i>
                                </button>
                            </div>

                            <ul class="lg:flex flex-col lg:flex-row lg:items-center lg:mx-auto lg:space-x-8 xl:space-x-14" :class="{'hidden':!navbarOpen,'flex':navbarOpen}">
                                <li class="font-semibold text-gray-900 hover:text-gray-400 transition ease-in-out duration-300 mb-5 lg:mb-0">
                                    <a href="#">Home</a>
                                </li>
                                <li class="font-semibold text-gray-900 hover:text-gray-400 transition ease-in-out duration-300 mb-5 lg:mb-0">
                                    <a href="#">Charities</a>
                                </li>
                                <li class="font-semibold text-gray-900 hover:text-gray-400 transition ease-in-out duration-300 mb-5 lg:mb-0">
                                    <a href="#">Membership</a>
                                </li>
                                <li class="font-semibold text-gray-900 hover:text-gray-400 transition ease-in-out duration-300 mb-5 lg:mb-0">
                                    <a href="#">About us</a>
                                </li>
                            </ul>

                            <div class="lg:flex flex-col md:flex-row md:items-center text-center md:space-x-6" :class="{'hidden':!navbarOpen,'flex':navbarOpen}">
                                <a href="#" class="px-6 py-4 bg-blue-500 text-white font-semibold text-lg rounded-xl hover:bg-blue-700 transition ease-in-out duration-500 mb-5 md:mb-0">Join</a>

                                <a href="#" class="px-6 py-4 border-2 border-blue-500 text-blue-500 font-semibold text-lg rounded-xl hover:bg-blue-700 hover:text-white transition ease-linear duration-500">Become a member</a>
                            </div>
                        </nav>

                        <div class="flex flex-col lg:flex-row justify-between space-x-20">
                            <div class="text-center lg:text-left mt-40">
                                <h1 class="font-semibold text-gray-900 text-3xl md:text-6xl leading-normal mb-6">Charity for the <br> world better life</h1>

                                <p class="font-light text-gray-400 text-md md:text-lg leading-normal mb-12">We provide a trusted donation channel for peoples of <br> worldwide to support people and organizers</p>

                                <button class="px-6 py-4 bg-info font-semibold text-white text-lg rounded-xl hover:bg-blue-700 transition ease-in-out duration-500">Get started</button>
                            </div>

                            <div class="mt-24">
                                <img src="{{asset('image/home-img.png')}}" alt="Image">
                            </div>
                        </div>

                    </div> <!-- container.// -->

                </section>
                <!-- home section //end -->

                <!-- feature section -->
                <section class="bg-white py-16 md:mt-10">

                    <div class="container max-w-screen-xl mx-auto px-4">

                        <p class="font-light text-gray-500 text-lg md:text-xl text-center uppercase mb-6">Our features</p>

                        <h1 class="font-semibold text-gray-900 text-xl md:text-4xl text-center leading-normal mb-10">We believe we can save <br> more life with you</h1>

                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-20">
                            <div class="text-center">
                                <div class="flex justify-center mb-6">
                                    <div class="w-20 py-6 flex justify-center bg-blue-200 bg-opacity-30 text-blue-700 rounded-xl">
                                        <i data-feather="globe"></i>
                                    </div>
                                </div>

                                <h4 class="font-semibold text-lg md:text-2xl text-gray-900 mb-6">Transparent</h4>

                                <p class="font-light text-gray-500 text-md md:text-xl mb-6">Donations and distributions can be seen transparently</p>

                                <div class="flex justify-center">
                                    <a href="#" class="flex items-center gap-5 px-6 py-4 font-semibold text-info text-lg rounded-xl hover:bg-info hover:text-white transition ease-linear duration-500">
                                        Learn more
                                        <i data-feather="chevron-right"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="text-center">
                                <div class="flex justify-center mb-6">
                                    <div class="w-20 py-6 flex justify-center bg-blue-200 bg-opacity-30 text-blue-700 rounded-xl">
                                        <i data-feather="arrow-up-right"></i>
                                    </div>
                                </div>

                                <h4 class="font-semibold text-lg md:text-2xl text-gray-900 mb-6">Quick Fundraise</h4>

                                <p class="font-light text-gray-500 text-md md:text-xl mb-6">The simple and quickest way to make a donation</p>

                                <div class="flex justify-center">
                                    <a href="#" class="flex items-center gap-5 px-6 py-4 font-semibold text-info text-lg rounded-xl hover:bg-info hover:text-white transition ease-linear duration-500">
                                        Learn more
                                        <i data-feather="chevron-right"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="text-center">
                                <div class="flex justify-center mb-6">
                                    <div class="w-20 py-6 flex justify-center bg-blue-200 bg-opacity-30 text-blue-700 rounded-xl">
                                        <i data-feather="clock"></i>
                                    </div>
                                </div>

                                <h4 class="font-semibold text-lg md:text-2xl text-gray-900 mb-6">Real Time</h4>

                                <p class="font-light text-gray-500 text-md md:text-xl mb-6">Reports related to donations and distribution are updated directly</p>

                                <div class="flex justify-center">
                                    <a href="#" class="flex items-center gap-5 px-6 py-4 font-semibold text-info text-lg rounded-xl hover:bg-info hover:text-white transition ease-linear duration-500">
                                        Learn more
                                        <i data-feather="chevron-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div> <!-- container.// -->

                </section>
                <!-- feature section //end -->

                <!-- donation section -->
                <section class="bg-white py-16">

                    <div class="container max-w-screen-xl mx-auto px-4">

                        <h1 class="font-semibold text-gray-900 text-xl md:text-4xl text-center mb-16">Latest to donate</h1>

                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
                            <div class="px-6 py-6 w-full border-2 border-gray-200 rounded-3xl">
                                <img src="{{asset('image/donation-1.png')}}" alt="Image" class="mb-6 hover:opacity-75 transition ease-in-out duration-500">

                                <h4 class="font-semibold text-gray-900 text-lg md:text-2xl mb-6">Help flood victims in <br> Indonesia</h4>

                                <p class="font-light text-gray-400 text-sm md:text-md lg:text-lg mb-10">Help flood victims in Indonesia by <br> donating sincerely, regardless of the...</p>

                                <div class="flex items-center justify-between mb-8">
                                    <h6 class="font-light text-gray-400 text-sm md:text-lg">Goals : <span class="font-semibold text-gray-900 text-md md:text-lg">$25000</span></h6>

                                    <h6 class="font-light text-gray-400 text-sm md:text-lg">Raised : <span class="font-semibold text-gray-900 text-md md:text-lg">$21000</span></h6>
                                </div>

                                <div class="hidden md:block lg:flex items-center justify-between mb-8">
                                    <div>
                                        <div class="w-72 h-2 bg-info opacity-10 rounded-lg absolute"></div>

                                        <div class="w-56 h-2 bg-info rounded-lg relative"></div>
                                    </div>

                                    <p class="font-light text-gray-900 text-md">84%</p>
                                </div>

                                <button class="w-full py-4 bg-info font-semibold text-white text-lg rounded-xl hover:bg-blue-800 transition ease-in-out duration-500">Donate</button>
                            </div>

                            <div class="px-6 py-6 w-full border-2 border-gray-200 rounded-3xl">
                                <img src="{{asset('image/donation-2.png')}}" alt="Image" class="mb-6 hover:opacity-75 transition ease-in-out duration-500">

                                <h4 class="font-semibold text-gray-900 text-lg md:text-2xl mb-6">Donation for COVID-19 in <br> Indonesia</h4>

                                <p class="font-light text-gray-400 text-sm md:text-md lg:text-lg mb-10">Donation for COVID-19 in Indonesia by <br> donating sincerely, regardless of the...</p>

                                <div class="flex items-center justify-between mb-8">
                                    <h6 class="font-light text-gray-400 text-sm md:text-lg">Goals : <span class="font-semibold text-gray-900 text-md md:text-lg">$24000</span></h6>

                                    <h6 class="font-light text-gray-400 text-sm md:text-lg">Raised : <span class="font-semibold text-gray-900 text-md md:text-lg">$19000</span></h6>
                                </div>

                                <div class="hidden md:block lg:flex items-center justify-between mb-8">
                                    <div>
                                        <div class="w-72 h-2 bg-info opacity-10 rounded-lg absolute"></div>

                                        <div class="w-52 h-2 bg-info rounded-lg relative"></div>
                                    </div>

                                    <p class="font-light text-gray-900 text-md">80%</p>
                                </div>

                                <button class="w-full py-4 bg-info font-semibold text-white text-lg rounded-xl hover:bg-blue-800 transition ease-in-out duration-500">Donate</button>
                            </div>

                            <div class="px-6 py-6 w-full border-2 border-gray-200 rounded-3xl">
                                <img src="{{asset('image/donation-3.png')}}" alt="Image" class="mb-6 hover:opacity-75 transition ease-in-out duration-500">

                                <h4 class="font-semibold text-gray-900 text-lg md:text-2xl mb-6">Help homeless cat to find <br> home</h4>

                                <p class="font-light text-gray-400 text-sm md:text-md lg:text-lg mb-10">Help homeless cat and the oether <br> animals by donating sincerely regar...</p>

                                <div class="flex items-center justify-between mb-8">
                                    <h6 class="font-light text-gray-400 text-sm md:text-lg">Goals : <span class="font-semibold text-gray-900 text-md md:text-lg">$15000</span></h6>

                                    <h6 class="font-light text-gray-400 text-sm md:text-lg">Raised : <span class="font-semibold text-gray-900 text-md md:text-lg">$13000</span></h6>
                                </div>

                                <div class="hidden md:block lg:flex items-center justify-between mb-8">
                                    <div>
                                        <div class="w-72 h-2 bg-info opacity-10 rounded-lg absolute"></div>

                                        <div class="w-60 h-2 bg-info rounded-lg relative"></div>
                                    </div>

                                    <p class="font-light text-gray-900 text-md">86%</p>
                                </div>

                                <button class="w-full py-4 bg-info font-semibold text-white text-lg rounded-xl hover:bg-blue-800 transition ease-in-out duration-500">Donate</button>
                            </div>

                            <div class="px-6 py-6 w-full border-2 border-gray-200 rounded-3xl">
                                <img src="{{asset('image/donation-4.png')}}" alt="Image" class="mb-6 hover:opacity-75 transition ease-in-out duration-500">

                                <h4 class="font-semibold text-gray-900 text-lg md:text-2xl mb-6">Help save poor children in <br> Pakistan</h4>

                                <p class="font-light text-gray-400 text-sm md:text-md lg:text-lg mb-10">Help save poor children in Pakistas by <br> donating sincerely, regardless of the...</p>

                                <div class="flex items-center justify-between mb-8">
                                    <h6 class="font-light text-gray-400 text-sm md:text-lg">Goals : <span class="font-semibold text-gray-900 text-md md:text-lg">$75000</span></h6>

                                    <h6 class="font-light text-gray-400 text-sm md:text-lg">Raised : <span class="font-semibold text-gray-900 text-md md:text-lg">$50000</span></h6>
                                </div>

                                <div class="hidden md:block lg:flex items-center justify-between mb-8">
                                    <div>
                                        <div class="w-72 h-2 bg-info opacity-10 rounded-lg absolute"></div>

                                        <div class="w-48 h-2 bg-info rounded-lg relative"></div>
                                    </div>

                                    <p class="font-light text-gray-900 text-md">66%</p>
                                </div>

                                <button class="w-full py-4 bg-info font-semibold text-white text-lg rounded-xl hover:bg-blue-800 transition ease-in-out duration-500">Donate</button>
                            </div>

                            <div class="px-6 py-6 w-full border-2 border-gray-200 rounded-3xl">
                                <img src="{{asset('image/donation-5.png')}}" alt="Image" class="mb-6 hover:opacity-75 transition ease-in-out duration-500">

                                <h4 class="font-semibold text-gray-900 text-lg md:text-2xl mb-6">Lifeskills for children in <br> South Africa</h4>

                                <p class="font-light text-gray-400 text-sm md:text-md lg:text-lg mb-10">Donating for children in South Africa <br> by donating sincerely, regardless of...</p>

                                <div class="flex items-center justify-between mb-8">
                                    <h6 class="font-light text-gray-400 text-sm md:text-lg">Goals : <span class="font-semibold text-gray-900 text-md md:text-lg">$45000</span></h6>

                                    <h6 class="font-light text-gray-400 text-sm md:text-lg">Raised : <span class="font-semibold text-gray-900 text-md md:text-lg">$22500</span></h6>
                                </div>

                                <div class="hidden md:block lg:flex items-center justify-between mb-8">
                                    <div>
                                        <div class="w-72 h-2 bg-info opacity-10 rounded-lg absolute"></div>

                                        <div class="w-36 h-2 bg-info rounded-lg relative"></div>
                                    </div>

                                    <p class="font-light text-gray-900 text-md">50%</p>
                                </div>

                                <button class="w-full py-4 bg-info font-semibold text-white text-lg rounded-xl hover:bg-blue-800 transition ease-in-out duration-500">Donate</button>
                            </div>

                            <div class="px-6 py-6 w-full border-2 border-gray-200 rounded-3xl">
                                <img src="{{asset('image/donation-6.png')}}" alt="Image" class="mb-6 hover:opacity-75 transition ease-in-out duration-500">

                                <h4 class="font-semibold text-gray-900 text-lg md:text-2xl mb-6">Help donate for children <br> with cancer</h4>

                                <p class="font-light text-gray-400 text-sm md:text-md lg:text-lg mb-10">Help donate for the children with <br> cancer by donating sincerely, regar...</p>

                                <div class="flex items-center justify-between mb-8">
                                    <h6 class="font-light text-gray-400 text-sm md:text-lg">Goals : <span class="font-semibold text-gray-900 text-md md:text-lg">$50000</span></h6>

                                    <h6 class="font-light text-gray-400 text-sm md:text-lg">Raised : <span class="font-semibold text-gray-900 text-md md:text-lg">$13000</span></h6>
                                </div>

                                <div class="hidden md:block lg:flex items-center justify-between mb-8">
                                    <div>
                                        <div class="w-72 h-2 bg-info opacity-10 rounded-lg absolute"></div>

                                        <div class="w-20 h-2 bg-info rounded-lg relative"></div>
                                    </div>

                                    <p class="font-light text-gray-900 text-md">26%</p>
                                </div>

                                <button class="w-full py-4 bg-info font-semibold text-white text-lg rounded-xl hover:bg-blue-800 transition ease-in-out duration-500">Donate</button>
                            </div>
                        </div>

                        <div class="flex items-center justify-center">
                            <button class="px-7 py-5 font-semibold bg-gray-100 text-gray-900 rounded-2xl hover:bg-gray-300 hover:text-gray-600 transition ease-in-out duration-500">More to donate</button>
                        </div>

                    </div> <!-- container.// -->

                </section>
                <!-- donation section //end -->

                <!-- feature section -->
                <section class="bg-white py-16">

                    <div class="container max-w-screen-xl mx-auto px-4">

                        <div class="flex flex-col lg:flex-row justify-between space-x-16">
                            <div class="flex justify-center lg:justify-start">
                                <img src="{{asset('image/feature-img.png')}}" alt="Image">
                            </div>

                            <div class="mt-16">
                                <h1 class="font-semibold text-gray-900 text-xl md:text-4xl mb-20">You can help lots of people by <br> donating</h1>

                                <div class="grid grid-cols-1 md:grid-cols-2 md:space-x-20 mb-16">
                                    <div class="mb-5 md:mb-0">
                                        <div class="w-20 py-6 flex justify-center bg-info bg-opacity-5 rounded-xl mb-4">
                                            <i data-feather="sun" class="text-info"></i>
                                        </div>

                                        <h3 class="font-semibold text-gray-900 text-xl md:text-3xl mb-4">10000+</h3>

                                        <p class="font-light text-gray-400 text-md md:text-lg">Fundraising campaign in <br> all time</p>
                                    </div>

                                    <div>
                                        <div class="w-20 py-6 flex justify-center bg-red-500 bg-opacity-5 rounded-xl mb-4">
                                            <i data-feather="award" class="text-red-500"></i>
                                        </div>

                                        <h3 class="font-semibold text-gray-900 text-xl md:text-3xl mb-4">$120M+</h3>

                                        <p class="font-light text-gray-400 text-md md:text-lg">Raised and counting <br> donations in all time</p>
                                    </div>
                                </div>

                                <div class="grid grid-cols-1 md:grid-cols-2 md:space-x-20">
                                    <div class="mb-5 md:mb-0">
                                        <div class="w-20 py-6 flex justify-center bg-yellow-500 bg-opacity-5 rounded-xl mb-4">
                                            <i data-feather="users" class="text-yellow-500"></i>
                                        </div>

                                        <h3 class="font-semibold text-gray-900 text-xl md:text-3xl mb-4">1200+</h3>

                                        <p class="font-light text-gray-400 text-md md:text-lg">Our volunteer around the <br> world</p>
                                    </div>

                                    <div>
                                        <div class="w-20 py-6 flex justify-center bg-green-500 bg-opacity-5 rounded-xl mb-4">
                                            <i data-feather="trending-up" class="text-green-500"></i>
                                        </div>

                                        <h3 class="font-semibold text-gray-900 text-xl md:text-3xl mb-4">98%</h3>

                                        <p class="font-light text-gray-400 text-md md:text-lg">Positive review from <br> public</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div> <!-- container.// -->

                </section>
                <!-- feature section //end -->

                <!-- join volunters section -->
                <section class="bg-white py-16">

                    <div class="container max-w-screen-xl mx-auto px-4">

                        <div class="w-full h-full bg-blue-500 rounded-2xl md:rounded-3xl relative lg:flex items-center">
                            <div class="hidden lg:block">
                                <img src="{{asset('image/humans.png')}}" alt="Image" class="relative z-10">

                                <img src="{{asset('image/pattern-2.png')}}" alt="Image" class="absolute top-14 left-40">

                                <img src="{{asset('image/pattern.png')}}" alt="Image" class="absolute top-0 z-0">
                            </div>

                            <div class="lg:relative py-4 lg:py-0">
                                <h1 class="font-semibold text-white text-xl md:text-4xl text-center lg:text-left leading-normal md:mb-5 lg:mb-10">Interested in volunteering? Join <br> with us now</h1>

                                <div class="hidden md:block flex items-center text-center lg:text-left space-x-5">
                                    <input type="text" placeholder="Email" class="px-4 py-4 w-96 bg-gray-50 placeholder-gray-400 rounded-xl outline-none">

                                    <button class="px-6 py-4 font-semibold bg-gray-50 text-info text-lg rounded-xl hover:bg-blue-500 hover:text-white transition ease-in-out duration-500">Join</button>
                                </div>
                            </div>
                        </div>

                    </div> <!-- container.// -->

                </section>
                <!-- join volunters section //end -->

                <footer class="bg-white py-16">

                    <div class="container max-w-screen-xl mx-auto px-4">
                        <div class="flex flex-col lg:flex-row lg:justify-between">

                            <div class="space-y-7 mb-10 lg:mb-0">
                                <div class="flex justify-center lg:justify-start">
                                    <img src="{{asset('image/footer-logo.png')}}" alt="Image">
                                </div>

                                <p class="font-light text-gray-400 text-md md:text-lg text-center lg:text-left">Donate and help others people <br> around the world</p>

                                <div class="flex items-center justify-center lg:justify-start space-x-5">
                                    <a href="#" class="px-3 py-3 bg-gray-200 text-gray-700 rounded-full hover:bg-info hover:text-white transition ease-in-out duration-500">
                                        <i data-feather="facebook"></i>
                                    </a>

                                    <a href="#" class="px-3 py-3 bg-gray-200 text-gray-700 rounded-full hover:bg-info hover:text-white transition ease-in-out duration-500">
                                        <i data-feather="twitter"></i>
                                    </a>

                                    <a href="#" class="px-3 py-3 bg-gray-200 text-gray-700 rounded-full hover:bg-info hover:text-white transition ease-in-out duration-500">
                                        <i data-feather="linkedin"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="text-center lg:text-left space-y-7 mb-10 lg:mb-0">
                                <h4 class="font-semibold text-gray-900 text-lg md:text-2xl">Quick links</h4>

                                <a href="#" class="block font-light text-gray-400 text-sm md:text-lg hover:text-gray-800 transition ease-in-out duration-300">Charity Ratings</a>

                                <a href="#" class="block font-light text-gray-400 text-sm md:text-lg hover:text-gray-800 transition ease-in-out duration-300">Top-Rated Charities</a>

                                <a href="#" class="block font-light text-gray-400 text-sm md:text-lg hover:text-gray-800 transition ease-in-out duration-300">Top Compensation</a>

                                <a href="#" class="block font-light text-gray-400 text-sm md:text-lg hover:text-gray-800 transition ease-in-out duration-300">High Asset Charities</a>
                            </div>

                            <div class="text-center lg:text-left space-y-7 mb-10 lg:mb-0">
                                <h4 class="font-semibold text-gray-900 text-lg md:text-2xl">Company</h4>

                                <a href="#" class="block font-light text-gray-400 text-sm md:text-lg hover:text-gray-800 transition ease-in-out duration-300">About Us</a>

                                <a href="#" class="block font-light text-gray-400 text-sm md:text-lg hover:text-gray-800 transition ease-in-out duration-300">Journalists / Media</a>

                                <a href="#" class="block font-light text-gray-400 text-sm md:text-lg hover:text-gray-800 transition ease-in-out duration-300">Membership</a>

                                <a href="#" class="block font-light text-gray-400 text-sm md:text-lg hover:text-gray-800 transition ease-in-out duration-300">Blog</a>
                            </div>

                            <div class="text-center lg:text-left space-y-7 mb-10 lg:mb-0">
                                <h4 class="font-semibold text-gray-900 text-lg md:text-2xl">Legal</h4>

                                <a href="#" class="block font-light text-gray-400 text-sm md:text-lg hover:text-gray-800 transition ease-in-out duration-300">FAQ</a>

                                <a href="#" class="block font-light text-gray-400 text-sm md:text-lg hover:text-gray-800 transition ease-in-out duration-300">Terms & Conditions</a>
                            </div>

                        </div>
                    </div> <!-- container.// -->

                </footer>
</x-guest-layout>
