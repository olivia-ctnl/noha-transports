<?php

namespace Database\Seeders;

use App\Models\Content;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $contents = [
            // ========================================
            // NAVIGATION (components/navigation.blade.php)
            // ========================================
            [
                'key' => 'nav_logo',
                'type' => 'image',
                'value' => null // À remplir plus tard
            ],
            [
                'key' => 'nav_links',
                'type' => 'text',
                'value' => json_encode(['Accueil', 'Qui sommes-nous', 'Nos services', 'Services dédiés', 'Localisation', 'Annuaire'])
            ],
            [
                'key' => 'nav_contact_button',
                'type' => 'text',
                'value' => 'Contactez-nous',
            ],

            // ========================================
            // FOOTER (components/footer.blade.php)
            // ========================================
            [
                'key' => 'footer_company_title',
                'type' => 'text',
                'value' => 'Noha Transports',
            ],
            [
                'key' => 'footer_company_description',
                'type' => 'text',
                'value' => 'Le service qui facilite votre quotidien',
            ],
            [
                'key' => 'footer_social_title',
                'type' => 'text',
                'value' => 'Suivez-nous',
            ],
            [
                'key' => 'footer_social1_url',
                'type' => 'text',
                'value' => '#',
            ],
            [
                'key' => 'footer_social2_url',
                'type' => 'text',
                'value' => '#',
            ],
            [
                'key' => 'footer_social3_url',
                'type' => 'text',
                'value' => '#',
            ],
            [
                'key' => 'footer_contact_title',
                'type' => 'text',
                'value' => 'Contact',
            ],
            [
                'key' => 'footer_phone',
                'type' => 'text',
                'value' => '0696 16 12 77',
            ],
            [
                'key' => 'footer_email',
                'type' => 'text',
                'value' => 'noha.transports@hotmail.com',
            ],
            [
                'key' => 'footer_address',
                'type' => 'text',
                'value' => '12 Rue des Arts et Métiers<br>Immeubles Équinoxes<br>97200 Fort-de-France',
            ],
            [
                'key' => 'footer_legal_title',
                'type' => 'text',
                'value' => 'Pages légales',
            ],
            [
                'key' => 'footer_copyright',
                'type' => 'text',
                'value' => 'Noha Transports © 2025, Tous droits réservés.',
            ],

            // ========================================
            // PAGE ACCUEIL (accueil.blade.php)
            // ========================================
            // Section Hero
            [
                'key' => 'accueil_hero_title',
                'type' => 'text',
                'value' => 'Noha Transports',    
            ],
            [
                'key' => 'accueil_hero_subtitle',
                'type' => 'text',
                'value' => 'Votre solution logistique !',
            ],
            [
                'key' => 'accueil_hero_bg_image',
                'type' => 'image',
                'value' => 'https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80',
            ],

            // Section Qui sommes-nous
            [
                'key' => 'accueil_about_title',
                'type' => 'text',
                'value' => 'Qui sommes-nous ?',
            ],
            [
                'key' => 'accueil_about_description',
                'type' => 'text',
                'value' => 'Nous imaginons un avenir dans lequel il y a une prise en charge approfondie et durable de la personne en perte d\'autonomie.\n\nNoha Transports est une société française qui intègre pleinement le handicap dans ses infrastructures, et également dans le domaine de l\'emploi.',
            ],
            [
                'key' => 'accueil_about_image',
                'type' => 'image',
                'value' => 'https://images.unsplash.com/photo-1566576721346-d4a3b4eaeb55?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2065&q=80'
            ],

            // Section Services
            [
                'key' => 'accueil_services_title',
                'type' => 'text',
                'value' => 'Nos services',
            ],
            [
                'key' => 'accueil_service1_title',
                'type' => 'text',
                'value' => 'Transports de médicaments à domicile',
            ],
            [
                'key' => 'accueil_service1_description',
                'type' => 'text',
                'value' => 'Faites-nous parvenir votre ordonnance, nous nous occupons de l\'acheminement sous 24h.',
            ],
            [
                'key' => 'accueil_service2_title',
                'type' => 'text',
                'value' => 'Gestion de prise de commande en ligne',
            ],
            [
                'key' => 'accueil_service2_description',
                'type' => 'text',
                'value' => 'Une prise commande rapide et efficace pour faciliter votre quotidien.',
            ],
            [
                'key' => 'accueil_services_image',
                'type' => 'image',
                'value' => 'https://images.unsplash.com/photo-1558618666-fcd25c85cd64?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2069&q=80',
            ],

            // Section Services Santé Hero
            [
                'key' => 'accueil_services_sante_title',
                'type' => 'text',
                'value' => 'Services pour les professionnels de santé',
            ],
            [
                'key' => 'accueil_services_sante_description',
                'type' => 'text',
                'value' => 'Besoin de livrer des équipements ou des médicaments en urgence ? Noha Transports est votre partenaire logistique de confiance. Nous garantissons une prise en charge immédiate et un acheminement rapide pour que vous puissiez vous concentrer sur ce qui compte le plus : vos patients.',
            ],

            [
                'key' => 'accueil_services_sante_button',
                'type' => 'text',
                'value' => 'Découvrez nos services',
            ],


            // Section Où nous trouver
            [
                'key' => 'accueil_localisation_iframe',
                'type' => 'text',
                'value' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1930.449417576726!2d-61.044326021596355!3d14.60483839750429!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c6aa15d37fd051d%3A0x5fead3840118fcbe!2sBeBOOSTER!5e0!3m2!1sfr!2sfr!4v1758206451231!5m2!1sfr!2sfr" class="w-full h-full border-0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
            ],

            // ========================================
            // PAGE SERVICES (pages/services.blade.php)
            // ========================================
            // Section Hero
            [
                'key' => 'services_hero_title',
                'type' => 'text',
                'value' => 'Un service de transport fiable et sécurisé pour les professionnels de santé',
            ],
            [
                'key' => 'services_hero_description',
                'type' => 'text',
                'value' => 'Nous comprenons que le transport de médicaments et de produits de santé requiert une attention et une expertise particulières. C\'est pourquoi nous avons développé un service logistique dédié, conçu spécifiquement pour les pharmacies et les professionnels de santé, garantissant la sécurité, la traçabilité et la rapidité de chaque livraison.',
            ],

            // Section Engagements
            [
                'key' => 'services_engagements_title',
                'type' => 'text',
                'value' => 'Nos engagements',
            ],
            // Card 1
            [
                'key' => 'services_engagement1_title',
                'type' => 'text',
                'value' => 'Acheminement rapide et sécurisé',
            ],
            [
                'key' => 'services_engagement1_description',
                'type' => 'text',
                'value' => 'Livraison sous 24h pour les commandes passées par les pharmacies.<br><br>Respect de la chaîne du froid (si applicable, pensez à vérifier ce point avec votre client).<br><br>Véhicules et emballages adaptés pour préserver l\'intégrité des produits.',
            ],
            // Card 2
            [
                'key' => 'services_engagement2_title',
                'type' => 'text',
                'value' => 'Traçabilité complète et en temps réel',
            ],
            [
                'key' => 'services_engagement2_description',
                'type' => 'text',
                'value' => 'Système de suivi en ligne permettant aux pharmaciens de connaître la localisation exacte de leurs livraisons.<br><br>Notifications de statut de livraison (en préparation, en cours de livraison, livrée).<br><br>Preuve de livraison avec signature électronique',
            ],
            // Card 3
            [
                'key' => 'services_engagement3_title',
                'type' => 'text',
                'value' => 'Respect de la confidentialité et des normes sanitaires',
            ],
            [
                'key' => 'services_engagement3_description',
                'type' => 'text',
                'value' => 'Formation du personnel aux bonnes pratiques de distribution (BPD) pour les produits de santé.<br><br>Respect strict de la confidentialité des données et des informations médicales.<br><br>Protocole de désinfection et d\'hygiène rigoureux pour les véhicules et les livreurs.',
            ],

            // Section Fonctionnement
            [
                'key' => 'services_fonctionnement_title',
                'type' => 'text',
                'value' => 'Comment ça marche ?',
            ],
            // Card 1
            [
                'key' => 'services_etape1_title',
                'type' => 'text',
                'value' => 'Passage de la commande',
            ],
            [
                'key' => 'services_etape1_description',
                'type' => 'text',
                'value' => 'Nous saisissons votre commande et vos informations de livraison.',
            ],
            // Card 2
            [
                'key' => 'services_etape2_title',
                'type' => 'text',
                'value' => 'Préparation et prise en charge',
            ],
            [
                'key' => 'services_etape2_description',
                'type' => 'text',
                'value' => 'Nous préparons et prenons en charge les médicaments à la pharmacie.',
            ],
            // Card 3
            [
                'key' => 'services_etape3_title',
                'type' => 'text',
                'value' => 'Livraison',
            ],
            [
                'key' => 'services_etape3_description',
                'type' => 'text',
                'value' => 'Le livreur remet la commande au domicile du patient.',
            ],

            // Section Engagement Social
            [
                'key' => 'services_social_title',
                'type' => 'text',
                'value' => 'Notre engagement social',
            ],
            [
                'key' => 'services_social1_title',
                'type' => 'text',
                'value' => 'Soutien aux patients dépendants',
            ],
            // Card 1
            [
                'key' => 'services_social1_description',
                'type' => 'text',
                'value' => 'Nous mettons en avant l\'aide apportée aux personnes en perte d\'autonomie ou en situation de handicap, en leur facilitant l\'accès aux médicaments essentiels sans qu\'ils aient à se déplacer.',
            ],
            [
                'key' => 'services_social2_title',
                'type' => 'text',
                'value' => 'Soutien à l\'intégration professionnelle',
            ],
            // Card 2
            [
                'key' => 'services_social2_description',
                'type' => 'text',
                'value' => 'Notre société est engagée dans l\'intégration du handicap dans le domaine de l\'emploi, ce qui renforce l\'image de marque de votre client.',
            ],

            // ========================================
            // PAGE ANNUAIRE (pages/annuaire.blade.php)
            // ========================================
            [
                'key' => 'annuaire_hero_title',
                'type' => 'text',
                'value' => 'Annuaire des pharmacies',
            ],
            
            // ========================================
            // MENTIONS LÉGALES (legal/mentions.blade.php)
            // ========================================
            // Section Hero
            [
                'key' => 'mentions_hero_title',
                'type' => 'text',
                'value' => 'Mentions légales',
            ],
            [
                'key' => 'mentions_editeur_title',
                'type' => 'text',
                'value' => '1. Éditeur du site',

            ],
            // Section Éditeur
            [
                'key' => 'mentions_editeur_raison_sociale',
                'type' => 'text',
                'value' => 'Noha Transports',
            ],
            [
                'key' => 'mentions_editeur_capital',
                'type' => 'text',
                'value' => '[Montant en €]',
            ],
            [
                'key' => 'mentions_editeur_siege_social',
                'type' => 'text',
                'value' => '12 Rue des Arts et Métiers Immeubles Équinoxes 97200 Fort-de-France',
            ],
            [
                'key' => 'mentions_editeur_siret',
                'type' => 'text',
                'value' => '[Numéro SIRET]',
            ],
            [
                'key' => 'mentions_editeur_rcs',
                'type' => 'text',
                'value' => '[Ville + numéro RCS]',
            ],
            [
                'key' => 'mentions_editeur_email',
                'type' => 'text',
                'value' => 'noha.transports@hotmail.com',
            ],
            [
                'key' => 'mentions_editeur_telephone',
                'type' => 'text',
                'value' => '0696 16 12 77',
            ],
            // Section Activité et Mission
            [
                'key' => 'mentions_activite_title',
                'type' => 'text',
                'value' => '2. Activité et Mission',

            ],
            [
                'key' => 'mentions_activite_description',
                'type' => 'text',
                'value' => "Noha Transports est spécialisée dans le transport et la logistique de médicaments. Nous agissons comme intermédiaire essentiel pour faciliter la prise en charge d'ordonnances et la livraison de médicaments à domicile pour les citoyens, les aidants et les professionnels de santé.",
            ],
            [
                'key' => 'mentions_activite_services_subtitle',
                'type' => 'text',
                'value' => 'Nos services clés :',
            ],
            [
                'key' => 'mentions_activite_services_list',
                'type' => 'text',
                'value' => json_encode([
                    'Acheminement rapide des colis sous 24h.',
                    'Gestion simplifiée des prises de commande en ligne.',
                ]),
            ],
            // Section RGPD
            [
                'key' => 'mentions_rgpd_title',
                'type' => 'text',
                'value' => '3. Protection des Données Personnelles (RGPD)',

            ],
            [
                'key' => 'mentions_rgpd_description',
                'type' => 'text',
                'value' => 'Conformément au RGPD, vos données sont collectées uniquement pour le traitement des commandes et des demandes de contact. Elles ne sont pas partagées à des fins commerciales sans votre consentement.',
            ],
            [
                'key' => 'mentions_rgpd_droits_subtitle',
                'type' => 'text',
                'value' => 'Vos droits (Accès, Rectification, Suppression) :', 
            ],
            [
                'key' => 'mentions_rgpd_email',
                'type' => 'text', 
                'value' => 'noha.transports@hotmail.com', 
            ],
            [
                'key' => 'mentions_rgpd_adresse',
                'type' => 'text',
                'value' => '12 Rue des Arts et Métiers, Immeubles Équinoxes, 97200 Fort-de-France', 
            ],
            // Section Propriété Intellectuelle
            [
                'key' => 'mentions_propriete_title',
                'type' => 'text',
                'value' => '4. Propriété Intellectuelle',
            ],
            [
                'key' => 'mentions_propriete_description',
                'type' => 'text',
                'value' => 'Tous les éléments du site (textes, images, logos, etc.) sont la propriété exclusive de Noha Transports. Toute reproduction ou utilisation non autorisée est strictement interdite.',
            ],
            // Section Hébergeur
            [
                'key' => 'mentions_hebergeur_title',
                'type' => 'text',
                'value' => '5. Hébergeur',
            ],
            [
                'key' => 'mentions_hebergeur_nom',
                'type' => 'text',
                'value' => '[Nom de l’hébergeur]',
            ],
            [
                'key' => 'mentions_hebergeur_adresse',
                'type' => 'text',
                'value' => '[Adresse complète de l\'hébergeur]',
            ],
            [
                'key' => 'mentions_hebergeur_contact',
                'type' => 'text',
                'value' => '[Numéro de l\'hébergeur]',
            ],
            // Section Responsabilité et Droit Applicable
            [
                'key' => 'mentions_responsabilite_title',
                'type' => 'text',
                'value' => '6. Responsabilité & Droit Applicable',
            ],
            [
                'key' => 'mentions_responsabilite_limitation_title',
                'type' => 'text',
                'value' => 'Limitation de Responsabilité',
            ],
            [
                'key' => 'mentions_responsabilite_limitation_text',
                'type' => 'text',
                'value' => "Noha Transports ne peut être tenu responsable des erreurs, omissions ou dysfonctionnements techniques indépendants de sa volonté, bien que nous assurions la plus grande rigueur dans la mise à jour des informations.",
            ],
            [
                'key' => 'mentions_responsabilite_droit_title',
                'type' => 'text',
                'value' => 'Droit Applicable',
            ],
            [
                'key' => 'mentions_responsabilite_droit_text',
                'type' => 'text',
                'value' => "Les présentes mentions légales sont régies par le droit français. Tout litige non résolu à l'amiable sera soumis aux tribunaux français compétents.",
            ],

            // ========================================
            // POLITIQUE DE CONFIDENTIALITÉ (legal/privacy.blade.php)
            // ========================================
            [
                'key' => 'privacy_hero_title',
                'type' => 'text',
                'value' => 'Politique de confidentialité',
            ],

            // Section Introduction
            [
                'key' => 'privacy_intro_title',
                'type' => 'text',
                'value' => '1. Introduction',
            ],
            [
                'key' => 'privacy_intro_description',
                'type' => 'text',
                'value' => "La présente politique de confidentialité a pour objectif d’informer les utilisateurs de nos services sur la manière dont Noha Transports collecte, utilise, conserve et protège les données personnelles. En utilisant notre site internet et nos services, vous acceptez la présente politique.",
            ],

            // Section Responsable du traitement
            [
                'key' => 'privacy_responsable_title',
                'type' => 'text',
                'value' => '2. Responsable du traitement',
            ],
            [
                'key' => 'privacy_responsable_societe',
                'type' => 'text',
                'value' => 'Noha Transports',
            ],
            [
                'key' => 'privacy_responsable_activite',
                'type' => 'text',
                'value' => "Intermédiaire entre les professionnels de santé et les citoyens pour la gestion d’ordonnances et la livraison de médicaments à domicile.",
            ],
            [
                'key' => 'privacy_responsable_email',
                'type' => 'text',
                'value' => 'noha.transports@hotmail.com',
            ],
            [
                'key' => 'privacy_responsable_adresse',
                'type' => 'text',
                'value' => '12 Rue des Arts et Métiers, Immeubles Équinoxes, 97200 Fort-de-France',
            ],

            // Section Données collectées
            [
                'key' => 'privacy_donnees_title',
                'type' => 'text',
                'value' => '3. Données collectées',
            ],
            [
                'key' => 'privacy_donnees_list',
                'type' => 'text',
                'value' => json_encode([
                    'Données d’identification : nom, prénom, adresse, téléphone, e-mail.',
                    'Données de santé : informations liées aux ordonnances (strict respect du secret professionnel).',
                    'Données de navigation : cookies, adresse IP, données techniques liées à l’utilisation du site.',
                ]),
            ],

            // Section Finalités du traitement
            [
                'key' => 'privacy_finalites_title',
                'type' => 'text',
                'value' => '4. Finalités du traitement',
            ],
            [
                'key' => 'privacy_finalites_list',
                'type' => 'text',
                'value' => json_encode([
                    'Assurer la prise en charge des commandes et livraisons de médicaments à domicile.',
                    'Gérer la relation entre les pharmacies, les aidants et les citoyens.',
                    'Répondre aux demandes via le formulaire de contact.',
                    'Améliorer nos services et assurer le suivi logistique.',
                    'Respecter nos obligations légales et réglementaires.',
                ]),
            ],

            // Section Base légale du traitement
            [
                'key' => 'privacy_base_legale_title',
                'type' => 'text',
                'value' => '5. Base légale du traitement',
            ],
            [
                'key' => 'privacy_base_legale_list',
                'type' => 'text',
                'value' => json_encode([
                    'Exécution d’un contrat (prise en charge et livraison).',
                    'Consentement (pour la collecte via cookies et formulaires).',
                    'Obligations légales en matière de santé et de transport.',
                ]),
            ],

            // Section Durée de conservation
            [
                'key' => 'privacy_conservation_title',
                'type' => 'text',
                'value' => '6. Durée de conservation',
            ],
            [
                'key' => 'privacy_conservation_list',
                'type' => 'text',
                'value' => json_encode([
                    'Données clients : jusqu’à 5 ans maximum après la fin de la relation contractuelle.',
                    'Données de santé : conservées uniquement pour la durée strictement nécessaire au service rendu et traitées avec la plus grande confidentialité.',
                ]),
            ],

            // Section Partage des données & Sécurité
            [
                'key' => 'privacy_partage_title',
                'type' => 'text',
                'value' => '7. Partage des données & Sécurité',
            ],
            [
                'key' => 'privacy_partage_intro',
                'type' => 'text',
                'value' => 'Vos données personnelles peuvent être transmises aux entités suivantes, dans la limite de ce qui est strictement nécessaire pour nos services :',
            ],
            [
                'key' => 'privacy_partage_list',
                'type' => 'text',
                'value' => json_encode([
                    'Nos partenaires de santé (pharmacies) pour la prise en charge d’ordonnances.',
                    'Nos transporteurs pour assurer la livraison.',
                    'Les autorités compétentes en cas d’obligation légale.',
                ]),
            ],
            [
                'key' => 'privacy_partage_footer',
                'type' => 'text',
                'value' => 'Aucune donnée n’est vendue ni transmise à des tiers à des fins commerciales.',
            ],

            // Section Droits des utilisateurs
            [
                'key' => 'privacy_droits_title',
                'type' => 'text',
                'value' => '8. Vos droits (RGPD)',
            ],
            [
                'key' => 'privacy_droits_text',
                'type' => 'text',
                'value' => "Conformément au RGPD, vous disposez notamment du Droit d’accès, de Rectification et d’Effacement (droit à l’oubli).",
            ],
            [
                'key' => 'privacy_droits_email',
                'type' => 'text',
                'value' => 'noha.transports@hotmail.com',
            ],

            // Section Cookies
            [
                'key' => 'privacy_cookies_title',
                'type' => 'text',
                'value' => '9. Cookies',
            ],
            [
                'key' => 'privacy_cookies_text',
                'type' => 'text',
                'value' => 'Notre site utilise des cookies pour améliorer l’expérience utilisateur et analyser la navigation.',
            ],
            [
                'key' => 'privacy_cookies_gestion',
                'type' => 'text',
                'value' => 'Vous pouvez gérer vos préférences directement dans les paramètres de votre navigateur.',
            ],

            // Section Sécurité et Contact
            [
                'key' => 'privacy_securite_title',
                'type' => 'text',
                'value' => '10. Sécurité et Contact',
            ],
            [
                'key' => 'privacy_securite_text',
                'type' => 'text',
                'value' => 'Nous mettons en œuvre des mesures techniques et organisationnelles strictes pour protéger vos données personnelles contre tout accès, utilisation ou divulgation non autorisée.',
            ],
            [
                'key' => 'privacy_modification_text',
                'type' => 'text',
                'value' => 'Nous nous réservons le droit de modifier la présente politique à tout moment. La version mise à jour sera publiée sur notre site avec mention de la date de mise à jour.',
            ],
            [
                'key' => 'privacy_contact_text',
                'type' => 'text',
                'value' => "Pour toute question, veuillez nous écrire à : noha.transports@hotmail.com \n12 Rue des Arts et Métiers, Immeubles Équinoxes, 97200 Fort-de-France",
            ],

            // ========================================
            // CONDITIONS D'UTILISATION (legal/terms.blade.php)
            // ========================================
            [
                'key' => 'terms_hero_title',
                'type' => 'text',
                'value' => 'Conditions Générales d\'Utilisation',
            ],
            // Section Objet des CGU
            [
                'key' => 'cgu_objet_title',
                'type' => 'text',
                'value' => '1. Objet des CGU',
            ],
            [
                'key' => 'cgu_objet_paragraph1',
                'type' => 'text',
                'value' => "Les présentes Conditions Générales d’Utilisation (CGU) définissent les modalités d’accès et d’utilisation du site internet et des services proposés par Noha Transports, intermédiaire entre les professionnels de santé et les citoyens pour la prise en charge d’ordonnances et la livraison de médicaments à domicile.",
            ],
            [
                'key' => 'cgu_objet_paragraph2',
                'type' => 'text',
                'value' => "En accédant au site et en utilisant nos services, l’utilisateur reconnaît avoir pris connaissance et s’engage à respecter les présentes CGU.",
            ],

            // Section Services Proposés et Cibles
            [
                'key' => 'cgu_services_title',
                'type' => 'text',
                'value' => '2. Services proposés et cibles',
            ],
            [
                'key' => 'cgu_services_intro',
                'type' => 'text',
                'value' => "L’entreprise met à disposition des utilisateurs les services suivants :",
            ],
            [
                'key' => 'cgu_services_list',
                'type' => 'text',
                'value' => json_encode([
                    "Un service de prise en charge de commandes auprès de pharmacies partenaires.",
                    "Un service de livraison de médicaments à domicile (délai indicatif de 24h).",
                ]),
            ],
            [
                'key' => 'cgu_services_conclusion',
                'type' => 'text',
                'value' => "Ces services sont principalement destinés aux pharmacies, aidants et citoyens.",
            ],

            // Section Accès au site
            [
                'key' => 'cgu_acces_title',
                'type' => 'text',
                'value' => '3. Accès au site',
            ],
            [
                'key' => 'cgu_acces_text',
                'type' => 'text',
                'value' => "L’accès au site est libre et gratuit pour tout utilisateur disposant d’un accès internet. Tous les frais liés à la connexion (matériel, logiciel, abonnement, etc.) restent à la charge de l’utilisateur.",
            ],

            // Section Responsabilités de l’utilisateur
            [
                'key' => 'cgu_responsibilite_utilisateur_title',
                'type' => 'text',
                'value' => "4. Responsabilités de l’utilisateur",
            ],
            [
                'key' => 'cgu_responsibilite_utilisateur_intro',
                'type' => 'text',
                'value' => "L'utilisateur s'engage notamment à :",
            ],
            [
                'key' => 'cgu_responsibilite_utilisateur_list',
                'type' => 'text',
                'value' => json_encode([
                    "Fournir des informations exactes lors des commandes.",
                    "Respecter la réglementation applicable aux médicaments.",
                    "Ne pas utiliser le site à des fins frauduleuses ou illégales.",
                ]),
            ],

            // Section Responsabilités de l’entreprise
            [
                'key' => 'cgu_responsabilite_entreprise_title',
                'type' => 'text',
                'value' => '5. Responsabilités de Noha Transports',
            ],
            [
                'key' => 'cgu_responsabilite_entreprise_commitments',
                'type' => 'text',
                'value' => json_encode([
                    "Assurer la livraison des médicaments dans les délais annoncés (24h indicatives).",
                    "Garantir la sécurité et la confidentialité des données (cf. Politique de confidentialité).",
                    "Respecter nos valeurs de prise en charge durable des personnes en perte d’autonomie.",
                ]),
            ],
            [
                'key' => 'cgu_responsabilite_entreprise_limitations',
                'type' => 'text',
                'value' => json_encode([
                    "Des retards ou impossibilités de livraison liés à un cas de force majeure.",
                    "D’un usage non conforme des médicaments par le bénéficiaire.",
                    "De l’indisponibilité temporaire du site (maintenance ou panne technique).",
                ]),
            ],

            // Section Commandes et livraisons
            [
                'key' => 'cgu_commandes_title',
                'type' => 'text',
                'value' => '6. Commandes et livraisons',
            ],
            [
                'key' => 'cgu_commandes_text',
                'type' => 'text',
                'value' => "Les commandes sont gérées exclusivement via le site internet auprès de nos pharmacies partenaires. Le délai de livraison de 24 heures est indicatif et sans garantie contractuelle.",
            ],

            // Section Données personnelles
            [
                'key' => 'cgu_donnees_title',
                'type' => 'text',
                'value' => '7. Données personnelles',
            ],
            [
                'key' => 'cgu_donnees_text',
                'type' => 'text',
                'value' => "Dans le cadre de l’utilisation des services, des données personnelles sont collectées et traitées. Veuillez consulter notre Politique de Confidentialité pour les détails sur la collecte et le traitement de vos données.",
            ],

            // Section Propriété intellectuelle et dispositions finales
            [
                'key' => 'cgu_propriete_title',
                'type' => 'text',
                'value' => '8. Propriété Intellectuelle & Dispositions Finales',
            ],
            [
                'key' => 'cgu_propriete_intellectuelle',
                'type' => 'text',
                'value' => "Le site, son contenu, sa structure, ainsi que les marques et logos sont la propriété exclusive de l'entreprise. Toute reproduction non autorisée est strictement interdite.",
            ],
            [
                'key' => 'cgu_propriete_modification',
                'type' => 'text',
                'value' => "L’entreprise se réserve le droit de modifier les présentes CGU à tout moment. Les utilisateurs seront informés de ces modifications via le site internet.",
            ],
            [
                'key' => 'cgu_propriete_droit',
                'type' => 'text',
                'value' => "Les présentes CGU sont régies par le droit français. En cas de litige, compétence exclusive est attribuée aux tribunaux compétents du ressort du siège social de l’entreprise.",
            ],
        ];

        foreach ($contents as $content) {
            Content::updateOrCreate(['key' => $content['key']], $content);
        }
    }
}
