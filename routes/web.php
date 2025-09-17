<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccueilController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [App\Http\Controllers\AccueilController::class, 'index'])->name('accueil');