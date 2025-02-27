<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | @yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            const sidebarTextElements = document.querySelectorAll('.sidebar-text');

            sidebar.classList.toggle('w-20');
            sidebar.classList.toggle('w-64');

            sidebarTextElements.forEach(text => {
                text.classList.toggle('hidden');
            });
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@heroicons/react@latest"></script>
</head>
<body class="bg-gray-50">
    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <aside id="sidebar" class="w-64 bg-white shadow-md h-screen p-5 transition-all duration-300">
            <h2 class="text-2xl font-semibold text-blue-700 mb-5 text-center sidebar-text">Pesisir Wedding</h2>
            <hr class="mb-5">
            <nav>
                <ul class="space-y-2">
                    <li>
                        <a href="{{ route('admin.dashboard') }}" wire:navigate class="block py-2 px-3 rounded-md bg-gray-100 flex items-center">
                            <span class="mr-2">🏠</span>
                            <span class="sidebar-text">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.pesanan') }}" wire:navigate class="block py-2 px-3 rounded-md hover:bg-gray-100 flex items-center">
                            <span class="mr-2">📦</span>
                            <span class="sidebar-text">Pesanan</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.pembayaran') }}" wire:navigate class="block py-2 px-3 rounded-md hover:bg-gray-100 flex items-center">
                            <span class="mr-2">💳</span>
                            <span class="sidebar-text">Pembayaran</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.user') }}" wire:navigate class="block py-2 px-3 rounded-md hover:bg-gray-100 flex items-center">
                            <span class="mr-2">👤</span>
                            <span class="sidebar-text">User</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.laporan') }}" wire:navigate class="block py-2 px-3 rounded-md hover:bg-gray-100 flex items-center">
                            <span class="mr-2">📊</span>
                            <span class="sidebar-text">Laporan</span>
                        </a>
                    </li>
                    <li>
                        <form action="{{ route('logout') }}" method="POST" class="block py-2 px-3 rounded-md hover:bg-gray-100 flex items-center">
                            @csrf
                            <button type="submit">
                                <span class="mr-2">🚪</span>
                                <span class="sidebar-text">Logout</span>
                            </button>
                        </form>
                    </li>
                </ul>
            </nav>
        </aside>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col">
            <!-- Header -->
            <header class="bg-white shadow-md p-4 flex justify-between items-center">
                <button onclick="toggleSidebar()" class="p-2 bg-gray-200 rounded-md">☰</button>
                <input type="text" placeholder="Search..." class="border px-3 py-2 rounded-md w-1/3">
                <div class="flex items-center space-x-4">
                    <button class="relative">
                        <span class="absolute top-0 right-0 bg-red-500 text-white text-xs rounded-full px-2">3</span>
                        🔔
                    </button>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="bg-gray-200 text-gray-700 px-4 py-2 rounded-md">Logout</button>
                    </form>
                </div>
            </header>

            <!-- Content -->
            <main class="p-6 flex-1">
                {{ $slot }}
            </main>
        </div>
    </div>

    @livewireScripts
</body>
</html>
