<nav class="navigation">
    <div class="nav-container">
        <!-- Logo -->
        <a href="{{ url('/') }}" class="logo"><img src="{{asset('images/logo.png')}}" alt="Logo" width="150"></a>

        <!-- Menu desktop -->
        <ul class="nav-menu">
            <li class="nav-item">
                <a href="{{ url('/') }}" class="nav-link">Accueil</a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/#apropos') }}" class="nav-link">Qui sommes-nous</a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/#services') }}" class="nav-link">Nos services</a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/#services-livraison') }}" class="nav-link">Livraison pour les profesionnels de
                    santé</a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/#map') }}" class="nav-link">Localisation</a>
            </li>
            <li class="nav-item">
                <a href="tel:+596696161277" class="contact-btn">
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
                <a href="{{ url('/') }}" class="mobile-nav-link">Accueil</a>
            </li>
            <li class="mobile-nav-item">
                <a href="#apropos" class="mobile-nav-link">Qui sommes-nous</a>
            </li>
            <li class="mobile-nav-item">
                <a href="#services" class="mobile-nav-link">Nos services</a>
            </li>
            <li class="mobile-nav-item">
                <a href="{{ url('/#services-livraison') }}" class="mobile-nav-link">Livraison pour les profesionnels de
                    santé</a>
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