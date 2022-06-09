<?php

namespace App\Http\Controllers;

use App\Models\FileMaba;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UnggahFileController extends Controller
{
    public function __construct() {
        $this->middleware('auth:maba');
    }

    private $dir_view = 'maba.UnggahBerkas.';

    public function index()
    {
        $data['data_file'] = FileMaba::where('nik_maba', '=', Auth::user()->nik)->first();
        return view($this->dir_view.'beranda', $data);
    }
}
