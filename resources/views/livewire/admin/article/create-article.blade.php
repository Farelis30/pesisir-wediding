<div>
    <form wire:submit.prevent="save">
        <div class="mb-4">
            <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Judul</label>
            <input wire:model="title" type="text" id="title" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            @error('title') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="thumbnail" class="block text-gray-700 text-sm font-bold mb-2">Thumbnail</label>
            <input wire:model="thumbnail" type="file" id="thumbnail" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            @error('thumbnail') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror

            @if ($thumbnail)
                <div class="mt-2">
                    <span class="text-sm text-gray-500">Preview:</span>
                    <img src="{{ $thumbnail->temporaryUrl() }}" class="mt-1 h-32 w-auto object-cover rounded">
                </div>
            @endif
        </div>

        <div class="mb-4" x-data="markdownEditor()">
            <label for="content" class="block text-gray-700 text-sm font-bold mb-2">Konten (Markdown)</label>
            <div class="mb-2 flex flex-wrap gap-2">
                <button type="button" @click="insertMarkdown('bold')" class="bg-gray-200 hover:bg-gray-300 text-gray-800 font-bold py-1 px-2 rounded text-xs">Bold</button>
                <button type="button" @click="insertMarkdown('italic')" class="bg-gray-200 hover:bg-gray-300 text-gray-800 font-bold py-1 px-2 rounded text-xs">Italic</button>
                <button type="button" @click="insertMarkdown('heading')" class="bg-gray-200 hover:bg-gray-300 text-gray-800 font-bold py-1 px-2 rounded text-xs">Heading</button>
                <button type="button" @click="insertMarkdown('link')" class="bg-gray-200 hover:bg-gray-300 text-gray-800 font-bold py-1 px-2 rounded text-xs">Link</button>
                <button type="button" @click="insertMarkdown('image')" class="bg-gray-200 hover:bg-gray-300 text-gray-800 font-bold py-1 px-2 rounded text-xs">Image</button>
                <button type="button" @click="insertMarkdown('code')" class="bg-gray-200 hover:bg-gray-300 text-gray-800 font-bold py-1 px-2 rounded text-xs">Code</button>
                <button type="button" @click="insertMarkdown('list')" class="bg-gray-200 hover:bg-gray-300 text-gray-800 font-bold py-1 px-2 rounded text-xs">List</button>
                <button type="button" @click="insertMarkdown('quote')" class="bg-gray-200 hover:bg-gray-300 text-gray-800 font-bold py-1 px-2 rounded text-xs">Quote</button>
            </div>
            <textarea wire:model="content" id="content" rows="15" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline font-mono"></textarea>
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
                <span class="ml-2 text-gray-700">Publish sekarang</span>
            </label>
        </div>

        <div class="flex items-center justify-end">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                Simpan
            </button>
        </div>
    </form>
</div>
