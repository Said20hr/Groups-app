<x-layouts.admin>
  <div class="container-fluid my-5 py-2">
      <div class="row mb-5" style="margin-top: 50px">
        <div class="col-lg-3">
          <div class="card position-sticky top-1">
            <ul class="nav flex-column bg-white border-radius-lg p-3">
              <li class="nav-item">
                <a class="nav-link text-body d-flex align-items-center" data-scroll="" href="#profile">
                  <i class="ni ni-spaceship me-2 text-dark opacity-6"></i>
                  <span class="text-sm">{{ __('Profile')}}</span>
                </a>
              </li>
              <li class="nav-item pt-2">
                <a class="nav-link text-body d-flex align-items-center" data-scroll="" href="#basic-info">
                  <i class="ni ni-books me-2 text-dark opacity-6"></i>
                  <span class="text-sm font-extrabold">{{ __('Basic Info')}}</span>
                </a>
              </li>
              <li class="nav-item pt-2">
                <a class="nav-link text-body d-flex align-items-center" data-scroll="" href="#2fa">
                  <i class="ni ni-ui-04 me-2 text-dark opacity-6"></i>
                  <span class="text-sm">{{ __('2FA')}}</span>
                </a>
              </li>
              <li class="nav-item pt-2">
                <a class="nav-link text-body d-flex align-items-center" data-scroll="" href="#accounts">
                  <i class="ni ni-badge me-2 text-dark opacity-6"></i>
                  <span class="text-sm">{{ __('Accounts')}}</span>
                </a>
              </li>
              <li class="nav-item pt-2">
                <a class="nav-link text-body d-flex align-items-center" data-scroll="" href="#sessions">
                  <i class="ni ni-watch-time me-2 text-dark opacity-6"></i>
                  <span class="text-sm">{{ __('Sessions')}}</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-9 mt-lg-0 mt-4">
          <form method="post" action="{{ route('admin.users.update_vis',$user->id) }}" >
            @method('PUT')
            @csrf
              <!-- Card Profile -->
            <div class="card card-body" id="profile">
                <div class="row justify-content-center align-items-center">
                  <div class="col-sm-auto col-4">
                    <div class="avatar avatar-xl position-relative">
                      <img src="{{asset('dashboards/assets/img/team-3.jpg')}}" alt="bruce" class="w-100 border-radius-lg shadow-sm">
                    </div>
                  </div>
                  <div class="col-sm-auto col-8 my-auto">
                    <div class="h-100">
                      <h5 class="mb-1 font-weight-bolder">
                        {{$user->name." ".$user->username}}<span class="badge badge-{{$user->active == 1 ? 'success' : 'danger'}} badge-sm ms-3 my-2">{{$user->active == 1 ? 'Active' : 'Not active'}}</span>

                      </h5>
                      <p class="mb-0 font-weight-bold text-sm">
                        {{$user->role->name}}
                      </p>
                    </div>
                  </div>
                  <div class="col-sm-auto ms-sm-auto mt-sm-0 mt-3 d-flex">
                    <label class="form-check-label mb-0">
                      <small id="profileVisibility">
                        {{ __('Switch to invisible')}}
                      </small>
                    </label>
                    <div class="form-check form-switch ms-2">
                      <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault23"  @if(old('active', false)) checked @endif onchange="visible()">
                    </div>
                  </div>
                </div>
            </div>
          </form>
          <form method="post" action="{{ route('admin.users.update_info',$user->id) }}" >
            @method('PUT')
            @csrf
              <!-- Card Basic Info -->
            <div class="card mt-4" id="basic-info">
                <div class="card-header">
                  <h5>{{ __('Basic Info')}}</h5>
                </div>
                <div class="card-body pt-0">
                  <div class="row">
                    <div class="col-6">
                      <label class="form-label">{{ __('First Name')}}</label>
                      <div class="input-group">
                        <input id="name" name="name" class="form-control" type="text"  value="{{ $user->name}}" required >
                      </div>
                    </div>
                    <div class="col-6">
                      <label class="form-label">{{ __('Last Name')}}</label>
                      <div class="input-group">
                        <input id="username" name="username" class="form-control" type="text"  value="{{ $user->username}}" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-6">
                      <label class="form-label mt-4">{{ __('Email')}}</label>
                      <div class="input-group">
                        <input id="email" name="email" class="form-control" type="email"  value="{{ $user->email}}" required>
                      </div>
                    </div>
                    <div class="col-6">
                      <label class="form-label mt-4">{{ __('Phone Number')}}</label>
                      <div class="input-group">
                        <input id="phone" name="phone" class="form-control" type="number" value="{{ $user->phone}}" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6 col-6">
                      <label class="form-label mt-4">{{ __('Street')}}</label>
                      <input id="street" name="street" class="form-control" type="text" value="{{ $user->street}}" required >
                    </div>
                    <div class="col-sm-3">
                          <label class="form-label mt-4">{{ __('City')}}</label>
                          <input id="city" name="city" class="form-control" type="text" value="{{ $user->city}}" required>
                    </div>
                    <div class="col-3">
                      <label class="form-label mt-4">{{ __('Country')}}</label>
                      <div class="input-group">
                        <input id="country" name="country" class="form-control" type="text" value="{{ $user->country}}" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-6">
                      <label class="form-label mt-4">{{ __('Trading ViewID')}}</label>
                      <div class="input-group">
                        <input id="tradingViewId" name="tradingViewId" class="form-control" type="text" value="{{ $user->tradingViewId}}" required>
                      </div>
                    </div>
                    <div class="col-6">
                      <label class="form-label mt-4">{{ __('Company')}}</label>
                      <div class="input-group">
                        <input id="company" name="company" class="form-control" type="text" value="{{ $user->company}}" required>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex align-items-end mb-sm-0 mb-4" style="display: flex; justify-items:end;">
                  <button type="submit" class="btn bg-gradient-success mb-0 my-2">Save</button>
                  </div>
                </div>
            </div>
          </form>
          <form method="post" action="{{ route('admin.users.2fa',$user->id) }}" >
            @method('PUT')
            @csrf
              <!-- Card Change Password -->
              <div class="card mt-4" id="2fa">
                <div class="card-header d-flex">
                  <h5 class="mb-0">Two-factor authentication</h5>
                  <span class="badge badge-success ms-auto">Enabled</span>
                </div>
                <div class="card-body">
                  <div class="d-flex">
                    <p class="my-auto">Security keys</p>
                    <p class="text-secondary text-sm ms-auto my-auto me-3">No Security Keys</p>
                    <button class="btn btn-sm btn-outline-dark mb-0" type="button">Add</button>
                  </div>
                  <hr class="horizontal dark">
                  <div class="d-flex">
                    <p class="my-auto">SMS number</p>
                    <p class="text-secondary text-sm ms-auto my-auto me-3">{{$user->phone}}</p>
                    <button class="btn btn-sm btn-outline-dark mb-0" type="button">Edit</button>
                  </div>
                  <hr class="horizontal dark">
                  <div class="d-flex">
                    <p class="my-auto">Authenticator app</p>
                    <p class="text-secondary text-sm ms-auto my-auto me-3">Not Configured</p>
                    <button class="btn btn-sm btn-outline-dark mb-0" type="button">Set up</button>
                  </div>
                </div>
              </div>
          </form>
          <form method="post" action="{{ route('admin.users.account',$user->id) }}" >
            @method('PUT')
            @csrf
              <!-- Card Accounts -->
              <div class="card mt-4" id="accounts">
                <div class="card-header">
                  <h5>{{ __('Accounts')}}</h5>
                  <p class="text-sm">{{ __('Here you can setup and manage your integration settings.')}}</p>
                </div>
                <div class="card-body pt-0">
                  <div class="d-flex">
                    <img class="width-48-px" src="{{asset('dashboards/assets/img/small-logos/logo-twitter.svg')}}" alt="logo_slack">
                    <div class="my-auto ms-3">
                      <div class="h-100">
                        <h5 class="mb-0">{{ __('Twitter')}}</h5>
                      </div>
                    </div>
                    <p class="text-sm text-secondary ms-auto me-3 my-auto">Enabled</p>
                    <div class="form-check form-switch my-auto">
                      <input class="form-check-input" checked type="checkbox" id="flexSwitchCheckDefault1">
                    </div>
                  </div>
                  <div class="ps-5 pt-3 ms-3">
                    <div class="d-sm-flex bg-gray-100 border-radius-lg p-2 my-4">
                      <p class="text-sm font-weight-bold my-auto ps-sm-2">{{ __('Account Link')}}</p>
                      <input class="form-control form-control-sm ms-sm-auto mt-sm-0 mt-2 w-sm-60 w-40" type="text" value="{{$user->twiter}}" data-bs-toggle="tooltip" data-bs-placement="top" title="Copy!">
                    </div>
                    <div class="d-sm-flex bg-gray-100 border-radius-lg p-2 my-4">
                      <p class="text-sm font-weight-bold my-auto ps-sm-2">{{ __('Account Followers')}}</p>
                      <input class="form-control form-control-sm ms-sm-auto mt-sm-0 mt-2 w-sm-60 w-40" type="text" value="{{$user->followers}}" data-bs-toggle="tooltip" data-bs-placement="top" title="Copy!">
                    </div>
                  </div>
                  <hr class="horizontal dark">
                  <div class="d-flex">
                    <img class="width-48-px" src="{{asset('dashboards/assets/img/small-logos/logo-telegram.svg')}}" alt="logo_slack">
                    <div class="my-auto ms-3">
                      <div class="h-100">
                        <h5 class="mb-0">{{ __('Telegram')}}</h5>
                      </div>
                    </div>
                    <p class="text-sm text-secondary ms-auto me-3 my-auto">Enabled</p>
                    <div class="form-check form-switch my-auto">
                      <input class="form-check-input" checked type="checkbox" id="flexSwitchCheckDefault2">
                    </div>
                  </div>
                  <div class="ps-5 pt-3 ms-3">
                    <div class="d-sm-flex bg-gray-100 border-radius-lg p-2 my-4">
                      <p class="text-sm font-weight-bold my-auto ps-sm-2">{{ __('Account Link')}}</p>
                      <input class="form-control form-control-sm ms-sm-auto mt-sm-0 mt-2 w-sm-60 w-40" type="text" value="{{$user->telegram}}" data-bs-toggle="tooltip" data-bs-placement="top" title="Copy!">
                    </div>
                    <div class="d-sm-flex bg-gray-100 border-radius-lg p-2 my-4">
                      <p class="text-sm font-weight-bold my-auto ps-sm-2">{{ __('Account Followers')}}</p>
                      <input class="form-control form-control-sm ms-sm-auto mt-sm-0 mt-2 w-sm-60 w-40" type="text" value="{{$user->followers}}" data-bs-toggle="tooltip" data-bs-placement="top" title="Copy!">
                    </div>
                  </div>
                  <hr class="horizontal dark">
                  <div class="d-flex">
                    <img class="width-48-px" src="{{asset('dashboards/assets/img/small-logos/logo-facebook.svg')}}" alt="logo_slack">
                    <div class="my-auto ms-3">
                      <div class="h-100">
                        <h5 class="mb-0">{{ __('Facebook')}}</h5>
                      </div>
                    </div>
                    <p class="text-sm text-secondary ms-auto me-3 my-auto">Enabled</p>
                    <div class="form-check form-switch my-auto">
                      <input class="form-check-input" checked type="checkbox" id="flexSwitchCheckDefault3">
                    </div>
                  </div> <div class="ps-5 pt-3 ms-3">
                    <div class="d-sm-flex bg-gray-100 border-radius-lg p-2 my-4">
                      <p class="text-sm font-weight-bold my-auto ps-sm-2">{{ __('Account Link')}}</p>
                      <input class="form-control form-control-sm ms-sm-auto mt-sm-0 mt-2 w-sm-60 w-40" type="text" value="{{$user->facebook}}" data-bs-toggle="tooltip" data-bs-placement="top" title="Copy!">
                    </div>
                    <div class="d-sm-flex bg-gray-100 border-radius-lg p-2 my-4">
                      <p class="text-sm font-weight-bold my-auto ps-sm-2">{{ __('Account Followers')}}</p>
                      <input class="form-control form-control-sm ms-sm-auto mt-sm-0 mt-2 w-sm-60 w-40" type="text" value="{{$user->followers}}" data-bs-toggle="tooltip" data-bs-placement="top" title="Copy!">
                    </div>
                  </div>
                  <hr class="horizontal dark">
                  <div class="d-flex">
                    <img class="width-48-px" src="{{asset('dashboards/assets/img/small-logos/logo-instagram.svg')}}" alt="logo_slack">
                    <div class="my-auto ms-3">
                      <div class="h-100">
                        <h5 class="mb-0">{{ __('Instagram')}}</h5>
                      </div>
                    </div>
                    <p class="text-sm text-secondary ms-auto me-3 my-auto">Enabled</p>
                    <div class="form-check form-switch my-auto">
                      <input class="form-check-input" checked type="checkbox" id="flexSwitchCheckDefault3">
                    </div>
                  </div>
                  <div class="ps-5 pt-3 ms-3">
                    <div class="d-sm-flex bg-gray-100 border-radius-lg p-2 my-4">
                      <p class="text-sm font-weight-bold my-auto ps-sm-2">{{ __('Account Link')}}</p>
                      <input class="form-control form-control-sm ms-sm-auto mt-sm-0 mt-2 w-sm-60 w-40" type="text" value="{{$user->instagram}}" data-bs-toggle="tooltip" data-bs-placement="top" title="Copy!">
                    </div>
                    <div class="d-sm-flex bg-gray-100 border-radius-lg p-2 my-4">
                      <p class="text-sm font-weight-bold my-auto ps-sm-2">{{ __('Account Followers')}}</p>
                      <input class="form-control form-control-sm ms-sm-auto mt-sm-0 mt-2 w-sm-60 w-40" type="text" value="{{$user->followers}}" data-bs-toggle="tooltip" data-bs-placement="top" title="Copy!">
                    </div>
                  </div>
                  <div class="d-flex">
                    <img class="width-48-px" src="{{asset('dashboards/assets/img/small-logos/logo-youtube.svg')}}" alt="logo_slack">
                    <div class="my-auto ms-3">
                      <div class="h-100">
                        <h5 class="mb-0">{{ __('Youtube')}}</h5>
                      </div>
                    </div>
                    <p class="text-sm text-secondary ms-auto me-3 my-auto">Enabled</p>
                    <div class="form-check form-switch my-auto">
                      <input class="form-check-input" checked type="checkbox" id="flexSwitchCheckDefault3">
                    </div>
                  </div>
                  <div class="ps-5 pt-3 ms-3">
                    <div class="d-sm-flex bg-gray-100 border-radius-lg p-2 my-4">
                      <p class="text-sm font-weight-bold my-auto ps-sm-2">{{ __('Account Link')}}</p>
                      <input class="form-control form-control-sm ms-sm-auto mt-sm-0 mt-2 w-sm-60 w-40" type="text" value="{{$user->youtube_username}}" data-bs-toggle="tooltip" data-bs-placement="top" title="Copy!">
                    </div>
                    <div class="d-sm-flex bg-gray-100 border-radius-lg p-2 my-4">
                      <p class="text-sm font-weight-bold my-auto ps-sm-2">{{ __('Account Followers')}}</p>
                      <input class="form-control form-control-sm ms-sm-auto mt-sm-0 mt-2 w-sm-60 w-40" type="text" value="{{$user->followers}}" data-bs-toggle="tooltip" data-bs-placement="top" title="Copy!">
                    </div>
                  </div>
                </div>
              </div>
          </form>
              <!-- Card Sessions -->
              <div class="card mt-4" id="sessions">
                <div class="card-header pb-3">
                  <h5>Sessions</h5>
                  <p class="text-sm">This is a list of devices that have logged into your account. Remove those that you do not recognize.</p>
                </div>
                <div class="card-body pt-0">
                  <div class="d-flex align-items-center">
                    <div class="text-center w-5">
                      <i class="fas fa-desktop text-lg opacity-6"></i>
                    </div>
                    <div class="my-auto ms-3">
                      <div class="h-100">
                        <p class="text-sm mb-1">
                          Bucharest 68.133.163.201
                        </p>
                        <p class="mb-0 text-xs">
                          Your current session
                        </p>
                      </div>
                    </div>
                    <span class="badge badge-success badge-sm my-auto ms-auto me-3">Active</span>
                    <p class="text-secondary text-sm my-auto me-3">EU</p>
                    <a href="javascript:;" class="text-primary text-sm icon-move-right my-auto">See more
                      <i class="fas fa-arrow-right text-xs ms-1" aria-hidden="true"></i>
                    </a>
                  </div>
                  <hr class="horizontal dark">
                  <div class="d-flex align-items-center">
                    <div class="text-center w-5">
                      <i class="fas fa-desktop text-lg opacity-6"></i>
                    </div>
                    <p class="my-auto ms-3">Chrome on macOS</p>
                    <p class="text-secondary text-sm ms-auto my-auto me-3">US</p>
                    <a href="javascript:;" class="text-primary text-sm icon-move-right my-auto">See more
                      <i class="fas fa-arrow-right text-xs ms-1" aria-hidden="true"></i>
                    </a>
                  </div>
                  <hr class="horizontal dark">
                  <div class="d-flex align-items-center">
                    <div class="text-center w-5">
                      <i class="fas fa-mobile text-lg opacity-6"></i>
                    </div>
                    <p class="my-auto ms-3">Safari on iPhone</p>
                    <p class="text-secondary text-sm ms-auto my-auto me-3">US</p>
                    <a href="javascript:;" class="text-primary text-sm icon-move-right my-auto">See more
                      <i class="fas fa-arrow-right text-xs ms-1" aria-hidden="true"></i>
                    </a>
                  </div>
                </div>
              </div>
          <form method="post" action="{{ route('admin.users.acc',$user->id) }}" >
              @method('PUT')
              @csrf    
              <!-- Card Delete Account -->
              <div class="card mt-4" id="delete">
                <div class="card-header">
                  <h5>Delete Account</h5>
                  <p class="text-sm mb-0">Once you delete your account, there is no going back. Please be certain.</p>
                </div>
                <div class="card-body d-sm-flex pt-0">
                  <div class="d-flex align-items-center mb-sm-0 mb-4">
                    <div>
                      <div class="form-check form-switch mb-0">
                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault0">
                      </div>
                    </div>
                    <div class="ms-2">
                      <span class="text-dark font-weight-bold d-block text-sm">Confirm</span>
                      <span class="text-xs d-block">I want to delete my account.</span>
                    </div>
                  </div>
                  <button class="btn btn-outline-secondary mb-0 ms-auto" type="submit" name="button">Desactivate</button>
          </form>
                  <form action="{{ route('admin.users.destroy',$user->id)}}"  method="POST">
                    @method('DELETE')
                    @csrf
                  <button class="btn bg-gradient-danger mb-0 ms-2" type="button" name="button">Delete Account</button>
                  </form>
                </div>
              </div>
        </div>
      </div>
      <footer class="footer pt-3  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                © <script>
                  document.write(new Date().getFullYear())
                </script>,
                made with <i class="fa fa-heart"></i> by
                <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative Tim</a>
                for a better web.
              </div>
            </div>
            <div class="col-lg-6">
              <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                <li class="nav-item">
                  <a href="https://www.creative-tim.com" class="nav-link text-muted" target="_blank">Creative Tim</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted" target="_blank">About Us</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/blog" class="nav-link text-muted" target="_blank">Blog</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted" target="_blank">License</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
  </div>
  
  <div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="fa fa-cog py-2"> </i>
    </a>
    <div class="card shadow-lg">
      <div class="card-header pb-0 pt-3  bg-transparent ">
        <div class="float-start">
          <h5 class="mt-3 mb-0">Argon Configurator</h5>
          <p>See our dashboard options.</p>
        </div>
        <div class="float-end mt-4">
          <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="fa fa-close"></i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      <hr class="horizontal dark my-1">
      <div class="card-body pt-sm-3 pt-0">
        <!-- Sidebar Backgrounds -->
        <div>
          <h6 class="mb-0">Sidebar Colors</h6>
        </div>
        <a href="javascript:void(0)" class="switch-trigger background-color">
          <div class="badge-colors my-2 text-start">
            <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
          </div>
        </a>
        <!-- Sidenav Type -->
        <div class="mt-3">
          <h6 class="mb-0">Sidenav Type</h6>
          <p class="text-sm">Choose between 2 different sidenav types.</p>
        </div>
        <div class="d-flex">
          <button class="btn bg-gradient-primary w-100 px-3 mb-2 active me-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
          <button class="btn bg-gradient-primary w-100 px-3 mb-2" data-class="bg-default" onclick="sidebarType(this)">Dark</button>
        </div>
        <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
        <!-- Navbar Fixed -->
        <div class="d-flex my-3">
          <h6 class="mb-0">Navbar Fixed</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
          </div>
        </div>
        <hr class="horizontal dark mb-1">
        <div class="d-flex my-4">
          <h6 class="mb-0">Sidenav Mini</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarMinimize" onclick="navbarMinimize(this)">
          </div>
        </div>
        <hr class="horizontal dark my-sm-4">
        <div class="mt-2 mb-4 d-flex">
          <h6 class="mb-0">Light / Dark</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
          </div>
        </div>
        <a class="btn btn-primary w-100" href="https://www.creative-tim.com/product/argon-dashboard-pro">Buy now</a>
        <a class="btn btn-dark w-100" href="https://www.creative-tim.com/product/argon-dashboard">Free demo</a>
        <a class="btn btn-outline-dark w-100" href="https://www.creative-tim.com/learning-lab/bootstrap/overview/argon-dashboard">View documentation</a>
        <div class="w-100 text-center">
          <a class="github-button" href="https://github.com/creativetimofficial/ct-argon-dashboard-pro" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star creativetimofficial/argon-dashboard on GitHub">Star</a>
          <h6 class="mt-3">Thank you for sharing!</h6>
          <a href="https://twitter.com/intent/tweet?text=Check%20Argon%20Dashboard%20PRO%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fargon-dashboard-pro" class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-twitter me-1" aria-hidden="true"></i> Tweet
          </a>
          <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/argon-dashboard-pro" class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-facebook-square me-1" aria-hidden="true"></i> Share
          </a>
        </div>
      </div>
    </div>
  </div>
