<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>{{ $title }}</title>
</head>

<body class="relative">
    <nav class="flex fixed z-10 justify-between w-full items-center py-2 pr-5 border-b-2 bg-white">
        <a class="flex items-center" href="/petani/dashboard">
            <img src="{{ Vite::asset('resources/images/logo-padi.png') }}" alt="logo padi">
            <h1 class="text-2xl font-medium">{{ $petani }}</h1>
        </a>
        <a class="text-xl font-bold text-[#6D2323] hover:underline" href="/petani/profile">Profile</a>
    </nav>
    <aside
        class="flex fixed top-0 left-0 justify-between flex-col h-screen  bg-[#379777] text-white w-[256px] pb-10 pt-28 px-6">
        <div class="flex flex-col gap-6">
            <a class="text-[#A9C46C] hover:text-[#F4FFC3] font-semibold shadow-lg py-2 pl-4 rounded-md hover:bg-[#727D73] outline-none hover:outline-[#FFEB00]"
                href="/report">Report</a>
            <a class="{{ request()->is('petani/products') ? 'outline-[#FFEB00] text-[#F4FFC3]' : 'text-[#A9C46C]' }} hover:text-[#F4FFC3] font-semibold shadow-lg py-2 pl-4 rounded-md hover:bg-[#727D73] outline-none hover:outline-[#FFEB00]"
                href="/petani/products">Products</a>
            <a class="text-[#A9C46C] hover:text-[#F4FFC3] font-semibold shadow-lg py-2 pl-4 rounded-md hover:bg-[#727D73] outline-none hover:outline-[#FFEB00]"
                href="/mitra">Mitra</a>
        </div>
        <div class="flex flex-col gap-4">
            <a class="text-xl font-semibold hover:underline" href="/">Home</a>
            <form action="/logout" method="post">
                @csrf
                @method('DELETE')
                <button
                    class="bg-red-600 hover:bg-red-500 text-white  font-semibold hover:text-white py-2 px-4 border border-white hover:border-transparent rounded"
                    type="submit">Logout</button>
            </form>
        </div>
    </aside>
    <main class="ml-[260px] pt-20 -z-10 min-h-[110vh]">
        {{ $slot }}
    </main>
    @include('components.petani.footer')
</body>

</html>
