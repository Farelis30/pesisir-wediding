<div class="min-h-screen bg-gray-100">
    <!-- Navigation -->
    <nav class="bg-white shadow-lg">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex justify-between items-center h-16">
                <div class="font-bold text-xl">User Dashboard</div>
                <div class="flex items-center">
                    <span class="mr-4">Welcome, {{ auth()->user()->name }}</span>
                    <button
                        wire:click="logout"
                        class="bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600"
                    >
                        Logout
                    </button>
                </div>
            </div>
        </div>
    </nav>
</div>
