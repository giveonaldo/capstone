<x-layout>
    <x-slot:title>
        Admin Dashboard
    </x-slot:title>

    {{-- Show all petani table --}}
    <section class="flex flex-col">
        <div class="relative overflow-x-auto">
            <h1 class="text-3xl font-bold mb-2">Petani</h1>
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Nama
                        </th>
                        <th scope="col" class="px-6 py-3">
                            email
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Jenis Usaha
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Deskripsi
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <span class="sr-only">View</span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($petanis as $petani)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $petani->nama }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $petani->email }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $petani->jenis_usaha }}
                            </td>
                            <td class="px-6 py-4">
                                {{ Str::limit($petani->deskripsi, 80, '...') }}
                            </td>
                            <td class="px-6 py-4 text-right">
                                <a href="/petani/profile/{{ $petani->id }}"
                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline">View</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="mt-4">
                {{ $petanis->links() }}
            </div>
        </div>
    </section>

    {{-- Show all Investor table --}}
    <section class="mt-8">
        <div class="relative overflow-x-auto">
            <h1 class="text-3xl font-bold mb-2">Investor</h1>
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Nama
                        </th>
                        <th scope="col" class="px-6 py-3">
                            email
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Saldo
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Alamat
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <span class="sr-only">View</span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($investors as $investor)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $investor->nama }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $investor->email }}
                            </td>
                            <td class="px-6 py-4">
                                Rp.{{ number_format($investor->saldo, 2) }}
                            </td>
                            <td class="px-6 py-4">
                                {{ Str::limit($investor->alamat, 80, '...') }}
                            </td>
                            <td class="px-6 py-4 text-right">
                                <a href="/petani/profile/{{ $petani->id }}"
                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline">View</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="mt-4">
                {{ $investors->links() }}
            </div>
        </div>
    </section>
</x-layout>
