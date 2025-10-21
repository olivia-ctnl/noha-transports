<?php

namespace App\Filament\Resources\Contents\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\FileUpload;

class ContentForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                // Catégorisation du contenu
                Section::make('Catégorisation')
                ->columnSpanFull()
                    ->description('Organisation du contenu dans le site')
                    ->schema([
                        Select::make('category')
                            ->label('Catégorie')
                            ->options([
                                'Composant' => 'Composant',
                                'Page' => 'Page',
                            ])
                            ->required()
                            ->reactive()
                            // Désactivation de la modification de la catégorie en édition
                            ->disabled(fn (string $operation): bool => $operation === 'edit'),
                        
                        Select::make('page')
                            ->label('Page/Composant')
                            ->options(function (callable $get) {
                                $category = $get('category');
                                if ($category === 'Composant') {
                                    return [
                                        'Navigation' => 'Navigation',
                                        'Footer' => 'Footer',
                                    ];
                                } elseif ($category === 'Page') {
                                    return [
                                        'Accueil' => 'Accueil',
                                        'Services' => 'Services',
                                        'Annuaire' => 'Annuaire',
                                        'Mentions légales' => 'Mentions légales',
                                        'Politique de confidentialité' => 'Politique de confidentialité',
                                        'Conditions Générales d\'Utilisation' => 'Conditions Générales d\'Utilisation',
                                    ];
                                }
                                return [];
                            })
                            ->required()
                            ->reactive()
                            // Désactivation de la modification de la page / du composant en édition
                            ->disabled(fn (string $operation): bool => $operation === 'edit'),
                        
                        Select::make('section')
                            ->label('Section')
                            ->options(function (callable $get) {
                                $page = $get('page');
                                
                                // Sections pour les composants
                                if ($page === 'Navigation') {
                                    return [
                                        'Header' => 'Header',
                                        'Menu' => 'Menu',
                                    ];
                                } elseif ($page === 'Footer') {
                                    return [
                                        'Informations entreprise' => 'Informations entreprise',
                                        'Réseaux sociaux' => 'Réseaux sociaux',
                                        'Contact' => 'Contact',
                                        'Pages légales' => 'Pages légales',
                                        'Copyright' => 'Copyright',
                                    ];
                                }
                                
                                // Sections pour les pages
                                elseif ($page === 'Accueil') {
                                    return [
                                        'Hero' => 'Hero',
                                        'Qui sommes-nous' => 'Qui sommes-nous',
                                        'Nos services' => 'Nos services',
                                        'Services dédiés' => 'Services dédiés',
                                        'Localisation' => 'Localisation',
                                    ];
                                } elseif ($page === 'Services') {
                                    return [
                                        'Hero' => 'Hero',
                                        'Nos engagements' => 'Nos engagements',
                                        'Comment ça marche' => 'Comment ça marche',
                                        'Notre engagement social' => 'Notre engagement social',
                                    ];
                                } elseif ($page === 'Annuaire') {
                                    return [
                                        'Hero' => 'Hero',
                                    ];
                                } elseif ($page === 'Mentions légales') {
                                    return [
                                        'Hero' => 'Hero',
                                        'Éditeur' => 'Éditeur',
                                        'Activité' => 'Activité',
                                        'RGPD' => 'RGPD',
                                        'Propriété intellectuelle' => 'Propriété intellectuelle',
                                        'Hébergeur' => 'Hébergeur',
                                        'Responsabilité' => 'Responsabilité',
                                    ];
                                }
                                elseif ($page === 'Politique de confidentialité') {
                                    return [
                                        'Hero' => 'Hero',
                                        'Collecte des données' => 'Collecte des données',
                                        'Utilisation des données' => 'Utilisation des données',
                                        'Partage des données' => 'Partage des données',
                                        'Sécurité des données' => 'Sécurité des données',
                                        'Droits des utilisateurs' => 'Droits des utilisateurs',
                                    ];
                                } elseif ($page === 'Conditions Générales d\'Utilisation') {
                                    return [
                                        'Hero' => 'Hero',
                                        'Acceptation des conditions' => 'Acceptation des conditions',
                                        'Utilisation du site' => 'Utilisation du site',
                                        'Propriété intellectuelle' => 'Propriété intellectuelle',
                                        'Responsabilité' => 'Responsabilité',
                                        'Modifications des conditions' => 'Modifications des conditions',
                                    ];
                                }
                                
                                return [];
                            })
                            ->required()
                            // Désactivation de la modification de la section en édition
                            ->disabled(fn (string $operation): bool => $operation === 'edit'),
                    ])
                    ->columns(3),

                // Informations sur le contenu
                Section::make('Informations')
                ->description('Métadonnées du contenu du site')
                ->columnSpanFull()
                    ->schema([
                        TextInput::make('key')
                            ->label('Clé technique')
                            ->required()
                            ->unique(ignoreRecord: true)
                            ->helperText('Identifiant unique technique (ex: accueil_hero_title)')
                            // Désactivation de la modification de la clé en édition
                            ->disabled(fn (string $operation): bool => $operation === 'edit'),
                        
                        TextInput::make('label')
                            ->label('Label')
                            ->required()
                            ->helperText('Nom lisible du contenu'),
                        
                        Textarea::make('description')
                            ->label('Description')
                            ->rows(2)
                            ->helperText('Description du contenu et de son utilisation'),
                    ]),

                // Contenu
                Section::make('Contenu')
                ->description('Contenu affiché sur le site (modification du contenu)')
                ->columnSpanFull()
                    ->schema([
                        Select::make('type')
                            ->label('Type')
                            ->options([
                                'text' => 'Texte',
                                'image' => 'Image',
                            ])
                            ->required()
                            ->reactive()
                            // Désactivation de la modification du type de contenu en édition
                            ->disabled(fn (string $operation): bool => $operation === 'edit'),
                        Textarea::make('value')
                            ->label('Texte')
                            ->rows(3)
                            ->visible(fn($get) => $get('type') === 'text')
                            ->default(fn ($record) => $record?->value) // Préremplit avec la valeur du Seeder
                            ->helperText('Texte affiché sur le site (modification du texte)'),
                        FileUpload::make('image_value')
                            ->label('Image')
                            ->image()
                            ->disk('public') // IMPORTANT : spécifier le disque
                            ->directory('contents')
                            ->visibility('public') // IMPORTANT : rendre public
                            ->visible(fn($get) => $get('type') === 'image')
                            ->helperText('Image affichée sur le site (modification de l\'image)'),

                    ]),
            ]);
    }
}