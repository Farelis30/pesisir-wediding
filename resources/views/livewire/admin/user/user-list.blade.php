<div>
    <div class="mb-4">
        <input wire:model="search" type="search" placeholder="Cari user..." class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
    </div>

    <div class="overflow-x-auto">
        <table class="min-w-full bg-white">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">No</th>
                    <th class="py-2 px-4 border-b border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">ID</th>
                    <th class="py-2 px-4 border-b border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Nama</th>
                    <th class="py-2 px-4 border-b border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Email</th>
                    <th class="py-2 px-4 border-b border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Role</th>
                    <th class="py-2 px-4 border-b border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($users as $user)
                    <tr>
                        <td class="py-2 px-4 border-b border-gray-200">{{ $loop->iteration }}</td>
                        <td class="py-2 px-4 border-b border-gray-200">{{ $user->id }}</td>
                        <td class="py-2 px-4 border-b border-gray-200">{{ $user->name }}</td>
                        <td class="py-2 px-4 border-b border-gray-200">{{ $user->email }}</td>
                        <td class="py-2 px-4 border-b border-gray-200">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full {{ $user->role == 'admin' ? 'bg-blue-100 text-blue-800' : 'bg-green-100 text-green-800' }}">
                                {{ ucfirst($user->role) }}
                            </span>
                        </td>
                        <td class="py-2 px-4 border-b border-gray-200">
                            <div class="flex space-x-2">
                                <button onclick="confirmRoleChange({{ $user->id }})" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-1 px-2 rounded text-xs">
                                    Ubah Role
                                </button>
                                <a href="{{ route('admin.users.edit', $user->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded text-xs">
                                    Edit
                                </a>
                                <button onclick="confirmDelete({{ $user->id }})" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded text-xs">Hapus</button>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="py-3 px-4 text-center text-gray-500">Tidak ada data user</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-4">
        {{ $users->links() }}
    </div>
</div>

<script>
    function confirmRoleChange(userId) {
        Swal.fire({
            title: 'Anda yakin ingin mengubah role user ini?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Ubah',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                @this.call('toggleRole', userId);
                Swal.fire('Role Diubah!', 'Role user telah diubah.', 'success');
            }
        });
    }

    function confirmDelete(userId) {
        Swal.fire({
            title: 'Anda yakin ingin menghapus user ini?',
            text: "Data yang dihapus tidak dapat dikembalikan!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Hapus',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                @this.call('delete', userId);
                Swal.fire('Terhapus!', 'User telah dihapus.', 'success');
            }
        });
    }
</script>
