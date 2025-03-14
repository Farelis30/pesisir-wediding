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

        function toggleDropdown(type) {
            const articleDropdown = document.getElementById('articleDropdown');
            const bannerDropdown = document.getElementById('bannerDropdown');
            const userDropdown = document.getElementById('userDropdown');
            const articleIcon = document.getElementById('dropdownIconArticle');
            const bannerIcon = document.getElementById('dropdownIconBanner');
            const userIcon = document.getElementById('dropdownIconUser');

            if (type === 'article') {
                // Toggle artikel dropdown
                articleDropdown.classList.toggle('hidden');
                articleDropdown.classList.toggle('opacity-100');
                articleDropdown.classList.toggle('scale-y-100');
                articleIcon.classList.toggle('rotate-90');
            } else if (type === 'banner') {
                // Toggle banner dropdown
                bannerDropdown.classList.toggle('hidden');
                bannerDropdown.classList.toggle('opacity-100');
                bannerDropdown.classList.toggle('scale-y-100');
                bannerIcon.classList.toggle('rotate-90');
            }else if (type === 'user') {
                // Toggle user dropdown
                userDropdown.classList.toggle('hidden');
                userDropdown.classList.toggle('opacity-100');
                userDropdown.classList.toggle('scale-y-100');
                userIcon.classList.toggle('rotate-90');
            }
        }
    </script>
    <!-- Font Awesome CDN -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50">
    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <aside id="sidebar" class="rounded-tr-3xl w-64 bg-gradient-to-r from-pink-600 to-pink-500 shadow-md p-5 transition-all duration-300">
            <h2 class="text-2xl font-semibold text-white mb-5 text-center sidebar-text">Pesisir Wedding</h2>
            <hr class="border-gray-50 mb-2 opacity-50">
            <nav>
                <ul class="space-y-2">
                    <li class="mb-4">
                        <a href="{{ route('admin.dashboard') }}" wire:navigate class="block py-2 px-3 rounded-md text-white hover:bg-pink-500 flex items-center transition-colors duration-200 mb-2">
                            <i class="fas fa-home mr-2"></i>
                            <span class="sidebar-text">Dashboard</span>
                        </a>
                        <hr class="border-gray-50 mb-2 opacity-50">
                    </li>
                    <li class="relative">
                        <button onclick="toggleDropdown('article')" class="w-full text-left block py-2 px-3 rounded-md text-white hover:bg-pink-500 flex items-center transition-colors duration-200">
                            <i class="fas fa-newspaper mr-2"></i>
                            <span class="sidebar-text">Artikel</span>
                            <i id="dropdownIconArticle" class="fas fa-chevron-right ml-auto transition-transform duration-300"></i>
                        </button>
                        <ul id="articleDropdown" class="hidden opacity-0 transform scale-y-0 origin-top transition-all duration-300 mt-2 space-y-1 pl-4">
                            <li>
                                <a href="{{ route('admin.articles.index') }}" wire:navigate class="block py-2 px-3 rounded-md text-white hover:bg-pink-500 transition-colors duration-200 text-sm">
                                    Data Artikel
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.articles.create') }}" wire:navigate class="block py-2 px-3 rounded-md text-white hover:bg-pink-500 transition-colors duration-200 text-sm">
                                    Tambah Artikel
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="relative">
                        <button onclick="toggleDropdown('banner')" class="w-full text-left block py-2 px-3 rounded-md text-white hover:bg-pink-500 flex items-center transition-colors duration-200">
                            <i class="fas fa-bullhorn mr-2"></i>
                            <span class="sidebar-text">Banner</span>
                            <i id="dropdownIconBanner" class="fas fa-chevron-right ml-auto transition-transform duration-300"></i>
                        </button>
                        <ul id="bannerDropdown" class="hidden opacity-0 transform scale-y-0 origin-top transition-all duration-300 mt-2 space-y-1 pl-4">
                            <li>
                                <a href="{{ route('admin.banners.index') }}" wire:navigate class="block py-2 px-3 rounded-md text-white hover:bg-pink-500 transition-colors duration-200">
                                    Data Banner
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.banners.create') }}" wire:navigate class="block py-2 px-3 rounded-md text-white hover:bg-pink-500 transition-colors duration-200">
                                    Tambah Banner
                                </a>
                            </li>
                        </ul>
                    </li>
                    {{-- <li class="relative">
                        <button onclick="toggleDropdown('user')" class="w-full text-left block py-2 px-3 rounded-md text-white hover:bg-pink-500 flex items-center transition-colors duration-200">
                            <i class="fas fa-bullhorn mr-2"></i>
                            <span class="sidebar-text">User</span>
                            <i id="dropdownIconUser" class="fas fa-chevron-right ml-auto transition-transform duration-300"></i>
                        </button>
                        <ul id="userDropdown" class="hidden opacity-0 transform scale-y-0 origin-top transition-all duration-300 mt-2 space-y-1 pl-4">
                            <li>
                                <a href="{{ route('admin.users.index') }}" wire:navigate class="block py-2 px-3 rounded-md text-white hover:bg-pink-500 transition-colors duration-200">
                                    Data User
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.users.create') }}" wire:navigate class="block py-2 px-3 rounded-md text-white hover:bg-pink-500 transition-colors duration-200">
                                    Tambah User
                                </a>
                            </li>
                        </ul>
                    </li> --}}
                    {{-- <li>
                        <a href="{{ route('admin.pesanan') }}" wire:navigate class="block py-2 px-3 rounded-md text-white hover:bg-pink-500 flex items-center transition-colors duration-200">
                            <i class="fas fa-box mr-2"></i>
                            <span class="sidebar-text">Pesanan</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.pembayaran') }}" wire:navigate class="block py-2 px-3 rounded-md text-white hover:bg-pink-500 flex items-center transition-colors duration-200">
                            <i class="fas fa-credit-card mr-2"></i>
                            <span class="sidebar-text">Pembayaran</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.user') }}" wire:navigate class="block py-2 px-3 rounded-md text-white hover:bg-pink-500 flex items-center transition-colors duration-200">
                            <i class="fas fa-user mr-2"></i>
                            <span class="sidebar-text">User</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.laporan') }}" wire:navigate class="block py-2 px-3 rounded-md text-white hover:bg-pink-500 flex items-center transition-colors duration-200">
                            <i class="fas fa-chart-bar mr-2"></i>
                            <span class="sidebar-text">Laporan</span>
                        </a>
                    </li> --}}
                </ul>
            </nav>
        </aside>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col">
            <!-- Header -->
            <header class="bg-white p-4 flex justify-between items-center shadow-sm border-b">
                <button onclick="toggleSidebar()" class="p-2 bg-gray-200 rounded-md"><i class="fas fa-bars"></i></button>
                <input type="text" placeholder="Search..." class="border px-3 py-2 rounded-md w-1/3">
                <div class="flex items-center space-x-4">
                    <button class="relative">
                        <span class="absolute top-0 right-0 bg-red-500 text-white text-xs rounded-full px-2">3</span>
                        <i class="fas fa-bell"></i>
                    </button>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="bg-gray-200 text-gray-700 px-4 py-2 rounded-md">Logout</button>
                    </form>
                </div>
            </header>

            <!-- Header -->
            <div class="px-8 py-4">
                {{ $header }}
                <hr class="mt-4">
            </div>

            <!-- Content -->
            <main class="container flex-1 rounded bg-gray-50">
                {{ $slot }}
            </main>
            <!-- Footer -->
            <footer class="bg-white shadow-sm border-t p-4 text-center text-gray-600 mt-4">
                <p>&copy; 2025 Pesisir Wedding. All rights reserved.</p>
            </footer>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @livewireScripts
</body>
</html>
