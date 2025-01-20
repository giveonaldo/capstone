<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Edit Profile</title>
</head>

<body class="w-screen h-screen flex items-center justify-center">
    <section class="flex flex-col gap-8 min-w-96 items-center">
        <h1 class="text-2xl font-semibold">Edit Profile</h1>

        <form action="/profile/{{ $user->id }}" method="POST" class="flex flex-col gap-4 w-full max-w-md">
            @csrf
            @method('PUT')

            <div class="flex flex-col gap-2">
                <label for="firstName" class="text-lg font-medium">First Name:</label>
                <input type="text" name="firstName" id="firstName" class="p-2 border rounded"
                    value="{{ old('firstName', $user->firstName) }}" required>
                @error('firstName')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex flex-col gap-2">
                <label for="lastName" class="text-lg font-medium">Last Name:</label>
                <input type="text" name="lastName" id="lastName" class="p-2 border rounded"
                    value="{{ old('lastName', $user->lastName) }}" required>
                @error('lastName')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex flex-col gap-2">
                <label for="email" class="text-lg font-medium">Email:</label>
                <input type="email" name="email" id="email" class="p-2 border rounded"
                    value="{{ old('email', $user->email) }}" required>
                @error('email')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex justify-between w-full">
                <a class="hover:underline text-blue-500" href="/profile/{{ $user->id }}">Cancel</a>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                    Save Changes
                </button>
            </div>
        </form>
    </section>

</body>

</html>
