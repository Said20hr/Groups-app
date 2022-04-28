<x-layouts.auth>
  <div class="container-fluid py-6 mb-8">
      <div class="row mb-5">
        <div class="col-12">
          <div class="multisteps-form mb-5">
            <!--progress bar-->
            <div class="row">
              <div class="col-12 col-lg-7 mx-auto my-4">
                <div class="card">
                  <div class="card-body">
                    <div class="multisteps-form__progress">
                      <button class="multisteps-form__progress-btn js-active" type="button" title="User Info">
                        <i class="ni ni-single-02 text-xl opacity-10"></i>
                      </button>
                      <button class="multisteps-form__progress-btn" type="button" title="Address"><i class="ni ni-square-pin text-xl opacity-10"></i></button>
                      <button class="multisteps-form__progress-btn" type="button" title="Socials"><i class="ni ni-app text-xl opacity-10"></i></button>
                      <button class="multisteps-form__progress-btn" type="button" title="Profile"><i class="ni ni-check-bold  text-xl opacity-10"></i></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--form panels-->
            <div class="row">
              <div class="col-12 col-lg-7 m-auto">
                <form class="multisteps-form__form mb-8">
                  <!--single form panel-->
                  <div class="card multisteps-form__panelborder-radius-lg py-3 bg-white js-active" data-animation="FadeIn">
                    <h4 class="text-2xl text-dark font-medium text-center font-weight-bold mt-2">{{ __('About me') }}</h4>
                    <div class="multisteps-form__content px-6 py-3 ">
                      <div class="row mt-3">
                        <div class="col-12 col-sm-12">
                          <x-jet-input id="name" class="block mt-1 w-full" type="text" placeholder="Name" name="name" :value="old('name')" required autofocus autocomplete="name" />
                        </div>
                        <div class="col-12 col-sm-12 mt-3 ">
                          <x-jet-input id="lastname" class="block mt-1 w-full" type="text" placeholder="Last Name" name="lastname" :value="old('lastname')" required autofocus autocomplete="lastname" />
                        </div>
                      </div>
                      <div class="row mt-3">
                        <div class="col-12 col-sm-6">
                          <x-jet-input id="company" class="block mt-1 w-full" type="text" placeholder="Company" name="company" :value="old('company')" required autofocus autocomplete="company" />
                        </div>
                        <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                          <x-jet-input id="email" class="block mt-1 w-full" type="text" placeholder="Email Address" name="email" :value="old('email')" required autofocus autocomplete="email" />
                        </div>
                      </div>
                      <div class="row mt-3">
                        <div class="col-12 col-sm-6">
                          <x-jet-input id="password" class="block mt-1 w-full" type="password" placeholder="Password" name="password" required autocomplete="new-password" />
                        </div>
                        <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                          <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" placeholder="Confirm passowrd" name="password_confirmation" required autocomplete="new-password" />
                        </div>
                      </div>
                    </div>
                    <div class="button-row d-flex px-4">
                      <button class="btn gradient-btn main-btn ms-auto mb-0 js-btn-next hover:text-white" type="button" title="Next"> {{ __('Next') }}</button>
                    </div>
                  </div>
                  <!--single form panel-->
                  <div class="card multisteps-form__panel border-radius-lg py-3 bg-white" data-animation="FadeIn">
                    <h4 class="text-2xl text-dark font-medium text-center font-weight-bold mt-2">{{ __('Address') }}</h4>
                    <div class="multisteps-form__content px-6 py-3">
                      <div class="row mt-3">
                        <div class="col">
                          <x-jet-input id="address1" class="block mt-1 w-full" type="text" placeholder="Address 1" name="address1" :value="old('address1')" required autofocus autocomplete="address1" />
                        </div>
                      </div>
                      <div class="row mt-3">
                        <div class="col">
                          <x-jet-input id="address2" class="block mt-1 w-full" type="text" placeholder="Address 2" name="address2" :value="old('address2')" required autofocus autocomplete="address1" />
                        </div>
                      </div>
                      <div class="row mt-3">
                        <div class="col-12 col-sm-6">
                          <x-jet-input id="city" class="block mt-1 w-full" type="text" placeholder="City" name="city" :value="old('city')" required autofocus autocomplete="city" />
                        </div>
                        <div class="col-6 col-sm-3 mt-3 mt-sm-0">
                          <select class="multisteps-form__select form-control">
                            <option selected="selected">...</option>
                            <option value="1">{{ __('State 1')}}</option>
                            <option value="2">{{ __('State 2')}}</option>
                          </select>
                        </div>
                        <div class="col-6 col-sm-3 mt-3 mt-sm-0">
                          <x-jet-input id="zip" class="block mt-1 w-full" type="text" placeholder="Zip" name="zip" :value="old('zip')" required autofocus autocomplete="zip" />
                        </div>
                      </div>
                    </div>
                    <div class="button-row d-flex px-4">
                      <button class="btn gradient-btn bg-gradient bg-dark text-white mb-0 js-btn-prev" type="button" title="Prev">{{ __('Prev')}}</button>
                      <button class="btn gradient-btn main-btn ms-auto mb-0 js-btn-next hover:text-white" type="button" title="Next">{{ __('Next')}}</button>
                    </div>
                  </div>
                  <!--single form panel-->
                  <div class="card multisteps-form__panel border-radius-lg py-3 bg-white" data-animation="FadeIn">
                    <h4 class="text-2xl text-dark font-medium text-center font-weight-bold mt-2">{{ __('Socials') }}</h4>
                    <div class="multisteps-form__content px-6 py-3">
                      <div class="row mt-3">
                        <div class="col-12">
                          <x-jet-input id="twitter" class="block mt-1 w-full" type="text" placeholder="Twitter Handle" name="twitter" :value="old('twitter')" required autofocus autocomplete="twitter" />
                        </div>
                        <div class="col-12 mt-3">
                          <x-jet-input id="facebook" class="block mt-1 w-full" type="text" placeholder="Facebook Account" name="facebook" :value="old('facebook')" required autofocus autocomplete="facebook" />
                        </div>
                        <div class="col-12 mt-3">
                          <x-jet-input id="instagram" class="block mt-1 w-full" type="text" placeholder="Instagram Account" name="instagram" :value="old('instagram')" required autofocus autocomplete="instagram" />
                        </div>
                      </div>
                    </div>
                    <div class="button-row d-flex px-4">
                      <button class="btn gradient-btn bg-gradient bg-dark text-white mb-0 js-btn-prev" type="button" title="Prev">{{ __('Prev')}}</button>
                      <button class="btn gradient-btn main-btn ms-auto mb-0 js-btn-next hover:text-white" type="button" title="Next">{{ __('Next')}}</button>
                    </div>
                  </div>
                  <!--single form panel-->
                  <div class="card multisteps-form__panel border-radius-lg py-3 bg-white h-100" data-animation="FadeIn">
                    <h4 class="text-2xl text-dark font-medium text-center font-weight-bold mt-2">{{ __('User') }}</h4>
                    <div class="multisteps-form__content px-6 py-3">
                      <div class="row">
                        <div class="col-12">
                          <x-jet-input id="publicemail" class="block mt-1 w-full" type="text" placeholder="Use an address you don't use frequently." name="publicemail" :value="old('publicemail')" required autofocus autocomplete="publicemail" />
                        </div>
                        <div class="col-12 mt-3">
                          <textarea class="multisteps-form__textarea form-control" rows="5" placeholder="Say a few words about who you are or what you're working on."></textarea>
                        </div>
                      </div>
                    </div>
                    <div class="button-row d-flex px-4">
                      <button class="btn gradient-btn bg-gradient bg-dark text-white mb-0 js-btn-prev" type="button" title="Prev">{{ __('Prev')}}</button>
                      <button class="btn gradient-btn main-btn ms-auto mb-0 hover:text-white" type="button" title="Send">{{ __('Send')}}</button>
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

</x-layouts.auth>
