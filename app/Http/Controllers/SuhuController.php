<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuhuController extends Controller
{
    public function index(){
        $hasil=0;
        return view('suhu',['suhu'=>$hasil]);
    }

    public function suhu(Request $request){
        $before=$request->before;
        $after=$request->after;
        $suhu=$request->suhu;
        $hasil=0;

        if($before == 'c'){
            if($after == 'c'){
                $hasil=$suhu;
                return $hasil;
            }
            elseif($after == 'r'){
                $hasil=4/5 * $suhu;
                return $hasil;
            }
            elseif($after == 'k') {
                $hasil=$suhu + 273;
                return $hasil;
            }
            elseif($after == 'f'){
                $hasil=9/5 * $suhu + 32;
                return $hasil;
            }
        }

        if($before == 'r'){
            if($after == 'r'){
                $hasil=$suhu;
                return $hasil;
            }
            elseif($after == 'c'){
                $hasil = 5/4 * $suhu;
                return $hasil;
            }
            elseif($after == 'k') {
                $hasil= 5/4 * $suhu + 273;
                return $hasil;
            }
            elseif($after == 'f'){
                $hasil = 9/4 * $suhu + 32;
                return $hasil;
            }
        }

        if($before == 'f'){
            if($after == 'f'){
                $hasil=$suhu;
                return $hasil;
            }
            elseif($after == 'c'){
                $hasil = 5/9 * ($suhu-32);
                return $hasil;
            }
            elseif($after == 'k') {
                $hasil = 5/9 * ($suhu-32) + 273;
                return $hasil;
            }
            elseif($after == 'r'){
                $hasil = 4/9 * ($suhu-32);
                return $hasil;
            }
        }

        if($before == 'k'){
            if($after == 'k'){
                $hasil= $suhu;
                return $hasil;
            }
            elseif($after == 'c'){
                $hasil= $suhu-273;
                return $hasil;
            }
            elseif($after == 'r') {
                $hasil = 4/5 * ($suhu - 273);
                return $hasil;
            }
            elseif($after == 'f'){
                $hasil= 9/5 * ($suhu-273) + 32;
                return $hasil;
            }
        }
        return view('suhu',['suhu'=>$hasil]);
    }
}
