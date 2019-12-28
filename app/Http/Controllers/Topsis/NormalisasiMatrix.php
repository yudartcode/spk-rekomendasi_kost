<?php

namespace App\Http\Controllers\Topsis;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Kost;

class NormalisasiMatrix extends Controller
{
    public function NormalisasiMatrix()
    {
        $matrix = Kost::all();

        $loop = 0;
        $sumJarakKampus = 0;
        $sumJarakMarket = 0;
        $sumHarga = 0;
        $sumKebersihan = 0;
        $sumKeamanan = 0;
        $sumFasilitas = 0;

        foreach ($matrix as $key) {
            $loop += 1;
            $sumJarakKampus += $key->jarak_kampus;
            $sumJarakMarket += $key->jarak_marker;
            $sumHarga += $key->harga;
            $sumKebersihan += $key->kebersihan;
            $sumKeamanan += $key->keamanan;
            $sumFasilitas += $key->fasilitas;
        }

        $avgJarakKampus = $sumJarakKampus / $loop;
        $avgJarakMarket = $sumJarakMarket / $loop;
        $avgHarga = $sumHarga / $loop;
        $avgKebersihan = $sumKebersihan / $loop;
        $avgKeamanan = $sumKeamanan / $loop;
        $avgFasilitas = $sumFasilitas / $loop;

        $mJarakKampus = [];
        $mJarakMarket = [];
        $mHarga = [];
        $mKebersihan = [];
        $mKeamanan = [];
        $mFasilitas = [];

        $loop = 0;
        foreach ($matrix as $key) {
            $mJarakKampus[$loop] = $key->jarak_kampus / $avgJarakKampus;
            $mJarakMarket[$loop] = $key->jarak_market / $avgJarakKampus;
            $mHarga[$loop] = $key->harga / $avgJarakKampus;
            $mKebersihan[$loop] = $key->kebersihan / $avgJarakKampus;
            $mKeamanan[$loop] = $key->keamanan / $avgJarakKampus;
            $mFasilitas[$loop] = $key->fasilitas / $avgJarakKampus;
            $loop += 1;
        }

        return view('test', [
            'matrix' => $matrix,
            'sum' => $sumJarakKampus,
            'avg' => $avgJarakKampus,
            'mJ' => $mJarakKampus,
            'mJM' => $mJarakMarket,
            'mH' => $mHarga,
            'mK' => $mKebersihan,
            'mKE' => $mKeamanan,
            'mF' => $mFasilitas
        ]);
    }
}
