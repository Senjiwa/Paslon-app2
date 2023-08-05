<?php

namespace App\Http\Controllers;

use App\Models\Paslon;
use Illuminate\Http\Request;

class PaslonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        {
            $data=paslon::all();
            return view('paslon',compact('data'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create.input');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $paslon = new Paslon;
        $paslon->no= $request->no;
        $paslon->nama = $request->nama;
        $paslon->fraksi = $request->fraksi;
        $paslon->dapil = $request->dapil;
        $paslon->agama = $request->agama;
        $paslon->r_pen = $request->r_pen;
        $paslon->r_pek = $request->r_pek;
        if($paslon->save())
        {
            return redirect('input/')->with('status','Data berhasil di simpan');
        }else{
            return redirect('input/')->with('status','Data gagak di simpan');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Paslon  $paslon
     * @return \Illuminate\Http\Response
     */
    public function show(Paslon $paslon)
    {
        return " <h1>  <h1> ";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Paslon  $paslon
     * @return \Illuminate\Http\Response
     */
    public function edit(Paslon $paslon)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Paslon  $paslon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Paslon $paslon)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Paslon  $paslon
     * @return \Illuminate\Http\Response
     */
    public function destroy(Paslon $paslon)
    {
        //
    }

    
}
