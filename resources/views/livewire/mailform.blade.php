<div class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-serif text-gray-900 mb-4">Kontak Kami</h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                Jika Anda memiliki pertanyaan atau ingin berkonsultasi lebih lanjut, isi form di bawah ini dan tim kami akan segera menghubungi Anda
            </p>
        </div>

        @if ($successMessage)
            <div id="success-message" class="mb-6 bg-green-100 text-green-800 p-4 rounded-lg shadow-md text-center">
                {{ $successMessage }}
            </div>
        @endif

        <form wire:submit.prevent="sendEmail">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div>
                    <label for="name" class="block text-lg font-medium text-gray-700">Nama Anda</label>
                    <input type="text" wire:model="name" id="name" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-pink-600" required />
                    @error('name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>
                <div>
                    <label for="email" class="block text-lg font-medium text-gray-700">Email Anda</label>
                    <input type="email" wire:model="email" id="email" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-pink-600" required />
                    @error('email') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="mt-8">
                <label for="message" class="block text-lg font-medium text-gray-700">Pesan Anda</label>
                <textarea wire:model="message" id="message" rows="6" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-pink-600" required></textarea>
                @error('message') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>
            <div class="mt-8 text-center">
                <button type="submit" class="inline-block px-8 py-4 rounded-md bg-pink-600 text-white font-medium hover:bg-pink-700 transition-colors" wire:loading.attr="disabled" wire:loading.class="opacity-75">
                    <span wire:loading.remove>Kirim Pesan</span>
                    <span wire:loading>
                        <svg class="animate-spin -ml-1 mr-2 h-5 w-5 text-white inline" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                        </svg>
                        Mengirim...
                    </span>
                </button>
            </div>
        </form>
    </div>

    <script>
        document.addEventListener('livewire:initialized', () => {
            @this.on('success-message-shown', () => {
                // Make sure the success message stays visible
                // You can adjust the timeout (5000ms = 5 seconds)
                setTimeout(() => {
                    // This will clear the success message after 5 seconds
                    // Only clear it if we need to - if it's still showing
                    if (@this.successMessage) {
                        @this.set('successMessage', '');
                    }
                }, 5000);
            });
        });
    </script>
</div>
