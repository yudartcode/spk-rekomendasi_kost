<?php

namespace App\Http\Controllers\WP;

use App\BobotNormal;
use App\Http\Controllers\Controller;
use App\Temp_Bobot;
use Illuminate\Http\Request;

class NormalisasiBobot extends Controller
{
    public function do()
    {
        $bobot = Temp_Bobot::all();
        foreach ($bobot as $k) {
            $b = new BobotNormal;
            $b->nama = $k->nama;
            $b->jarak_kampus = ($k->jarak_kampus / ($k->jarak_kampus + $k->jarak_market + $k->harga + $k->kebersihan + $k->keamanan + $k->fasilitas))*-1;
            $b->jarak_market = ($k->jarak_market / ($k->jarak_kampus + $k->jarak_market + $k->harga + $k->kebersihan + $k->keamanan + $k->fasilitas))*-1;
            $b->harga = ($k->harga / ($k->jarak_kampus + $k->jarak_market + $k->harga + $k->kebersihan + $k->keamanan + $k->fasilitas))*-1;
            $b->kebersihan = $k->kebersihan / ($k->jarak_kampus + $k->jarak_market + $k->harga + $k->kebersihan + $k->keamanan + $k->fasilitas);
            $b->keamanan = $k->keamanan / ($k->jarak_kampus + $k->jarak_market + $k->harga + $k->kebersihan + $k->keamanan + $k->fasilitas);
            $b->fasilitas = $k->fasilitas / ($k->jarak_kampus + $k->jarak_market + $k->harga + $k->kebersihan + $k->keamanan + $k->fasilitas);
            $b->save();
        }
    }
}
