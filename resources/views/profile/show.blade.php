<x-layouts.client>
    <div x-data="{ item: window.location.hash ? window.location.hash.substring(1) : 'general' }">
        <div class="px-4 py-4">
            <h2 class="text-xl font-semibold p-1">Profile Settings</h2>
        </div>
        <div class="text-sm font-medium text-center text-gray-500 border-b border-gray-200 dark:text-gray-400 dark:border-gray-700">
            <ul class="flex flex-wrap -mb-px">
                <li class="mr-6">
                    <button class="pill" :class="{ 'active-pill': item === 'general' }" @click.prevent="item = 'general'; window.location.hash = 'general'">General information</button>
                </li>
                <li class="mr-6">
                    <button class="pill" :class="{ 'active-pill': item === 'location' }" @click.prevent="item = 'location'; window.location.hash = 'location'">Location</button>
                </li>
                <li class="mr-6">
                    <button class="pill" :class="{ 'active-pill': item === 'social' }" @click.prevent="item = 'social'; window.location.hash = 'social'">Social media</button>
                </li>
                <li class="mr-6">
                    <button class="pill" :class="{ 'active-pill': item === 'password' }" @click.prevent="item = 'password'; window.location.hash = 'password'">Password</button>
                </li>
                <li class="mr-6">
                    <button class="pill" :class="{ 'active-pill': item === '2fa' }" @click.prevent="item = '2fa'; window.location.hash = '2fa'">Two Factor Authentication</button>
                </li>
                <li class="mr-6">
                    <button class="pill" :class="{ 'active-pill': item === 'sessions' }" @click.prevent="item = 'sessions'; window.location.hash = 'sessions'">Browser sessions</button>
                </li>
                <li class="mr-6">
                    <button class="pill" :class="{ 'active-pill': item === 'account' }" @click.prevent="item = 'account'; window.location.hash = 'account'">Account preferences</button>
                </li>
            </ul>
        </div>
        <div class="max-w-7xl mx-auto py-4 sm:px-6 lg:px-8">
            <div class="mt-3" x-show.duration.200s="item === 'general'"
                 transition:enter="transition ease-in-out duration-300"
                 x-transition:enter-start="opacity-0 transform scale-x-0 -translate-x-1/2"
                 x-transition:enter-end="opacity-100 transform scale-x-100 translate-x-0"
                 x-transition:leave="transition ease-in-out duration-300"
                 x-transition:leave-start="opacity-100 transform scale-x-100 translate-x-0"
                 x-transition:leave-end="opacity-0 transform scale-x-0 -translate-x-1/2"
                 style="display: none">
                @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                    @livewire('profile.update-profile-information-form')
                @endif
            </div>
            <div class="mt-3" x-show.duration.200s="item === 'location'"
                 transition:enter="transition ease-in-out duration-300"
                 x-transition:enter-start="opacity-0 transform scale-x-0 -translate-x-1/2"
                 x-transition:enter-end="opacity-100 transform scale-x-100 translate-x-0"
                 x-transition:leave="transition ease-in-out duration-300"
                 x-transition:leave-start="opacity-100 transform scale-x-100 translate-x-0"
                 x-transition:leave-end="opacity-0 transform scale-x-0 -translate-x-1/2"
                 style="display: none">
                @livewire('client.location')
            </div>
            <div class="mt-3" x-show.duration.200s="item === 'social'"
                 transition:enter="transition ease-in-out duration-300"
                 x-transition:enter-start="opacity-0 transform scale-x-0 -translate-x-1/2"
                 x-transition:enter-end="opacity-100 transform scale-x-100 translate-x-0"
                 x-transition:leave="transition ease-in-out duration-300"
                 x-transition:leave-start="opacity-100 transform scale-x-100 translate-x-0"
                 x-transition:leave-end="opacity-0 transform scale-x-0 -translate-x-1/2"
                 style="display: none">
               @livewire('client.social')
            </div>
            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                <div class="mt-3" x-show.duration.200s="item === 'password'"
                     transition:enter="transition ease-in-out duration-300"
                     x-transition:enter-start="opacity-0 transform scale-x-0 -translate-x-1/2"
                     x-transition:enter-end="opacity-100 transform scale-x-100 translate-x-0"
                     x-transition:leave="transition ease-in-out duration-300"
                     x-transition:leave-start="opacity-100 transform scale-x-100 translate-x-0"
                     x-transition:leave-end="opacity-0 transform scale-x-0 -translate-x-1/2"
                     style="display: none">
                    @livewire('profile.update-password-form')
                </div>
            @endif
            @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                <div class="mt-3" x-show.duration.200s="item === '2fa'"
                     transition:enter="transition ease-in-out duration-300"
                     x-transition:enter-start="opacity-0 transform scale-x-0 -translate-x-1/2"
                     x-transition:enter-end="opacity-100 transform scale-x-100 translate-x-0"
                     x-transition:leave="transition ease-in-out duration-300"
                     x-transition:leave-start="opacity-100 transform scale-x-100 translate-x-0"
                     x-transition:leave-end="opacity-0 transform scale-x-0 -translate-x-1/2"
                     style="display: none">
                    @livewire('profile.two-factor-authentication-form')
                </div>
            @endif
            <div class="mt-3" x-show.duration.200s="item === 'sessions'"
                 transition:enter="transition ease-in-out duration-300"
                 x-transition:enter-start="opacity-0 transform scale-x-0 -translate-x-1/2"
                 x-transition:enter-end="opacity-100 transform scale-x-100 translate-x-0"
                 x-transition:leave="transition ease-in-out duration-300"
                 x-transition:leave-start="opacity-100 transform scale-x-100 translate-x-0"
                 x-transition:leave-end="opacity-0 transform scale-x-0 -translate-x-1/2"
                 style="display: none">
                @livewire('profile.logout-other-browser-sessions-form')
            </div>
            @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
                <div class="mt-3" x-show.duration.200s="item === 'account'"
                     transition:enter="transition ease-in-out duration-300"
                     x-transition:enter-start="opacity-0 transform scale-x-0 -translate-x-1/2"
                     x-transition:enter-end="opacity-100 transform scale-x-100 translate-x-0"
                     x-transition:leave="transition ease-in-out duration-300"
                     x-transition:leave-start="opacity-100 transform scale-x-100 translate-x-0"
                     x-transition:leave-end="opacity-0 transform scale-x-0 -translate-x-1/2"
                     style="display: none">
                    @livewire('profile.delete-user-form')
                </div>
            @endif
        </div>
    </div>
</x-layouts.client>
