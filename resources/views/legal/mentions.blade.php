@extends('layouts.app')

@section('content')
<section class="bg-[#6465a5] py-32 md:py-24 sm:py-20 px-4 text-center">
    <div class="max-w-6xl mx-auto">
        <div class="text-white animate-fadeInUp">
            <h1
                class="text-4xl md:text-3xl sm:text-2xl font-semibold mb-10 md:mb-8 leading-tight max-w-4xl mx-auto animate-fadeInUp animation-delay-200">
                {{ content('mentions_hero_title') }}
        </div>
    </div>
</section>

<div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-5xl py-12 md:py-16">
    <section class="space-y-10 text-gray-800">
        <article class="bg-white border border-gray-200 rounded-xl p-8 shadow-sm transition-transform duration-200 hover:shadow-md hover:-translate-y-1
        animate-fadeInUp">
            <h2 class="text-2xl font-bold mb-4 text-[#F28A30]">{{ content('mentions_editeur_title') }}</h2>
            <ul class="list-none space-y-2">
                <li><strong class="text-[#6465A5]">Raison Sociale :</strong> {{
                    content('mentions_editeur_raison_sociale') }}</li>
                <li><strong class="text-[#6465A5]">Capital :</strong> {{ content('mentions_editeur_capital') }}</li>
                <li><strong class="text-[#6465A5]">Siège Social :</strong> {{ content('mentions_editeur_siege_social')
                    }}</li>
                <li><strong class="text-[#6465A5]">SIRET / RCS :</strong> {{ content('mentions_editeur_siret') }} / {{
                    content('mentions_editeur_rcs') }}</li>
                <li><strong class="text-[#6465A5]">Contact :</strong>
                    <a href="mailto:{{ content('mentions_editeur_email') }}"
                        class="text-[#F05837] hover:text-[#F28A30] underline">{{ content('mentions_editeur_email')
                        }}</a> |
                    <a href="tel:+596{{ str_replace(' ', '', content('mentions_editeur_telephone')) }}"
                        class="text-[#F05837] hover:text-[#F28A30] underline">{{ content('mentions_editeur_telephone')
                        }}</a>
                </li>
            </ul>
        </article>

        <article class="bg-white border border-gray-200 rounded-xl p-8 shadow-sm transition-transform duration-200 hover:shadow-md hover:-translate-y-1
        animate-fadeInUp">
            <h2 class="text-2xl font-bold mb-4 text-[#F28A30]">{{ content('mentions_activite_title') }}</h2>
            <p class="mb-3 leading-relaxed">
                {{ content('mentions_activite_description') }}
            </p>
            <p class="font-semibold text-[#6465A5]">{{ content('mentions_activite_services_subtitle') }}</p>
            <ul class="list-disc list-inside space-y-1 ml-4 text-sm md:text-base">
                @foreach(json_decode(content('mentions_activite_services_list')) as $service)
                <li>{{ $service }}</li>
                @endforeach
            </ul>
        </article>

        <article class="bg-white border border-gray-200 rounded-xl p-8 shadow-sm transition-transform duration-200 hover:shadow-md hover:-translate-y-1
        animate-fadeInUp">
            <h2 class="text-2xl font-bold mb-4 text-[#F28A30]">{{ content('mentions_rgpd_title') }}</h2>
            <p class="mb-4 leading-relaxed">
                {{ content('mentions_rgpd_description') }}
            </p>
            <p class="font-semibold text-[#6465A5]">{{ content('mentions_rgpd_droits_subtitle') }}</p>
            <div class="mt-2 ml-0">
                <p>
                    <span class="font-medium text-[#6465A5]">Email dédié :</span> <a
                        href="mailto:{{ content('mentions_rgpd_email') }}"
                        class="text-[#F05837] hover:text-[#F28A30] underline">{{ content('mentions_rgpd_email') }}</a>
                </p>
                <p>
                    <span class="font-medium text-[#6465A5]">Adresse postale :</span> {{
                    content('mentions_rgpd_adresse') }}
                </p>
            </div>
        </article>

        <article class="grid md:grid-cols-2 gap-8 pt-4">

            <div class="bg-white border border-gray-200 rounded-xl p-8 shadow-sm transition-transform duration-200 hover:shadow-md hover:-translate-y-1
            animate-fadeInUp">
                <h3 class="text-xl font-bold mb-3 text-[#F28A30]">{{ content('mentions_propriete_title') }}</h3>
                <p class="text-sm">
                    {{ content('mentions_propriete_description') }}
                </p>
            </div>

            <div class="bg-white border border-gray-200 rounded-xl p-8 shadow-sm transition-transform duration-200 hover:shadow-md hover:-translate-y-1
            animate-fadeInUp">
                <h3 class="text-xl font-bold mb-3 text-[#F28A30]">{{ content('mentions_hebergeur_title') }}</h3>
                <p class="text-sm">
                    Le site est hébergé par : {{ content('mentions_hebergeur_nom') }}.
                </p>
                <ul class="text-xs mt-2 list-none space-y-1">
                    <li><strong class="text-[#6465A5]">Adresse :</strong> {{ content('mentions_hebergeur_adresse') }}
                    </li>
                    <li><strong class="text-[#6465A5]">Contact :</strong> {{ content('mentions_hebergeur_contact') }}
                    </li>
                </ul>
            </div>
        </article>

        <article class="bg-white border border-gray-200 rounded-xl p-8 shadow-sm transition-transform duration-200 hover:shadow-md hover:-translate-y-1
        animate-fadeInUp">
            <h2 class="text-2xl font-bold mb-4 text-[#F28A30]">{{ content('mentions_responsabilite_title') }}</h2>

            <h3 class="font-semibold mt-3 text-[#6465A5]">{{ content('mentions_responsabilite_limitation_title') }}</h3>
            <p class="leading-relaxed text-sm">
                {{ content('mentions_responsabilite_limitation_text') }}
            </p>

            <h3 class="font-semibold mt-4 text-[#6465A5]">{{ content('mentions_responsabilite_droit_title') }}</h3>
            <p class="leading-relaxed text-sm">
                {{ content('mentions_responsabilite_droit_text') }}
            </p>
        </article>

    </section>
</div>
@endsection