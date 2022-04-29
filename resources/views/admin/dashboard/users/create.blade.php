<x-layouts.admin>
  <div class="container-fluid py-4">
        <div class="row mb-5">
          <div class="col-12">
            <div class="multisteps-form mb-5">
              <!--progress bar-->
              <div class="row">
                <div class="col-12 col-lg-8 mx-auto my-4">
                  <div class="card">
                    <div class="card-body">
                      <div class="multisteps-form__progress">
                        <button class="multisteps-form__progress-btn js-active" type="button" title="User Info">
                          <span>{{ __('User Info')}}</span>
                        </button>
                        <button class="multisteps-form__progress-btn" type="button" title="Address">{{ __('Address')}}</button>
                        <button class="multisteps-form__progress-btn" type="button" title="Socials">{{ __('Socials')}}</button>
                        <button class="multisteps-form__progress-btn" type="button" title="Profile">{{ __('Profile')}}</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!--form panels-->
              <div class="row">
                <div class="col-12 col-lg-8 m-auto">
                  <form action="{{ route('admin.users.store') }}" method="POST" class="multisteps-form__form mb-8">
                    @csrf
                    <!--single form panel-->
                    <div class="card multisteps-form__panel p-3 border-radius-xl bg-white js-active" data-animation="FadeIn">
                      <h5 class="font-weight-bolder mb-0">{{ __('About me')}}</h5>
                      <div class="multisteps-form__content">
                        <div class="row mt-3">
                          <div class="col-12 col-sm-6">
                            <label>{{ __('First Name')}}</label>
                            <input class="multisteps-form__input form-control" name="name" type="text" placeholder="Enter your name" />
                          </div>
                          <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                            <label>{{ __('Last Name')}}</label>
                            <input class="multisteps-form__input form-control" name="username" type="text" placeholder="Enter your username" />
                          </div>
                        </div>
                        <div class="row mt-3">
                          <div class="col-12 col-sm-6">
                            <label>{{ __('Company')}}</label>
                            <input class="multisteps-form__input form-control" name="company" type="text" placeholder="Enter your company" />
                          </div>
                          <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                            <label>{{ __('Email Address')}}</label>
                            <input class="multisteps-form__input form-control" name="email" type="email" placeholder="Enter your email" />
                          </div>
                        </div>
                        <div class="row mt-3">
                          <div class="col-12 col-sm-6">
                            <label>{{ __('Password')}}</label>
                            <input class="multisteps-form__input form-control" type="password" name="password" placeholder="Enter your password" />
                          </div>
                          <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                            <label>{{ __('Repeat Password')}}</label>
                            <input class="multisteps-form__input form-control" type="password" name="password" placeholder="Confirm your password" />
                          </div>
                        </div>
                        <div class="button-row d-flex mt-4">
                          <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="button" title="Next">{{ __('Next')}}</button>
                        </div>
                      </div>
                    </div>
                    <!--single form panel-->
                    <div class="card multisteps-form__panel p-3 border-radius-xl bg-white" data-animation="FadeIn">
                      <h5 class="font-weight-bolder">{{ __('Address')}}</h5>
                      <div class="multisteps-form__content">
                        <div class="row mt-3">
                          <div class="col">
                            <label>{{ __('Address 1')}}</label>
                            <input class="multisteps-form__input form-control" type="text" placeholder="Enter your address" />
                          </div>
                        </div>
                        <div class="row mt-3">
                          <div class="col">
                            <label>{{ __('Address 2')}}</label>
                            <input class="multisteps-form__input form-control" type="text" placeholder="Enter your address" />
                          </div>
                        </div>
                        <div class="row mt-3">
                          <div class="col-12 col-sm-6">
                            <label>{{ __('City')}}</label>
                            <input class="multisteps-form__input form-control" name="city" type="text" placeholder="Enter your city" />
                          </div>
                          <div class="col-6 col-sm-3 mt-3 mt-sm-0">
                            <label>{{ __('Country')}}</label>
                            <select class="multisteps-form__select form-control">
                              <option selected="selected">...</option>
                              <option value="1">1</option>
                              <option value="2">2</option>
                            </select>
                          </div>
                          <div class="col-6 col-sm-3 mt-3 mt-sm-0">
                            <label>{{ __('Zip')}}</label>
                            <input class="multisteps-form__input form-control" type="text" placeholder="7 letters" />
                          </div>
                        </div>
                        <div class="button-row d-flex mt-4">
                          <button class="btn bg-gradient-light mb-0 js-btn-prev" type="button" title="Prev">{{ __('Prev')}}</button>
                          <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="button" title="Next">{{ __('Next')}}</button>
                        </div>
                      </div>
                    </div>
                    <!--single form panel-->
                    <div class="card multisteps-form__panel p-3 border-radius-xl bg-white" data-animation="FadeIn">
                      <h5 class="font-weight-bolder">{{ __('Socials')}}</h5>
                      <div class="multisteps-form__content">
                        <div class="row mt-3">
                          <div class="col-12">
                            <label>{{ __('Twitter Handle')}}</label>
                            <input class="multisteps-form__input form-control" type="text" placeholder="Enter your twitter account" />
                          </div>
                          <div class="col-12 mt-3">
                            <label>{{ __('Facebook Account')}}</label>
                            <input class="multisteps-form__input form-control" type="text" placeholder="Enter your facebook account" />
                          </div>
                          <div class="col-12 mt-3">
                            <label>{{ __('Instagram Account')}}</label>
                            <input class="multisteps-form__input form-control" type="text" placeholder="Enter your instagram account" />
                          </div>
                        </div>
                        <div class="row">
                          <div class="button-row d-flex mt-4 col-12">
                            <button class="btn bg-gradient-light mb-0 js-btn-prev" type="button" title="Prev">{{ __('Prev')}}</button>
                            <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="button" title="Next">{{ __('Next')}}</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!--single form panel-->
                    <div class="card multisteps-form__panel p-3 border-radius-xl bg-white h-100" data-animation="FadeIn">
                      <h5 class="font-weight-bolder">{{ __('User')}}</h5>
                      <div class="multisteps-form__content mt-3">
                        <div class="row">
                          <div class="col-12">
                            <label>{{ __('Public Email')}}</label>
                            <input class="multisteps-form__input form-control" type="text" placeholder="Use an address you don't use frequently." />
                          </div>
                          <div class="col-12 mt-3">
                            <label>{{ __('Bio')}}</label>
                            <textarea class="multisteps-form__textarea form-control" name="about_me" rows="5" placeholder="Say a few words about who you are or what you're working on."></textarea>
                          </div>
                        </div>
                        <div class="button-row d-flex mt-4">
                          <button class="btn bg-gradient-light mb-0 js-btn-prev" type="button" title="Prev">{{ __('Prev')}}</button>
                          <button class="btn bg-gradient-dark ms-auto mb-0" type="submit" title="Send">{{ __('Send')}}</button>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
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
                  <a href="https://ruya.studio/" class="font-weight-bold" target="_blank">Ruya Studio</a>
                </div>
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
<!--   Core JS Files   -->
<script src="{{asset('dashboard/assets/js/plugins/multistep-form.js')}}"></script>
<script>
  var win = navigator.platform.indexOf('Win') > -1;
  if (win && document.querySelector('#sidenav-scrollbar')) {
    var options = {
      damping: '0.5'
    }
    Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
  }
</script>
</x-layouts.admin>