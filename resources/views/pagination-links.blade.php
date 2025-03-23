<div>
    @if ($paginator->hasPages())
        <nav role="navigation" aria-label="Pagination Navigation" class="flex justify-between">
            <span>
                {{-- Previous Page Link --}}
                @if ($paginator->onFirstPage())
                    <span class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-pink-500 bg-white border border-pink-300 cursor-default leading-5 rounded-md">
                        {!! __('pagination.previous') !!}
                    </span>
                @else
                    <button wire:click="previousPage" wire:loading.attr="disabled" rel="prev" class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-pink-700 bg-white border border-pink-300 leading-5 rounded-md hover:text-pink-500 focus:outline-none focus:shadow-outline-pink focus:border-pink-300 active:bg-pink-100 active:text-pink-700 transition ease-in-out duration-150">
                        {!! __('pagination.previous') !!}
                    </button>
                @endif
            </span>

            <div class="flex max-w-1/2">
                {{-- Display Page Numbers with '...' --}}
                @foreach ($elements as $element)
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            {{-- Show first few pages, then '...', then last few pages --}}
                            @if ($page == $paginator->currentPage())
                                <span class="bg-pink-500 text-white px-4 py-2 rounded-md">{{ $page }}</span>
                            @elseif ($page == 1 || $page == $paginator->lastPage() || ($page >= $paginator->currentPage() - 2 && $page <= $paginator->currentPage() + 2))
                                <a href="{{ $url }}" class="bg-white text-pink-500 px-4 py-2 rounded-md hover:bg-pink-100">{{ $page }}</a>
                            @elseif ($page == $paginator->currentPage() - 3 || $page == $paginator->currentPage() + 3)
                                <span class="bg-white text-pink-500 px-4 py-2">...</span>
                            @endif
                        @endforeach
                    @endif
                @endforeach
            </div>

            <span>
                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())
                    <button wire:click="nextPage" wire:loading.attr="disabled" rel="next" class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-pink-700 bg-white border border-pink-300 leading-5 rounded-md hover:text-pink-500 focus:outline-none focus:shadow-outline-pink focus:border-pink-300 active:bg-pink-100 active:text-pink-700 transition ease-in-out duration-150">
                        {!! __('pagination.next') !!}
                    </button>
                @else
                    <span class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-pink-500 bg-white border border-pink-300 cursor-default leading-5 rounded-md">
                        {!! __('pagination.next') !!}
                    </span>
                @endif
            </span>
        </nav>
    @endif
</div>
