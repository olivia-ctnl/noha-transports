<?php

namespace App\Models;

use App\Models\Devis;
use Illuminate\Database\Eloquent\Model;

class Destinataire extends Model
{
    //
    protected $fillable = [
        'nom',
        'prenom',
        'adresse_livraison',
        'telephone',
        'email'
    ];

    public function devis()
    {
        return $this->hasMany(Devis::class);
    }
}
