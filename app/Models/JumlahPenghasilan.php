<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JumlahPenghasilan extends Model
{
    use HasFactory;
    protected $table = 'jumlah_penghasilan';
    public $incrementing = false;
    protected $primaryKey = 'kode_penghasilan';
    protected $keyType = 'char';

    protected $guarded = [];
}
