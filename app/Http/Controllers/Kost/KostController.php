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
        return view('test', ['matrix'=>$matrix]);
    }
}
