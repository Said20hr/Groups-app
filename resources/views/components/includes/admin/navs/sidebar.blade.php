<aside class="sidenav bg-gradient bg-primary navbar navbar-vertical navbar-expand-xs border-0 fixed-start " id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href="#" target="_blank">
            <img src="{{asset('assets/images/MAJED.svg')}}" class="navbar-brand-img h-100 mr-4" alt="main_logo">
            <span class="ms-2 font-weight-bold text-white text-uppercase">Majed Analytics</span>
        </a>
    </div>
    <hr class="horizontal white mt-0">
    <div class="collapse navbar-collapse  w-auto h-auto h-100" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="{{ route('admin.dashboard') }}" class="nav-link  {{ request()->is('admin') ? 'active' : '' }}" >
                    <div class="icon icon-shape icon-sm bg-white text-center d-flex align-items-center justify-content-center">
                        <i class="ni ni-shop text-primary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text text-white ms-3">Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a data-bs-toggle="collapse" href="#pagesExamples" class="nav-link {{ (request()->is('admin/users')) ? 'active' : '' }}" aria-controls="pagesExamples" role="button" aria-expanded="false">
                    <div class="icon icon-shape icon-sm bg-white text-center d-flex align-items-center justify-content-center">
                        <i class="ni ni-ungroup text-warning text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text text-white ms-3">Users</span>
                </a>
                <div class="collapse {{ (request()->is('admin/users*')) ? 'show' : '' }}" id="pagesExamples">
                    <ul class="nav ms-4">
                        <li class="nav-item ">
                            <a class="nav-link {{ (request()->is('admin/users')) ? 'text-white font-bold' : 'text-gray-100 opacity-7 ' }}" href="{{ route('admin.users.index') }}">
                                <span class="sidenav-mini-icon"> F </span>
                                <span class="sidenav-normal"> List (Free) <b class="caret"></b></span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link {{ (request()->is('admin/users')) ? 'text-white font-bold' : 'text-gray-100 opacity-7 ' }}" href="{{ route('admin.users.index') }}">
                                <span class="sidenav-mini-icon"> P </span>
                                <span class="sidenav-normal"> List (Premium) <b class="caret"></b></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a data-bs-toggle="collapse" href="#applicationsExamples" class="nav-link {{ (request()->is('admin/sets*')) ? 'active' : ' ' }}"  aria-controls="applicationsExamples" role="button" aria-expanded="false">
                    <div class="icon icon-shape icon-sm bg-white text-center d-flex align-items-center justify-content-center">
                        <i class="ni ni-ui-04 text-info text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text text-white ms-3">Groups</span>
                </a>
                <div class="collapse {{ (request()->is('admin/sets*')) ? 'show' : '' }}" id="applicationsExamples">
                    <ul class="nav ms-4">
                        <li class="nav-item ">
                            <a class="nav-link {{ (request()->is('admin/sets/groups')) ? 'text-white font-bold' : 'opacity-7 ' }} " href="{{ route('admin.groups.index') }}">
                                <span class="sidenav-mini-icon"> L </span>
                                <span class="sidenav-normal"> List </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link {{ (request()->is('admin/sets/overview')) ? 'text-white font-bold' : 'opacity-7' }}" href="{{ route('admin.groups.overview') }}">
                                 <span class="sidenav-mini-icon"> O </span>
                                <span class="sidenav-normal"> Overview </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.tickets.index') }}" class="nav-link {{ (request()->is('admin/tickets')) ? 'active' : '' }} ">
                    <div class="icon icon-shape icon-sm bg-white text-center d-flex align-items-center justify-content-center">
                        <i class="ni ni-archive-2 text-success text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text text-white ms-3">Tickets</span>
                </a>
            </li>
            <li class="nav-item">
                <a data-bs-toggle="collapse" href="#ecommerceExamples" class="nav-link " aria-controls="ecommerceExamples" role="button" aria-expanded="false">
                    <div class="icon icon-shape icon-sm bg-white text-center d-flex align-items-center justify-content-center">
                        <i class="ni ni-app text-dark text-sm"></i>
                    </div>
                    <span class="nav-link-text text-white ms-3">Subscriptions</span>
                </a>
                <div class="collapse " id="ecommerceExamples">
                    <ul class="nav ms-4">
                        <li class="nav-item ">
                            <a class="nav-link " href="{{asset('dashboard/')}}/pages/ecommerce/overview.html">
                                <span class="sidenav-mini-icon"> O </span>
                                <span class="sidenav-normal"> Overview </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a data-bs-toggle="collapse" href="#authExamples" class="nav-link " aria-controls="authExamples" role="button" aria-expanded="false">
                    <div class="icon icon-shape icon-sm bg-white text-center d-flex align-items-center justify-content-center">
                        <i class="ni ni-single-copy-04 text-danger text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text text-white ms-3">Payment</span>
                </a>
                <div class="collapse " id="authExamples">
                    <ul class="nav ms-4">
                        <li class="nav-item ">
                            <a class="nav-link " data-bs-toggle="collapse" aria-expanded="false" href="#signinExample">
                                <span class="sidenav-mini-icon"> S </span>
                                <span class="sidenav-normal"> Sign In <b class="caret"></b></span>
                            </a>
                            <div class="collapse " id="signinExample">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link " href="{{asset('dashboard/')}}/pages/authentication/signin/basic.html">
                                            <span class="sidenav-mini-icon text-xs"> B </span>
                                            <span class="sidenav-normal"> Basic </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="{{asset('dashboard/')}}/pages/authentication/signin/cover.html">
                                            <span class="sidenav-mini-icon text-xs"> C </span>
                                            <span class="sidenav-normal"> Cover </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="{{asset('dashboard/')}}/pages/authentication/signin/illustration.html">
                                            <span class="sidenav-mini-icon text-xs"> I </span>
                                            <span class="sidenav-normal"> Illustration </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link " data-bs-toggle="collapse" aria-expanded="false" href="#signupExample">
                                <span class="sidenav-mini-icon"> S </span>
                                <span class="sidenav-normal"> Sign Up <b class="caret"></b></span>
                            </a>
                            <div class="collapse " id="signupExample">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link " href="{{asset('dashboard/')}}/pages/authentication/signup/basic.html">
                                            <span class="sidenav-mini-icon text-xs"> B </span>
                                            <span class="sidenav-normal"> Basic </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="{{asset('dashboard/')}}/pages/authentication/signup/cover.html">
                                            <span class="sidenav-mini-icon text-xs"> C </span>
                                            <span class="sidenav-normal"> Cover </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="{{asset('dashboard/')}}/pages/authentication/signup/illustration.html">
                                            <span class="sidenav-mini-icon text-xs"> I </span>
                                            <span class="sidenav-normal"> Illustration </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</aside>
