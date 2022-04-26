<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 fixed-start" id="sidenav-main">
    <div class="">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <div class="flex items-center pl-4 py-4">
            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                <div class="shrink-0 mr-3">
                    <img class="h-12 w-12 rounded-full object-cover border border-gray-200"
                         src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                </div>
            @endif
            <div>
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>
                <div class="bg-indigo-200 hover:bg-indigo-400 text-gray-100 hover:text-white d-flex justify-content-center items-center ml-4 rounded-lg">
                    <i class="ni ni-settings-gear-65 cursor-pointer p-1" aria-hidden="true"></i>
                </div>
        </div>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse w-auto h-auto h-100" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item mb-2">
                <a href="#dashboardsExamples" class="nav-link active">
                    <div class="icon icon-shape bg-primary icon-sm text-center d-flex align-items-center justify-content-center">
                        <i class="ni ni-shop text-white text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-2">Dashboards</span>
                </a>
            </li>
            <li class="nav-item mb-2">
                <a href="#authExamples" class="nav-link ">
                    <div class="icon icon-shape icon-sm text-center bg-primary d-flex align-items-center justify-content-center">
                        <i class="ni ni-chart-bar-32 text-white text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-2">Statistics</span>
                </a>
            </li>
            <li class="nav-item mb-2">
                <a href="#authExamples" class="nav-link ">
                    <div class="icon icon-shape icon-sm bg-danger d-flex align-items-center justify-content-center">
                        <i class="ni ni-circle-08 text-white text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-2">My Profile</span>
                </a>
            </li>
            <li class="nav-item mb-2">
                <a href="#applicationsExamples" class="nav-link " >
                    <div class="icon icon-shape icon-sm bg-info text-center d-flex align-items-center justify-content-center">
                        <i class="ni ni-books text-white text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-2">All Groups</span>
                </a>
            </li>
            <li class="nav-item mb-2">
                <a data-bs-toggle="collapse" href="#pagesExamples" class="nav-link " aria-controls="pagesExamples" role="button" aria-expanded="false">
                    <div class="icon icon-shape icon-sm bg-info text-center d-flex align-items-center justify-content-center">
                        <i class="ni ni-book-bookmark text-white text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-2">My groups</span>
                </a>
                <div class="collapse " id="pagesExamples">
                    <ul class="nav ms-4">
                        <li class="nav-item ">
                            <a class="nav-link " href="{{asset('dashboard/')}}/pages/pages/rtl-page.html">
                                <span class="sidenav-mini-icon"> P </span>
                                <span class="sidenav-normal"> Premium </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link " href="{{asset('dashboard/')}}/pages/pages/widgets.html">
                                <span class="sidenav-mini-icon"> F </span>
                                <span class="sidenav-normal"> Free </span>
                            </a>
                        </li>

                    </ul>
                </div>
            </li>
            <li class="nav-item mb-2">
                <a data-bs-toggle="collapse" href="#ecommerceExamples" class="nav-link " aria-controls="ecommerceExamples" role="button" aria-expanded="false">
                    <div class="icon icon-shape icon-sm text-center bg-success d-flex align-items-center justify-content-center">
                        <i class="ni ni-money-coins text-white text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-2">Payments</span>
                </a>
                <div class="collapse " id="ecommerceExamples">
                    <ul class="nav ms-4">
                        <li class="nav-item ">
                            <a class="nav-link " href="{{asset('dashboard/')}}/pages/ecommerce/referral.html">
                                <span class="sidenav-mini-icon"> E </span>
                                <span class="sidenav-normal"> Earnings </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link " href="{{asset('dashboard/')}}/pages/ecommerce/referral.html">
                                <span class="sidenav-mini-icon"> T </span>
                                <span class="sidenav-normal"> Transactions </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link " href="{{asset('dashboard/')}}/pages/ecommerce/referral.html">
                                <span class="sidenav-mini-icon"> R </span>
                                <span class="sidenav-normal"> Referral </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item mb-2">
                <a href="#authExamples" class="nav-link ">
                    <div class="icon icon-shape icon-sm text-center bg-yellow-300 d-flex align-items-center justify-content-center">
                        <i class="ni ni-air-baloon text-white text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-2">Help</span>
                </a>
            </li>
        </ul>
    </div>

</aside>
