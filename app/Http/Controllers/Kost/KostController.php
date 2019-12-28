<?php

namespace App\Http\Controllers\Kost;

use App\Http\Controllers\Controller;
use App\Kost;
use Illuminate\Http\Request;

class KostController extends Controller
{
    public function NormalisasiMatrix()
    {
        $matrix = Kost::all();
        return view('test', ['matrix' => $matrix]);
    }

    public function SolusiIdealPositif()
    {
        $matrix = [
            [1, 2, 3, 12, 2],
            [2, 2, 3, 12, 2],
            [1, 2, 3, 12, 2]
        ];

        $tmp = [];
        for ($i=0; $i < count($matrix); $i++) { 
            $tmp[$i] = $matrix[$i][0];
        }
        
        $max = max($tmp);
        return view('positif', ['max' => $max]);
    }
}
