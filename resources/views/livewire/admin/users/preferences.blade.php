<div class="card mt-4  card-body border border-secondary shadow" id="preferences">
    <div class="card-header">
        <h5>Delete Account</h5>
        <p class="text-sm mb-0">Once you delete This account, there is no going back. Please be certain.
        </p>
    </div>
    <div class="card-body d-flex pt-0" x-data="{ open: false }">
        <div class="d-flex align-items-center" >
            <div>
                <div class="form-check form-switch mb-0">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault"
                           x-on:click="open = ! open">
                </div>
            </div>
            <div class="ms-2">
                <span class="text-dark font-weight-bold d-block text-sm">Confirm</span>
                <span class="text-xs d-block">I want to delete this User Account.</span>
            </div>
        </div>
        <button class="btn btn-outline-secondary mb-0 ms-auto" type="button" name="button">Deactivate</button>
        @if($user->role_id != 1)
            <button class="btn bg-gradient-danger mb-0 ms-2" type="button" name="button"
                    x-show="open"  data-bs-toggle="modal" data-bs-target="#delete-{{$user->id}}">
                Delete Account   <i class="fas fa-trash text-white mx-1"></i>
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
</div>
