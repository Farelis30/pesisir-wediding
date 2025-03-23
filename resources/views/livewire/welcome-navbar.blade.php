<div x-data="{ open: false, currentPage: window.location.pathname }" class="bg-white shadow-md fixed w-full z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-20">
            <div class="flex">
                <div class="flex-shrink-0 flex items-center">
                    <a href="/" class="font-serif text-2xl text-pink-600" wire:navigate>PesisirWedding</a>
                </div>
                <div class="hidden sm:ml-6 sm:flex sm:space-x-8">
                    <a href="/" class="text-sm font-medium inline-flex items-center px-1 pt-1 border-b-2"
                        :class="{'border-pink-500 text-gray-900': currentPage === '/', 'border-transparent text-gray-500 hover:border-pink-300 hover:text-gray-700': currentPage !== '/'}">
                        Beranda
                    </a>
                    <a href="/paket" class="text-sm font-medium inline-flex items-center px-1 pt-1 border-b-2"
                        :class="{'border-pink-500 text-gray-900': currentPage === '/paket', 'border-transparent text-gray-500 hover:border-pink-300 hover:text-gray-700': currentPage !== '/paket'}">
                        Paket
                    </a>
                    <a href="/artikel" class="text-sm font-medium inline-flex items-center px-1 pt-1 border-b-2"
                        :class="{'border-pink-500 text-gray-900': currentPage === '/artikel', 'border-transparent text-gray-500 hover:border-pink-300 hover:text-gray-700': currentPage !== '/artikel'}">
                        Artikel
                    </a>
                    <a href="/kontak" class="text-sm font-medium inline-flex items-center px-1 pt-1 border-b-2"
                        :class="{'border-pink-500 text-gray-900': currentPage === '/kontak', 'border-transparent text-gray-500 hover:border-pink-300 hover:text-gray-700': currentPage !== '/kontak'}">
                        Kontak
                    </a>
                    <a href="/tentang" class="text-sm font-medium inline-flex items-center px-1 pt-1 border-b-2"
                        :class="{'border-pink-500 text-gray-900': currentPage === '/tentang', 'border-transparent text-gray-500 hover:border-pink-300 hover:text-gray-700': currentPage !== '/tentang'}">
                        Tentang Kami
                    </a>
                </div>
            </div>
            <div class="hidden sm:ml-6 sm:flex sm:items-center gap-4">
                <a href="https://wa.me/628123456789" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-pink-600 hover:bg-pink-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-pink-500">
                    Konsultasi Gratis
                </a>
                <a href="/login" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-pink-600 hover:bg-pink-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-pink-500">
                    Login
                </a>
                <a href="/register" class="inline-flex items-center px-4 py-2 border border-pink-600 text-sm font-medium rounded-md shadow-sm text-pink-600 border-pink-600 bg-white hover:bg-pink-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-pink-500">
                    Register
                </a>
            </div>
            <div class="mr-4 flex items-center sm:hidden">
                <button @click="open = !open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-pink-500">
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <div x-show="open" class="sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <a href="/" class="bg-pink-50 border-pink-500 text-pink-700 block pl-3 pr-4 py-2 border-l-4 text-base font-medium"
                :class="{'bg-pink-50 border-pink-500 text-pink-700': currentPage === '/', 'text-gray-500 hover:bg-gray-50 hover:border-pink-300 hover:text-gray-700': currentPage !== '/'}">
                Beranda
            </a>
            <a href="/paket" class="text-gray-500 hover:bg-gray-50 hover:border-pink-300 hover:text-gray-700 block pl-3 pr-4 py-2 border-l-4 text-base font-medium"
                :class="{'bg-pink-50 border-pink-500 text-pink-700': currentPage === '/paket', 'text-gray-500 hover:bg-gray-50 hover:border-pink-300 hover:text-gray-700': currentPage !== '/paket'}">
                Paket
            </a>
            <a href="/artikel" class="text-gray-500 hover:bg-gray-50 hover:border-pink-300 hover:text-gray-700 block pl-3 pr-4 py-2 border-l-4 text-base font-medium"
                :class="{'bg-pink-50 border-pink-500 text-pink-700': currentPage === '/artikel', 'text-gray-500 hover:bg-gray-50 hover:border-pink-300 hover:text-gray-700': currentPage !== '/artikel'}">
                Artikel
            </a>
            <a href="/kontak" class="text-gray-500 hover:bg-gray-50 hover:border-pink-300 hover:text-gray-700 block pl-3 pr-4 py-2 border-l-4 text-base font-medium"
                :class="{'bg-pink-50 border-pink-500 text-pink-700': currentPage === '/kontak', 'text-gray-500 hover:bg-gray-50 hover:border-pink-300 hover:text-gray-700': currentPage !== '/kontak'}">
                Kontak
            </a>
            <a href="/tentang" class="text-gray-500 hover:bg-gray-50 hover:border-pink-300 hover:text-gray-700 block pl-3 pr-4 py-2 border-l-4 text-base font-medium"
                :class="{'bg-pink-50 border-pink-500 text-pink-700': currentPage === '/tentang', 'text-gray-500 hover:bg-gray-50 hover:border-pink-300 hover:text-gray-700': currentPage !== '/tentang'}">
                Tentang Kami
            </a>
            <div class="mt-4 px-3">
                <a href="https://wa.me/628123456789" class="w-full flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-pink-600 hover:bg-pink-700">
                    Konsultasi Gratis
                </a>
            </div>
        </div>
    </div>
</div>
