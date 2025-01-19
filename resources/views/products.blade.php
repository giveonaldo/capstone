<x-main-layout>
    <x-slot:title>
        Products
    </x-slot:title>
    <x-slot:user>
        {{ $user->id ?? '' }}
    </x-slot:user>

    <section class="min-h-screen flex flex-col items-center p-10">
        <h1 class="text-4xl font-semibold mb-10">Product from Petani</h1>
        <div class="grid grid-cols-4 justify-items-center gap-6 w-full mb-10">
            @if ($products->isEmpty())
                <p class="mt-6 text-lg text-gray-500">No products available.</p>
            @else
                @foreach ($products as $product)
                    <div class="overflow-hidden p-4 border-2 border-green-500 rounded-xl h-fit flex flex-col gap-y-4">
                        <img class="w-60 object-cover border-2 border-green-300 rounded-xl"
                            src="{{ asset('images/bumn.png') }}" alt="products pictures">
                        <div class="flex justify-between items-center">
                            <h1 class="text-2xl font-semibold">{{ $product->product }}</h1>
                            <p class="text-gray-500 text-sm">{{ $product->user->petani->label }}</p>
                        </div>
                        <p class="text-3xl">Rp. {{ number_format($product->price, 0) }}/kg</p>
                        <a class="w-fit border-2 border-blue-400 px-10 mt-4 py-1 font-medium  mx-auto rounded-xl hover:bg-blue-300"
                            href="">See more</a>
                    </div>
                @endforeach
            @endif
        </div>
        <div>
            {{ $products->links() }}
        </div>
    </section>
</x-main-layout>
