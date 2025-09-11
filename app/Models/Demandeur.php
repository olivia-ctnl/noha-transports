<?php

namespace App\Models;

use App\Models\Devis;
use Illuminate\Database\Eloquent\Model;

class Demandeur extends Model
{
    // 
    protected $fillable = [
        'nom',
        'prenom',
        'nom_etablissement', 
        'adresse_etablissement',
        'telephone',
        'email'
    ];

    public function devis()
    {
        return $this->hasMany(Devis::class);
    }
}
