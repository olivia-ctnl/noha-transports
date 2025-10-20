<?php

namespace App\Filament\Resources\Contents\Tables;

use Filament\Tables\Table;
use Filament\Actions\EditAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Support\Facades\Request;

class ContentsTable
{
    public static function configure(Table $table): Table
    {
        $contentType = Request::query('content_type');
        $showImageColumn = ($contentType === 'image');

        return $table
            ->columns([
                
                ImageColumn::make('image_preview')
                    ->state(function ($record) {
                        $value = $record->value;
                        if (str_starts_with($value, 'http')) {
                            return $value;
                        }
                        $cleanPath = ltrim($value, '/');
                        return asset($cleanPath);
                    })
                    ->label('Miniature')
                    ->square()
                    ->height(50)
                    ->visible($showImageColumn),
                TextColumn::make('category')
                    ->label('Catégorie')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'Composant' => 'success',
                        'Page' => 'info',
                        default => 'gray',
                    })
                    ->sortable(),
                
                TextColumn::make('page')
                    ->label('Page / Composant')
                    ->searchable()
                    ->sortable(),
                
                TextColumn::make('section')
                    ->label('Section')
                    ->searchable()
                    ->sortable()
                    ->toggleable(),
                TextColumn::make('label')
                    ->label('Label')
                    ->searchable()
                    ->sortable()
                    ->weight('bold'),
                
                TextColumn::make('key')
                    ->label('Clé technique')
                    ->searchable()
                    ->copyable()
                    ->toggleable(isToggledHiddenByDefault: true),
                
                TextColumn::make('type')
                    ->label('Type')
                    ->badge()
                    ->sortable(),
                
                TextColumn::make('value')
                    ->label('Valeur')
                    ->limit(50)
                    ->searchable()
                    ->toggleable(),
                
                TextColumn::make('description')
                    ->label('Description')
                    ->limit(50)
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                SelectFilter::make('category')
                    ->label('Catégorie')
                    ->options([
                        'Composant' => 'Composant',
                        'Page' => 'Page',
                    ]),
                
                SelectFilter::make('page')
                    ->label('Page/Composant')
                    ->options([
                        'Navigation' => 'Navigation',
                        'Footer' => 'Footer',
                        'Accueil' => 'Accueil',
                        'Services' => 'Services',
                        'Annuaire' => 'Annuaire',
                        'Mentions légales' => 'Mentions légales',
                        'Politique de confidentialité' => 'Politique de confidentialité',
                        'Conditions Générales d\'Utilisation' => 'CGU',
                    ]),
                
                SelectFilter::make('type')
                    ->label('Type de contenu')
                    ->options([
                        'text' => 'Texte',
                        'image' => 'Image',
                    ]),
            ])
            ->defaultSort('page', 'asc')
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