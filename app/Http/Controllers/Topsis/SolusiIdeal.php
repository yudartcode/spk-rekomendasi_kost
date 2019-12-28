<?php

namespace App\Http\Controllers\Topsis;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Temp_D_Pos;
use App\Temp_D_Neg;
use App\Temp_Normalisasi;

class SolusiIdeal extends Controller
{
    public function SolusiIdeal()
    {
        $data = Temp_Normalisasi::all();    
        $mNama = [];
        $mJarakKampus = [];
        $mJarakMarket = [];
        $mHarga = [];
        $mKebersihan = [];
        $mKeamanan = [];
        $mFasilitas = [];

        $i = 0;
        foreach ($data as $key) {
            $mNama[$i] = $key->nama;
            $mJarakKampus[$i] = $key->jarak_kampus;            
            $mJarakMarket[$i] = $key->jarak_market;
            $mHarga[$i] = $key->harga;
            $mKebersihan[$i] = $key->kebersihan;
            $mKeamanan[$i] = $key->keamanan;
            $mFasilitas[$i] = $key->fasilitas;
            $i++;
        }

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
        for ($i=0; $i < count($mNama); $i++) { 
            $dPositif = new Temp_D_Pos;
            $dPositif->nama = $mNama[$i];
            $dPositif->jarak_kampus = sqrt(pow(($y1Positif - $mJarakKampus[$i]),2));
            $dPositif->jarak_market = sqrt(pow(($y2Positif - $mJarakMarket[$i]),2));
            $dPositif->harga = sqrt(pow(($y3Positif - $mHarga[$i]),2));
            $dPositif->kebersihan = sqrt(pow(($y4Positif - $mKebersihan[$i]),2));
            $dPositif->keamanan = sqrt(pow(($y5Positif - $mKeamanan[$i]),2));
            $dPositif->fasilitas = sqrt(pow(($y6Positif - $mFasilitas[$i]),2));
            $dPositif->save();
        }
        //perhitungan ideal negatif
        for ($i=0; $i < count($mNama); $i++) { 
                $dNegatif = new Temp_D_Neg;
                $dNegatif->nama = $mNama[$i];
                $dNegatif->jarak_kampus = sqrt(pow(($mJarakKampus[$i] - $y1Negatif),2));
                $dNegatif->jarak_market = sqrt(pow(($mJarakMarket[$i] - $y2Negatif),2));                
                $dNegatif->harga = sqrt(pow(($mHarga[$i] - $y3Negatif),2));                
                $dNegatif->kebersihan = sqrt(pow(($mKebersihan[$i] - $y4Negatif),2));                
                $dNegatif->keamanan = sqrt(pow(($mKeamanan[$i] - $y5Negatif),2));                
                $dNegatif->fasilitas = sqrt(pow(($mFasilitas[$i] - $y6Negatif),2));
                $dNegatif->save();
        }
        
        return view('positif', [
            'dPositif' => $dPositif,
            'dNegatif' => $dNegatif
        ]);
    }
}
