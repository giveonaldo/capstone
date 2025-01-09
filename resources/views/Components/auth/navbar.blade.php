<nav class="flex justify-between w-full items-center py-2 pr-5 border-b-2">
    <div class="flex items-center">
        <img src="{{ Vite::asset('resources/images/logo-padi.png') }}" alt="logo padi">
        <h1 class="text-2xl font-medium">Auth Page</h1>
    </div>
    @if (request()->is('register/petani'))
        <a class="font-medium hover:underline" href="/register">Users</a>
    @elseif (request()->is('register'))
        <a class="font-medium hover:underline" href="/register/petani">Petani</a>
    @endif
</nav>
