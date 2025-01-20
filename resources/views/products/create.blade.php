<x-petani.layout>
    <x-slot:title>
        Product
    </x-slot:title>
    <x-slot:petani>
        {{ $petani->firstName }}
    </x-slot:petani>

    <section class="px-6 flex flex-col mx-6 my-4 py-5 border-2 border-gray-600 rounded-xl">
        <h1 class="text-2xl font-semibold mb-2">Create Products</h1>
        <p class="text-sm">Halaman membuat produk untuk petani.</p>
        <form class="mt-4 w-full" action="/petani/products/create" method="POST">
            @csrf
            <div class="w-full mt-2">
                <label for="product" class="block text-sm/6 font-medium text-gray-900">Nama Produk</label>
                <div class="mt-2">
                    <input type="text" name="product" id="product" placeholder="semangka" required
                        class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                </div>
            </div>
            <div class="flex gap-4 w-full mt-4">
                <div class="w-full">
                    <label for="quantity" class="block text-sm/6 font-medium text-gray-900">Quantity</label>
                    <div class="mt-2">
                        <input type="text" name="quantity" id="quantity" placeholder="400kg" required
                            class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                    </div>
                </div>
                <div class="w-full">
                    <label for="price" class="block text-sm/6 font-medium text-gray-900">Price</label>
                    <div class="mt-2">
                        <input type="text" name="price" id="price" placeholder="Rp. 12,000" required
                            class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                    </div>
                </div>
            </div>
            <button type="submit" class="bg-white mt-6 hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">Create</button>
        </form>
    </section>
</x-petani.layout>
