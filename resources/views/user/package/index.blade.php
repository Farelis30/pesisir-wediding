<x-layouts.app>
@section('title', 'Paket Pernikahan')
<div class="min-h-screen flex flex-col">
    <livewire:welcome-navbar />
    <div class="flex-1 min-h-screen flex flex-col items-center justify-center">
        <!-- Hero Section -->
        <div class="relative bg-cover bg-center py-32" style="background-image: url('https://images.unsplash.com/photo-1507504031003-b417219a0fde?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1920&q=80');">
            <div class="absolute inset-0 bg-black bg-opacity-60"></div>
            <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h1 class="text-4xl md:text-5xl font-serif text-white mb-6 animate-fade-in">Paket Pernikahan</h1>
                <p class="text-xl text-white mb-8 max-w-3xl mx-auto animate-fade-in">Temukan paket yang sesuai dengan kebutuhan dan anggaran Anda</p>
            </div>
        </div>

        <!-- Filter Section -->
        <div class="bg-white shadow-md animate-slide-down">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
                <form action="/paket" method="GET">
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                        <div>
                            <label for="budget" class="block text-sm font-medium text-gray-700 mb-1">Rentang Budget</label>
                            <select id="budget" name="budget" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-pink-500 focus:ring-pink-500">
                                <option value="">Semua Budget</option>
                                <option value="under50">Dibawah 50 Juta</option>
                                <option value="50to100">50 - 100 Juta</option>
                                <option value="100to200">100 - 200 Juta</option>
                                <option value="above200">Diatas 200 Juta</option>
                            </select>
                        </div>
                        <div>
                            <label for="guests" class="block text-sm font-medium text-gray-700 mb-1">Jumlah Tamu</label>
                            <select id="guests" name="guests" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-pink-500 focus:ring-pink-500">
                                <option value="">Semua Ukuran</option>
                                <option value="under100">Dibawah 100 Tamu</option>
                                <option value="100to300">100 - 300 Tamu</option>
                                <option value="300to500">300 - 500 Tamu</option>
                                <option value="above500">Diatas 500 Tamu</option>
                            </select>
                        </div>
                        <div>
                            <label for="style" class="block text-sm font-medium text-gray-700 mb-1">Gaya Pernikahan</label>
                            <select id="style" name="style" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-pink-500 focus:ring-pink-500">
                                <option value="">Semua Gaya</option>
                                <option value="traditional">Tradisional</option>
                                <option value="modern">Modern</option>
                                <option value="garden">Garden Party</option>
                                <option value="ballroom">Ballroom</option>
                                <option value="beach">Beach Wedding</option>
                            </select>
                        </div>
                        <div class="flex items-end">
                            <button type="submit" class="w-full inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-pink-600 hover:bg-pink-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-pink-500">
                                Filter Paket
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- Packages List -->
        <div class="bg-gray-50 py-16">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Package 1 -->
                    <div class="bg-white border border-gray-200 rounded-lg overflow-hidden shadow-md transition-transform hover:transform hover:scale-105">
                        <div class="relative">
                            <img src="https://images.unsplash.com/photo-1519225421980-715cb0215aed?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" alt="Paket Intimate" class="w-full h-60 object-cover">
                            <div class="absolute top-4 right-4 bg-pink-600 text-white text-xs font-bold px-3 py-1 rounded-full">POPULER</div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-semibold mb-2">Paket Intimate Wedding</h3>
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
                                        Catering untuk 100 tamu
                                    </li>
                                    <li class="flex items-center">
                                        <svg class="w-4 h-4 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                        Foto dan video dokumentasi
                                    </li>
                                </ul>
                            </div>
                            <div class="flex justify-between items-center">
                                <p class="text-2xl font-bold text-pink-600">Rp 75 Juta</p>
                                <button onclick="openModal('intimate')" class="text-pink-600 font-semibold hover:text-pink-700">Lihat Detail</button>
                            </div>
                            <button onclick="orderPackage('Paket Intimate Wedding', 75000000)" class="w-full mt-4 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-pink-600 hover:bg-pink-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-pink-500">
                                Pesan Sekarang
                            </button>
                        </div>
                    </div>

                    <!-- Package 2 -->
                    <div class="bg-white border border-gray-200 rounded-lg overflow-hidden shadow-md transition-transform hover:transform hover:scale-105">
                        <div class="relative">
                            <img src="https://images.unsplash.com/photo-1523438885200-e635ba2c371e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" alt="Paket Luxury" class="w-full h-60 object-cover">
                            <div class="absolute top-4 right-4 bg-pink-600 text-white text-xs font-bold px-3 py-1 rounded-full">PREMIUM</div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-semibold mb-2">Paket Luxury Wedding</h3>
                            <p class="text-gray-600 mb-4">Pernikahan mewah untuk 300 tamu</p>
                            <div class="mb-4">
                                <p class="text-gray-700 font-medium mb-2">Termasuk:</p>
                                <ul class="space-y-1 text-sm text-gray-600">
                                    <li class="flex items-center">
                                        <svg class="w-4 h-4 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                        Venue ballroom mewah
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
                                        Catering untuk 300 tamu
                                    </li>
                                    <li class="flex items-center">
                                        <svg class="w-4 h-4 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                        Foto, video, dan drone dokumentasi
                                    </li>
                                </ul>
                            </div>
                            <div class="flex justify-between items-center">
                                <p class="text-2xl font-bold text-pink-600">Rp 200 Juta</p>
                                <button onclick="openModal('luxury')" class="text-pink-600 font-semibold hover:text-pink-700">Lihat Detail</button>
                            </div>
                            <button onclick="orderPackage('Paket Luxury Wedding', 200000000)" class="w-full mt-4 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-pink-600 hover:bg-pink-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-pink-500">
                                Pesan Sekarang
                            </button>
                        </div>
                    </div>

                    <!-- Package 3 -->
                    <div class="bg-white border border-gray-200 rounded-lg overflow-hidden shadow-md transition-transform hover:transform hover:scale-105">
                        <div class="relative">
                            <img src="https://images.unsplash.com/photo-1520854221256-17451cc331bf?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" alt="Paket Beach Wedding" class="w-full h-60 object-cover">
                            <div class="absolute top-4 right-4 bg-pink-600 text-white text-xs font-bold px-3 py-1 rounded-full">TRENDING</div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-semibold mb-2">Paket Beach Wedding</h3>
                            <p class="text-gray-600 mb-4">Pernikahan romantis di pantai untuk 150 tamu</p>
                            <div class="mb-4">
                                <p class="text-gray-700 font-medium mb-2">Termasuk:</p>
                                <ul class="space-y-1 text-sm text-gray-600">
                                    <li class="flex items-center">
                                        <svg class="w-4 h-4 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                        Venue pantai pribadi
                                    </li>
                                    <li class="flex items-center">
                                        <svg class="w-4 h-4 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                        Dekorasi tema pantai
                                    </li>
                                    <li class="flex items-center">
                                        <svg class="w-4 h-4 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                        Catering untuk 150 tamu
                                    </li>
                                    <li class="flex items-center">
                                        <svg class="w-4 h-4 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                        Foto dan video dokumentasi
                                    </li>
                                </ul>
                            </div>
                            <div class="flex justify-between items-center">
                                <p class="text-2xl font-bold text-pink-600">Rp 150 Juta</p>
                                <button onclick="openModal('beach')" class="text-pink-600 font-semibold hover:text-pink-700">Lihat Detail</button>
                            </div>
                            <button onclick="orderPackage('Paket Beach Wedding', 150000000)" class="w-full mt-4 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-pink-600 hover:bg-pink-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-pink-500">
                                Pesan Sekarang
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <livewire:welcome-footer />

    <!-- Modal -->
    <div id="modal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center p-4">
        <div class="bg-white rounded-lg p-6 max-w-2xl w-full">
            <h2 id="modal-title" class="text-2xl font-semibold mb-4"></h2>
            <p id="modal-description" class="text-gray-600 mb-4"></p>
            <div class="flex justify-end">
                <button onclick="closeModal()" class="bg-pink-600 text-white px-4 py-2 rounded-md hover:bg-pink-700">Tutup</button>
            </div>
        </div>
    </div>
