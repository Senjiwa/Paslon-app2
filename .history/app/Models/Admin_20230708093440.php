<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

use Illuminate\Foundation\Auth\User as Authenticateble;

class Admin extends Model
{
    use HasFactory;
    use Notifiable;

    protected $table='admins';
    protected $fillable=[
        'name','email','password'
    ];
}
