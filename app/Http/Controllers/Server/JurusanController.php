<?php

namespace App\Http\Controllers\Server;

use App\Http\Controllers\Controller;
use App\Models\Jurusan;
use Illuminate\Http\Request;

class JurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $numb = 1;
        $data = Jurusan::all();
        return view('server-side.jurusan.index', compact('data', 'numb'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('server-side.jurusan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        Jurusan::create($data);
        return redirect()->route('jurusan.index')->with('message', 'Data berhasil ditambahkan');
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
        $data = Jurusan::findOrFail($id);
        return view('server-side.jurusan.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Jurusan::findOrFail($id);
        $data->update($request->all());
        return redirect()->route('jurusan.index')->with('message', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Jurusan::findOrFail($id);
        $data->delete();
        return redirect()->route('jurusan.index')->with('message', 'Data berhasil dihapus');
    }
}
