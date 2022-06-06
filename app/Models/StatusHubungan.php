<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusHubungan extends Model
{
    use HasFactory;
    protected $table = 'status_hubungan';
    public $incrementing = false;
    protected $primaryKey = 'kode_status';
    protected $keyType = 'char';

    protected $guarded = [];
}
