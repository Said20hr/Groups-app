<div class="p-3 bg-white border shadow rounded-lg border-secondary mt-4" id="location">
    <div class="p-3 bg-white">
        <h5>{{ __('Location')}}</h5>
    </div>
    <form wire:submit.prevent="updateLocation">
        <div class="bg-white p-3 pt-0 pb-6">
            <div class="flex flex-wrap">
                <div class="lg:w-1/2 pr-4">
                    <label class="form-label mt-4">{{ __('Company')}}</label>
                    <div class="input-group">
                        <input id="company" wire:model.defer="location.company" placeholder="{{ __('Company')}}" class="form-control" type="text" }" required>
                        <x-jet-input-error for="location.company" class="mt-2" />
                    </div>
                </div>
                <div class="lg:w-1/2 pr-4">
                    <label class="form-label mt-4">{{ __('Location')}}</label>
                    <input id="location" wire:model.defer="location.location" class="form-control" placeholder="{{ __('Location')}}" type="text" >
                    <x-jet-input-error for="location.location" class="mt-2" />
                </div>
                <div class="lg:w-1/2 pr-4">
                    <label class="form-label mt-4">{{ __('Street')}}</label>
                    <input id="street" wire:model.defer="location.street" class="form-control" placeholder="{{ __('Street')}}" type="text" >
                    <x-jet-input-error for="location.street" class="mt-2" />
                </div>
                <div class="lg:w-1/2 pr-4">
                    <label class="form-label mt-4">{{ __('City')}}</label>
                    <input id="city" wire:model.defer="location.city" class="form-control" placeholder="{{ __('City')}}" type="text">
                    <x-jet-input-error for="location.city" class="mt-2" />
                </div>
                <div class="lg:w-1/2 pr-4">
                    <label class="form-label mt-4">{{ __('State')}}</label>
                    <input id="state" wire:model.defer="location.state" class="form-control" placeholder="{{ __('State')}}" type="text">
                    <x-jet-input-error for="location.state" class="mt-2" />
                </div>
                <div class="lg:w-1/2 pr-4">
                    <label class="form-label mt-4">{{ __('Country')}}</label>
                    <div class="input-group">
                        <select id="country" wire:model.defer="location.country" class="form-control">
                            @foreach($countries as $country)
                                <option value="{{$country}}" @selected($country)>{{$country}}</option>
                            @endforeach
                        </select>
                        <x-jet-input-error for="location.country" class="mt-2" />
                    </div>
                </div>
            </div>
            <button type="submit" class="btn bg-gradient-success float-end mt-4 mb-2 mx-3">{{ __('Update location') }}</button>
        </div>
    </form>
    <div x-data="{ shown: false, timeout: 600 }"
         x-init="@this.on('saved', () => { clearTimeout(timeout); shown = true; timeout = setTimeout(() => { shown = false }, 2000);  })"
         x-show.transition.out.opacity.duration.1500ms="shown"
         x-transition:leave.opacity.duration.1500ms
         style="display: none;" class="m-3 text-lg alert alert-primary py-2 text-white">
        Location successfully Updated
    </div>
</div>
