<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $dati = "Homepage";

    return view('home',["dati" => $dati]);
})->name('home');

Route::get('/about', function () {

    $dati = "About";

    return view('about',["dati" => $dati]);
})->name('about');

Route::get('/contacts', function () {

    $dati = "Contacts";

    return view('contacts',["dati" => $dati]);
})->name('contacts');

Route::get('/service', function () {

    $dati = "Service";

    return view('service',["dati" => $dati]);
})->name('service');