<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fraksi extends Model
{
    use HasFactory;
    protected $table='fraksi';

    protected $fillable=[
        'nama_fraksi'
    ];
}
