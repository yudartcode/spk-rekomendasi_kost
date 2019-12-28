<?php

use App\Kost as AppKost;
use Illuminate\Database\Seeder;

class kost extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 20; $i++) { 
            $kost = new AppKost;
            $kost->nama = "nama $i";
            $kost->jarak_kampus = $i;
            $kost->jarak_market = $i;
            $kost->harga = $i;
            $kost->kebersihan = $i;
            $kost->keamanan = $i;
            $kost->fasilitas = $i;
            $kost->save();
        }
    }
}
