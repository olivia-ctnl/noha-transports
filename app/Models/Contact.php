<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    /**
     * Les attributs assignables en masse.
     */
    protected $fillable = [
        'nom',
        'prenom',
        'email',
        'telephone',
        'message',
        'is_read',
    ];

    /**
     * Les attributs qui doivent être castés.
     */
    protected $casts = [
        'is_read' => 'boolean',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}