<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StockTransaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',        // Masuk atau Keluar
        'product_id',  // Relasi ke produk
        'quantity',    // Jumlah barang
        'date',        // Tanggal transaksi
        'note',        // Catatan tambahan
    ];

    /**
     * Relasi ke model Product
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
