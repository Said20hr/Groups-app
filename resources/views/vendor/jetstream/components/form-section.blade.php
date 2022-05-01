@props(['submit'])

<div {{ $attributes->merge(['class' => '']) }}>
    <x-jet-section-title>
        <x-slot name="title">{{ $title }}</x-slot>
        <x-slot name="description">{{ $description }}</x-slot>
    </x-jet-section-title>

    <div class="mt-2">
        <form wire:submit.prevent="{{ $submit }}">
            <div class="bg-white px-2  {{ isset($actions) ? 'sm:rounded-tl-md sm:rounded-tr-md' : 'sm:rounded-md' }}">
                <div class="w-full ">
                    {{ $form }}
                </div>
            </div>

            @if (isset($actions))
                <div class="my-4 px-2">
                    {{ $actions }}
                </div>
            @endif
        </form>
    </div>
</div>
