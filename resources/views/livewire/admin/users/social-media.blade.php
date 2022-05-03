<div class="p-3 bAdming-white rounded-md border border-secondary shadow mt-4" id="social">
    <div class="card-header">
        <h5>{{ __('Social media')}}</h5>
        <p class="text-sm">{{ __('Here you can setup and manage user social media.')}}</p>
    </div>
    <form wire:submit.prevent="updateSocial">
    <div class="card-body pt-0 pb-5">
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
                </div>
                <div class="pt-2">
                    <div class="flex bg-gray-200 rounded-md p-2 my-2 border shadow">
                        <p class="text-sm font-weight-bold my-auto ps-sm-2">{{ __('Twitter Link')}}</p>
                        <input class="form-control ms-sm-auto w-sm-70 w-40" type="text"
                               wire:model="social.telegram" >
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
                </div>
                <div class="pt-2">
                    <div class="flex bg-gray-200 rounded-md p-2 my-2 border shadow">
                        <p class="text-sm font-weight-bold my-auto ps-sm-2">{{ __('Twitter Link')}}</p>
                        <input class="form-control ms-sm-auto w-sm-70 w-40" type="text"
                               wire:model="social.twitter" >
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
                </div>
                <div class="pt-2">
                    <div class="flex bg-gray-200 rounded-md p-2 my-2 border shadow">
                        <p class="text-sm font-weight-bold my-auto ps-sm-2">{{ __('LinkedIn Link')}}</p>
                        <input class="form-control ms-sm-auto w-sm-70 w-40" type="text" wire:model="social.linkedIn" >
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
                </div>
                <div class="pt-2">
                    <div class="flex bg-gray-200 rounded-md p-2 my-2 border shadow">
                        <p class="text-sm font-weight-bold my-auto ps-sm-2">{{ __('Facebook Link')}}</p>
                        <input class="form-control ms-sm-auto w-sm-70 w-40" type="text" wire:model="social.facebook" >
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
                </div>
                <div class="pt-2">
                    <div class="flex bg-gray-200 rounded-md p-2 my-2 border shadow">
                        <p class="text-sm font-weight-bold my-auto ps-sm-2">{{ __('Instagram Link')}}</p>
                        <input class="form-control ms-sm-auto w-sm-70 w-40" type="text" wire:model="social.instagram" >
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

                </div>
                <div class="pt-2">
                    <div class="flex bg-gray-200 rounded-md p-2 my-2 border shadow">
                        <p class="text-sm font-weight-bold my-auto ps-sm-2">{{ __('Website Link')}}</p>
                        <input class="form-control ms-sm-auto w-sm-70 w-40" type="text" wire:model="social.website">
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
                </div>
                <div class="pt-2">
                    <div class="flex bg-gray-200 rounded-md p-2 my-3 border shadow">
                        <p class="text-sm font-weight-bold my-auto ps-sm-2">{{ __('Youtube Chanel link')}}</p>
                        <input class="form-control ms-sm-auto w-sm-70 w-40" type="text"
                               wire:model="social.youtube_chanel" >
                    </div>
                    <div class="flex bg-gray-200 rounded-md p-2 my-3 border shadow">
                        <p class="text-sm font-weight-bold my-auto ps-sm-2">{{ __('Youtube Username')}}</p>
                        <input class="form-control ms-sm-auto w-sm-70 w-40" type="text"
                               wire:model="social.youtube_username" >
                    </div>
                </div>
            </div>
           </div>
        <button type="submit" class="btn bg-gradient-success float-end mb-2">{{ __('Update Social media accounts') }}</button>
    </div>
    </form>
    <div x-data="{ shown: false, timeout: 600 }"
         x-init="@this.on('saved', () => { clearTimeout(timeout); shown = true; timeout = setTimeout(() => { shown = false }, 2000);  })"
         x-show.transition.out.opacity.duration.1500ms="shown"
         x-transition:leave.opacity.duration.1500ms
         style="display: none;" class="m-3 text-lg alert alert-primary py-2 text-white">
        Social media accounts successfully Updated
    </div>
</div>
