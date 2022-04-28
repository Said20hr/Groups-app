<x-layouts.app>
    <x-jet-authentication-card>
        <div class="card border-0 mb-0 mt-2">
            <div class="py-4 card-body">
            <x-jet-validation-errors class="mb-4" />

                <form method="POST" action="{{ route('password.update') }}">
                    @csrf

                    <input type="hidden" name="token" value="{{ $request->route('token') }}">

                    <div class="block">
                        <x-jet-input id="email" class="block mt-1 w-full" placeholder="Your email"  type="email" name="email" :value="old('email', $request->email)" required autofocus />
                    </div>

                    <div class="mt-4">
                        <x-jet-input id="password" class="block mt-1 w-full" placeholder="New password"  type="password" name="password" required autocomplete="new-password" />
                    </div>

                    <div class="mt-4">
                        <x-jet-input id="password_confirmation" class="block mt-1 w-full" placeholder="Confirm your new password"  type="password" name="password_confirmation" required autocomplete="new-password" />
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <x-jet-button>
                            {{ __('Reset Password') }}
                        </x-jet-button>
                    </div>
                </form>
            </div>
        </div>
    </x-jet-authentication-card>
</x-layouts.app>

