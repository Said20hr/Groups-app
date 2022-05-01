<div class="p-3 bg-white rounded-md border border-secondary shadow mt-4" id="social">
    <div class="card-header">
        <h5>{{ __('Social media')}}</h5>
        <p class="text-sm">{{ __('Here you can setup and manage user social media.')}}</p>
    </div>
    <div class="card-body pt-0">
        <form method="post" action="{{ route('admin.users.account',$user->id) }}" >
            @method('PUT')
            @csrf
            <div>
                <!-- Telegram-->
                <div class="py-2">
                <div class="d-flex">
                    <img class="width-48-px" src="{{asset('dashboards/assets/img/small-logos/logo-telegram.svg')}}" alt="logo_slack">
                    <div class="my-auto ms-2">
                        <div class="h-100">
                            <h5 class="mb-0">{{ __('Telegram')}}</h5>
                        </div>
                    </div>
                    <p class="text-sm text-secondary ms-auto me-3 my-auto">Enabled</p>
                    <div class="form-check form-switch my-auto">
                        <input class="form-check-input" checked type="checkbox" id="flexSwitchCheckDefault2">
                    </div>
                </div>
                <div class="pt-2">
                    <div class="flex bg-gray-200 rounded-md p-2 my-2 border shadow">
                        <p class="text-sm font-weight-bold my-auto ps-sm-2">{{ __('Twitter Link')}}</p>
                        <input class="form-control ms-sm-auto w-sm-70 w-40" type="text"
                               value="{{$user->twitter}}" >
                    </div>
                </div>
            </div>
                <hr class="horizontal bg-gray-600">
                <!-- Twitter-->
                <div class="py-2">
                <div class="d-flex">
                    <img class="width-48-px" src="{{asset('dashboards/assets/img/small-logos/logo-twitter.svg')}}" alt="logo_slack">
                    <div class="my-auto ms-2">
                        <div class="h-100">
                            <h5 class="mb-0">{{ __('Twitter')}}</h5>
                        </div>
                    </div>
                    <p class="text-sm text-secondary ms-auto me-3 my-auto">Enabled</p>
                    <div class="form-check form-switch my-auto">
                        <input class="form-check-input" checked type="checkbox" id="flexSwitchCheckDefault1">
                    </div>
                </div>
                <div class="pt-2">
                    <div class="flex bg-gray-200 rounded-md p-2 my-2 border shadow">
                        <p class="text-sm font-weight-bold my-auto ps-sm-2">{{ __('Twitter Link')}}</p>
                        <input class="form-control ms-sm-auto w-sm-70 w-40" type="text"
                               value="{{$user->twitter}}" >
                    </div>
                </div>
            </div>
                <hr class="horizontal bg-gray-600">
                <!-- LinkedIn-->
                <div class="py-2">
                <div class="d-flex">
                    <img class="width-48-px p-2" src="{{asset('dashboards/assets/img/small-logos/logo-linkedin.png')}}" alt="logo_slack">
                    <div class="my-auto ms-2">
                        <div class="h-100">
                            <h5 class="mb-0">{{ __('LinkedIn')}}</h5>
                        </div>
                    </div>
                    <p class="text-sm text-secondary ms-auto me-3 my-auto">Enabled</p>
                    <div class="form-check form-switch my-auto">
                        <input class="form-check-input" checked type="checkbox" id="flexSwitchCheckDefault1">
                    </div>
                </div>
                <div class="pt-2">
                    <div class="flex bg-gray-200 rounded-md p-2 my-2 border shadow">
                        <p class="text-sm font-weight-bold my-auto ps-sm-2">{{ __('LinkedIn Link')}}</p>
                        <input class="form-control ms-sm-auto w-sm-70 w-40" type="text" value="{{$user->linkedIn}}" >
                    </div>
                </div>
            </div>
                <!-- Twitter-->
                <hr class="horizontal bg-gray-600">
                <!-- Facebook-->
                <div class="py-2">
                <div class="d-flex">
                    <img class="width-48-px" src="{{asset('dashboards/assets/img/small-logos/logo-facebook.svg')}}" alt="logo_slack">
                    <div class="my-auto ms-2">
                        <div class="h-100">
                            <h5 class="mb-0">{{ __('Facebook')}}</h5>
                        </div>
                    </div>
                    <p class="text-sm text-secondary ms-auto me-3 my-auto">Enabled</p>
                    <div class="form-check form-switch my-auto">
                        <input class="form-check-input" checked type="checkbox" id="flexSwitchCheckDefault3">
                    </div>
                </div>
                <div class="pt-2">
                    <div class="flex bg-gray-200 rounded-md p-2 my-2 border shadow">
                        <p class="text-sm font-weight-bold my-auto ps-sm-2">{{ __('Facebook Link')}}</p>
                        <input class="form-control ms-sm-auto w-sm-70 w-40" type="text" value="{{$user->facebook}}" >
                    </div>
                </div>
            </div>
                <hr class="horizontal bg-gray-600">
                <!-- Instagram-->
                <div class="py-2">
                <div class="d-flex">
                    <img class="width-48-px p-2" src="{{asset('dashboards/assets/img/small-logos/logo-instagram.svg')}}" alt="logo_slack">
                    <div class="my-auto ms-2">
                        <div class="h-100">
                            <h5 class="mb-0">{{ __('Instagram')}}</h5>
                        </div>
                    </div>
                    <p class="text-sm text-secondary ms-auto me-3 my-auto">Enabled</p>
                    <div class="form-check form-switch my-auto">
                        <input class="form-check-input" checked type="checkbox" id="flexSwitchCheckDefault3">
                    </div>
                </div>
                <div class="pt-2">
                    <div class="flex bg-gray-200 rounded-md p-2 my-2 border shadow">
                        <p class="text-sm font-weight-bold my-auto ps-sm-2">{{ __('Instagram Link')}}</p>
                        <input class="form-control ms-sm-auto w-sm-70 w-40" type="text" value="{{$user->instagram}}" >
                    </div>
                </div>
            </div>
                <hr class="horizontal bg-gray-600">
                <!-- Website-->
                <div class="py-2">
                <div class="d-flex">
                    <img class="width-48-px" src="{{asset('dashboards/assets/img/small-logos/bootstrap.svg')}}" alt="logo_slack">
                    <div class="my-auto ms-2">
                        <div class="h-100">
                            <h5 class="mb-0">{{ __('Website')}}</h5>
                        </div>
                    </div>
                    <p class="text-sm text-secondary ms-auto me-3 my-auto">Enabled</p>
                    <div class="form-check form-switch my-auto">
                        <input class="form-check-input" checked type="checkbox" id="flexSwitchCheckDefault3">
                    </div>
                </div>
                <div class="pt-2">
                    <div class="flex bg-gray-200 rounded-md p-2 my-2 border shadow">
                        <p class="text-sm font-weight-bold my-auto ps-sm-2">{{ __('Website Link')}}</p>
                        <input class="form-control ms-sm-auto w-sm-70 w-40" type="text" value="{{$user->website}}">
                    </div>
                </div>
            </div>
                <hr class="horizontal bg-gray-600">
                <!-- Youtube-->
                <div class="py-2">
                <div class="d-flex">
                    <img class="width-48-px" src="{{asset('dashboards/assets/img/small-logos/logo-youtube.svg')}}" alt="logo_slack">
                    <div class="my-auto ms-2">
                        <div class="h-100">
                            <h5 class="mb-0">{{ __('Youtube')}}</h5>
                        </div>
                    </div>
                    <p class="text-sm text-secondary ms-auto me-3 my-auto">Enabled</p>
                    <div class="form-check form-switch my-auto">
                        <input class="form-check-input" checked type="checkbox" id="flexSwitchCheckDefault3">
                    </div>
                </div>
                <div class="pt-2">
                    <div class="flex bg-gray-200 rounded-md p-2 my-3 border shadow">
                        <p class="text-sm font-weight-bold my-auto ps-sm-2">{{ __('Youtbe Link')}}</p>
                        <input class="form-control ms-sm-auto w-sm-70 w-40" type="text"
                               value="{{$user->youtube}}" >
                    </div>
                    <div class="flex bg-gray-200 rounded-md p-2 my-3 border shadow">
                        <p class="text-sm font-weight-bold my-auto ps-sm-2">{{ __('Youtbe Link')}}</p>
                        <input class="form-control ms-sm-auto w-sm-70 w-40" type="text"
                               value="{{$user->youtube}}" >
                    </div>
                </div>
            </div>
           </div>
            <div class="flex items-end">
                <button type="submit" class="btn bg-gradient-success me-auto">Save</button>
            </div>
        </form>
    </div>
</div>
