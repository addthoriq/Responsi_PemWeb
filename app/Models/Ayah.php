<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ayah extends Model
{
    use HasFactory;
    protected $table = 'ayah';
    public $incrementing = false;
    protected $primaryKey = 'nik';
    protected $keyType = 'char';

    protected $guarded = [];

    public function agama()
    {
        return $this->belongsTo(Agama::class, 'kode_agama');
    }

    public function calonMaba()
    {
        return $this->hasMany(CalonMaba::class, 'nik_ayah', 'nik');
    }

    public function jumlahPenghasilan()
    {
        return $this->belongsTo(JumlahPenghasilan::class, 'kode_penghasilan');
    }

    public function pekerjaan()
    {
        return $this->belongsTo(Pekerjaan::class, 'kode_pekerjaan');
    }

    public function pendidikanTerakhir()
    {
        return $this->belongsTo(PendidikanTerakhir::class, 'kode_pendidikan');
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
}
