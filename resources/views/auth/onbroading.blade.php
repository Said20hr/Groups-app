<x-layouts.auth>
  <div class="container-fluid py-6">
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
              <div class="col-12 col-lg-8 m-auto">
                <form class="multisteps-form__form mb-8">
                  <!--single form panel-->
                  <div class="card multisteps-form__panel p-3 border-radius-lg bg-white js-active" data-animation="FadeIn">
                    <div class="multisteps-form__content">
                      <div class="row mt-3">
                        <div class="col-12 col-sm-6">
                          <label class="label">First Name</label>
                          <input class="multisteps-form__input form-control" type="text" placeholder="First Name" />
                        </div>
                        <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                          <label class="label">Last Name</label>
                          <input class="multisteps-form__input form-control" type="text" placeholder="Last Name" />
                        </div>
                      </div>
                      <div class="row mt-3">
                        <div class="col-12 col-sm-6">
                          <label class="label">Company</label>
                          <input class="multisteps-form__input form-control" type="text" placeholder="Company" />
                        </div>
                        <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                          <label class="label">Email Address</label>
                          <input class="multisteps-form__input form-control" type="email" placeholder="Email Address" />
                        </div>
                      </div>
                      <div class="row mt-3">
                        <div class="col-12 col-sm-6">
                          <label class="label">Password</label>
                          <input class="multisteps-form__input form-control" type="password" placeholder="Password" />
                        </div>
                        <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                          <label class="label">Repeat Password</label>
                          <input class="multisteps-form__input form-control" type="password" placeholder="Confirm password" />
                        </div>
                      </div>
                      <div class="button-row d-flex mt-4">
                        <button class="btn gradient-btn main-btn ms-auto mb-0 js-btn-next hover:text-white" type="button" title="Next">Next</button>
                      </div>
                    </div>
                  </div>
                  <!--single form panel-->
                  <div class="card multisteps-form__panel p-3 border-radius-lg bg-white" data-animation="FadeIn">
                    <div class="multisteps-form__content">
                      <div class="row mt-3">
                        <div class="col">
                          <label class="label">Address 1</label>
                          <input class="multisteps-form__input form-control" type="text" placeholder="Address 1" />
                        </div>
                      </div>
                      <div class="row mt-3">
                        <div class="col">
                          <label class="label">Address 2</label>
                          <input class="multisteps-form__input form-control" type="text" placeholder="Address 2" />
                        </div>
                      </div>
                      <div class="row mt-3">
                        <div class="col-12 col-sm-6">
                          <label class="label">City</label>
                          <input class="multisteps-form__input form-control" type="text" placeholder="City" />
                        </div>
                        <div class="col-6 col-sm-3 mt-3 mt-sm-0">
                          <label class="label">State</label>
                          <select class="multisteps-form__select form-control">
                            <option selected="selected">...</option>
                            <option value="1">State 1</option>
                            <option value="2">State 2</option>
                          </select>
                        </div>
                        <div class="col-6 col-sm-3 mt-3 mt-sm-0">
                          <label class="label">Zip</label>
                          <input class="multisteps-form__input form-control" type="text" placeholder="Zip" />
                        </div>
                      </div>
                      <div class="button-row d-flex mt-4">
                        <button class="btn gradient-btn bg-gradient bg-dark text-white mb-0 js-btn-prev" type="button" title="Prev">Prev</button>
                        <button class="btn gradient-btn main-btn ms-auto mb-0 js-btn-next hover:text-white" type="button" title="Next">Next</button>
                      </div>
                    </div>
                  </div>
                  <!--single form panel-->
                  <div class="card multisteps-form__panel p-3 border-radius-lg bg-white" data-animation="FadeIn">
                    <div class="multisteps-form__content">
                      <div class="row mt-3">
                        <div class="col-12">
                          <label class="label">Twitter Handle</label>
                          <input class="multisteps-form__input form-control" type="text" placeholder="Twitter Handle" />
                        </div>
                        <div class="col-12 mt-3">
                          <label class="label">Facebook Account</label>
                          <input class="multisteps-form__input form-control" type="text" placeholder="Facebook Account" />
                        </div>
                        <div class="col-12 mt-3">
                          <label class="label">Instagram Account</label>
                          <input class="multisteps-form__input form-control" type="text" placeholder="Instagram Account" />
                        </div>
                      </div>
                      <div class="row">
                        <div class="button-row d-flex mt-4 col-12">
                          <button class="btn gradient-btn bg-gradient bg-dark text-white mb-0 js-btn-prev" type="button" title="Prev">Prev</button>
                          <button class="btn gradient-btn main-btn ms-auto mb-0 js-btn-next hover:text-white" type="button" title="Next">Next</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--single form panel-->
                  <div class="card multisteps-form__panel p-3 border-radius-lg bg-white h-100" data-animation="FadeIn">
                    <div class="multisteps-form__content mt-3">
                      <div class="row">
                        <div class="col-12">
                          <label class="label">Public Email</label>
                          <input class="multisteps-form__input form-control" type="text" placeholder="Use an address you don't use frequently." />
                        </div>
                        <div class="col-12 mt-3">
                          <label class="label">Bio</label>
                          <textarea class="multisteps-form__textarea form-control" rows="5" placeholder="Say a few words about who you are or what you're working on."></textarea>
                        </div>
                      </div>
                      <div class="button-row d-flex mt-4">
                        <button class="btn gradient-btn bg-gradient bg-dark text-white mb-0 js-btn-prev" type="button" title="Prev">Prev</button>
                        <button class="btn gradient-btn main-btn ms-auto mb-0 js-btn-next hover:text-white" type="button" title="Next">Send</button>                        </div>
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
