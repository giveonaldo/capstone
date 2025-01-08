<nav class="sticky z-50 shadow-xl top-0 w-full h-24 bg-[#45474B] grid grid-cols-3 items-center ">
    <div class="flex justify-center">
        <img src="{{ asset('images/logo.png') }}" alt="Logo">
    </div>
    <div class="flex justify-center gap-8 font-sans text-xl font-bold text-white">
        <a class="hover:text-[#E7FBB4]" href="/">Home</a>
        <a class="hover:text-[#E7FBB4]" href="/petani">Petani</a>
        <a class="hover:text-[#E7FBB4]" href="/product">Products</a>
    </div>
    <div class="flex justify-center gap-2 font-sans text-xl font-bold text-white">
        @guest
            <a class="hover:underline" href="/login">Login</a>
            /
            <a class="hover:underline" href="/register">Register</a>
        @endguest
        @auth
            @can('petani')
                <a class="hover:underline" href="/petani/dashboard">Dashboard</a>
            @endcan
            @can('admin')
                <a class="hover:underline" href="/admin/dashboard">Dashboard</a>
            @endcan
            @cannot('petani')
                @cannot('admin')
                    <a class="hover:underline" href="/profile">Profile</a>
                @endcannot
            @endcannot
        @endauth
    </div>
</nav>
