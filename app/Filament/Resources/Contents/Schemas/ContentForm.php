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
                TextInput::make('key')
                    ->label('Clé du contenu')
                    ->required()
                    ->unique(ignoreRecord: true),
                Textarea::make('value')
                    ->label('Texte')
                    ->visible(fn($get) => $get('type') === 'text'),
                    // ->default(null)
                    // ->columnSpanFull(),
                FileUpload::make('value')
                    ->label('Image')
                    ->image()
                    ->directory('contents')
                    ->visible(fn($get) => $get('type') === 'image'),
                Select::make('type')
                    ->label('Type de contenu')
                    ->options([
                        'text' => 'Text',
                        'image' => 'Image'
                    ])
                    ->required()
                    ->reactive(),
            ]);
    }
}
