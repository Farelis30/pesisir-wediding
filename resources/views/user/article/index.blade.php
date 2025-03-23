<x-layouts.app>
@section('title', 'Artikel')
<div class="min-h-screen flex flex-col">
    <livewire:welcome-navbar />

    <!-- Hero Section -->
    <div class="relative bg-cover bg-center h-16">
    </div>

    <!-- Artikel Section -->
    @if ($articles->count() > 0)
    <div class="mt-12 bg-white">
        <div class="mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-3 gap-8">

            @foreach ($articles as $article)
            <div class="bg-white rounded-lg overflow-hidden shadow-md transition-transform hover:transform hover:scale-105">
                <a href="/artikel/{{ $article->slug }}/show">
                    <img src="{{ filter_var($article->thumbnail, FILTER_VALIDATE_URL) ? $article->thumbnail : $article->thumbnail_url }}" alt="Blog Post" class="w-full h-96 object-cover">
                    <div class="p-8">
                        <div class="flex items-center mb-4">
                            <span class="bg-pink-100 text-pink-800 text-xs px-2 py-1 rounded">{{ $article->type }}</span>
                            <span class="text-gray-500 text-sm ml-2">{{ $article->created_at->format('d F Y') }}</span>
                        </div>
                        <h3 class="text-3xl font-semibold mb-4">{{ $article->title }}</h3>
                        <p class="text-gray-600 mb-6">{{ $article->subtitle }}</p>
                        <div class="flex items-center">
                            <span class="text-sm text-gray-600">Oleh {{ $article->user->name }}</span>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach

        </div>

    </div>
    @else
    <div class="py-12 bg-white">
        <div class="mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white rounded-lg overflow-hidden shadow-md transition-transform hover:transform hover:scale-105">
                <div class="p-8">
                    <h3 class="text-xl mb-4">Belum Ada Artikel</h3>
                </div>
            </div>
        </div>
    </div>
    @endif
    <!-- Pagination -->
    <div class="mx-auto w-3/4 mt-8 mb-12 ">
        {{ $articles->links('pagination-links') }}
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
