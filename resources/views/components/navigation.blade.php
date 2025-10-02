<nav class="sticky top-0 z-50 bg-white border-b border-gray-200">
    <div class="max-w-7xl mx-auto px-4 flex items-center justify-between h-16">
        <!-- Logo -->
        <a href="{{ url('/') }}" class="flex-shrink-0">
            <img src="{{ asset('images/logo.png') }}" alt="Logo" class="w-36">
        </a>

        <!-- Menu desktop -->
        <ul class="hidden lg:flex space-x-10 items-center">
            <li><a href="{{ url('/') }}" class="text-black hover:text-[#6465a5] font-medium">Accueil</a></li>
            <li><a href="{{ url('/#apropos') }}" class="text-black hover:text-[#6465a5] font-medium">Qui sommes-nous</a>
            </li>
            <li><a href="{{ url('/#services') }}" class="text-black hover:text-[#6465a5] font-medium">Nos services</a>
            </li>
            <li><a href="{{ url('/#services-livraison') }}"
                    class="text-black hover:text-[#6465a5] font-medium">Livraison pour les professionnels de santé</a>
            </li>
            <li><a href="{{ url('/#map') }}" class="text-black hover:text-[#6465a5] font-medium">Localisation</a></li>
            <li>
                <a href="tel:+596696161277"
                    class="bg-[#f05837] hover:bg-[#f28a30] text-white px-4 py-2 rounded-lg font-medium flex items-center gap-2">
                    Contactez-nous <i class="fab fa-whatsapp"></i>
                </a>
            </li>
        </ul>

        <!-- Bouton hamburger -->
        <button id="hamburger"
            class="lg:hidden flex flex-col justify-center items-center w-8 h-8 space-y-1.5 focus:outline-none">
            <span class="block w-6 h-0.5 bg-[#6465a5] transition-all duration-300"></span>
            <span class="block w-6 h-0.5 bg-[#6465a5] transition-all duration-300"></span>
            <span class="block w-6 h-0.5 bg-[#6465a5] transition-all duration-300"></span>
        </button>
    </div>

    <!-- Menu mobile -->
    <div id="mobileMenu" class="hidden md:hidden bg-white border-t border-gray-200">
        <ul class="flex flex-col space-y-4 py-4 px-6">
            <li><a href="{{ url('/') }}" class="text-black hover:text-[#6465a5] font-medium">Accueil</a></li>
            <li><a href="#apropos" class="text-black hover:text-[#6465a5] font-medium">Qui sommes-nous</a></li>
            <li><a href="#services" class="text-black hover:text-[#6465a5] font-medium">Nos services</a></li>
            <li><a href="{{ url('/#services-livraison') }}"
                    class="text-black hover:text-[#6465a5] font-medium">Livraison pour les professionnels de santé</a>
            </li>
            <li><a href="#map" class="text-black hover:text-[#6465a5] font-medium">Localisation</a></li>
            <li>
                <a href="tel:+596696161277"
                    class="bg-[#f05837] hover:bg-[#f28a30] text-white px-4 py-2 rounded-lg font-medium flex items-center gap-2 justify-center">
                    Contactez-nous <i class="fab fa-whatsapp"></i>
                </a>
            </li>
        </ul>
    </div>
</nav>

<script>
    const hamburger = document.getElementById('hamburger');
    const mobileMenu = document.getElementById('mobileMenu');
    const spans = hamburger.querySelectorAll('span');
  
    hamburger.addEventListener('click', () => {
      mobileMenu.classList.toggle('hidden');
  
      // Animation hamburger -> croix
      spans[0].classList.toggle('rotate-45');
      spans[0].classList.toggle('translate-y-2');
      spans[1].classList.toggle('opacity-0');
      spans[2].classList.toggle('-rotate-45');
      spans[2].classList.toggle('-translate-y-2');
    });
  
    // Ferme menu au resize desktop
    window.addEventListener('resize', () => {
      if (window.innerWidth >= 1024) {
        mobileMenu.classList.add('hidden');
        spans.forEach(span => {
          span.classList.remove('rotate-45', 'translate-y-2', 'opacity-0', '-rotate-45', '-translate-y-2');
        });
      }
    });
</script>