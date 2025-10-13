<?php

namespace App\Filament\Resources\Pharmacies\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Grid;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;

class PharmacieForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
        ->columns(2) // Deux colonnes globales pour nom et téléphone
        ->components([
            // Bloc Nom et Téléphone (côte à côte)
            TextInput::make('nom')
                ->required()
                ->maxLength(255)
                ->label('Nom de la pharmacie'),

            TextInput::make('telephone')
                ->tel()
                ->required()
                ->maxLength(20)
                ->label('Téléphone'),

            // Bloc Adresse (pleine largeur)
            Textarea::make('adresse')
                ->required()
                ->rows(3)
                ->label('Adresse')
                ->columnSpanFull(), // prend toute la largeur

            // Bloc Horaires (pleine largeur et sous l’adresse)
            Repeater::make('horaires')
                 ->label('Horaires d’ouverture')
    ->columnSpanFull()
    ->schema([
        Select::make('jour')
            ->label('Jour')
            ->options([
                'lundi' => 'Lundi',
                'mardi' => 'Mardi',
                'mercredi' => 'Mercredi',
                'jeudi' => 'Jeudi',
                'vendredi' => 'Vendredi',
                'samedi' => 'Samedi',
                'dimanche' => 'Dimanche',
            ])
            ->required(),

        // Toggle centré verticalement
        Toggle::make('ferme')
            ->label('Fermé ce jour ?')
            ->reactive()
            ->inline(false) // le label passe au-dessus, pour laisser la place à l'alignement vertical
            ->extraAttributes([
                'class' => 'flex items-center justify-center h-full pt-6', 
                // h-full + pt-6 ajuste la position
            ]),

        Grid::make(2)
            ->schema([
                TextInput::make('ouverture')
                    ->label('Heure d’ouverture')
                    ->type('time')
                    ->visible(fn ($get) => !$get('ferme')),

                TextInput::make('fermeture')
                    ->label('Heure de fermeture')
                    ->type('time')
                    ->visible(fn ($get) => !$get('ferme')),
            ]),
    ])
    ->columns(3)
    ->defaultItems(7)
    ->createItemButtonLabel('Ajouter un jour')
    ->collapsed(),
        ]);
    }
}
