<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramKuliah extends Model
{
    use HasFactory;
    protected $table = 'program_kuliah';
    public $incrementing = false;
    protected $primaryKey = 'kode_program';
    protected $keyType = 'char';

    protected $guarded = [];
    
    public function programCalonmaba()
    {
        return $this->hasMany(ProgramCalonmaba::class);
    }
}
