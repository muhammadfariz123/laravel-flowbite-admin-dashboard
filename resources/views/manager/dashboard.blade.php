<div class="min-h-screen bg-gray-100 flex">
  <!-- Sidebar -->
  <aside class="bg-gray-800 text-white w-1/4 p-6">
    <h2 class="text-2xl font-semibold mb-6">Dashboard Manajer Gudang</h2>
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
      <h1 class="text-3xl font-semibold text-gray-800">Dashboard Manajer Gudang</h1>
    </header>

    <!-- Ringkasan Statistik -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-6">
      <div class="bg-white p-6 rounded-lg shadow-lg">
        <h2 class="text-lg font-semibold text-gray-700">Stok Menipis</h2>
        <ul>
          <li class="py-2 px-4 mb-2 bg-yellow-100 rounded">Barang A - 5 Stok</li>
          <li class="py-2 px-4 mb-2 bg-yellow-100 rounded">Barang B - 3 Stok</li>
          <li class="py-2 px-4 mb-2 bg-yellow-100 rounded">Barang C - 7 Stok</li>
        </ul>
      </div>
      <div class="bg-white p-6 rounded-lg shadow-lg">
        <h2 class="text-lg font-semibold text-gray-700">Barang Masuk Hari Ini</h2>
        <p class="text-3xl font-bold text-green-600">25 Barang</p>
      </div>
      <div class="bg-white p-6 rounded-lg shadow-lg">
        <h2 class="text-lg font-semibold text-gray-700">Barang Keluar Hari Ini</h2>
        <p class="text-3xl font-bold text-red-600">18 Barang</p>
      </div>
    </div>

    <!-- Manajemen Stok -->
    <div class="bg-white p-6 rounded-lg shadow-lg mb-6">
      <h2 class="text-lg font-semibold text-gray-700 mb-4">Transaksi Barang Masuk</h2>
      <button class="bg-blue-500 text-white py-2 px-4 rounded-lg shadow hover:bg-blue-600 mb-4">Tambah Barang Masuk</button>
      <button class="bg-red-500 text-white py-2 px-4 rounded-lg shadow hover:bg-red-600">Tambah Barang Keluar</button>
    </div>

    <!-- Laporan -->
    <div class="bg-white p-6 rounded-lg shadow-lg mb-6">
      <h2 class="text-lg font-semibold text-gray-700 mb-4">Laporan Stok</h2>
      <button class="bg-green-500 text-white py-2 px-4 rounded-lg shadow hover:bg-green-600 mb-4">Laporan Stok per Kategori</button>
      <button class="bg-orange-500 text-white py-2 px-4 rounded-lg shadow hover:bg-orange-600">Laporan Barang Masuk & Keluar</button>
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
