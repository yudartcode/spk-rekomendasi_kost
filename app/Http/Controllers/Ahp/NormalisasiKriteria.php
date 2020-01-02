<?php

namespace App\Http\Controllers\Ahp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Temp_Bobot;
use App\Temp_Normalisasi_Kriteria;

class NormalisasiKriteria extends Controller
{
    public function do()
    {
        $matrix = Temp_Bobot::all();

        $sumJarakKampus = 0;
        $sumJarakMarket = 0;
        $sumHarga = 0;
        $sumKebersihan = 0;
        $sumKeamanan = 0;
        $sumFasilitas = 0;

        foreach ($matrix as $key) {
            $sumJarakKampus += $key->jarak_kampus;
            $sumJarakMarket += $key->jarak_market;
            $sumHarga += $key->harga;
            $sumKebersihan += $key->kebersihan;
            $sumKeamanan += $key->keamanan;
            $sumFasilitas += $key->fasilitas;
        }

        $kriteria = ['jarak_kampus', 'jarak_market', 'harga', 'kebersihan', 'keamanan', 'fasilitas'];
        for ($i = 0; $i < 6; $i++) {
            $temp = new Temp_Normalisasi_Kriteria;
            $temp->kriteria = $kriteria[$i];
            $temp->jarak_kampus = (($matrix[$i]->jarak_kampus / $sumJarakKampus));
            $temp->jarak_market = (($matrix[$i]->jarak_market / $sumJarakMarket));
            $temp->harga = (($matrix[$i]->harga / $sumHarga));
            $temp->kebersihan = (($matrix[$i]->kebersihan / $sumKebersihan));
            $temp->keamanan = (($matrix[$i]->keamanan / $sumKeamanan));
            $temp->fasilitas = (($matrix[$i]->fasilitas / $sumFasilitas));
            $temp->save();
        }

        $mKriteria = Temp_Normalisasi_Kriteria::all();
        foreach ($mKriteria as $key) {
            $sum = $key->jarak_kampus + $key->jarak_market + $key->harga + $key->kebersihan + $key->keamanan + $key->fasilitas;
            $avg = $sum / 6;
            $key->avg = ($avg);
            $key->save();
        }

        return view('test');
    }
}
