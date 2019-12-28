<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('kirim', 'Topsis\NormalisasiMatrix@send')->name('kirim');
Route::get('/test', 'Topsis\NormalisasiMatrix@SolusiIdeal');
Route::get('/positif', 'Topsis\SolusiIdeal@SolusiIdeal');
