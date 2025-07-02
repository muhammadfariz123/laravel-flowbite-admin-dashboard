<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold text-gray-800">Manajemen Pengguna</h2>
    </x-slot>

    <div class="py-6 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="flex justify-between items-center mb-4">
            <h3 class="text-lg font-semibold text-gray-700">Daftar Pengguna</h3>
            <a href="{{ route('admin.users.create') }}"
                class="inline-flex items-center gap-2 px-5 py-2.5 bg-red-600 text-white font-semibold text-sm rounded-lg shadow hover:bg-gray-700 transition">
                + Tambah Pengguna
            </a>
        </div>

        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-bold text-gray-700 uppercase">Nama</th>
                        <th class="px-6 py-3 text-left text-xs font-bold text-gray-700 uppercase">Email</th>
                        <th class="px-6 py-3 text-left text-xs font-bold text-gray-700 uppercase">Role</th>
                        <th class="px-6 py-3 text-left text-xs font-bold text-gray-700 uppercase">Aksi</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-100">
                    @forelse ($users as $user)
                        <tr>
                            <td class="px-6 py-4 text-sm text-gray-800">{{ $user->name }}</td>
                            <td class="px-6 py-4 text-sm text-gray-600">{{ $user->email }}</td>
                            <td class="px-6 py-4 text-sm text-gray-600">{{ $user->role }}</td>
                            <td class="px-6 py-4 text-sm">
                                <div class="flex space-x-2">
                                    <a href="{{ route('admin.users.edit', $user) }}" class="text-indigo-600 hover:underline">Edit</a>
                                    <form action="{{ route('admin.users.destroy', $user) }}" method="POST"
                                        onsubmit="return confirm('Yakin ingin menghapus pengguna ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:underline">Hapus</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr><td colspan="4" class="px-6 py-4 text-center text-gray-500">Belum ada data pengguna.</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
