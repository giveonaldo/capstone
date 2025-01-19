<x-admin.layout>
    <h1 class="text-xl mt-6 font-semibold ml-4">List Of All Petani</h1>
    <div class="pr-8">
        <table class="w-full text-sm text-left rtl:text-right mt-4 mb-6 text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                <tr class="border-b">
                    <th scope="col" class="px-6 py-3">Nama</th>
                    <th scope="col" class="px-6 py-3">Email</th>
                    <th scope="col" class="px-6 py-3">Products</th>
                    <th scope="col" class="px-6 py-3">Type</th>
                    <th scope="col" class="px-6 py-3">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($petanis as $petani)
                    <tr class="bg-white border-b">
                        <td class="px-6 py-4">{{ $petani->firstName }}</td>
                        <td class="px-6 py-4">{{ $petani->email }}</td>
                        <td class="px-6 py-4">{{ $petani->products->count() }}</td>
                        <td class="px-6 py-4">{{ $petani->petani->jenis_usaha ?? '-' }}</td>
                        <td class="px-6 py-4 flex gap-2">
                            <a class="hover:underline hover:text-green-700" href="/admin/petani/{{ $petani->id }}">View</a>/
                            <form action="/admin/petani/destroy/{{ $petani->id }}" method="POST">
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
            {{ $petanis->links() }}
        </div>
    </div>
</x-admin.layout>