<x-layouts.admin>
    @section('title', 'Pengaturan')
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
                {{ __('Pengaturan Data Perusahaan') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <livewire:admin.setting-form>
                </div>
            </div>
        </div>
    </div>

    <script>
        window.addEventListener('banner-updated', event => {
            alert(event.detail.message);
        });

        window.addEventListener('banner-deleted', event => {
            alert(event.detail.message);
        });
    </script>
</x-layouts.admin>
