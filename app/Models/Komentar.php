<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Komentar extends Model
{
    use HasFactory;
    protected $table='komentar';

    protected $fillable=[
        'id_berita','parent_comment_id','id_user','comment'
    ];
}
