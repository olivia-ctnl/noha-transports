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

{{-- CSS --}}
<style>
    /* Section Services */
    .services {
        padding: 80px 0;
        background-color: var(--white);
    }

    .services-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }

    .services-content {
        display: flex;
        align-items: center;
        gap: 60px;
    }

    /* Contenu texte */
    .services-text {
        flex: 1;
        min-width: 0;
    }

    .services-title {
        font-size: 2.5rem;
        font-weight: 600;
        color: var(--dark-orange);
        margin-bottom: 40px;
        line-height: 1.2;
    }

    .service-item {
        margin-bottom: 35px;
    }

    .service-item:last-child {
        margin-bottom: 0;
    }

    .service-subtitle {
        font-size: 1.5rem;
        font-weight: 600;
        color: var(--blue);
        margin-bottom: 10px;
        line-height: 1.3;
    }

    .service-description {
        font-size: 1rem;
        font-weight: 400;
        color: var(--black);
        line-height: 1.6;
        text-align: justify;
    }

    /* Image */
    .services-image {
        flex: 1;
        min-width: 0;
    }

    .services-image img {
        width: 100%;
        height: auto;
        border-radius: 12px;
        object-fit: cover;
        aspect-ratio: 16/10;
    }

    /* Responsive Design */
    @media (max-width: 1024px) {
        .services {
            padding: 60px 0;
        }

        .services-content {
            gap: 40px;
        }

        .services-title {
            font-size: 2.2rem;
            margin-bottom: 35px;
        }

        .service-subtitle {
            font-size: 1.4rem;
        }

        .service-description {
            font-size: 0.95rem;
        }
    }

    @media (max-width: 768px) {
        .services {
            padding: 50px 0;
        }

        .services-container {
            padding: 0 15px;
        }

        .services-content {
            flex-direction: column;
            gap: 30px;
            text-align: left;
        }

        .services-image {
            order: 1;
            width: 100%;
        }

        .services-text {
            order: 2;
            width: 100%;
        }

        .services-title {
            font-size: 2rem;
            margin-bottom: 30px;
        }

        .service-item {
            margin-bottom: 30px;
        }

        .service-subtitle {
            font-size: 1.3rem;
            margin-bottom: 8px;
        }

        .service-description {
            font-size: 0.95rem;
            line-height: 1.7;
            text-align: left;
        }
    }

    @media (max-width: 480px) {
        .services {
            padding: 40px 0;
        }

        .services-container {
            padding: 0 12px;
        }

        .services-content {
            gap: 25px;
        }

        .services-title {
            font-size: 1.75rem;
            margin-bottom: 25px;
        }

        .service-item {
            margin-bottom: 25px;
        }

        .service-subtitle {
            font-size: 1.2rem;
            margin-bottom: 6px;
        }

        .service-description {
            font-size: 0.9rem;
            line-height: 1.6;
        }
    }

    @media (max-width: 360px) {
        .services-title {
            font-size: 1.5rem;
        }

        .service-subtitle {
            font-size: 1.1rem;
        }

        .service-description {
            font-size: 0.85rem;
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

    .services-text {
        animation: fadeInLeft 0.8s ease-out;
    }

    .services-image {
        animation: fadeInRight 0.8s ease-out 0.2s both;
    }

    @media (max-width: 768px) {
        .services-image {
            animation: fadeInUp 0.8s ease-out;
        }

        .services-text {
            animation: fadeInUp 0.8s ease-out 0.2s both;
        }
    }

    .service-item {
        animation: fadeInUp 0.6s ease-out both;
    }

    .service-item:nth-child(2) {
        animation-delay: 0.1s;
    }

    .service-item:nth-child(3) {
        animation-delay: 0.2s;
    }
</style>