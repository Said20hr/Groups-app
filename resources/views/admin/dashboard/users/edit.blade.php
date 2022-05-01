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
            @livewire('admin.users.basic-information',['user' => $user])
            <!-- Card Location -->
            @livewire('admin.users.password',['user' => $user])
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
