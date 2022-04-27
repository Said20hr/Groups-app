<button {{ $attributes->merge(['type' => 'submit', 'class' => 'btn hover:text-white main-btn gradient-btn w-100 my-2']) }}>
    {{ $slot }}
</button>
