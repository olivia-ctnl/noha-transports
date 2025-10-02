@extends('layouts.app')

@section('content')
<section class="bg-[#6465a5] py-32 md:py-24 sm:py-20 px-4 text-center">
    <div class="max-w-6xl mx-auto">
        <div class="text-white animate-fadeInUp">
            <h1
                class="text-4xl md:text-3xl sm:text-2xl font-semibold mb-10 md:mb-8 leading-tight max-w-4xl mx-auto animate-fadeInUp animation-delay-200">
                Mentions légales
        </div>
    </div>
</section>

<div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-5xl py-12 md:py-16">
    <section class="space-y-10 text-gray-800">
        <article class="bg-white border border-gray-200 rounded-xl p-8 shadow-sm transition-transform duration-200 hover:shadow-md hover:-translate-y-1
        animate-fadeInUp">
            <h2 class="text-2xl font-bold mb-4 text-[#F28A30]">1. Éditeur du site</h2>
            <ul class="list-none space-y-2">
                <li><strong class="text-[#6465A5]">Raison Sociale :</strong> Noha Transports</li>
                <li><strong class="text-[#6465A5]">Capital :</strong> [Montant en €]</li>
                <li><strong class="text-[#6465A5]">Siège Social :</strong> 12 Rue des Arts et Métiers
                    Immeubles Équinoxes97200 Fort-de-France</li>
                <li><strong class="text-[#6465A5]">SIRET / RCS :</strong> [Numéro SIRET] / [Ville + numéro RCS]</li>
                <li><strong class="text-[#6465A5]">Contact :</strong>
                    <a href="mailto:noha.transports@hotmail.com"
                        class="text-[#F05837] hover:text-[#F28A30] underline">noha.transports@hotmail.com</a> |
                    <a href="tel:+596696161277" class="text-[#F05837] hover:text-[#F28A30] underline">0696 16 12
                        77</a>
                </li>
            </ul>
        </article>

        <article class="bg-white border border-gray-200 rounded-xl p-8 shadow-sm transition-transform duration-200 hover:shadow-md hover:-translate-y-1
        animate-fadeInUp">
            <h2 class="text-2xl font-bold mb-4 text-[#F28A30]">2. Activité et Mission</h2>
            <p class="mb-3 leading-relaxed">
                Noha Transports est spécialisée dans le transport et la logistique de médicaments. Nous agissons
                comme intermédiaire essentiel pour faciliter la prise en charge d'ordonnances et la livraison de
                médicaments à domicile pour les citoyens, les aidants et les professionnels de santé.
            </p>
            <p class="font-semibold text-[#6465A5]">Nos services clés :</p>
            <ul class="list-disc list-inside space-y-1 ml-4 text-sm md:text-base">
                <li>Acheminement rapide des colis sous 24h.</li>
                <li>Gestion simplifiée des prises de commande en ligne.</li>
            </ul>
        </article>

        <article class="bg-white border border-gray-200 rounded-xl p-8 shadow-sm transition-transform duration-200 hover:shadow-md hover:-translate-y-1
        animate-fadeInUp">
            <h2 class="text-2xl font-bold mb-4 text-[#F28A30]">3. Protection des Données Personnelles (RGPD)</h2>
            <p class="mb-4 leading-relaxed">
                Conformément au RGPD, vos données sont collectées uniquement pour le traitement des commandes et des
                demandes de contact. Elles ne sont pas partagées à des fins commerciales sans votre consentement.
            </p>
            <p class="font-semibold text-[#6465A5]">Vos droits (Accès, Rectification, Suppression) :</p>
            <div class="mt-2 ml-0">
                <p>
                    <span class="font-medium text-[#6465A5]">Email dédié :</span> <a
                        href="mailto:[Adresse email dédiée RGPD]"
                        class="text-[#F05837] hover:text-[#F28A30] underline">noha.transports@hotmail.com</a>
                </p>
                <p>
                    <span class="font-medium text-[#6465A5]">Adresse postale :</span> 12 Rue des Arts et Métiers
                    Immeubles Équinoxes97200 Fort-de-France
                </p>
            </div>
        </article>

        <article class="grid md:grid-cols-2 gap-8 pt-4">

            <div class="bg-white border border-gray-200 rounded-xl p-8 shadow-sm transition-transform duration-200 hover:shadow-md hover:-translate-y-1
            animate-fadeInUp">
                <h3 class="text-xl font-bold mb-3 text-[#F28A30]">4. Propriété Intellectuelle</h3>
                <p class="text-sm">
                    Tous les éléments du site (textes, images, logos, etc.) sont la propriété exclusive de Noha
                    Transports. Toute reproduction ou utilisation non autorisée est strictement interdite.
                </p>
            </div>

            <div class="bg-white border border-gray-200 rounded-xl p-8 shadow-sm transition-transform duration-200 hover:shadow-md hover:-translate-y-1
            animate-fadeInUp">
                <h3 class="text-xl font-bold mb-3 text-[#F28A30]">5. Hébergeur</h3>
                <p class="text-sm">
                    Le site est hébergé par : [Nom de l’hébergeur].
                </p>
                <ul class="text-xs mt-2 list-none space-y-1">
                    <li><strong class="text-[#6465A5]">Adresse :</strong> [Adresse complète de l’hébergeur]</li>
                    <li><strong class="text-[#6465A5]">Contact :</strong> [Numéro de l’hébergeur]</li>
                </ul>
            </div>
        </article>

        <article class="bg-white border border-gray-200 rounded-xl p-8 shadow-sm transition-transform duration-200 hover:shadow-md hover:-translate-y-1
        animate-fadeInUp">
            <h2 class="text-2xl font-bold mb-4 text-[#F28A30]">6. Responsabilité & Droit Applicable</h2>

            <h3 class="font-semibold mt-3 text-[#6465A5]">Limitation de Responsabilité</h3>
            <p class="leading-relaxed text-sm">
                Noha Transports ne peut être tenu responsable des erreurs, omissions ou dysfonctionnements techniques
                indépendants de sa volonté, bien que nous assurions la plus grande rigueur dans la mise à jour des
                informations.
            </p>

            <h3 class="font-semibold mt-4 text-[#6465A5]">Droit Applicable</h3>
            <p class="leading-relaxed text-sm">
                Les présentes mentions légales sont régies par le droit français. Tout litige non résolu à l'amiable
                sera soumis aux tribunaux français compétents.
            </p>
        </article>

    </section>
</div>
@endsection