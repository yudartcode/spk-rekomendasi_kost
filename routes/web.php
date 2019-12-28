<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', 'Kost\KostController@NormalisasiMatrix');
