<div>
    <form wire:submit.prevent="update">
        <div class="mb-4">
            <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Judul</label>
            <input wire:model="title" type="text" id="title" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            @error('title') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="subtitle" class="block text-gray-700 text-sm font-bold mb-2">Subtitle</label>
            <textarea cols="30" rows="2" wire:model="subtitle" type="text" id="subtitle" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
            @error('subtitle') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="slug" class="block text-gray-700 text-sm font-bold mb-2">Slug</label>
            <input wire:model="slug" type="text" id="slug" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            @error('slug') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="type" class="block text-gray-700 text-sm font-bold mb-2">Tipe</label>
            <input wire:model="type" type="text" id="type" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            @error('type') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="thumbnail" class="block text-gray-700 text-sm font-bold mb-2">Thumbnail</label>

            @if ($thumbnail && !$newThumbnail)
                <div class="mb-2 border rounded p-2">
                    <img src="{{ $article->thumbnail_url }}" class="h-full w-auto object-cover rounded">
                    <button type="button" wire:click="deleteThumbnail" class="mt-2 bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded text-xs">
                        Hapus Thumbnail
                    </button>
                </div>
            @endif

            <input wire:model="newThumbnail" type="file" id="newThumbnail" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            @error('newThumbnail') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror

            @if ($newThumbnail)
                <div class="mt-2 border rounded p-2">
                    <span class="text-sm text-gray-500">Preview:</span>
                    <img src="{{ $newThumbnail->temporaryUrl() }}" class="mt-1 h-32 w-auto object-cover rounded">
                </div>
            @endif
        </div>

        <div class="mb-4">
            <label for="editor" class="block text-gray-700 text-sm font-bold mb-2">Konten</label>
            <div wire:ignore>
                <div id="editor"></div>
            </div>
            @error('content') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="published_date" class="block text-gray-700 text-sm font-bold mb-2">Tanggal Publikasi</label>
            <input wire:model="published_date" type="date" id="published_date" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            @error('published_date') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label class="flex items-center">
                <input wire:model="is_active" type="checkbox" class="form-checkbox h-5 w-5 text-blue-600">
                <span class="ml-2 text-gray-700">Publish artikel</span>
            </label>
        </div>

        <div class="flex items-center justify-end">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                Update
            </button>
        </div>
    </form>
</div>

<script>
    document.addEventListener('livewire:initialized', function () {
        const editor = new toastui.Editor({
            el: document.querySelector('#editor'),
            height: '500px',
            initialEditType: 'markdown',
            previewStyle: 'vertical',
            initialValue: @json($content ?? '')
        });

        // Sync editor content with Livewire component
        editor.on('change', () => {
            @this.set('content', editor.getMarkdown());
        });

        // Make editor available globally (useful for debugging)
        window.editor = editor;
    });
</script>

