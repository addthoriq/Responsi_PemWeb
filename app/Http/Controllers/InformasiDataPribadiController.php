<?php

namespace App\Http\Controllers;

use App\Models\Agama;
use Illuminate\Http\Request;
use App\Models\CalonMaba;
use App\Models\Provinsi;
use App\Models\Kabupaten;
use App\Models\Kecamatan;
use Illuminate\Support\Facades\Auth;

class InformasiDataPribadiController extends Controller
{
    public function __construct() {
        $this->middleware('auth:maba');
    }

    private $dir_view = 'maba.InformasiDataPribadi.';
    private $url_redirect = '/informasi-pribadi';

    public function index()
    {
        $agama = Agama::get();
        $provinsi = Provinsi::get();
        $kabupaten = Kabupaten::get();
        $kecamatan = Kecamatan::get();
        $data_maba = CalonMaba::where('nik', '=', Auth::user()->nik)->first();
        return view($this->dir_view.'beranda', compact('agama', 'data_maba', 'provinsi', 'kecamatan', 'kabupaten'));
    }
    
    public function update(Request $request, $kode)
    {
        //
    }
}
