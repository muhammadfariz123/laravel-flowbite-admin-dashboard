<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            {{-- ADMIN DASHBOARD --}}
            @if(Auth::user()->role === 'Admin')
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-6">
                    <div class="bg-white p-6 rounded-lg shadow">
                        <h3 class="text-lg font-semibold text-gray-700">Jumlah Produk</h3>
                        <p class="text-3xl font-bold mt-2 text-indigo-600">{{ $productCount }}</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow">
                        <h3 class="text-lg font-semibold text-gray-700">Barang Masuk (bulan ini)</h3>
                        <p class="text-3xl font-bold mt-2 text-green-600">{{ $stockIn }}</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow">
                        <h3 class="text-lg font-semibold text-gray-700">Barang Keluar (bulan ini)</h3>
                        <p class="text-3xl font-bold mt-2 text-red-600">{{ $stockOut }}</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow">
                        <h3 class="text-lg font-semibold text-gray-700">Pengguna Terdaftar</h3>
                        <p class="text-3xl font-bold mt-2 text-yellow-600">{{ $userCount }}</p>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow mb-6">
                    <h3 class="text-lg font-semibold mb-4 text-gray-700">Grafik Stok Barang (Dummy)</h3>
                    <div class="w-full h-64 bg-gray-100 flex items-center justify-center rounded">
                        <span class="text-gray-400">[ Grafik placeholder di sini ]</span>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="text-lg font-semibold mb-4 text-gray-700">Aktivitas Pengguna Terbaru</h3>
                    <ul class="list-disc ml-5 text-gray-700 space-y-2">
                        @foreach ($activities as $activity)
                            <li>{{ $activity }}</li>
                        @endforeach
                    </ul>
                </div>
            @else
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        {{ __("You're logged in as " . Auth::user()->role) }}
                    </div>
                </div>
            @endif

        </div>
    </div>
</x-app-layout>
