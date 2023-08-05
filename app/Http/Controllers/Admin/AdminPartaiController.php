<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

use DB;

use App\Models\Admin;
use App\Models\Fraksi;

class AdminPartaiController extends Controller
{
    public function index()
    {
        $data['admin'] = DB::table('admins')
                ->selectRaw("admins.*, fraksi.nama_fraksi")
                ->join('fraksi', 'admins.fraksi', '=', 'fraksi.id')
                ->where('role', 'partai')
                ->orderBy('admins.id','desc')
                ->get();

        return view('back.admin-partai.index', $data); 
    }

    public function create()
    {
        $data['pages'] = 'create';
        $data['fraksi'] = Fraksi::all();

        return view('back.admin-partai.form', $data); 
    }

    public function store(Request $request) : RedirectResponse
    {
        $this->validate($request, [
            'name'=>'required|',
            'email'=>'required|email|unique:admins,email',
            'fraksi'=>'required',
            'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'min:6'
        ]);

        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $input['role'] = 'partai';

        Admin::create($input);

        return redirect('/admin/admin-partai')->with('success', 'Admin partai has been saved!');
    }

    public function edit($admin_partai)
    {
        $data['admin'] = Admin::findOrFail($admin_partai);
        $data['fraksi'] = Fraksi::all();
        $data['pages'] = 'edit';
        return view('back.admin-partai.form', $data); 
    }

    public function update(Request $request, $admin_partai): RedirectResponse
    {
        $dataAdmin = Admin::findOrFail($admin_partai);
        $validatedData = [
            'name'=>'required',
            'fraksi'=> 'required',
        ];

        if($request->email != $dataAdmin->email) {
            $validatedData['email'] = 'required|email|unique:admins,email';
        }

        $this->validate($request, $validatedData);

        $input = $request->all();
        $admin = Admin::findOrFail($admin_partai);
        $admin->update($input);
    
        return redirect('/admin/admin-partai')->with('success', 'Admin partai updated!');
    }

    public function destroy($admin_partai)
    {
        $admin = Admin::findOrFail($admin_partai);
        $admin->delete();

        return redirect('/admin/admin-partai')->with('success', 'Admin partai deleted!');
    }
}
