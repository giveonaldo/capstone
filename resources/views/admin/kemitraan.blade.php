<x-admin.layout>
    <h1 class="text-xl font-semibold">Page kemitraan</h1>
    <div class="pr-8">
        <table class="w-full text-sm text-left rtl:text-right mt-10 mb-6 text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                <tr class="border-b">
                    <th scope="col" class="px-6 py-3">No</th>
                    <th scope="col" class="px-6 py-3">Nama Petani</th>
                    <th scope="col" class="px-6 py-3">Jumlah Mitra</th>
                    <th scope="col" class="px-6 py-3">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($petanis as $petani)
                    <tr class="bg-white border-b">
                        <td class="px-6 py-4">{{ $petani->id }}</td>
                        <td class="px-6 py-4">{{ $petani->firstName }}</td>
                        <td class="px-6 py-4">{{ $petani->mitra->count() }}</td>
                        <td class="px-6 py-4"><a class="hover:underline" href="/admin/kemitraan/{{ $petani->id }}">View</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-admin.layout>
