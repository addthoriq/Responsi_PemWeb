@extends('maba.layouts.app')
@section('title', 'Informasi Data Pribadi')
@section('def_css')
<meta name="csrf-token" content="{{ csrf_token() }}">
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/4.0.0/css/jasny-bootstrap.min.css">
<style>
    .select2-container .select2-selection--single {
        height: 35px !important;
    }
</style>
@endsection
@section('konten')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Informasi Data Pribadi</h1>
</div>

{{-- Data Pribadi --}}
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data dan Kontak Pribadi</h6>
    </div>
    <div class="card-body">
        <form class="user" action="{{ route('put.infomrasi-pribadi') }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="nik">Nomor Induk Kewarganegaraan (NIK)</label>
                        <input type="text" name="nik" class="form-control form-control-user" id="nik" value="{{$data_maba->nik}}">
                    </div>
                    <div class="form-group">
                        <label for="nis">Nomor Induk Siswa (NIS)</label>
                        <input type="text" name="nis" class="form-control form-control-user" id="nis" value="{{$data_maba->nis}}">
                    </div>
                    <div class="form-group">
                        <label for="nama_maba">Nama Lengkap</label>
                        <input type="text" name="nama_maba" class="form-control form-control-user" id="nama_maba"
                            value="{{$data_maba->nama_maba}}">
                    </div>
                    {{-- Agama --}}
                    <div class="form-group">
                        <label for="agama">Agama</label>
                        <select name="agama" id="agama" class="form-control">
                            <option value="{{$data_maba->agama->kode_agama??''}}" selected>
                                {{$data_maba->agama->nama_agama??''}}</option>
                            @foreach ($agama as $ag)
                            <option value="{{$ag->kode_agama}}">{{$ag->nama_agama}}</option>
                            @endforeach
                        </select>
                    </div>
                    {{-- End Agama --}}
                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" {{($data_maba->jenis_kelamin ==
                            'lk')?'checked':''}} name="jenis_kelamin" id="laki_laki"
                            value="lk">
                            <label class="form-check-label" for="laki_laki">
                                Laki laki
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" {{($data_maba->jenis_kelamin ==
                            'pr')?'checked':''}} name="jenis_kelamin" id="perempuan"
                            value="pr">
                            <label class="form-check-label" for="perempuan">
                                Perempuan
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <div class="fileinput fileinput-new" data-provides="fileinput">
                            <div class="fileinput-new img-thumbnail" style="height: 160px;">
                                <img src="{{ asset('img/150.png') }}" alt="avatar disini">
                            </div>
                            <div class="fileinput-preview fileinput-exists img-thumbnail"
                                style="max-width: 200px; max-height: 150px;">
                            </div>
                            <div>
                                <span class="btn btn-outline-secondary btn-file">
                                    <span class="fileinput-new">Pilih Gambar</span>
                                    <span class="fileinput-exists">Ubah</span>
                                    <input type="file" name="avatar" accept="image/jpeg, image/x-png">
                                </span>
                                <a href="#" class="btn btn-outline-secondary fileinput-exists"
                                    data-dismiss="fileinput">Hapus</a>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nomor_hp">Nomor HP</label>
                        <input type="number" name="nomor_hp" class="form-control form-control-user" id="nomor_hp"
                            value="{{$data_maba->nomor_hp}}">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control form-control-user" id="email"
                            aria-describedby="emailHelp" value="{{$data_maba->email}}">
                    </div>
                    <div class="form-group">
                        <label for="password">Kata Sandi</label>
                        <input type="password" name="password" class="form-control form-control-user" id="password"
                            aria-describedby="emailHelp" value="">
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

{{-- Alamat --}}
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Alamat Tempat Tinggal</h6>
    </div>
    <div class="card-body">
        <form class="user" action="{{route('put.alamat-pribadi')}}" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" class="form-control form-control-user" id="alamat" value="{{$data_maba->alamat}}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="provinsi">Provinsi</label>
                        <select name="provinsi" id="provinsi" class="form-control select2">
                            <option value="{{ $data_maba->kode_provinsi??'' }}" selected>
                                {{ $data_maba->kode_provinsi?$data_maba->provinsi->nama_provinsi : "---Pilih Provinsi---" }}
                            </option>
                            @foreach ($provinsi as $prov)
                            <option value="{{$prov->kode_provinsi}}">{{$prov->nama_provinsi}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="kabupaten">Kabupaten</label>
                        <select name="kabupaten" id="kabupaten" class="form-control select2">
                            <option value="{{ $data_maba->kode_kabupaten??'' }}" selected>
                                {{ $data_maba->kode_kabupaten ? $data_maba->kabupaten->nama_kabupaten : "---Pilih Kabupaten---" }}
                            </option>
                        </select>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="kecamatan">Kecamatan</label>
                        <select name="kecamatan" id="kecamatan" class="form-control select2">
                            <option value="{{ $data_maba->kode_kecamatan??'' }}" selected>
                                {{ $data_maba->kode_kecamatan ? $data_maba->kecamatan->nama_kecamatan : '---Pilih Kecamatan---' }}
                            </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="kode_pos">Kode Pos</label>
                        <input type="number" name="kode_pos" class="form-control form-control-user" id="kode_pos" value="{{$data_maba->kode_pos}}">
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
@section('def_js')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/4.0.0/js/jasny-bootstrap.min.js"></script>
<script>
    // select2 setting
    $(document).ready(function() {
        $('.select2').select2({
        width: 'resolve',
        });
    });
</script>
<script>
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
$(document).on('change', '#provinsi', function () {
    $('#kabupaten').html('<option value="0">- Please Select -</option>');
    var provinsi_selected = $(this).val();
    $.ajax({
        url: "/kabupaten",
        method: "POST",
        data: {
            _token: "{{ csrf_token() }}",
            provinsi: provinsi_selected
        },
        success: function(response){
            $('#kabupaten').html(response);
        }
    });
});
$(document).on('change', '#kabupaten', function () {
    $.post( '{{ route('wilayah.kecamatan') }}', {
        kabupaten: $(this).val()
    }).done(function( data ) {
        $('#kecamatan').html(data);
    });
});
</script>
@endsection