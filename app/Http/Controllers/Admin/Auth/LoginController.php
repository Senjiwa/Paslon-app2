<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;

use Auth;
use Session;

class LoginController extends Controller
{
    //
    
    protected $guard='adminMiddle';
    protected $redirectTo='admin/home';

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
            // \Session::put('success','Anda berhasil login!');
            return redirect()->route('admin.home');
        }else {
            Session::flash('error', 'Email atau Password Salah');
            return redirect("admin/login");
        }
    }

    public function logout()
    {
        Auth::guard('adminMiddle')->logout();
        return redirect('/admin/home');
    }
}
