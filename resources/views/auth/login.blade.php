<x-layouts.app>
    <x-jet-authentication-card>
        <div class="card border-0 mb-0">
            <div class="pt-4 pb-2 bg-transparent">
                <h4 class="text-2xl text-dark font-medium text-center mt-2 mb-3">{{ __('Sign in') }}</h4>
                <div class="container flex justify-center items-center">
                    <div class="mx-2 px-1">
                        <a class="btn flex items-center text-indigo-900 hover:text-white hover:bg-indigo-600 transition duration-300 border" href="javascript:;">
                            <svg width="24px" height="32px" viewBox="0 0 64 64" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g transform="translate(3.000000, 3.000000)" fill-rule="nonzero">
                                        <circle fill="#3C5A9A" cx="29.5091719" cy="29.4927506" r="29.4882047"></circle>
                                        <path d="M39.0974944,9.05587273 L32.5651312,9.05587273 C28.6886088,9.05587273 24.3768224,10.6862851 24.3768224,16.3054653 C24.395747,18.2634019 24.3768224,20.1385313 24.3768224,22.2488655 L19.8922122,22.2488655 L19.8922122,29.3852113 L24.5156022,29.3852113 L24.5156022,49.9295284 L33.0113092,49.9295284 L33.0113092,29.2496356 L38.6187742,29.2496356 L39.1261316,22.2288395 L32.8649196,22.2288395 C32.8649196,22.2288395 32.8789377,19.1056932 32.8649196,18.1987181 C32.8649196,15.9781412 35.1755132,16.1053059 35.3144932,16.1053059 C36.4140178,16.1053059 38.5518876,16.1085101 39.1006986,16.1053059 L39.1006986,9.05587273 L39.0974944,9.05587273 L39.0974944,9.05587273 Z" fill="#FFFFFF"></path>
                                    </g>
                                </g>
                            </svg>
                            <span class="mx-2">{{ __('Facebook') }}</span>
                        </a>
                    </div>
                    <div class="mx-2 px-1">
                        <a class="btn flex items-center text-gray-900 hover:text-white hover:bg-gray-400 transition duration-300 border" href="javascript:;">
                            <svg width="24px" height="32px" viewBox="0 0 64 64" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g transform="translate(3.000000, 2.000000)" fill-rule="nonzero">
                                        <path d="M57.8123233,30.1515267 C57.8123233,27.7263183 57.6155321,25.9565533 57.1896408,24.1212666 L29.4960833,24.1212666 L29.4960833,35.0674653 L45.7515771,35.0674653 C45.4239683,37.7877475 43.6542033,41.8844383 39.7213169,44.6372555 L39.6661883,45.0037254 L48.4223791,51.7870338 L49.0290201,51.8475849 C54.6004021,46.7020943 57.8123233,39.1313952 57.8123233,30.1515267" fill="#4285F4"></path>
                                        <path d="M29.4960833,58.9921667 C37.4599129,58.9921667 44.1456164,56.3701671 49.0290201,51.8475849 L39.7213169,44.6372555 C37.2305867,46.3742596 33.887622,47.5868638 29.4960833,47.5868638 C21.6960582,47.5868638 15.0758763,42.4415991 12.7159637,35.3297782 L12.3700541,35.3591501 L3.26524241,42.4054492 L3.14617358,42.736447 C7.9965904,52.3717589 17.959737,58.9921667 29.4960833,58.9921667" fill="#34A853"></path>
                                        <path d="M12.7159637,35.3297782 C12.0932812,33.4944915 11.7329116,31.5279353 11.7329116,29.4960833 C11.7329116,27.4640054 12.0932812,25.4976752 12.6832029,23.6623884 L12.6667095,23.2715173 L3.44779955,16.1120237 L3.14617358,16.2554937 C1.14708246,20.2539019 0,24.7439491 0,29.4960833 C0,34.2482175 1.14708246,38.7380388 3.14617358,42.736447 L12.7159637,35.3297782" fill="#FBBC05"></path>
                                        <path d="M29.4960833,11.4050769 C35.0347044,11.4050769 38.7707997,13.7975244 40.9011602,15.7968415 L49.2255853,7.66898166 C44.1130815,2.91684746 37.4599129,0 29.4960833,0 C17.959737,0 7.9965904,6.62018183 3.14617358,16.2554937 L12.6832029,23.6623884 C15.0758763,16.5505675 21.6960582,11.4050769 29.4960833,11.4050769" fill="#EB4335"></path>
                                    </g>
                                </g>
                            </svg>
                            <span class="mx-2">{{ __('Google') }}</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body pt-0">
                <div class="text-center text-muted mb-4 text-xl">
                    <small>{{ __('Or sign in with credentials') }}</small>
                </div>
                <x-jet-validation-errors class="mb-2" />
                @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                @endif
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="mb-3">
                        <x-jet-input id="email" class="block mt-1 w-full" type="email" placeholder="Email" name="email" :value="old('email')" required autofocus />
                    </div>
                    <div class="mb-3">
                        <x-jet-input id="password" class="block mt-1 w-full" type="password" placeholder="Password" name="password" required autocomplete="current-password" />
                    </div>
                    <div class="form-check form-switch">
                        <x-jet-checkbox name="remember" id="rememberMe" />
                        <label class="form-check-label" for="rememberMe">{{ __('Remember me') }}</label>
                    </div>
                    <div class="mt-2">
                        <x-jet-button class="">
                            {{ __('Log in') }}
                        </x-jet-button>
                    </div>
                    <div class="position-relative text-center">
                        <p class="text-sm font-weight-bold mb-2 text-secondary text-border d-inline z-index-2 bg-white px-3">
                            {{ __('or') }}
                        </p>
                    </div>
                    <div class="text-center">
                        <a href="{{route('register')}}" type="button" class="btn hover:text-white main-btn gradient-btn-2 w-100 my-2">{{ __('Sign up') }}</a>
                    </div>
                    @if (Route::has('password.request'))
                        <div class="text-center mt-2">
                            <a class="underline text-sm text-monospace text-indigo-900 hover:text-gray-900" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        </div>
                    @endif
                </form>
            </div>
        </div>
    </x-jet-authentication-card>
</x-layouts.app>
