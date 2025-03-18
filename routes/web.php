<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $dati = "Homepage";

    return view('home',["dati" => $dati]);
});