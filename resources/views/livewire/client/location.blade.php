<x-jet-form-section submit="updateLocation">
    <x-slot name="title">
        {{ __('Update your address Information') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Are you living in a nice area?') }}
    </x-slot>

    <x-slot name="form">
        <div class="flex items-center justify-between py-4 border-b m-0">
            <div class="w-1/3">
                <span class="text-gray-700 text-sm">{{__('Location')}}</span>
            </div>
            <div class="w-2/3 flex flex-wrap">
                <!-- Company -->
                <div class="lg:w-1/2 w-full px-2 flex flex-wrap">
                    <x-jet-input id="company" type="text" class="mt-1 block w-full" placeholder="{{ __('Company')}}" wire:model.defer="location.company" autocomplete="company" />
                    <x-jet-input-error for="location.company" class="mt-2" />
                </div>
                <!-- Location -->
                <div class="lg:w-1/2 w-full px-2 flex flex-wrap">
                    <x-jet-input id="location" type="text" class="mt-1 block w-full" placeholder="{{ __('Location')}}" wire:model.defer="location.location" autocomplete="location" />
                    <x-jet-input-error for="location.location" class="mt-2" />
                </div>
            </div>
        </div>
        <!-- Contact information -->
        <div class="flex items-center justify-between py-4 border-b">
            <div class="w-1/3">
                <span class="text-gray-700 text-sm">{{__('Address')}}</span>
            </div>
            <div class="w-2/3 flex flex-wrap">
                <!-- Street -->
                <div class="lg:w-1/2 w-full px-2 flex flex-wrap">
                    <x-jet-input id="street" type="text" class="mt-1 block w-full" placeholder="{{ __('Street')}}" wire:model.defer="location.street" autocomplete="street" />
                    <x-jet-input-error for="location.street" class="mt-2" />
                </div>
                <!-- City -->
                <div class="lg:w-1/2 w-full px-2 flex flex-wrap">
                    <x-jet-input id="city" type="text" class="mt-1 block w-full" placeholder="{{ __('City')}}" wire:model.defer="location.city" autocomplete="city" />
                    <x-jet-input-error for="location.city" class="mt-2" />
                </div>
                <!-- State -->
                <div class="lg:w-1/2 w-full px-2 flex flex-wrap">
                    <x-jet-input id="state" type="text" class="mt-4 block w-full" placeholder="{{ __('State')}}" wire:model.defer="location.state" autocomplete="state" />
                    <x-jet-input-error for="location.state" class="mt-2" />
                </div>
                <!-- Country -->
                <div class="lg:w-1/2 w-full px-2 flex flex-wrap">
                    <div class="input-group">
                        <select id="country" wire:model.defer="location.country" class="form-control mt-4 block w-full">
                            @foreach($countries as $country)
                                <option value="{{$country}}" @selected($country)>{{$country}}</option>
                            @endforeach
                        </select>
                        <x-jet-input-error for="location.country" class="mt-2" />
                    </div>
                </div>
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
