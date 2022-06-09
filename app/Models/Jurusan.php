<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    use HasFactory;
    protected $table = 'ayah';
    public $incrementing = false;
    protected $primaryKey = 'nik';
    protected $keyType = 'char';

    protected $guarded = [];

    public function fakultas()
    {
        return $this->belongsTo(Fakultas::class, 'kode_fakultas');
    }

    public function programCalonmaba()
    {
        return $this->belongsToMany(ProgramCalonmaba::class, 'calonmaba_jurusan')->withPivot('pilihan_ke');
    }
}
