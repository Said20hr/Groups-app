<x-layouts.admin>
  <div class="container-fluid py-4">
      <div class="w-full">
          <div class="bg-white lg:p-3 p-2 shadow border rounded-lg">
            <!-- Card header -->
            <div class="bg-white lg:p-3 p-2 rounded-lg pb-0">
              <div class="d-flex flex-wrap justify-between">
                <div>
                  <h5 class="mb-0">{{ __('All Users')}}</h5>
                </div>
                <div class="my-auto mt-lg-0 mt-4">
                  <div class="flex items-center lg:justify-end justify-start">
                    <a href="#" class="btn disabled bg-gradient-primary text-sm lg:px-4 px-3 py-2">+ {{ __('New User')}}</a>
                      <div class="mx-1">
                          <button type="button" class="btn btn-outline-primary mx-1 text-sm lg:px-4 px-3 py-2" data-bs-toggle="modal" data-bs-target="#import">
                              {{ __('Import')}}
                          </button>
                          <div class="modal fade" id="import" tabindex="-1" aria-hidden="true">
                              <div class="modal-dialog mt-lg-10">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                          <h5 class="modal-title" id="ModalLabel">{{ __('Import CSV')}}</h5>
                                          <i class="fas fa-upload ms-3"></i>
                                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                      </div>
                                      <div class="modal-body">
                                          <p>You can browse your computer for a file.</p>
                                          <input type="text" placeholder="Browse file..." class="form-control mb-3">
                                          <div class="form-check">
                                              <input class="form-check-input" type="checkbox" value="" id="importCheck" checked="">
                                              <label class="custom-control-label" for="importCheck">I accept the terms and conditions</label>
                                          </div>
                                      </div>
                                      <div class="modal-footer">
                                          <button type="button" class="btn bg-gradient-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                                          <button type="button" class="btn bg-gradient-primary btn-sm">Upload</button>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <button class="btn btn-outline-primary btn-sm export mx-1 text-sm lg:px-4 px-3 py-2" data-type="csv" type="button" name="button"> {{ __('Export')}}</button>
                      </div>

                  </div>
                </div>
              </div>
            </div>
            <div class="card-body px-0 pb-0 pt-4">
              <div class="table-responsive">
                <table class="table table-flush" id="products-list">
                  <thead class="thead-light">
                    <tr>
                        <th class="ps-1">{{ __('ID')}}</th>
                        <th class="ps-3">{{ __('Full name')}}</th>
                        <th class="ps-3">{{ __('Username')}}</th>
                        <th class="ps-3">{{ __('Email')}}</th>
                        <th class="ps-3">{{ __('Telegram')}}</th>
                        <th class="ps-3">{{ __('Reputation')}}</th>
                        <th class="ps-3">{{ __('Trading ID')}}</th>
                        <th class="ps-3">{{ __('Status')}}</th>
                        <th class="ps-3">{{ __('Action')}}</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($users as $user)
                      <tr class="text-left">
                        <td>
                            <a href="{{ route('admin.users.show',$user->id) }}" >
                                <p class="ms-3 my-2 text-sm" style="font-weight: bolder">
                                    {{ $user->id }}</p></a>
                        </td>
                        <td class="pr-3">
                          <div class="items-center">
                            <img class="icon icon-md rounded-full object-cover"  src="{{$user->profile_photo_url }}" alt="{{ $user->name}}">
                            <span class="my-2 ml-2 font-medium text-xs">{{ $user->name}} </span>
                          </div>
                        </td>
                        <td><p class="my-2 text-xs">{{ $user->username  }}</p></td>
                        <td><p class="my-2 text-xs">{{ $user->email }}</p></td>
                        <td>
                            @if($user->telegram)
                                <a class="btn btn-twitter btn-simple mb-0 ps-1 pe-2 py-0" href="{{$user->telegram}}" target="_blank">
                                    <i class="fab fa-telegram fa-lg"></i>
                                </a>
                            @endif
                        </td>
                        <td><p class="my-2 text-sm">{{ $user->reputation }}</p></td>
                        <td><p class="my-2 text-sm">{{ $user->tradingViewId }}</p></td>
                        <td>
                          <span class="badge {{ $user->active ? 'badge-success' : 'badge-danger' }} badge-sm ms-3 my-2">
                              {{$user->active ? 'Active' : 'Inactive'}}
                          </span>
                        </td>
                        <td>
                          <div class="flex my-2 text-sm">
                          <a class="mx-1" href="{{ route('admin.users.show',$user->id) }}" data-bs-toggle="tooltip" data-bs-original-title="Preview user">
                            <i class="fas fa-eye text-primary" ></i>
                          </a>
                          <a href="{{ route('admin.users.edit',$user->id) }}" class="mx-2" data-bs-toggle="tooltip" data-bs-original-title="Edit user">
                            <i class="fas fa-user-edit text-info"></i>
                          </a>
                              @if($user->role_id != 1)
                                  <button type="button"  data-bs-toggle="modal"  data-bs-target="#delete-{{$user->id}}">
                                      <i class="fas fa-trash text-danger"></i>
                                  </button>
                                  <div class="modal fade" id="delete-{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
                                      <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
                                          <form action="{{route('admin.users.destroy',$user->id)}}" method="post">
                                              @csrf
                                              @method('DELETE')
                                              <div class="modal-content">
                                                  <div class="modal-header">
                                                      <h6 class="modal-title" id="modal-title-notification">Delete User</h6>
                                                      <button type="submit" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                          <span aria-hidden="true">×</span>
                                                      </button>
                                                  </div>
                                                  <div class="modal-body">
                                                      <div class="py-3 px-3 text-center">
                                                          <i class="ni ni-bell-55 ni-3x"></i>
                                                          <h5 class="text-gradient text-danger mt-4">Are you sure you want to delete this user ?</h5>
                                                          <p>There is no going back to this action. Please be certain.</p>
                                                      </div>
                                                  </div>
                                                  <div class="modal-footer">
                                                      <button type="submit" class="btn btn-danger">Ok, Delete</button>
                                                      <button type="button" class="btn btn-outline-dark ml-auto" data-bs-dismiss="modal">Close</button>
                                                  </div>
                                              </div>
                                          </form>
                                      </div>
                                  </div>
                              @endif
                        </div>
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
  </div>


@push('js')

  <!--   Core JS Files   -->
  <script src="{{asset('dashboards/assets/js/plugins/datatables.js')}}"></script>

<!--====== Plugins js ======-->
 <script>
    if (document.getElementById('products-list')) {
      const dataTableSearch = new simpleDatatables.DataTable("#products-list", {
        searchable: true,
        fixedHeight: false,
        perPage: 10
      });

      document.querySelectorAll(".export").forEach(function(el) {
        el.addEventListener("click", function(e) {
          var type = el.dataset.type;

          var data = {
            type: type,
            filename: "Users-" + type,
          };

          if (type === "csv") {
            data.columnDelimiter = "|";
          }

          dataTableSearch.export(data);
        });
      });
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
