<x-admin.layout>
    <h1 class="text-xl font-semibold">Membuat mitra investor baru.</h1>
    <hr class="w-[95%] my-2">
    <form class="mt-6" action="/admin/kemitraan/create" method="POST">
        @csrf
        <div class="mr-9">
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 ">Name</label>
            <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" type="text" name="name" id="name" placeholder="PT. Bangunjiwo" required>
        </div>
        <div class="mt-3 mr-9">
            <label class="block mb-2 text-sm font-medium text-gray-900" for="deskripsi">Deskripsi</label>
            <textarea name="deskripsi" id="deskripsi" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Deskripsi perusahaan anda..."></textarea>
        </div>
        <div class="mt-3 mr-9">
            <label for="valuasi" class="block mb-2 text-sm font-medium text-gray-900 ">Valuasi</label>
            <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" type="text" name="valuasi" id="valuasi" placeholder="2 miliar" required>
        </div>
        <div class="mt-3 mr-9">
            <label for="status" class="block mb-2 text-sm font-medium text-gray-900 ">Status</label>
            <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" type="text" name="status" id="status" placeholder="Aktif" required>
        </div>
        <button type="submit" class="bg-white mt-6 hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">Create Mitra</button>
    </form>
</x-admin.layout>