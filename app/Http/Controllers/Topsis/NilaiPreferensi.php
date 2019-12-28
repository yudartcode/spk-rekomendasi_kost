<?php

namespace App\Http\Controllers\Topsis;

use App\Http\Controllers\Controller;
use App\Temp_D_Neg;
use App\Temp_D_Pos;
use App\Temp_Nilai_Pref;
use Illuminate\Http\Request;

class NilaiPreferensi extends Controller
{
    public function do()
    {
        $negatif = Temp_D_Neg::all();
        $positif = Temp_D_Pos::all();

        for ($i=0; $i < count($negatif); $i++) { 
            $pref = new Temp_Nilai_Pref;
            $pref->nama = $negatif->nama;
            $pref->jarak_kampus = $negatif->jarak_kampus / ($negatif->jarak_kampus + $positif->jarak_kampus);
            $pref->jarak_market = $negatif->jarak_market / ($negatif->jarak_market + $positif->jarak_market);
            $pref->harga = $negatif->harga / ($negatif->harga + $positif->harga);
            $pref->kebersihan = $negatif->kebersihan / ($negatif->kebersihan + $positif->kebersihan);
            $pref->keamanan = $negatif->keamanan / ($negatif->keamanan + $positif->keamanan);
            $pref->fasilitas = $negatif->fasilitas / ($negatif->fasilitas + $positif->fasilitas);
            $pref->save();
        }

        return view('test');
    }
}
