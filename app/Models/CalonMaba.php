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
        return $this->belongsTo(Agama::class);
    }

    public function fileMaba()
    {
        return $this->hasMany(FileMaba::class);
    }

    public function riwayatPendMaba()
    {
        return $this->hasMany(RiwayatPendMaba::class);
    }

    public function ayah()
    {
        return $this->belongsTo(Ayah::class);
    }
    
    public function ibu()
    {
        return $this->belongsTo(Ibu::class);
    }

    public function statusHubungan()
    {
        return $this->belongsTo(StatusHubungan::class);
    }

    public function provinsi()
    {
        return $this->belongsTo(Provinsi::class);
    }

    public function kabupaten()
    {
        return $this->belongsTo(Kabupaten::class);
    }

    public function kecamatan()
    {
        return $this->belongsTo(Kecamatan::class);
    }

    public function programCalonmaba()
    {
        return $this->hasMany(ProgramCalonmaba::class);
    }
}
