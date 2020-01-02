<?php

namespace App\Http\Controllers;

use App\Temp_Bobot;
use App\Temp_D_Neg;
use App\Temp_D_Pos;
use App\Temp_Nilai_Pref;
use App\Temp_Normalisasi;
use App\Temp_Normalisasi_Kriteria;
use Illuminate\Http\Request;

class ClearTemp extends Controller
{
    public function do()
    {
        $temp = Temp_Bobot::all();
        foreach ($temp as $key) {
            $key->jarak_kampus = 0;
            $key->jarak_market = 0;
            $key->harga = 0;
            $key->kebersihan = 0;
            $key->keamanan = 0;
            $key->fasilitas = 0;
            $key->save();
        }

        $temp = Temp_Normalisasi_Kriteria::all();
        foreach ($temp as $key) {
            $key->delete();
        }

        $temp = Temp_Normalisasi::all();
        foreach ($temp as $key) {
            $key->delete();
        }

        $temp = Temp_D_Pos::all();
        foreach ($temp as $key) {
            $key->delete();
        }

        $temp = Temp_D_Neg::all();
        foreach ($temp as $key) {
            $key->delete();
        }

        $temp = Temp_Nilai_Pref::all();
        foreach ($temp as $key) {
            $key->delete();
        }

        return redirect()->route('bobot');
    }
}
