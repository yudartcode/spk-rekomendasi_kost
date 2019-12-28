<?php

namespace App\Http\Controllers\Topsis;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Kost;
use App\Temp_Bobot;
use App\Temp_Normalisasi;

class NormalisasiMatrix extends Controller
{   
    public function do()
    {
        $bobot = Temp_Bobot::first();
        $matrix = Kost::all();

        $sumJarakKampus = 0;
        $sumJarakMarket = 0;
        $sumHarga = 0;
        $sumKebersihan = 0;
        $sumKeamanan = 0;
        $sumFasilitas = 0;

        foreach ($matrix as $key) {
            $sumJarakKampus += pow($key->jarak_kampus, 2);
            $sumJarakMarket += pow($key->jarak_market, 2);
            $sumHarga += pow($key->harga, 2);
            $sumKebersihan += pow($key->kebersihan, 2);
            $sumKeamanan += pow($key->keamanan, 2);
            $sumFasilitas += pow($key->fasilitas, 2);
        }

        foreach ($matrix as $key) {
            $temp = new Temp_Normalisasi;
            $temp->nama = $key->nama;
            $temp->jarak_kampus = $key->jarak_kampus / sqrt($sumJarakKampus) * $bobot->jarak_kampus;
            $temp->jarak_market = $key->jarak_market / sqrt($sumJarakMarket) * $bobot->jarak_market;
            $temp->harga = $key->harga / sqrt($sumHarga) * $bobot->harga;
            $temp->kebersihan = $key->kebersihan / sqrt( $sumKebersihan) * $bobot->kebersihan;
            $temp->keamanan = $key->keamanan / sqrt($sumKeamanan) * $bobot->keamanan;
            $temp->fasilitas = $key->fasilitas / sqrt($sumFasilitas) * $bobot->fasilitas;
            $temp->save();
        }
        
        return view('test');
    }
}
