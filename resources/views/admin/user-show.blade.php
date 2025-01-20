<x-admin.layout>
    <section>
        <h1 class="text-2xl font-semibold mb-3">User Information</h1>
        <p><span class="font-medium">Name : </span>{{ $user->firstName }} {{ $user->lastName }}</p>
        <p><span class="font-medium">Email : </span>{{ $user->email }}</p>
    </section>
</x-admin.layout>