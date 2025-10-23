# Noha Transports

Site web pour la société Noha Transports développée avec Laravel 12 et Filament 4, incluant un système de gestion de contenu dynamique et un annuaire de pharmacies.

## Description

Il s'agit d'une plateforme dédiée au transport de médicaments et aux services pour les professionnels de santé. Le projet intègre :

-   Un site vitrine public avec pages institutionnelles
-   Un annuaire interactif des pharmacies partenaires
-   Un système CMS (Content Management System) pour la gestion dynamique des contenus
-   Un panneau d'administration complet via Filament
-   Un système de mise en cache optimisé pour les performances

## Technologies utilisées

### Backend

-   **Laravel 12** - Framework PHP moderne
-   **Filament 4.1** - Panneau d'administration élégant et puissant
-   **PHP 8.2+** - Langage de programmation
-   **SQLite** - Base de données (par défaut)

### Frontend

-   **Tailwind CSS 4.0** - Framework CSS utility-first
-   **Vite 7** - Build tool moderne et rapide
-   **Blade** - Moteur de templates Laravel
-   **Axios** - Client HTTP pour les requêtes AJAX

### Outils de développement

-   **Laravel Pint** - Formateur de code PHP
-   **PHPUnit** - Framework de tests unitaires
-   **Concurrently** - Exécution simultanée de scripts NPM

## Structure du projet

### Modèles principaux

#### Content

Gère le contenu dynamique du site avec :

-   Textes éditables
-   Images uploadables
-   Organisation par page, section et catégorie
-   Système de cache automatique

#### Pharmacie

Gère l'annuaire des pharmacies avec :

-   Nom, adresse et téléphone
-   Horaires d'ouverture (format JSON)

### Services

#### ContentCacheService

Service de mise en cache des contenus pour optimiser les performances :

-   Cache de 1 heure par défaut
-   Invalidation automatique lors des modifications
-   Gestion intelligente des URLs d'images

### Helpers

#### content()

Fonction helper globale pour accéder facilement aux contenus.

### Routes publiques

-   `/` - Page d'accueil
-   `/services` - Services pour professionnels de santé
-   `/annuaire` - Annuaire des pharmacies
-   `/mentions-legales` - Mentions légales
-   `/politique-confidentialite` - Politique de confidentialité
-   `/conditions-utilisation` - Conditions générales d'utilisation

### Panel d'administration

-   Accès au panneau Filament
    -   Gestion des contenus (Contents)
    -   Gestion des pharmacies (Pharmacies)

## Composants Blade

Le projet utilise des composants réutilisables :

-   `<x-navigation>` - Menu de navigation
-   `<x-footer>` - Pied de page
-   `<x-card>` - Carte générique
-   `<x-pharmacie-card>` - Carte pour afficher une pharmacie

## Base de données

### Tables principales

**contents** - Gestion du contenu dynamique

-   `key` : Identifiant unique
-   `value` : Contenu texte ou chemin d'image
-   `type` : Type de contenu (text, image)
-   `category` : Catégorie du contenu
-   `page` : Page associée
-   `section` : Section de la page
-   `label` : Libellé descriptif
-   `description` : Description du champ

**pharmacies** - Annuaire des pharmacies

-   `nom` : Nom de la pharmacie
-   `adresse` : Adresse complète
-   `telephone` : Numéro de téléphone
-   `horaires` : Horaires d'ouverture (JSON)

**users** - Utilisateurs administrateurs

-   Configuration standard Laravel + Filament

## Fonctionnalités clés

### Système de gestion de contenu

-   Édition en temps réel via Filament
-   Support texte et images
-   Organisation hiérarchique (page > section > contenu)
-   Mise en cache automatique
-   Helper PHP pour accès facile dans les vues

### Gestion des pharmacies

-   CRUD complet via Filament
-   Horaires flexibles (format JSON)
-   Affichage public dans l'annuaire
-   Composant Blade dédié

### Optimisations

-   Mise en cache des contenus
-   Invalidation automatique du cache
-   Hot-reload en développement
-   Build optimisé pour production

## Sécurité

-   Authentification via Filament
-   CSRF protection activée
-   Session sécurisée
-   Validation des entrées utilisateur
-   Protection contre les injections SQL (Eloquent ORM)

## Auteur

Ce projet a été développé par [Olivia](https://github.com/olivia-ctnl).
