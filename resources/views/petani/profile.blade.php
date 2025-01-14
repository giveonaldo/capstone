<x-petani.layout>
    <x-slot:title>
        Petani Dashboard
    </x-slot:title>
    <x-slot:petani>
        {{ $petani->firstName }}
    </x-slot:petani>

    <section class="px-10 pt-5">
        <div class="flex flex-col gap-3">
            <h1 class="ml-2 text-xl font-semibold text-green-900">Profile Information</h1>
            <div class="border-2 border-green-400 rounded-xl px-5 py-4">
                <p><span class="font-semibold">First Name : </span> {{ $petani->firstName }}</p>
                <p><span class="font-semibold">Last Name : </span> {{ $petani->lastName }}</p>
                <p><span class="font-semibold">Email : </span> {{ $petani->email }}</p>
            </div>
        </div>
        <div class="mt-7">
            <h1 class="ml-2 mb-3 text-xl font-semibold text-green-900">Detail Information</h1>
            <div class="border-2 border-green-400 rounded-xl px-5 py-4">

                {{-- Nomor Telpon dan Luas Lahan --}}
                <div class="grid grid-cols-2 gap-3">
                    <div class="w-full">
                        <label for="nomor_telpon" class="block text-sm/6 font-medium text-gray-900">Nomor Telpon</label>
                        <div class="mt-2">
                            <input type="text" name="nomor_telpon" id="nomor_telpon" placeholder="082142761257" required
                                class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                        </div>
                    </div>
                    <div class="w-full">
                        <label for="luas_lahan" class="block text-sm/6 font-medium text-gray-900">Luas Lahan</label>
                        <div class="mt-2">
                            <input type="text" name="luas_lahan" id="luas_lahan" placeholder="3 hektare" required
                                class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                        </div>
                    </div>
                </div>

                {{-- Jenis Usaha dan Akun Bank --}}
                <div class="grid grid-cols-2 gap-3 mt-4">
                    <div class="w-full">
                        <label for="jenis_usaha" class="block text-sm/6 font-medium text-gray-900">Jenis Usaha</label>
                        <div class="mt-2">
                            <input type="text" name="jenis_usaha" id="jenis_usaha" placeholder="Greenhouse" required
                                class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                        </div>
                    </div>
                    <div class="w-full">
                        <label for="akun_bank" class="block text-sm/6 font-medium text-gray-900">Akun Bank</label>
                        <div class="mt-2">
                            <input type="text" name="akun_bank" id="akun_bank" placeholder="Joko Wididi" required
                                class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                        </div>
                    </div>
                </div>

                {{-- Address and Description --}}
                <div class="grid grid-cols-2 gap-3 mt-4">
                    <div class="mt-3">
                        <label class="block mb-2 text-sm font-medium text-gray-900" for="deskripsi">Deskripsi</label>
                        <textarea name="deskripsi" id="deskripsi" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Deskripsi usaha/bisnis anda..."></textarea>
                    </div>
                    <div class="mt-3">
                        <label class="block mb-2 text-sm font-medium text-gray-900" for="alamat">Alamat</label>
                        <textarea name="alamat" id="alamat" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Alamat usaha/bisnis anda..."></textarea>
                    </div>
                </div>

                <button type="submit" class="bg-white mt-6 hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">Submit</button>
            </div>
        </div>
    </section>
</x-petani.layout>
