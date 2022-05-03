<div class="p-3 rounded-lg bg-white mt-4 border border-secondary shadow" id="basic-info">
    <div class="card-header pb-2">
        <h5>{{ __('Basic Info')}}</h5>
    </div>
    <form wire:submit.prevent="updateProfileInformation">
        <div class="w-full flex flex-wrap py-4 border-b border-t border-gray-200" >
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
                            <img src="{{ $this->user->profile_photo_url }}" alt="{{ $this->user->name }}" class="rounded-full h-24 w-24 object-cover">
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
        <div class="p-3 pt-1 pb-6">
            <div class="flex flex-wrap">
                <div class="w-1/2 mt-4 pr-3">
                    <label class="form-label">{{ __('Full Name')}}</label>
                    <div class="input-group">
                        <input id="name" class="form-control" type="text"  wire:model="state.name" placeholder="Full Name"  >
                    </div>
                    <x-jet-input-error for="name" class="mt-2" />
                </div>
                <div class="w-1/2 mt-4 pr-3">
                    <label class="form-label">{{ __('Email')}}</label>
                    <div class="input-group">
                        <input id="email" class="form-control border-2 border-primary" disabled type="email" placeholder="Email"  value="{{ $user->email}}" required>
                    </div>
                    <x-jet-input-error for="email" class="mt-2" />
                </div>
                <div class="w-1/2 mt-4 pr-3">
                    <label class="form-label">{{ __('Username (Profile name)')}}</label>
                    <div class="input-group">
                        <input id="username" class="form-control" type="text"  wire:model="state.username" placeholder="Username" required>
                    </div>
                    <x-jet-input-error for="username" class="mt-2" />
                </div>
                <div class="w-1/2 mt-4 pr-3">
                    <label class="form-label">{{ __('Phone Number')}}</label>
                    <div class="input-group">
                        <input id="phone" class="form-control" type="number" wire:model="state.phone" placeholder="Phone" >
                    </div>
                    <x-jet-input-error for="phone" class="mt-2" />
                </div>
                <div class="w-1/2 mt-4 pr-3">
                    <label class="form-label mt-4">{{ __('Trading View ID')}}</label>
                    <div class="input-group">
                        <input id="tradingViewId" wire:model="state.tradingViewId" class="form-control" type="text" placeholder="Trading View id">
                    </div>
                    <x-jet-input-error for="tradingViewId" class="mt-2" />
                </div>
                <div class="w-1/2 mt-4 pr-3">
                    <label class="form-label mt-4">{{ __('Reputation')}}</label>
                    <div class="input-group">
                        <input id="reputation"  wire:model="state.reputation" class="form-control" type="number" placeholder="Reputation">
                    </div>
                    <x-jet-input-error for="reputation" class="mt-2" />
                </div>
                <hr class="horizontal bg-gray-200">
                <div class="w-full mt-4">
                    <div class="flex items-center">
                        <label class="form-label pt-2 text-base mr-3">{{ __('Published')}}</label>
                        <div class="form-check form-switch">
                            <input class="form-check-input" @checked($user->published) wire:model="state.published" type="checkbox" id="flexSwitchCheckDefault1">
                        </div>
                    </div>
                    <x-jet-input-error for="published" class="mt-2" />
                </div>

                <div class="w-full">
                    <label class="form-label mt-4">{{ __('Description')}}</label>
                    <div class="input-group">
                       <textarea id="about" type="text" class="form-control" placeholder="About user"
                                 wire:model.defer="state.about_me" rows="5" cols="10"></textarea>
                    </div>
                    <x-jet-input-error for="about_me" class="mt-2" />
                </div>
            </div>
            <button type="submit" class="btn bg-gradient-success float-end my-3">{{ __('Update Profile') }}</button>
        </div>
    </form>
    <div x-data="{ shown: false, timeout: 600 }"
         x-init="@this.on('saved', () => { clearTimeout(timeout); shown = true; timeout = setTimeout(() => { shown = false }, 2000);  })"
         x-show.transition.out.opacity.duration.1500ms="shown"
         x-transition:leave.opacity.duration.1500ms
         style="display: none;" class="mx-3 text-lg alert alert-primary py-2 text-white">
        Profile successfully Updated
    </div>
</div>
