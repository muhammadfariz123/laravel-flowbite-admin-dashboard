<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'category_id',
        'stock',
    ];

    /**
     * Relasi ke kategori produk.
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
