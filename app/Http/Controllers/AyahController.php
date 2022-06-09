<?php

namespace App\Http\Controllers;

use App\Models\Agama;
use App\Models\Ayah;
use Illuminate\Http\Request;
use App\Models\CalonMaba;
use App\Models\JumlahPenghasilan;
use App\Models\Kabupaten;
use App\Models\Kecamatan;
use App\Models\Pekerjaan;
use App\Models\PendidikanTerakhir;
use App\Models\Provinsi;
use App\Models\StatusHubungan;
use Illuminate\Support\Facades\Auth;

class AyahController extends Controller
{
    public function __construct() {
        $this->middleware('auth:maba');
    }

    private $dir_view = 'maba.InformasiDataKeluarga.';
    private $url_redirect = 'informasi-ayah';

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
        return view($this->dir_view.'ayah', $data);
    }

    public function kontakPribadi(Request $request)
    {
        $data_maba = CalonMaba::where('nik', '=', Auth::user()->nik);
        if (empty($data_maba->exists())){
            Ayah::create([
                'nik' => $request->nik,
                'nama_ayah' => $request->nama_ayah,
                'kode_agama' => $request->agama,
                'kewarganegaraan' => $request->kewarganegaraan,
                'nomor_hp' => $request->nomor_hp,
            ]);
            $data_maba->first()->update([
                'nik_ayah' => $request->nik,
                'hubungan_ayah' => $request->hubungan_ayah
            ]);
        } else {
            Ayah::where('nik', '=', $data_maba->first()->nik_ayah)->update([
                'nik' => $request->nik,
                'nama_ayah' => $request->nama_ayah,
                'kode_agama' => $request->agama,
                'kewarganegaraan' => $request->kewarganegaraan,
                'nomor_hp' => $request->nomor_hp,
            ]);
            $data_maba->first()->update([
                'nik_ayah' => $request->nik,
                'hubungan_ayah' => $request->hubungan_ayah
            ]);
        }

        return redirect()->route($this->url_redirect)->with('notifikasi', 'Data Berhasil Disimpan!');
    }

    public function alamatPribadi(Request $request)
    {
        $data_maba = CalonMaba::where('nik', '=', Auth::user()->nik);
        if (empty($data_maba->exists())) {
            Ayah::create([
                'kode_pos' => $request->kode_pos,
                'kode_kecamatan' => $request->kecamatan,
                'kode_kabupaten' => $request->kabupaten,
                'kode_provinsi' => $request->provinsi,
                'alamat' => $request->alamat,
            ]);
        } else {
            Ayah::where('nik', '=', $data_maba->first()->nik_ayah)->update([
                'kode_pos' => $request->kode_pos,
                'kode_kecamatan' => $request->kecamatan,
                'kode_kabupaten' => $request->kabupaten,
                'kode_provinsi' => $request->provinsi,
                'alamat' => $request->alamat,
            ]);
        }

        return redirect()->route($this->url_redirect)->with('notifikasi', 'Data Berhasil Disimpan!');
    }
}
