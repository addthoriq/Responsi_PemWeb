<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provinsi extends Model
{
    use HasFactory;
    protected $table = 'provinsi';
    public $incrementing = false;
    protected $primaryKey = 'kode_provinsi';
    protected $keyType = 'char';

    protected $guarded = [];

    public function kabupaten()
    {
        return $this->hasMany(Kabupaten::class);
    }
}
