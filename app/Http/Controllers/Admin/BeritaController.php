<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

use File;

use App\Models\Berita;

class BeritaController extends Controller
{
    public function index()
    {
        $data['berita'] = Berita::orderBy('is_slider', 'DESC')
                            ->orderBy('id', 'DESC')
                            ->get();
        return view('back.berita.index', $data); 
    }

    public function create()
    {
        $data['pages'] = 'create';
        return view('back.berita.form', $data); 
    }

    public function store(Request $request) : RedirectResponse
    {
        $this->validate($request, [
            'judul'=>'required',
            'isi_berita'=> 'required',
            'gambar_berita' => 'required|mimes:jpg,jpeg,png|max:2048'
        ]);

        $input = $request->all();
        // $validated = $request->validated();
        
        $fileName = time().'.'.$request->file('gambar_berita')->extension();  
        $request->gambar_berita->move(public_path('upload/berita'), $fileName);

        $input['gambar'] = $fileName;
        $input['is_slider'] = 0;

        Berita::create($input);

        return redirect('/admin/berita')->with('success', 'Berita has been saved!');
    }

    public function edit($beritum)
    {
        $data['berita'] = Berita::findOrFail($beritum);
        $data['pages'] = 'edit';
        return view('back.berita.form', $data); 
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $this->validate($request, [
            'judul'=>'required',
            'isi_berita'=> 'required',
            'gambar_berita' => 'mimes:jpg,jpeg,png|max:2048'
        ]);

        $input = $request->all();
        if ($request->hasFile('gambar_berita')) {
            $dataBerita = Berita::findOrFail($id);
            $fileName = time().'.'.$request->file('gambar_berita')->extension();  
            $request->gambar_berita->move(public_path('upload/berita'), $fileName);

            $input['gambar'] = $fileName;
            File::delete(public_path('upload/berita/'.$dataBerita->gambar));
        }

        $berita = Berita::findOrFail($id);
        $berita->update($input);
    
        return redirect('/admin/berita')->with('success', 'Berita updated!');
    }

    public function destroy($id)
    {
        $berita = Berita::findOrFail($id);
        File::delete(public_path('upload/berita/'.$berita->gambar));
        $berita->delete();

        return redirect('/admin/berita')->with('success', 'Berita deleted!');
    }

    public function setSlider($id)
    {
        $berita = Berita::findOrFail($id);
        if($berita->is_slider == 0) {
            $input = [
                'is_slider' => 1
            ];
            $message = 'Slider berhasil ditambahkan';
        } else {
            $input = [
                'is_slider' => 0
            ];
            $message = 'Slider berhasil dibatalkan';
        }

        $berita->update($input);
        return redirect('/admin/berita')->with('success', $message);
    }
    
}
