<?php

namespace App\Filament\Resources\Pharmacies\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class PharmacieForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nom')
                    ->required()
                    ->maxLength(255)
                    ->label('Nom de la pharmacie'),
                TextInput::make('telephone')
                    ->tel()
                    ->required()
                    ->maxLength(20)
                    ->label('Téléphone'),
                Textarea::make('adresse')
                    ->required()
                    ->rows(3)
                    ->label('Adresse'),

                Textarea::make('horaires')
                    ->rows(4)
                    ->label('Horaires d\'ouverture')
                    ->placeholder('Lundi: 9h-19h\nMardi: 9h-19h...'),
            ]);
    }
}
