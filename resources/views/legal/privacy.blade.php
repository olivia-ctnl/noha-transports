@extends('layouts.app')

@section('content')

<section class="bg-[#6465A5] py-32 md:py-24 sm:py-20 px-4 text-center">
    <div class="max-w-6xl mx-auto">
        <div class="text-white animate-fadeInUp">
            <h1
                class="text-4xl md:text-3xl sm:text-2xl font-semibold mb-10 md:mb-8 leading-tight max-w-4xl mx-auto animate-fadeInUp animation-delay-200">
                {{ content('privacy_hero_title') }}
            </h1>
        </div>
    </div>
</section>

<div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-5xl py-12 md:py-16">
    <section class="space-y-10 text-gray-800">

        <article class="bg-white border border-gray-200 rounded-xl p-8 shadow-sm transition-transform duration-200 hover:shadow-md hover:-translate-y-1
        animate-fadeInUp">
            <h2 class="text-2xl font-bold mb-4 text-[#F28A30]">{{ content('privacy_intro_title') }}</h2>
            <p class="leading-relaxed">
                {{ content('privacy_intro_description') }}
            </p>
        </article>

        <article class="bg-white border border-gray-200 rounded-xl p-8 shadow-sm transition-transform duration-200 hover:shadow-md hover:-translate-y-1
        animate-fadeInUp">
            <h2 class="text-2xl font-bold mb-4 text-[#F28A30]">{{ content('privacy_responsable_title') }}</h2>
            <ul class="list-none space-y-2">
                <li><strong class="text-[#6465A5]">Société :</strong> {{ content('privacy_responsable_societe') }}</li>
                <li><strong class="text-[#6465A5]">Activité :</strong> {{ content('privacy_responsable_activite') }}</li>
            </ul>
            <p class="mt-4 font-semibold text-[#6465A5]">Contact pour vos données personnelles :</p>
            <div class="mt-2 ml-0">
                <p>
                    <span class="font-medium text-[#6465A5]">Email :</span> <a href="mailto:{{ content('privacy_responsable_email') }}"
                        class="text-[#F05837] hover:text-[#F28A30] underline">{{ content('privacy_responsable_email') }}</a>
                </p>
                <p>
                    <span class="font-medium text-[#6465A5]">Adresse postale :</span> {{ content('privacy_responsable_adresse') }}
                </p>
            </div>
        </article>

        <article class="grid md:grid-cols-2 gap-8 pt-4">

            <div class="bg-white border border-gray-200 rounded-xl p-8 shadow-sm transition-transform duration-200 hover:shadow-md hover:-translate-y-1
            animate-fadeInUp">
                <h3 class="text-xl font-bold mb-3 text-[#F28A30]">{{ content('privacy_donnees_title') }}</h3>
                <ul class="list-none list-inside space-y-2 text-sm">
                    @foreach(json_decode(content('privacy_donnees_list')) as $donnee)
                        <li>{!! $donnee !!}</li>
                    @endforeach
                </ul>
            </div>

            <div class="bg-white border border-gray-200 rounded-xl p-8 shadow-sm transition-transform duration-200 hover:shadow-md hover:-translate-y-1
            animate-fadeInUp">
                <h3 class="text-xl font-bold mb-3 text-[#F28A30]">{{ content('privacy_finalites_title') }}</h3>
                <ul class="list-disc list-inside space-y-2 text-sm">
                    @foreach(json_decode(content('privacy_finalites_list')) as $finalite)
                        <li>{{ $finalite }}</li>
                    @endforeach
                </ul>
            </div>
        </article>

        <article class="grid md:grid-cols-2 gap-8 pt-4">
            <div class="bg-white border border-gray-200 rounded-xl p-8 shadow-sm transition-transform duration-200 hover:shadow-md hover:-translate-y-1
            animate-fadeInUp">
                <h3 class="text-xl font-bold mb-3 text-[#F28A30]">{{ content('privacy_base_legale_title') }}</h3>
                <ul class="list-none list-inside space-y-2 text-sm">
                    @foreach(json_decode(content('privacy_base_legale_list')) as $base)
                        <li>{!! $base !!}</li>
                    @endforeach
                </ul>
            </div>

            <div class="bg-white border border-gray-200 rounded-xl p-8 shadow-sm transition-transform duration-200 hover:shadow-md hover:-translate-y-1
            animate-fadeInUp">
                <h3 class="text-xl font-bold mb-3 text-[#F28A30]">{{ content('privacy_conservation_title') }}</h3>
                <ul class="list-none list-inside space-y-2 text-sm">
                    @foreach(json_decode(content('privacy_conservation_list')) as $conservation)
                        <li>{!! $conservation !!}</li>
                    @endforeach
                </ul>
            </div>
        </article>

        <article class="bg-white border border-gray-200 rounded-xl p-8 shadow-sm transition-transform duration-200 hover:shadow-md hover:-translate-y-1
        animate-fadeInUp">
            <h2 class="text-2xl font-bold mb-4 text-[#F28A30]">{{ content('privacy_partage_title') }}</h2>
            <p class="mb-3 leading-relaxed">
                {{ content('privacy_partage_intro') }}
            </p>
            <ul class="list-disc list-inside space-y-1 ml-4 text-sm md:text-base">
                @foreach(json_decode(content('privacy_partage_list')) as $partage)
                    <li>{{ $partage }}</li>
                @endforeach
            </ul>
            <p class="mt-4 font-bold text-[#6465A5]">
                {{ content('privacy_partage_footer') }}
            </p>
        </article>

        <article class="grid md:grid-cols-2 gap-8 pt-4">
            <div class="bg-white border border-gray-200 rounded-xl p-8 shadow-sm transition-transform duration-200 hover:shadow-md hover:-translate-y-1
            animate-fadeInUp">
                <h3 class="text-xl font-bold mb-3 text-[#F28A30]">{{ content('privacy_droits_title') }}</h3>
                <p class="text-sm mb-2">{{ content('privacy_droits_text') }}</p>
                <p class="font-semibold text-[#6465A5] mt-3">Pour exercer vos droits :</p>
                <a href="mailto:{{ content('privacy_droits_email') }}"
                    class="text-[#F05837] hover:text-[#F28A30] underline text-sm">{{ content('privacy_droits_email') }}</a>
            </div>

            <div class="bg-white border border-gray-200 rounded-xl p-8 shadow-sm transition-transform duration-200 hover:shadow-md hover:-translate-y-1
            animate-fadeInUp">
                <h3 class="text-xl font-bold mb-3 text-[#F28A30]">{{ content('privacy_cookies_title') }}</h3>
                <p class="text-sm mb-2">
                    {{ content('privacy_cookies_text') }}
                </p>
                <p class="font-medium text-[#6465A5]">Gestion :</p>
                <p class="text-xs">{{ content('privacy_cookies_gestion') }}</p>
            </div>
        </article>

        <article class="bg-white border border-gray-200 rounded-xl p-8 shadow-sm transition-transform duration-200 hover:shadow-md hover:-translate-y-1
        animate-fadeInUp">
            <h2 class="text-2xl font-bold mb-4 text-[#F28A30]">{{ content('privacy_securite_title') }}</h2>

            <h3 class="font-semibold mt-3 text-[#6465A5]">Sécurité des données</h3>
            <p class="leading-relaxed text-sm">
                {{ content('privacy_securite_text') }}
            </p>

            <h3 class="font-semibold mt-4 text-[#6465A5]">Modification de la politique</h3>
            <p class="leading-relaxed text-sm">
                {{ content('privacy_modification_text') }}
            </p>

            <h3 class="font-semibold mt-4 text-[#6465A5]">Contact</h3>
            <p class="leading-relaxed text-sm">
                {!! nl2br(e(content('privacy_contact_text'))) !!}
            </p>
        </article>

    </section>
</div>
@endsection
