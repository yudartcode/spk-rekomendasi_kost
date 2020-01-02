<?php

namespace App\Http\Controllers;

use App\Kost;
use Illuminate\Http\Request;

class KostController extends Controller
{
    public function index()
    {
        $n = 1;
        $kost = Kost::paginate(15);
        return view('kost.index', ['kost' => $kost, 'n' => $n]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
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
