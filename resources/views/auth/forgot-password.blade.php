<x-layouts.app>
    <x-jet-authentication-card>
        <div class="card border-0 mb-0">
            <div class="py-4 card-body">
                <div class="mb-4 text-base text-gray-600">
                    {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                </div>
                @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
                    </div>
                @endif
                <x-jet-validation-errors class="mb-4" />
                <form method="POST" action="{{ route('password.email') }}">
            @csrf
                    <div class="block">
                        <x-jet-input id="email"  class="block mt-1 w-full" placeholder="Your email" type="email" name="email" :value="old('email')" required autofocus />
                    </div>
                    <div class="flex items-center justify-end mt-2">
                        <x-jet-button>
                            {{ __('Email Password Reset Link') }}
                        </x-jet-button>
                    </div>
                </form>
            </div>
        </div>
    </x-jet-authentication-card>
</x-layouts.app>
