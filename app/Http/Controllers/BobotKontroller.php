<?php

namespace App\Http\Controllers;

use App\Temp_Bobot;
use Illuminate\Http\Request;

class BobotKontroller extends Controller
{
    public function index()
    {
        $bobot = Temp_Bobot::all();
        return view('bobot.index', ['bobot' => $bobot]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $bobot = Temp_Bobot::all();

        foreach ($bobot as $key) {
            $key->delete();
        }

        $kreiteria = ['Jarak Kampus', 'Jarak Market', 'Harga', 'Kebersihan', 'Keamanan', 'Fasilitas'];
        for ($i=0; $i < 6; $i++) { 
            $bk = new Temp_Bobot;
            $bk->kriteria = $kreiteria[$i];
            $bk->jarak_kampus = $request->get("jk$i");
            $bk->jarak_market = $request->get("jm$i");
            $bk->harga = $request->get("h$i");
            $bk->kebersihan = $request->get("kb$i");
            $bk->keamanan = $request->get("ka$i");
            $bk->fasilitas = $request->get("f$i");
            $bk->save();
        }

        return redirect()->route('ahp.nor');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
