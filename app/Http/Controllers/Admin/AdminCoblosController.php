<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Auth;
use DB;

use App\Models\Coblos;
use App\Models\Paslon;

class AdminCoblosController extends Controller
{
    public function index()
    {
        $array = [];
        $paslon = DB::table('paslon')
                ->selectRaw("paslon.*, dapil.nama_dapil")
                ->join('dapil', 'paslon.dapil', '=', 'dapil.id')
                ->orderBy('paslon.id','desc')
                ->get();

        foreach ($paslon as $row) {
            $numCoblos = count(Coblos::where('paslon', $row->id)->get());
            $numDapil = count(Paslon::where('dapil', $row->dapil)->get());

            $array[] = [
                'id' => $row->id,
                'nama' => $row->nama,
                'dapil' => $row->nama_dapil,
                'jumlah_coblos' => $numCoblos,
            ];
        }

        $data['coblos'] = $array;

        return view('back.coblos.index', $data); 
    }
}
