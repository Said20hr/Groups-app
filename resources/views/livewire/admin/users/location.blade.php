<div class="p-3 bg-white border shadow rounded-lg border-secondary mt-4" id="location">
    <div class="p-3 bg-white">
        <h5>{{ __('Location')}}</h5>
    </div>
    <form>
        <div class="p-3 bg-white pt-0">
            <div class="flex flex-wrap">
                <div class="lg:w-1/2 pr-4">
                    <label class="form-label mt-4">{{ __('Company')}}</label>
                    <div class="input-group">
                        <input id="company" name="company" placeholder="{{ __('Company')}}" class="form-control" type="text" value="{{ $user->company}}" required>
                    </div>
                </div>
                <div class="lg:w-1/2 pr-4">
                    <label class="form-label mt-4">{{ __('Location')}}</label>
                    <input id="street" name="street" class="form-control" placeholder="{{ __('Location')}}" type="text" value="{{ $user->street}}" required >
                </div>
                <div class="lg:w-1/2 pr-4">
                    <label class="form-label mt-4">{{ __('Street')}}</label>
                    <input id="street" name="street" class="form-control" placeholder="{{ __('Street')}}" type="text" value="{{ $user->street}}" required >
                </div>
                <div class="lg:w-1/2 pr-4">
                    <label class="form-label mt-4">{{ __('City')}}</label>
                    <input id="city" name="city" class="form-control" placeholder="{{ __('City')}}" type="text" value="{{ $user->city}}" required>
                </div>
                <div class="lg:w-1/2 pr-4">
                    <label class="form-label mt-4">{{ __('State')}}</label>
                    <input id="city" name="city" class="form-control" placeholder="{{ __('State')}}" type="text" value="{{ $user->state}}" required>
                </div>
                <div class="lg:w-1/2 pr-4">
                    <label class="form-label mt-4">{{ __('Country')}}</label>
                    <div class="input-group">
                        <input id="country" name="country" class="form-control" placeholder="{{ __('Country')}}" type="text" value="{{ $user->country}}" required>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex items-end">
            <button type="submit" class="btn bg-gradient-success mx-3 me-auto">Save</button>
        </div>
    </form>
</div>
