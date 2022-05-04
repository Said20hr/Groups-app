<x-layouts.admin>
    <div class="card shadow-lg mx-4 py-2">
        <div class="card-body p-3">
          <div class="row gx-4">
            <div class="col-auto">
              <div class="avatar avatar-xl position-relative">
                <img src="{{auth()->user()->profile_photo_url}}" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
              </div>
            </div>
            <div class="col-auto my-auto">
              <div class="h-100">
                <h5 class="mb-1">
                    {{auth()->user()->name}}
                </h5>
                <p class="mb-0 font-weight-bold text-sm">
                    {{auth()->user()->email}}
                </p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
              <div class="nav-wrapper position-relative end-0">
                <ul class="nav nav-pills nav-fill p-1" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link mb-0 px-0 py-1 active d-flex align-items-center justify-content-center " data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="true">
                      <i class="ni ni-app"></i>
                      <span class="ms-2">App</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link mb-0 px-0 py-1 d-flex align-items-center justify-content-center " data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="false">
                      <i class="ni ni-email-83"></i>
                      <span class="ms-2">Messages</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link mb-0 px-0 py-1 d-flex align-items-center justify-content-center " data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="false">
                      <i class="ni ni-settings-gear-65"></i>
                      <span class="ms-2">Settings</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
    </div>
    <div class="mt-4">
        <div class="w-full">
            <div class="p-4 bg-gray-100 border border-gray-100 shadow mb-4" id="groups">
                <div class="p-3 p-3">
                    <h5 class="mb-1">{{__('All Groups')}}</h5>
                    <p class="text-sm">{{__('list of Groups')}}</p>
                </div>
                <div class="p-2 bg-gray-100 p-3">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card shadow hover:animate-pulse hover:bg-gray-50 cursor-pointer border">
                                <div class="card-body p-3">
                                    <div class="d-flex">
                                        <div class="avatar avatar-xl bg-gradient-dark border-radius-md p-2">
                                            <img src="{{asset('dashboards')}}/assets/img/small-logos/logo-slack.svg" alt="slack_logo">
                                        </div>
                                        <div class="ms-3 my-auto">
                                            <h6>Slack Bot</h6>
                                            <div class="avatar-group">
                                                <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-original-title="Jessica Rowland">
                                                    <img alt="Image placeholder" src="{{asset('dashboards/')}}/assets/img/team-3.jpg" class="">
                                                </a>
                                                <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-original-title="Audrey Love">
                                                    <img alt="Image placeholder" src="{{asset('dashboards/')}}/assets/img/team-4.jpg" class="rounded-circle">
                                                </a>
                                                <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-original-title="Michael Lewis">
                                                    <img alt="Image placeholder" src="{{asset('dashboards/')}}/assets/img/team-2.jpg" class="rounded-circle">
                                                </a>
                                                <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-original-title="Jessica Rowland">
                                                    <img alt="Image placeholder" src="{{asset('dashboards/')}}/assets/img/team-3.jpg" class="">
                                                </a>
                                                <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-original-title="Audrey Love">
                                                    <img alt="Image placeholder" src="{{asset('dashboards/')}}/assets/img/team-4.jpg" class="rounded-circle">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="ms-auto">
                                            <div class="dropdown">
                                                <button class="btn btn-link text-secondary ps-0 pe-2" id="navbarDropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fa fa-ellipsis-v text-lg"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end me-sm-n4 me-n3" aria-labelledby="navbarDropdownMenuLink">
                                                    <a class="dropdown-item" href="javascript:;">Action</a>
                                                    <a class="dropdown-item" href="javascript:;">Another action</a>
                                                    <a class="dropdown-item" href="javascript:;">Something else here</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="text-sm mt-3"> If everything I did failed - which it doesn&#39;t, I think that it actually succeeds. </p>
                                    <hr class="horizontal dark">
                                    <div class="row">
                                        <div class="col-6">
                                            <h6 class="text-sm mb-0">5</h6>
                                            <p class="text-secondary text-sm font-weight-bold mb-0">Participants</p>
                                        </div>
                                        <div class="col-6 text-end">
                                            <h6 class="text-sm mb-0">02.03.22</h6>
                                            <p class="text-secondary text-sm font-weight-bold mb-0">Due date</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card shadow hover:animate-pulse hover:bg-gray-50 cursor-pointer border">
                                <div class="card-body p-3">
                                    <div class="d-flex">
                                        <div class="avatar avatar-xl bg-gradient-dark border-radius-md p-2">
                                            <img src="{{asset('dashboards/')}}/assets/img/small-logos/logo-spotify.svg" alt="spotify_logo">
                                        </div>
                                        <div class="ms-3 my-auto">
                                            <h6>Premium support</h6>
                                            <div class="avatar-group">
                                                <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-original-title="Audrey Love">
                                                    <img alt="Image placeholder" src="{{asset('dashboards/')}}/assets/img/team-4.jpg" class="rounded-circle">
                                                </a>
                                                <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-original-title="Jessica Rowland">
                                                    <img alt="Image placeholder" src="{{asset('dashboards/')}}/assets/img/team-3.jpg" class="">
                                                </a>
                                                <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-original-title="Michael Lewis">
                                                    <img alt="Image placeholder" src="{{asset('dashboards/')}}/assets/img/team-2.jpg" class="rounded-circle">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="ms-auto">
                                            <div class="dropdown">
                                                <button class="btn btn-link text-secondary ps-0 pe-2" id="navbarDropdownMenuLink1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fa fa-ellipsis-v text-lg"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end me-sm-n4 me-n3" aria-labelledby="navbarDropdownMenuLink1">
                                                    <a class="dropdown-item" href="javascript:;">Action</a>
                                                    <a class="dropdown-item" href="javascript:;">Another action</a>
                                                    <a class="dropdown-item" href="javascript:;">Something else here</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="text-sm mt-3"> Pink is obviously a better color. Everyone’s born confident, and everything’s taken away from you. </p>
                                    <hr class="horizontal dark">
                                    <div class="row">
                                        <div class="col-6">
                                            <h6 class="text-sm mb-0">3</h6>
                                            <p class="text-secondary text-sm font-weight-bold mb-0">Participants</p>
                                        </div>
                                        <div class="col-6 text-end">
                                            <h6 class="text-sm mb-0">22.11.21</h6>
                                            <p class="text-secondary text-sm font-weight-bold mb-0">Due date</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card shadow hover:animate-pulse hover:bg-gray-50 cursor-pointer border">
                                <div class="card-body p-3">
                                    <div class="d-flex">
                                        <div class="avatar avatar-xl bg-gradient-dark border-radius-md p-2">
                                            <img src="{{asset('dashboards/')}}/assets/img/small-logos/logo-xd.svg" alt="xd_logo">
                                        </div>
                                        <div class="ms-3 my-auto">
                                            <h6>Design tools</h6>
                                            <div class="avatar-group">
                                                <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-original-title="Audrey Love">
                                                    <img alt="Image placeholder" src="{{asset('dashboards/')}}/assets/img/team-4.jpg" class="rounded-circle">
                                                </a>
                                                <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-original-title="Michael Lewis">
                                                    <img alt="Image placeholder" src="{{asset('dashboards/')}}/assets/img/team-2.jpg" class="rounded-circle">
                                                </a>
                                                <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-original-title="Jessica Rowland">
                                                    <img alt="Image placeholder" src="{{asset('dashboards/')}}/assets/img/team-3.jpg" class="">
                                                </a>
                                                <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-original-title="Jessica Rowland">
                                                    <img alt="Image placeholder" src="{{asset('dashboards/')}}/assets/img/team-4.jpg" class="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="ms-auto">
                                            <div class="dropdown">
                                                <button class="btn btn-link text-secondary ps-0 pe-2" id="navbarDropdownMenuLink2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fa fa-ellipsis-v text-lg"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end me-sm-n4 me-n3" aria-labelledby="navbarDropdownMenuLink2">
                                                    <a class="dropdown-item" href="javascript:;">Action</a>
                                                    <a class="dropdown-item" href="javascript:;">Another action</a>
                                                    <a class="dropdown-item" href="javascript:;">Something else here</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="text-sm mt-3"> Constantly growing. We’re constantly making mistakes from which we learn and improve. </p>
                                    <hr class="horizontal dark">
                                    <div class="row">
                                        <div class="col-6">
                                            <h6 class="text-sm mb-0">4</h6>
                                            <p class="text-secondary text-sm font-weight-bold mb-0">Participants</p>
                                        </div>
                                        <div class="col-6 text-end">
                                            <h6 class="text-sm mb-0">06.03.20</h6>
                                            <p class="text-secondary text-sm font-weight-bold mb-0">Due date</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card shadow hover:animate-pulse hover:bg-gray-50 cursor-pointer border">
                                <div class="card-body p-3">
                                    <div class="d-flex">
                                        <div class="avatar avatar-xl bg-gradient-dark border-radius-md p-2">
                                            <img src="{{asset('dashboards/')}}/assets/img/small-logos/logo-asana.svg" alt="asana_logo">
                                        </div>
                                        <div class="ms-3 my-auto">
                                            <h6>Looking great</h6>
                                            <div class="avatar-group">
                                                <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-original-title="Jessica Rowland">
                                                    <img alt="Image placeholder" src="{{asset('dashboards/')}}/assets/img/team-3.jpg" class="">
                                                </a>
                                                <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-original-title="Audrey Love">
                                                    <img alt="Image placeholder" src="{{asset('dashboards/')}}/assets/img/team-4.jpg" class="rounded-circle">
                                                </a>
                                                <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-original-title="Michael Lewis">
                                                    <img alt="Image placeholder" src="{{asset('dashboards/')}}/assets/img/team-2.jpg" class="rounded-circle">
                                                </a>
                                                <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-original-title="Jessica Rowland">
                                                    <img alt="Image placeholder" src="{{asset('dashboards/')}}/assets/img/team-3.jpg" class="">
                                                </a>
                                                <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-original-title="Audrey Love">
                                                    <img alt="Image placeholder" src="{{asset('dashboards/')}}/assets/img/team-4.jpg" class="rounded-circle">
                                                </a>
                                                <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-original-title="Michael Lewis">
                                                    <img alt="Image placeholder" src="{{asset('dashboards/')}}/assets/img/team-2.jpg" class="rounded-circle">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="ms-auto">
                                            <div class="dropdown">
                                                <button class="btn btn-link text-secondary ps-0 pe-2" id="navbarDropdownMenuLink3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fa fa-ellipsis-v text-lg"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end me-sm-n4 me-n3" aria-labelledby="navbarDropdownMenuLink3">
                                                    <a class="dropdown-item" href="javascript:;">Action</a>
                                                    <a class="dropdown-item" href="javascript:;">Another action</a>
                                                    <a class="dropdown-item" href="javascript:;">Something else here</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="text-sm mt-3"> You have the opportunity to play this game of life you need to appreciate every moment. </p>
                                    <hr class="horizontal dark">
                                    <div class="row">
                                        <div class="col-6">
                                            <h6 class="text-sm mb-0">6</h6>
                                            <p class="text-secondary text-sm font-weight-bold mb-0">Participants</p>
                                        </div>
                                        <div class="col-6 text-end">
                                            <h6 class="text-sm mb-0">14.03.24</h6>
                                            <p class="text-secondary text-sm font-weight-bold mb-0">Due date</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card shadow hover:animate-pulse hover:bg-gray-50 cursor-pointer border">
                                <div class="card-body p-3">
                                    <div class="d-flex">
                                        <div class="avatar avatar-xl bg-gradient-dark border-radius-md p-2">
                                            <img src="{{asset('dashboards/')}}/assets/img/small-logos/logo-invision.svg" alt="invision_logo">
                                        </div>
                                        <div class="ms-3 my-auto">
                                            <h6>Developer First</h6>
                                            <div class="avatar-group">
                                                <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-original-title="Audrey Love">
                                                    <img alt="Image placeholder" src="{{asset('dashboards/')}}/assets/img/team-4.jpg" class="rounded-circle">
                                                </a>
                                                <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-original-title="Jessica Rowland">
                                                    <img alt="Image placeholder" src="{{asset('dashboards/')}}/assets/img/team-3.jpg" class="">
                                                </a>
                                                <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-original-title="Michael Lewis">
                                                    <img alt="Image placeholder" src="{{asset('dashboards/')}}/assets/img/team-2.jpg" class="rounded-circle">
                                                </a>
                                                <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-original-title="Audrey Love">
                                                    <img alt="Image placeholder" src="{{asset('dashboards/')}}/assets/img/team-4.jpg" class="rounded-circle">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="ms-auto">
                                            <div class="dropdown">
                                                <button class="btn btn-link text-secondary ps-0 pe-2" id="navbarDropdownMenuLink4" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fa fa-ellipsis-v text-lg"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end me-sm-n4 me-n3" aria-labelledby="navbarDropdownMenuLink4">
                                                    <a class="dropdown-item" href="javascript:;">Action</a>
                                                    <a class="dropdown-item" href="javascript:;">Another action</a>
                                                    <a class="dropdown-item" href="javascript:;">Something else here</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="text-sm mt-3"> For standing out. But the time is now to be okay to be the greatest you. </p>
                                    <hr class="horizontal dark">
                                    <div class="row">
                                        <div class="col-6">
                                            <h6 class="text-sm mb-0">4</h6>
                                            <p class="text-secondary text-sm font-weight-bold mb-0">Participants</p>
                                        </div>
                                        <div class="col-6 text-end">
                                            <h6 class="text-sm mb-0">16.01.22</h6>
                                            <p class="text-secondary text-sm font-weight-bold mb-0">Due date</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="bg-white card h-100 hover:animate-pulse hover:bg-indigo-100 cursor-pointer card-plain border">
                                <div class="card-body d-flex flex-column justify-content-center text-center">
                                    <a href="javascript:;">
                                        <i class="fa fa-plus text-secondary"></i>
                                        <h5 class=" text-secondary"> New project </h5>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@push('js')


@endpush
  </x-layouts.admin>
