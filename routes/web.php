<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PharmacieController;

// Route::get('/', function () {
//     return view('welcome');
// });

// Page d'acceuil
Route::get('/', function () {
    return view('accueil');
})->name('accueil');

// Pages de services pour les profesionnels de santé
Route::get('/services', function () {
        return view('pages.services');
})->name('services');

// Pages légales
// Mentions légales
Route::view('/mentions-legales', 'legal.mentions')->name('mentions.legales');
// Politique de confidentialité
Route::view('/politique-confidentialite', 'legal.privacy')->name('politique.confidentialite');
// Conditions Générales d'Utilisation
Route::view('/conditions-utilisation', 'legal.terms')->name('conditions.utilisations');

// Annuaire des pharmacies
Route::get('/annuaire', [PharmacieController::class, 'annuaire'])->name('annuaire');