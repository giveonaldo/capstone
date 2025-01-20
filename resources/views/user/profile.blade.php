<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>User Profile</title>
</head>
<body class="w-screen h-screen flex items-center justify-center">
    <section class="flex flex-col gap-8 min-w-96 items-center">
        <h1 class="text-2xl font-semibold">Your Profile</h1>
        <div class="font-sans text-lg">
            <p>Nama : {{ $user->firstName }} {{ $user->lastName }}</p>
            <p>Email : {{ $user->email }}</p>
        </div>
        <div class="text-xl flex justify-between w-full">
            <a class="hover:underline" href="/">Back</a>
            <form action="/logout" method="POST" class="inline">
                @csrf
                <button type="submit" class="hover:underline text-red-500">Logout</button>
            </form>
            <a class="hover:underline" href="/profile/{{ $user->id }}/edit">Edit Profile?</a>
        </div>
    </section>
</body>
</html>