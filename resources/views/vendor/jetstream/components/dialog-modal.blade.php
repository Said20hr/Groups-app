@props(['id' => null, 'maxWidth' => null])

<x-jet-modal :id="$id" :maxWidth="$maxWidth" {{ $attributes }}>
    <div class="p-4 z-50">
        <div class="text-lg">
            {{ $title }}
        </div>

        <div class="mt-3">
            {{ $content }}
        </div>
    </div>

    <div class="flex flex-row justify-end px-4 py-2 bg-gray-50 text-right">
        {{ $footer }}
    </div>
</x-jet-modal>
