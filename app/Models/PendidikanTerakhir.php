<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PendidikanTerakhir extends Model
{
    use HasFactory;
    protected $table = 'pendidikan_terakhir';
    public $incrementing = false;
    protected $primaryKey = 'kode_pendidikan';
    protected $keyType = 'char';

    protected $guarded = [];
}
