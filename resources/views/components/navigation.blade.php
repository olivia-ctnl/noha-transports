<nav class="navigation">
    <div class="nav-container">
        <!-- Logo -->
        <a href="#" class="logo">Noha Transports</a>

        <!-- Menu desktop -->
        <ul class="nav-menu">
            <li class="nav-item">
                <a href="#" class="nav-link">Accueil</a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/#apropos') }}" class="nav-link">Qui sommes-nous</a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/#services') }}" class="nav-link">Nos services</a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/#map') }}" class="nav-link">Localisation</a>
            </li>
            <li class="nav-item">
                <a href="#" class="contact-btn">
                    Contactez-nous
                    <i class="fab fa-whatsapp"></i>
                </a>
            </li>
        </ul>

        <!-- Bouton hamburger -->
        <button class="hamburger" id="hamburger">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>

    <!-- Menu mobile -->
    <div class="mobile-menu" id="mobileMenu">
        <ul class="mobile-nav-list">
            <li class="mobile-nav-item">
                <a href="#" class="mobile-nav-link">Accueil</a>
            </li>
            <li class="mobile-nav-item">
                <a href="#apropos" class="mobile-nav-link">Qui sommes-nous</a>
            </li>
            <li class="mobile-nav-item">
                <a href="#services" class="mobile-nav-link">Nos services</a>
            </li>
            <li class="mobile-nav-item">
                <a href="#map" class="mobile-nav-link">Localisation</a>
            </li>
            <li class="mobile-nav-item">
                <a href="#" class="mobile-contact-btn">
                    Contactez-nous
                    <i class="fab fa-whatsapp"></i>
                </a>
            </li>
        </ul>
    </div>
</nav>

{{-- CSS --}}
<style>
    /* Navigation principale */
    .navigation {
        background-color: var(--white);
        border-bottom: 1px solid #e5e7eb;
        position: sticky;
        top: 0;
        z-index: 1000;
    }

    .nav-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        height: 70px;
    }

    /* Logo */
    .logo {
        font-size: 24px;
        font-weight: 600;
        color: #000000;
        text-decoration: none;
        left: 20px;
    }

    /* Menu desktop */
    .nav-menu {
        display: flex;
        list-style: none;
        gap: 40px;
        align-items: center;
    }

    .nav-link {
        color: var(--black);
        text-decoration: none;
        font-weight: 500;
        font-size: 16px;
        padding: 10px 0;
        transition: color 0.3s ease;
    }

    .nav-link:hover {
        color: var(--blue);
    }

    /* Bouton contact */
    .contact-btn {
        background-color: var(--dark-orange);
        color: var(--white);
        padding: 12px 20px;
        border-radius: 8px;
        text-decoration: none;
        font-weight: 500;
        font-size: 16px;
        display: flex;
        align-items: center;
        gap: 8px;
        transition: background-color 0.3s ease;
    }

    .contact-btn:hover {
        background-color: var(--orange);
    }

    .contact-btn i {
        font-size: 18px;
    }

    /* Menu hamburger */
    .hamburger {
        display: none;
        flex-direction: column;
        cursor: pointer;
        background: none;
        border: none;
        padding: 5px;
        right: 20px;
    }

    .hamburger span {
        width: 25px;
        height: 3px;
        background-color: var(--blue);
        margin: 3px 0;
        transition: 0.3s;
        border-radius: 2px;
    }

    /* Menu mobile */
    .mobile-menu {
        display: none;
        position: absolute;
        top: 100%;
        left: 0;
        right: 0;
        background-color: var(--white);
        border-bottom: 1px solid #e5e7eb;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .mobile-menu.active {
        display: block;
    }

    .mobile-nav-list {
        list-style: none;
        padding: 20px;
    }

    .mobile-nav-item {
        margin-bottom: 15px;
    }

    .mobile-nav-link {
        color: var(--black);
        text-decoration: none;
        font-weight: 500;
        font-size: 16px;
        display: block;
        padding: 10px 0;
        border-bottom: 1px solid #f3f4f6;
    }

    .mobile-nav-link:hover {
        color: var(--blue);
    }

    .mobile-contact-btn {
        background-color: var(--dark-orange);
        color: var(--white);
        padding: 12px 20px;
        border-radius: 8px;
        text-decoration: none;
        font-weight: 500;
        font-size: 16px;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        margin-top: 10px;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .nav-menu {
            display: none;
        }

        .hamburger {
            display: flex;
        }

        .nav-container {
            height: 60px;
            padding: 0 20px;
        }

        .logo {
            font-size: 20px;
        }
    }

    /* Animation du hamburger */
    .hamburger.active span:nth-child(1) {
        transform: rotate(-45deg) translate(-5px, 6px);
    }

    .hamburger.active span:nth-child(2) {
        opacity: 0;
    }

    .hamburger.active span:nth-child(3) {
        transform: rotate(45deg) translate(-5px, -6px);
    }
</style>

{{-- JavaScript --}}
<script>
    // Toggle menu mobile
    const hamburger = document.getElementById('hamburger');
    const mobileMenu = document.getElementById('mobileMenu');

    hamburger.addEventListener('click', function() {
        hamburger.classList.toggle('active');
        mobileMenu.classList.toggle('active');
    });

    // Fermer le menu mobile quand on clique sur un lien
    const mobileLinks = document.querySelectorAll('.mobile-nav-link, .mobile-contact-btn');
    mobileLinks.forEach(link => {
        link.addEventListener('click', function() {
            hamburger.classList.remove('active');
            mobileMenu.classList.remove('active');
        });
    });

    // Fermer le menu mobile quand on redimensionne vers desktop
    window.addEventListener('resize', function() {
        if (window.innerWidth > 768) {
            hamburger.classList.remove('active');
            mobileMenu.classList.remove('active');
        }
    });
</script>