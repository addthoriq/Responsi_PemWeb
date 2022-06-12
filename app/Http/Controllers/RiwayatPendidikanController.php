<?php

namespace App\Http\Controllers;

use App\Models\{RiwayatPendMaba, CalonMaba};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RiwayatPendidikanController extends Controller
{
    public function __construct() {
        $this->middleware('auth:maba');
    }

    private $dir_view = 'maba.RiwayatPendidikan.';
    private $url_redirect = 'asal-sekolah';

    public function index()
    {
        $data['data_riwayat'] = RiwayatPendMaba::where('nik_maba', '=', Auth::user()->nik)->first();
        return view($this->dir_view.'beranda', $data);
    }

    public function update(Request $request)
    {
        $data_maba = CalonMaba::where('nik', '=', Auth::user()->nik);
        if(empty($data_maba->exists())){
            RiwayatPendMaba::create([
                'nama_sekolah' => $request->nama_sekolah,
                'nomor_ijazah' => $request->nomor_ijazah,
                'tgl_lulus' => $request->tgl_lulus,
                'tahun_lulus' => $request->tahun_lulus,
                'nilai_rata_rata' => $request->nilai_rata_rata,
                'nama_file_ijazah' => $request->nama_file_ijazah
            ]);
        } else {
            RiwayatPendMaba::where('nik_maba', '=', Auth::user()->nik)->update([
                'nama_sekolah' => $request->nama_sekolah,
                'nomor_ijazah' => $request->nomor_ijazah,
                'tgl_lulus' => $request->tgl_lulus,
                'tahun_lulus' => $request->tahun_lulus,
                'nilai_rata_rata' => $request->nilai_rata_rata,
                'nama_file_ijazah' => $request->nama_file_ijazah
            ]);
        }

        return redirect()->route($this->url_redirect)->with('notifikasi', 'Data Berhasil disimpan!');
    }
}
