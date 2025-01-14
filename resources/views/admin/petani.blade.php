<x-admin.layout>
    <div class="flex justify-between items-center pl-4 pr-8">
        <h1 class="text-2xl font-bold">{{ $petani->firstName }} Partnership</h1>
        <a class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow"
            href="/admin/kemitraan/add/{{ $petani->id }}">Add Mitra</a>
    </div>
    <div class="pr-8">
        <table class="w-full text-sm text-left rtl:text-right mt-10 mb-6 text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                <tr class="border-b">
                    <th scope="col" class="px-6 py-3">No</th>
                    <th scope="col" class="px-6 py-3">Nama Mitra</th>
                    <th scope="col" class="px-6 py-3">Deskripsi</th>
                    <th scope="col" class="px-6 py-3">Status</th>
                    <th scope="col" class="px-6 py-3">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($investors as $investor)
                    <tr class="bg-white border-b">
                        <td class="px-6 py-4">{{ $investor->id }}</td>
                        <td class="px-6 py-4">{{ $investor->name }}</td>
                        <td class="px-6 py-4">{{ Str::limit($investor->deskripsi, 100, '...') }}</td>
                        <td class="px-6 py-4">{{ $investor->status }}</td>
                        <td class="px-6 py-4">
                            <form action="/admin/kemitraan/remove/{{ $petani->id }}/{{ $investor->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="hover:underline hover:text-red-600" type="submit">Remove</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div>
            {{ $investors->links() }}
        </div>
    </div>
</x-admin.layout>
