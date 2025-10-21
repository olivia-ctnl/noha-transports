@extends('layouts.app')

@section('content')

<section class="bg-[#6465A5] py-32 md:py-24 sm:py-20 px-4 text-center">
    <div class="max-w-6xl mx-auto">
        <div class="text-white animate-fadeInUp">
            <h1
                class="text-4xl md:text-3xl sm:text-2xl font-semibold mb-10 md:mb-8 leading-tight max-w-4xl mx-auto animate-fadeInUp animation-delay-200">
                {{ content('terms_hero_title') }}
            </h1>
        </div>
    </div>
</section>

<div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-5xl py-12 md:py-16">
    <section class="space-y-10 text-gray-800">

        <article class="bg-white border border-gray-200 rounded-xl p-8 shadow-sm transition-transform duration-200 hover:shadow-md hover:-translate-y-1
        animate-fadeInUp">
            <h2 class="text-2xl font-bold mb-4 text-[#F28A30]">{{ content('cgu_objet_title') }}</h2>
            <p class="leading-relaxed">
                {{ content('cgu_objet_paragraph1') }}
            </p>
            <p class="mt-3 font-semibold text-[#6465A5]">
                {{ content('cgu_objet_paragraph2') }}
            </p>
        </article>

        <article class="bg-white border border-gray-200 rounded-xl p-8 shadow-sm transition-transform duration-200 hover:shadow-md hover:-translate-y-1
        animate-fadeInUp">
            <h2 class="text-2xl font-bold mb-4 text-[#F28A30]">{{ content('cgu_services_title') }}</h2>
            <p class="mb-3 leading-relaxed">
                {{ content('cgu_services_intro') }}
            </p>
            <ul class="list-disc list-inside space-y-1 ml-4 text-sm md:text-base">
                @foreach(json_decode(content('cgu_services_list')) as $service)
                    <li>{{ $service }}</li>
                @endforeach
            </ul>
            <p class="mt-3 font-semibold text-[#6465A5]">
                {{ content('cgu_services_conclusion') }}
            </p>
        </article>

        <article class="grid md:grid-cols-2 gap-8 pt-4">

            <div class="bg-white border border-gray-200 rounded-xl p-8 shadow-sm transition-transform duration-200 hover:shadow-md hover:-translate-y-1
            animate-fadeInUp">
                <h3 class="text-xl font-bold mb-3 text-[#F28A30]">{{ content('cgu_acces_title') }}</h3>
                <p class="text-sm leading-relaxed">
                    {{ content('cgu_acces_text') }}
                </p>
            </div>

            <div class="bg-white border border-gray-200 rounded-xl p-8 shadow-sm transition-transform duration-200 hover:shadow-md hover:-translate-y-1
            animate-fadeInUp">
                <h3 class="text-xl font-bold mb-3 text-[#F28A30]">{{ content('cgu_responsibilite_utilisateur_title') }}</h3>
                <p class="font-semibold text-[#6465A5] mb-2">{{ content('cgu_responsibilite_utilisateur_intro') }}</p>
                <ul class="list-disc list-inside space-y-1 ml-4 text-sm">
                    @foreach(json_decode(content('cgu_responsibilite_utilisateur_list')) as $responsabilite)
                        <li>{{ $responsabilite }}</li>
                    @endforeach
                </ul>
            </div>
        </article>

        <article class="bg-white border border-gray-200 rounded-xl p-8 shadow-sm transition-transform duration-200 hover:shadow-md hover:-translate-y-1
        animate-fadeInUp">
            <h2 class="text-2xl font-bold mb-4 text-[#F28A30]">{{ content('cgu_responsabilite_entreprise_title') }}</h2>

            <h3 class="font-semibold mt-3 text-[#6465A5]">Nos engagements :</h3>
            <ul class="list-disc list-inside space-y-1 ml-4 text-sm md:text-base">
                @foreach(json_decode(content('cgu_responsabilite_entreprise_commitments')) as $engagement)
                    <li>{{ $engagement }}</li>
                @endforeach
            </ul>

            <h3 class="font-semibold mt-4 text-[#F05837]">Limitations de Responsabilité :</h3>
            <p class="leading-relaxed text-sm">
                L'entreprise ne saurait être tenue responsable :
            </p>
            <ul class="list-disc list-inside space-y-1 ml-4 text-xs md:text-sm">
                @foreach(json_decode(content('cgu_responsabilite_entreprise_limitations')) as $limitation)
                    <li>{{ $limitation }}</li>
                @endforeach
            </ul>
        </article>

        <article class="grid md:grid-cols-2 gap-8 pt-4">

            <div class="bg-white border border-gray-200 rounded-xl p-8 shadow-sm transition-transform duration-200 hover:shadow-md hover:-translate-y-1
            animate-fadeInUp">
                <h3 class="text-xl font-bold mb-3 text-[#F28A30]">{{ content('cgu_commandes_title') }}</h3>
                <p class="text-sm mb-2">
                    {{ content('cgu_commandes_text') }}
                </p>
            </div>

            <div class="bg-white border border-gray-200 rounded-xl p-8 shadow-sm transition-transform duration-200 hover:shadow-md hover:-translate-y-1
            animate-fadeInUp">
                <h3 class="text-xl font-bold mb-3 text-[#F28A30]">{{ content('cgu_donnees_title') }}</h3>
                <p class="text-sm">
                    {{ content('cgu_donnees_text') }}
                </p>
            </div>
        </article>

        <article class="bg-white border border-gray-200 rounded-xl p-8 shadow-sm transition-transform duration-200 hover:shadow-md hover:-translate-y-1
        animate-fadeInUp">
            <h2 class="text-2xl font-bold mb-4 text-[#F28A30]">{{ content('cgu_propriete_title') }}</h2>

            <h3 class="font-semibold mt-3 text-[#6465A5]">Propriété Intellectuelle</h3>
            <p class="leading-relaxed text-sm">
                {{ content('cgu_propriete_intellectuelle') }}
            </p>

            <h3 class="font-semibold mt-4 text-[#6465A5]">Modification des CGU</h3>
            <p class="leading-relaxed text-sm">
                {{ content('cgu_propriete_modification') }}
            </p>

            <h3 class="font-semibold mt-4 text-[#6465A5]">Droit applicable et Juridiction</h3>
            <p class="leading-relaxed text-sm">
                {{ content('cgu_propriete_droit') }}
            </p>
        </article>

    </section>
</div>
@endsection
