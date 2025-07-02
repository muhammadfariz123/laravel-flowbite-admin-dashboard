<div class="min-h-screen bg-gray-100 flex">
  <!-- Sidebar -->
  <aside class="bg-gray-800 text-white w-1/4 p-6">
    <h2 class="text-2xl font-semibold mb-6">Dashboard Manajer</h2>
    <ul>
      <li><a href="#" class="block py-2 hover:bg-gray-700 rounded">Dashboard</a></li>
      <li><a href="#" class="block py-2 hover:bg-gray-700 rounded">Laporan Stok</a></li>
      <li><a href="#" class="block py-2 hover:bg-gray-700 rounded">Manajemen Pengguna</a></li>
      <li><a href="#" class="block py-2 hover:bg-gray-700 rounded">Aktivitas Pengguna</a></li>
      <li><a href="#" class="block py-2 hover:bg-gray-700 rounded">Notifikasi</a></li>
    </ul>
  </aside>

  <!-- Main Content -->
  <main class="flex-1 p-6">
    <!-- Header -->
    <header class="mb-6">
      <h1 class="text-3xl font-semibold text-gray-800">Dashboard Manajer</h1>
    </header>

    <!-- Ringkasan Kinerja -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-6">
      <div class="bg-white p-6 rounded-lg shadow-lg">
        <h2 class="text-lg font-semibold text-gray-700">Jumlah Produk</h2>
        <p class="text-3xl font-bold text-green-600">200 Produk</p>
      </div>
      <div class="bg-white p-6 rounded-lg shadow-lg">
        <h2 class="text-lg font-semibold text-gray-700">Total Barang Masuk Hari Ini</h2>
        <p class="text-3xl font-bold text-blue-600">50 Barang</p>
      </div>
      <div class="bg-white p-6 rounded-lg shadow-lg">
        <h2 class="text-lg font-semibold text-gray-700">Total Barang Keluar Hari Ini</h2>
        <p class="text-3xl font-bold text-red-600">30 Barang</p>
      </div>
    </div>

    <!-- Laporan Stok -->
    <div class="bg-white p-6 rounded-lg shadow-lg mb-6">
      <h2 class="text-lg font-semibold text-gray-700 mb-4">Laporan Stok</h2>
      <button class="bg-green-500 text-white py-2 px-4 rounded-lg shadow hover:bg-green-600 mb-4">Laporan Stok per Kategori</button>
      <button class="bg-orange-500 text-white py-2 px-4 rounded-lg shadow hover:bg-orange-600">Laporan Barang Hampir Habis</button>
    </div>

    <!-- Manajemen Pengguna -->
    <div class="bg-white p-6 rounded-lg shadow-lg mb-6">
      <h2 class="text-lg font-semibold text-gray-700 mb-4">Manajemen Pengguna</h2>
      <button class="bg-blue-500 text-white py-2 px-4 rounded-lg shadow hover:bg-blue-600 mb-4">Tambah Pengguna Baru</button>
      <button class="bg-yellow-500 text-white py-2 px-4 rounded-lg shadow hover:bg-yellow-600">Kelola Pengguna</button>
    </div>

    <!-- Aktivitas Pengguna -->
    <div class="bg-white p-6 rounded-lg shadow-lg mb-6">
      <h2 class="text-lg font-semibold text-gray-700 mb-4">Aktivitas Pengguna</h2>
      <ul>
        <li class="py-2 px-4 mb-2 bg-gray-100 rounded hover:bg-gray-200">Pengguna A melakukan perubahan pada produk X</li>
        <li class="py-2 px-4 mb-2 bg-gray-100 rounded hover:bg-gray-200">Pengguna B menambahkan barang masuk</li>
        <li class="py-2 px-4 mb-2 bg-gray-100 rounded hover:bg-gray-200">Pengguna C mengeluarkan barang</li>
      </ul>
    </div>

    <!-- Notifikasi -->
    <div class="bg-white p-6 rounded-lg shadow-lg">
      <h2 class="text-lg font-semibold text-gray-700 mb-4">Notifikasi</h2>
      <ul>
        <li class="py-2 px-4 mb-2 bg-yellow-100 rounded hover:bg-yellow-200">Peringatan: Stok Barang X hampir habis.</li>
        <li class="py-2 px-4 mb-2 bg-yellow-100 rounded hover:bg-yellow-200">Pemberitahuan: Transaksi barang masuk telah selesai.</li>
      </ul>
    </div>
  </main>
</div>
