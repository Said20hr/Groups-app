<x-layouts.errors>
    <!-- Navbar -->

    <!-- End Navbar -->
    <main class="main-content  mt-0">
        <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg" style="background-image: url('{{asset('dashboards')}}/assets/img/illustrations/404.svg');">
            <span class="mask bg-gradient-dark opacity-6"></span>
        </div>
        <div class="container">
            <div class="row mt-lg-n10 mt-md-n11 mt-n10 justify-content-center">
                <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
                    <div class="card border">
                        <div class="card-body text-center">
                            <div class="info mb-4 mt-n6">
                                <img class="avatar avatar-xxl shadow-lg border border-dark" alt="Image placeholder" src="{{auth()->user()->profile_photo_url}}">
                            </div>
                            <h3 class="mb-2 font-weight-bolder">{{auth()->user()->name}}</h3>
                            <h6 class="mb-2">{{auth()->user()->email}}</h6>
                            <p class="mb-0">Your account is <span class="text-red-500">locked</span> due {{auth()->user()->raison_deactivated}}.</p>
                            <form method="POST" action="{{ route('logout') }}"  >
                                @csrf
                                <button type="submit" class="nav-link text-white font-weight-bold px-0">
                                    <button type="submit" class="btn  bg-gradient-dark mb-0">{{ __('Sign Out') }}</button>
                                </button>
                            </form>
                            <p class="my-4 text-xs text-muted">Contact support <a href="mailto:Majed@Anaylitics.com">Majed@Anaylitics.com </a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-layouts.errors>
