@extends('layouts.app')

@section('content')
{{-- Section Hero --}}
<section class="bg-[#6465a5] py-32 md:py-24 sm:py-20 px-4 text-center">
    <div class="max-w-6xl mx-auto">
        <div class="text-white animate-fadeInUp">
            <h1
                class="text-4xl md:text-3xl sm:text-2xl font-semibold mb-10 md:mb-8 leading-tight max-w-4xl mx-auto animate-fadeInUp animation-delay-200">
                Un service de transport fiable et sécurisé pour les professionnels de santé
            </h1>
            <p
                class="text-lg md:text-base sm:text-base leading-relaxed max-w-3xl mx-auto opacity-95 animate-fadeInUp animation-delay-400">
                Nous comprenons que le transport de médicaments et de produits de santé requiert une attention et
                une expertise particulières. C'est pourquoi nous avons développé un service logistique dédié, conçu
                spécifiquement pour les pharmacies et les professionnels de santé, garantissant la sécurité, la
                traçabilité et la rapidité de chaque livraison.
            </p>
        </div>
    </div>
</section>

{{-- Section Engagements --}}
<section class="max-w-6xl mx-auto px-4 py-16 engagements">
    <h2 class="text-3xl md:text-4xl font-semibold text-[#f28a30] mb-6 leading-snug">
        Nos engagements
    </h2>

    <div
        class="grid gap-6 md:gap-8 lg:gap-10 grid-cols-1 md:grid-cols-2 lg:grid-cols-3 engagements-cards animate-fadeInUp">
        {{-- Card 1 --}}
        <x-card layout="horizontal" title="Acheminement rapide et sécurisé" description="Livraison sous 24h pour les commandes passées par les pharmacies.
            <br><br>
            Respect de la chaîne du froid (si applicable, pensez à vérifier ce point avec votre client).
            <br><br>
            Véhicules et emballages adaptés pour préserver l'intégrité des produits."
            class="animate-fadeInUp animate-delay-200" />

        {{-- Card 2 --}}
        <x-card layout="horizontal" title="Traçabilité complète et en temps réel" description="Système de suivi en ligne permettant aux pharmaciens de connaître la localisation exacte de leurs livraisons.
            <br><br>
            Notifications de statut de livraison (en préparation, en cours de livraison, livrée).
            <br><br>
            Preuve de livraison avec signature électronique" class="animate-fadeInUp animate-delay-400" />

        {{-- Card 3 --}}
        <x-card layout="horizontal" title="Respect de la confidentialité et des normes sanitaires" description="Formation du personnel aux bonnes pratiques de distribution (BPD) pour les produits de santé.
            <br><br>
            Respect strict de la confidentialité des données et des informations médicales.
            <br><br>
            Protocole de désinfection et d'hygiène rigoureux pour les véhicules et les livreurs."
            class="animate-fadeInUp animate-delay-600" />

    </div>
</section>

{{-- Section Fonctionnement --}}
<section class="max-w-6xl mx-auto py-10 px-4">
    <h2 class="text-3xl md:text-4xl font-semibold text-[#f28a30] mb-6 leading-snug">
        Comment ça marche ?
    </h2>

    <div class="grid gap-6 sm:gap-4 grid-cols-1 animate-fadeInUp">
        <x-card layout="horizontal-number" number="1" title="Passage de la commande"
            description="Nous saisissons votre commande et vos informations de livraison."
            class="animate-fadeInUp animate-delay-200" />

        <x-card layout="horizontal-number" number="2" title="Préparation et prise en charge"
            description="Nous préparons et prenons en charge les médicaments à la pharmacie."
            class="animate-fadeInUp animate-delay-400" />

        <x-card layout="horizontal-number" number="3" title="Livraison"
            description="Le livreur remet la commande au domicile du patient."
            class="animate-fadeInUp animate-delay-600" />
    </div>
</section>

{{-- Section Social --}}
<section class="max-w-6xl mx-auto py-10 px-4">
    <h2 class="text-3xl md:text-4xl font-semibold text-[#f28a30] mb-6 leading-snug">
        Notre engagement social
    </h2>

    <div class="grid gap-6 sm:gap-4 grid-cols-1 animate-fadeInUp">
        <x-card layout="horizontal" title="Soutien aux patients dépendants"
            description="Nous mettons en avant l'aide apportée aux personnes en perte d'autonomie ou en situation de handicap, en leur facilitant l'accès aux médicaments essentiels sans qu'ils aient à se déplacer."
            class="animate-fadeInUp animate-delay-200" />

        <x-card layout="horizontal" title="Soutien à l'intégration professionnelle"
            description="Notre société est engagée dans l'intégration du handicap dans le domaine de l'emploi, ce qui renforce l'image de marque de votre client."
            class="animate-fadeInUp animate-delay-400" />
    </div>
</section>
@endsection