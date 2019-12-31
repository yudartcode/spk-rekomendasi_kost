<?php

namespace App\Http\Controllers\Ahp;

use App\Http\Controllers\Controller;
use App\Temp_Bobot;
use App\Temp_Normalisasi_Kriteria;
use Illuminate\Http\Request;
use NumPHP\Core\NumArray;

class UjiKonsistensi extends Controller
{
    public function do()
    {
        $tempA = Temp_Bobot::all();
        $tempW = Temp_Normalisasi_Kriteria::all();
        $matrixA = [[]];

        $i = 0;
        foreach ($tempA as $key) {
            $matrixA[$i][0] = $key->jarak_kampus;
            $matrixA[$i][1] = $key->jarak_market;
            $matrixA[$i][2] = $key->harga;
            $matrixA[$i][3] = $key->kebersihan;
            $matrixA[$i][4] = $key->keamanan;
            $matrixA[$i][5] = $key->fasilitas;
            $i++;
        }

        $matrixW = [[]];
        $i = 0;
        foreach ($tempW as $key) {
            $matrixW[$i][0] = $key->avg;
            $i++;
        }

        $matA = new NumArray($matrixA);
        $matW = new NumArray($matrixW);
        $matA->dot($matW);

        $final = $matA->getData();

        for ($i = 0; $i < 6; $i++) {
            $tempW[$i]->matrix_aw = $final[$i][0];
            $tempW[$i]->save();
        }

        $t = 0;
        foreach ($tempW as $key) {
            $t += ($key->matrix_aw / $key->avg);
        }
        $t /= 6;
        $t = round($t,5);

        $ci = round(($t - 6)/(6-1),5);
        $A = round($ci / 1.24, 5);

        $kons = "";
        if ($A <= 0.1) {
            $kons = "Konsisten";
        }

        return view('test', ['val' => $final,'t' => $t, 'ci' => $ci, 'A' => $A, 'kons' => $kons]);
    }
}
