<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>{{ $title }}</title>
</head>

<body>
    <x-side-bar></x-side-bar>
    <div class="ml-[17rem] my-2 min-h-screen mr-4">
        {{ $slot }}
    </div>
</body>

</html>
