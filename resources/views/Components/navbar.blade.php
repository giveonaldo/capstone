<header class="sticky inset-0 z-50 border-b border-slate-100 bg-white/80 backdrop-blur-lg">
    <nav class="mx-auto flex max-w-6xl gap-8 px-6 transition-all duration-200 ease-in-out lg:px-12 py-4">
        
        <div class="relative flex items-center">
            <a href="/">
                <img width="32" height="32" src="{{ asset('images/logo.png') }}" alt="Logo">
            </a>
        </div>
        
        
        <ul class="hidden items-center justify-center gap-6 md:flex">
            <li class="pt-1.5 font-dm text-sm font-medium text-slate-700">
                <a href="/">Home</a>
            </li>
            <li class="pt-1.5 font-dm text-sm font-medium text-slate-700">
                <a href="/petani">Petani</a>
            </li>
            <li class="pt-1.5 font-dm text-sm font-medium text-slate-700">
                <a href="/products">Products</a>
            </li>
        </ul>
        <div class="flex-grow"></div>
        <div class="hidden items-center justify-center gap-6 md:flex">
            @guest
                <a class="font-dm text-sm font-medium text-slate-700" href="/login">Sign in</a>
                <a href="/register"
                class="rounded-md bg-gradient-to-br from-green-600 to-emerald-400 px-3 py-1.5 font-dm text-sm font-medium text-white shadow-md shadow-green-400/50 transition-transform duration-200 ease-in-out hover:scale-[1.03]">Sign
                up for free
            </a>
            @endguest
            @auth
                @can('petani')
                    <a class="font-dm text-sm font-medium text-slate-700" href="/petani/dashboard">Dashboard</a>
                @endcan
                @can('admin')
                    <a class="font-dm text-sm font-medium text-slate-700" href="/admin/dashboard">Dashboard</a>
                @endcan
                @cannot('petani')
                    @cannot('admin')
                        <a class="font-dm text-sm font-medium text-slate-700" href="/profile/{{ $id }}">Profile</a>
                    @endcannot
                @endcannot
            @endauth
        </div>
    </nav>
</header>
