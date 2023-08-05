<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

use App\Models\Dapil;

class DapilController extends Controller
{
    public function index()
    {
        $data['dapil'] = Dapil::all();
        return view('back.dapil.index', $data); 
    }

    public function create()
    {
        $data['pages'] = 'create';
        return view('back.dapil.form', $data); 
    }

    public function store(Request $request) : RedirectResponse
    {
        $this->validate($request, [
            'nama_dapil'=>'required|unique:dapil,nama_dapil',
            'daerah'=> 'required',
        ]);

        $input = $request->all();
        Dapil::create($input);

        return redirect('/admin/dapil')->with('success', 'Dapil has been saved!');
    }

    public function edit($dapil)
    {
        $data['dapil'] = Dapil::findOrFail($dapil);
        $data['pages'] = 'edit';
        return view('back.dapil.form', $data); 
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $dapil = Dapil::findOrFail($id);
        $validatedData = [
            'nama_dapil'=>'required',
            'daerah'=> 'required',
        ];

        if($request->nama_dapil != $dapil->nama_dapil) {
            $validatedData['nama_dapil'] = 'required|unique:dapil,nama_dapil';
        }

        $this->validate($request, $validatedData);

        $input = $request->all();

        $dapil = Dapil::findOrFail($id);
        $dapil->update($input);
    
        return redirect('/admin/dapil')->with('success', 'Dapil updated!');
    }

    public function destroy($id)
    {
        $dapil = Dapil::findOrFail($id);
        $dapil->delete();

        return redirect('/admin/dapil')->with('success', 'Dapil deleted!');
    }

    public function getDapil($id)
    {
        $output='';
        $data = Dapil::findOrFail($id);
        $array = explode(',', $data->daerah);
        
        $output .= '
            <div class="form-text text-muted">
                <label>Mencakup Daerah : </label>
                <ul>' 
        ;
        foreach ($array as $row) {
            $output .= '
                <li>'.$row.'</li>
            ';
        }
        $output .= '
                </ul>
            </div>
        ';

        return response()->json($output);
    }
}
