<div class="min-h-screen flex items-center justify-center bg-gray-100">
    <div class="max-w-md w-full bg-white p-8 rounded-lg shadow-md">
        <h2 class="text-2xl text-pink-600 mb-6 text-center font-serif">PesisirWedding</h2>

        <form wire:submit.prevent="login">
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
                <label class="flex items-center">
                    <input type="checkbox" wire:model="remember" class="mr-2">
                    <span class="text-sm">Remember me</span>
                </label>
            </div>

            <button type="submit" class="w-full bg-pink-500 text-white py-2 rounded-lg hover:bg-pink-600">
                Login
            </button>
        </form>

        <p class="mt-4 text-center">
            Don't have an account?
            <a href="{{ route('register') }}" wire:navigate class="text-pink-500 hover:underline">Register</a>
        </p>
        <p class="mt-1 text-center">
            or
            <a href="{{ route('home') }}" wire:navigate class="text-pink-500 hover:underline">back to homepage</a>
        </p>
    </div>
</div>
