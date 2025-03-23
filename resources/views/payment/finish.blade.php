<x-layouts.app>
    @section('title', 'Pembayaran Berhasil')
    <div class="md:hidden">
        <livewire:welcome-navbar />
    </div>
    <div class="min-h-screen flex flex-col mt-16 md:mt-0">
        <div class="container py-2 mt-5 mb-20">
            <div class="flex justify-center">
                <div class="w-full max-w-3xl">
                    <div class="md:border bg-white md:border-gray-300 md:shadow-xl rounded-xl p-6">
                        <div class="text-center md:p-5">
                            <i class="fas fa-check-circle text-green-600 text-7xl mb-4"></i>
                            <h2 class="mb-4 text-3xl font-semibold">Pembayaran Berhasil!</h2>
                            <p class="text-xl font-light mb-4">Terima kasih. Pembayaran Anda telah berhasil diproses.</p>

                            <div class="bg-gray-50 shadow rounded-xl text-gray-700 p-4 mt-4 mb-4 text-start">
                                <div class="grid grid-cols-2 mb-2">
                                    <div class="font-bold">ID Pesanan:</div>
                                    <div>{{ $order_id }}</div>
                                </div>
                                <div class="grid grid-cols-2 mb-2">
                                    <div class="font-bold">Status:</div>
                                    <div>
                                        <span class="text-sm font-semibold bg-green-600 text-white rounded-md px-3 py-1">{{ ucfirst($status) }}</span>
                                    </div>
                                </div>
                                <div class="grid grid-cols-2 mb-2">
                                    <div class="font-bold">Tanggal:</div>
                                    <div>{{ date('d M Y, H:i') }}</div>
                                </div>
                            </div>

                            <div class="mt-5 flex flex-col md:flex-row md:justify-center gap-4">
                                <a href="#" class="bg-white border border-blue-500 text-blue-500 hover:bg-blue-500 hover:text-white py-2 px-4 rounded" onclick="window.print()">
                                    <i class="fas fa-print me-2"></i>Cetak Bukti
                                </a>
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
