<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PesisirWedding | @yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body>
    <div class="min-h-screen flex flex-col">
        <!-- Main Content -->
        <main>
            {{ $slot }}
        </main>
    </div>

    @livewireScripts
</body>
</html>
