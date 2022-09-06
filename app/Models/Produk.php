<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, "kategori_id", "id");
    }

    protected $casts = [
        'gambar' => 'array',
    ];

    static function tambah_produk($nama_menu, $harga)
    {
        Produk::create([
            "nama_menu" => $nama_menu,
            "harga" => $harga,
        ]);
    }

    static function detail_produk($id)
    {
        $data = Produk::where("id", $id)->first();

        return $data;
    }
}
