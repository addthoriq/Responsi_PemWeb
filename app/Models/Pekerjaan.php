<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pekerjaan extends Model
{
    use HasFactory;
    protected $table = 'pekerjaan';
    public $incrementing = false;
    protected $primaryKey = 'kode_pekerjaan';
    protected $keyType = 'char';

    protected $guarded = [];
}
