<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Nama tabel yang digunakan oleh model ini
    protected $table = 'products';

    // Kolom yang dapat diisi (mass assignable)
    protected $fillable = [
        'name',
        'description',
        'quantity',
        'price',
    ];

    // Kolom yang tidak boleh diisi (untuk proteksi terhadap mass-assignment)
    // protected $guarded = [];

    // Jika ingin memberikan nilai default pada kolom tertentu
    // protected $attributes = [
    //     'quantity' => 0,
    // ];

    // Mutator dan Accessor bisa ditambahkan sesuai kebutuhan
    // Contoh mutator jika ingin memanipulasi data sebelum disimpan
    // public function setPriceAttribute($value)
    // {
    //     $this->attributes['price'] = $value * 100; // Misalnya mengonversi harga ke satuan cent
    // }

    // Relasi dengan kategori, jika ada
    // public function category()
    // {
    //     return $this->belongsTo(Category::class);
    // }
}
