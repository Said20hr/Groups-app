<x-layouts.admin>
    <div class="px-3 py-1 bg-white mx-4 rounded-lg border border-secondary shadow my-2">
        <div class="p-2">
            <div class="row ">
                <div class="col-auto">
                    <div class="avatar avatar-xl position-relative">
                        <img src="{{$user->profile_photo_url}}" alt="profile_image" class="w-100 border shadow border-radius-lg shadow-sm">
                    </div>
                </div>
                <div class="col-auto my-auto">
                    <div class="h-100">
                        <h5 class="mb-1">
                        {{$user->name}}
                        </h5>
                        <p class="mb-0 font-weight-bold text-sm">
                            {{$user->username}}
                        </p>
                    </div>
                </div>
                <div class="col-auto my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
                    <div class="nav-wrapper position-relative end-0">
                        <ul class="nav nav-pills nav-fill p-1" role="tablist">
                            <li class="nav-item px-3">
                                <a class="nav-link mb-0 px-0 py-1 active d-flex align-items-center justify-content-center "href="#profile" >
                                    <i class="ni ni-app"></i>
                                    <span class="ms-2">Profile information</span>
                                </a>
                            </li>
                            <li class="nav-item px-3">
                                <a class="nav-link mb-0 px-0 py-1 d-flex align-items-center justify-content-center " href="#groups">
                                    <i class="lni lni-folder"></i>
                                    <span class="ms-2">Groups</span>
                                </a>
                            </li>
                            <li class="nav-item px-3">
                                <a class="nav-link mb-0 px-0 py-1 d-flex align-items-center justify-content-center " href="javascript:;">
                                    <i class="ni ni-email-83"></i>
                                    <span class="ms-2">Messages</span>
                                </a>
                            </li>
                            <li class="nav-item px-3">
                                <a class="nav-link mb-0 px-0 py-1 d-flex align-items-center justify-content-center "  href="javascript:;">
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
    <div class="container-fluid py-2">
        <div class="row mt-2" id="profile">
            <div class="col-12 col-md-6 col-xl-4">
                <div class="p-2 bg-white h-100 border border-gray-100 rounded-md">
                    <div class="card-header pb-0 p-3">
                        <h6 class="mb-0">Platform Settings</h6>
                    </div>
                    <div class="card-body p-3">
                        <h6 class="text-uppercase text-body text-xs font-weight-bolder">Account</h6>
                        <ul class="list-group">
                            <li class="list-group-item border-0 px-0">
                                <div class="form-check form-switch ps-0">
                                    <input class="form-check-input ms-0" @checked($user->active) disabled type="checkbox" id="flexSwitchCheckDefault">
                                    <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0" for="flexSwitchCheckDefault">Active</label>
                                </div>
                            </li>
                            <li class="list-group-item border-0 px-0">
                                <div class="form-check form-switch ps-0">
                                    <input class="form-check-input ms-0" @checked($user->published) disabled type="checkbox" id="flexSwitchCheckDefault1">
                                    <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0" for="flexSwitchCheckDefault1">Published</label>
                                </div>
                            </li>
                            <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Reputation:</strong> &nbsp; {{$user->reputation}}</li>
                            <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Followers:</strong> &nbsp; {{$user->followers}}</li>
                            <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Following:</strong> &nbsp; {{$user->following}}</li>
                            <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Trading ID:</strong> &nbsp; {{$user->tradingViewId}}</li>
                        </ul>

                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-xl-4 mt-md-0 mt-4">
                <div class="p-2 bg-white h-100 border border-gray-100 rounded-md">
                    <div class="card-header pb-0 p-3">
                        <div class="row">
                            <div class="col-md-8 d-flex align-items-center">
                                <h6 class="mb-0">Profile Information</h6>
                            </div>
                            <div class="col-md-4 text-end">
                                <a href="javascript:;">
                                    <i class="fas fa-user-edit text-secondary text-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Profile"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-3">
                        <p class="text-sm">
                          {{ $user->about_me }}
                        </p>
                        <hr class="horizontal gray-light mb-2">
                        <ul class="list-group">
                            <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark">Full Name:</strong> &nbsp; {{$user->name}}</li>
                            <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Username:</strong> &nbsp; {{$user->username}}</li>
                            <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Mobile:</strong> &nbsp; {{$user->phone}}</li>
                            <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Email:</strong> &nbsp; {{$user->email}}</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-4 mt-xl-0 mt-4">
                <div class="p-2 bg-white h-100 border border-gray-100 rounded-md">
                    <div class="card-header pb-0 p-3">
                        <h6 class="mb-0">Location</h6>
                    </div>
                    <div class="card-body p-3">
                        <ul class="list-group">
                            <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark">Company:</strong> &nbsp; {{$user->company}}</li>
                            <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Location:</strong> &nbsp; {{$user->location}}</li>
                            <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Street:</strong> &nbsp; {{$user->street}}</li>
                            <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">City:</strong> &nbsp; {{$user->city}}</li>
                            <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">State:</strong> &nbsp; {{$user->state}}</li>
                            <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Country:</strong> &nbsp; {{$user->country}}</li>
                            <li class="list-group-item border-0 ps-0 pb-0">
                                <strong class="text-dark text-sm">Social:</strong> &nbsp;
                                @if($user->telegram)
                                    <a class="btn btn-twitter btn-simple mb-0 ps-1 pe-2 py-0" href="{{$user->telegram}}" target="_blank">
                                        <i class="fab fa-telegram fa-lg"></i>
                                    </a>
                                @endif
                                @if($user->linkedIn)
                                    <a class="btn btn-facebook btn-simple mb-0 ps-1 pe-2 py-0" href="{{$user->linkedIn}}" target="_blank">
                                        <i class="fab fa-linkedin fa-lg"></i>
                                    </a>
                                @endif
                                @if($user->facebook)
                                    <a class="btn btn-facebook btn-simple mb-0 ps-1 pe-2 py-0" href="{{$user->facebook}}" target="_blank">
                                        <i class="fab fa-facebook fa-lg"></i>
                                    </a>
                                @endif
                                @if($user->twitter)
                                    <a class="btn btn-twitter btn-simple mb-0 ps-1 pe-2 py-0" href="{{$user->twitter}}" target="_blank">
                                        <i class="fab fa-twitter fa-lg"></i>
                                    </a>
                                @endif
                                @if($user->instagram)
                                    <a class="btn btn-instagram btn-simple mb-0 ps-1 pe-2 py-0" href="{{$user->instagram}}" target="_blank">
                                        <i class="fab fa-instagram fa-lg"></i>
                                    </a>
                                @endif
                                @if($user->youtube_chanel)
                                    <a class="btn btn-youtube btn-simple mb-0 ps-1 pe-2 py-0" href="{{$user->youtube_chanel}}" target="_blank">
                                        <i class="fab fa-youtube fa-lg"></i>
                                    </a>
                                @endif
                                @if($user->website)
                                    <a class="btn btn-behance btn-simple mb-0 ps-1 pe-2 py-0" href="{{$user->website}}" target="_blank">
                                        <i class="lni lni-wordpress-filled fa-lg"></i>
                                    </a>
                                @endif
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-4">
            <div class="w-full">
                <div class="p-4 bg-gray-200 rounded-md border border-gray-100 shadow mb-4" id="groups">
                    <div class="p-3 p-3">
                        <h5 class="mb-1">{{__('Joined Groups')}}</h5>
                        <p class="text-sm">{{__('All Joined Groups for this user')}}</p>
                    </div>
                    <div class="p-2 bg-gray-200 p-3">
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
    </div>
  @push('js')

  @endpush
  </x-layouts.admin>
