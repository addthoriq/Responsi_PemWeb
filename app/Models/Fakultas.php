<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fakultas extends Model
{
    use HasFactory;
    protected $table = 'fakultas';
    public $incrementing = false;
    protected $primaryKey = 'kode_fakultas';
    protected $keyType = 'char';

    protected $guarded = [];

    public function jurusan()
    {
        return $this->hasMany(Jurusan::class, 'kode_fakultas');
    }
}
