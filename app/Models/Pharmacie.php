<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pharmacie extends Model
{
    //
    /**
     * Champs autorisés pour l’insertion / mise à jour.
     */
    protected $fillable = [
        'nom',
        'adresse',
        'telephone',
        'horaires',
    ];

    protected $casts = [
        'horaires' => 'array',
    ];
}
