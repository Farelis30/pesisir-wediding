<x-layouts.app>
@section('title', 'Detail Artikel')
<div class="min-h-screen flex flex-col">
    <livewire:welcome-navbar />

    <div class="relative bg-cover bg-center h-16">
    </div>

    <div class="mt-5">
        <div class="py-12">
            <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
                <button onclick="window.history.back()" class="text-pink-500 hover:underline">
                    <i class="fas fa-arrow-left mr-1"></i> Kembali
                </button>
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        @if($article->thumbnail)
                            <div class="mb-8">
                                <img src="{{ filter_var($article->thumbnail, FILTER_VALIDATE_URL) ? $article->thumbnail : $article->thumbnail_url }}" alt="{{ $article->title }}" class="rounded-lg w-full h-64 object-cover">
                            </div>
                        @endif

                        <div class="prose max-w-none">
                            {!! $article->formatted_content !!}
                        </div>

                        <div class="mt-8 flex items-center text-gray-500 text-sm">
                            <span>Dibuat oleh: {{ $article->user->name }}</span>
                            @if($article->published_date)
                                <span class="mx-2">|</span>
                                <span>Tanggal: {{ $article->published_date->format('d M Y') }}</span>
                            @else
                                <span class="mx-2">|</span>
                                <span>Tanggal: {{ $article->created_at->format('d M Y') }}</span>
                            @endif
                            <span class="mx-2">|</span>
                            <span class="bg-pink-100 text-pink-800 text-xs px-2 py-1 rounded">{{ $article->type }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <livewire:welcome-footer />
</div>
</x-layouts.app>
