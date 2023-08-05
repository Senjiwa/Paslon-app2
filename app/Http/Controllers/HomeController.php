<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Berita;

use DB;
use Auth;

class HomeController extends Controller
{
    public function index()
    {
        $jumbo = [];
        $arrayBerita = [];
        $name = [];
        $image = [];
        $jumlah_coblos = [];

        $berita = Berita::all();

        $grafik = DB::table('coblos')
                    ->selectRaw("COUNT(coblos.id) AS jumlah_coblos, paslon.nama, paslon.gambar")
                    ->join('paslon', 'coblos.paslon', '=', 'paslon.id')
                    ->groupBy('coblos.paslon')
                    ->orderBy('jumlah_coblos', 'DESC')
                    ->limit(3)
                    ->get();

        foreach ($grafik as $row) {
            $name[] = $row->nama;
            $image[] = [
                'src' => '/upload/paslon/'.$row->gambar,
                'width' => 50,
                'height' => 60
            ];
            $jumlah_coblos[] = $row->jumlah_coblos;
        }

        if(count($berita) > 0) {
            foreach ($berita as $index => $row) {
                if($row->is_slider == 1) {
                    $jumbo[] = $row;
                } else {
                    $arrayBerita[] = $row;
                }
            }
        }
        

        $data['berita'] = $arrayBerita;
        $data['jumbo'] = $jumbo;
        $data['nama_paslon'] = $name;
        $data['gambar_paslon'] = $image;
        $data['jumlah_coblos'] = $jumlah_coblos;

        return view('home', $data);
    }

    public function beritaDetail($id)
    {
        $data['berita'] = Berita::findOrFail($id);
        return view('berita/detail', $data);
    }
}
