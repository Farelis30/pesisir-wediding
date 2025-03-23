<x-layouts.admin>
    @section('title', $banner->id)
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Banner ID : {{ $banner->id }}
            </h2>
            <a href="{{ route('admin.banners.index') }}" class="inline-flex items-center px-4 py-2 bg-gray-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
                Kembali
            </a>
        </div>
    </x-slot>

    <div class="py-2">
        <div class="relative bg-cover bg-center h-screen" style="background-image: url('{{ filter_var($banner->image, FILTER_VALIDATE_URL) ? $banner->image : Storage::url($banner->image) }}');">
            <div class="absolute inset-0 bg-black bg-opacity-50"></div>
            <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-full flex flex-col justify-center">
                <div class="text-center">
                    <h1 class="text-4xl md:text-6xl font-serif text-white mb-6">{{ $banner->title }}</h1>
                    <p class="text-xl text-white mb-8 max-w-3xl mx-auto">{{ $banner->description }}</p>
                    <div class="flex flex-col sm:flex-row justify-center gap-4">
                        <a href="{{ $banner->cta_url }}" class="capitalize inline-block px-8 py-4 rounded-md bg-pink-600 text-white font-medium hover:bg-pink-700 transition-colors">{{ $banner->cta_text }}</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="px-10 mt-8 flex items-center text-gray-500 text-sm">
            <span>Status: {{ $banner->is_active ? 'Published' : 'Draft' }}</span>
            @if($banner->created_at)
                <span class="mx-2">|</span>
                <span>Dipublikasikan: {{ $banner->created_at->format('d M Y') }}</span>
            @endif
        </div>
    </div>
</x-layouts.admin>
