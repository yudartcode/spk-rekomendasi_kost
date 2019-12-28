<?php

namespace App\Http\Controllers\Topsis;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SolusiIdeal extends Controller
{
    public function SolusiIdeal()
    {
        $mJarakKampus = [2, 4, 3, 5, 1];
        $mJarakMarket = [3, 2, 3, 4, 2];
        $mHarga = [1, 3, 2, 3, 1];
        $mKebersihan = [2, 3, 1, 2, 3];
        $mKeamanan = [2, 3, 1, 2, 3];
        $mFasilitas = [1, 4, 3, 2, 1];

        // alternatif ideal positif
        $y1Positif = min($mJarakKampus);
        $y2Positif = min($mJarakMarket);
        $y3Positif = min($mHarga);
        $y4Positif = max($mKebersihan);
        $y5Positif = max($mKeamanan);
        $y6Positif = max($mFasilitas);
        
        // alternatif ideal negatif
        $y1Negatif = max($mJarakKampus);
        $y2Negatif = max($mJarakMarket);
        $y3Negatif = max($mHarga);
        $y4Negatif = min($mKebersihan);
        $y5Negatif = min($mKeamanan);
        $y6Negatif = min($mFasilitas);

        //perhitungan ideal positif
        $d1Positif = [];
        $d2Positif = [];
        $d3Positif = [];
        $d4Positif = [];
        $d5Positif = [];
        $d6Positif = [];
        for ($i=0; $i < count($mJarakKampus); $i++) { 
            $d1Positif[$i] = sqrt(pow(($y1Positif - $mJarakKampus[$i]),2));
            $d2Positif[$i] = sqrt(pow(($y2Positif - $mJarakMarket[$i]),2));
            $d3Positif[$i] = sqrt(pow(($y3Positif - $mHarga[$i]),2));
            $d4Positif[$i] = sqrt(pow(($y4Positif - $mKebersihan[$i]),2));
            $d5Positif[$i] = sqrt(pow(($y5Positif - $mKeamanan[$i]),2));
            $d6Positif[$i] = sqrt(pow(($y6Positif - $mFasilitas[$i]),2));
        }
        //perhitungan ideal negatif
        $dNegatif = [];
        for ($i=0; $i < count($mJarakKampus); $i++) { 
            $dNegatif[$i] = sqrt(
                pow(($mJarakKampus[$i] - $y1Negatif),2) +
                pow(($mJarakMarket[$i] - $y2Negatif),2) +                
                pow(($mHarga[$i] - $y3Negatif),2) +                
                pow(($mKebersihan[$i] - $y4Negatif),2) +                
                pow(($mKeamanan[$i] - $y5Negatif),2) +                
                pow(($mFasilitas[$i] - $y6Negatif),2)
            );
        }
        
        return view('positif', [
            // 'pJarakKampus' => $y1Positif,
            // 'pJarakMarket' => $y2Positif,
            // 'pHarga' => $y3Positif,
            // 'pKebersihan' => $y4Positif,
            // 'pKeamanan' => $y5Positif,
            // 'pFasilitas' => $y6Positif,
            // 'nJarakKampus' => $y1Negatif,
            // 'nJarakMarket' => $y2Negatif,
            // 'nHarga' => $y3Negatif,
            // 'nKebersihan' => $y4Negatif,
            // 'nKeamanan' => $y5Negatif,
            // 'nFasilitas' => $y6Negatif,
            'dPositif' => $dPositif,
            'dNegatif' => $dNegatif
        ]);
    }
}
