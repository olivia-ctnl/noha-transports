@extends('layouts.app')

@section('content')

<section class="bg-[#6465A5] py-32 md:py-24 sm:py-20 px-4 text-center">
    <div class="max-w-6xl mx-auto">
        <div class="text-white animate-fadeInUp">
            <h1
                class="text-4xl md:text-3xl sm:text-2xl font-semibold mb-10 md:mb-8 leading-tight max-w-4xl mx-auto animate-fadeInUp animation-delay-200">
                Conditions Générales d'Utilisation
            </h1>
        </div>
    </div>
</section>

<div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-5xl py-12 md:py-16">
    <section class="space-y-10 text-gray-800">

        <article class="bg-white border border-gray-200 rounded-xl p-8 shadow-sm transition-transform duration-200 hover:shadow-md hover:-translate-y-1
        animate-fadeInUp">
            <h2 class="text-2xl font-bold mb-4 text-[#F28A30]">1. Objet des CGU</h2>
            <p class="leading-relaxed">
                Les présentes Conditions Générales d’Utilisation (CGU) définissent les modalités d’accès et
                d’utilisation du site internet et des services proposés par Noha Transports, intermédiaire entre les
                professionnels de santé et les citoyens pour la prise en charge d’ordonnances et la livraison de
                médicaments à domicile.
            </p>
            <p class="mt-3 font-semibold text-[#6465A5]">
                En accédant au site et en utilisant nos services, l’utilisateur reconnaît avoir pris connaissance et
                s’engage à respecter les présentes CGU.
            </p>
        </article>

        <article class="bg-white border border-gray-200 rounded-xl p-8 shadow-sm transition-transform duration-200 hover:shadow-md hover:-translate-y-1
        animate-fadeInUp">
            <h2 class="text-2xl font-bold mb-4 text-[#F28A30]">2. Services proposés et cibles</h2>
            <p class="mb-3 leading-relaxed">
                L’entreprise met à disposition des utilisateurs les services suivants :
            </p>
            <ul class="list-disc list-inside space-y-1 ml-4 text-sm md:text-base">
                <li>Un service de prise en charge de commandes auprès de pharmacies partenaires.</li>
                <li>Un service de livraison de médicaments à domicile (délai indicatif de 24h).</li>
            </ul>
            <p class="mt-3 font-semibold text-[#6465A5]">
                Ces services sont principalement destinés aux pharmacies, aidants et citoyens.
            </p>
        </article>

        <article class="grid md:grid-cols-2 gap-8 pt-4">

            <div class="bg-white border border-gray-200 rounded-xl p-8 shadow-sm transition-transform duration-200 hover:shadow-md hover:-translate-y-1
            animate-fadeInUp">
                <h3 class="text-xl font-bold mb-3 text-[#F28A30]">3. Accès au site</h3>
                <p class="text-sm leading-relaxed">
                    L’accès au site est libre et gratuit pour tout utilisateur disposant d’un accès internet. Tous
                    les frais liés à la connexion (matériel, logiciel, abonnement, etc.) restent à la charge de
                    l’utilisateur.
                </p>
            </div>

            <div class="bg-white border border-gray-200 rounded-xl p-8 shadow-sm transition-transform duration-200 hover:shadow-md hover:-translate-y-1
            animate-fadeInUp">
                <h3 class="text-xl font-bold mb-3 text-[#F28A30]">4. Responsabilités de l’utilisateur</h3>
                <p class="font-semibold text-[#6465A5] mb-2">L'utilisateur s'engage notamment à :</p>
                <ul class="list-disc list-inside space-y-1 ml-4 text-sm">
                    <li>Fournir des informations exactes lors des commandes.</li>
                    <li>Respecter la réglementation applicable aux médicaments.</li>
                    <li>Ne pas utiliser le site à des fins frauduleuses ou illégales.</li>
                </ul>
            </div>
        </article>

        <article class="bg-white border border-gray-200 rounded-xl p-8 shadow-sm transition-transform duration-200 hover:shadow-md hover:-translate-y-1
        animate-fadeInUp">
            <h2 class="text-2xl font-bold mb-4 text-[#F28A30]">5. Responsabilités de Noha Transports</h2>

            <h3 class="font-semibold mt-3 text-[#6465A5]">Nos engagements :</h3>
            <ul class="list-disc list-inside space-y-1 ml-4 text-sm md:text-base">
                <li>Assurer la livraison des médicaments dans les délais annoncés (24h indicatives).</li>
                <li>Garantir la sécurité et la confidentialité des données (cf. Politique de confidentialité).</li>
                <li>Respecter nos valeurs de prise en charge durable des personnes en perte d’autonomie.</li>
            </ul>

            <h3 class="font-semibold mt-4 text-[#F05837]">Limitations de Responsabilité :</h3>
            <p class="leading-relaxed text-sm">
                L’entreprise ne saurait être tenue responsable :
            </p>
            <ul class="list-disc list-inside space-y-1 ml-4 text-xs md:text-sm">
                <li>Des retards ou impossibilités de livraison liés à un cas de force majeure.</li>
                <li>D’un usage non conforme des médicaments par le bénéficiaire.</li>
                <li>De l’indisponibilité temporaire du site (maintenance ou panne technique).</li>
            </ul>
        </article>

        <article class="grid md:grid-cols-2 gap-8 pt-4">

            <div class="bg-white border border-gray-200 rounded-xl p-8 shadow-sm transition-transform duration-200 hover:shadow-md hover:-translate-y-1
            animate-fadeInUp">
                <h3 class="text-xl font-bold mb-3 text-[#F28A30]">6. Commandes et livraisons</h3>
                <p class="text-sm mb-2">
                    Les commandes sont gérées exclusivement via le site internet auprès de nos pharmacies
                    partenaires.
                </p>
                <p class="text-sm font-bold text-[#6465A5]">Important :</p>
                <p class="text-xs">Le délai de livraison de 24 heures est indicatif et sans garantie contractuelle.
                </p>
            </div>

            <div class="bg-white border border-gray-200 rounded-xl p-8 shadow-sm transition-transform duration-200 hover:shadow-md hover:-translate-y-1
            animate-fadeInUp">
                <h3 class="text-xl font-bold mb-3 text-[#F28A30]">7. Données personnelles</h3>
                <p class="text-sm">
                    Dans le cadre de l’utilisation des services, des données personnelles sont collectées et traitées.
                </p>
                <p class="text-sm mt-3 font-medium text-[#6465A5]">
                    Veuillez consulter notre
                    <a href="{{ route('politique.confidentialite') }}"
                        class="text-[#F28A30] hover:text-[#F05837] underline font-bold">Politique de Confidentialité</a>
                    pour les détails sur la collecte et le traitement de vos données.
                </p>
            </div>
        </article>

        <article class="bg-white border border-gray-200 rounded-xl p-8 shadow-sm transition-transform duration-200 hover:shadow-md hover:-translate-y-1
        animate-fadeInUp">
            <h2 class="text-2xl font-bold mb-4 text-[#F28A30]">8. Propriété Intellectuelle & Dispositions Finales</h2>

            <h3 class="font-semibold mt-3 text-[#6465A5]">Propriété Intellectuelle</h3>
            <p class="leading-relaxed text-sm">
                Le site, son contenu, sa structure, ainsi que les marques et logos sont la propriété exclusive de
                l'entreprise. Toute reproduction non autorisée est strictement interdite.
            </p>

            <h3 class="font-semibold mt-4 text-[#6465A5]">Modification des CGU</h3>
            <p class="leading-relaxed text-sm">
                L’entreprise se réserve le droit de modifier les présentes CGU à tout moment. Les utilisateurs seront
                informés de ces modifications via le site internet.
            </p>

            <h3 class="font-semibold mt-4 text-[#6465A5]">Droit applicable et Juridiction</h3>
            <p class="leading-relaxed text-sm">
                Les présentes CGU sont régies par le droit français. En cas de litige, compétence exclusive est
                attribuée aux tribunaux compétents du ressort du siège social de l’entreprise.
            </p>
        </article>

    </section>
</div>
@endsection