<?php

namespace App\Http\Controllers\Server;

use App\Http\Controllers\Controller;
use App\Models\Master;
use App\Models\Role;
use App\Models\UserRole;
use Illuminate\Http\Request;

class UserRolesController extends Controller
{
    public function index()
    {
        $num = 1;
        $data = UserRole::with('role')->get();
        return view('server-side.user_roles.index', compact('data', 'num'));
    }

    public function create()
    {
        $roles = Role::all();
        $masters = Master::all();
        return view('server-side.user_roles.create', compact('roles', 'masters'));
    }

    public function store(Request $request)
    {
        $data = $request->all();

        // dd($data);

        $checkData = UserRole::where('role_id', $data['role_id'])->where('master_id', $data['master_id'])->first();

        if ($checkData) {
            return redirect()->route('user-roles.index')->with('error', 'User Roles sudah ada.');
        }

        UserRole::create($data);
        return redirect()->route('user-roles.index')->with('message', 'User Roles berhasil dibuat.');
    }

    public function edit($id)
    {
        $dataReal = UserRole::find($id);
        $roles = Role::all();
        $masters = Master::all();
        // dd($data);
        return view('server-side.user_roles.edit', compact('dataReal', 'roles', 'masters'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $userRole = UserRole::find($id);
        $userRole->update($data);
        return redirect()->route('user-roles.index')->with('message', 'User Roles berhasil diubah.');
    }

    public function destroy($id)
    {
        $userRole = UserRole::find($id);
        $userRole->delete();
        return redirect()->route('user-roles.index')->with('message', 'User Roles berhasil dihapus.');
    }
}
