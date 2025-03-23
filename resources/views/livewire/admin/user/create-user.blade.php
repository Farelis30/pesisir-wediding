<div>
    <form wire:submit.prevent="save">
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

        <div class="mb-4 relative">
            <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password</label>
            <input wire:model="password" type="password" id="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            <span class="absolute right-3 top-9 cursor-pointer" onclick="togglePassword('password')">
                <i id="password-icon" class="fas fa-eye"></i>
            </span>
            @error('password') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4 relative">
            <label for="password_confirmation" class="block text-gray-700 text-sm font-bold mb-2">Konfirmasi Password</label>
            <input wire:model="password_confirmation" type="password" id="password_confirmation" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            <span class="absolute right-3 top-9 cursor-pointer" onclick="togglePassword('password_confirmation')">
                <i id="password_confirmation-icon" class="fas fa-eye"></i>
            </span>
            @error('password_confirmation') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
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
            <label for="avatar" class="block text-gray-700 text-sm font-bold mb-2">Avatar</label>
            <input wire:model="avatar" type="file" id="avatar" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            @error('avatar') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror

            @if ($avatar)
                <div class="mt-2 border rounded p-2">
                    <span class="text-sm text-gray-500">Preview:</span>
                    <img src="{{ $avatar->temporaryUrl() }}" class="mt-1 h-24 w-24 object-cover rounded-full">
                </div>
            @endif
        </div>

        <div class="mb-4">
            <label class="flex items-center">
                <input wire:model="is_active" type="checkbox" class="form-checkbox h-5 w-5 text-blue-600">
                <span class="ml-2 text-gray-700">Aktif</span>
            </label>
        </div>


        <div class="flex items-center justify-end">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                Simpan
            </button>
        </div>
    </form>
</div>

<script>
    function togglePassword(field) {
        let input = document.getElementById(field);
        let icon = document.getElementById(`${field}-icon`);
        if (input.type === "password") {
            input.type = "text";
            icon.classList.remove("fa-eye");
            icon.classList.add("fa-eye-slash");
        } else {
            input.type = "password";
            icon.classList.remove("fa-eye-slash");
            icon.classList.add("fa-eye");
        }
    }
</script>
