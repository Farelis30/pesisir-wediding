<x-layouts.admin>
    @section('title', $package->title)
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ $package->title }}
            </h2>
            <a href="{{ route('admin.packages.index') }}" class="inline-flex items-center px-4 py-2 bg-gray-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
                Kembali
            </a>
        </div>
    </x-slot>

    <div class="py-2">
        <div class="container mx-auto p-6 bg-white rounded-lg shadow-lg">
            <div class="flex items-center justify-between mb-6">
                <h2 class="text-3xl font-bold text-gray-800">Detail Paket : {{ $package->title }}</h2>
            </div>

            <!-- Thumbnail -->
            <div class="mb-6">
                @if($package->thumbnail)
                    <img src="{{ Storage::url($package->thumbnail) }}" alt="{{ $package->title }}" class="w-full h-72 object-cover rounded-lg shadow-md">
                @else
                    <div class="w-full h-72 bg-gray-200 rounded-lg flex items-center justify-center">
                        <span class="text-gray-500">Tidak ada thumbnail</span>
                    </div>
                @endif
            </div>

            <!-- Deskripsi -->
            <div class="mb-6">
                <h3 class="text-xl font-semibold text-gray-800 mb-2">Deskripsi</h3>
                <p class="text-gray-700">{{ $package->description }}</p>
            </div>

            <!-- Termasuk (Includes) -->
            <div class="mb-6">
                <h3 class="text-xl font-semibold text-gray-800 mb-2">Termasuk</h3>
                <ul class="text-gray-700 capitalize">
                    @foreach(json_decode($package->includes, true) as $item)
                        <li><span class="mr-2">✅</span>{{ $item }}</li>
                    @endforeach
                </ul>
            </div>

            <!-- Harga -->
            <div class="mb-6">
                <h3 class="text-xl font-semibold text-gray-800 mb-2">Harga</h3>
                <p class="text-lg text-gray-900">Rp. {{ number_format($package->price, 0, ',', '.') }}</p>
            </div>

            <!-- Status Aktif -->
            <div class="mb-6">
                <h3 class="text-xl font-semibold text-gray-800 mb-2">Status</h3>
                <span class="inline-block px-4 py-2 text-sm font-semibold rounded-full
                    {{ $package->is_active ? 'bg-green-500 text-white' : 'bg-red-500 text-white' }}">
                    {{ $package->is_active ? 'Aktif' : 'Tidak Aktif' }}
                </span>
            </div>
        </div>
    </div>
</x-layouts.admin>
