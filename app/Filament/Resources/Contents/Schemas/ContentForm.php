<?php

namespace App\Filament\Resources\Contents\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;

class ContentForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                // Type (Type de contenu)
                Select::make('type')
                    ->label('Type')
                    ->options([
                        'text' => 'Text',
                        'image' => 'Image'
                    ])
                    ->required()
                    ->reactive(),
                // Clé (Identifiant unique)
                TextInput::make('key')
                    ->label('Clé')
                    ->required()
                    ->unique(ignoreRecord: true),
                // Valeur (Texte ou Image)
                // Texte
                Textarea::make('value')
                    ->label('Texte')
                    ->maxLength(50)
                    ->visible(fn($get) => $get('type') === 'text'),
                // Image
                FileUpload::make('value')
                    ->label('Image')
                    ->image()
                    ->directory('contents')
                    ->visible(fn($get) => $get('type') === 'image'),
            ]);
    }
}