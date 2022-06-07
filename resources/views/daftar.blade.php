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
                    <form class="user">
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" id="nik"
                            placeholder="NIK">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" id="name"
                            placeholder="Nama Lengkap">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control form-control-user" id="email"
                                placeholder="Email">
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="password" class="form-control form-control-user" id="password"
                                    placeholder="Kata Sandi">
                            </div>
                            <div class="col-sm-6">
                                <input type="password" class="form-control form-control-user" id="ulangi"
                                    placeholder="Ulangi Kata Sandi">
                            </div>
                        </div>
                        <a href="login.html" class="btn btn-primary btn-user btn-block">
                            Daftar Akun
                        </a>
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