<div class="p-3 rounded-lg bg-white border border-secondary" id="profile">
    <div class="flex justify-between items-start">
        <div class="flex flex-wrap">
            <div class="position-relative">
                <img src="{{$user->profile_photo_url }}" alt="bruce" class="w-24 h-24 rounded-lg  object-cover shadow border">
            </div>
            <div class="mx-3 my-1">
                <div class="h-100">
                    <h5 class="mb-1 font-weight-bolder">
                        {{$user->name}}
                    </h5>
                    <p class="mb-0 font-weight-bold text-sm">
                        {{$user->username}}
                    </p>
                </div>
            </div>
        </div>
        <div class="flex">
            <span class="badge badge-{{$user->active == 1 ? 'success' : 'danger'}} badge text-xl mx-4">
                {{$user->active == 1 ? 'Active' : 'Not active'}}
            </span>
        </div>
    </div>
</div>
