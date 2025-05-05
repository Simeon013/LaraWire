<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>{{ $title ?? 'Todo App' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="bg-gray-100 text-gray-900 antialiased">
    <div class="container mx-auto py-10">
        {{ $slot }}
    </div>

    @livewireScripts
</body>
</html>
