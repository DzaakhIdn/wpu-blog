<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="h-full">
    <div class="min-h-full">
        {{-- Navbar --}}
        <x-nav />

        {{-- Header --}}
        <x-header :title="$title" />

        {{-- Layout Props --}}
        <main>
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                {{ $slot }}
            </div>
        </main>

        <x-footer />
    </div>
</body>

</html>
