<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="icon" type="image/x-icon" href="{{ asset('images/logo.png') }}">
    <title>{{ $title }}</title>
</head>
<body class="relative">
    <x-navbar>
        <x-slot:id>
            {{ $user }}
        </x-slot:id>
    </x-navbar>
    {{ $slot }}
    <x-footer/>
</body>
</html>