<x-layouts.admin>
    @section('title', 'Manajemen User')
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
                {{ __('User Management') }}
            </h2>
            <a href="{{ route('admin.users.create') }}" class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 active:bg-blue-900 focus:outline-none focus:border-blue-900 focus:ring ring-blue-300 disabled:opacity-25 transition ease-in-out duration-150">
                Tambah User
            </a>
        </div>
    </x-slot>

    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @if (session()->has('message'))
                        <div class="mb-4 px-4 py-2 bg-green-100 text-green-800 rounded">
                            {{ session('message') }}
                        </div>
                    @endif

                    @livewire('admin.user.user-list')
                </div>
            </div>
        </div>
    </div>

    <script>
        window.addEventListener('user-updated', event => {
            alert(event.detail.message);
        });

        window.addEventListener('user-deleted', event => {
            alert(event.detail.message);
        });
    </script>
</x-layouts.admin>
