<x-admin.layout>
    <section class="flex items-center mt-10">
        <img class="w-48 h-48 rounded-full object-cover border-2 mr-10" src="{{ Vite::asset('resources/images/bumn.png') }}" alt="picture profile petani">
        <div class="flex flex-col gap-1">
            <p><span class="font-medium mr-3">Nama : </span>{{ $petani->firstName }} {{ $petani->lastName }}</p>
            <p><span class="font-medium mr-3">Email : </span>{{ $petani->email }}</p>
            <p><span class="font-medium mr-3">No Telpon : </span>{{ $petani->petani->nomor_telpon }}</p>
        </div>
    </section>

    <section class="mt-10 flex flex-col gap-2">
        <h1 class="text-2xl font-semibold">{{ $petani->petani->label }}</h1>
        <div class="flex justify-between w-[50%]">
            <p><span class="font-medium">Luas Lahan : </span>{{ $petani->petani->luas_lahan }}</p>
            <p><span class="font-medium">Jenis Usaha : </span>{{ $petani->petani->jenis_usaha }}</p>
        </div>
        <p class="w-[40%]"><span class="font-medium">Alamat : </span>{{ $petani->petani->alamat }}</p>
    </section>

    <section class="mt-8 flex flex-col gap-2">
        <h1 class="text-xl font-semibold">Deskripsi</h1>
        <p class="w-[55%] text-sm">{{ $petani->petani->deskripsi }}</p>
    </section>
</x-admin.layout> 