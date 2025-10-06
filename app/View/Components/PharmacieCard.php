<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PharmacieCard extends Component
{
    public $pharmacie;

    /**
     * Create a new component instance.
     */
    public function __construct()
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
