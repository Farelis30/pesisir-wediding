<div>
    <form wire:submit.prevent="update">
        <div class="mb-4">
            <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Judul</label>
            <input wire:model="title" type="text" id="title" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            @error('title') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Deskripsi</label>
            <textarea wire:model="description" id="description" rows="4" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
            @error('description') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="cta_text" class="block text-gray-700 text-sm font-bold mb-2">Teks Button CTA</label>
            <input wire:model="cta_text" type="text" id="cta_text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            @error('cta_text') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="cta_url" class="block text-gray-700 text-sm font-bold mb-2">URL Button CTA</label>
            <input wire:model="cta_url" type="text" id="cta_url" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            @error('cta_url') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label class="flex items-center">
                <input wire:model="is_active" type="checkbox" class="form-checkbox h-5 w-5 text-blue-600">
                <span class="ml-2 text-gray-700">Aktif</span>
            </label>
        </div>

        <div class="flex items-center justify-end">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                Update
            </button>
        </div>
    </form>
</div>
