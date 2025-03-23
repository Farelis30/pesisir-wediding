<div>
    <form wire:submit.prevent="update">
        <!-- Nama Paket -->
        <div class="mb-4">
            <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Nama Paket</label>
            <input wire:model="title" type="text" id="title" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            @error('title') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
        </div>

        <!-- Slug -->
        <div class="mb-4">
            <label for="slug" class="block text-gray-700 text-sm font-bold mb-2">Slug</label>
            <input wire:model="slug" type="text" id="slug" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            @error('slug') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
        </div>

        <!-- Deskripsi -->
        <div class="mb-4">
            <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Deskripsi</label>
            <textarea wire:model="description" id="description" rows="4" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
            @error('description') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
        </div>

        <!-- Thumbnail -->
        <div class="mb-4">
            <label for="newThumbnail" class="block text-gray-700 text-sm font-bold mb-2">Thumbnail</label>
            <input wire:model="newThumbnail" type="file" id="newThumbnail" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            @error('newThumbnail') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror

            @if ($newThumbnail)
                <div class="mt-2 border rounded p-2">
                    <span class="text-sm text-gray-500">Preview:</span>
                    <img src="{{ $newThumbnail->temporaryUrl() }}" class="mt-1 h-full w-auto object-cover rounded">
                </div>
            @elseif($thumbnail)
                <div class="mt-2 border rounded p-2">
                    <span class="text-sm text-gray-500">Thumbnail Lama:</span>
                    <img src="{{ Storage::url($thumbnail) }}" class="mt-1 h-full w-auto object-cover rounded">
                </div>
            @endif
        </div>

        <!-- Termasuk -->
        <div class="mb-4">
            <label for="includes" class="block text-gray-700 text-sm font-bold mb-2">Termasuk</label>
            @foreach($includes as $index => $include)
                <div class="flex items-center mb-2">
                    <input wire:model="includes.{{ $index }}" type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Item">
                    <button type="button" wire:click="removeInclude({{ $index }})" class="ml-2 text-red-500">Hapus</button>
                </div>
            @endforeach
            <button type="button" wire:click="addInclude" class="text-blue-500">Tambah Item</button>
            @error('includes.*') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
        </div>

        <!-- Harga -->
        <div class="mb-4">
            <label for="price" class="block text-gray-700 text-sm font-bold mb-2">Harga</label>
            <input wire:model="price" type="number" id="price" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            @error('price') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
        </div>

        <!-- Aktif -->
        <div class="mb-4">
            <label class="flex items-center">
                <input wire:model="is_active" type="checkbox" class="form-checkbox h-5 w-5 text-blue-600">
                <span class="ml-2 text-gray-700">Aktif</span>
            </label>
        </div>

        <!-- Tombol Update -->
        <div class="flex items-center justify-end">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                Update
            </button>
        </div>
    </form>
</div>
