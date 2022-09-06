<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdukController extends Controller
{
    public function index()
    {
        $data = Produk::all();
        $data2 = Kategori::all();
        // dd($data);
        return view('admin.indexproduk', compact('data', 'data2'));
    }
    public function store(Request $request)
    {

        if ($request->hasFile('gambar')) {
            // $request->file('gambar')->move('imgmenu/', $request->file('gambar')->getClientOriginalName());
            // $data->gambar = $request->file('gambar')->getClientOriginalName();
            // $data->save();
            $arrImage = array();
            $images = $request->file('gambar');
            // dd($images);
            foreach ($images as $image) {
                $name = $image->getClientOriginalName();
                $path = $image->storeAs('images/menu', $name, 'public');
                array_push($arrImage, '/storage/' . $path);
            }
            Produk::create([
                'nama_menu' => $request->nama_menu,
                'kategori_id' => $request->kategori_id,
                'deskripsi' => $request->deskripsi,
                'gambar' => $arrImage,
                'harga' => $request->harga,
            ]);
        }
        // dd($data);
        return redirect()->route('produk')->with('success', 'Data berhasil disimpan');
    }

    public function show($id)
    {
        $data = Produk::find($id);
        // dd($data);
        $data2 = Kategori::all();
        return view('admin.showProduk', compact('data', 'data2'));
    }

    public function update(Request $request, $id)
    {
        $data = Produk::find($id);
        $data->update($request->all());
        if ($request->hasFile('gambar')) {
            $request->file('gambar')->move('imgmenu/', $request->file('gambar')->getClientOriginalName());
            $data->gambar = $request->file('gambar')->getClientOriginalName();
            $data->save();
        }
        // dd($data);
        return redirect()->route('produk')->with('success', 'Data berhasil diubah');
    }

    public function destroy($id)
    {
        $data = Produk::find($id);

        $data->delete();
        return redirect()->route('produk')->with('delete', 'Data berhasil dihapus');
    }
}
