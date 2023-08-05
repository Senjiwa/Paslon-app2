<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;

use Illuminate\Foundation\Auth\AutheticatesUsers;
use Auth;
use App\/**
 * Scope a query to only include 
 *
 * @param  \Illuminate\Database\Eloquent\Builder $query
 * @return \Illuminate\Database\Eloquent\Builder
 */
public function scope($query)
{
    return $query->where('');
}

class LoginController extends Controller
{
    //
    public function loginForm()
    {
        return " Halaman Login administrator"; 
    }
}
