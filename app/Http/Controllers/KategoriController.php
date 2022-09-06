<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
        $data = Kategori::all();
        return view('admin/indexKategori', compact('data'));
    }

    public function store(Request $request)
    {
        Kategori::create($request->all());
        return redirect()->route('kategori')->with('success', 'Data berhasil disimpan');
    }

    public function show($id)
    {
        $data = Kategori::find($id);

        return view('admin.showKategori', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = Kategori::find($id);
        $data->update($request->all());
        return redirect()->route('kategori')->with('success', 'Data berhasil diubah');
    }

    public function destroy($id)
    {
        $data = Kategori::find($id);

        $data->delete();
        return redirect()->route('kategori')->with('delete', 'Data berhasil dihapus');
    }
}
