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
        return $this->belongsTo(Agama::class);
    }

    public function calonMaba()
    {
        return $this->hasMany(CalonMaba::class);
    }

    public function jumlahPenghasilan()
    {
        return $this->belongsTo(JumlahPenghasilan::class);
    }

    public function pekerjaan()
    {
        return $this->belongsTo(Pekerjaan::class);
    }

    public function pendidikanTerakhir()
    {
        return $this->belongsTo(PendidikanTerakhir::class);
    }
}
