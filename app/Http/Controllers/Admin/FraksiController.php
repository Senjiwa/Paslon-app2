<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

use App\Models\Fraksi;

class FraksiController extends Controller
{
    public function index()
    {
        $data['fraksi'] = Fraksi::all();
        return view('back.fraksi.index', $data); 
    }

    public function create()
    {
        $data['pages'] = 'create';
        return view('back.fraksi.form', $data); 
    }

    public function store(Request $request) : RedirectResponse
    {
        $this->validate($request, [
            'nama_fraksi'=>'required|unique:fraksi,nama_fraksi',
        ]);

        $input = $request->all();
        Fraksi::create($input);

        return redirect('/admin/fraksi')->with('success', 'Fraksi has been saved!');
    }

    public function edit($fraksi)
    {
        $data['fraksi'] = Fraksi::findOrFail($fraksi);
        $data['pages'] = 'edit';
        return view('back.fraksi.form', $data); 
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $dapil = Fraksi::findOrFail($id);
        $this->validate($request, [
            'nama_fraksi'=>'required|unique:fraksi,nama_fraksi',
        ]);

        $input = $request->all();

        $dapil = Fraksi::findOrFail($id);
        $dapil->update($input);
    
        return redirect('/admin/fraksi')->with('success', 'Fraksi updated!');
    }

    public function destroy($id)
    {
        $dapil = Fraksi::findOrFail($id);
        $dapil->delete();

        return redirect('/admin/fraksi')->with('success', 'Fraksi deleted!');
    }
}
