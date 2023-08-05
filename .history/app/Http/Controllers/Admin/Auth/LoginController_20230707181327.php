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
        return view('back.auth.login');
        //return " Halaman Login administrator"; 
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'email'=>'required|email',
            'password'=> 'required',
        ]);

        if (auth()->guard('adminMiddle')->attempt(['email' => $request->email,'password' => $request->password]))
        {
            $admin=auth()->guard('adminMiddle')->user();
            \Session::put('success','Anda berhasil login!');
            return redirect()->route('admin.home');
        } else {
            return back()->with('error', 'email atau password salah!');
        }
    }
}
