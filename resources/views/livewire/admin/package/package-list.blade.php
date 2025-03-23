<div>
    <div class="mb-4 flex flex-col md:flex-row space-y-4 md:space-y-0 md:space-x-4">
        <div class="flex-1">
            <input type="text" wire:model.live="search" placeholder="Cari Paket..." class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>
        <div class="flex-initial">
            <select wire:model.live="status" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                <option value="">Semua Status</option>
                <option value="active">Aktif</option>
                <option value="inactive">Tidak Aktif</option>
            </select>
        </div>
    </div>

    <div class="overflow-x-auto">
        <table class="min-w-full bg-white">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase">No</th>
                    <th class="py-2 px-4 border-b bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase">ID</th>
                    <th class="py-2 px-4 border-b bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase">Thumbnail</th>
                    <th class="py-2 px-4 border-b bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase">Nama</th>
                    <th class="py-2 px-4 border-b bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase">Deskripsi</th>
                    <th class="py-2 px-4 border-b bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase">Harga</th>
                    <th class="py-2 px-4 border-b bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase">Status</th>
                    <th class="py-2 px-4 border-b bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($packages as $index => $package)
                    <tr>
                        <td class="py-2 px-4 border-b">{{ $loop->iteration }}</td>
                        <td class="py-2 px-4 border-b">{{ $package->id }}</td>
                        <td class="py-2 px-4 border-b border-gray-200">
                            @if($package->thumbnail)
                                <img src="{{ Storage::url($package->thumbnail) }}" alt="{{ $package->title }}" class="h-12 w-16 object-cover rounded">
                            @else
                                <div class="h-12 w-16 bg-gray-200 flex items-center justify-center rounded">
                                    <span class="text-gray-500 text-xs">No Image</span>
                                </div>
                            @endif
                        </td>
                        <td class="py-2 px-4 border-b">{{ $package->title }}</td>
                        <td class="py-2 px-4 border-b">{{ Str::limit($package->description, 50) }}</td>
                        <td class="py-2 px-4 border-b">{{ number_format($package->price, 0, ',', '.') }}</td>
                        <td class="py-2 px-4 border-b">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full {{ $package->is_active ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                                {{ $package->is_active ? 'Aktif' : 'Tidak Aktif' }}
                            </span>
                        </td>
                        <td class="py-2 px-4 border-b">
                            <div class="flex space-x-2">
                                <a href="{{ route('admin.packages.show', $package->id) }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-2 rounded text-xs">Lihat</a>
                                <button onclick="confirmToggle({{ $package->id }})" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-1 px-2 rounded text-xs">
                                    {{ $package->is_active ? 'Nonaktifkan' : 'Aktifkan' }}
                                </button>
                                <a href="{{ route('admin.packages.edit', $package->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded text-xs">Edit</a>
                                <button onclick="confirmDelete({{ $package->id }})" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded text-xs">Hapus</button>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="py-3 px-4 text-center text-gray-500">Tidak ada data paket</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-4">
        {{ $packages->links() }}
    </div>
</div>

<script>
    function confirmToggle(bannerId) {
        Swal.fire({
            title: 'Anda yakin ingin mengubah status paket ini?',
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
                    'Status paket telah diubah.',
                    'success'
                );
            }
        });
    }

    function confirmDelete(bannerId) {
        Swal.fire({
            title: 'Anda yakin ingin menghapus paket ini?',
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
                    'Paket telah dihapus.',
                    'success'
                );
            }
        });
    }
</script>
