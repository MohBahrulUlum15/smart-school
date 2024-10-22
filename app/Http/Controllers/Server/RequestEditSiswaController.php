<?php

namespace App\Http\Controllers\Server;

use App\Http\Controllers\Controller;
use App\Models\Jurusan;
use App\Models\RequestEditSiswa;
use App\Models\Sekolah;
use App\Models\Siswa;
use Illuminate\Http\Request;

class RequestEditSiswaController extends Controller
{
    public function index()
    {
        $data = RequestEditSiswa::all();
        $numb = 1;
        return view('server-side.siswa.req-edit', compact('data', 'numb'));
    }

    public function show($id)
    {
        $data = RequestEditSiswa::find($id);
        $sekolah = Sekolah::all();
        $jurusan = Jurusan::all();
        return view('server-side.siswa.req-edit-show', compact('data', 'sekolah', 'jurusan'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();

        // dd($id);

        Siswa::find($request->siswa_id)->update($data);
        Siswa::find($request->siswa_id)->update(['status' => 'verified']);

        RequestEditSiswa::find($id)->delete();

        return redirect()->route('siswa.reqedit')->with('message', 'Data siswa berhasil diubah');
    }
}
