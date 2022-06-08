<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Provinsi, Kabupaten, Kecamatan};

class WilayahController extends Controller
{
    public function getProvinsi()
    {
        $data = Provinsi::all();
        return response()->json($data);
    }
    public function getKabupaten(Request $request)
    {
        $data = Kabupaten::where('kode_provinsi', '=', $request->provinsi)->get();
        $html[] = '<option value="0">--- Silahkan dipilih ---</option>';
        foreach ($data as $key => $value) {
            $html[] = '<option value="' . $value->kode_kabupaten . '">' . $value->nama_kabupaten . '</option>';
        }
        if (count($html) > 0) {
            return $html;
        }
        return '<option value="0">--- Data Kosong ---</option>';
    }
    public function getKecamatan(Request $request)
    {
        $data = Kecamatan::where('kode_kabupaten', $request->kabupaten)->get();
        $html[] = '<option value="0">--- Silahkan dipilih ---</option>';
        foreach ($data as $key => $value) {
            $html[] = '<option value="' . $value->kode_kecamatan . '">' . $value->nama_kecamatan . '</option>';
        }
        if (count($html) > 0) {
            return $html;
        }
        return '<option value="0">--- Data Kosong ---</option>';
    }

    public function getAllKabupaten(Request $request)
    {
        $data = Kabupaten::where('kode_provinsi', '=', $request->provinsi)->get();
        $html[] = '<option value="">- Semua -</option>';
        foreach ($data as $key => $value) {
            $html[] = '<option value="' . $value->kode_kabupaten . '">' . $value->nama_kabupaten . '</option>';
        }
        if (count($html) > 0) {
            return $html;
        }
        return '<option value="">--- Data Kosong ---</option>';
    }
}
