<footer class="bg-[#6465a5] text-white pt-16 pb-10 sm:pt-12 sm:pb-8">
    <div class="max-w-6xl mx-auto px-4 sm:px-6">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-10 sm:gap-8 animate-fadeInUp">

            {{-- Section Noha Transports --}}
            <div class="animate-fadeInUp delay-200">
                <h3 class="text-xl sm:text-lg font-semibold mb-4">Noha Transports</h3>
                <p class="text-lg sm:text-sm opacity-90">
                    Le service qui facilite votre quotidien
                </p>
            </div>

            {{-- Section Suivez-nous --}}
            <div class="animate-fadeInUp delay-200">
                <h4 class="text-lg sm:text-base font-semibold mb-4">Suivez-nous</h4>
                <div class="flex gap-4 sm:gap-3">
                    <a href="#" class="text-white text-2xl sm:text-xl hover:opacity-70" aria-label="LinkedIn">
                        <i class="fab fa-linkedin"></i>
                    </a>
                    <a href="#" class="text-white text-2xl sm:text-xl hover:opacity-70" aria-label="Instagram">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" class="text-white text-2xl sm:text-xl hover:opacity-70" aria-label="Facebook">
                        <i class="fab fa-facebook"></i>
                    </a>
                </div>
            </div>

            {{-- Section Contact --}}
            <div class="animate-fadeInUp delay-400">
                <h4 class="text-lg sm:text-base font-semibold mb-4">Contact</h4>
                <div class="flex items-start gap-3 mb-3 text-base sm:text-sm">
                    <i class="fas fa-phone mt-1"></i>
                    <span>0696 16 12 77</span>
                </div>
                <div class="flex items-start gap-3 mb-3 text-base sm:text-sm">
                    <i class="fas fa-envelope mt-1"></i>
                    <span>noha.transports@hotmail.com</span>
                </div>
                <div class="flex items-start gap-3 text-base sm:text-sm">
                    <i class="fas fa-map-marker-alt mt-1"></i>
                    <span>12 Rue des Arts et Métiers<br>Immeubles Équinoxes<br>97200 Fort-de-France</span>
                </div>
            </div>

            {{-- Section Pages légales --}}
            <div class="animate-fadeInUp delay-600">
                <h4 class="text-lg sm:text-base font-semibold mb-4">Pages légales</h4>
                <a href="{{ route('mentions.legales') }}"
                    class="block text-base sm:text-sm mb-2 hover:opacity-70">Mentions légales</a>
                <a href="{{ route('politique.confidentialite') }}"
                    class="block text-base sm:text-sm mb-2 hover:opacity-70">Politique de confidentialité</a>
                <a href="{{ route('conditions.utilisations') }}"
                    class="block text-base sm:text-sm hover:opacity-70">Conditions Générales d'Utilisation</a>
            </div>

        </div>
    </div>
</footer>

{{-- Copyright --}}
<div class="bg-[#f05837] py-5 sm:py-4">
    <div class="max-w-6xl mx-auto px-4 sm:px-6">
        <p class="text-white text-sm sm:text-xs">
            Noha Transports © 2025, Tous droits réservés.
        </p>
    </div>
</div>