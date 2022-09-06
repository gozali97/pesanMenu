<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

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
        $find = array_search($produk->nama_menu, array_column($cart, 'nama_menu')) == false;
        // dd($find);
        if (!$find) {
            ++$cart[$produk->id]["jumlah"];
            // dd($find);
            session(["cart" => $cart]);
        } else {
            $pesanan = [
                "nama_menu" => $produk->nama_menu,
                "harga" => $produk->harga,
                "jumlah" => 1
            ];
            $cart[$produk->id] = $pesanan;
        }
        // dd($pesanan);

        session(["cart" => $cart]);

        return redirect()->route("cart");
    }

    public function hapus($id)
    {
        $cart = session("cart");
        unset($cart[$id]);
        session(["cart" => $cart]);
        return redirect("/cart");
    }

    public function cart()
    {
        $nomeja = session("nomeja");
        $cart = session("cart");
        // dd($cart);
        return view('user.cart')->with(["cart" => $cart, "no_meja" => $nomeja]);
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
        //
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
}
