<?php

namespace App\Filament\Resources\Contacts\Schemas;


use Filament\Schemas\Schema;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;

class ContactForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Informations du contact')
                    ->schema([
                        TextInput::make('nom')
                            ->label('Nom')
                            ->required()
                            ->maxLength(255)
                            ->columnSpan(1),
                        TextInput::make('prenom')
                            ->label('Prénom')
                            ->required()
                            ->maxLength(255)
                            ->columnSpan(1),
                        TextInput::make('email')
                            ->label('Email')
                            ->email()
                            ->required()
                            ->maxLength(255)
                            ->columnSpan(1),
                        TextInput::make('telephone')
                            ->label('Téléphone')
                            ->tel()
                            ->required()
                            ->maxLength(20)
                            ->columnSpan(1),
                    ])
                    ->columns(2),
                
                Section::make('Message')
                    ->schema([
                        Textarea::make('message')
                            ->label('Message')
                            ->required()
                            ->maxLength(5000)
                            ->rows(6)
                            ->columnSpanFull(),
                    ]),
                
                Section::make('Statut')
                    ->schema([
                        Toggle::make('is_read')
                            ->label('Marqué comme lu')
                            ->default(false),
                    ]),
            ]);
    }
}
