<?php

namespace App\Http\Controllers;

use App\Models\Pharmacie;
use Illuminate\Http\Request;

class PharmacieController extends Controller
{
    //
    public function annuaire()
    {
        $pharmacies = Pharmacie::all();
        return view('annuaire', compact('pharmacies'));
    }
}
