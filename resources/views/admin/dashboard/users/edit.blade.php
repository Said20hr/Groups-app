<x-layouts.admin>
  <div class="container-fluid my-6 py-2">
      <div class="row mb-5">
        <div class="col-lg-3">
          <div class="card position-sticky top-1 border">
            <ul class="nav flex-column bg-white border-radius-lg p-3">
              <li class="nav-item">
                <a class="nav-link text-gray-700 flex align-items-center" data-scroll="" href="#profile">
                  <i class="ni ni-spaceship me-2 text-dark opacity-8"></i>
                 <span class="text-lg">{{ __('Profile')}}</span>
                </a>
              </li>
              <li class="nav-item pt-2">
                <a class="nav-link text-gray-700 flex align-items-center" data-scroll="" href="#basic-info">
                  <i class="ni ni-books me-2 text-dark opacity-8"></i>
                 <span class="text-lg">{{ __('Basic Info')}}</span>
                </a>
              </li>
                @if(auth()->user()->id == $user->id)
                <li class="nav-item pt-2">
                    <a class="nav-link text-gray-700 flex align-items-center" data-scroll="" href="#password">
                        <i class="lni lni-lock me-2 text-dark opacity-8"></i>
                       <span class="text-lg">{{ __('Password')}}</span>
                    </a>
                </li>
                @endif
                <li class="nav-item pt-2">
                    <a class="nav-link text-gray-700 flex align-items-center" data-scroll="" href="#location">
                        <i class="lni lni-pin me-2 text-dark opacity-8"></i>
                       <span class="text-lg">{{ __('Location')}}</span>
                    </a>
                </li>
                <li class="nav-item pt-2">
                    <a class="nav-link text-gray-700 flex align-items-center" data-scroll="" href="#social">
                        <i class="lni lni-facebook me-2 text-dark opacity-8"></i>
                       <span class="text-lg">{{ __('Social media')}}</span>
                    </a>
                </li>
              <li class="nav-item pt-2">
                <a class="nav-link text-gray-700 flex align-items-center" data-scroll="" href="#2fa">
                  <i class="ni ni-ui-04 me-2 text-dark opacity-8"></i>
                 <span class="text-lg">{{ __('Two factor')}}</span>
                </a>
              </li>
              <li class="nav-item pt-2">
                <a class="nav-link text-gray-700 flex align-items-center" data-scroll="" href="#sessions">
                  <i class="ni ni-watch-time me-2 text-dark opacity-8"></i>
                 <span class="text-lg">{{ __('Sessions')}}</span>
                </a>
              </li>
                <li class="nav-item pt-2">
                    <a class="nav-link text-gray-700 flex align-items-center" data-scroll="" href="#preferences">
                        <i class="lni lni-cog me-2 text-dark opacity-8"></i>
                       <span class="text-lg">{{ __('Preferences')}}</span>
                    </a>
                </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-9 mt-lg-0 mt-4">
            <!-- Card Profile -->
            @livewire('admin.users.profile',['user' => $user])
            <!-- Card Basic Info -->
            @livewire('admin.users.update-profile-information-form',['user' => $user])
            <!-- Card Location -->
            @livewire('admin.users.update-password-form',['user' => $user])
            <!-- Card Location -->
            @livewire('admin.users.location',['user' => $user])
            <!-- Social Accounts -->
            @livewire('admin.users.social-media',['user' => $user])
            <!-- 2FA Sessions -->
            @livewire('admin.users.two-factorauth',['user' => $user])
            <!-- Card Accounts -->
            @livewire('admin.users.sessions',['user' => $user])
            <!-- Card Sessions -->
            @livewire('admin.users.preferences',['user' => $user])
            <!-- Card Delete Account -->
        </div>
      </div>
  </div>

@push('js')
<!-- Kanban scripts -->
<script>







    function visible() {
      var elem = document.getElementById('profileVisibility');
      if (elem) {
        if (elem.innerHTML == "Switch to Active") {
          elem.innerHTML = "Switch to Inactive"
        } else {
          elem.innerHTML = "Switch to Active"
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

@endpush
</x-layouts.admin>
