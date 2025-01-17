<x-petani.layout>
    <x-slot:title>
        Partnership
    </x-slot:title>
    <x-slot:petani>
        {{ $petani->firstName }}
    </x-slot:petani>
    <x-slot:id>{{ $petani->id }}</x-slot:id>

    <section class="px-10 py-5">
        <h1 class="text-2xl font-bold">Partnership</h1>
        <div class="grid grid-cols-3 gap-4 mt-6">
            @if ($mitras->isEmpty())
                <p>No Mitra with {{ $petani->firstName }} {{ $petani->lastName }}</p>
            @else
                @foreach ($mitras as $mitra)
                    <div class="border-2 border-gray-300 px-4 pb-4 pt-3 rounded-xl">
                        {{-- <img class="w-28 mb-2 h-28 object-cover" src="{{ Vite::asset('resources/images/bumn.png') }}"
                            alt="pt"> --}}
                        <div class="text-xs">
                            <p class="text-lg mb-2">{{ $mitra->name }}</p>
                            <p><b>Deskripsi Perusahaan :</b> {{  Str::limit($mitra->deskripsi, 150, '...') }}</p>
                            <p><b>Status kemitraan :</b> {{  $mitra->status }}</p>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </section>
</x-petani.layout>
