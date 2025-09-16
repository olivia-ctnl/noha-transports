<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\AccueilController;

class AccueilController extends Controller
{
    // Affiche la page d'accueil
    public function index()
    {
        return view('accueil');
    }
}