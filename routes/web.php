<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('kirim', 'Topsis\NormalisasiMatrix@send')->name('kirim');

Route::get('/normal-ahp', 'Ahp\NormalisasiKriteria@do');
Route::get('/UK', 'Ahp\UjiKonsistensi@do');

Route::get('/normal', 'Topsis\NormalisasiMatrix@do');
Route::get('/ideal', 'Topsis\SolusiIdeal@solusiIdeal');
Route::get('/pref', 'Topsis\NilaiPreferensi@do');
