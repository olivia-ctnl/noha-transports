<!-- Footer principal -->
<footer class="footer">
    <div class="footer-container">
        <div class="footer-content">
            <!-- Section Noha Transports -->
            <div class="footer-brand">
                <h3>Noha Transports</h3>
                <p>Le service qui facilite votre quotidien</p>
            </div>

            <!-- Section Suivez-nous -->
            <div class="footer-social">
                <h4>Suivez-nous</h4>
                <div class="social-icons">
                    <a href="#" class="social-icon" aria-label="LinkedIn">
                        <i class="fab fa-linkedin"></i>
                    </a>
                    <a href="#" class="social-icon" aria-label="Instagram">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" class="social-icon" aria-label="Facebook">
                        <i class="fab fa-facebook"></i>
                    </a>
                </div>
            </div>

            <!-- Section Contact -->
            <div class="footer-contact">
                <h4>Contact</h4>
                <div class="contact-item">
                    <i class="fas fa-phone contact-icon"></i>
                    <span>Téléphone</span>
                </div>
                <div class="contact-item">
                    <i class="fas fa-envelope contact-icon"></i>
                    <span>Email</span>
                </div>
                <div class="contact-item">
                    <i class="fas fa-map-marker-alt contact-icon"></i>
                    <span>Adresse</span>
                </div>
            </div>

            <!-- Section Pages légales -->
            <div class="footer-legal">
                <h4>Pages légales</h4>
                <a href="#" class="legal-link">Mentions légales</a>
                <a href="#" class="legal-link">Politique de confidentialité</a>
                <a href="#" class="legal-link">Conditions Générales d'Utilisation</a>
            </div>
        </div>
    </div>
</footer>

<!-- Section Copyright -->
<div class="footer-copyright">
    <div class="footer-container">
        <p>Noha Transports © 2025, Tous droits réservés.</p>
    </div>
</div>

<style>
    /* Footer principal */
    .footer {
        background-color: var(--blue);
        padding: 60px 0 40px;
    }

    .footer-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }

    .footer-content {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr;
        gap: 40px;
        color: var(--white);
    }

    /* Section Noha Transports */
    .footer-brand h3 {
        font-size: 1.5rem;
        font-weight: 600;
        margin-bottom: 15px;
        line-height: 1.2;
    }

    .footer-brand p {
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        opacity: 0.9;
    }

    /* Section Suivez-nous */
    .footer-social h4 {
        font-size: 1.25rem;
        font-weight: 600;
        margin-bottom: 20px;
        line-height: 1.2;
    }

    .social-icons {
        display: flex;
        gap: 15px;
    }

    .social-icon {
        color: var(--white);
        font-size: 1.5rem;
        text-decoration: none;
        transition: opacity 0.3s ease;
    }

    .social-icon:hover {
        opacity: 0.7;
    }

    /* Section Contact */
    .footer-contact h4 {
        font-size: 1.25rem;
        font-weight: 600;
        margin-bottom: 20px;
        line-height: 1.2;
    }

    .contact-item {
        display: flex;
        align-items: center;
        gap: 12px;
        margin-bottom: 15px;
        font-size: 1rem;
        line-height: 1.4;
    }

    .contact-item:last-child {
        margin-bottom: 0;
    }

    .contact-icon {
        font-size: 1.1rem;
        width: 16px;
        flex-shrink: 0;
    }

    /* Section Pages légales */
    .footer-legal h4 {
        font-size: 1.25rem;
        font-weight: 600;
        margin-bottom: 20px;
        line-height: 1.2;
    }

    .legal-link {
        display: block;
        color: var(--white);
        text-decoration: none;
        font-size: 1rem;
        line-height: 1.4;
        margin-bottom: 10px;
        transition: opacity 0.3s ease;
    }

    .legal-link:hover {
        opacity: 0.7;
    }

    .legal-link:last-child {
        margin-bottom: 0;
    }

    /* Section Copyright */
    .footer-copyright {
        background-color: var(--dark-orange);
        padding: 20px 0;
        text-align: left;
    }

    .footer-copyright .footer-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }

    .footer-copyright p {
        color: var(--white);
        font-size: 0.95rem;
        font-weight: 400;
        line-height: 1.4;
    }

    /* Responsive Design */
    @media (max-width: 1024px) {
        .footer {
            padding: 50px 0 35px;
        }

        .footer-content {
            gap: 35px;
        }

        .footer-brand h3 {
            font-size: 1.4rem;
        }

        .footer-social h4,
        .footer-contact h4,
        .footer-legal h4 {
            font-size: 1.2rem;
        }
    }

    @media (max-width: 768px) {
        .footer {
            padding: 40px 0 30px;
        }

        .footer-container {
            padding: 0 15px;
        }

        .footer-content {
            grid-template-columns: 1fr;
            gap: 30px;
            text-align: left;
        }

        .footer-brand h3 {
            font-size: 1.3rem;
            margin-bottom: 12px;
        }

        .footer-brand p {
            font-size: 0.95rem;
        }

        .footer-social h4,
        .footer-contact h4,
        .footer-legal h4 {
            font-size: 1.1rem;
            margin-bottom: 15px;
        }

        .social-icons {
            gap: 12px;
        }

        .social-icon {
            font-size: 1.4rem;
        }

        .contact-item {
            margin-bottom: 12px;
            font-size: 0.95rem;
        }

        .legal-link {
            font-size: 0.95rem;
            margin-bottom: 8px;
        }

        .footer-copyright {
            padding: 18px 0;
        }

        .footer-copyright p {
            font-size: 0.9rem;
            text-align: left;
        }
    }

    @media (max-width: 480px) {
        .footer {
            padding: 35px 0 25px;
        }

        .footer-container,
        .footer-copyright .footer-container {
            padding: 0 12px;
        }

        .footer-content {
            gap: 25px;
        }

        .footer-brand h3 {
            font-size: 1.2rem;
        }

        .footer-brand p {
            font-size: 0.9rem;
        }

        .footer-social h4,
        .footer-contact h4,
        .footer-legal h4 {
            font-size: 1rem;
        }

        .social-icon {
            font-size: 1.3rem;
        }

        .contact-item {
            font-size: 0.9rem;
            gap: 10px;
        }

        .legal-link {
            font-size: 0.9rem;
        }

        .footer-copyright {
            padding: 15px 0;
        }

        .footer-copyright p {
            font-size: 0.85rem;
        }
    }

    /* Animation d'entrée */
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .footer-brand,
    .footer-social,
    .footer-contact,
    .footer-legal {
        animation: fadeInUp 0.6s ease-out both;
    }

    .footer-social {
        animation-delay: 0.1s;
    }

    .footer-contact {
        animation-delay: 0.2s;
    }

    .footer-legal {
        animation-delay: 0.3s;
    }
</style>