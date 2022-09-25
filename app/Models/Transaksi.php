<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected static function boot()
    {
        parent::boot();
    }

    public function details()
    {
        return $this->hasMany(DetailTransaksi::class, "id_transaksi", "id");
    }
}
