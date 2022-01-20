<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/home', function () {

    return view('home');
})->name('home');

Route::get('/about', function(){

    $text = [

        "text" => "Laravel è un framework open source di tipo MVC scritto in PHP per lo sviluppo di applicazioni web, creato nel 2011 da Taylor Otwell come derivazione di Symfony.
        Alcune delle caratteristiche sono: un sistema di gestione dei pacchetti modulare con un gestore delle dipendenze dedicato, differenti modalità di accesso ai database relazionali, strumenti che aiutano la distribuzione e la manutenzione dell'applicazione, e la sua disposizione al Syntactic sugar."
    ];

    return view('about', $text);
})->name('about');

Route::get('/contacts', function(){

    $emails = [
        'emails' => ['salesdept@ugo.com','office@gmail.com']
        ];

    return view('contacts', $emails);
})->name('contacts');


