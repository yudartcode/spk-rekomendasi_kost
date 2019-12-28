<?php

namespace App\Http\Controllers\WP;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VektorV extends Controller
{
    public function do()
    {
        $s = Temp_VektorS::all();
        $total = 0;
        for ($i=0; $i < count($s); $i++) { 
            $total += $s[$i]->val;
        }
        for ($i=0; $i < count($s); $i++) { 
            $vektor = new Temp_VektorV;
            $vektor->nama = $s[$i]->nama;
            $vektor->val = $s[$i] / $total;
            $vektor->save();
        }
    }
}
