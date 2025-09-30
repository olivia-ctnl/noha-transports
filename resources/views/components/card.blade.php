{{--
Composant Card flexible pour Noha Transports

Props:
- $title: Titre de la card (requis)
- $description: Description/contenu de la card (requis)
- $layout: 'vertical' | 'horizontal' | 'horizontal-number' (défaut: 'vertical')
- $number: Numéro à afficher (optionnel, uniquement pour layout horizontal-number)
--}}

@props([
'title',
'description',
'layout' => 'vertical',
'number' => null
])

<div class="card card-{{ $layout }}">
    @if($layout === 'horizontal-number' && $number)
    <div class="card-number">
        <span>{{ $number }}</span>
    </div>
    @endif

    <div class="card-content">
        <h3 class="card-title">{{ $title }}</h3>
        <div class="card-description">
            {!! $description !!}
        </div>
    </div>
</div>