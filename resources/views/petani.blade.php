<x-main-layout>
    <x-slot:title>
        Petani
    </x-slot:title>
    <x-slot:user>
        {{ $user->id ?? '' }}
    </x-slot:user>

    <section class="min-h-screen flex flex-col w-full items-center">
        <h1 class="mt-10 text-4xl font-bold">Petani</h1>

        @if ($petani->isEmpty())
            <p class="mt-6 text-lg text-gray-500">No petani available.</p>
        @else
            <div class="mt-6 grid grid-cols-3 gap-4">
                @foreach ($petani as $p)
                    <div class="max-w-sm p-6 bg-[#1A5319] border border-gray-200 rounded-lg shadow">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-300">
                                {{ $p->petani->label }}
                            </h5>
                        </a>
                        <p class="text-gray-200">{{ Str::limit($p->petani->deskripsi ?? '-', 100, '...') }}</p>
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
                @endforeach
            </div>
        @endif
    </section>
</x-main-layout>
