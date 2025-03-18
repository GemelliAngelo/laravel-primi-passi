<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $dati = "Homepage";

    return view('home',["dati" => $dati]);
});

Route::get('/about', function () {

    $dati = "About";

    return view('about',["dati" => $dati]);
});

Route::get('/contacts', function () {

    $dati = "Contacts";

    return view('contacts',["dati" => $dati]);
});

Route::get('/service', function () {

    $dati = "Service";

    return view('service',["dati" => $dati]);
});