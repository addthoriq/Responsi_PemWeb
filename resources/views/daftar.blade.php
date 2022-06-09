@extends('layouts.app')
@section('title', 'Daftar Akun PENMARU')
@section('isi')
<div class="card o-hidden border-0 shadow-lg my-5">
    <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
            <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
            <div class="col-lg-7">
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Selamat Datang di Portal Penerimaan Mahasiswa Baru IST AKPRIND Yogyakarta</h1>
                    </div>
                    <form class="user" action="{{route('daftar-post')}}" method="post">
                        @csrf
                        @error('nik')
                        <strong>{{ $message }}</strong>
                        @enderror
                        
                        @error('nama_maba')
                        <strong>{{ $message }}</strong>
                        @enderror
                        @error('email')
                        <strong>{{ $message }}</strong>
                        @enderror
                        @error('password')
                        <strong>{{ $message }}</strong>
                        @enderror
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" value="{{ old('nik') }}" id="nik" name="nik" placeholder="NIK" >
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" id="nama_maba" name="nama_maba" placeholder="Nama Lengkap" value="{{ old('nama_maba') }}">
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="email" class="form-control form-control-user" id="email" name="email" placeholder="Email" value="{{ old('email') }}">
                            </div>
                            <div class="col-sm-6">
                                <label>Jenis Kelamin</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki_laki" value="lk">
                                    <label class="form-check-label" for="laki_laki">
                                        Laki laki
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="pr">
                                    <label class="form-check-label" for="perempuan">
                                        Perempuan
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Kata Sandi">
                            </div>
                            <div class="col-sm-6">
                                <input type="password" class="form-control form-control-user" id="password-confirm" name="password_confirmation" placeholder="Ulangi Kata Sandi">
                            </div>
                        </div>
                        {{-- <a href="login.html" class="btn btn-primary btn-user btn-block">
                            Daftar Akun
                        </a> --}}
                        <button class="btn btn-primary btn-user btn-block" type="submit">Daftar Akun</button>
                    </form>
                    <hr>
                    <div class="text-center">
                        <a class="small" href="{{ route('masuk') }}">Udah punya akun? Masuk!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection