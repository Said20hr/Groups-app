<div class="p-3 bg-white border border-secondary shadow rounded-lg mt-4" id="2fa">
    <div class="card-header d-flex">
        <h5 class="mb-0">Two-factor authentication</h5>
        @if($user->two_factor_recovery_codes)
            <span class="badge badge-success ms-auto">Enabled</span>
        @else
            <span class="badge badge-danger ms-auto">Disabled</span>
        @endif
    </div>
    <div class="card-body">
        <div class="d-flex">
            <p class="mx-2 col-3 font-bold">Security keys</p>
            @if($user->two_factor_recovery_codes)
                <div class="flex flex-wrap justify-between">
                    @foreach (json_decode(decrypt($user->two_factor_recovery_codes), true) as $code)
                        <div class="pr-2 mb-3 w-1/2">
                            <div class="p-2 border rounded-md border-dark text-xs" type="button">
                                {{$code}}
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <p class="text-secondary text-sm ms-auto my-auto me-3">No Security Keys</p>
            @endif

        </div>
        <hr class="horizontal dark">
        <div class="d-flex">
            <p class="mx-2 col-3 my-auto font-bold">Authenticator app</p>
            @if($user->provider_id)
                <div class="d-flex jucebe">
                    <button class="btn mx-2 btn-sm btn-outline-dark mb-0 d-flex align-items-center bg-gray-200" type="button">
                        {{$user->provider_id}}
                        <img src="{{asset('dashboards/assets/img/logos/google.svg')}}" width="30" height="15" class="mx-2" alt="google">
                    </button>
                </div>
            @else
                <p class="text-secondary text-sm ms-auto my-auto me-3">Not Configured</p>
            @endif
        </div>
    </div>
</div>
