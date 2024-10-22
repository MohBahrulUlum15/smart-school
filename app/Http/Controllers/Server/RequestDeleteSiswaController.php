<?php

namespace App\Http\Controllers\Server;

use App\Http\Controllers\Controller;
use App\Models\Jurusan;
use App\Models\Sekolah;
use App\Models\Siswa;
use Illuminate\Http\Request;

class RequestDeleteSiswaController extends Controller
{
    public function index()
    {
        $data = Siswa::where('status', 'request delete')->get();
        $numb = 1;
        return view('server-side.siswa.req-delete', compact('data', 'numb'));
    }

    public function show($id)
    {
        $data = Siswa::find($id);
        $sekolah = Sekolah::all();
        $jurusan = Jurusan::all();
        return view('server-side.siswa.req-delete-show', compact('data', 'sekolah', 'jurusan'));
    }

    public function destroy($id)
    {
        Siswa::find($id)->delete();
        return redirect()->route('siswa.reqdelete')->with('message', 'Data siswa berhasil dihapus');
    }
}
