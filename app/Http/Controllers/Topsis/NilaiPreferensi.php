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
            $pref->nama = $negatif[$i]->nama;
            $pref->jarak_kampus = $negatif[$i]->jarak_kampus / ($negatif[$i]->jarak_kampus + $positif[$i]->jarak_kampus);
            $pref->jarak_market = $negatif[$i]->jarak_market / ($negatif[$i]->jarak_market + $positif[$i]->jarak_market);
            $pref->harga = $negatif[$i]->harga / ($negatif[$i]->harga + $positif[$i]->harga);
            $pref->kebersihan = $negatif[$i]->kebersihan / ($negatif[$i]->kebersihan + $positif[$i]->kebersihan);
            $pref->keamanan = $negatif[$i]->keamanan / ($negatif[$i]->keamanan + $positif[$i]->keamanan);
            $pref->fasilitas = $negatif[$i]->fasilitas / ($negatif[$i]->fasilitas + $positif[$i]->fasilitas);
            $pref->save();
        }

        $pref = Temp_Nilai_Pref::all();
        foreach ($pref as $key) {
            $key->jarak_kampus = round($key->jarak_kampus, 5);
            $key->jarak_market = round($key->jarak_market, 5);
            $key->harga = round($key->harga, 5);
            $key->kebersihan = round($key->kebersihan, 5);
            $key->keamanan = round($key->keamanan, 5);
            $key->fasilitas = round($key->fasilitas, 5);
            $key->save();
        }

        return view('test');
    }
}
