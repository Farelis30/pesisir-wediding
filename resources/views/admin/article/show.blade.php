<x-layouts.admin>
    @section('title', $article->title)
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ $article->title }}
            </h2>
            <a href="{{ route('admin.articles.index') }}" class="inline-flex items-center px-4 py-2 bg-gray-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
                Kembali
            </a>
        </div>
    </x-slot>

    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
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
                        <span class="mx-2">|</span>
                        <span>Status: {{ $article->is_active ? 'Published' : 'Draft' }}</span>
                        @if($article->published_date)
                            <span class="mx-2">|</span>
                            <span>Dipublikasikan: {{ $article->published_date->format('d M Y') }}</span>
                        @endif
                        <span class="mx-2">|</span>
                        <span class="bg-pink-100 text-pink-800 text-xs px-2 py-1 rounded">{{ $article->type }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.admin>
