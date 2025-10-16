<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
                'label' => 'Logo de navigation',
                'description' => 'Logo affiché dans la barre de navigation',
                'value' => null // À remplir plus tard
            ],
            [
                'key' => 'nav_links',
                'type' => 'text',
                'label' => 'Liensde navigation',
                'description' => 'Liens de la barre de navigation',
                'value' => json_encode(['Accueil', 'Qui sommes-nous', 'Nos services', 'Services dédiés', 'Localisation', 'Annuaire'])
            ],
            [
                'key' => 'nav_contact_button',
                'type' => 'text',
                'label' => 'Bouton de contact',
                'description' => 'Texte du bouton "Contactez-nous"',
                'value' => 'Contactez-nous',
            ],

            // ========================================
            // FOOTER (components/footer.blade.php)
            // ========================================
            [
                'key' => 'footer_company_title',
                'type' => 'text',
                'label' => 'Titre Entreprise Footer',
                'description' => 'Titre de la section entreprise dans le footer',
                'value' => 'Noha Transports',
            ],
            [
                'key' => 'footer_company_description',
                'type' => 'text',
                'label' => 'Description Entreprise Footer',
                'description' => 'Description de l\'entreprise dans le footer',
                'value' => 'Le service qui facilite votre quotidien',
            ],
            [
                'key' => 'footer_social_title',
                'type' => 'text',
                'label' => 'Titre Réseaux Sociaux',
                'description' => 'Titre de la section réseaux sociaux',
                'value' => 'Suivez-nous',
            ],
            [
                'key' => 'footer_social1_url',
                'type' => 'text',
                'label' => 'Lien LinkedIn',
                'description' => 'URL du profil LinkedIn',
                'value' => '#',
            ],
            [
                'key' => 'footer_social2_url',
                'type' => 'text',
                'label' => 'Lien Instagram',
                'description' => 'URL du profil Instagram',
                'value' => '#',
            ],
            [
                'key' => 'footer_social3_url',
                'type' => 'text',
                'label' => 'Lien Facebook',
                'description' => 'URL du profil Facebook',
                'value' => '#',
            ],
            [
                'key' => 'footer_contact_title',
                'type' => 'text',
                'label' => 'Titre Contact Footer',
                'description' => 'Titre de la section contact',
                'value' => 'Contact',
            ],
            [
                'key' => 'footer_phone',
                'type' => 'text',
                'label' => 'Téléphone',
                'description' => 'Numéro de téléphone',
                'value' => '0696 16 12 77',
            ],
            [
                'key' => 'footer_email',
                'type' => 'text',
                'label' => 'Email',
                'description' => 'Adresse email de contact',
                'value' => 'noha.transports@hotmail.com',
            ],
            [
                'key' => 'footer_address',
                'type' => 'text',
                'label' => 'Adresse',
                'description' => 'Adresse physique de l\'entreprise',
                'value' => '12 Rue des Arts et Métiers<br>Immeubles Équinoxes<br>97200 Fort-de-France',
            ],
            [
                'key' => 'footer_legal_title',
                'type' => 'text',
                'label' => 'Titre Pages Légales',
                'description' => 'Titre de la section pages légales',
                'value' => 'Pages légales',
            ],
            [
                'key' => 'footer_copyright',
                'type' => 'text',
                'label' => 'Copyright',
                'description' => 'Texte de copyright',
                'value' => 'Noha Transports © 2025, Tous droits réservés.',
            ],

            // ========================================
            // PAGE ACCUEIL (accueil.blade.php)
            // ========================================
            // Section Hero
            [
                'key' => 'accueil_hero_title',
                'type' => 'text',
                'label' => 'Titre principal Hero',
                'description' => 'Titre principal de la section hero',
                'value' => 'Noha Transports',    
            ],
            [
                'key' => 'accueil_hero_subtitle',
                'type' => 'text',
                'label' => 'Phrase d\'accroche ',
                'description' => 'Phrase d\'accroche de la section hero',
                'value' => 'Votre solution logistique !',
            ],
            [
                'key' => 'accueil_hero_bg_image',
                'type' => 'image',
                'label' => 'Image de fond Hero',
                'description' => 'Image de fond de la section hero de la page d\'accueil',
                'value' => 'https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80',
            ],

            // Section Qui sommes-nous
            [
                'key' => 'accueil_about_title',
                'type' => 'text',
                'label' => 'Titre À propos',
                'description' => 'Titre de la section "Qui sommes-nous ?"',
                'value' => 'Qui sommes-nous ?',
            ],
            [
                'key' => 'accueil_about_description',
                'type' => 'text',
                'label' => 'Texte de présentation',
                'description' => 'Description de l\'entreprise',
                'value' => 'Nous imaginons un avenir dans lequel il y a une prise en charge approfondie et durable de la personne en perte d\'autonomie.\n\nNoha Transports est une société française qui intègre pleinement le handicap dans ses infrastructures, et également dans le domaine de l\'emploi.',
            ],
            [
                'key' => 'accueil_about_image',
                'type' => 'image',
                'label' => 'Image À propos',
                'description' => 'Image de la section "Qui sommes-nous ?"',
                'value' => 'https://images.unsplash.com/photo-1566576721346-d4a3b4eaeb55?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2065&q=80'
            ],

            // Section Services
            [
                'key' => 'accueil_services_title',
                'type' => 'text',
                'label' => 'Titre Services',
                'description' => 'Titre de la section "Nos services"',
                'value' => 'Nos services',
            ],
            [
                'key' => 'accueil_service1_title',
                'type' => 'text',
                'label' => 'Titre du service 1',
                'description' => 'Titre du premier service',
                'value' => 'Transports de médicaments à domicile',
            ],
            [
                'key' => 'accueil_service1_description',
                'type' => 'text',
                'label' => 'Description du service 1',
                'description' => 'Description du premier service',
                'value' => 'Faites-nous parvenir votre ordonnance, nous nous occupons de l\'acheminement sous 24h.',
            ],
            [
                'key' => 'accueil_service2_title',
                'type' => 'text',
                'label' => 'Titre du service 2',
                'description' => 'Titre du deuxième service',
                'value' => 'Gestion de prise de commande en ligne',
            ],
            [
                'key' => 'accueil_service2_description',
                'type' => 'text',
                'label' => 'Description du service 2',
                'description' => 'Description du deuxième service',
                'value' => 'Une prise commande rapide et efficace pour faciliter votre quotidien.',
            ],
            [
                'key' => 'accueil_services_image',
                'type' => 'image',
                'label' => 'Image Services',
                'description' => 'Image de la section services',
                'value' => 'https://images.unsplash.com/photo-1558618666-fcd25c85cd64?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2069&q=80',
            ],

            // Section Services Santé Hero
            [
                'key' => 'accueil_services_sante_title',
                'type' => 'text',
                'label' => 'Titre Services dédiés',
                'description' => 'Titre de la section services pour professionnels de santé',
                'value' => 'Services pour les professionnels de santé',
            ],
            [
                'key' => 'accueil_services_sante_description',
                'type' => 'text',
                'label' => 'Texte Services Santé',
                'description' => 'Description des services pour professionnels de santé',
                'value' => 'Besoin de livrer des équipements ou des médicaments en urgence ? Noha Transports est votre partenaire logistique de confiance. Nous garantissons une prise en charge immédiate et un acheminement rapide pour que vous puissiez vous concentrer sur ce qui compte le plus : vos patients.',
            ],

            [
                'key' => 'accueil_services_sante_button',
                'type' => 'text',
                'label' => 'Bouton Services Santé',
                'description' => 'Texte du bouton de la section services santé',
                'value' => 'Découvrez nos services',
            ],


            // Section Où nous trouver
            [
                'key' => 'accueil_localisation_iframe',
                'type' => 'text',
                'label' => 'Code iframe Google Maps',
                'description' => 'Code iframe de la carte Google Maps',
                'value' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1930.449417576726!2d-61.044326021596355!3d14.60483839750429!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c6aa15d37fd051d%3A0x5fead3840118fcbe!2sBeBOOSTER!5e0!3m2!1sfr!2sfr!4v1758206451231!5m2!1sfr!2sfr" class="w-full h-full border-0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
            ],

            // ========================================
            // PAGE SERVICES (pages/services.blade.php)
            // ========================================
            // Section Hero
            [
                'key' => 'services_hero_title',
                'type' => 'text',
                'label' => 'Titre Hero Services',
                'description' => 'Titre principal de la page services',
                'value' => 'Un service de transport fiable et sécurisé pour les professionnels de santé',
            ],
            [
                'key' => 'services_hero_description',
                'type' => 'text',
                'label' => 'Texte Hero Services',
                'description' => 'Paragraphe d\'introduction de la page services',
                'value' => 'Nous comprenons que le transport de médicaments et de produits de santé requiert une attention et une expertise particulières. C\'est pourquoi nous avons développé un service logistique dédié, conçu spécifiquement pour les pharmacies et les professionnels de santé, garantissant la sécurité, la traçabilité et la rapidité de chaque livraison.',
            ],

            // Section Engagements
            [
                'key' => 'services_engagements_title',
                'type' => 'text',
                'label' => 'Titre Engagements',
                'description' => 'Titre de la section "Nos engagements"',
                'value' => 'Nos engagements',
            ],
            // Card 1
            [
                'key' => 'services_engagement1_title',
                'type' => 'text',
                'label' => 'Titre de Engagement 1',
                'description' => 'Titre du premier engagement',
                'value' => 'Acheminement rapide et sécurisé',
            ],
            [
                'key' => 'services_engagement1_description',
                'type' => 'text',
                'label' => 'Description de Engagement 1',
                'description' => 'Description du premier engagement',
                'value' => 'Livraison sous 24h pour les commandes passées par les pharmacies.<br><br>Respect de la chaîne du froid (si applicable, pensez à vérifier ce point avec votre client).<br><br>Véhicules et emballages adaptés pour préserver l\'intégrité des produits.',
            ],
            // Card 2
            [
                'key' => 'services_engagement2_title',
                'type' => 'text',
                'label' => 'Titre de Engagement 2',
                'description' => 'Titre du deuxième engagement',
                'value' => 'Traçabilité complète et en temps réel',
            ],
            [
                'key' => 'services_engagement2_description',
                'type' => 'text',
                'label' => 'Description de Engagement 2',
                'description' => 'Description du deuxième engagement',
                'value' => 'Système de suivi en ligne permettant aux pharmaciens de connaître la localisation exacte de leurs livraisons.<br><br>Notifications de statut de livraison (en préparation, en cours de livraison, livrée).<br><br>Preuve de livraison avec signature électronique',
            ],
            // Card 3
            [
                'key' => 'services_engagement3_title',
                'type' => 'text',
                'label' => 'Titre de Engagement 3',
                'description' => 'Titre du troisième engagement',
                'value' => 'Respect de la confidentialité et des normes sanitaires',
            ],
            [
                'key' => 'services_engagement3_description',
                'type' => 'text',
                'label' => 'Description de Engagement 3',
                'description' => 'Description du troisième engagement',
                'value' => 'Formation du personnel aux bonnes pratiques de distribution (BPD) pour les produits de santé.<br><br>Respect strict de la confidentialité des données et des informations médicales.<br><br>Protocole de désinfection et d\'hygiène rigoureux pour les véhicules et les livreurs.',
            ],

            // Section Fonctionnement
            [
                'key' => 'services_fonctionnement_title',
                'type' => 'text',
                'label' => 'Titre Fonctionnement',
                'description' => 'Titre de la section "Comment ça marche ?"',
                'value' => 'Comment ça marche ?',
            ],
            // Card 1
            [
                'key' => 'services_etape1_title',
                'type' => 'text',
                'label' => 'Titre Étape 1',
                'description' => 'Titre de la première étape',
                'value' => 'Passage de la commande',
            ],
            [
                'key' => 'services_etape1_description',
                'type' => 'text',
                'label' => 'Description Étape 1',
                'description' => 'Description de la première étape',
                'value' => 'Nous saisissons votre commande et vos informations de livraison.',
            ],
            // Card 2
            [
                'key' => 'services_etape2_title',
                'type' => 'text',
                'label' => 'Titre Étape 2',
                'description' => 'Titre de la deuxième étape',
                'value' => 'Préparation et prise en charge',
            ],
            [
                'key' => 'services_etape2_description',
                'type' => 'text',
                'label' => 'Description Étape 2',
                'description' => 'Description de la deuxième étape',
                'value' => 'Nous préparons et prenons en charge les médicaments à la pharmacie.',
            ],
            // Card 3
            [
                'key' => 'services_etape3_title',
                'type' => 'text',
                'label' => 'Titre Étape 3',
                'description' => 'Titre de la troisième étape',
                'value' => 'Livraison',
            ],
            [
                'key' => 'services_etape3_description',
                'type' => 'text',
                'label' => 'Description Étape 3',
                'description' => 'Description de la troisième étape',
                'value' => 'Le livreur remet la commande au domicile du patient.',
            ],

            // Section Engagement Social
            [
                'key' => 'services_social_title',
                'type' => 'text',
                'label' => 'Titre Engagement Social',
                'description' => 'Titre de la section "Notre engagement social"',
                'value' => 'Notre engagement social',
            ],
            [
                'key' => 'services_social1_title',
                'type' => 'text',
                'label' => 'Titre Engagement Social 1',
                'description' => 'Titre du premier engagement social',
                'value' => 'Soutien aux patients dépendants',
            ],
            // Card 1
            [
                'key' => 'services_social1_description',
                'type' => 'text',
                'label' => 'Description Engagement Social 1',
                'description' => 'Description du premier engagement social',
                'value' => 'Nous mettons en avant l\'aide apportée aux personnes en perte d\'autonomie ou en situation de handicap, en leur facilitant l\'accès aux médicaments essentiels sans qu\'ils aient à se déplacer.',
            ],
            [
                'key' => 'services_social2_title',
                'type' => 'text',
                'label' => 'Titre Engagement Social 2',
                'description' => 'Titre du deuxième engagement social',
                'value' => 'Soutien à l\'intégration professionnelle',
            ],
            // Card 2
            [
                'key' => 'services_social2_description',
                'type' => 'text',
                'label' => 'Description Engagement Social 2',
                'description' => 'Description du deuxième engagement social',
                'value' => 'Notre société est engagée dans l\'intégration du handicap dans le domaine de l\'emploi, ce qui renforce l\'image de marque de votre client.',
            ],

            // ========================================
            // PAGE ANNUAIRE (pages/annuaire.blade.php)
            // ========================================
            [
                'key' => 'annuaire_hero_title',
                'type' => 'text',
                'label' => 'Titre Hero Annuaire',
                'description' => 'Titre principal de la page annuaire',
                'value' => 'Annuaire des pharmacies',
            ],
            
            // ========================================
            // MENTIONS LÉGALES (legal/mentions.blade.php)
            // ========================================
            // Section Hero
            [
                'key' => 'mentions_hero_title',
                'type' => 'text',
                'label' => 'Titre Mentions Légales',
                'description' => 'Titre de la page mentions légales',
                'value' => 'Mentions légales',
            ],
            [
                'key' => 'mentions_editeur_title',
                'type' => 'text',
                'label' => 'Titre de la section Éditeur',
                'description' => 'Titre principal de la première section',
                'value' => '1. Éditeur du site',

            ],
            // Section Éditeur
            [
                'key' => 'mentions_editeur_raison_sociale',
                'type' => 'text',
                'label' => 'Raison Sociale',
                'description' => 'Raison sociale de l\'entreprise',
                'value' => 'Noha Transports',
            ],
            [
                'key' => 'mentions_editeur_capital',
                'type' => 'text',
                'label' => 'Capital',
                'description' => 'Montant du capital de l\'entreprise',
                'value' => '[Montant en €]',
            ],
            [
                'key' => 'mentions_editeur_siege_social',
                'type' => 'text',
                'label' => 'Siège Social',
                'description' => 'Adresse du siège social',
                'value' => '12 Rue des Arts et Métiers Immeubles Équinoxes 97200 Fort-de-France',
            ],
            [
                'key' => 'mentions_editeur_siret',
                'type' => 'text',
                'label' => 'SIRET',
                'description' => 'Numéro SIRET',
                'value' => '[Numéro SIRET]',
            ],
            [
                'key' => 'mentions_editeur_rcs',
                'type' => 'text',
                'label' => 'RCS',
                'description' => 'RCS',
                'value' => '[Ville + numéro RCS]',
            ],
            [
                'key' => 'mentions_editeur_email',
                'type' => 'text',
                'label' => 'Email de la société',
                'description' => 'Email de contact de la société',
                'value' => 'noha.transports@hotmail.com',
            ],
            [
                'key' => 'mentions_editeur_telephone',
                'type' => 'text',
                'label' => 'Téléphone de la société',
                'description' => 'Téléphone de contact de la société',
                'value' => '0696 16 12 77',
            ],
            // Section Activité et Mission
            [
                'key' => 'mentions_activite_title',
                'type' => 'text',
                'label' => 'Titre de la section activité',
                'description' => 'Titre de la section activité',
                'value' => '2. Activité et Mission',

            ],
            [
                'key' => 'mentions_activite_description',
                'type' => 'text',
                'label' => 'Description de l\'activité',
                'description' => 'Description de l\'activité',
                'value' => "Noha Transports est spécialisée dans le transport et la logistique de médicaments. Nous agissons comme intermédiaire essentiel pour faciliter la prise en charge d'ordonnances et la livraison de médicaments à domicile pour les citoyens, les aidants et les professionnels de santé.",
            ],
            [
                'key' => 'mentions_activite_services_subtitle',
                'type' => 'text',
                'label' => 'Titre de la section',
                'description' => 'Titre de la section',
                'value' => 'Nos services clés :',
            ],
            [
                'key' => 'mentions_activite_services_list',
                'type' => 'text',
                'label' => 'Liste des services',
                'description' => 'Liste des services',
                'value' => json_encode([
                    'Acheminement rapide des colis sous 24h.',
                    'Gestion simplifiée des prises de commande en ligne.',
                ]),
            ],
            // Section RGPD
            [
                'key' => 'mentions_rgpd_title',
                'type' => 'text',
                'label' => 'Titre de la section RGPD',
                'description' => 'Titre principal de la section RGPD',
                'value' => '3. Protection des Données Personnelles (RGPD)',

            ],
            [
                'key' => 'mentions_rgpd_description',
                'type' => 'text',
                'label' => 'Description RGPD',
                'description' => 'Texte expliquant la politique de données personnelles',
                'value' => 'Conformément au RGPD, vos données sont collectées uniquement pour le traitement des commandes et des demandes de contact. Elles ne sont pas partagées à des fins commerciales sans votre consentement.',
            ],
            [
                'key' => 'mentions_rgpd_droits_subtitle',
                'type' => 'text',
                'label' => 'Sous-titre des droits utilisateurs',
                'description' => 'Sous-titre indiquant les droits RGPD des utilisateurs',
                'value' => 'Vos droits (Accès, Rectification, Suppression) :', 
            ],
            [
                'key' => 'mentions_rgpd_email',
                'type' => 'text', 
                'label' => 'Email RGPD',
                'description' => 'Email de contact pour les questions liées aux données personnelles',
                'value' => 'noha.transports@hotmail.com', 
            ],
            [
                'key' => 'mentions_rgpd_adresse',
                'type' => 'text',
                'label' => 'Adresse postale RGPD',
                'description' => 'Adresse postale pour les demandes liées à la RGPD',
                'value' => '12 Rue des Arts et Métiers, Immeubles Équinoxes, 97200 Fort-de-France', 
            ],
            // Section Propriété Intellectuelle
            [
                'key' => 'mentions_propriete_title',
                'type' => 'text',
                'label' => 'Titre propriété intellectuelle',
                'description' => 'Titre de la section sur la propriété intellectuelle',
                'value' => '4. Propriété Intellectuelle',
            ],
            [
                'key' => 'mentions_propriete_description',
                'type' => 'text',
                'label' => 'Texte propriété intellectuelle',
                'description' => 'Texte décrivant la propriété du contenu du site',
                'value' => 'Tous les éléments du site (textes, images, logos, etc.) sont la propriété exclusive de Noha Transports. Toute reproduction ou utilisation non autorisée est strictement interdite.',
            ],
            // Section Hébergeur
            [
                'key' => 'mentions_hebergeur_title',
                'type' => 'text',
                'label' => 'Titre de la section hébergeur',
                'description' => 'Titre de la section concernant l’hébergeur du site',
                'value' => '5. Hébergeur',
            ],
            [
                'key' => 'mentions_hebergeur_nom',
                'type' => 'text',
                'label' => 'Nom Hébergeur',
                'description' => 'Nom de l\'hébergeur',
                'value' => '[Nom de l’hébergeur]',
            ],
            [
                'key' => 'mentions_hebergeur_adresse',
                'type' => 'text',
                'label' => 'Adresse Hébergeur',
                'description' => 'Adresse de l\'hébergeur',
                'value' => '[Adresse complète de l\'hébergeur]',
            ],
            [
                'key' => 'mentions_hebergeur_contact',
                'type' => 'text',
                'label' => 'Contact Hébergeur',
                'description' => 'Contact de l\'hébergeur',
                'value' => '[Numéro de l\'hébergeur]',
            ],
            // Section Responsabilité et Droit Applicable
            [
                'key' => 'mentions_responsabilite_title',
                'type' => 'text',
                'label' => 'Titre de la section responsabilité',
                'description' => 'Titre principal de la dernière section',
                'value' => '6. Responsabilité & Droit Applicable',
            ],
            [
                'key' => 'mentions_responsabilite_limitation_title',
                'type' => 'text',
                'label' => 'Sous-titre limitation de responsabilité',
                'description' => 'Titre du paragraphe sur la limitation de responsabilité',
                'value' => 'Limitation de Responsabilité',
            ],
            [
                'key' => 'mentions_responsabilite_limitation_text',
                'type' => 'text',
                'label' => 'Texte limitation de responsabilité',
                'description' => 'Texte expliquant les limites de responsabilité du site',
                'value' => "Noha Transports ne peut être tenu responsable des erreurs, omissions ou dysfonctionnements techniques indépendants de sa volonté, bien que nous assurions la plus grande rigueur dans la mise à jour des informations.",
            ],
            [
                'key' => 'mentions_responsabilite_droit_title',
                'type' => 'text',
                'label' => 'Sous-titre droit applicable',
                'description' => 'Titre du paragraphe concernant le droit applicable',
                'value' => 'Droit Applicable',
            ],
            [
                'key' => 'mentions_responsabilite_droit_text',
                'type' => 'text',
                'label' => 'Texte droit applicable',
                'description' => 'Texte indiquant le droit applicable au site',
                'value' => "Les présentes mentions légales sont régies par le droit français. Tout litige non résolu à l'amiable sera soumis aux tribunaux français compétents.",
            ],

            // ========================================
            // POLITIQUE DE CONFIDENTIALITÉ (legal/privacy.blade.php)
            // ========================================
            [
                'key' => 'privacy_hero_title',
                'type' => 'text',
                'label' => 'Titre Politique de Confidentialité',
                'description' => 'Titre de la page politique de confidentialité',
                'value' => 'Politique de confidentialité',
            ],

            // Section Introduction
            [
                'key' => 'privacy_intro_title',
                'type' => 'text',
                'label' => 'Titre de la section Introduction',
                'description' => 'Titre de la première section de la politique de confidentialité',
                'value' => '1. Introduction',
            ],
            [
                'key' => 'privacy_intro_description',
                'type' => 'text',
                'label' => 'Texte de la section Introduction',
                'description' => 'Texte d’introduction présentant les objectifs de la politique de confidentialité',
                'value' => "La présente politique de confidentialité a pour objectif d’informer les utilisateurs de nos services sur la manière dont Noha Transports collecte, utilise, conserve et protège les données personnelles. En utilisant notre site internet et nos services, vous acceptez la présente politique.",
            ],

            // Section Responsable du traitement
            [
                'key' => 'privacy_responsable_title',
                'type' => 'text',
                'label' => 'Titre de la section Responsable du traitement',
                'description' => 'Titre principal de la section responsable du traitement',
                'value' => '2. Responsable du traitement',
            ],
            [
                'key' => 'privacy_responsable_societe',
                'type' => 'text',
                'label' => 'Nom de la société',
                'description' => 'Nom de la société responsable du traitement',
                'value' => 'Noha Transports',
            ],
            [
                'key' => 'privacy_responsable_activite',
                'type' => 'text',
                'label' => 'Activité de la société',
                'description' => 'Description de l’activité de la société',
                'value' => "Intermédiaire entre les professionnels de santé et les citoyens pour la gestion d’ordonnances et la livraison de médicaments à domicile.",
            ],
            [
                'key' => 'privacy_responsable_email',
                'type' => 'text',
                'label' => 'Email du contact RGPD',
                'description' => 'Adresse email à contacter pour toute demande liée aux données personnelles',
                'value' => 'noha.transports@hotmail.com',
            ],
            [
                'key' => 'privacy_responsable_adresse',
                'type' => 'text',
                'label' => 'Adresse postale du contact RGPD',
                'description' => 'Adresse postale pour toute correspondance liée à la protection des données',
                'value' => '12 Rue des Arts et Métiers, Immeubles Équinoxes, 97200 Fort-de-France',
            ],

            // Section Données collectées
            [
                'key' => 'privacy_donnees_title',
                'type' => 'text',
                'label' => 'Titre de la section Données collectées',
                'description' => 'Titre de la section présentant les types de données collectées',
                'value' => '3. Données collectées',
            ],
            [
                'key' => 'privacy_donnees_list',
                'type' => 'text',
                'label' => 'Liste des données collectées',
                'description' => 'Liste structurée des types de données collectées',
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
                'label' => 'Titre de la section Finalités du traitement',
                'description' => 'Titre principal de la section sur les finalités du traitement',
                'value' => '4. Finalités du traitement',
            ],
            [
                'key' => 'privacy_finalites_list',
                'type' => 'text',
                'label' => 'Liste des finalités du traitement',
                'description' => 'Liste des objectifs poursuivis par la collecte des données',
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
                'label' => 'Titre de la section Base légale',
                'description' => 'Titre principal de la section Base légale du traitement',
                'value' => '5. Base légale du traitement',
            ],
            [
                'key' => 'privacy_base_legale_list',
                'type' => 'text',
                'label' => 'Liste des bases légales',
                'description' => 'Liste des bases légales justifiant le traitement des données',
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
                'label' => 'Titre de la section Durée de conservation',
                'description' => 'Titre principal de la section Durée de conservation',
                'value' => '6. Durée de conservation',
            ],
            [
                'key' => 'privacy_conservation_list',
                'type' => 'text',
                'label' => 'Liste des durées de conservation des données',
                'description' => 'Durées et conditions de conservation des données collectées',
                'value' => json_encode([
                    'Données clients : jusqu’à 5 ans maximum après la fin de la relation contractuelle.',
                    'Données de santé : conservées uniquement pour la durée strictement nécessaire au service rendu et traitées avec la plus grande confidentialité.',
                ]),
            ],

            // Section Partage des données & Sécurité
            [
                'key' => 'privacy_partage_title',
                'type' => 'text',
                'label' => 'Titre de la section Partage des données',
                'description' => 'Titre principal de la section sur le partage des données',
                'value' => '7. Partage des données & Sécurité',
            ],
            [
                'key' => 'privacy_partage_intro',
                'type' => 'text',
                'label' => 'Texte d’introduction du partage des données',
                'description' => 'Texte d’explication avant la liste des entités partageant les données',
                'value' => 'Vos données personnelles peuvent être transmises aux entités suivantes, dans la limite de ce qui est strictement nécessaire pour nos services :',
            ],
            [
                'key' => 'privacy_partage_list',
                'type' => 'text',
                'label' => 'Liste des destinataires des données',
                'description' => 'Liste des entités pouvant recevoir les données personnelles',
                'value' => json_encode([
                    'Nos partenaires de santé (pharmacies) pour la prise en charge d’ordonnances.',
                    'Nos transporteurs pour assurer la livraison.',
                    'Les autorités compétentes en cas d’obligation légale.',
                ]),
            ],
            [
                'key' => 'privacy_partage_footer',
                'type' => 'text',
                'label' => 'Texte de clôture sur la sécurité et le partage',
                'description' => 'Phrase précisant l’absence de vente de données personnelles',
                'value' => 'Aucune donnée n’est vendue ni transmise à des tiers à des fins commerciales.',
            ],

            // Section Droits des utilisateurs
            [
                'key' => 'privacy_droits_title',
                'type' => 'text',
                'label' => 'Titre de la section Droits RGPD',
                'description' => 'Titre principal de la section sur les droits RGPD',
                'value' => '8. Vos droits (RGPD)',
            ],
            [
                'key' => 'privacy_droits_text',
                'type' => 'text',
                'label' => 'Texte des droits RGPD',
                'description' => 'Texte expliquant les droits dont disposent les utilisateurs (accès, rectification, suppression, etc.)',
                'value' => "Conformément au RGPD, vous disposez notamment du Droit d’accès, de Rectification et d’Effacement (droit à l’oubli).",
            ],
            [
                'key' => 'privacy_droits_email',
                'type' => 'text',
                'label' => 'Email pour exercer ses droits',
                'description' => 'Adresse email à contacter pour exercer ses droits RGPD',
                'value' => 'noha.transports@hotmail.com',
            ],

            // Section Cookies
            [
                'key' => 'privacy_cookies_title',
                'type' => 'text',
                'label' => 'Titre de la section Cookies',
                'description' => 'Titre principal de la section sur les cookies',
                'value' => '9. Cookies',
            ],
            [
                'key' => 'privacy_cookies_text',
                'type' => 'text',
                'label' => 'Texte d’explication sur les cookies',
                'description' => 'Texte expliquant l’utilisation des cookies sur le site',
                'value' => 'Notre site utilise des cookies pour améliorer l’expérience utilisateur et analyser la navigation.',
            ],
            [
                'key' => 'privacy_cookies_gestion',
                'type' => 'text',
                'label' => 'Texte de gestion des cookies',
                'description' => 'Texte expliquant la gestion des cookies par l’utilisateur',
                'value' => 'Vous pouvez gérer vos préférences directement dans les paramètres de votre navigateur.',
            ],

            // Section Sécurité et Contact
            [
                'key' => 'privacy_securite_title',
                'type' => 'text',
                'label' => 'Titre de la section Sécurité et Contact',
                'description' => 'Titre principal de la section finale',
                'value' => '10. Sécurité et Contact',
            ],
            [
                'key' => 'privacy_securite_text',
                'type' => 'text',
                'label' => 'Texte sur la sécurité des données',
                'description' => 'Texte expliquant les mesures techniques et organisationnelles mises en place',
                'value' => 'Nous mettons en œuvre des mesures techniques et organisationnelles strictes pour protéger vos données personnelles contre tout accès, utilisation ou divulgation non autorisée.',
            ],
            [
                'key' => 'privacy_modification_text',
                'type' => 'text',
                'label' => 'Texte sur les modifications de la politique',
                'description' => 'Texte indiquant la possibilité de modifier la politique de confidentialité',
                'value' => 'Nous nous réservons le droit de modifier la présente politique à tout moment. La version mise à jour sera publiée sur notre site avec mention de la date de mise à jour.',
            ],
            [
                'key' => 'privacy_contact_text',
                'type' => 'text',
                'label' => 'Texte de contact final',
                'description' => 'Texte fournissant les moyens de contact de l’entreprise',
                'value' => "Pour toute question, veuillez nous écrire à : noha.transports@hotmail.com \n12 Rue des Arts et Métiers, Immeubles Équinoxes, 97200 Fort-de-France",
            ],

            // ========================================
            // CONDITIONS D'UTILISATION (legal/terms.blade.php)
            // ========================================
            [
                'key' => 'terms_hero_title',
                'type' => 'text',
                'label' => 'Titre CGU',
                'description' => 'Titre de la page conditions générales d\'utilisation',
                'value' => 'Conditions Générales d\'Utilisation',
            ],
            // Section Objet des CGU
            [
                'key' => 'cgu_objet_title',
                'type' => 'text',
                'label' => 'Titre Objet des CGU',
                'description' => 'Titre de la première section des CGU',
                'value' => '1. Objet des CGU',
            ],
            [
                'key' => 'cgu_objet_paragraph1',
                'type' => 'text',
                'label' => 'Texte principal Objet des CGU',
                'description' => 'Premier paragraphe de la section Objet des CGU',
                'value' => "Les présentes Conditions Générales d’Utilisation (CGU) définissent les modalités d’accès et d’utilisation du site internet et des services proposés par Noha Transports, intermédiaire entre les professionnels de santé et les citoyens pour la prise en charge d’ordonnances et la livraison de médicaments à domicile.",
            ],
            [
                'key' => 'cgu_objet_paragraph2',
                'type' => 'text',
                'label' => 'Texte secondaire Objet des CGU',
                'description' => 'Paragraphe final de la section Objet des CGU',
                'value' => "En accédant au site et en utilisant nos services, l’utilisateur reconnaît avoir pris connaissance et s’engage à respecter les présentes CGU.",
            ],

            // Section Services Proposés et Cibles
            [
                'key' => 'cgu_services_title',
                'type' => 'text',
                'label' => 'Titre des services proposés',
                'description' => 'Titre de la section Services proposés et cibles',
                'value' => '2. Services proposés et cibles',
            ],
            [
                'key' => 'cgu_services_intro',
                'type' => 'text',
                'label' => 'Introduction des services proposés',
                'description' => 'Introduction de la section Services proposés',
                'value' => "L’entreprise met à disposition des utilisateurs les services suivants :",
            ],
            [
                'key' => 'cgu_services_list',
                'type' => 'text',
                'label' => 'Liste des services proposés',
                'description' => 'Liste des services offerts par l’entreprise',
                'value' => json_encode([
                    "Un service de prise en charge de commandes auprès de pharmacies partenaires.",
                    "Un service de livraison de médicaments à domicile (délai indicatif de 24h).",
                ]),
            ],
            [
                'key' => 'cgu_services_conclusion',
                'type' => 'text',
                'label' => 'Texte de conclusion des services proposés',
                'description' => 'Texte final de la section Services proposés',
                'value' => "Ces services sont principalement destinés aux pharmacies, aidants et citoyens.",
            ],

            // Section Accès au site
            [
                'key' => 'cgu_acces_title',
                'type' => 'text',
                'label' => 'Titre Accès au site',
                'description' => 'Titre de la section Accès au site',
                'value' => '3. Accès au site',
            ],
            [
                'key' => 'cgu_acces_text',
                'type' => 'text',
                'label' => 'Texte Accès au site',
                'description' => 'Texte de la section Accès au site',
                'value' => "L’accès au site est libre et gratuit pour tout utilisateur disposant d’un accès internet. Tous les frais liés à la connexion (matériel, logiciel, abonnement, etc.) restent à la charge de l’utilisateur.",
            ],

            // Section Responsabilités de l’utilisateur
            [
                'key' => 'cgu_responsibilite_utilisateur_title',
                'type' => 'text',
                'label' => 'Titre Responsabilités de l’utilisateur',
                'description' => 'Titre de la section Responsabilités de l’utilisateur',
                'value' => "4. Responsabilités de l’utilisateur",
            ],
            [
                'key' => 'cgu_responsibilite_utilisateur_intro',
                'type' => 'text',
                'label' => 'Introduction des responsabilités utilisateur',
                'description' => 'Texte d’introduction pour la section responsabilités utilisateur',
                'value' => "L'utilisateur s'engage notamment à :",
            ],
            [
                'key' => 'cgu_responsibilite_utilisateur_list',
                'type' => 'text',
                'label' => 'Liste des responsabilités utilisateur',
                'description' => 'Liste des obligations que doit respecter l’utilisateur',
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
                'label' => 'Titre Responsabilités de Noha Transports',
                'description' => 'Titre de la section Responsabilités de Noha Transports',
                'value' => '5. Responsabilités de Noha Transports',
            ],
            [
                'key' => 'cgu_responsabilite_entreprise_commitments',
                'type' => 'text',
                'label' => 'Liste des engagements de Noha Transports',
                'description' => 'Engagements principaux de Noha Transports envers ses clients',
                'value' => json_encode([
                    "Assurer la livraison des médicaments dans les délais annoncés (24h indicatives).",
                    "Garantir la sécurité et la confidentialité des données (cf. Politique de confidentialité).",
                    "Respecter nos valeurs de prise en charge durable des personnes en perte d’autonomie.",
                ]),
            ],
            [
                'key' => 'cgu_responsabilite_entreprise_limitations',
                'type' => 'text',
                'label' => 'Limitations de responsabilité',
                'description' => 'Cas dans lesquels la société n’est pas responsable',
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
                'label' => 'Titre Commandes et livraisons',
                'description' => 'Titre de la section Commandes et livraisons',
                'value' => '6. Commandes et livraisons',
            ],
            [
                'key' => 'cgu_commandes_text',
                'type' => 'text',
                'label' => 'Texte principal Commandes et livraisons',
                'description' => 'Texte de la section Commandes et livraisons',
                'value' => "Les commandes sont gérées exclusivement via le site internet auprès de nos pharmacies partenaires. Le délai de livraison de 24 heures est indicatif et sans garantie contractuelle.",
            ],

            // Section Données personnelles
            [
                'key' => 'cgu_donnees_title',
                'type' => 'text',
                'label' => 'Titre Données personnelles',
                'description' => 'Titre de la section Données personnelles',
                'value' => '7. Données personnelles',
            ],
            [
                'key' => 'cgu_donnees_text',
                'type' => 'text',
                'label' => 'Texte Données personnelles',
                'description' => 'Texte expliquant la gestion des données personnelles',
                'value' => "Dans le cadre de l’utilisation des services, des données personnelles sont collectées et traitées. Veuillez consulter notre Politique de Confidentialité pour les détails sur la collecte et le traitement de vos données.",
            ],

            // Section Propriété intellectuelle et dispositions finales
            [
                'key' => 'cgu_propriete_title',
                'type' => 'text',
                'label' => 'Titre Propriété intellectuelle et dispositions finales',
                'description' => 'Titre de la section Propriété intellectuelle et dispositions finales',
                'value' => '8. Propriété Intellectuelle & Dispositions Finales',
            ],
            [
                'key' => 'cgu_propriete_intellectuelle',
                'type' => 'text',
                'label' => 'Texte propriété intellectuelle',
                'description' => 'Texte concernant la propriété intellectuelle',
                'value' => "Le site, son contenu, sa structure, ainsi que les marques et logos sont la propriété exclusive de l'entreprise. Toute reproduction non autorisée est strictement interdite.",
            ],
            [
                'key' => 'cgu_propriete_modification',
                'type' => 'text',
                'label' => 'Texte modification des CGU',
                'description' => 'Texte concernant la modification des CGU',
                'value' => "L’entreprise se réserve le droit de modifier les présentes CGU à tout moment. Les utilisateurs seront informés de ces modifications via le site internet.",
            ],
            [
                'key' => 'cgu_propriete_droit',
                'type' => 'text',
                'label' => 'Texte droit applicable et juridiction',
                'description' => 'Texte final concernant la loi applicable',
                'value' => "Les présentes CGU sont régies par le droit français. En cas de litige, compétence exclusive est attribuée aux tribunaux compétents du ressort du siège social de l’entreprise.",
            ],
        ];

        foreach ($contents as $content) {
            Content::updateOrCreate(['key' => $content['key']], $content);
        }
    }
}
