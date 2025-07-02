<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold text-gray-800">Tambah Pengguna</h2>
    </x-slot>

    <div class="py-6 max-w-3xl mx-auto sm:px-6 lg:px-8">
        <a href="{{ route('admin.users.index') }}"
           class="mb-6 inline-flex px-4 py-2 bg-red-600 text-white rounded hover:bg-gray-700 transition">
            ← Kembali
        </a>

        <div class="bg-white shadow-md rounded p-6">
            <form method="POST" action="{{ route('admin.users.store') }}" class="space-y-5">
                @csrf

                <div>
                    <label for="name" class="block text-sm font-medium">Nama</label>
                    <input type="text" name="name" id="name" required
                        class="mt-1 w-full rounded border-gray-300 shadow-sm focus:ring-red-500 focus:border-red-500">
                </div>
                <br>

                <div>
                    <label for="email" class="block text-sm font-medium">Email</label>
                    <input type="email" name="email" id="email" required
                        class="mt-1 w-full rounded border-gray-300 shadow-sm focus:ring-red-500 focus:border-red-500">
                </div>
                <br>

                <div>
                    <label for="role" class="block text-sm font-medium">Role</label>
                    <select name="role" id="role" required
                        class="mt-1 w-full rounded border-gray-300 shadow-sm focus:ring-red-500 focus:border-red-500">
                        <option value="Admin">Admin</option>
                        <option value="Manajer Gudang">Manajer Gudang</option>
                        <option value="Staff Gudang">Staff Gudang</option>
                    </select>
                </div>
                <br>

                <div>
                    <label for="password" class="block text-sm font-medium">Password</label>
                    <input type="password" name="password" id="password" required
                        class="mt-1 w-full rounded border-gray-300 shadow-sm focus:ring-red-500 focus:border-red-500">
                </div>
                <br>

                <div>
                    <button type="submit"
                        class="bg-red-600 text-white px-6 py-2 rounded hover:bg-gray-700 transition font-semibold">
                        Simpan Pengguna
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
