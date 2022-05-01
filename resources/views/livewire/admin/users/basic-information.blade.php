<div class="p-3 rounded-lg bg-white mt-4 border border-secondary shadow" id="basic-info">
    <div class="card-header pb-0">
        <h5>{{ __('Basic Info')}}</h5>
    </div>
    <form>
        <div class="p-3 pt-1">
            <div class="flex flex-wrap">
                <div class="w-1/2 mt-4 pr-3">
                    <label class="form-label">{{ __('Full Name')}}</label>
                    <div class="input-group">
                        <input id="name" name="name" class="form-control" type="text"  value="{{ $user->name}}" required >
                    </div>
                </div>
                <div class="w-1/2 mt-4 pr-3">
                    <label class="form-label">{{ __('Email')}}</label>
                    <div class="input-group">
                        <input id="email" name="email" class="form-control" disabled type="email"  value="{{ $user->email}}" required>
                    </div>
                </div>
                <div class="w-1/2 mt-4 pr-3">
                    <label class="form-label">{{ __('Last Name')}}</label>
                    <div class="input-group">
                        <input id="username" name="username" class="form-control" type="text"  value="{{ $user->username}}" required>
                    </div>
                </div>
                <div class="w-1/2 mt-4 pr-3">
                    <label class="form-label">{{ __('Phone Number')}}</label>
                    <div class="input-group">
                        <input id="phone" name="phone" class="form-control" type="number" value="{{ $user->phone}}" required>
                    </div>
                </div>
                <div class="w-1/3 mt-4 pr-3">
                    <label class="form-label mt-4">{{ __('Trading View ID')}}</label>
                    <div class="input-group">
                        <input id="tradingViewId" name="tradingViewId" class="form-control" type="text" value="{{ $user->tradingViewId}}" required>
                    </div>
                </div>
                <div class="w-1/3 mt-4 pr-3">
                    <label class="form-label mt-4">{{ __('Reputation')}}</label>
                    <div class="input-group">
                        <input id="tradingViewId" name="tradingViewId" class="form-control" type="text" value="{{ $user->tradingViewId}}" required>
                    </div>
                </div>
                <div class="w-1/3 mt-4 pr-3">
                    <label class="form-label mt-4">{{ __('Published')}}</label>
                    <div class="input-group">
                        <input id="tradingViewId" name="tradingViewId" class="form-control" type="text" value="{{ $user->tradingViewId}}" required>
                    </div>
                </div>
                <div class="w-full">
                    <label class="form-label mt-4">{{ __('Description')}}</label>
                    <div class="input-group">
                       <textarea id="about" type="email" class="form-control" placeholder="About me"
                                 wire:model.defer="state.about_me" rows="5" cols="10"></textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex items-end">
            <button type="submit" class="btn bg-gradient-success mx-3 me-auto">Save</button>
        </div>
    </form>
</div>
