<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;

use Illuminate\Foundation\Auth\AutheticatesUsers;
use Auth;

class LoginController extends Controller
{
    //
    use AutheticatesUsers;
    protected $guard='adminMiddle';
    
    public function loginForm()
    {
        return " Halaman Login administrator"; 
    }
}
