<?php

namespace App\Http\Controllers;

use App\Models\DetailTransaksi;
use App\Models\Produk;
use App\Models\Tracking;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use PhpParser\Builder\Trait_;

class PesanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $makanan = Produk::all()->where("kategori_id", "=", "2");
        $minuman = Produk::all()->where("kategori_id", "=", "1");
        $dessert = Produk::all()->where("kategori_id", "=", "3");
        // dd($makanan);
        // session()->forget("cart");
        // session(["cart" => []]);
        return view('user.index', compact('makanan', 'minuman', 'dessert'));
    }

    public function tambah($id)
    {
        $cart = session("cart");
        $produk = Produk::detail_produk($id);
        // $find = array_search($produk->nama_menu, array_column($cart, 'nama_menu'));
        // dd($find);
        $cek = false;
        foreach ($cart as $key => $c) {
            if ($key == "c_" . $produk->id) {
                ++$cart[$key]["jumlah"];
                // dd($find);
                session(["cart" => $cart]);
                $cek = true;
            }
        }
        if (!$cek) {
            $pesanan = [
                "nama_menu" => $produk->nama_menu,
                "harga" => $produk->harga,
                "jumlah" => 1
            ];
            $cart["c_" . $produk->id] = $pesanan;
        }
        // dd($pesanan);

        session(["cart" => $cart]);

        return redirect()->route("cart");
    }

    public function cart()
    {
        $nomeja = session("nomeja");
        $cart = session("cart");
        // dd($cart);
        return view('user.cart')->with(["cart" => $cart, "no_meja" => $nomeja]);
    }

    public function minus(Request $request)
    {
        $cart = session("cart");
        $produk = Produk::detail_produk($request->id);
        $jumlah = 0;
        // dd($cart);
        foreach ($cart as $key => $c) {
            if ($key == "c_" . $produk->id) {
                --$cart[$key]["jumlah"];
                $jumlah = $cart[$key]["jumlah"];
                $subtotal = $produk->harga * $jumlah;
                // dd($find);
                if ($cart[$key]["jumlah"] < 1) {
                    unset($cart[$request->id]);
                }
                session(["cart" => $cart]);
            }
        }
        return response()->json([
            'success' => 1,
            'data' => ['jumlah' => $jumlah, 'subtotal' => $subtotal],
            'message' => 'Menu berhasil dikurangi',
        ]);
    }

    public function plus(Request $request)
    {
        $cart = session("cart");
        $produk = Produk::detail_produk($request->id);
        $jumlah = 0;
        foreach ($cart as $key => $c) {
            if ($key == "c_" . $produk->id) {
                ++$cart[$key]["jumlah"];
                $jumlah = $cart[$key]["jumlah"];
                $subtotal = $produk->harga * $jumlah;
                // dd($find);
                session(["cart" => $cart]);
            }
        }
        return response()->json([
            'success' => 1,
            'data' => ['jumlah' => $jumlah, 'subtotal' => $subtotal],
            'message' => 'Menu berhasil ditambah',
        ]);
    }

    public function transaksi(Request $request)
    {
        $cart = session("cart");
        $jumlah = 0;
        $totalHarga = 0;
        $transaksi = Transaksi::create([
            'nomeja' => session('nomeja'),
            'nama_pemesan' => $request->nama_pemesan,
            'subtotal' => $jumlah,
            'total_harga' => $totalHarga,
        ]);
        foreach ($cart as $ct => $val) {
            $id = explode('_', $ct)[1];
            $jumlah += $val["jumlah"];
            $totalHarga +=  $val["harga"] * $val["jumlah"];

            DetailTransaksi::create([
                'id_transaksi' => $transaksi->id,
                'id_produk' => $id,
                'total_item' => $val["jumlah"],
                'total_harga' => $val["harga"] * $val["jumlah"],
            ]);
        }
        Tracking::create([
            'id' => $transaksi->id,
        ]);

        $transaksi->subtotal =  $jumlah;
        $transaksi->total_harga = $totalHarga;
        $transaksi->save();
        // dd($transaksi);
        return view('user.success')->with(["transaksi" => $transaksi]);
    }

    public function cash(Request $request)
    {
        // dd($request->id);
        $transaksi = Transaksi::find($request->id);
        $transaksi->total_harga += 2000;
        $transaksi->save();
        return view('user.cash')->with(["transaksi" => $transaksi]);
    }

    public function bayar($id)
    {
        $transaksi = Transaksi::find($id);
        $transaksi->status = "sudah bayar";
        $transaksi->save();
        return redirect()->route('nota', ['id' => $id]);
    }

    public function nota($id)
    {
        $transaksi = Transaksi::find($id);
        $detailTransaksi = DetailTransaksi::where('id_transaksi', $transaksi->id)->get();
        $status = Tracking::find($id);
        return view('user.nota')->with(["transaksi" => $transaksi, "detailTransaksi" => $detailTransaksi, "status" => $status]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dataTransaksi = $request->all();
        $transaksi = Transaksi::create($dataTransaksi);

        foreach ($request->produks as $produk) {
            $detail = [
                'id_transaksi' => $transaksi->id,
                'id_produk' => $produk['id'],
                'total_item' => $produk['total_item'],
                'total_harga' => $produk['total_harga'],
            ];
            $transaksiDetail = DetailTransaksi::create($detail);
        }

        if (!empty($transaksi) && !empty($transaksiDetail)) {
            \DB::commit();
            return @response()->json([
                'success' => 1,
                'message' => 'Transaksi berhasil',
                'transaksi' => collect($transaksi)
            ]);
        } else {
            \DB::rollback();
            $this->error("Transaksi gagal");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function error($pesan)
    {
        return @response()->json([
            'success' => 0,
            'message' => $pesan
        ]);
    }
}
