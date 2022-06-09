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
        <form class="user" action="{{ route('put.kontak-ibu') }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="nik">Nomor Induk Kewarganegaraan (NIK)</label>
                        <input type="text" name="nik" class="form-control form-control-user" id="nik"
                            value="{{($data_maba->ibu->nik)??''}}">
                    </div>
                    <div class="form-group">
                        <label for="nama_ibu">Nama Lengkap</label>
                        <input type="text" name="nama_ibu" class="form-control form-control-user" id="nama_ibu"
                            value="{{($data_maba->ibu->nama_ibu)??''}}">
                    </div>
                    {{-- Agama --}}
                    <div class="form-group">
                        <label for="agama">Agama</label>
                        <select name="agama" id="agama" class="form-control">
                            <option value="{{ isset($data_maba->ibu->kode_agama)??'' }}" selected>
                                {{ isset($data_maba->ibu->kode_agama) ? $data_maba->ibu->agama->nama_agama : "---Pilih
                                Agama---" }}
                            </option>
                            @foreach ($agama as $ag)
                            <option value="{{$ag->kode_agama}}">{{$ag->nama_agama}}</option>
                            @endforeach
                        </select>
                    </div>
                    {{-- End Agama --}}
                    <div class="form-group">
                        <label for="kewarganegaraan">Kewarganegaraan</label>
                        <input type="text" name="kewarganegaraan" class="form-control form-control-user"
                            id="kewarganegaraan" value="{{($data_maba->ibu->kewarganegaraan)??''}}">
                    </div>
                    <div class="form-group">
                        <label for="hubungan_ibu">Status Hubungan</label>
                        <select name="hubungan_ibu" id="hubungan_ibu" class="form-control">
                            <option value="{{ isset($data_maba->hubungan_ibu)??'' }}" selected>
                                {{ $data_maba->hubungan_ibu ? $data_maba->hubunganIbu->nama_hubungan : '---Pilih
                                Status Hubungan---' }}
                            </option>
                            @foreach ($hubungan as $hub)
                            <option value="{{$hub->kode_status}}">{{$hub->nama_hubungan}}</option>
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
                        <input type="number" name="nomor_hp" class="form-control form-control-user" id="nomor_hp"
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
        <form class="user" action="{{ route('put.alamat-ibu') }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" class="form-control form-control-user" id="alamat"
                            value="{{($data_maba->ibu->alamat)??''}}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="provinsi">Provinsi</label>
                        <select name="provinsi" id="provinsi" class="form-control select2">
                            <option value="{{ isset($data_maba->ibu->kode_provinsi)??'' }}" selected>
                                {{ isset($data_maba->ibu->kode_provinsi) ? $data_maba->ibu->provinsi->nama_provinsi :
                                "---Pilih Provinsi---" }}
                            </option>
                            @foreach ($provinsi as $prov)
                            <option value="{{$prov->kode_provinsi}}">{{$prov->nama_provinsi}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="kabupaten">Kabupaten</label>
                        <select name="kabupaten" id="kabupaten" class="form-control select2">
                            <option value="{{ isset($data_maba->ibu->kode_kabupaten)??'' }}" selected>
                                {{ isset($data_maba->ibu->kode_kabupaten) ? $data_maba->ibu->kabupaten->nama_kabupaten :
                                "---Pilih Kabupaten---" }}
                            </option>
                        </select>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="kecamatan">Kecamatan</label>
                        <select name="kecamatan" id="kecamatan" class="form-control select2">
                            <option value="{{ isset($data_maba->ibu->kode_kecamatan)??'' }}" selected>
                                {{ isset($data_maba->ibu->kode_kecamatan) ? $data_maba->ibu->kecamatan->nama_kecamatan :
                                "---Pilih Kecamatan---" }}
                            </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="kode_pos">Kode Pos</label>
                        <input type="number" name="kode_pos" class="form-control form-control-user" id="kode_pos"
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
        <form class="user" action="{{route('put.pendidikan-ibu')}}" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="pendidikan">Pendidikan Terakhir</label>
                        <select name="pendidikan" id="pendidikan" class="form-control">
                            <option value="{{ isset($data_maba->ibu->kode_pendidikan)??'' }}" selected>
                                {{ isset($data_maba->ibu->kode_pendidikan) ?
                                $data_maba->ibu->pendidikanTerakhir->nama_pendidikan : "---Pendidikan Terkahir---" }}
                            </option>
                            @foreach ($pendidikan as $pdd)
                            <option value="{{$pdd->kode_pendidikan}}">{{$pdd->nama_pendidikan}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="pekerjaan">Pekerjaan</label>
                        <select name="pekerjaan" id="pekerjaan" class="form-control">
                            <option value="{{ isset($data_maba->ibu->kode_pekerjaan)??'' }}" selected>
                                {{ isset($data_maba->ibu->kode_pekerjaan) ? $data_maba->ibu->pekerjaan->nama_pekerjaan :
                                "---Pilih Pekerjaan---" }}
                            </option>
                            @foreach ($pekerjaan as $pkj)
                            <option value="{{$pkj->kode_pekerjaan}}">{{$pkj->nama_pekerjaan}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="penghasilan">Jumlah Penghasilan</label>
                        <select name="penghasilan" id="penghasilan" class="form-control">
                            <option value="{{ isset($data_maba->ibu->kode_penghasilan)??'' }}" selected>
                                {{ isset($data_maba->ibu->kode_penghasilan) ?
                                $data_maba->ibu->jumlahPenghasilan->keterangan_penghasilan : "--- Jumlah Penghasilan
                                ---" }}
                            </option>
                            @foreach ($penghasilan as $phsl)
                            <option value="{{$phsl->kode_penghasilan}}">{{$phsl->keterangan_penghasilan}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="nominal">Nominal Gaji Ibu</label>
                        <input type="number" name="nominal" class="form-control form-control-user" id="nominal"
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