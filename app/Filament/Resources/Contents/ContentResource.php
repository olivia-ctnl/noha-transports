<?php

namespace App\Filament\Resources\Contents;

use BackedEnum;
use App\Models\Content;
use Filament\Tables\Table;
use Filament\Schemas\Schema;
use Filament\Resources\Resource;
use Filament\Support\Icons\Heroicon;
use Filament\Navigation\NavigationItem;
use Illuminate\Support\Facades\Request;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\Contents\Pages\EditContent;
use App\Filament\Resources\Contents\Pages\ListContents;
use App\Filament\Resources\Contents\Pages\CreateContent;
use App\Filament\Resources\Contents\Schemas\ContentForm;
use App\Filament\Resources\Contents\Tables\ContentsTable;

class ContentResource extends Resource
{
    protected static ?string $model = Content::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;
    
    protected static ?string $recordTitleAttribute = 'Content';

    public static function form(Schema $schema): Schema
    {
        return ContentForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ContentsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListContents::route('/'),
            'create' => CreateContent::route('/create'),
            'edit' => EditContent::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
{
    $query = parent::getEloquentQuery();

    $contentType = Request::get('content_type');
    $allowedTypes = ['text', 'image'];

    if (in_array($contentType, $allowedTypes, true)) {
        $query->where('type', $contentType);
    }

    // Tri par défaut : catégorie, puis page, puis section
    $query->orderBy('category')->orderBy('page')->orderBy('section');

    return $query;
}

    // Séparation de la navigation en deux liens distincts
    public static function getNavigationItems(): array
    {
        // Récupérez le groupe de navigation défini dans la ressource
        $group = static::getNavigationGroup();
        return [
            // 1. Lien par défaut (Textes)
            NavigationItem::make('Textes')
                ->icon('heroicon-o-document-text')
                ->group($group)
                ->sort(static::getNavigationSort())
                ->url(static::getUrl('index', ['content_type' => 'text'])),
            // 2. Nouveau lien (Images)
            NavigationItem::make('Images')
                ->icon('heroicon-o-photo')
                ->group($group)
                ->sort(static::getNavigationSort() + 1) // Pour que ce soit après le premier lien
                ->url(static::getUrl('index', ['content_type' => 'image'])),
        ];
    }

    // Définir le nom du groupe de navigation
    public static function getNavigationGroup(): ?string
    {
        return 'Contenu du site';
    }
}