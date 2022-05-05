<x-jet-form-section submit="updateSocial">
    <x-slot name="title">
        {{ __('Update your Social media accounts') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Give us more details about you. What do you enjoy doing in your spare time?') }}
    </x-slot>

    <x-slot name="form">
        <div class="flex items-center justify-between py-4 m-0">
            <div class="w-1/3">
                <span class="text-gray-700 text-lg font-semibold">{{__('Social accounts')}}</span>
            </div>
            <div class="w-2/3 flex flex-wrap">
                <!-- Telegram -->
                <div class="w-full flex justify-between mb-4 border-b px-0 items-center border rounded-lg">
                    <x-jet-input id="telegram" type="text" class="block w-11/12 border-0 text-dark" placeholder="{{ __('Telegram')}}" wire:model.defer="social.telegram" autocomplete="telegram" />
                    <img class="width-48-px h-10 p-1 border rounded-r-lg" src="{{asset('dashboards/assets/img/small-logos/logo-telegram.svg')}}" alt="telegram">
                </div>
                <x-jet-input-error for="social.telegram" class="mt-2" />

                <!-- linkedIn -->
                <div class="w-full flex justify-between mb-4 border-b px-0 items-center border rounded-lg">
                    <x-jet-input id="linkedIn" type="text" class="block w-11/12 border-0 text-dark" placeholder="{{ __('linkedIn')}}" wire:model.defer="social.linkedIn" autocomplete="linkedIn" />
                    <img class="width-48-px h-10 p-1 border rounded-r-lg" src="{{asset('dashboards/assets/img/small-logos/logo-linkedin.svg')}}" alt="linkedIn">
                </div>
                <x-jet-input-error for="social.linkedIn" class="mt-2" />

                <!-- Facebook -->
                <div class="w-full flex justify-between mb-4 border-b px-0 items-center border rounded-lg">
                    <x-jet-input id="facebook" type="text" class="block w-11/12 border-0 text-dark" placeholder="{{ __('Facebook')}}" wire:model.defer="social.facebook" autocomplete="facebook" />
                    <img class="width-48-px h-10 p-1 border rounded-r-lg" src="{{asset('dashboards/assets/img/small-logos/logo-facebook.svg')}}" alt="facebook">
                </div>
                <x-jet-input-error for="social.facebook" class="mt-2" />

                <!-- Instagram -->
                <div class="w-full flex justify-between mb-4 border-b px-0 items-center border rounded-lg">
                    <x-jet-input id="instagram" type="text" class="block w-11/12 border-0 text-dark" placeholder="{{ __('Instagram')}}" wire:model.defer="social.instagram" autocomplete="instagram" />
                    <img class="width-48-px h-10 p-1 border rounded-r-lg" src="{{asset('dashboards/assets/img/small-logos/logo-instagram.svg')}}" alt="instagram">
                </div>
                <x-jet-input-error for="social.instagram" class="mt-2" />

                <!-- Twitter -->
                <div class="w-full flex justify-between mb-4 border-b px-0 items-center border rounded-lg">
                    <x-jet-input id="twitter" type="text" class="block w-11/12 border-0 text-dark" placeholder="{{ __('Twitter')}}" wire:model.defer="social.twitter" autocomplete="twitter" />
                    <img class="width-48-px h-10 p-1 border rounded-r-lg" src="{{asset('dashboards/assets/img/small-logos/logo-twitter.svg')}}" alt="twitter">
                </div>
                <x-jet-input-error for="social.twitter" class="mt-2" />

                <!-- Website -->
                <div class="w-full flex justify-between mb-4 border-b px-0 items-center border rounded-lg">
                    <x-jet-input id="website" type="text" class="block w-11/12 border-0 text-dark" placeholder="{{ __('Website')}}" wire:model.defer="social.website" autocomplete="website" />
                    <img class="width-48-px h-10 p-1 border rounded-r-lg" src="{{asset('dashboards/assets/img/small-logos/bootstrap.svg')}}" alt="website">
                </div>
                <x-jet-input-error for="social.website" class="mt-2" />

                <!-- Youtube Chanel-->
                <div class="w-full flex justify-between mb-4 border-b px-0 items-center border rounded-lg">
                    <x-jet-input id="youtube_chanel" type="text" class="block w-11/12 border-0 text-dark" placeholder="{{ __('Youtube Chanel')}}" wire:model.defer="social.youtube_chanel" autocomplete="youtube_chanel" />
                    <img class="width-48-px h-10 p-1 border rounded-r-lg" src="{{asset('dashboards/assets/img/small-logos/logo-youtube.svg')}}" alt="youtube_chanel">
                </div>
                <x-jet-input-error for="social.youtube_chanel" class="mt-2" />

                <!-- Youtube Username -->
                <div class="w-full flex justify-between mb-4 border-b px-0 items-center border rounded-lg">
                    <x-jet-input id="youtube_username" type="text" class="block w-11/12 border-0 text-dark" placeholder="{{ __('Youtube @username')}}" wire:model.defer="social.youtube_username" autocomplete="youtube_username" />
                    <img class="width-48-px h-10 p-1 border rounded-r-lg" src="{{asset('dashboards/assets/img/small-logos/logo-youtube.svg')}}" alt="youtube_username">
                </div>
                <x-jet-input-error for="social.youtube_username" class="mt-2" />
            </div>
        </div>

    </x-slot>

    <x-slot name="actions">
        <x-jet-action-message class="mr-3" on="saved">
            {{ __('Saved.') }}
        </x-jet-action-message>

        <x-jet-button wire:loading.attr="disabled" wire:target="photo">
            {{ __('Save') }}
        </x-jet-button>
    </x-slot>
</x-jet-form-section>

