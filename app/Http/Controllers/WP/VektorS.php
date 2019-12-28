<?php

namespace App\Http\Controllers\WP;

use App\BobotNormal;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Temp_Nilai_Pref;
use App\Temp_VektorS;

class VektorS extends Controller
{
    public function do()
    {
        $pref = Temp_Nilai_Pref::all();
        $bobot = BobotNormal::all();

        for ($i=0; $i < count($pref); $i++) { 
            $vektor = new Temp_VektorS;
            $vektor->val = pow($pref[$i]->jarak_kampus, $bobot[0])*pow($pref->jarak_market, $bobot[1])*pow($pref->harga, $bobot[2])*pow($pref->kebersihan, $bobot[3])*pow($pref->keamanan, $bobot[4])*pow($pref->fasilitas, $bobot[5]); 
            $vektor->save();
        }
    }
}
