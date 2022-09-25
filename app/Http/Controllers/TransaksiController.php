<?php

namespace App\Http\Controllers;

use App\Models\Tracking;
use App\Models\Transaksi;
use \PDF;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index()
    {

        $belumBayar = Transaksi::where('status', 'belum bayar')->orderBy('id', 'desc')->get();
        $sudahBayar = Transaksi::where('status', 'sudah bayar')->orderBy('id', 'desc')->get();
        $daftarId = $sudahBayar->map(function ($transaksi) {
            return $transaksi->id;
        });
        $tracking = Tracking::whereIn('id', $daftarId)->orderBy('id', 'desc')->get();
        // $pesanan = $sudahBayar->mergeRecursive($tracking);
        // dd($pesanan->all());
        return view('admin.indexTransaksi', compact('belumBayar', 'sudahBayar', 'tracking'));
    }

    public function proses($id)
    {
        $tracking = Tracking::find($id);
        switch ($tracking->status) {
            case "Menunggu":
                $tracking->status = "Diproses";
                break;
            case "Diproses":
                $tracking->status = "Disajikan";
                break;
        }
        $tracking->save();
        return redirect()->back();
    }

    public function bayar($id)
    {
        $transaksi = Transaksi::find($id);
        dd($transaksi);
        $transaksi->status = "sudah bayar";
        $transaksi->save();
        return redirect()->back();
    }

    public function pdf()
    {
        $data = Transaksi::where('status', 'sudah bayar')->orderBy('id', 'desc')->get();

        view()->share('data', $data);
        $pdf = PDF::loadview('admin.laporantransaksi-pdf');
        // dd($pdf);
        return $pdf->download('Laporantransaksi.pdf');
    }
}