</div>

{{-- <script>
    function openModal(package) {
        let title, description;
        if (package === 'intimate') {
            title = 'Paket Intimate Wedding';
            description = 'Pernikahan sederhana dan elegan untuk 100 tamu. Termasuk venue indoor/outdoor, dekorasi standard, catering untuk 100 tamu, dan foto serta video dokumentasi.';
        } else if (package === 'luxury') {
            title = 'Paket Luxury Wedding';
            description = 'Pernikahan mewah untuk 300 tamu. Termasuk venue ballroom mewah, dekorasi premium, catering untuk 300 tamu, dan foto, video, serta drone dokumentasi.';
        } else if (package === 'beach') {
            title = 'Paket Beach Wedding';
            description = 'Pernikahan romantis di pantai untuk 150 tamu. Termasuk venue pantai pribadi, dekorasi tema pantai, catering untuk 150 tamu, dan foto serta video dokumentasi.';
        }
        document.getElementById('modal-title').innerText = title;
        document.getElementById('modal-description').innerText = description;
        document.getElementById('modal').classList.remove('hidden');
    }

    function closeModal() {
        document.getElementById('modal').classList.add('hidden');
    }

    function orderPackage(packageName, price) {
        // Redirect to Midtrans payment page or handle payment integration here
        alert(`Anda akan memesan ${packageName} seharga Rp ${price.toLocaleString()}`);
        // Example: window.location.href = `https://midtrans.com/payment?package=${packageName}&price=${price}`;
    }
</script>

<style>
    .animate-fade-in {
        animation: fadeIn 1s ease-in-out;
    }

    .animate-slide-down {
        animation: slideDown 0.5s ease-in-out;
    }

    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }

    @keyframes slideDown {
        from { transform: translateY(-20px); opacity: 0; }
        to { transform: translateY(0); opacity: 1; }
    }
</style> --}}
</x-layouts.app>
