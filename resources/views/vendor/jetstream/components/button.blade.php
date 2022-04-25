<button {{ $attributes->merge(['type' => 'submit', 'class' => 'main-btn gradient-btn w-100 my-4 mb-2']) }}>
    {{ $slot }}
</button>
