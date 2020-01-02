<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Temp_Nilai_Pref;

class Rekomendasi extends Controller
{
    public function doMagic()
    {
        $result = Temp_Nilai_Pref::orderBy('val', 'DESC')->take(5)->get();

        return view('rekomendasi.index', ['result' => $result]);
    }

    public function reCalc()
    {
        return redirect()->route('clear.temp');
    }
}
