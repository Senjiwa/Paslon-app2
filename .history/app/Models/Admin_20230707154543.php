<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notification\Notifiable;

use Illuminate\Foundation\Auth\User as Authenticateble;

class Admin extends Model
{
    use HasFactory;
    use Notifiable;

    protected $table='admins';
    protected $fillable=[
        '',''
    ]
}
