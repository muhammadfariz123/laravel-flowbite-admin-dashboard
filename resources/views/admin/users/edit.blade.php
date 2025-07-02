<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold text-gray-800">Edit Pengguna</h2>
    </x-slot>

    <div class="py-6 max-w-3xl mx-auto sm:px-6 lg:px-8">
        <a href="{{ route('admin.users.index') }}"
           class="mb-6 inline-flex px-4 py-2 bg-red-600 text-white rounded hover:bg-gray-700 transition">
            ← Kembali
        </a>

        <div class="bg-white shadow-md rounded p-6">
            <form method="POST" action="{{ route('admin.users.update', $user) }}" class="space-y-5">
                @csrf
                @method('PUT')

                <div>
                    <label for="name" class="block text-sm font-medium">Nama</label>
                    <input type="text" name="name" id="name" value="{{ $user->name }}" required
                        class="mt-1 w-full rounded border-gray-300 shadow-sm focus:ring-red-500 focus:border-red-500">
                </div>
                <br>

                <div>
                    <label for="email" class="block text-sm font-medium">Email</label>
                    <input type="email" name="email" id="email" value="{{ $user->email }}" required
                        class="mt-1 w-full rounded border-gray-300 shadow-sm focus:ring-red-500 focus:border-red-500">
                </div>
                <br>

                <div>
                    <label for="role" class="block text-sm font-medium">Role</label>
                    <select name="role" id="role"
                        class="mt-1 w-full rounded border-gray-300 shadow-sm focus:ring-red-500 focus:border-red-500">
                        <option value="Admin" {{ $user->role === 'Admin' ? 'selected' : '' }}>Admin</option>
                        <option value="Manajer Gudang" {{ $user->role === 'Manajer Gudang' ? 'selected' : '' }}>Manajer Gudang</option>
                        <option value="Staff Gudang" {{ $user->role === 'Staff Gudang' ? 'selected' : '' }}>Staff Gudang</option>
                    </select>
                </div>
                <br>

                <div>
                    <label for="password" class="block text-sm font-medium">Password (Kosongkan jika tidak ingin mengubah)</label>
                    <input type="password" name="password" id="password"
                        class="mt-1 w-full rounded border-gray-300 shadow-sm focus:ring-red-500 focus:border-red-500">
                </div>
                <br>

                <div>
                    <button type="submit"
                        class="bg-red-600 text-white px-6 py-2 rounded hover:bg-gray-700 transition font-semibold">
                        Update Pengguna
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
