<x-petani.layout>
    <x-slot:title>
        Petani Dashboard
    </x-slot:title>
    <x-slot:petani>
        {{ $petani->firstName }}
    </x-slot:petani>
    <x-slot:id>{{ $petani->id }}</x-slot:id>

    <section class="px-12 pt-8">
        <div class="border-2 border-green-500 rounded-xl px-7 py-6">
            <h1 class="text-2xl font-semibold">Petani Profile</h1>
            <div class="grid grid-cols-2 mt-4 gap-2 ml-3">
                <p><span class="font-medium">Nama : </span>{{ $petani->firstName }} {{ $petani->lastName }}</p>
                <p><span class="font-medium">Email : </span>{{ $petani->email }}</p>
                <p><span class="font-medium">Jenis Usaha : </span>{{ $petani->petani->jenis_usaha ?? '-' }}</p>
                <p><span class="font-medium">No Telpon : </span>{{ $petani->petani->nomor_telpon ?? '-' }}</p>
                <p><span class="font-medium">Luas Lahan : </span>{{ $petani->petani->luas_lahan ?? '-' }}</p>
            </div>
        </div>
        <div class="border-2 mt-8 border-green-400 rounded-xl w-[50%] px-7 py-6">
            <h1 class="text-2xl font-semibold">Alamat</h1>
            <p class="mt-2">{{ $petani->petani->alamat ?? '-'}}</p>
        </div>
        <div class="mt-8 pl-6">
            <h1 class="text-2xl font-semibold">Deskripsi</h1>
            <p class="mt-2">{{ $petani->petani->deskripsi ?? '-'}}</p>
        </div>
    </section>
</x-petani.layout>