<div class="card mt-4  card-body border border-secondary shadow" id="preferences">
    <div class="p-3 @if(!$user->active) pb-0 @endif">
        <div class="row align-items-center @if(!$user->active) mb-3 @endif">
            <div class="col-9">
                @if(!$user->active)
                    <h5 class="mb-1">{{__('Deactivate reason')}}:</h5>
                @endif
            </div>
        </div>
        <p> {{$user->raison_deactivated}}</p>
        <ul class="list-unstyled mx-auto">
            <li class="d-flex">
                <p class="mb-0">Account preferences:</p>
                <span class="badge badge-{{$user->active == 1 ? 'success' : 'danger'}} ms-auto"> {{$user->active == 1 ? 'Active' : 'Not active'}}</span>
            </li>
        </ul>
    </div>
    @if($user->role_id != 1)
        @if($user->active)
            <div class="border rounded-lg mb-3">
                <div class="card-header">
                    <h5 class="text-indigo-800">{{__('Deactivate Account')}}</h5>
                    <p class="text-sm mb-0">{{__('Press on confirm to un active account.')}}</p>
                </div>
                <div class="card-body pt-0" x-data="{ open: false }">
                    <form wire:submit.prevent="deactivate">
                        <div class="flex">
                            <div class="d-flex align-items-center" >
                                <div>
                                <div class="form-check form-switch mb-0">
                                    <input class="form-check-input" x-model="confirm" type="checkbox" id="flexSwitchCheckDefault1" x-on:click="open = ! open"
                                           x-data="{ confirm: false, timeout: null }"
                                           x-init="@this.on('savedActive', () => { clearTimeout(timeout);confirm = false;open = false; shown = true; timeout = setTimeout(() => { shown = false }, 2000);  })">
                                </div>
                            </div>
                                <div class="ms-2">
                                    <span class="text-dark font-weight-bold d-block text-sm">{{__('Confirm')}}</span>
                                    <span class="text-xs d-block">{{__('I want to make inactive this User Account.')}}</span>
                                </div>
                            </div>
                            <button class="btn btn-outline-secondary mb-0 ms-auto"
                                type="submit" name="button" x-show="open" style="display: none">
                                {{__('Deactivate')}} <i class="lni lni-warning text-secondary mx-1"></i>
                            </button>
                        </div>
                        <div class="mb-4"  x-show="open" style="display: none">
                            <label class="form-label mt-4">{{ __('Reason')}}</label>
                            <textarea id="reason" wire:model.defer="reason" class="form-control" placeholder="{{ __('reason for deactivate')}}"></textarea>
                            <x-jet-input-error for="reason" class="mt-2" />
                        </div>
                    </form>
                </div>

            </div>
        @else
            <div class="border rounded-lg mb-3">
                <div class="card-header">
                    <h5 class="text-indigo-800">{{__('Activate Account')}}</h5>
                    <p class="text-sm mb-0">{{__('Press on confirm to activate account.')}}</p>
                </div>
                <div class="card-body d-flex pt-0" x-data="{ open: false }">
                    <div class="d-flex align-items-center" >
                        <div>
                            <div class="form-check form-switch mb-0">
                                <input class="form-check-input" x-model="confirm" type="checkbox" id="flexSwitchCheckDefault1" x-on:click="open = ! open"
                                       x-data="{ confirm: false, timeout: null }"
                                       x-init="@this.on('savedActive', () => { clearTimeout(timeout);open = false;  confirm = false; shown = true; timeout = setTimeout(() => { shown = false }, 2000);  })">
                            </div>
                        </div>
                        <div class="ms-2">
                            <span class="text-dark font-weight-bold d-block text-sm">{{__('Confirm')}}</span>
                            <span class="text-xs d-block">{{__('I want to make Activate this User Account.')}}</span>
                        </div>
                    </div>
                    <button class="btn btn-outline-secondary mb-0 ms-auto" type="button"
                            wire:click="deactivate()" name="button" x-show="open" style="display: none">
                        {{__('Activate')}} <i class="lni lni-checkmark text-secondary mx-1"></i>
                    </button>
                </div>
            </div>
        @endif
            <div x-data="{ shown: false, timeout: 600 }"
                 x-init="@this.on('activated', () => { clearTimeout(timeout); shown = true; timeout = setTimeout(() => { shown = false }, 2000);  })"
                 x-show.transition.out.opacity.duration.1500ms="shown"
                 x-transition:leave.opacity.duration.1500ms
                 style="display: none;" class="mb-4 py-2 text-sm alert alert-success text-white">
                Account successfully activated
            </div>
            <div x-data="{ shown: false, timeout: 600 }"
                 x-init="@this.on('deactivated', () => { clearTimeout(timeout); shown = true; timeout = setTimeout(() => { shown = false }, 2000);  })"
                 x-show.transition.out.opacity.duration.1500ms="shown"
                 x-transition:leave.opacity.duration.1500ms
                 style="display: none;" class="mb-4 py-2 text-sm alert alert-danger text-white">
                Account successfully deactivated
            </div>
        <div class="border rounded-lg ">
            <div class="card-header">
            <h5 class="text-red-700">{{__('Delete Account')}}</h5>
            <p class="text-sm mb-0">{{__('Once you delete This account, there is no going back. Please be certain.')}}
            </p>
        </div>
            <div class="card-body flex justify-between pt-0" x-data="{ open: false }">
            <div class="d-flex align-items-center" >
                <div>
                    <div class="form-check form-switch mb-0">
                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" x-on:click="open = ! open">
                    </div>
                </div>
                <div class="ms-2">
                    <span class="text-dark font-weight-bold d-block text-sm">{{__('Confirm')}}</span>
                    <span class="text-xs d-block">{{__('I want to delete this User Account.')}}</span>
                </div>
            </div>
            <button class="btn bg-gradient-danger mb-0 ms-2" type="button" name="button"
                    x-show="open"  data-bs-toggle="modal" data-bs-target="#delete-{{$user->id}}" style="display:none;">
                  {{__('Delete Account ')}}   <i class="fas fa-trash text-white mx-1"></i>
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
        </div>
        </div>
    @else
        <div class="border rounded-md ">
            <div class="card-header">
                <h5>Admin Account preferences</h5>
                <p class="text-sm mb-0">You cannot deactivate or delete admin account.
                </p>
            </div>
        </div>
    @endif

</div>
