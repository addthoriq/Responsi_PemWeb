<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agama extends Model
{
    use HasFactory;
    protected $table = 'agama';
    public $incrementing = false;
    protected $primaryKey = 'kode_agama';
    protected $keyType = 'char';

    protected $guarded = [];

    public function calonMaba()
    {
        return $this->hasMany(CalonMaba::class);
    }

    public function ayah()
    {
        return $this->hasMany(Ayah::class);
    }

    public function ibu()
    {
        return $this->hasMany(Ibu::class);
    }
}
