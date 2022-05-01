<x-layouts.app>
    <x-jet-authentication-card>  
        <div class="card border-0 mb-0">
            <div class="py-4 card-body">
                <div class="mb-4 text-base text-gray-600">
                    {{ __('This is a secure area of the application,please confirm your password before continuing.') }}
                </div>

                <x-jet-validation-errors class="mb-4" />

                <form method="POST" action="{{ route('password.confirm') }}">
                    @csrf

                    <div>
                        <x-jet-input id="password" class="block mt-1 w-full" type="password" placeholder="Your password" name="password" required autocomplete="current-password" autofocus />
                    </div>

                    <div class="flex items-center justify-end mt-2">
                        <x-jet-button class="">
                            {{ __('Confirm') }}
                        </x-jet-button>
                    </div>
                </form>
            </div>
        </div>
    </x-jet-authentication-card>
</x-layouts.app>