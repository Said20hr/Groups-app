<main class="min-h-screen main-content main-content-bg mt-0">
    <div class="page-header min-vh-100" style="background-image: url('{{asset('assets/images/19333414.webp')}}');">
        <span class="mask bg-gradient-dark opacity-6"></span>
        <div class="container">
            <div class="w-full sm:max-w-md mt-6 bg-white shadow-md overflow-hidden sm:rounded-lg mx-auto">
                {{ $slot }}
            </div>
        </div>
    </div>
</main>

