<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class CalonMaba extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'calon_maba';
    public $incrementing = false;
    protected $primaryKey = 'nik';
    protected $keyType = 'char';

    protected $guarded = [];

    protected $hidden = [
        'password',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function agama()
    {
        return $this->belongsTo(Agama::class, 'kode_agama');
    }

    public function fileMaba()
    {
        return $this->hasMany(FileMaba::class, 'nik_maba', 'nik');
    }

    public function riwayatPendMaba()
    {
        return $this->hasMany(RiwayatPendMaba::class, 'nik_maba', 'nik');
    }

    public function ayah()
    {
        return $this->belongsTo(Ayah::class, 'nik_ayah', 'nik');
    }
    
    public function ibu()
    {
        return $this->belongsTo(Ibu::class, 'nik_ibu', 'nik');
    }

    public function statusHubungan()
    {
        return $this->belongsTo(StatusHubungan::class, 'kode_status');
    }

    public function provinsi()
    {
        return $this->belongsTo(Provinsi::class, 'kode_provinsi');
    }

    public function kabupaten()
    {
        return $this->belongsTo(Kabupaten::class, 'kode_kabupaten');
    }

    public function kecamatan()
    {
        return $this->belongsTo(Kecamatan::class, 'kode_kecamatan');
    }

    public function programCalonmaba()
    {
        return $this->hasMany(ProgramCalonmaba::class, 'nik_maba', 'nik');
    }
}
