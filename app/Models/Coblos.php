<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coblos extends Model
{
    use HasFactory;
    protected $table='coblos';

    protected $fillable=[
        'user','paslon'
    ];
}
