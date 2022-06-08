<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agama;
use App\Models\Ibu;
use App\Models\CalonMaba;
use App\Models\JumlahPenghasilan;
use App\Models\Kabupaten;
use App\Models\Kecamatan;
use App\Models\Pekerjaan;
use App\Models\PendidikanTerakhir;
use App\Models\Provinsi;
use App\Models\StatusHubungan;
use Illuminate\Support\Facades\Auth;

class IbuController extends Controller
{
    public function __construct() {
        $this->middleware('auth:maba');
    }

    private $dir_view = 'maba.InformasiDataKeluarga.';

    public function index()
    {
        $data['agama'] = Agama::get();
        $data['data_maba'] = CalonMaba::where('nik', '=', Auth::user()->nik)->first();
        $data['provinsi'] = Provinsi::get();
        $data['kabupaten'] = Kabupaten::get();
        $data['kecamatan'] = Kecamatan::get();
        $data['pendidikan'] = PendidikanTerakhir::get();
        $data['penghasilan'] = JumlahPenghasilan::get();
        $data['pekerjaan'] = Pekerjaan::get();
        $data['hubungan'] = StatusHubungan::get();
        return view($this->dir_view.'ibu', $data);
    }

    public function update(Request $request, $kode)
    {
        //
    }
}