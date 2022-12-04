<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ZodiakController extends Controller
{
    public function index()
    {
        return view('zodiak');
    }

    public function zodiak(Request $request)
    {
        $bulan=$request->bulan;
        $tanggal=$request->tanggal;
        if ($bulan < 0 && $bulan > 12 && $tanggal < 0 && $tanggal > 32) {
            echo 'Bulan atau tanggal tidak sesuai anjay';
        }else {
            if ($bulan==1) {
                if ($tanggal < 20 ) {
                    echo 'Capricorn';
                }
                else {
                    echo 'Aquarius';
                }
            }

            if ($bulan==2) {
                if ($tanggal < 20 ) {
                    echo 'Aquarius';
                }
                else {
                    echo 'Pisces';
                }
            }

             if ($bulan==3) {
                if ($tanggal < 20 ) {
                    echo 'Pisces';
                }
                else {
                    echo 'Aries';
                }
            }

             if ($bulan==4) {
                if ($tanggal < 20 ) {
                    echo 'Aries';
                }
                else {
                    echo 'Taurus';
                }
            }

             if ($bulan==5) {
                if ($tanggal < 20 ) {
                    echo 'Taurus';
                }
                else {
                    echo 'Gemini';
                }
            }

             if ($bulan==6) {
                if ($tanggal < 20 ) {
                    echo 'Gemini';
                }
                else {
                    echo 'Cancer';
                }
            }

             if ($bulan==7) {
                if ($tanggal < 20 ) {
                    echo 'Cancer';
                }
                else {
                    echo 'Leo';
                }
            }
            
             if ($bulan==8) {
                if ($tanggal < 20 ) {
                    echo 'Leo';
                }
                else {
                    echo 'Virgo';
                }
            }
            
             if ($bulan==9) {
                if ($tanggal < 20 ) {
                    echo 'Virgo';
                }
                else {
                    echo 'Libra';
                }
            }

            
             if ($bulan==10) {
                if ($tanggal < 20 ) {
                    echo 'Libra';
                }
                else {
                    echo 'Scorpio';
                }
            }

            
             if ($bulan==11) {
                if ($tanggal < 20 ) {
                    echo 'Scorpio';
                }
                else {
                    echo 'Sagitarius';
                }
            }

            if ($bulan==12) {
                if ($tanggal < 20) {
                    echo 'Sagitarius';
                }
                else {
                    echo 'Capricorn';
                }
            }





        }
    }
}
