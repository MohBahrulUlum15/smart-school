<?php

namespace App\Http\Controllers\Server;

use App\Http\Controllers\Controller;
use App\Models\Operator;
use App\Models\Sekolah;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class OperatorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $numb = 1;
        $data = Operator::all();
        return view('server-side.operator.index', compact('data', 'numb'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $sekolah = Sekolah::all();
        return view('server-side.operator.create', compact('sekolah'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $words = explode(' ', $request->name);

        if (count($words) >= 2) {
            // Jika nama memiliki dua kata atau lebih
            $firstTwoWords = $words[0] . '.' . $words[1]; // Menggabungkan dua kata pertama
        } else {
            // Jika nama hanya memiliki satu kata
            $firstTwoWords = $words[0]; // Mengambil satu kata saja
        }

        $email = strtolower($firstTwoWords) . 'operator@gmail.com';

        $userCreate = User::create([
            'name' => $data['name'],
            'email' => $email,
            'password' => Hash::make('passwordoperator'),
            'role_id' => 3,
        ]);

        Operator::create([
            'name' => $data['name'],
            'nip' => $data['nip'],
            'phone' => $data['phone'],
            'user_id' => $userCreate->id,
            'sekolah_id' => $data['sekolah_id'],
        ]);

        return redirect()->route('operator.index')->with('message', 'Data berhasil ditambahkan');
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
    public function edit($id)
    {
        $data = Operator::find($id);
        $sekolah = Sekolah::all();
        return view('server-side.operator.edit', compact('data', 'sekolah'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();

        $words = explode(' ', $request->name);

        if (count($words) >= 2) {
            // Jika nama memiliki dua kata atau lebih
            $firstTwoWords = $words[0] . '.' . $words[1]; // Menggabungkan dua kata pertama
        } else {
            // Jika nama hanya memiliki satu kata
            $firstTwoWords = $words[0]; // Mengambil satu kata saja
        }

        $email = strtolower($firstTwoWords) . 'operator@gmail.com';

        $dataOperatorAll = Operator::find($id);

        $dataOperatorAll->update([
            'name' => $data['name'],
            'nip' => $data['nip'],
            'phone' => $data['phone'],
            'sekolah_id' => $data['sekolah_id'],
        ]);

        User::find($dataOperatorAll->user->id)->update([
            'name' => $data['name'],
            'email' => $email,
        ]);

        return redirect()->route('operator.index')->with('message', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
    }
}
