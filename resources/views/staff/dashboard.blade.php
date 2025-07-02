<div class="min-h-screen bg-gray-50 flex">
  <!-- Sidebar -->
  <aside class="bg-gray-800 text-white w-1/4 p-6">
    <h2 class="text-2xl font-semibold mb-6">Dashboard</h2>
    <ul>
      <li><a href="#" class="block py-2 hover:bg-gray-700 rounded">Dashboard</a></li>
      <li><a href="#" class="block py-2 hover:bg-gray-700 rounded">Manajemen Stok</a></li>
      <li><a href="#" class="block py-2 hover:bg-gray-700 rounded">Laporan</a></li>
    </ul>
  </aside>

  <!-- Main Content -->
  <main class="flex-1 p-6">
    <!-- Header -->
    <header class="mb-6">
      <h1 class="text-3xl font-semibold text-gray-800">Dashboard Staff Gudang</h1>
    </header>

    <!-- Ringkasan Statistik -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-6 mb-6">
      <div class="bg-white p-6 rounded-lg shadow-lg">
        <h2 class="text-lg font-semibold text-gray-700">Barang Masuk Hari Ini</h2>
        <p class="text-3xl font-bold text-green-600">15 Barang</p>
      </div>
      <div class="bg-white p-6 rounded-lg shadow-lg">
        <h2 class="text-lg font-semibold text-gray-700">Barang Keluar Hari Ini</h2>
        <p class="text-3xl font-bold text-red-600">10 Barang</p>
      </div>
    </div>

    <!-- Daftar Tugas -->
    <div class="bg-white p-6 rounded-lg shadow-lg mb-6">
      <h2 class="text-lg font-semibold text-gray-700 mb-4">Tugas yang Perlu Diperiksa</h2>
      <ul>
        <li class="py-2 px-4 mb-2 bg-gray-100 rounded hover:bg-gray-200">Barang A - Periksa Penerimaan</li>
        <li class="py-2 px-4 mb-2 bg-gray-100 rounded hover:bg-gray-200">Barang B - Persiapkan Pengiriman</li>
        <li class="py-2 px-4 mb-2 bg-gray-100 rounded hover:bg-gray-200">Barang C - Periksa Penerimaan</li>
      </ul>
    </div>

    <!-- Aksi Cepat -->
    <div class="flex space-x-6 mb-6">
      <button class="bg-green-500 text-white py-2 px-4 rounded-lg shadow hover:bg-green-600">Tambah Stok</button>
      <button class="bg-red-500 text-white py-2 px-4 rounded-lg shadow hover:bg-red-600">Keluarkan Barang</button>
    </div>

    <!-- Grafik Stok -->
    <div class="bg-white p-6 rounded-lg shadow-lg">
      <h2 class="text-lg font-semibold text-gray-700 mb-4">Grafik Stok Barang</h2>
      <!-- Placeholder untuk grafik -->
      <div class="w-full h-64 bg-gray-200 rounded-lg flex items-center justify-center text-gray-600">
        Grafik Stok (Placeholder)
      </div>
    </div>
  </main>
</div>
