<div class="p-3 mt-4 border bg-white border-secondary shadow rounded-lg" id="password">
    <div class="card-header">
        <h5>{{ __('Change Password') }}</h5>
        <p> {{ __('Ensure your account is using a long, random password to stay secure.') }}</p>
    </div>
    <form wire:submit.prevent="updatePassword" class="bg-white p-3 pt-0 pb-5">
        <label class="form-label">{{ __('Current password') }}</label>
        <div class="form-group">
            <input class="form-control" type="password" placeholder="{{ __('Current password') }}" wire:model.defer="state.current_password">
            <x-jet-input-error for="current_password" class="mt-2" />
        </div>
        <label class="form-label">{{ __('New password') }}</label>
        <div class="form-group">
            <input class="form-control" type="password" placeholder="{{ __('New password') }}" wire:model.defer="state.password">
            <x-jet-input-error for="password" class="mt-2" />
        </div>
        <label class="form-label">{{ __('Confirm new password') }}</label>
        <div class="form-group">
            <input class="form-control" type="password" placeholder="{{ __('Confirm password') }}" wire:model.defer="state.password_confirmation">
            <x-jet-input-error for="password_confirmation" class="mt-2" />
        </div>
        <button type="submit" class="btn bg-gradient-success float-end my-2">{{ __('Update password') }}</button>
        <div x-data="{ shown: false, timeout: null }"
             x-init="@this.on('{{ 'saved' }}', () => { clearTimeout(timeout); shown = true; timeout = setTimeout(() => { shown = false }, 2000);  })"
             x-show.transition.out.opacity.duration.1500ms="shown"
             x-transition:leave.opacity.duration.1500ms
             style="display: none;"
            class="text-sm text-emerald-500">
            {{ __('Saved.') }}
        </div>
    </form>
</div>

