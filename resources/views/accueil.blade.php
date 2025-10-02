@extends('layouts.app')

@section('content')
{{-- Hero Section --}}
<section id="hero"
    class="relative flex items-center justify-center h-screen min-h-[500px] bg-[url('https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80')] bg-cover bg-center bg-[#f05837] animate-fadeInUp">
    <div class="absolute inset-0 bg-black opacity-60"></div>
    <div class="relative z-10 text-center text-white max-w-3xl px-4 animate-fadeInUp">
        <h1
            class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-bold mb-5 drop-shadow-md animate-fadeInUp delay-200">
            Noha Transports
        </h1>
        <p class="text-lg sm:text-xl md:text-2xl font-light drop-shadow-md animate-fadeInUp delay-400">
            Votre solution logistique !
        </p>
    </div>
</section>

{{-- A propos --}}
<section id="apropos" class="py-20 md:py-16 sm:py-12 bg-white">
    <div class="max-w-6xl mx-auto px-4 sm:px-6">
        <div class="flex flex-col md:flex-row items-center gap-8 md:gap-12 lg:gap-16">
            <!-- Image -->
            <div class="flex-1 w-full animate-fadeInLeft sm:animate-fadeInUp">
                <img src="https://images.unsplash.com/photo-1566576721346-d4a3b4eaeb55?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2065&q=80"
                    alt="Livreur Noha Transports dans un camion"
                    class="w-full h-auto rounded-xl object-cover aspect-[16/10]">
            </div>
            <!-- Texte -->
            <div class="flex-1 w-full animate-fadeInRight sm:animate-fadeInUp delay-200">
                <h2
                    class="text-3xl md:text-4xl font-semibold text-[#f28a30] mb-6 leading-snug animate-fadeInUp delay-200">
                    Qui sommes-nous ?
                </h2>
                <p
                    class="text-base md:text-lg text-black leading-relaxed text-justify sm:text-left animate-fadeInUp delay-300">
                    Nous imaginons un avenir dans lequel il y a une prise en charge approfondie et durable de la
                    personne en perte d'autonomie.<br><br>
                    Noha Transports est une société française qui intègre pleinement le handicap dans ses
                    infrastructures, et également dans le domaine de l'emploi.
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
                    Nos services
                </h2>
                <!-- Item 1 -->
                <div class="mb-8 animate-fadeInUp delay-200">
                    <h3 class="text-xl md:text-2xl font-semibold text-[#6465a5] mb-2 leading-snug">
                        Transports de médicaments à domicile
                    </h3>
                    <p class="text-base md:text-lg text-black leading-relaxed text-justify sm:text-left">
                        Faites-nous parvenir votre ordonnance, nous nous occupons de l'acheminement sous 24h.
                    </p>
                </div>
                <!-- Item 2 -->
                <div class="mb-8 animate-fadeInUp delay-300">
                    <h3 class="text-xl md:text-2xl font-semibold text-[#6465a5] mb-2 leading-snug">
                        Gestion de prise de commande en ligne
                    </h3>
                    <p class="text-base md:text-lg text-black leading-relaxed text-justify sm:text-left">
                        Une prise commande rapide et efficace pour faciliter votre quotidien.
                    </p>
                </div>
            </div>
            <!-- Image -->
            <div class="flex-1 w-full order-1 md:order-2 animate-fadeInRight sm:animate-fadeInUp">
                <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2069&q=80"
                    alt="Livreur Noha Transports avec son camion"
                    class="w-full h-auto rounded-xl object-cover aspect-[16/10]">
            </div>
        </div>
    </div>
</section>

{{-- Services Hero pour les profesionnels de santé --}}
<section id="services-livraison" class="bg-[#6465a5] py-28 md:py-24 sm:py-20">
    <div class="max-w-6xl mx-auto px-10 sm:px-6 text-center text-white animate-fadeInUp">
        <h2
            class="text-4xl md:text-3xl sm:text-2xl font-semibold mb-8 max-w-3xl mx-auto leading-snug animate-fadeInUp delay-200">
            Services de hero pour les professionnels de santé
        </h2>
        <p
            class="text-lg md:text-base sm:text-sm opacity-95 mb-10 max-w-2xl mx-auto leading-relaxed animate-fadeInUp delay-400">
            Besoin de livrer des équipements ou des médicaments en urgence ? Noha Transports est votre
            partenaire logistique de confiance. Nous garantissons une prise en charge immédiate et un
            acheminement rapide pour que vous puissiez vous concentrer sur ce qui compte le plus : vos patients.
        </p>
        <a href="{{ url('/services') }}"
            class="inline-block bg-[#f05837] hover:bg-[#f28a30] text-white px-8 py-3 rounded-lg font-medium text-base md:text-sm sm:text-sm transition-transform duration-200 ease-in-out hover:-translate-y-1 animate-fadeInUp delay-600">
            Découvrez nos services
        </a>
    </div>
</section>

{{-- Map --}}
<section id="map" class="w-full">
    <div class="w-full h-[500px] sm:h-[400px] md:h-[450px] lg:h-[500px]">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1930.449417576726!2d-61.044326021596355!3d14.60483839750429!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c6aa15d37fd051d%3A0x5fead3840118fcbe!2sBeBOOSTER!5e0!3m2!1sfr!2sfr!4v1758206451231!5m2!1sfr!2sfr"
            class="w-full h-full border-0" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </div>
</section>
@endsection