<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tracking extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function tracking()
    {
        return $this->belongsTo(Transaksi::class, "id", "id");
    }
}
