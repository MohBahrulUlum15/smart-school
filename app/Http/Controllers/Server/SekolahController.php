<?php

namespace App\Http\Controllers\Server;

use App\Http\Controllers\Controller;
use App\Models\Sekolah;
use Illuminate\Http\Request;

class SekolahController extends Controller
{
    public function index()
    {
        $numb = 1;
        $data = Sekolah::all();
        return view('server-side.sekolah.index', compact('data', 'numb'));
    }

    public function create()
    {
        return view('server-side.sekolah.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        // dd($data);

        $check = Sekolah::where('npsn', $data['npsn'])->first();
        if ($check) {
            return redirect()->route('sekolah.index')->with('error', 'NPSN sudah terdaftar');
        }

        Sekolah::create($data);
        return redirect()->route('sekolah.index')->with('message', 'Data berhasil ditambahkan');
    }

    public function show($id) {}

    public function edit($id)
    {
        $data = Sekolah::find($id);
        return view('server-side.sekolah.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $sekolah = Sekolah::find($id);
        $sekolah->update($data);
        return redirect()->route('sekolah.index')->with('message', 'Data berhasil diubah');
    }

    public function destroy($id)
    {
        Sekolah::find($id)->delete();
        return redirect()->route('sekolah.index')->with('message', 'Data berhasil dihapus');
    }
}
