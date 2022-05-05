<x-layouts.app>
    <x-jet-authentication-card>
        <div class="card border-0 mb-0">
            <div class="py-4 card-body">
                <div class="mb-4 text-base text-gray-600">
                    <div class="font-semibold text-2xl text-center text-indigo-600 mb-3">{{ __('Thanks for signing up!')}}<br></div>
                    <div>
                        {{ __('Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
                    </div>


                    @if (session('status') == 'verification-link-sent')
                        <div class="mb-4 font-medium text-sm text-green-600">
                            {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                        </div>
                    @endif


                    <form method="POST" action="{{ route('verification.send') }}">
                        @csrf
                        <div class="flex items-center justify-end">
                            <x-jet-button type="submit">
                                {{ __('Resend Verification Email') }}
                            </x-jet-button>
                        </div>
                    </form>
                </div>
                <div class="mt-2 flex items-center justify-center">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900">
                            {{ __('Log Out') }}
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </x-jet-authentication-card>
</x-layouts.app>




