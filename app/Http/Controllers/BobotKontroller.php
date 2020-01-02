<?php

namespace App\Http\Controllers;

use App\Temp_Bobot;
use Illuminate\Http\Request;

class BobotKontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bobot = Temp_Bobot::all();
        return view('bobot.index', ['bobot' => $bobot]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

        return redirect()->route('bobot');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
