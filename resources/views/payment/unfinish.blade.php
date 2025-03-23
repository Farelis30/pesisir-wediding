<x-layouts.app>
    @section('title', 'Pembayaran Tertunda')
    <div class="md:hidden">
        <livewire:welcome-navbar />
    </div>
    <div class="min-h-screen flex flex-col mt-16 md:mt-0">
        <div class="container py-2 mt-5 mb-5">
            <div class="flex justify-center">
                <div class="w-full max-w-3xl">
                    <div class="md:border bg-white md:border-gray-300 md:shadow-xl rounded-xl p-6">
                        <div class="card-body text-center md:p-5">
                            <i class="fas fa-clock text-7xl text-yellow-400 mb-4"></i>
                            <h2 class="mb-4 text-3xl font-semibold">Pembayaran Tertunda</h2>
                            <p class="text-xl font-light mb-4">Transaksi Anda sedang diproses atau belum diselesaikan.</p>

                            <div class="bg-gray-50 shadow rounded-xl text-gray-700 p-4 mt-4 mb-4 text-start">
                                <div class="grid grid-cols-2 mb-2">
                                    <div class="font-bold">ID Pesanan:</div>
                                    <div>{{ $order_id }}</div>
                                </div>
                                <div class="grid grid-cols-2 mb-2">
                                    <div class="font-bold">Status:</div>
                                    <div>
                                        <span class="text-sm font-semibold bg-yellow-500 text-gray-900 rounded-md px-3 py-1">{{ ucfirst($status) }}</span>
                                    </div>
                                </div>
                                <div class="grid grid-cols-2 mb-2">
                                    <div class="font-bold">Tanggal:</div>
                                    <div>{{ date('d M Y, H:i') }}</div>
                                </div>
                            </div>

                            <div class="bg-amber-100 border border-yellow-200 text-zinc-800/80 p-4 mt-3 rounded" role="alert">
                                <i class="fas fa-info-circle me-2"></i>
                                Jika Anda telah melakukan pembayaran, mohon tunggu beberapa saat hingga sistem kami memproses pembayaran Anda.
                            </div>

                            <div class="mt-5 flex flex-col md:flex-row md:justify-center gap-4">
                                <a href="/checkout" class="bg-white border border-blue-500 text-blue-500 hover:bg-blue-500 hover:text-white py-2 px-4 rounded">Coba Lagi</a>
                                <a href="/" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded">Kembali ke Beranda</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <livewire:welcome-footer />
    </div>
</x-layouts.app>

