<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index()
    {

        $belumBayar = Transaksi::where('status', 'belum bayar')->orderBy('id', 'desc')->get();
        $sudahBayar = Transaksi::where('status', 'sudah bayar')->orderBy('id', 'desc')->get();
        // dd($sudahBayar);
        return view('admin.indexTransaksi', compact('belumBayar', 'sudahBayar'));
    }
}
