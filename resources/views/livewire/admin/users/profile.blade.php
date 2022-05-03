<div class="p-3 rounded-lg bg-white border border-secondary shadow" id="profile">
    <div class="flex justify-between items-start">
        <div class="flex flex-wrap">
            <div class="position-relative">
                <img src="{{$user->profile_photo_url }}" alt="bruce" class="w-24 h-24 rounded-lg  object-cover shadow border">
            </div>
            <div class="mx-3 my-1">
                <div class="h-100">
                    <p class="mb-1 font-weight-bolder text-xl">
                        {{$user->name}}
                    </p>
                    <p class="mb-1 text-base">
                        {{$user->username}}
                    </p>
                    <p class="mb-0 text-sm">
                        {{$user->email}}
                    </p>
                </div>
            </div>
        </div>

    </div>
</div>
