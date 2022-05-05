<aside class="sidenav navbar bg-gray-100 navbar-vertical navbar-expand-xs border-0 fixed-start z-50" id="sidenav-main">
    <div class="">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <div class="flex items-center justify-between pl-4 pr-3 py-4">
            <div class="flex items-center">
            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                <div class="shrink-0 mr-3">
                    <img class="h-12 w-12 rounded-full object-cover border border-indigo-500"
                         src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                </div>
            @endif
                <div id="title-logo">
                    <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                </div>
            </div>
        </div>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse w-auto h-auto h-100" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item mb-1">
                <a href="{{route('dashboard')}}" class="nav-link {{ (request()->is('dashboard*')) ? 'active': '' }}">
                    <div class="icon icon-shape bg-primary icon-sm text-center d-flex align-items-center justify-content-center">
                        <i class="ni ni-shop text-white text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-2">overview</span>
                </a>
            </li>
            <li class="nav-item mb-1">
                <a href="{{route('statistics')}}" class="nav-link {{ (request()->is('statistics*')) ? 'active': '' }}">
                    <div class="icon icon-shape icon-sm text-center bg-primary d-flex align-items-center justify-content-center">
                        <i class="ni ni-chart-bar-32 text-white text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-2">Statistics</span>
                </a>
            </li>
            <li class="nav-item mb-1">
                <a href="{{route('profile.show')}}" class="nav-link {{ (request()->is('user/profile*')) ? 'active': '' }} ">
                    <div class="icon icon-shape icon-sm bg-danger d-flex align-items-center justify-content-center">
                        <i class="ni ni-circle-08 text-white text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-2">My Profile</span>
                </a>
            </li>
            <li class="nav-item mb-1">
                <a href="{{route('groups.all')}}" class="nav-link {{ (request()->is('groups/all*')) ? 'active': '' }}" >
                    <div class="icon icon-shape icon-sm bg-info text-center d-flex align-items-center justify-content-center">
                        <i class="ni ni-books text-white text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-2">All Groups</span>
                </a>
            </li>
            <li class="nav-item mb-1">
                <a data-bs-toggle="collapse" href="#pagesExamples" class="nav-link " aria-controls="pagesExamples" role="button" aria-expanded="false">
                    <div class="icon icon-shape icon-sm bg-info text-center d-flex align-items-center justify-content-center">
                        <i class="ni ni-book-bookmark text-white text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-2">My groups</span>
                </a>
                <div class="collapse {{ (request()->is('user/groups/*')) ? 'show': '' }}" id="pagesExamples">
                    <ul class="nav ms-4">
                        <li class="nav-item {{ (request()->is('user/groups/*')) ? 'active': '' }}">
                            <a href="{{route('groups.premium')}}" class="nav-link {{ (request()->is('user/groups/premium*')) ? 'active': '' }}" >
                                <span class="sidenav-mini-icon"> P </span>
                                <span class="sidenav-normal"> Premium </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a href="{{route('groups.free')}}" class="nav-link {{ (request()->is('user/groups/free*')) ? 'active': '' }}" >
                                <span class="sidenav-mini-icon"> F </span>
                                <span class="sidenav-normal"> Free </span>
                            </a>
                        </li>

                    </ul>
                </div>
            </li>
            <li class="nav-item mb-1">
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
            <li class="nav-item mb-1">
                <a href="#authExamples" class="nav-link ">
                    <div class="icon icon-shape icon-sm text-center bg-yellow-300 d-flex align-items-center justify-content-center">
                        <i class="ni ni-air-baloon text-white text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-2">Help</span>
                </a>
            </li>
            <li class="nav-item mb-1">
                <a href="{{route('welcome')}}" class="nav-link ">
                    <div class="icon icon-shape icon-sm text-center bg-emerald-600 d-flex align-items-center justify-content-center">
                        <i class="ni ni-curved-next text-white text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-2">Website</span>
                </a>
            </li>
            <li class="nav-item mb-1">
                <form method="POST" action="{{ route('logout') }}" x-data >
                    @csrf
                    <button type="submit" class="nav-link">
                        <div class="icon icon-shape icon-sm text-center bg-gray-800 d-flex align-items-center justify-content-center">
                            <i class="ni ni-user-run text-white text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-2" href="{{ route('logout') }}">
                            {{ __('Log Out') }}
                        </span>
                    </button>
                </form>
            </li>
        </ul>
    </div>

</aside>
