<?php

namespace App\View\Components;

use Closure;
use App\Models\Pharmacie;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class PharmacieCard extends Component
{
    public $pharmacie;

    /**
     * Create a new component instance.
     */
    public function __construct(Pharmacie $pharmacie)
    {
        //
        $this->pharmacie = $pharmacie;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.pharmacie-card');
    }
}
