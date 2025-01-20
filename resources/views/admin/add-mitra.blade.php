<x-admin.layout>
    <h1 class="text-3xl font-semibold">Add Mitra for {{ $petani->firstName }}</h1>
    <form class="mr-9 mt-6" action="/admin/kemitraan/add/{{ $petani->id }}" method="POST">
        @csrf
        <label for="mitra_id" class="block mb-2 text-sm font-medium text-gray-900">Select Investor:</label>
        <select
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
            name="mitra_id" id="mitra_id" required>
            <option value="" disabled selected>Choose an investor</option>
            @foreach ($mitras as $investor)
                <option value="{{ $investor->id }}">{{ $investor->name }} ({{ $investor->email }})</option>
            @endforeach
        </select>
        <button
            class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow mt-4"
            type="submit">Add Investor</button>
    </form>
</x-admin.layout>
