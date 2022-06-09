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
    private $url_redirect = 'informasi-pribadi';

    public function index()
    {
        $data['agama'] = Agama::get();
        $data['provinsi'] = Provinsi::get();
        $data['kabupaten'] = Kabupaten::get();
        $data['kecamatan'] = Kecamatan::get();
        $data['data_maba'] = CalonMaba::where('nik', '=', Auth::user()->nik)->first();
        return view($this->dir_view.'beranda', $data);
    }
    
    public function kontakPribadi(Request $request)
    {
        if (empty($request->password)) {
            CalonMaba::where('nik', '=', Auth::user()->nik)->first()->update([
                'nik' => $request->nik,
                'nis' => $request->nis,
                'nama_maba' => $request->nama_maba,
                'kode_agama' => $request->agama,
                'jenis_kelamin' => $request->jenis_kelamin,
                'nomor_hp' => $request->nomor_hp,
                'email' => $request->email
            ]);
        } else {
            CalonMaba::where('nik', '=', $this->nik_maba)->first()->update([
                'nik' => $request->nik,
                'nis' => $request->nis,
                'nama_maba' => $request->nama_maba,
                'kode_agama' => $request->agama,
                'jenis_kelamin' => $request->jenis_kelamin,
                'nomor_hp' => $request->nomor_hp,
                'email' => $request->email,
                'password' => $request->password
            ]);
        }
        return redirect()->route($this->url_redirect)->with('notifikasi', 'Data Berhasil Disimpan!');
    }

    public function alamatPribadi(Request $request)
    {
        CalonMaba::where('nik', '=', Auth::user()->nik)->first()->update([
            'alamat' => $request->alamat,
            'kode_provinsi' => $request->provinsi,
            'kode_kabupaten' => $request->kabupaten,
            'kode_kecamatan' => $request->kecamatan,
            'kode_pos' => $request->kode_pos
        ]);
        return redirect()->route($this->url_redirect)->with('notifikasi', 'Data Berhasil Disimpan!');
    }
}
