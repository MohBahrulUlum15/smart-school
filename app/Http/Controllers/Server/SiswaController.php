<?php

namespace App\Http\Controllers\Server;

use App\Http\Controllers\Controller;
use App\Models\Jurusan;
use App\Models\RequestEditSiswa;
use App\Models\Sekolah;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $numb = 1;
        $data = Siswa::all();
        return view('server-side.siswa.index', compact('data', 'numb'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $sekolah = Sekolah::all();
        $jurusan = Jurusan::all();
        return view('server-side.siswa.create', compact('sekolah', 'jurusan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $extension = $request->file('foto')->extension();
        $imgName = date('dmyHis') . '.' . $extension;
        $this->validate($request, ['foto' => 'required|file|max:5000']);
        $path = Storage::putFileAs('public/siswaImages', $request->file('foto'), $imgName);

        $data['foto'] = $imgName;

        Siswa::create($data);
        return redirect()->route('siswa.index')->with('message', 'Data siswa berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Siswa::findOrFail($id);
        $sekolah = Sekolah::all();
        $jurusan = Jurusan::all();
        return view('server-side.siswa.edit', compact('data', 'sekolah', 'jurusan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Siswa::findOrFail($id);

        RequestEditSiswa::create([
            'siswa_id' => $id,
            'nis' => $request->nis,
            'nama' => $request->nama,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'alamat' => $request->alamat,
            'jenis_kelamin' => $request->jenis_kelamin,
            'agama' => $request->agama,
            'nama_ibu' => $request->nama_ibu,
            'nama_ayah' => $request->nama_ayah,
            'kelas' => $request->kelas,
            'no_telp' => $request->no_telp,
            'foto' => $data->foto,
            'sekolah_id' => $request->sekolah_id,
            'jurusan_id' => $request->jurusan_id,
            'status' => 'request edit',
        ]);

        Siswa::find($id)->update(['status' => 'request edit']);

        // dd($request->all());
        // $data->update($request->all());
        return redirect()->route('siswa.index')->with('message', 'Berhasil, menunggu persetujuan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Siswa::findOrFail($id)->update(['status' => 'request delete']);
        // Storage::delete('public/siswaImages/' . $data->foto);
        // $data->delete();
        return redirect()->route('siswa.index')->with('message', 'Berhasil, menunggu persetujuan');
    }

    public function reqDelete()
    {
        $data = Siswa::where('status', 'request delete')->get();
        $numb = 1;
        return view('server-side.siswa.req-delete', compact('data', 'numb'));
    }
}
