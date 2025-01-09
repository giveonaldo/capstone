<x-petani.layout>
    <x-slot:title>
        Product
    </x-slot:title>
    <x-slot:petani>
        {{ $petani->firstName }}
    </x-slot:petani>

    <section class="px-6 flex flex-col mx-6 my-4 py-5 border-2 border-gray-600 rounded-xl">
        <div class="flex justify-between items-center">
            <div>
                <h1 class="text-2xl font-semibold">Product</h1>
                <p>List dari produk petani</p>
            </div>
            <a href="/petani/products/create" class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">Create Product</a>
        </div>
        <table class="w-full text-sm text-left rtl:text-right mt-10 mb-6 text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                <tr class="border-b">
                    <th scope="col" class="px-6 py-3">No</th>
                    <th scope="col" class="px-6 py-3">Nama Produk</th>
                    <th scope="col" class="px-6 py-3">Quantity</th>
                    <th scope="col" class="px-6 py-3">Price/kg</th>
                    <th scope="col" class="px-6 py-3">Date</th>
                    <th scope="col" class="px-6 py-3">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                <tr class="bg-white border-b">
                    <td class="px-6 py-4">{{ $product->id }}</td>
                    <td class="px-6 py-4">{{ $product->product }}</td>
                    <td class="px-6 py-4">{{ $product->quantity }}Kg</td>
                    <td class="px-6 py-4">Rp. {{ number_format($product->price, 2) }}/kg</td>
                    <td class="px-6 py-4">{{ $product->created_at->format('d-m-Y') }}</td>
                    <td class="px-6 py-4 flex gap-2">
                        <a href="/">Edit</a> / 
                        <form action="/petani/product/{{ $product->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="hover:underline text-red-700" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $products->links() }}
    </section>
</x-petani.layout>
