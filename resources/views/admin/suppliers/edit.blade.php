<x-app-layout> <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Edit Supplier</h2>
    </x-slot>
    <div class="py-6 max-w-4xl mx-auto sm:px-6 lg:px-8">
        <a href="{{ route('admin.suppliers.index') }}"
            class="mb-6 inline-flex items-center px-4 py-2 bg-red-600 text-white text-sm font-medium rounded-lg hover:bg-gray-700">
            ← Kembali
        </a>

        <div class="bg-white shadow-md rounded-lg p-6">
            @if($errors->any())
                <div class="mb-4 p-4 bg-red-100 text-red-700 border border-red-300 rounded">
                    <ul class="list-disc pl-5 space-y-1 text-sm">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('admin.suppliers.update', $supplier) }}" method="POST" class="space-y-6">
                @csrf
                @method('PUT')
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">Nama</label>
                    <input type="text" name="name" id="name" required value="{{ $supplier->name }}"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-red-500 focus:border-red-500">
                </div>
                <div>
                    <label for="contact" class="block text-sm font-medium text-gray-700">Kontak</label>
                    <input type="text" name="contact" id="contact" value="{{ $supplier->contact }}"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-red-500 focus:border-red-500">
                </div>
                <div>
                    <label for="address" class="block text-sm font-medium text-gray-700">Alamat</label>
                    <textarea name="address" id="address" rows="3"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-red-500 focus:border-red-500">{{ $supplier->address }}</textarea>
                </div>
                <div class="pt-4">
                    <button type="submit"
                        class="bg-red-600 text-white px-6 py-2 rounded-md font-semibold hover:bg-gray-700">
                        Perbarui
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>