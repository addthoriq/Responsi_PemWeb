@extends('maba.layouts.app')
@section('title', 'Informasi Data Ibu')
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
    <h1 class="h3 mb-0 text-gray-800">Informasi Data Keluarga</h1>
</div>

{{-- Data Pribadi Ibu --}}
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Pribadi Ibu</h6>
    </div>
    <div class="card-body">
        <form class="user" action="" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="nik">Nomor Induk Kewarganegaraan (NIK)</label>
                        <input type="text" class="form-control form-control-user" id="nik"
                            value="{{($data_maba->ibu->nik)??''}}">
                    </div>
                    <div class="form-group">
                        <label for="nama_Ibu">Nama Lengkap</label>
                        <input type="text" class="form-control form-control-user" id="nama_Ibu"
                            value="{{($data_maba->ibu->nama_Ibu)??''}}">
                    </div>
                    {{-- Agama --}}
                    <div class="form-group">
                        <label for="agama">Agama</label>
                        <select name="agama" id="agama" class="form-control">
                            {{-- <option value="{{$data_maba->ibu->agama->kode_agama??''}}" selected>
                                {{$data_maba->ibu->agama->nama_agama??''}}</option> --}}
                            @foreach ($agama as $ag)
                            <option value="{{$ag->kode_agama}}">{{$ag->nama_agama}}</option>
                            @endforeach
                        </select>
                    </div>
                    {{-- End Agama --}}
                    <div class="form-group">
                        <label for="kewarganegaraan">Kewarganegaraan</label>
                        <input type="text" class="form-control form-control-user" id="kewarganegaraan"
                            value="{{($data_maba->ibu->kewarganegaraan)??''}}">
                    </div>
                    <div class="form-group">
                        <label for="agama">Status Hubungan</label>
                        <select name="agama" id="agama" class="form-control">
                            {{-- <option value="{{$data_maba->ibu->agama->kode_agama??''}}" selected>
                                {{$data_maba->ibu->agama->nama_agama??''}}</option> --}}
                            @foreach ($hubungan as $hub)
                            <option value="{{$hub->kode_hubungan}}">{{$hub->nama_hubungan}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col">
                    <label>Unggah Foto KTP</label>
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
                        <input type="number" class="form-control form-control-user" id="nomor_hp"
                            value="{{($data_maba->ibu->nomor_hp)??''}}">
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
        <h6 class="m-0 font-weight-bold text-primary">Alamat Tempat Tinggal Ibu</h6>
    </div>
    <div class="card-body">
        <form class="user" action="" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control form-control-user" id="alamat"
                            value="{{($data_maba->ibu->alamat)??''}}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="provinsi">Provinsi</label>
                        <select name="provinsi" id="provinsi" class="form-control select2">
                            @foreach ($provinsi as $prov)
                            <option value="{{$prov->kode_provinsi}}">{{$prov->nama_provinsi}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="kabupaten">Kabupaten</label>
                        <select name="kabupaten" id="kabupaten" class="form-control select2">
                            <option value="" selected>---Pilih Kabupaten---</option>
                        </select>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="kecamatan">Kecamatan</label>
                        <select name="kecamatan" id="kecamatan" class="form-control select2">
                            <option value="" selected>---Pilih Kecamatan---</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="kode_pos">Kode Pos</label>
                        <input type="number" class="form-control form-control-user" id="kode_pos"
                            value="{{($data_maba->ibu->kode_pos)??''}}">
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

{{-- Pekerjaan dan Riwayat Pendidikan Ibu --}}
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Pekerjaan dan Riwayat Pendidikan Ibu</h6>
    </div>
    <div class="card-body">
        <form class="user" action="" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="agama">Pendidikan Terakhir</label>
                        <select name="agama" id="agama" class="form-control">
                            {{-- <option value="{{$data_maba->ibu->agama->kode_agama??''}}" selected>
                                {{$data_maba->ibu->agama->nama_agama??''}}</option> --}}
                            @foreach ($pendidikan as $pdd)
                            <option value="{{$pdd->kode_pendidikan}}">{{$pdd->nama_pendidikan}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="agama">Pekerjaan</label>
                        <select name="agama" id="agama" class="form-control">
                            {{-- <option value="{{$data_maba->ibu->agama->kode_agama??''}}" selected>
                                {{$data_maba->ibu->agama->nama_agama??''}}</option> --}}
                            @foreach ($pekerjaan as $pkj)
                            <option value="{{$pkj->kode_pekerjaan}}">{{$pkj->nama_pekerjaan}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="agama">Jumlah Penghasilan</label>
                        <select name="agama" id="agama" class="form-control">
                            {{-- <option value="{{$data_maba->ibu->agama->kode_agama??''}}" selected>
                                {{$data_maba->ibu->agama->nama_agama??''}}</option> --}}
                            @foreach ($penghasilan as $phsl)
                            <option value="{{$phsl->kode_penghasilan}}">{{$phsl->keterangan_penghasilan}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="nik">Nominal Gaji Ibu</label>
                        <input type="number" class="form-control form-control-user" id="nik"
                            value="{{($data_maba->ibu->nominal)??''}}">
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
    $('#kabupaten').html('<option value="0">-- Silahkan dipilih --</option>');
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