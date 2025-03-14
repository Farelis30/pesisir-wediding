@section('title', 'Register')
<div class="min-h-screen flex items-center justify-center bg-gray-100">
    <div class="max-w-md w-full bg-white p-8 rounded-lg shadow-md">
        <h2 class="text-2xl font-serif mb-6 text-center text-pink-600">Register</h2>

        <form wire:submit.prevent="register">
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">Nama</label>
                <input type="text" wire:model="name" class="w-full px-3 py-2 border rounded-lg">
                @error('name') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                <input type="email" wire:model="email" class="w-full px-3 py-2 border rounded-lg">
                @error('email') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                <input type="password" wire:model="password" class="w-full px-3 py-2 border rounded-lg">
                @error('password') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>

            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2">Konfirmasi Password</label>
                <input type="password" wire:model="password_confirmation" class="w-full px-3 py-2 border rounded-lg">
            </div>

            <button type="submit" class="w-full bg-pink-500 text-white py-2 rounded-lg hover:bg-pink-600">
                Register
            </button>
        </form>

        <p class="mt-4 text-center">
            Sudah punya akun?
            <a href="{{ route('login') }}" wire:navigate class="text-pink-500 hover:underline">Login disini</a>
        </p>
        <p class="mt-1 text-center">
            atau
            <a href="{{ route('user.home.index') }}" wire:navigate class="text-pink-500 hover:underline">kembali ke halaman utama</a>
        </p>
    </div>
</div>
