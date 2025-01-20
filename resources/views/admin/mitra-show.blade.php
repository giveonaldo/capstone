<x-admin.layout>
    <section class="flex w-full gap-4 pr-10">
        <div class="flex flex-col gap-2">
            <h1 class="text-2xl font-semibold">{{ $mitra->name }}</h1>
            <p class="text-ls"><span class="font-medium">Valuasi : </span>{{ $mitra->valuasi }}</p>
            <p class="text-ls"><span class="font-medium">Status : </span>{{ $mitra->status }}</p>
        </div>
        <img class="object-cover w-96 h-60 ml-auto" src="{{ Vite::asset('resources/images/chandra.jpg') }}" alt="foto perusahaan">
    </section>

    <section class="mt-8 w-[85%]">
        <h1 class="text-xl font-semibold">Deskripsi</h1>
        <p>{{ $mitra->deskripsi }}</p>
    </section>
</x-admin-.layout>