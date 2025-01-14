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
            <div class="border-2 border-gray-300 px-4 pb-4 pt-3 rounded-xl">
                <img class="w-28 mb-2 h-28 object-cover" src="{{ Vite::asset('resources/images/bumn.png') }}" alt="pt">
                <div class="text-xs">
                    <p><b>Bisnis / Perusahaan :</b> Kementrian Badan Usaha Milik Negara Republik Indonesia</p>
                    <p><b>Bergabung :</b> 20 Juni 2022</p>
                    <p><b>Kontrak :</b> 4 tahun 3 bulan</p>
                </div>
            </div>
            <div class="border-2 border-gray-300 px-4 pb-4 pt-3 rounded-xl">
                <img class="w-28 mb-2 h-28 object-cover" src="{{ Vite::asset('resources/images/pupr.png') }}" alt="pt">
                <div class="text-xs">
                    <p><b>Bisnis / Perusahaan :</b> Kementrian Pekerjaan Umum dan Perumahan Rakyat Republik Indonesia</p>
                    <p><b>Bergabung :</b> 11 September 2021</p>
                    <p><b>Kontrak :</b> 2 tahun 6 bulan</p>
                </div>
            </div>
            <div class="border-2 border-gray-300 px-4 pb-4 pt-3 rounded-xl">
                <img class="w-28 mb-2 h-28 object-cover" src="{{ Vite::asset('resources/images/keuangan.png') }}" alt="pt">
                <div class="text-xs">
                    <p><b>Bisnis / Perusahaan :</b> Kementrian Pekerjaan Umum dan Perumahan Rakyat Republik Indonesia</p>
                    <p><b>Bergabung :</b> 11 September 2021</p>
                    <p><b>Kontrak :</b> 2 tahun 6 bulan</p>
                </div>
            </div>
        </div>
    </section>
</x-petani.layout>