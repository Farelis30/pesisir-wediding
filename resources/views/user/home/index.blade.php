<x-layouts.app>
    @section('title', 'Beranda')
    <div class="min-h-screen flex flex-col">
        <livewire:welcome-navbar />
        <!-- Hero Section -->
        <div class="relative bg-cover bg-center h-screen" style="background-image: url('https://images.unsplash.com/photo-1511795409834-ef04bbd61622?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1920&q=80');">
            <div class="absolute inset-0 bg-black bg-opacity-50"></div>
            <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-full flex flex-col justify-center">
                <div class="text-center">
                    <h1 class="text-4xl md:text-6xl font-serif text-white mb-6">Wujudkan Pernikahan Impian Anda</h1>
                    <p class="text-xl text-white mb-8 max-w-3xl mx-auto">Kami hadir untuk menjadikan momen spesial Anda menjadi kenangan tak terlupakan dengan layanan wedding organizer profesional</p>
                    <div class="flex flex-col sm:flex-row justify-center gap-4">
                        <a href="/paket" class="inline-block px-8 py-4 rounded-md bg-pink-600 text-white font-medium hover:bg-pink-700 transition-colors">Lihat Paket</a>
                        <a href="/konsultasi" class="inline-block px-8 py-4 rounded-md bg-white text-pink-600 font-medium hover:bg-gray-100 transition-colors">Konsultasi Gratis</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Features Section -->
        <div class="py-16 bg-gray-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-serif text-gray-900 mb-4">Mengapa Memilih Kami</h2>
                    <p class="text-lg text-gray-600 max-w-3xl mx-auto">PesisirWedding memberikan pengalaman pernikahan yang sempurna dengan tim profesional dan berpengalaman</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="bg-white p-8 rounded-lg shadow-md text-center">
                        <div class="w-16 h-16 mx-auto bg-pink-100 rounded-full flex items-center justify-center mb-4">
                            <svg class="w-8 h-8 text-pink-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Pengalaman 10+ Tahun</h3>
                        <p class="text-gray-600">Telah menangani ratusan pernikahan dengan berbagai konsep dan skala</p>
                    </div>
                    <div class="bg-white p-8 rounded-lg shadow-md text-center">
                        <div class="w-16 h-16 mx-auto bg-pink-100 rounded-full flex items-center justify-center mb-4">
                            <svg class="w-8 h-8 text-pink-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Jaminan Kepuasan</h3>
                        <p class="text-gray-600">Kami berkomitmen memberikan pelayanan terbaik untuk hari spesial Anda</p>
                    </div>
                    <div class="bg-white p-8 rounded-lg shadow-md text-center">
                        <div class="w-16 h-16 mx-auto bg-pink-100 rounded-full flex items-center justify-center mb-4">
                            <svg class="w-8 h-8 text-pink-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Solusi All-in-One</h3>
                        <p class="text-gray-600">Dari perencanaan hingga eksekusi, kami tangani semua kebutuhan pernikahan Anda</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Featured Packages -->
        <div class="py-16 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-serif text-gray-900 mb-4">Paket Pernikahan Populer</h2>
                    <p class="text-lg text-gray-600 max-w-3xl mx-auto">Pilih paket yang sesuai dengan kebutuhan dan anggaran Anda</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="bg-white border border-gray-200 rounded-lg overflow-hidden shadow-md transition-transform hover:transform hover:scale-105">
                        <div class="relative">
                            <img src="https://images.unsplash.com/photo-1519225421980-715cb0215aed?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" alt="Paket Intimate" class="w-full h-60 object-cover">
                            <div class="absolute top-4 right-4 bg-pink-600 text-white text-xs font-bold px-3 py-1 rounded-full">POPULER</div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-semibold mb-2">Paket Intimate</h3>
                            <p class="text-gray-600 mb-4">Pernikahan sederhana dan elegan untuk 100 tamu</p>
                            <div class="mb-4">
                                <p class="text-gray-700 font-medium mb-2">Termasuk:</p>
                                <ul class="space-y-1 text-sm text-gray-600">
                                    <li class="flex items-center">
                                        <svg class="w-4 h-4 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                        Venue indoor/outdoor
                                    </li>
                                    <li class="flex items-center">
                                        <svg class="w-4 h-4 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                        Dekorasi standard
                                    </li>
                                    <li class="flex items-center">
                                        <svg class="w-4 h-4 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                        Katering 100 pax
                                    </li>
                                    <li class="flex items-center">
                                        <svg class="w-4 h-4 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                        Dokumentasi foto
                                    </li>
                                </ul>
                            </div>
                            <div class="flex items-center justify-between">
                                <p class="text-2xl font-bold text-pink-600">Rp 45 juta</p>
                                <a href="/paket/intimate" class="inline-block px-4 py-2 bg-pink-100 text-pink-700 rounded-md hover:bg-pink-200 transition-colors">Detail</a>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white border border-gray-200 rounded-lg overflow-hidden shadow-lg transition-transform hover:transform hover:scale-105">
                        <div class="relative">
                            <img src="https://images.unsplash.com/photo-1465495976277-4387d4b0b4c6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" alt="Paket Elegant" class="w-full h-60 object-cover">
                            <div class="absolute top-4 right-4 bg-pink-600 text-white text-xs font-bold px-3 py-1 rounded-full">BEST SELLER</div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-semibold mb-2">Paket Elegant</h3>
                            <p class="text-gray-600 mb-4">Pernikahan mewah dan elegan untuk 300 tamu</p>
                            <div class="mb-4">
                                <p class="text-gray-700 font-medium mb-2">Termasuk:</p>
                                <ul class="space-y-1 text-sm text-gray-600">
                                    <li class="flex items-center">
                                        <svg class="w-4 h-4 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                        Venue premium
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-4 h-4 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    Dekorasi premium
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-4 h-4 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    Katering 300 pax
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-4 h-4 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    Dokumentasi foto & video
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-4 h-4 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    Live music
                                </li>
                            </ul>
                        </div>
                        <div class="flex items-center justify-between">
                            <p class="text-2xl font-bold text-pink-600">Rp 85 juta</p>
                            <a href="/paket/elegant" class="inline-block px-4 py-2 bg-pink-100 text-pink-700 rounded-md hover:bg-pink-200 transition-colors">Detail</a>
                        </div>
                    </div>
                </div>
                <div class="bg-white border border-gray-200 rounded-lg overflow-hidden shadow-md transition-transform hover:transform hover:scale-105">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1511285560929-80b456fea0bc?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTR8fHdlZGRpbmd8ZW58MHx8MHx8fDA%3D" alt="Paket Luxury" class="w-full h-60 object-cover">
                        <div class="absolute top-4 right-4 bg-pink-600 text-white text-xs font-bold px-3 py-1 rounded-full">PREMIUM</div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">Paket Luxury</h3>
                        <p class="text-gray-600 mb-4">Pernikahan mewah dan eksklusif untuk 500 tamu</p>
                        <div class="mb-4">
                            <p class="text-gray-700 font-medium mb-2">Termasuk:</p>
                            <ul class="space-y-1 text-sm text-gray-600">
                                <li class="flex items-center">
                                    <svg class="w-4 h-4 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    Venue exclusive
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-4 h-4 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    Dekorasi luxury custom
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-4 h-4 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    Katering 500 pax premium
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-4 h-4 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    Tim dokumentasi penuh
                                </li>
                            </ul>
                        </div>
                        <div class="flex items-center justify-between">
                            <p class="text-2xl font-bold text-pink-600">Rp 150 juta</p>
                            <a href="/paket/luxury" class="inline-block px-4 py-2 bg-pink-100 text-pink-700 rounded-md hover:bg-pink-200 transition-colors">Detail</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-12 text-center">
                <a href="/paket" class="inline-flex items-center text-pink-600 hover:text-pink-800">
                    Lihat Semua Paket
                    <svg class="w-4 h-4 ml-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                    </svg>
                </a>
            </div>
        </div>
    </div>

    <!-- Testimonials -->
    <div class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-serif text-gray-900 mb-4">Apa Kata Mereka</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">Testimoni dari klien yang telah mempercayakan momen berharga mereka pada kami</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-lg shadow-md relative">
                    <div class="absolute -top-5 left-1/2 transform -translate-x-1/2 w-10 h-10">
                        <svg class="w-full h-full text-pink-600" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M13 14.725c0-5.141 3.892-10.519 10-11.725l.984 2.126c-2.215.835-4.163 3.742-4.38 5.746 2.491.392 4.396 2.547 4.396 5.149 0 3.182-2.584 4.979-5.199 4.979-3.015 0-5.801-2.305-5.801-6.275zm-13 0c0-5.141 3.892-10.519 10-11.725l.984 2.126c-2.215.835-4.163 3.742-4.38 5.746 2.491.392 4.396 2.547 4.396 5.149 0 3.182-2.584 4.979-5.199 4.979-3.015 0-5.801-2.305-5.801-6.275z"/>
                        </svg>
                    </div>
                    <div class="pt-6">
                        <p class="text-gray-600 mb-6">PesisirWedding membuat pernikahan kami jauh melebihi ekspektasi. Tim yang professional dan detail-oriented, membuat kami tidak perlu khawatir tentang apapun di hari spesial kami.</p>
                        <div class="flex items-center">
                            <img src="https://randomuser.me/api/portraits/women/32.jpg" alt="Testimoni" class="w-12 h-12 rounded-full mr-4">
                            <div>
                                <h4 class="font-medium text-gray-900">Anisa & Bimo</h4>
                                <p class="text-sm text-gray-500">Married on June 2023</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-md relative">
                    <div class="absolute -top-5 left-1/2 transform -translate-x-1/2 w-10 h-10">
                        <svg class="w-full h-full text-pink-600" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M13 14.725c0-5.141 3.892-10.519 10-11.725l.984 2.126c-2.215.835-4.163 3.742-4.38 5.746 2.491.392 4.396 2.547 4.396 5.149 0 3.182-2.584 4.979-5.199 4.979-3.015 0-5.801-2.305-5.801-6.275zm-13 0c0-5.141 3.892-10.519 10-11.725l.984 2.126c-2.215.835-4.163 3.742-4.38 5.746 2.491.392 4.396 2.547 4.396 5.149 0 3.182-2.584 4.979-5.199 4.979-3.015 0-5.801-2.305-5.801-6.275z"/>
                        </svg>
                    </div>
                    <div class="pt-6">
                        <p class="text-gray-600 mb-6">Pengalaman terbaik sepanjang persiapan pernikahan kami. PesisirWedding memiliki koneksi dengan vendor-vendor terbaik dan koordinasi yang sempurna. Worth every penny!</p>
                        <div class="flex items-center">
                            <img src="https://randomuser.me/api/portraits/men/40.jpg" alt="Testimoni" class="w-12 h-12 rounded-full mr-4">
                            <div>
                                <h4 class="font-medium text-gray-900">Dian & Ari</h4>
                                <p class="text-sm text-gray-500">Married on September 2023</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-md relative">
                    <div class="absolute -top-5 left-1/2 transform -translate-x-1/2 w-10 h-10">
                        <svg class="w-full h-full text-pink-600" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M13 14.725c0-5.141 3.892-10.519 10-11.725l.984 2.126c-2.215.835-4.163 3.742-4.38 5.746 2.491.392 4.396 2.547 4.396 5.149 0 3.182-2.584 4.979-5.199 4.979-3.015 0-5.801-2.305-5.801-6.275zm-13 0c0-5.141 3.892-10.519 10-11.725l.984 2.126c-2.215.835-4.163 3.742-4.38 5.746 2.491.392 4.396 2.547 4.396 5.149 0 3.182-2.584 4.979-5.199 4.979-3.015 0-5.801-2.305-5.801-6.275z"/>
                        </svg>
                    </div>
                    <div class="pt-6">
                        <p class="text-gray-600 mb-6">Dari awal hingga akhir acara, tim PesisirWedding memberikan pelayanan yang luar biasa. Mereka bahkan membantu mengatasi masalah mendadak dengan sangat profesional.</p>
                        <div class="flex items-center">
                            <img src="https://randomuser.me/api/portraits/women/65.jpg" alt="Testimoni" class="w-12 h-12 rounded-full mr-4">
                            <div>
                                <h4 class="font-medium text-gray-900">Maya & Reza</h4>
                                <p class="text-sm text-gray-500">Married on December 2023</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-12 text-center">
                <a href="/testimoni" class="inline-flex items-center text-pink-600 hover:text-pink-800">
                    Lihat Semua Testimoni
                    <svg class="w-4 h-4 ml-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                    </svg>
                </a>
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

    <!-- Recent Blog Posts -->
    <div class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-serif text-gray-900 mb-4">Artikel Terbaru</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">Tips dan inspirasi untuk pernikahan impian Anda</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white rounded-lg overflow-hidden shadow-md transition-transform hover:transform hover:scale-105">
                    <a href="/artikel/tips-memilih-venue">
                        <img src="https://images.unsplash.com/photo-1519225421980-715cb0215aed?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" alt="Blog Post" class="w-full h-60 object-cover">
                        <div class="p-6">
                            <div class="flex items-center mb-2">
                                <span class="bg-pink-100 text-pink-800 text-xs px-2 py-1 rounded">Tips</span>
                                <span class="text-gray-500 text-sm ml-2">8 Februari 2024</span>
                            </div>
                            <h3 class="text-xl font-semibold mb-2">10 Tips Memilih Venue Pernikahan Yang Tepat</h3>
                            <p class="text-gray-600 mb-4">Panduan lengkap memilih venue pernikahan yang sesuai dengan konsep, budget, dan jumlah tamu Anda.</p>
                            <div class="flex items-center">
                                <img src="https://randomuser.me/api/portraits/women/42.jpg" alt="Author" class="w-8 h-8 rounded-full mr-3">
                                <span class="text-sm text-gray-600">Oleh Siska Amelia</span>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="bg-white rounded-lg overflow-hidden shadow-md transition-transform hover:transform hover:scale-105">
                    <a href="/artikel/tren-pernikahan-2024">
                        <img src="https://plus.unsplash.com/premium_photo-1704830496175-523990edbc4a?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8d2VkZGluZyUyMHRyZW5kfGVufDB8fDB8fHww" alt="Blog Post" class="w-full h-60 object-cover">
                        <div class="p-6">
                            <div class="flex items-center mb-2">
                                <span class="bg-pink-100 text-pink-800 text-xs px-2 py-1 rounded">Tren</span>
                                <span class="text-gray-500 text-sm ml-2">14 Januari 2024</span>
                            </div>
                            <h3 class="text-xl font-semibold mb-2">Tren Pernikahan 2024 yang Wajib Diketahui</h3>
                            <p class="text-gray-600 mb-4">Temukan tren terbaru seputar dekorasi, warna, dan konsep pernikahan yang akan populer di tahun 2024.</p>
                            <div class="flex items-center">
                                <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Author" class="w-8 h-8 rounded-full mr-3">
                                <span class="text-sm text-gray-600">Oleh Ricky Harun</span>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="bg-white rounded-lg overflow-hidden shadow-md transition-transform hover:transform hover:scale-105">
                    <a href="/artikel/tips-manajemen-budget">
                        <img src="https://images.unsplash.com/photo-1556742031-c6961e8560b0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" alt="Blog Post" class="w-full h-60 object-cover">
                        <div class="p-6">
                            <div class="flex items-center mb-2">
                                <span class="bg-pink-100 text-pink-800 text-xs px-2 py-1 rounded">Budget</span>
                                <span class="text-gray-500 text-sm ml-2">5 Januari 2024</span>
                            </div>
                            <h3 class="text-xl font-semibold mb-2">Cara Efektif Mengelola Budget Pernikahan</h3>
                            <p class="text-gray-600 mb-4">Panduan praktis mengatur anggaran pernikahan agar tetap elegan tanpa menguras tabungan.</p>
                            <div class="flex items-center">
                                <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="Author" class="w-8 h-8 rounded-full mr-3">
                                <span class="text-sm text-gray-600">Oleh Dina Paramitha</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="mt-12 text-center">
                <a href="/artikel" class="inline-flex items-center text-pink-600 hover:text-pink-800">
                    Lihat Semua Artikel
                    <svg class="w-4 h-4 ml-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
    <livewire:welcome-footer />
</div>

</x-layouts.app>
