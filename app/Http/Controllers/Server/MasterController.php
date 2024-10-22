<?php

namespace App\Http\Controllers\Server;

use App\Http\Controllers\Controller;
use App\Models\Master;
use Illuminate\Http\Request;

class MasterController extends Controller
{
    public function index()
    {
        $num = 1;
        $data = Master::all();
        return view('server-side.master.index', compact('num', 'data'));
    }
}
