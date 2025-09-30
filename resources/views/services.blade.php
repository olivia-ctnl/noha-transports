@extends('layouts.app')

@section('content')
{{-- Section Hero --}}
<section class="services-hero">
    <div class="services-hero-container">
        <div class="services-hero-content">
            <h1 class="services-hero-title">
                Un service de transport fiable et sécurisé pour les professionnels de santé
            </h1>
            <p class="services-hero-description">
                Nous comprenons que le transport de médicaments et de produits de santé requiert une attention et
                une expertise particulières. C'est pourquoi nous avons développé un service logistique dédié, conçu
                spécifiquement pour les pharmacies et les professionnels de santé, garantissant la sécurité, la
                traçabilité et la rapidité de chaque livraison.
            </p>
        </div>
    </div>
</section>

{{-- Section Engagements --}}
<section class="engagements">
    <h2>Nos engagements</h2>
    <div class="engagements-cards">
        <x-card class="card" layout="horizontal" title="Acheminement rapide et sécurisé" description="Livraison sous 24h pour les commandes passées par les pharmacies.
        <br><br>
        Respect de la chaîne du froid (si applicable, pensez à vérifier ce point avec votre client).
        <br><br>
        Véhicules et emballages adaptés pour préserver l'intégrité des produits." />

        <x-card class="card" layout="horizontal" title="Traçabilité complète et en temps réel" description="Système de suivi en ligne permettant aux pharmaciens de connaître la localisation exacte de leurs livraisons.
        <br><br>
        Notifications de statut de livraison (en préparation, en cours de livraison, livrée).
        <br><br>
        Preuve de livraison avec signature électronique" />

        <x-card class="card" layout="horizontal" title="Respect de la confidentialité et des normes sanitaires"
            description="Formation du personnel aux bonnes pratiques de distribution (BPD) pour les produits de santé.
            <br><br>
        Respect strict de la confidentialité des données et des informations médicales.
        <br><br>
        Protocole de désinfection et d'hygiène rigoureux pour les véhicules et les livreurs." />
    </div>
</section>

{{-- Section Fonctionnement --}}
<section class="fonctionnement">
    <h2>Comment ça marche ?</h2>
    <div class="fonctionnement-cards">
        <x-card class="card" layout="horizontal-number" number="1" title="Passage de la commande"
            description="Nous saisissons votre commande et vos informations de livraison." />

        <x-card class="card" layout="horizontal-number" number="2" title="Préparation et prise en charge"
            description="Nous préparons et prenons en charge les médicaments à la pharmacie." />

        <x-card class="card" layout="horizontal-number" number="3" title="Livraison"
            description="Le livreur remet la commande au domicile du patient." />
    </div>
</section>

{{-- Section Social --}}
<section class="social">
    <h2>Notre engagement social</h2>
    <div class="social-cards">
        <x-card class="card" layout="horizontal" title="Soutien aux patients dépendants"
            description="Nous mettons en avant l'aide apportée aux personnes en perte d'autonomie ou en situation de handicap, en leur facilitant l'accès aux médicaments essentiels sans qu'ils aient à se déplacer.            " />

        <x-card class="card" layout="horizontal" title="Soutien aux patients dépendants"
            description="Notre société est engagée dans l'intégration du handicap dans le domaine de l'emploi, ce qui renforce l'image de marque de votre client.            " />
    </div>
</section>
@endsection