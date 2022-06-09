@extends('maba.layouts.app')
@section('title', 'Unggah Berkas')
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
        <form class="user" action="" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label>Unggah KTP Pribadi</label>
                        <input type="file" name="nama_file_ijazah" class="form-control form-control-user">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>Unggah Akta Kelahiran</label>
                        <input type="file" name="nama_file_ijazah" class="form-control form-control-user">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>Unggah Kartu Keluarga</label>
                        <input type="file" name="nama_file_ijazah" class="form-control form-control-user">
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