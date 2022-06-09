<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FileMaba extends Model
{
    use HasFactory;
    protected $table = 'file_maba';
    public $incrementing = false;
    protected $primaryKey = 'nik_maba';
    protected $keyType = 'char';

    protected $guarded = [];

    public function calonMaba()
    {
        return $this->belongsTo(CalonMaba::class, 'nik');
    }
}
