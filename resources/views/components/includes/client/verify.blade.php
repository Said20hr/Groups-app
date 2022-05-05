<div   x-data="{ open: true }">
    <div id="ofBar" class="text-center flex justify-around items-center p-3 bg-gray-900 text-white"  x-show="open" >
        <div class="tex-lg flex">
            <div>{{__('It seems your email is not verified yet,
            please find the validation message in your email account and click the link to verify your email address.
            or')}}</div>
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf
                <button type="submit" class="px-1 btn-link w-fit font-semibold text-indigo-600">{{ __('click here') }}</button>
            </form>

            <div> {{__(' to resend the verification link again')}}</div>
        </div>
        <div class="float-right right-0 text-xl">
            <button type="button" id="close-bar" class="text-4xl" x-on:click="open = !open">×</button>
        </div>

    </div>
</div>

