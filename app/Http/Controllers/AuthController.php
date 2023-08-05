<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Session;

use App\Models\Dapil;
use App\Models\User;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.index');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'email'=>'required|email',
            'password'=> 'required',
        ]);

        if (auth()->guard('user')->attempt(['email' => $request->email,'password' => $request->password]))
        {
            $admin = auth()->guard('user')->user();
            return redirect()->route('landing-page');
        }else {
            Session::flash('error', 'Email atau Password Salah');
            return redirect("auth");
        }
    }

    public function register()
    {
        $data['dapil'] = Dapil::all();
        return view('auth.register', $data);
    }

    public function storeRegister(Request $request)
    {
        $this->validate($request, [
            'name'=>'required',
            'email'=>'required|email',
            'dapil'=>'required',
            'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'min:6'
        ]);

        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $input['role'] = 'user';

        User::create($input);
        return redirect('/auth')->with('success', 'Registrasi berhasil silahkan login');

    }

    public function logout()
    {
        auth()->guard('user')->logout();
        return redirect()->route('landing-page');
    }
}
