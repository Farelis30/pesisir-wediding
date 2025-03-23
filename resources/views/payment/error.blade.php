<x-layouts.app>
    @section('title', 'Pembayaran Gagal')
    <div class="md:hidden">
        <livewire:welcome-navbar />
    </div>
    <div class="min-h-screen flex flex-col mt-16 md:mt-0">
        <div class="container py-2 mt-5 mb-20">
            <div class="flex justify-center">
                <div class="w-full max-w-3xl">
                    <div class="md:border bg-white md:border-gray-300 md:shadow-xl rounded-xl p-6">
                        <div class="text-center md:p-5">
                            <i class="fas fa-times-circle text-red-600 text-7xl mb-4"></i>
                            <h2 class="mb-4 text-3xl font-semibold">Pembayaran Gagal</h2>
                            <p class="text-xl font-light mb-4">Maaf, terjadi kesalahan saat memproses pembayaran Anda.</p>

                            <div class="bg-gray-50 shadow rounded-xl text-gray-700 p-4 mt-4 mb-4 text-start">
                                <div class="grid grid-cols-2 mb-2">
                                    <div class="font-bold">ID Pesanan:</div>
                                    <div>{{ $order_id }}</div>
                                </div>
                                <div class="grid grid-cols-2 mb-2">
                                    <div class="font-bold">Status:</div>
                                    <div>
                                        <span class="text-sm font-semibold bg-red-600 text-white rounded-md px-3 py-1">{{ ucfirst($status) }}</span>
                                    </div>
                                </div>
                                <div class="grid grid-cols-2 mb-2">
                                    <div class="font-bold">Tanggal:</div>
                                    <div>{{ date('d M Y, H:i') }}</div>
                                </div>
                                @if(isset($message) && !empty($message))
                                <div class="grid grid-cols-2 mb-2">
                                    <div class="font-bold">Pesan Error:</div>
                                    <div>{{ $message }}</div>
                                </div>
                                @endif
                            </div>

                            <div class="bg-red-100 border border-red-100 text-red-700/90 px-4 py-3 rounded relative mt-4" role="alert">
                                <i class="fas fa-exclamation-triangle me-2"></i>
                                Pembayaran Anda tidak dapat diproses. Silakan coba metode pembayaran lain atau hubungi customer service kami.
                            </div>

                            <div class="mt-5 flex flex-col md:flex-row md:justify-center gap-4">
                                <a href="/" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded">Kembali ke Beranda</a>
                                <a href="/checkout" class="bg-green-500 hover:bg-green-600 text-white py-2 px-4 rounded">Coba Lagi</a>
                                <a href="/contact" class="bg-white border border-gray-500 text-gray-700 hover:bg-gray-100 py-2 px-4 rounded">Hubungi Kami</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <livewire:welcome-footer />
    </div>
</x-layouts.app>
