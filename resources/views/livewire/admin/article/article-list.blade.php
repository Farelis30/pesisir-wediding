<div>
    <div class="mb-4 flex flex-col md:flex-row space-y-4 md:space-y-0 md:space-x-4">
        <div class="flex-1">
            <input type="text" wire:model.debounce.300ms="search" placeholder="Cari artikel..." class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>
        <div class="flex-initial">
            <select wire:model="status" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
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
                    <th class="py-2 px-4 border-b border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Thumbnail
                    </th>
                    <th class="py-2 px-4 border-b border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Judul
                    </th>
                    <th class="py-2 px-4 border-b border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Penulis
                    </th>
                    <th class="py-2 px-4 border-b border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Status
                    </th>
                    <th class="py-2 px-4 border-b border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Tanggal Publish
                    </th>
                    <th class="py-2 px-4 border-b border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Aksi
                    </th>
                </tr>
            </thead>
            <tbody>
                @forelse ($articles as $article)
                    <tr>
                        <td class="py-2 px-4 border-b border-gray-200">
                            @if($article->thumbnail)
                                <img src="{{ $article->thumbnail_url }}" alt="{{ $article->title }}" class="h-12 w-16 object-cover rounded">
                            @else
                                <div class="h-12 w-16 bg-gray-200 flex items-center justify-center rounded">
                                    <span class="text-gray-500 text-xs">No Image</span>
                                </div>
                            @endif
                        </td>
                        <td class="py-2 px-4 border-b border-gray-200">
                            <div class="font-medium text-gray-900">{{ $article->title }}</div>
                            <div class="text-gray-500 text-sm">{{ $article->excerpt }}</div>
                        </td>
                        <td class="py-2 px-4 border-b border-gray-200">
                            {{ $article->user->name }}
                        </td>
                        <td class="py-2 px-4 border-b border-gray-200">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full {{ $article->is_active ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                                {{ $article->is_active ? 'Aktif' : 'Draft' }}
                            </span>
                        </td>
                        <td class="py-2 px-4 border-b border-gray-200">
                            {{ $article->published_date ? $article->published_date->format('d M Y') : 'Belum dipublikasikan' }}
                        </td>
                        <td class="py-2 px-4 border-b border-gray-200">
                            <div class="flex space-x-2">
                                <a href="{{ route('admin.articles.show', $article->id) }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-2 rounded text-xs">
                                    Lihat
                                </a>
                                <button wire:click="toggleActive({{ $article->id }})" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-1 px-2 rounded text-xs">
                                    {{ $article->is_active ? 'Draft' : 'Publish' }}
                                </button>
                                <a href="{{ route('admin.articles.edit', $article->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded text-xs">
                                    Edit
                                </a>
                                <button wire:click="delete({{ $article->id }})" onclick="return confirm('Anda yakin ingin menghapus artikel ini?')" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded text-xs">
                                    Hapus
                                </button>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="py-3 px-4 text-center text-gray-500">
                            Tidak ada data artikel
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-4">
        {{ $articles->links() }}
    </div>
</div>
