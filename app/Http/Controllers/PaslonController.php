<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB; 
use File;
use Auth;

use App\Models\Paslon;
use App\Models\Dapil;
use App\Models\Coblos;
use App\Models\Fraksi;

class PaslonController extends Controller
{
    public function index()
    {
        if(Auth::guard('adminMiddle')->user()->role == 'app') {
            $data['paslon'] = DB::table('paslon')
                        ->selectRaw("paslon.*, dapil.nama_dapil, fraksi.nama_fraksi")
                        ->join('dapil', 'paslon.dapil', '=', 'dapil.id')
                        ->join('fraksi', 'paslon.fraksi', '=', 'fraksi.id')
                        ->orderBy('paslon.id')
                        ->get();
        } else {
            $data['paslon'] = DB::table('paslon')
                        ->selectRaw("paslon.*, dapil.nama_dapil, fraksi.nama_fraksi")
                        ->join('dapil', 'paslon.dapil', '=', 'dapil.id')
                        ->join('fraksi', 'paslon.fraksi', '=', 'fraksi.id')
                        ->where('fraksi', Auth::guard('adminMiddle')->user()->fraksi)
                        ->orderBy('paslon.id')
                        ->get();
        }
        
        return view('daftar.index', $data); 
    }

    public function tampil()
    {
        $data=paslon::all();
        return view('paslon',compact('data'));
    }

    public function create()
    {
        $data['dapil'] = Dapil::all();
        $data['fraksi'] = Fraksi::all();

        return view('daftar.create', $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'gambar'=> 'required|mimes:jpg,jpeg,png|max:2048'
        ]);

        $input = $request->all();

        if(Auth::guard('adminMiddle')->user()->role == 'partai') {
            $input['fraksi'] = Auth::guard('adminMiddle')->user()->fraksi;
        }

        $fileName = time().'.'.$request->file('gambar')->extension();
        $request->gambar->move(public_path('upload/paslon'), $fileName);
        $input['gambar'] = $fileName;

        Paslon::create($input);
        return redirect('admin/tambah')->with('status','Data berhasil di simpan');
    }

    public function edit($id)
    {
        $data['paslon'] = Paslon::find($id); 
        $data['dapil'] = Dapil::all();
        $data['agama'] = ['Islam', 'Kristen Protestan', 'Kristen Katolik', 'Hindu', 'Budha', 'Konghucu'];
        $data['fraksi'] = Fraksi::all();

        return view('daftar.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $input = $request->all();
        if ($request->hasFile('gambar')) {
            $dataPaslon = Paslon::findOrFail($id);
            $fileName = time().'.'.$request->file('gambar')->extension();  
            $request->gambar->move(public_path('upload/paslon'), $fileName);

            $input['gambar'] = $fileName;
            File::delete(public_path('upload/paslon/'.$dataPaslon->gambar));
        }

        $paslon = Paslon::findOrFail($id);
        $paslon->update($input);
    
        return redirect('/admin/tambah')->with('status', 'Paslon updated!');
    }


    public function destroy($id)
    {
        $paslon = Paslon::findOrFail($id);
        File::delete(public_path('uploads/paslon/'.$paslon->gambar));
        $paslon->delete();

        return redirect('/admin/tambah')->with('success', 'Paslon deleted!');
    }

    public function getForUser()
    {
        // dd(Auth::guard('user')->user());
        if(Auth::guard('user')->check()) {
            $data['paslon'] = DB::table('paslon')
                        ->selectRaw("paslon.*, dapil.nama_dapil")
                        ->join('dapil', 'paslon.dapil', '=', 'dapil.id')
                        ->where('paslon.dapil', Auth::guard('user')->user()->dapil)
                        ->orderBy('paslon.id','desc')
                        ->get();
        } else {
            $data['paslon'] = DB::table('paslon')
                        ->selectRaw("paslon.*, dapil.nama_dapil")
                        ->join('dapil', 'paslon.dapil', '=', 'dapil.id')
                        ->orderBy('paslon.id','desc')
                        ->get();
        }

        

        return view('paslon', $data); 
    }

    public function showForUser($id)
    {
        // dd(env('RECAPTCHA_SITE_KEY'));

        $checkCoblos = null;
        if(Auth::guard('user')->check()) {
            $checkCoblos = Coblos::where('user', Auth::guard('user')->user()->id)->first();
        }
        
        $data['paslon'] = DB::table('paslon')
                        ->selectRaw("paslon.*, dapil.nama_dapil")
                        ->join('dapil', 'paslon.dapil', '=', 'dapil.id')
                        ->where('paslon.id', $id)
                        ->first();

        $data['is_coblos'] = $checkCoblos == null ? false : true;

        return view('paslon-detail', $data); 
    }

    
}
