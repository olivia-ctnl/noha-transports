<div class="bg-white border border-gray-200 rounded-xl p-8 shadow-sm transition-transform duration-200 hover:shadow-md hover:-translate-y-1
animate-fadeInUp animate-delay-200">
    <h2 class="text-xl font-semibold text-[#6465a5] mb-2">{{ $pharmacie->nom }}</h2>

    <p class="text-gray-600 mb-2"><strong>Adresse :</strong> {{ $pharmacie->adresse }}</p>

    <p class="text-gray-600 mb-2">
        <strong>Téléphone :</strong>
        {{ $pharmacie->telephone }}
    </p>

    @if($pharmacie->horaires)
    <p class="text-gray-600"><strong>Horaires :</strong> {{ $pharmacie->horaires }}</p>
    @endif
</div>