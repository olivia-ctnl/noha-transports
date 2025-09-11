<?php

namespace App\Models;

use App\Models\Devis;
use Illuminate\Database\Eloquent\Model;

class Colis extends Model
{
    use HasFactory;
    
    //
    protected $fillable = [
        'devis_id',
        'nom_produit',
        'quantite',
        'poids', 'volume',
        'nature_produit',
        'date_livraison',
        'heure_livraison',
        'remarques'
    ];

    protected $casts = [
        'nature_produit' => 'array',
        'date_livraison' => 'date',
        'heure_livraison' => 'datetime:H:i',
    ];

    public function devis()
    {
        return $this->belongsTo(Devis::class);
    }
}
