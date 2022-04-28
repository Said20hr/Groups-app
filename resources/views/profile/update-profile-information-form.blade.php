<x-jet-form-section submit="updateProfileInformation">
    <x-slot name="title">
        {{ __('Profile Information') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Update your account\'s profile information and email address.') }}
    </x-slot>

    <x-slot name="form">
       <div class="flex items-center justify-between py-4 border-b m-0">
           <div class="w-1/3">
               <span class="text-gray-700 text-sm">Name information</span>
           </div>
           <div class="w-2/3 flex flex-wrap">
               <!-- Name -->
               <div class="lg:w-1/2 w-full px-2 flex flex-wrap">
                   <x-jet-input id="name" type="text" class="mt-1 block w-full" placeholder="Name" wire:model.defer="state.name" autocomplete="name" />
                   <x-jet-input-error for="name" class="mt-2" />
               </div>
               <!-- Username -->
               <div class="lg:w-1/2 w-full px-2 flex flex-wrap">
                   <x-jet-input id="username" type="text" class="mt-1 block w-full" placeholder="Username" wire:model.defer="state.username" autocomplete="username" />
                   <x-jet-input-error for="username" class="mt-2" />
               </div>
           </div>
       </div>
        <!-- Contact information -->
        <div class="flex items-center justify-between py-4 border-b">
            <div class="w-1/3">
                <span class="text-gray-700 text-sm">Contact information</span>
            </div>
            <div class="w-2/3 flex flex-wrap">
                <!-- Email -->
                <div class="lg:w-1/2 w-full px-2 flex flex-wrap">
                    <x-jet-input id="email" type="email" class="mt-1 block w-full" placeholder="Email" wire:model.defer="state.email" autocomplete="email" />
                    <x-jet-input-error for="email" class="mt-2" />
                </div>
                <!-- Phone -->
                <div class="lg:w-1/2 w-full px-2 flex flex-wrap">
                    <x-jet-input id="phone" type="text" class="mt-1 block w-full" placeholder="Phone" wire:model.defer="state.phone" autocomplete="phone" />
                    <x-jet-input-error for="phone" class="mt-2" />
                </div>
            </div>
        </div>
        <!-- Trading information -->
        <div class="flex items-center justify-between py-4 border-b">
            <div class="w-1/3">
                <span class="text-gray-700 text-sm">Trading view ID</span>
            </div>
            <div class="w-2/3 flex flex-wrap">
                <div class="w-full px-2 flex flex-wrap">
                    <x-jet-input id="tradingViewId" type="text" class="mt-1 block w-full" placeholder="trading View ID" wire:model.defer="state.tradingViewId" autocomplete="tradingViewId" />
                    <x-jet-input-error for="tradingViewId" class="mt-2" />
                </div>
            </div>
        </div>
        <!-- About me -->
        <div class="flex items-center justify-between py-4 border-b">
            <div class="w-1/3">
                <span class="text-gray-700 text-sm">Profile information</span>
            </div>
            <div class="w-2/3 flex flex-wrap">
                <div class="w-full px-2 flex flex-wrap">
                    <textarea id="about" type="email" class="mt-1 block w-full border-gray-300  focus:ring-opacity-50 rounded-md focus:ring-0  mt-1 block w-full" placeholder="About me"
                              wire:model.defer="state.about_me" rows="5" cols="10"></textarea>
                    <x-jet-input-error for="about_me" class="mt-2" />
                </div>
            </div>
        </div>
        <!-- Profile Photo -->
        <div class="flex items-center justify-between py-4 border-b">
            <div class="w-1/3">
                <div class="text-gray-700 text-normal">Your photo</div>
                <div class="text-gray-600 text-xs">Update your profile photo</div>
            </div>
            <div class="w-2/3 flex flex-wrap">
                <!-- Profile Photo -->
                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                    <div x-data="{photoName: null, photoPreview: null}" class="flex justify-around items-center w-full px-4">
                        <div class="w-1/2">
                            <!-- Profile Photo File Input -->
                            <input type="file" class="hidden"
                                   wire:model="photo"
                                   x-ref="photo"
                                   x-on:change="
                                    photoName = $refs.photo.files[0].name;
                                    const reader = new FileReader();
                                    reader.onload = (e) => {
                                        photoPreview = e.target.result;
                                    };
                                    reader.readAsDataURL($refs.photo.files[0]);
                            " />
                            <!-- Current Profile Photo -->
                            <div class="text-center" x-show="! photoPreview">
                                <img src="{{ $this->user->profile_photo_url }}" alt="{{ $this->user->name }}" class="mx-auto rounded-full h-24 w-24 object-cover">
                            </div>
                            <!-- New Profile Photo Preview -->
                            <div class="text-center mx-auto" x-show="photoPreview" style="display: none;">
                                <span class="block rounded-full h-24 w-24 bg-cover bg-no-repeat mx-auto bg-center"
                                      x-bind:style="'background-image: url(\'' + photoPreview + '\');'">
                                </span>
                            </div>
                        </div>
                        <div class="w-1/2 text-center ">
                            <x-jet-secondary-button class="btn text-center w-2/3 my-2 gradient-btn-2 text-white" type="button" x-on:click.prevent="$refs.photo.click()">
                                {{ __('Select A New Photo') }}
                            </x-jet-secondary-button>
                            @if ($this->user->profile_photo_path)
                                <x-jet-secondary-button type="button" class="btn text-center w-2/3 my-2 gradient-btn-2 text-white" wire:click="deleteProfilePhoto">
                                    {{ __('Remove Photo') }}
                                </x-jet-secondary-button>
                            @endif
                        </div>
                        <x-jet-input-error for="photo" class="my-2" />
                    </div>
                @endif
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
