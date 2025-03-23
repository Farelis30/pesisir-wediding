<div>
    <form wire:submit.prevent="update">
        <div class="mb-4">
            <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Nama</label>
            <input wire:model="name" type="text" id="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            @error('name') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
            <input wire:model="email" type="email" id="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            @error('email') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="role" class="block text-gray-700 text-sm font-bold mb-2">Role</label>
            <select wire:model="role" id="role" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                <option value="user">User</option>
                <option value="admin">Admin</option>
            </select>
            @error('role') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="avatar" class="block text-gray-700 text-sm font-bold mb-2">Thumbnail</label>

            @if ($avatar && !$newAvatar)
                <div class="mb-2 border rounded p-2">
                    <img src="{{ Storage::url($avatar) }}" class="h-16 w-16 object-cover rounded-full">
                    <button type="button" wire:click="deleteAvatar" class="mt-2 bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded text-xs">
                        Hapus Thumbnail
                    </button>
                </div>
            @endif

            <input wire:model="newAvatar" type="file" id="newAvatar" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            @error('newAvatar') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror

            @if ($newAvatar)
                <div class="mt-2 border rounded p-2">
                    <span class="text-sm text-gray-500">Preview:</span>
                    <img src="{{ $newAvatar->temporaryUrl() }}" class="mt-1 h-16 w-16 object-cover rounded-full">
                </div>
            @endif
        </div>

        <div class="mb-4">
            <label class="flex items-center">
                <input type="hidden" wire:model="is_active" value="0">
                <input wire:model="is_active" type="checkbox" value="1" class="form-checkbox h-5 w-5 text-blue-600">
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
