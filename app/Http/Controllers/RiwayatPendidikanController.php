<?php

namespace App\Http\Controllers;

use App\Models\RiwayatPendMaba;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RiwayatPendidikanController extends Controller
{
    public function __construct() {
        $this->middleware('auth:maba');
    }

    private $dir_view = 'maba.RiwayatPendidikan.';

    public function index()
    {
        $data['data_riwayat'] = RiwayatPendMaba::where('nik_maba', '=', Auth::user()->nik)->first();
        // dd($data);
        return view($this->dir_view.'beranda', $data);
    }
}
