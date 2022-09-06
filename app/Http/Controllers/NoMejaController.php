<?php

namespace App\Http\Controllers;

use App\Models\NoMeja;
use Faker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class NoMejaController extends Controller
{
    public function index()
    {
        $data = NoMeja::all();
        return view('admin.indexMeja', compact('data'));
    }

    public function insert(Request $request)
    {
        $faker = Faker\Factory::create();
        $data = NoMeja::create([
            'no_meja' => $request->no_meja,
            'qr_code' => $request->qr_code,
        ]);
        if ($request->qr_code == null) {
            $data->qr_code = $faker->uuid;
            $data->save();
        }
        return redirect()->route('nomeja')->with('success', 'Data berhasil disimpan');
    }

    public function show($id)
    {
        $data = NoMeja::find($id);

        return view('admin.showNoMeja', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = NoMeja::find($id);
        $data->update($request->all());
        return redirect()->route('nomeja')->with('success', 'Data berhasil diubah');
    }

    public function destroy($id)
    {
        $data = NoMeja::find($id);

        $data->delete();
        return redirect()->route('nomeja')->with('delete', 'Data berhasil dihapus');
    }

    public function scan(Request $request)
    {
        $data = NoMeja::where('qr_code', $request->code)->get();
        // dd($data);\
        session(["nomeja" => $data[0]->no_meja]);
        session(["cart" => []]);
        return view('user/scan', compact('data'));
    }
    public function print(Request $request)
    {
        $data = NoMeja::where('qr_code', $request->code)->get();
        // dd($data);\
        // $_COOKIE['nomeja'] = $data[0]->no_meja;
        return view('admin/print', compact('data'));
    }
}
