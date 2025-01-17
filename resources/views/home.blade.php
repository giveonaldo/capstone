<x-main-layout>
    <x-slot:title>
        HomePage
    </x-slot:title>

    {{-- Hero --}}
    <section class="relative w-full min-h-[70vh] overflow-hidden">
        <img class="-z-10 absolute top-0 left-0" src="{{ asset('images/bg-main.jpg') }}" alt="section main" />
        <div class="pl-24 pt-28 gap-14 z-20 grid grid-rows-3 w-full h-full bg-black bg-opacity-35">
            <h1 class="flex items-center text-5xl font-bold text-white">
                Empowering Sustainable<br />Partnerships for Greenhouse<br />Business Success
            </h1>
            <a class="w-fit mt-8 h-fit rounded-xl py-2 px-6 bg-[#1A5319] text-xl font-bold text-white text-center"
                href="/about">Learn more</a>
        </div>
    </section>

    <h3 class="font-serif text-center text-xl mt-4">Keep scroll</h3>

    {{-- Petani --}}
    <section class="flex flex-col w-full h-full mb-11">
        <h1
            class="mb-4 ml-10 text-3xl font-extrabold leading-none tracking-tight text-gray-900 md:text-4xl lg:text-5xl">
            Farmers</h1>
        <div class="grid grid-cols-3 gap-5 justify-items-center overflow-hidden px-7 py-8">
            @if ($petanis->isEmpty())
                <p class="text-gray-500">No Data to show</p>
            @else
                @foreach ($petanis as $petani)
                    @if ($petani->petani)
                        <div class="max-w-sm p-6 bg-[#1A5319] border border-gray-200 rounded-lg shadow">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                    {{ $petani->petani->label ?? '-' }}</h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-300">{{ $petani->petani->deskripsi ?? '-' }}</p>
                            <a href="#"
                                class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-[#123524] rounded-lg hover:text-[#123524] hover:bg-[#EFE3C2] focus:ring-4 focus:outline-none focus:ring-blue-300">
                                Read more
                                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </a>
                        </div>
                    @endif
                @endforeach
            @endif
        </div>
        <div class="mx-8">
            {{ $petanis->links() }}
        </div>
    </section>

    {{-- Investors --}}
    <section class="flex flex-col w-full h-full mb-10">
        <h1
            class="mb-4 ml-10 text-3xl font-extrabold leading-none tracking-tight text-gray-900 md:text-4xl lg:text-5xl">
            Investors</h1>
        <div class="grid grid-cols-3 gap-5 justify-items-center overflow-hidden px-7 py-8">
            @if ($investors->isEmpty())
                <p class="text-gray-500">No Data to show</p>
            @else
                @foreach ($investors as $investor)
                    <div
                        class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="rounded-t-lg w-full" src="{{ asset('storage/' . $investor->image) }}"
                                alt="" />
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                    {{ $investor->name }}</h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                                {{ Str::limit($investor->deskripsi, 200, '...') }}
                            </p>
                            <a href="#"
                                class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Read more
                                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </a>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
        <div class="mx-8">
            {{ $investors->links() }}
        </div>
    </section>

    <section class="flex flex-col items-center w-full">
        <h1 class="text-3xl font-extrabold mb-8">About Us</h1>
        <div class="bg-no-repeat bg-center bg-cover flex justify-center items-center w-full h-full py-12 px-44"
            style="background-image: url({{ asset('images/bg-sawah.jpg') }});">
            <p class="text-white text-center text-xl">
                Selamat datang di AgriPartner, portal website yang didedikasikan untuk kemitraan dan bisnis di
                bidang
                pertanian. Kami bertujuan untuk meningkatkan produktivitas petani melalui solusi pembiayaan yang
                inovatif, strategi pemasaran yang efektif, dan akses langsung ke investor potensial. AgriPartner
                menjadi
                jembatan bagi petani untuk memperluas jaringan pasar mereka, mendapatkan dukungan dana yang
                dibutuhkan,
                dan mengadopsi praktik pertanian modern yang berkelanjutan. Dengan layanan kami, petani dapat lebih
                mudah mempromosikan produk mereka, menemukan mitra bisnis, dan mendapatkan investasi yang diperlukan
                untuk mengembangkan usaha pertanian mereka ke level berikutnya.
            </p>
        </div>
    </section>
</x-main-layout>
