<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccueilController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [App\Http\Controllers\AccueilController::class, 'index'])->name('accueil');

Route::get('/services', function () {
        return view('services');
    })->name('services');

Route::view('/mentions-legales', 'legal.mentions')->name('mentions.legales');

Route::view('/politique-confidentialite', 'legal.privacy')->name('politique.confidentialite');

Route::view('/conditions-utilisation', 'legal.terms')->name('conditions.utilisations');