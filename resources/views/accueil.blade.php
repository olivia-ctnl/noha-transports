@extends('layouts.app')

@section('content')
{{-- Hero Section --}}
<div id="hero">
    <section class="hero">
        <div class="hero-content">
            <h1 class="hero-title">Noha Transports</h1>
            <p class="hero-subtitle">Votre solution logistique !</p>
        </div>
    </section>
</div>

{{-- Section A propos --}}
<div id="apropos">
    <<section class="apropos">
        <div class="apropos-container">
            <div class="apropos-content">
                <div class="apropos-image">
                    <img src="https://images.unsplash.com/photo-1566576721346-d4a3b4eaeb55?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2065&q=80"
                        alt="Livreur Noha Transports dans un camion">
                </div>
                <div class="apropos-text">
                    <h2 class="apropos-title">Qui sommes-nous ?</h2>
                    <p class="apropos-description">
                        Nous imaginons un avenir dans lequel il y a une prise en charge approfondie et durable de la
                        personne en perte d'autonomie.
                        Noha Transports est une société française qui intègre pleinement le handicap dans ses
                        infrastructures, et également
                        dans le domaine de l'emploi.
                    </p>
                </div>
            </div>
        </div>
        </section>
</div>

{{-- Section Services --}}
<div id="services">
    <section class="services">
        <div class="services-container">
            <div class="services-content">
                <div class="services-text">
                    <h2 class="services-title">Nos services</h2>

                    <div class="service-item">
                        <h3 class="service-subtitle">Transports de médicaments à domicile</h3>
                        <p class="service-description">
                            Faites-nous parvenir votre ordonnance, nous nous occupons de l'acheminement sous 24h.
                        </p>
                    </div>

                    <div class="service-item">
                        <h3 class="service-subtitle">Gestion de prise de commande en ligne</h3>
                        <p class="service-description">
                            Une prise commande rapide et efficace pour faciliter votre quotidien.
                        </p>
                    </div>
                </div>

                <div class="services-image">
                    <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2069&q=80"
                        alt="Livreur Noha Transports avec son camion">
                </div>
            </div>
        </div>
    </section>
</div>

{{-- Map --}}
<div id="map">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1930.449417576726!2d-61.044326021596355!3d14.60483839750429!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c6aa15d37fd051d%3A0x5fead3840118fcbe!2sBeBOOSTER!5e0!3m2!1sfr!2sfr!4v1758206451231!5m2!1sfr!2sfr"
        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
@endsection