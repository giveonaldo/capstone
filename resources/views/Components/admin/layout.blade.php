<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Admin Panel</title>
</head>

<body class="relative">
    <aside class="w-[256px] z-10 h-screen fixed flex flex-col pb-8 top-0 left-0 shadow-xl bg-slate-700 text-white pl-6 pt-4 ">
        <a class="text-2xl font-bold hover:text-orange-300" href="/admin/dashboard">Admin</a>
        <div class="flex flex-col mt-6 gap-3">
            <a class="{{ request()->is('admin/petani') ? 'text-orange-300' : '' }} text-xl font-semibold hover:underline" href="/admin/petani">Petani</a>
            <a class="{{ request()->is('admin/investor') ? 'text-orange-300' : '' }} text-xl font-semibold hover:underline" href="/admin/investor">Investor</a>
            <a class="{{ request()->is('admin/kemitraan') ? 'text-orange-300' : '' }} text-xl font-semibold hover:underline" href="/admin/kemitraan">Kemitraan</a>
        </div>
        <form class="mt-auto" action="/logout" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit"
            class="bg-red-600 hover:bg-red-500 text-white font-semibold hover:text-white py-2 px-4 border border-white hover:border-transparent rounded">
            Logout
            </button>
        </form>
    </aside>
    <main class="ml-[18rem] mt-8">
        {{ $slot }}
    </main>
</body>

</html>
