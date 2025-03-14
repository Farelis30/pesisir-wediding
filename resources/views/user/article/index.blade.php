<x-layouts.app>
@section('title', 'Artikel')
<div class="min-h-screen flex flex-col">
    <livewire:welcome-navbar />

    <!-- Hero Section -->
    <div class="relative bg-cover bg-center h-screen" style="background-image: url('https://images.unsplash.com/photo-1511795409834-ef04bbd61622?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1920&q=80');">
        <div class="absolute inset-0 bg-black bg-opacity-50"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-full flex flex-col justify-center">
            <div class="text-center">
                <h1 class="text-4xl md:text-6xl font-serif text-white mb-6">Artikel Terbaru</h1>
                <p class="text-xl text-white mb-8 max-w-3xl mx-auto">Temukan tips, inspirasi, dan panduan terbaru untuk merencanakan pernikahan impian Anda.</p>
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <!-- Hapus atau komentari tombol "Lihat Semua Artikel" -->
                    <!-- <a href="/artikel" class="inline-block px-8 py-4 rounded-md bg-pink-600 text-white font-medium hover:bg-pink-700 transition-colors">Lihat Semua Artikel</a> -->
                    <a href="/konsultasi" class="inline-block px-8 py-4 rounded-md bg-white text-pink-600 font-medium hover:bg-gray-100 transition-colors">Konsultasi Gratis</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Artikel Section -->
    <div class="py-16 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Artikel 1 -->
            <div class="bg-white rounded-lg overflow-hidden shadow-md transition-transform hover:transform hover:scale-105 mb-12">
                <a href="/artikel/tips-memilih-venue">
                    <img src="https://images.unsplash.com/photo-1519225421980-715cb0215aed?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" alt="Blog Post" class="w-full h-96 object-cover">
                    <div class="p-8">
                        <div class="flex items-center mb-4">
                            <span class="bg-pink-100 text-pink-800 text-xs px-2 py-1 rounded">Tips</span>
                            <span class="text-gray-500 text-sm ml-2">8 Februari 2024</span>
                        </div>
                        <h3 class="text-3xl font-semibold mb-4">10 Tips Memilih Venue Pernikahan Yang Tepat</h3>
                        <p class="text-gray-600 mb-6">Panduan lengkap memilih venue pernikahan yang sesuai dengan konsep, budget, dan jumlah tamu Anda. Temukan tips dari para ahli untuk memastikan hari spesial Anda berjalan sempurna.</p>
                        <div class="flex items-center">
                            <img src="https://randomuser.me/api/portraits/women/42.jpg" alt="Author" class="w-10 h-10 rounded-full mr-3">
                            <span class="text-sm text-gray-600">Oleh Siska Amelia</span>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Artikel 2 -->
            <div class="bg-white rounded-lg overflow-hidden shadow-md transition-transform hover:transform hover:scale-105 mb-12">
                <a href="/artikel/tren-pernikahan-2024">
                    <img src="https://plus.unsplash.com/premium_photo-1704830496175-523990edbc4a?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8d2VkZGluZyUyMHRyZW5kfGVufDB8fDB8fHww" alt="Blog Post" class="w-full h-96 object-cover">
                    <div class="p-8">
                        <div class="flex items-center mb-4">
                            <span class="bg-pink-100 text-pink-800 text-xs px-2 py-1 rounded">Tren</span>
                            <span class="text-gray-500 text-sm ml-2">14 Januari 2024</span>
                        </div>
                        <h3 class="text-3xl font-semibold mb-4">Tren Pernikahan 2024 yang Wajib Diketahui</h3>
                        <p class="text-gray-600 mb-6">Temukan tren terbaru seputar dekorasi, warna, dan konsep pernikahan yang akan populer di tahun 2024. Dapatkan inspirasi untuk membuat pernikahan Anda lebih istimewa.</p>
                        <div class="flex items-center">
                            <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Author" class="w-10 h-10 rounded-full mr-3">
                            <span class="text-sm text-gray-600">Oleh Ricky Harun</span>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Artikel 3 -->
            <div class="bg-white rounded-lg overflow-hidden shadow-md transition-transform hover:transform hover:scale-105 mb-12">
                <a href="/artikel/tips-manajemen-budget">
                    <img src="https://images.unsplash.com/photo-1556742031-c6961e8560b0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" alt="Blog Post" class="w-full h-96 object-cover">
                    <div class="p-8">
                        <div class="flex items-center mb-4">
                            <span class="bg-pink-100 text-pink-800 text-xs px-2 py-1 rounded">Budget</span>
                            <span class="text-gray-500 text-sm ml-2">5 Januari 2024</span>
                        </div>
                        <h3 class="text-3xl font-semibold mb-4">Cara Efektif Mengelola Budget Pernikahan</h3>
                        <p class="text-gray-600 mb-6">Panduan praktis mengatur anggaran pernikahan agar tetap elegan tanpa menguras tabungan. Pelajari cara mengalokasikan dana dengan bijak untuk setiap aspek pernikahan.</p>
                        <div class="flex items-center">
                            <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="Author" class="w-10 h-10 rounded-full mr-3">
                            <span class="text-sm text-gray-600">Oleh Dina Paramitha</span>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Pagination -->
            <div class="flex justify-center mt-8">
                <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px" aria-label="Pagination">
                    <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                        <span class="sr-only">Previous</span>
                        <!-- Heroicon name: solid/chevron-left -->
                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                        </svg>
                    </a>
                    <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50"> 1 </a>
                    <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50"> 2 </a>
                    <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50"> 3 </a>
                    <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                        <span class="sr-only">Next</span>
                        <!-- Heroicon name: solid/chevron-right -->
                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                        </svg>
                    </a>
                </nav>
            </div>
        </div>
    </div>

    <!-- Call to Action -->
    <div class="py-16 bg-pink-600">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl font-serif text-white mb-4">Mulai Rencanakan Pernikahan Impian Anda</h2>
                <p class="text-xl text-white opacity-90 mb-8 max-w-3xl mx-auto">Konsultasikan kebutuhan pernikahan Anda dengan tim ahli kami secara gratis</p>
                <a href="/konsultasi" class="inline-block px-8 py-4 rounded-md bg-white text-pink-600 font-medium hover:bg-gray-100 transition-colors">Jadwalkan Konsultasi</a>
            </div>
        </div>
    </div>

    <livewire:welcome-footer />
</div>
</x-layouts.app>
