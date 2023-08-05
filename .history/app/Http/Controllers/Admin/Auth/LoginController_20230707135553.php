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
    protected $redirecTo='admin/home';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function guard(){
        return auth()->guard('adminMiddle');
    }

    public function loginForm()
    {
        if(auth()->guard('adminMiddle')->user()){
            return back();
        }
        return view
        //return " Halaman Login administrator"; 
    }
}
