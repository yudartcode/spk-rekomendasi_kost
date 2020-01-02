<?php

Route::get('/', function () {
    return view('welcome');
});
Route::get('/kost', 'KostController@index');
Route::get('/bobot', 'BobotKontroller@index');
//ahp
Route::get('/normalisasi-kriteria-ahp', 'Ahp\NormalisasiKriteria@do');
Route::get('/uji-konsistensi-ahp', 'Ahp\UjiKonsistensi@do');
//topsis
Route::get('/normalisasi-alternatif-topsis', 'Topsis\NormalisasiMatrix@do');
Route::get('/solusi-ideal-topsis', 'Topsis\SolusiIdeal@solusiIdeal');
Route::get('/nilai-preferensi-topsis', 'Topsis\NilaiPreferensi@do');

