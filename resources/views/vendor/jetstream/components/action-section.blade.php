<div {{ $attributes->merge(['class' => '']) }}>
    <x-jet-section-title>
        <x-slot name="title">{{ $title }}</x-slot>
        <x-slot name="description">{{ $description }}</x-slot>
    </x-jet-section-title>

    <div class="w-full">
        <div class="px-2 pt-4 sm:p-6 bg-white sm:rounded-lg">
            {{ $content }}
        </div>
    </div>
</div>
