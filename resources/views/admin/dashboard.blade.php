<x-admin.layout>
    <section class="mb-6">
        <h1 class="text-3xl font-semibold">Welcome Administrator</h1>
        <p class="mt-2 ml-2">Here you have all access to your app.</p>
    </section>

    <section class="mr-8">
        <h1 class="text-2xl">List of All User</h1>
        <table class="text-sm w-full text-left rtl:text-right mt-10 mb-6 text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                <tr class="border-b">
                    <th scope="col" class="px-6 py-3">No</th>
                    <th scope="col" class="px-6 py-3">Nama</th>
                    <th scope="col" class="px-6 py-3">Email</th>
                    <th scope="col" class="px-6 py-3">Role</th>
                    <th scope="col" class="px-6 py-3">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr class="bg-white border-b">
                        <td class="px-6 py-4">{{ $loop->iteration }}</td>
                        <td class="px-6 py-4">{{ $user->firstName }} {{ $user->lastName }}</td>
                        <td class="px-6 py-4">{{ $user->email }}</td>
                        <td class="px-6 py-4">{{ $user->role->name ?? 'user' }}</td>
                        <td class="px-6 py-4 flex gap-2">
                            <a href="" class="hover:underline">View</a>/
                            <form action="" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="text-red-500 hover:underline" type="submit">Remove</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>

    <section class="mt-10 mr-8">
        <h1 class="text-2xl">List of All Products from Petani</h1>
        <table class="text-sm w-full text-left rtl:text-right mt-10 mb-6 text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                <tr class="border-b">
                    <th scope="col" class="px-6 py-3">No</th>
                    <th scope="col" class="px-6 py-3">Nama Produk</th>
                    <th scope="col" class="px-6 py-3">Petani</th>
                    <th scope="col" class="px-6 py-3">Lokasi</th>
                    <th scope="col" class="px-6 py-3">Harga/kg</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr class="bg-white border-b">
                        <td class="px-6 py-4">{{ $loop->iteration }}</td>
                        <td class="px-6 py-4">{{ $product->product }}</td>
                        <td class="px-6 py-4">{{ $product->user->petani->label }}</td>
                        <td class="px-6 py-4">{{ Str::limit($product->user->petani->alamat, 50, '...') }}</td>
                        <td class="px-6 py-4">Rp. {{ number_format($product->price, 2) }}/kg</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>

    <section class="mt-10 mb-14 mr-8">
        <h1 class="text-2xl">List listed Investor</h1>
        <table class="text-sm w-full text-left rtl:text-right mt-10 mb-6 text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                <tr class="border-b">
                    <th scope="col" class="px-6 py-3">No</th>
                    <th scope="col" class="px-6 py-3">Nama</th>
                    <th scope="col" class="px-6 py-3">Mitra Petani</th>
                    <th scope="col" class="px-6 py-3">Status</th>
                    <th scope="col" class="px-6 py-3">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mitras as $mitra)
                    <tr class="bg-white border-b">
                        <td class="px-6 py-4">{{ $loop->iteration }}</td>
                        <td class="px-6 py-4">{{ $mitra->name }}</td>
                        <td class="px-6 py-4">{{ $mitra->user->count() }}</td>
                        <td class="px-6 py-4">{{ $mitra->status }}</td>
                        <td>
                            <a class="hover:underline" href="">View</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
</x-admin.layout>
