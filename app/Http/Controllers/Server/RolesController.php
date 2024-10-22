<?php

namespace App\Http\Controllers\Server;

use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Http\Request;

class RolesController extends Controller
{
    public function index()
    {
        $num = 1;
        $data = Role::all();
        return view('server-side.roles.index', compact('data', 'num'));
    }
}
