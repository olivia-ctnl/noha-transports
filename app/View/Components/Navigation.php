<?php

namespace App\View\Components;

use Closure;
use App\Models\Content;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Navigation extends Component
{
    public $logo;
    public $links;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        // Logo
        $this->logo = Content::where('key', 'nav_logo')->first()?->value ?? 'images/logo.png';

        // Liens de navigation
        $rawLinks = Content::where('key', 'nav_links')->first()?->value;
        $rawLinks = is_string($rawLinks) ? json_decode($rawLinks, true) : ($rawLinks ?? []);

        // Associer chaque texte à son URL
        $this->links = collect($rawLinks)->map(fn ($link) => [
            'label' => $link,
            'url' => $this->resolveUrl($link),
        ])->toArray();
    }
    /**
     * Associe un libellé à une URL.
     */
    protected function resolveUrl(string $label): string
    {
        return match ($label) {
            'Accueil' => url('/'),
            'Qui sommes-nous' => url('/#apropos'),
            'Nos services' => url('/#services'),
            'Services dédiés' => url('/#services-sante'),
            'Localisation' => url('/#map'),
            'Annuaire' => route('annuaire'),
            default => '#',
        };
    }
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.navigation', [
            'logo' => $this->logo,
            'links' => $this->links,
        ]);
    }
}
