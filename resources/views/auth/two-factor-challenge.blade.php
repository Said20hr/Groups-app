<x-layouts.app>
    <x-jet-authentication-card>
        <div class="card border-0 mb-0">
            <div class="py-4 card-body">
                <div x-data="{ recovery: false }">
                    <div class="mb-4 text-base text-gray-600" x-show="! recovery" >
                        <p class="text-lg">{{ __('Please confirm access to your account by entering the authentication code provided by your authenticator application.') }}
                        </p>
                    </div>

                    <div class="mb-4 text-base text-gray-600" x-show="recovery">
                        {{ __('Please confirm access to your account by entering one of your emergency recovery codes.') }}
                    </div>

                    <x-jet-validation-errors class="mb-4" />

                    <form method="POST" action="{{ route('two-factor.login') }}">
                        @csrf

                        <div class="mt-4" x-show="! recovery">
                            <x-jet-input id="code" class="block mt-1 w-full" type="text" placeholder="Code" inputmode="numeric" name="code" autofocus x-ref="code" autocomplete="one-time-code" />
                        </div>

                        <div class="mt-4" x-show="recovery">
                            <x-jet-input id="recovery_code" class="block mt-1 w-full" placeholder="Recovery code"  type="text" name="recovery_code" x-ref="recovery_code" autocomplete="one-time-code" />
                        </div>

                        <div class="flex items-center justify-end mt-2">
                            <x-jet-button>
                                {{ __('Log in') }}
                            </x-jet-button>
                        </div>
                        <div class="flex items-center justify-center mt-2">
                            <button type="button" class="text-sm text-gray-600 hover:text-gray-900 underline cursor-pointer"
                                            x-show="! recovery"
                                            x-on:click="
                                                recovery = true;
                                                $nextTick(() => { $refs.recovery_code.focus() })
                                            ">
                                {{ __('Use a recovery code') }}
                            </button>

                            <button type="button" class="text-sm text-gray-600 hover:text-gray-900 underline cursor-pointer"
                                            x-show="recovery"
                                            x-on:click="
                                                recovery = false;
                                                $nextTick(() => { $refs.code.focus() })
                                            ">
                                {{ __('Use an authentication code') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </x-jet-authentication-card>
</x-layouts.app>