@push('js')
<!-- Kanban scripts -->
<script src="{{asset('dashboard/assets/js/plugins/dragula/dragula.min.js')}}"></script>
<script src="{{asset('dashboard/assets/js/plugins/jkanban/jkanban.js')}}"></script>
<script>
    if (document.getElementById('choices-gender')) {
      var gender = document.getElementById('choices-gender');
      const example = new Choices(gender);
    }

    if (document.getElementById('choices-language')) {
      var language = document.getElementById('choices-language');
      const example = new Choices(language);
    }

    if (document.getElementById('choices-skills')) {
      var skills = document.getElementById('choices-skills');
      const example = new Choices(skills, {
        delimiter: ',',
        editItems: true,
        maxItemCount: 5,
        removeItemButton: true,
        addItems: true
      });
    }

    if (document.getElementById('choices-year')) {
      var year = document.getElementById('choices-year');
      setTimeout(function() {
        const example = new Choices(year);
      }, 1);

      for (y = 1900; y <= 2020; y++) {
        var optn = document.createElement("OPTION");
        optn.text = y;
        optn.value = y;

        if (y == 2020) {
          optn.selected = true;
        }

        year.options.add(optn);
      }
    }

    if (document.getElementById('choices-day')) {
      var day = document.getElementById('choices-day');
      setTimeout(function() {
        const example = new Choices(day);
      }, 1);


      for (y = 1; y <= 31; y++) {
        var optn = document.createElement("OPTION");
        optn.text = y;
        optn.value = y;

        if (y == 1) {
          optn.selected = true;
        }

        day.options.add(optn);
      }

    }

    if (document.getElementById('choices-month')) {
      var month = document.getElementById('choices-month');
      setTimeout(function() {
        const example = new Choices(month);
      }, 1);

      var d = new Date();
      var monthArray = new Array();
      monthArray[0] = "January";
      monthArray[1] = "February";
      monthArray[2] = "March";
      monthArray[3] = "April";
      monthArray[4] = "May";
      monthArray[5] = "June";
      monthArray[6] = "July";
      monthArray[7] = "August";
      monthArray[8] = "September";
      monthArray[9] = "October";
      monthArray[10] = "November";
      monthArray[11] = "December";
      for (m = 0; m <= 11; m++) {
        var optn = document.createElement("OPTION");
        optn.text = monthArray[m];
        // server side month start from one
        optn.value = (m + 1);
        // if june selected
        if (m == 1) {
          optn.selected = true;
        }
        month.options.add(optn);
      }
    }

    function visible() {
      var elem = document.getElementById('profileVisibility');
      if (elem) {
        if (elem.innerHTML == "Switch to visible") {
          elem.innerHTML = "Switch to invisible"
        } else {
          elem.innerHTML = "Switch to visible"
        }
      }
    }

    var openFile = function(event) {
      var input = event.target;

      // Instantiate FileReader
      var reader = new FileReader();
      reader.onload = function() {
        imageFile = reader.result;

        document.getElementById("imageChange").innerHTML = '<img width="200" src="' + imageFile + '" class="rounded-circle w-100 shadow" />';
      };
      reader.readAsDataURL(input.files[0]);
    };
  </script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
@endpush
</x-layouts.admin>
