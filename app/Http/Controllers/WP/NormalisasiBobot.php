<?php

namespace App\Http\Controllers\WP;

use App\Http\Controllers\Controller;
use App\Temp_Bobot;
use Illuminate\Http\Request;

class NormalisasiBobot extends Controller
{
    public function do()
    {
        $bobot = Temp_Bobot::all();
        $bobotNormal = [];
        foreach ($bobot as $k) {
            $bobotNormal[0] = $k->jarak_kampus / ($k->jarak_kampus + $k->jarak_market + $k->harga + $k->kebersihan + $k->keamanan + $k->fasilitas);
            $bobotNormal[1] = $k->jarak_market / ($k->jarak_kampus + $k->jarak_market + $k->harga + $k->kebersihan + $k->keamanan + $k->fasilitas);
            $bobotNormal[2] = $k->harga / ($k->jarak_kampus + $k->jarak_market + $k->harga + $k->kebersihan + $k->keamanan + $k->fasilitas);
            $bobotNormal[3] = $k->kebersihan / ($k->jarak_kampus + $k->jarak_market + $k->harga + $k->kebersihan + $k->keamanan + $k->fasilitas);
            $bobotNormal[4] = $k->keamanan / ($k->jarak_kampus + $k->jarak_market + $k->harga + $k->kebersihan + $k->keamanan + $k->fasilitas);
            $bobotNormal[5] = $k->fasilitas / ($k->jarak_kampus + $k->jarak_market + $k->harga + $k->kebersihan + $k->keamanan + $k->fasilitas);
        }
    }
}
