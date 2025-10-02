@extends('layouts.app')

@section('content')

<section class="bg-[#6465A5] py-32 md:py-24 sm:py-20 px-4 text-center">
    <div class="max-w-6xl mx-auto">
        <div class="text-white animate-fadeInUp">
            <h1
                class="text-4xl md:text-3xl sm:text-2xl font-semibold mb-10 md:mb-8 leading-tight max-w-4xl mx-auto animate-fadeInUp animation-delay-200">
                Politique de confidentialité
            </h1>
        </div>
    </div>
</section>

<div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-5xl py-12 md:py-16">
    <section class="space-y-10 text-gray-800">

        <article class="bg-white border border-gray-200 rounded-xl p-8 shadow-sm transition-transform duration-200 hover:shadow-md hover:-translate-y-1
        animate-fadeInUp">
            <h2 class="text-2xl font-bold mb-4 text-[#F28A30]">1. Introduction</h2>
            <p class="leading-relaxed">
                La présente politique de confidentialité a pour objectif d’informer les utilisateurs de nos services sur
                la manière dont Noha Transports collecte, utilise, conserve et protège les données personnelles.
                En utilisant notre site internet et nos services, vous acceptez la présente politique.
            </p>
        </article>

        <article class="bg-white border border-gray-200 rounded-xl p-8 shadow-sm transition-transform duration-200 hover:shadow-md hover:-translate-y-1
        animate-fadeInUp">
            <h2 class="text-2xl font-bold mb-4 text-[#F28A30]">2. Responsable du traitement</h2>
            <ul class="list-none space-y-2">
                <li><strong class="text-[#6465A5]">Société :</strong> Noha Transports</li>
                <li><strong class="text-[#6465A5]">Activité :</strong> Intermédiaire entre les professionnels de santé
                    et les citoyens pour la gestion d’ordonnances et la livraison de médicaments à domicile.</li>
            </ul>
            <p class="mt-4 font-semibold text-[#6465A5]">Contact pour vos données personnelles :</p>
            <div class="mt-2 ml-0">
                <p>
                    <span class="font-medium text-[#6465A5]">Email :</span> <a href="mailto:noha.transports@hotmail.com"
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
                <h3 class="text-xl font-bold mb-3 text-[#F28A30]">3. Données collectées</h3>
                <ul class="list-none list-inside space-y-2 text-sm">
                    <li><strong class="text-[#6465A5]">Données d’identification :</strong> nom, prénom, adresse,
                        téléphone, e-mail.</li>
                    <li><strong class="text-[#6465A5]">Données de santé :</strong> informations liées aux ordonnances
                        (strict respect du secret professionnel).</li>
                    <li><strong class="text-[#6465A5]">Données de navigation :</strong> cookies, adresse IP, données
                        techniques liées à l’utilisation du site.</li>
                </ul>
            </div>

            <div class="bg-white border border-gray-200 rounded-xl p-8 shadow-sm transition-transform duration-200 hover:shadow-md hover:-translate-y-1
            animate-fadeInUp">
                <h3 class="text-xl font-bold mb-3 text-[#F28A30]">4. Finalités du traitement</h3>
                <ul class="list-disc list-inside space-y-2 text-sm">
                    <li>Assurer la prise en charge des commandes et livraisons de médicaments à domicile.</li>
                    <li>Gérer la relation entre les pharmacies, les aidants et les citoyens.</li>
                    <li>Répondre aux demandes via le formulaire de contact.</li>
                    <li>Améliorer nos services et assurer le suivi logistique.</li>
                    <li>Respecter nos obligations légales et réglementaires.</li>
                </ul>
            </div>
        </article>

        <article class="grid md:grid-cols-2 gap-8 pt-4">
            <div class="bg-white border border-gray-200 rounded-xl p-8 shadow-sm transition-transform duration-200 hover:shadow-md hover:-translate-y-1
            animate-fadeInUp">
                <h3 class="text-xl font-bold mb-3 text-[#F28A30]">5. Base légale du traitement</h3>
                <ul class="list-none list-inside space-y-2 text-sm">
                    <li><strong class="text-[#6465A5]">Exécution d’un contrat</strong> (prise en charge et livraison).
                    </li>
                    <li><strong class="text-[#6465A5]">Consentement</strong> (pour la collecte via cookies et
                        formulaires).</li>
                    <li><strong class="text-[#6465A5]">Obligations légales</strong> en matière de santé et de transport.
                    </li>
                </ul>
            </div>

            <div class="bg-white border border-gray-200 rounded-xl p-8 shadow-sm transition-transform duration-200 hover:shadow-md hover:-translate-y-1
            animate-fadeInUp">
                <h3 class="text-xl font-bold mb-3 text-[#F28A30]">6. Durée de conservation</h3>
                <ul class="list-none list-inside space-y-2 text-sm">
                    <li><strong class="text-[#6465A5]">Données clients :</strong> Jusqu’à 5 ans maximum après la fin
                        de la relation contractuelle.</li>
                    <li><strong class="text-[#6465A5]">Données de santé :</strong> Conservées uniquement pour la durée
                        strictement nécessaire au service
                        rendu et traitées avec la plus grande confidentialité.</li>
                </ul>
            </div>
        </article>

        <article class="bg-white border border-gray-200 rounded-xl p-8 shadow-sm transition-transform duration-200 hover:shadow-md hover:-translate-y-1
        animate-fadeInUp">
            <h2 class="text-2xl font-bold mb-4 text-[#F28A30]">7. Partage des données & Sécurité</h2>
            <p class="mb-3 leading-relaxed">
                Vos données personnelles peuvent être transmises aux entités suivantes, dans la limite de ce qui est
                strictement nécessaire pour nos services :
            </p>
            <ul class="list-disc list-inside space-y-1 ml-4 text-sm md:text-base">
                <li>Nos partenaires de santé (pharmacies) pour la prise en charge d’ordonnances.</li>
                <li>Nos transporteurs pour assurer la livraison.</li>
                <li>Les autorités compétentess en cas d’obligation légale.</li>
            </ul>
            <p class="mt-4 font-bold text-[#6465A5]">
                Aucune donnée n’est vendue ni transmise à des tiers à des fins commerciales.
            </p>
        </article>

        <article class="grid md:grid-cols-2 gap-8 pt-4">
            <div class="bg-white border border-gray-200 rounded-xl p-8 shadow-sm transition-transform duration-200 hover:shadow-md hover:-translate-y-1
            animate-fadeInUp">
                <h3 class="text-xl font-bold mb-3 text-[#F28A30]">8. Vos droits (RGPD)</h3>
                <p class="text-sm mb-2">Conformément au RGPD, vous disposez notamment du Droit d’accès, de Rectification
                    et d’Effacement (droit à l’oubli).</p>
                <p class="font-semibold text-[#6465A5] mt-3">Pour exercer vos droits :</p>
                <a href="mailto:noha.transports@hotmail.com"
                    class="text-[#F05837] hover:text-[#F28A30] underline text-sm">noha.transports@hotmail.com</a>
            </div>

            <div class="bg-white border border-gray-200 rounded-xl p-8 shadow-sm transition-transform duration-200 hover:shadow-md hover:-translate-y-1
            animate-fadeInUp">
                <h3 class="text-xl font-bold mb-3 text-[#F28A30]">9. Cookies</h3>
                <p class="text-sm mb-2">
                    Notre site utilise des cookies pour améliorer l’expérience utilisateur et analyser la
                    navigation.
                </p>
                <p class="font-medium text-[#6465A5]">Gestion :</p>
                <p class="text-xs">Vous pouvez gérer vos préférences directement dans les paramètres de votre
                    navigateur.</p>
            </div>
        </article>

        <article class="bg-white border border-gray-200 rounded-xl p-8 shadow-sm transition-transform duration-200 hover:shadow-md hover:-translate-y-1
        animate-fadeInUp">
            <h2 class="text-2xl font-bold mb-4 text-[#F28A30]">10. Sécurité et Contact</h2>

            <h3 class="font-semibold mt-3 text-[#6465A5]">Sécurité des données</h3>
            <p class="leading-relaxed text-sm">
                Nous mettons en œuvre des mesures techniques et organisationnelles strictes pour protéger vos
                données personnelles contre tout accès, utilisation ou divulgation non autorisée.
            </p>

            <h3 class="font-semibold mt-4 text-[#6465A5]">Modification de la politique</h3>
            <p class="leading-relaxed text-sm">
                Nous nous réservons le droit de modifier la présente politique à tout moment. La version mise à jour
                sera publiée sur notre site avec mention de la date de mise à jour.
            </p>

            <h3 class="font-semibold mt-4 text-[#6465A5]">Contact</h3>
            <p class="leading-relaxed text-sm">
                Pour toute question, veuillez nous écrire à :
                <br>
                <a href="mailto:noha.transports@hotmail.com"
                    class="text-[#F05837] hover:text-[#F28A30] underline">noha.transports@hotmail.com</a>
                <br>
                12 Rue des Arts et Métiers
                Immeubles Équinoxes 97200 Fort-de-France
            </p>
        </article>

    </section>
</div>
@endsection