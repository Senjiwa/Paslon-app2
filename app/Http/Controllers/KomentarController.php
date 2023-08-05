<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Komentar;

use DB;
use Auth;

class KomentarController extends Controller
{
    public function getKomentar($id)
    {
        $output='';
        $komentar = DB::table('komentar')
                    ->selectRaw("komentar.*, name as nama_user")
                    ->join('users', 'komentar.id_user', '=', 'users.id')
                    ->where(['id_berita' => $id, 'parent_comment_id' => 0])
                    ->get();

        foreach ($komentar as $row) {
            $output .= '
                <div class="d-flex flex-start mb-3">
                    <img class="rounded-circle shadow-1-strong me-3"
                        src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(23).webp" alt="avatar" width="60"
                        height="60" />
                    <div class="flex-grow-1">
                        <h6 class="fw-bold mb-1">'.$row->nama_user.'</h6>
                        <div class="d-flex align-items-center mb-3">
                            <p class="mb-0">
                                '.date('F d, Y', strtotime($row->created_at)).'
                            </p>';

                if(Auth::guard('user')->check()) {
                    $output .= '<a href="javascript:void(0)" onClick="showFormReply('.$row->id.')" class="link-muted"><i class="fas fa-reply ms-2"></i></a>';
                }
                            
                $output .= '
                        </div>
                        <p class="mb-0">
                            '.$row->comment.'
                        </p>
                        <div class="d-none" id="form-komentar-'.$row->id.'">
                            <textarea class="form-control " id="komentar-'.$row->id.'" placeholder="Balasan..."></textarea>
                            <div class="d-flex justify-content-end"><button type="button" class="btn btn-primary mt-3 btn-sm right btn-reply" data-id="'.$row->id.'">Kirim Balasan</button></div>
                        </div>
                    </div>
                </div>
            ';

            $output .= $this->getReply($row->id);
        }

        return response()->json([
            'komentar'    => $output,
        ]);
    }

    public function addKomentar(Request $request)
    {
        $input = [
            'id_berita' => $request->id_berita,
            'parent_comment_id' => 0,
            'id_user' => Auth::guard('user')->user()->id,
            'comment' => $request->komentar
        ];

        Komentar::create($input);

        return response()->json([
            'success'    => true
        ]);
    }

    public function addReply(Request $request)
    {
        $input = [
            'id_berita' => $request->id_berita,
            'parent_comment_id' => $request->parent_id,
            'id_user' => Auth::guard('user')->user()->id,
            'comment' => $request->komentar
        ];

        Komentar::create($input);

        return response()->json([
            'success'    => true
        ]);
    }

    function getReply($parent_id = 0, $marginleft = 0) {
        $output='';
        $komentar = DB::table('komentar')
                    ->selectRaw("komentar.*, name as nama_user")
                    ->join('users', 'komentar.id_user', '=', 'users.id')
                    ->where(['parent_comment_id' => $parent_id])
                    ->get();

        if($parent_id == 0) {
            $marginleft = 0;
        } else {
            $marginleft = $marginleft + 48;
        }

        $tingkat = $marginleft/48+1;

        if(count($komentar) > 0){
            foreach ($komentar as $row) {
                

                $output .= '
                    <div class="d-flex flex-start mb-3" style="margin-left:'.$marginleft.'px">
                        <img class="rounded-circle shadow-1-strong me-3"
                            src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(23).webp" alt="avatar" width="60"
                            height="60" />
                        <div class="flex-grow-1">
                            <h6 class="fw-bold mb-1">'.$row->nama_user.'</h6>
                            <div class="d-flex align-items-center mb-3">
                                <p class="mb-0">
                                    '.date('F d, Y', strtotime($row->created_at)).'
                                </p>
                ';
            
                if($tingkat < 4 && Auth::guard('user')->check()){
                    $output .= '
                        <a href="javascript:void(0)" onClick="showFormReply('.$row->id.')" class="link-muted"><i class="fas fa-reply ms-2"></i></a>';
                }
            
                    $output .= '    
                        </div>
                            <p class="mb-0">
                                '.$row->comment.'
                            </p>
                            <div class="d-none" id="form-komentar-'.$row->id.'">
                                <textarea class="form-control " id="komentar-'.$row->id.'" placeholder="Balasan..."></textarea>
                                <div class="d-flex justify-content-end"><button type="button" class="btn btn-primary mt-3 btn-sm right btn-reply" data-id="'.$row->id.'">Kirim Balasan</button></div>
                            </div>
                        </div>
                    </div>
                    ';
                
                $output .= $this->getReply($row->id, $marginleft);
            }
        }

        return $output;
    }
}
