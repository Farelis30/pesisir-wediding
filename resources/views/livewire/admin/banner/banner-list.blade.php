<div>
    <div class="mb-4">
        <input wire:model="search" type="search" placeholder="Cari banner..." class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
    </div>

    <div class="overflow-x-auto">
        <table class="min-w-full bg-white">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        No
                    </th>
                    <th class="py-2 px-4 border-b border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        ID
                    </th>
                    <th class="py-2 px-4 border-b border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Judul
                    </th>
                    <th class="py-2 px-4 border-b border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Deskripsi
                    </th>
                    <th class="py-2 px-4 border-b border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        CTA Text
                    </th>
                    <th class="py-2 px-4 border-b border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Status
                    </th>
                    <th class="py-2 px-4 border-b border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Aksi
                    </th>
                </tr>
            </thead>
            <tbody>
                @forelse ($banners as $banner)
                    <tr>
                        <td class="py-2 px-4 border-b border-gray-200">
                            {{ $loop->iteration }}
                        </td>
                        <td class="py-2 px-4 border-b border-gray-200">
                            {{ $banner->id }}
                        </td>
                        <td class="py-2 px-4 border-b border-gray-200">
                            {{ $banner->title }}
                        </td>
                        <td class="py-2 px-4 border-b border-gray-200">
                            {{ Str::limit($banner->description, 50) }}
                        </td>
                        <td class="py-2 px-4 border-b border-gray-200">
                            {{ $banner->cta_text }}
                        </td>
                        <td class="py-2 px-4 border-b border-gray-200">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full {{ $banner->is_active ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                                {{ $banner->is_active ? 'Aktif' : 'Tidak Aktif' }}
                            </span>
                        </td>
                        <td class="py-2 px-4 border-b border-gray-200">
                            <div class="flex space-x-2">
                                <button onclick="confirmToggle({{ $banner->id }})" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-1 px-2 rounded text-xs">
                                    {{ $banner->is_active ? 'Nonaktifkan' : 'Aktifkan' }}
                                </button>
                                <a href="{{ route('admin.banners.edit', $banner->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded text-xs">
                                    Edit
                                </a>
                                <button onclick="confirmDelete({{ $banner->id }})" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded text-xs">Hapus</button>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="py-3 px-4 text-center text-gray-500">
                            Tidak ada data banner
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-4">
        {{ $banners->links() }}
    </div>
</div>

<script>
    function confirmToggle(bannerId) {
        Swal.fire({
            title: 'Anda yakin ingin mengubah status banner ini?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Ubah',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                @this.call('toggleActive', bannerId);
                Swal.fire(
                    'Status Berubah!',
                    'Status banner telah diubah.',
                    'success'
                );
            }
        });
    }

    function confirmDelete(bannerId) {
        Swal.fire({
            title: 'Anda yakin ingin menghapus banner ini?',
            text: "Data yang dihapus tidak dapat dikembalikan!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Hapus',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                @this.call('delete', bannerId);
                Swal.fire(
                    'Terhapus!',
                    'Banner telah dihapus.',
                    'success'
                );
            }
        });
    }
</script>
