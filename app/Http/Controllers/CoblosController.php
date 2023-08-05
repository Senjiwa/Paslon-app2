<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use DB;

use App\Models\Coblos;
use App\Models\Paslon;

class CoblosController extends Controller
{
    
    public function coblos(Request $request, $id)
    {
        $this->validate($request, [
            'g-recaptcha-response' => 'recaptcha',
        ],
        [
            'g-recaptcha-response.recaptcha' => 'Recaptcha is required',
        ]);

        $input = [
            'user' => 0,
            'paslon' => $id
        ];

        Coblos::create($input);
        return redirect('/paslon/'.$id)->with('success', 'Paslon berhasil dicoblos!');
    }

}
