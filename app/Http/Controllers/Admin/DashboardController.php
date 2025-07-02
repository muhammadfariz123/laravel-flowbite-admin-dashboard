<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\StockTransaction;
use App\Models\User;
use App\Models\ActivityLog;

class DashboardController extends Controller
{
    public function index()
    {
        // Hitung jumlah produk, user, dan transaksi stok bulan ini
        $productCount = Product::count();

        $stockIn = StockTransaction::where('type', 'Masuk')
            ->whereMonth('date', now()->month)
            ->count();

        $stockOut = StockTransaction::where('type', 'Keluar')
            ->whereMonth('date', now()->month)
            ->count();

        $userCount = User::count();

        // Ambil 10 aktivitas terakhir dan relasi user-nya
        $activityLogs = ActivityLog::with('user')->latest()->take(10)->get();

        // Ambil semua produk untuk grafik stok
        $products = Product::all();

        // Siapkan data untuk grafik
        $chartData = $products->map(function ($product) {
            return [
                'name' => $product->name,
                'stock' => $product->stock,
            ];
        });

        return view('admin.dashboard', compact(
            'productCount',
            'stockIn',
            'stockOut',
            'userCount',
            'activityLogs',
            'chartData'
        ));
    }

    /**
     * Catat aktivitas ke activity_logs.
     */
    private function logActivity($action, $subject = null)
    {
        ActivityLog::create([
            'user_id' => auth()->id(),
            'action' => $action,
            'subject_type' => $subject ? get_class($subject) : null,
            'subject_id' => $subject?->id,
        ]);
    }

    // Contoh penggunaan logActivity (diletakkan di controller lain seperti ProductController):
    // $this->logActivity('Menambahkan produk', $product);
    // $this->logActivity('Memperbarui produk', $product);
    // $this->logActivity('Menghapus produk', $product);
}
