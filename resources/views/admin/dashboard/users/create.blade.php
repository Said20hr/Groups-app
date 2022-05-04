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

  </div>

<!--   Core JS Files   -->
<script src="{{asset('dashboards/assets/js/plugins/multistep-form.js')}}"></script>

</x-layouts.admin>
