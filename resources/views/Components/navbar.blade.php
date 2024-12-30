<nav class="sticky z-50 shadow-xl top-0 w-full h-24 bg-[#45474B] grid grid-cols-3 items-center ">
    <div class="flex justify-center">
        <img src="{{ asset('images/logo.png') }}" alt="Logo">
    </div>
    <div class="flex justify-center gap-8 text-xl font-bold text-white font-sans">
        <a class="hover:text-[#E7FBB4]" href="/">Home</a>
        <a class="hover:text-[#E7FBB4]" href="/petani">Petani</a>
        <a class="hover:text-[#E7FBB4]" href="/mitra">Mitra</a>
    </div>
    <div class="flex justify-center gap-2 text-xl font-bold text-white font-sans">
        @guest
            <a class="hover:underline" href="/login">Login</a>
            /
            <a class="hover:underline" href="/register">Register</a>
        @endguest
        @auth
            <a class="hover:underline" href="/register">Dashboard</a>
        @endauth
    </div>
</nav>
