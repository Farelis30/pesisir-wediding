<x-layouts.app>
@section('title', 'Tentang Kami')
<div>
    <!-- Navbar -->
    <livewire:welcome-navbar />

    <!-- Hero Section with Parallax Effect -->
    <div class="relative bg-cover bg-center h-screen overflow-hidden">
        <div class="absolute inset-0 bg-black bg-opacity-50"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-full flex flex-col justify-center">
            <div class="text-center">
                <h1 class="text-4xl md:text-6xl font-serif text-white mb-6 animate-fade-in-up">Tentang Kami</h1>
                <p class="text-xl text-white mb-8 max-w-3xl mx-auto animate-fade-in-up delay-100">Kami adalah tim kreatif yang berdedikasi untuk menciptakan momen tak terlupakan dalam setiap pernikahan.</p>
                <div class="animate-fade-in-up delay-200">
                    <a href="#our-story" class="inline-block px-8 py-4 rounded-md bg-pink-600 text-white font-medium hover:bg-pink-700 transition-colors">Temukan Cerita Kami</a>
                </div>
            </div>
        </div>
        <!-- Parallax Background -->
        <div class="absolute inset-0 bg-cover bg-center transform scale-110 parallax" style="background-image: url('https://images.unsplash.com/photo-1511795409834-ef04bbd61622?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1920&q=80');"></div>
    </div>

    <!-- Our Story Section -->
    <div id="our-story" class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-serif text-gray-900 mb-4">Cerita Kami</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">Dari sebuah mimpi kecil, kami tumbuh menjadi mitra terpercaya bagi ratusan pasangan.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1529333166437-7750a6dd5a70?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" alt="Our Story" class="rounded-lg shadow-lg transform hover:scale-105 transition-transform duration-300">
                    <div class="absolute -bottom-6 -right-6 bg-pink-600 text-white p-4 rounded-lg shadow-lg">
                        <span class="text-2xl font-bold">10+ Tahun</span>
                        <p class="text-sm">Pengalaman</p>
                    </div>
                </div>
                <div>
                    <h3 class="text-2xl font-semibold mb-4">Dari Mimpi Menjadi Kenyataan</h3>
                    <p class="text-gray-600 mb-4">PesisirWedding dimulai dari sebuah ide sederhana: membantu pasangan mewujudkan pernikahan impian mereka tanpa stres. Dengan dedikasi dan kerja keras, kami telah berkembang menjadi salah satu penyedia layanan wedding organizer terbaik di Indonesia.</p>
                    <p class="text-gray-600 mb-4">Kami percaya bahwa setiap pernikahan adalah cerita unik yang layak dirayakan dengan sempurna. Itulah mengapa kami selalu berusaha memberikan yang terbaik, mulai dari konsep hingga eksekusi.</p>
                    <a href="/konsultasi" class="inline-block px-6 py-3 rounded-md bg-pink-600 text-white font-medium hover:bg-pink-700 transition-colors">Mulai Cerita Anda</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Our Values Section -->
    <div class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-serif text-gray-900 mb-4">Nilai Kami</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">Kami berkomitmen pada nilai-nilai yang membuat setiap pernikahan istimewa.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-lg shadow-md text-center hover:shadow-lg transition-shadow duration-300">
                    <div class="w-16 h-16 mx-auto bg-pink-100 rounded-full flex items-center justify-center mb-4">
                        <svg class="w-8 h-8 text-pink-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Ketepatan Waktu</h3>
                    <p class="text-gray-600">Kami memastikan setiap detail selesai tepat waktu, tanpa kompromi.</p>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-md text-center hover:shadow-lg transition-shadow duration-300">
                    <div class="w-16 h-16 mx-auto bg-pink-100 rounded-full flex items-center justify-center mb-4">
                        <svg class="w-8 h-8 text-pink-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Kualitas Terbaik</h3>
                    <p class="text-gray-600">Hanya yang terbaik untuk hari spesial Anda, dari vendor hingga layanan.</p>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-md text-center hover:shadow-lg transition-shadow duration-300">
                    <div class="w-16 h-16 mx-auto bg-pink-100 rounded-full flex items-center justify-center mb-4">
                        <svg class="w-8 h-8 text-pink-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Kreativitas Tanpa Batas</h3>
                    <p class="text-gray-600">Kami menghadirkan ide-ide segar untuk membuat pernikahan Anda unik.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Team Section with Hover Effect -->
    <div class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-serif text-gray-900 mb-4">Tim Kami</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">Tim ahli kami siap membantu mewujudkan pernikahan impian Anda.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-lg shadow-md text-center transform hover:scale-105 transition-transform duration-300">
                    <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Team Member" class="w-32 h-32 rounded-full mx-auto mb-4">
                    <h3 class="text-xl font-semibold mb-2">Anita Rahayu</h3>
                    <p class="text-gray-600">Wedding Planner</p>
                    <p class="text-sm text-gray-500 mt-2">"Setiap pernikahan adalah cerita unik yang layak dirayakan."</p>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-md text-center transform hover:scale-105 transition-transform duration-300">
                    <img src="https://randomuser.me/api/portraits/men/45.jpg" alt="Team Member" class="w-32 h-32 rounded-full mx-auto mb-4">
                    <h3 class="text-xl font-semibold mb-2">Budi Santoso</h3>
                    <p class="text-gray-600">Event Coordinator</p>
                    <p class="text-sm text-gray-500 mt-2">"Kami hadir untuk memastikan semuanya berjalan lancar."</p>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-md text-center transform hover:scale-105 transition-transform duration-300">
                    <img src="https://randomuser.me/api/portraits/women/46.jpg" alt="Team Member" class="w-32 h-32 rounded-full mx-auto mb-4">
                    <h3 class="text-xl font-semibold mb-2">Citra Dewi</h3>
                    <p class="text-gray-600">Creative Director</p>
                    <p class="text-sm text-gray-500 mt-2">"Kreativitas adalah kunci untuk pernikahan yang tak terlupakan."</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Call to Action -->
    <div class="py-16 bg-pink-600">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl font-serif text-white mb-4">Siap Memulai Perjalanan Anda?</h2>
                <p class="text-xl text-white opacity-90 mb-8 max-w-3xl mx-auto">Konsultasikan ide dan impian Anda dengan tim ahli kami.</p>
                <a href="/konsultasi" class="inline-block px-8 py-4 rounded-md bg-white text-pink-600 font-medium hover:bg-gray-100 transition-colors">Jadwalkan Konsultasi</a>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <livewire:welcome-footer />
</div>
</x-layouts.app>
