@extends('maba.layouts.app')
@section('title', 'Riwayat Pendidikan Calon Mahasiswa Baru')
@section('konten')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Riwayat Pendidikan Terakhir</h1>
</div>

{{-- Data Sekolah Asal --}}
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Sekolah Asal</h6>
    </div>
    <div class="card-body">
        <form class="user" action="{{ route('put.riwayat-pend') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="nama_sekolah">Nama Sekolah</label>
                        <input type="text" name="nama_sekolah" class="form-control form-control-user" id="nama_sekolah"
                            value="{{isset($data_riwayat->nama_sekolah)?$data_riwayat->nama_sekolah:''}}">
                    </div>
                    <div class="form-group">
                        <label for="nomor_ijazah">Nomor Ijazah</label>
                        <input type="text" name="nomor_ijazah" class="form-control form-control-user" id="nomor_ijazah"
                            value="{{isset($data_riwayat->nomor_ijazah)?$data_riwayat->nomor_ijazah:''}}">
                    </div>
                    <div class="form-group">
                        <label for="tgl_lulus">Tanggal Lulus</label>
                        <input type="text" name="tgl_lulus" class="form-control form-control-user" id="tgl_lulus"
                            value="{{isset($data_riwayat->tgl_lulus)?$data_riwayat->tgl_lulus:''}}">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>Unggah Ijazah</label>
                        <input type="file" name="nama_file_ijazah" class="form-control form-control-user">
                    </div>
                    <div class="form-group">
                        <label for="tahun_lulus">Tahun Lulus</label>
                        <input type="number" name="tahun_lulus" class="form-control form-control-user" id="tahun_lulus"
                            value="{{isset($data_riwayat->tahun_lulus)?$data_riwayat->tahun_lulus:''}}">
                    </div>
                    <div class="form-group">
                        <label for="nilai_rata_rata">Nilai Rata-Rata Ijazah</label>
                        <input type="number" name="nilai_rata_rata" class="form-control form-control-user" id="nilai_rata_rata"
                            value="{{isset($data_riwayat->nilai_rata_rata)?$data_riwayat->nilai_rata_rata:''}}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <button class="btn btn-success btn-icon-split float-right" type="submit">
                        <span class="icon text-white-50"><i class="fas fa-save"></i></span>
                        <span class="text">Simpan</span>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection