<?php

namespace App\Filament\Resources\Contents\Tables;

use Filament\Tables\Table;
use Filament\Actions\EditAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Support\Facades\Request;
use Filament\Tables\Columns\ImageColumn;

class ContentsTable
{
    public static function configure(Table $table): Table
    {
        // 1. Récupérer le type de contenu de l'URL (ajouté par ContentResource)
        $contentType = Request::query('content_type');

        // 2. Déterminer si la colonne Image doit être visible
        $showImageColumn = ($contentType === 'image');

        return $table

            ->columns([
                ImageColumn::make('image_preview') // Nom de colonne unique/virtuel
                ->state(function ($record) {
                    $value = $record->value;
                        
                        // Si le chemin est déjà une URL complète (CDN), on le retourne tel quel.
                        if (str_starts_with($value, 'http')) {
                            return $value;
                        }
                        
                        // Si ce n'est pas une URL (chemin local):
                        // 1. Supprimer le slash initial au cas où il serait stocké (ex: /images/logo.png devient images/logo.png)
                        $cleanPath = ltrim($value, '/');

                        // 2. Utiliser asset() pour garantir l'URL absolue correcte pointant vers le dossier public.
                        return asset($cleanPath);
                })
                    ->label('Miniature')
                    ->square()
                    ->height(50)
                    // Conditionner l'affichage de la colonne entière
                    ->visible($showImageColumn),
                TextColumn::make('key')
                    ->label('Clé')
                    ->searchable()
                    ->copyable(),
                TextColumn::make('type')
                    ->label('Type')
                    ->badge()
                    ->sortable(),
                TextColumn::make('value')
                    ->label('Valeur')
                    ->limit(50)
                    ->searchable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
               //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
