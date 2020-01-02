<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/kost', 'KostController@index')->name('kost');
Route::get('/bobot', 'BobotKontroller@index')->name('bobot');
Route::post('bobot/store', 'BobotKontroller@store')->name('bobot.store');

//ahp
Route::get('/normalisasi-kriteria-ahp', 'Ahp\NormalisasiKriteria@do')->name('ahp.nor');
Route::get('/uji-konsistensi-ahp', 'Ahp\UjiKonsistensi@do')->name('ahp.uk');

//topsis
Route::get('/normalisasi-alternatif-topsis', 'Topsis\NormalisasiMatrix@do')->name('topsis.nor');
Route::get('/solusi-ideal-topsis', 'Topsis\SolusiIdeal@solusiIdeal')->name('topsis.si');
Route::get('/nilai-preferensi-topsis', 'Topsis\NilaiPreferensi@do')->name('topsis.np');

