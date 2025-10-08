@extends('layouts.app')

@section('content')

<section class="bg-[#6465A5] py-32 md:py-24 sm:py-20 px-4 text-center">
    <div class="max-w-6xl mx-auto">
        <div class="text-white animate-fadeInUp">
            <h1
                class="text-4xl md:text-3xl sm:text-2xl font-semibold mb-10 md:mb-8 leading-tight max-w-4xl mx-auto animate-fadeInUp animation-delay-200">
                Annuaire des pharmacies
            </h1>
        </div>
    </div>
</section>

<section class="max-w-6xl mx-auto px-4 py-16">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach($pharmacies as $pharmacie)
        <x-pharmacie-card :pharmacie="$pharmacie" />
        @endforeach
    </div>

    @if($pharmacies->isEmpty())
    <p class=" text-center text-gray-500 my-8 animate-fadeInUp animate-delay-200">Aucune pharmacie disponible pour le
        moment.</p>
    @endif
</Section>
@endsection