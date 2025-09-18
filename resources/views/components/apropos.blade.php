<section class="apropos">
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

{{-- CSS --}}
<style>
    /* Section À propos */
    .apropos {
        padding: 80px 0;
        background-color: var(--white);
    }

    .apropos-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }

    .apropos-content {
        display: flex;
        align-items: center;
        gap: 60px;
    }

    /* Image */
    .apropos-image {
        flex: 1;
        min-width: 0;
    }

    .apropos-image img {
        width: 100%;
        height: auto;
        border-radius: 12px;
        object-fit: cover;
        aspect-ratio: 16/10;
    }

    /* Contenu texte */
    .apropos-text {
        flex: 1;
        min-width: 0;
    }

    .apropos-title {
        font-size: 2.5rem;
        font-weight: 600;
        color: var(--dark-orange);
        margin-bottom: 30px;
        line-height: 1.2;
    }

    .apropos-description {
        font-size: 1.125rem;
        font-weight: 400;
        color: var(--black);
        line-height: 1.6;
        text-align: justify;
    }

    /* Responsive Design */
    @media (max-width: 1024px) {
        .apropos {
            padding: 60px 0;
        }

        .apropos-content {
            gap: 40px;
        }

        .apropos-title {
            font-size: 2.2rem;
        }

        .apropos-description {
            font-size: 1.1rem;
        }
    }

    @media (max-width: 768px) {
        .apropos {
            padding: 50px 0;
        }

        .apropos-container {
            padding: 0 15px;
        }

        .apropos-content {
            flex-direction: column;
            gap: 30px;
            text-align: left;
        }

        .apropos-image {
            order: 1;
            width: 100%;
        }

        .apropos-text {
            order: 2;
            width: 100%;
        }

        .apropos-title {
            font-size: 2rem;
            margin-bottom: 20px;
        }

        .apropos-description {
            font-size: 1rem;
            line-height: 1.7;
            text-align: left;
        }
    }

    @media (max-width: 480px) {
        .apropos {
            padding: 40px 0;
        }

        .apropos-container {
            padding: 0 12px;
        }

        .apropos-content {
            gap: 25px;
        }

        .apropos-title {
            font-size: 1.75rem;
            margin-bottom: 18px;
        }

        .apropos-description {
            font-size: 0.95rem;
            line-height: 1.6;
        }
    }

    @media (max-width: 360px) {
        .apropos-title {
            font-size: 1.5rem;
        }

        .apropos-description {
            font-size: 0.9rem;
        }
    }

    /* Animation d'entrée */
    @keyframes fadeInLeft {
        from {
            opacity: 0;
            transform: translateX(-30px);
        }

        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    @keyframes fadeInRight {
        from {
            opacity: 0;
            transform: translateX(30px);
        }

        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .apropos-image {
        animation: fadeInLeft 0.8s ease-out;
    }

    .apropos-text {
        animation: fadeInRight 0.8s ease-out 0.2s both;
    }

    @media (max-width: 768px) {
        .apropos-image {
            animation: fadeInUp 0.8s ease-out;
        }

        .apropos-text {
            animation: fadeInUp 0.8s ease-out 0.2s both;
        }
    }
</style>