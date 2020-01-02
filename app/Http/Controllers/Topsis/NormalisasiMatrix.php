<?php

namespace App\Http\Controllers\Topsis;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Kost;
use App\Temp_Bobot;
use App\Temp_Normalisasi;
use App\Temp_Normalisasi_Kriteria;

class NormalisasiMatrix extends Controller
{   
    public function do()
    {
        $kriteria = Temp_Normalisasi_Kriteria::all();
        $bobot = [];

        for ($i=0; $i < 6; $i++) { 
            $bobot[$i] = $kriteria[$i]->avg;
        }

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
            $temp->jarak_kampus = (($key->jarak_kampus / sqrt($sumJarakKampus) * $bobot[0]));
            $temp->jarak_market = (($key->jarak_market / sqrt($sumJarakMarket) * $bobot[1]));
            $temp->harga = (($key->harga / sqrt($sumHarga) * $bobot[2]));
            $temp->kebersihan = (($key->kebersihan / sqrt( $sumKebersihan) * $bobot[3]));
            $temp->keamanan = (( $key->keamanan / sqrt($sumKeamanan) * $bobot[4]));
            $temp->fasilitas = (($key->fasilitas / sqrt($sumFasilitas) * $bobot[5]));
            $temp->save();
        }
        
        return redirect()->route('topsis.si');
    }
}
