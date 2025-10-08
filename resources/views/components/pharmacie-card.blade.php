@php
$jours = ['lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi', 'dimanche'];

$horaires = collect($pharmacie->horaires ?? [])
->sortBy(fn($item) => array_search($item['jour'], $jours))
->values();

$groupes = [];
$groupeCourant = null;

foreach ($horaires as $index => $h) {
$jour = ucfirst($h['jour']);
$ferme = $h['ferme'] ?? false;
$plage = $ferme ? 'Fermé' : ($h['ouverture'] . ' - ' . $h['fermeture']);

if (!$groupeCourant) {
$groupeCourant = [
'debut' => $jour,
'fin' => $jour,
'plage' => $plage,
];
continue;
}

if ($groupeCourant['plage'] === $plage) {
// Même horaire, on étend le groupe
$groupeCourant['fin'] = $jour;
} else {
// Horaire différent, on enregistre le groupe précédent
$groupes[] = $groupeCourant;
$groupeCourant = [
'debut' => $jour,
'fin' => $jour,
'plage' => $plage,
];
}
}

if ($groupeCourant) {
$groupes[] = $groupeCourant;
}
@endphp

<div class="bg-white border border-gray-200 rounded-xl p-8 shadow-sm transition-transform duration-200 hover:shadow-md hover:-translate-y-1
animate-fadeInUp animate-delay-200">
    <h2 class="text-xl font-semibold text-[#6465a5] mb-2">{{ $pharmacie->nom }}</h2>

    <p class="text-gray-600 mb-2"><strong>Adresse :</strong> {{ $pharmacie->adresse }}</p>

    <p class="text-gray-600 mb-2">
        <strong>Téléphone :</strong>
        {{ $pharmacie->telephone }}
    </p>

    <div class="text-gray-600">
        <h3><strong>Horaires :</strong></h3>
        <ul>
            @foreach($groupes as $groupe)
            <li>
                <strong class="font-semibold">
                    @if($groupe['debut'] === $groupe['fin'])
                    {{ $groupe['debut'] }}
                    @else
                    {{ $groupe['debut'] }} - {{ $groupe['fin'] }}
                    @endif
                </strong>
                : {{ $groupe['plage'] }}
            </li>
            @endforeach
        </ul>
    </div>
</div>