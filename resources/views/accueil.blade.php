@extends('layouts.app')

@section('content')
{{-- Hero Section --}}
<section id="hero"
    class="relative flex items-center justify-center h-screen min-h-[500px] bg-[url('{{ content('accueil_hero_bg_image') }}')] bg-cover bg-center bg-[#f05837] animate-fadeInUp">
    <div class="absolute inset-0 bg-black opacity-60"></div>
    <div class="relative z-10 text-center text-white max-w-3xl px-4 animate-fadeInUp">
        <h1
            class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-bold mb-5 drop-shadow-md animate-fadeInUp delay-200">
            {{ content('accueil_hero_title') }}
        </h1>
        <p class="text-lg sm:text-xl md:text-2xl font-light drop-shadow-md animate-fadeInUp delay-400">
            {{ content('accueil_hero_subtitle') }}
        </p>
    </div>
</section>

{{-- A propos --}}
<section id="apropos" class="py-20 md:py-16 sm:py-12 bg-white">
    <div class="max-w-6xl mx-auto px-4 sm:px-6">
        <div class="flex flex-col md:flex-row items-center gap-8 md:gap-12 lg:gap-16">
            <!-- Image -->
            <div class="flex-1 w-full animate-fadeInLeft sm:animate-fadeInUp">
                <img src="{{ content('accueil_about_image') }}" alt="Image de la section Qui sommes-nous"
                    class="w-full h-auto rounded-xl object-cover aspect-[16/10]">
            </div>
            <!-- Texte -->
            <div class="flex-1 w-full animate-fadeInRight sm:animate-fadeInUp delay-200">
                <h2
                    class="text-3xl md:text-4xl font-semibold text-[#f28a30] mb-6 leading-snug animate-fadeInUp delay-200">
                    {{ content('accueil_about_title') }}
                </h2>
                <p
                    class="text-base md:text-lg text-black leading-relaxed text-justify sm:text-left animate-fadeInUp delay-300">
                    {{content('accueil_about_description')}}
                </p>
            </div>
        </div>
    </div>
</section>

{{-- Services Section --}}
<section id="services" class="py-20 md:py-16 sm:py-12 bg-white">
    <div class="max-w-6xl mx-auto px-4 sm:px-6">
        <div class="flex flex-col md:flex-row items-center gap-8 md:gap-12 lg:gap-16">
            <!-- Texte -->
            <div class="flex-1 w-full order-2 md:order-1 animate-fadeInLeft sm:animate-fadeInUp delay-200">
                <h2 class="text-3xl md:text-4xl font-semibold text-[#f28a30] mb-10 leading-snug">
                    {{ content('accueil_services_title') }}
                </h2>
                <!-- Item 1 -->
                <div class="mb-8 animate-fadeInUp delay-200">
                    <h3 class="text-xl md:text-2xl font-semibold text-[#6465a5] mb-2 leading-snug">
                        {{ content('accueil_service1_title') }}
                    </h3>
                    <p class="text-base md:text-lg text-black leading-relaxed text-justify sm:text-left">
                        {{ content('accueil_service1_description') }}
                    </p>
                </div>
                <!-- Item 2 -->
                <div class="mb-8 animate-fadeInUp delay-300">
                    <h3 class="text-xl md:text-2xl font-semibold text-[#6465a5] mb-2 leading-snug">
                        {{ content('accueil_service2_title') }}
                    </h3>
                    <p class="text-base md:text-lg text-black leading-relaxed text-justify sm:text-left">
                        {{ content('accueil_service2_description') }} </p>
                </div>
            </div>
            <!-- Image -->
            <div class="flex-1 w-full order-1 md:order-2 animate-fadeInRight sm:animate-fadeInUp">
                <img src="{{ content('accueil_services_image') }}" alt="Livreur Noha Transports avec son camion"
                    class="w-full h-auto rounded-xl object-cover aspect-[16/10]">
            </div>
        </div>
    </div>
</section>

{{-- Services Hero pour les profesionnels de santé --}}
<section id="services-sante" class="bg-[#6465a5] py-28 md:py-24 sm:py-20">
    <div class="max-w-6xl mx-auto px-10 sm:px-6 text-center text-white animate-fadeInUp">
        <h2
            class="text-4xl md:text-3xl sm:text-2xl font-semibold mb-8 max-w-3xl mx-auto leading-snug animate-fadeInUp delay-200">
            {{ content('accueil_services_sante_title') }}
        </h2>
        <p
            class="text-lg md:text-base sm:text-sm opacity-95 mb-10 max-w-2xl mx-auto leading-relaxed animate-fadeInUp delay-400">
            {{ content('accueil_services_sante_description') }}
        </p>
        <a href="{{ url('/services') }}"
            class="inline-block bg-[#f05837] hover:bg-[#f28a30] text-white px-8 py-3 rounded-lg font-medium text-base md:text-sm sm:text-sm transition-transform duration-200 ease-in-out hover:-translate-y-1 animate-fadeInUp delay-600">
            {{ content('accueil_services_sante_button') }}
        </a>
    </div>
</section>

{{-- Map --}}
<section id="map" class="w-full">
    <div class="w-full h-[500px] sm:h-[400px] md:h-[450px] lg:h-[500px]">
        {!! (content('accueil_localisation_iframe')) !!}
    </div>
</section>
@endsection