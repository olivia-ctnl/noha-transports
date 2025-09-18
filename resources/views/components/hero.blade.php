<section class="hero">
    <div class="hero-content">
        <h1 class="hero-title">Noha Transports</h1>
        <p class="hero-subtitle">Votre solution logistique !</p>
    </div>
</section>

{{-- CSS --}}
<style>
    /* Hero Section */
    .hero {
        position: relative;
        width: 100%;
        height: 100vh;
        min-height: 600px;
        background-image: url('https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
    }

    /* Overlay sombre */
    .hero::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: rgba(0, 0, 0, 0.6);
        z-index: 1;
    }

    /* Contenu du hero */
    .hero-content {
        position: relative;
        z-index: 2;
        text-align: center;
        color: var(--white);
        max-width: 800px;
        padding: 0 20px;
    }

    .hero-title {
        font-size: 4rem;
        font-weight: 700;
        margin-bottom: 20px;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        line-height: 1.1;
    }

    .hero-subtitle {
        font-size: 1.5rem;
        font-weight: 400;
        text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
        line-height: 1.4;
    }

    /* Responsive Design */
    @media (max-width: 1200px) {
        .hero-title {
            font-size: 3.5rem;
        }

        .hero-subtitle {
            font-size: 1.3rem;
        }
    }

    @media (max-width: 768px) {
        .hero {
            height: 100vh;
            min-height: 500px;
        }

        .hero-content {
            max-width: 90%;
            padding: 0 15px;
        }

        .hero-title {
            font-size: 2.5rem;
            margin-bottom: 15px;
            line-height: 1.2;
        }

        .hero-subtitle {
            font-size: 1.1rem;
            line-height: 1.3;
        }
    }

    @media (max-width: 480px) {
        .hero {
            height: 100vh;
            min-height: 450px;
        }

        .hero-title {
            font-size: 2rem;
            margin-bottom: 12px;
        }

        .hero-subtitle {
            font-size: 1rem;
        }
    }

    @media (max-width: 360px) {
        .hero-title {
            font-size: 1.8rem;
        }

        .hero-subtitle {
            font-size: 0.9rem;
        }
    }

    /* Animation d'entrée */
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

    .hero-content {
        animation: fadeInUp 1s ease-out;
    }

    .hero-title {
        animation: fadeInUp 1s ease-out 0.2s both;
    }

    .hero-subtitle {
        animation: fadeInUp 1s ease-out 0.4s both;
    }
</style>