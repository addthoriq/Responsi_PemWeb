<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramCalonmaba extends Model
{
    use HasFactory;
    protected $table = 'program_calonmaba';
    public $incrementing = false;
    protected $primaryKey = 'kode_program_calonmaba';
    protected $keyType = 'char';

    protected $guarded = [];

    public function calonMaba()
    {
        return $this->belongsTo(CalonMaba::class);
    }

    public function programKuliah()
    {
        return $this->belongsTo(ProgramKuliah::class);
    }

    public function jurusan()
    {
        return $this->belongsToMany(Jurusan::class, 'calonmaba_jurusan')->withPivot('pilihan_ke');
    }
}
