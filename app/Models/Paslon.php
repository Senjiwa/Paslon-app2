<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paslon extends Model
{
    use HasFactory;

    protected $table='paslon';

    protected $fillable=[
        'no','nama','fraksi','dapil','agama','r_pen','r_pek','gambar'
    ];
}

