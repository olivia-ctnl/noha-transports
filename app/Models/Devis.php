<?php

namespace App\Models;

use App\Models\Colis;
use App\Models\Demandeur;
use App\Models\Destinataire;
use Illuminate\Database\Eloquent\Model;

class Devis extends Model
{
    //
    protected $fillable = [
        'demandeur_id',
        'destinataire_id',
        'date_demande'
    ];

    public function demandeur()
    {
        return $this->belongsTo(Demandeur::class);
    }

    public function destinataire()
    {
        return $this->belongsTo(Destinataire::class);
    }

    public function colis()
    {
        return $this->hasMany(Colis::class);
    }
}
