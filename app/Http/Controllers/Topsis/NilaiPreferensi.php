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

        for ($i = 0; $i < count($negatif); $i++) {
            $pref = new Temp_Nilai_Pref;
            $pref->nama = $negatif[$i]->nama;
            $pref->val = $negatif[$i]->dNegatif / ($negatif[$i]->dNegatif + $positif[$i]->dPositif);
            $pref->save();
        }

        return redirect()->route('rekomendasi');
    }
}
