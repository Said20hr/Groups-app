<div class="card mt-4  card-body border border-secondary shadow" id="sessions">
    <div class="card-header pb-3">
        <h5>Sessions</h5>
        <p class="text-sm">
            This is a list of devices that have logged into your account. click here to display
        </p>
        <div class="block">
            @if(count($sessions)<1 )
                <button class="btn bg-gradient-primary btn float-start mt-2 mb-0" type="button"
                        wire:click="showSessions()">Show the list</button>
            @endif
                <div wire:loading class="w-full my-3 text-gray-900 animate-bounce">
                    Checking the browsers...
                </div>
        </div>
    </div>
    @if (count($sessions) > 0)
        <div class="card-body pt-0">
            @foreach ($sessions as $session)
                <div class="d-flex align-items-center">
                    <div class="text-center w-5">
                        @if ($session->agent->isDesktop())
                            <i class="fas fa-desktop text-2xl opacity-6"></i>
                        @else
                            <i class="fas fa-mobile text-2xl opacity-6"></i>
                        @endif
                    </div>
                    <div class="my-auto ms-3">
                        <div class="h-100">
                            <p class="text-sm mb-1">
                                {{ $session->agent->platform() }} - {{ $session->agent->browser() }}  {{ $session->ip_address }}
                            </p>
                            <p class="mb-0 text-xs">
                                @if ($session->is_current_device)
                                    <span class="text-green-500 font-semibold">{{ __('This device') }}</span>
                                @else
                                    {{ __('Last active') }} {{ $session->last_active }}
                                @endif
                            </p>
                        </div>
                    </div>
                    @if ($session->is_current_device)
                        <span class="badge badge-success badge-sm my-auto ms-auto me-3">
                                    Active
                                </span>
                    @else
                        <span class="badge badge-danger badge-sm my-auto ms-auto me-3">
                                  {{ $session->last_active }}
                                </span>
                    @endif
                    @if($session->position)
                        <p class="text-secondary text-sm my-auto me-3">
                            {{$session->position->countryName}}
                        </p>
                    @endif
                </div>
                @if(!$loop->last)
                    <hr class="horizontal dark">
                @endif
            @endforeach
        </div>
    @endif

</div>
