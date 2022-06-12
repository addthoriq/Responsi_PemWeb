<?php

namespace App\Http\Controllers\AuthMaba;

use App\Http\Controllers\Controller;
use App\Models\CalonMaba;
use App\Models\FileMaba;
use App\Models\RiwayatPendMaba;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/beranda';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['guest', 'guest:maba'])->except('logout');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        $v = Validator::make($data, [
            'nik' => ['required', 'min:15'],
            'nama_maba' => ['required', 'string', 'max:50'],
            'email' => ['required', 'string', 'email', 'max:30', 'unique:App\Models\CalonMaba,email'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        return $v;
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $nik = $data['nik'];
        $pass = $data['password'];
        $calonMaba = CalonMaba::create([
            'nik' => $nik,
            'nama_maba' => $data['nama_maba'],
            'jenis_kelamin' => $data['jenis_kelamin'],
            'email' => $data['email'],
            'password' => bcrypt($pass),
        ]);
        RiwayatPendMaba::create([
            'nik_maba' => $nik,
        ]);
        FileMaba::create([
            'nik_maba' => $nik,
        ]);
        return $calonMaba;
    }
}
