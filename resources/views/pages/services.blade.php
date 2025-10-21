@extends('layouts.app')

@section('content')
{{-- Section Hero --}}
<section class="bg-[#6465a5] py-32 md:py-24 sm:py-20 px-4 text-center">
    <div class="max-w-6xl mx-auto">
        <div class="text-white animate-fadeInUp">
            <h1
                class="text-4xl md:text-3xl sm:text-2xl font-semibold mb-10 md:mb-8 leading-tight max-w-4xl mx-auto animate-fadeInUp animation-delay-200">
                {{ content('services_hero_title') }}
            </h1>
            <p
                class="text-lg md:text-base sm:text-base leading-relaxed max-w-3xl mx-auto opacity-95 animate-fadeInUp animation-delay-400">
                {{ content('services_hero_description') }}
            </p>
        </div>
    </div>
</section>

{{-- Section Engagements --}}
<section class="max-w-6xl mx-auto px-4 py-16 engagements">
    <h2 class="text-3xl md:text-4xl font-semibold text-[#f28a30] mb-6 leading-snug">
        {{ content('services_engagements_title') }}
    </h2>

    <div
        class="grid gap-6 md:gap-8 lg:gap-10 grid-cols-1 md:grid-cols-2 lg:grid-cols-3 engagements-cards animate-fadeInUp">
        {{-- Card 1 --}}
        <x-card layout="horizontal" title="{{ content('services_engagement1_title') }}"
            description="{{ content('services_engagement1_description') }}"
            class="animate-fadeInUp animate-delay-200" />

        {{-- Card 2 --}}
        <x-card layout="horizontal" title="{{ content('services_engagement2_title') }}"
            description="{{ content('services_engagement2_description') }}"
            class="animate-fadeInUp animate-delay-400" />

        {{-- Card 3 --}}
        <x-card layout="horizontal" title="{{ content('services_engagement3_title') }}"
            description="{{ content('services_engagement3_description') }}"
            class="animate-fadeInUp animate-delay-600" />

    </div>
</section>

{{-- Section Fonctionnement --}}
<section class="max-w-6xl mx-auto py-10 px-4">
    <h2 class="text-3xl md:text-4xl font-semibold text-[#f28a30] mb-6 leading-snug">
        {{ content('services_fonctionnement_title') }}
    </h2>

    <div class="grid gap-6 sm:gap-4 grid-cols-1 animate-fadeInUp">
        <x-card layout="horizontal-number" number="1" title="{{ content('services_etape1_title') }}"
            description="{{ content('services_etape1_description') }}" class="animate-fadeInUp animate-delay-200" />

        <x-card layout="horizontal-number" number="2" title="{{ content('services_etape2_title') }}"
            description="{{ content('services_etape2_description') }}" class="animate-fadeInUp animate-delay-400" />

        <x-card layout="horizontal-number" number="3" title="{{ content('services_etape3_title') }}"
            description="{{ content('services_etape3_description') }}" class="animate-fadeInUp animate-delay-600" />
    </div>
</section>

{{-- Section Social --}}
<section class="max-w-6xl mx-auto py-10 px-4">
    <h2 class="text-3xl md:text-4xl font-semibold text-[#f28a30] mb-6 leading-snug">
        {{ content('services_social_title') }}
    </h2>

    <div class="grid gap-6 sm:gap-4 grid-cols-1 animate-fadeInUp">
        <x-card layout="horizontal" title="{{ content('services_social1_title') }}"
            description="{{ content('services_social1_description') }}" class="animate-fadeInUp animate-delay-200" />

        <x-card layout="horizontal" title="{{ content('services_social2_title') }}"
            description="{{ content('services_social2_description') }}" class="animate-fadeInUp animate-delay-400" />
    </div>
</section>
@endsection