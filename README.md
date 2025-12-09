# Noha Transports

Site web pour la société Noha Transports développée avec Laravel 12 et Filament 4.

## Description

Il s'agit d'une plateforme dédiée au transport de médicaments et aux services pour les professionnels de santé. Le projet intègre :

-   Un site vitrine public avec pages institutionnelles
-   Un annuaire interactif des pharmacies partenaires
-   Un système CMS (Content Management System) pour la gestion dynamique des contenus
-   Un panneau d'administration complet via Filament
-   Un système de mise en cache optimisé pour les performances

## Technologies utilisées

### Backend

-   **Laravel 12** - Framework PHP
-   **Filament 4.1** - Panel d'administration
-   **MySQL** - Base de données
-   **PHP 8.2+**

### Frontend

-   **Tailwind CSS 4.0** - Framework CSS
-   **Vite 7** - Build tool
-   **Blade** - Moteur de templates Laravel
-   **Axios** - Client HTTP

## Fonctionnalités

### 1. Système de gestion de contenu (CMS)

-   Gestion des contenus textuels et images par clé
-   Catégorisation par page et section
-   Cache automatique pour optimisation des performances
-   Helper global `content($key)` pour accès simplifié dans les vues

### 2. Annuaire des pharmacies

-   Gestion CRUD des pharmacies partenaires
-   Informations : nom, adresse, téléphone, horaires
-   Affichage public de l'annuaire

### 3. Formulaire de contact

-   Formulaire avec validation côté serveur
-   Stockage des messages en base de données
-   Gestion des messages via Filament (statut lu/non lu)
-   Notifications de succès/erreur

### 4. Panel d'administration Filament

-   Gestion des contenus (texte et images)
-   Gestion des pharmacies
-   Consultation des messages de contact
-   Interface responsive et moderne

## Installation

### Prérequis

-   PHP 8.2 ou supérieur
-   Composer
-   Node.js et npm
-   MySQL

### Étapes d'installation

1. **Cloner le projet**

```bash
git clone https://github.com/olivia-ctnl/noha-transports.git
cd noha-transports
```

2. **Installer les dépendances PHP**

```bash
composer install
```

3. **Installer les dépendances JavaScript**

```bash
npm install
```

4. **Configuration de l'environnement**

```bash
cp .env.example .env
php artisan key:generate
```

5. **Créer la base de données MySQL**

Dans votre client MySQL :

```sql
CREATE DATABASE noha_transports CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
```

Configurer ensuite le .env :

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=noha_transports
DB_USERNAME=root
DB_PASSWORD=
```

6. **Exécuter les migrations**

```bash
php artisan migrate
```

## Utilisation

### Démarrage du serveur de développement

**Option 1 : Commande composer personnalisée (recommandé)**

```bash
composer dev
```

Cette commande lance simultanément :

-   Le serveur Laravel (port 8000)
-   Le worker de queue
-   Le monitoring des logs (Pail)
-   Le serveur Vite pour le hot reload

**Option 2 : Commandes séparées**

```bash
# Terminal 1 : Serveur Laravel
php artisan serve

# Terminal 2 : Vite (dev frontend)
npm run dev
```

### Accès aux interfaces

-   **Site public** : http://localhost:8000
-   **Panel admin** : http://localhost:8000/admin
-   **Connexion admin** : Utilisez les identifiants

## Structure du projet

### Modèles principaux

#### `Content`

Gestion des contenus dynamiques du site

-   `key` : Identifiant unique du contenu
-   `value` : Valeur (texte ou chemin d'image)
-   `type` : Type de contenu (text, image)
-   `category`, `page`, `section` : Organisation hiérarchique
-   Cache automatique via `ContentCacheService`

#### `Pharmacie`

Gestion des pharmacies partenaires

-   `nom` : Nom de la pharmacie
-   `adresse` : Adresse complète
-   `telephone` : Numéro de téléphone
-   `horaires` : Horaires d'ouverture (JSON)

#### `Contact`

Stockage des messages de contact

-   `nom`, `prenom` : Identité du contact
-   `email`, `telephone` : Coordonnées
-   `message` : Contenu du message
-   `is_read` : Statut de lecture

### Services

#### `ContentCacheService`

-   Mise en cache des contenus (durée : 1 heure)
-   Méthodes : `get()`, `getAllContents()`, `clearCache()`
-   Traitement automatique des URLs d'images

### Helpers

#### `ContentHelper.php`

Fonction globale `content($key, $default = null)` pour accès simplifié aux contenus dans les vues Blade.

## Routes disponibles

### Routes publiques

-   `/` - Page d'accueil
-   `/services` - Services pour professionnels de santé
-   `/annuaire` - Annuaire des pharmacies
-   `/contact` - Formulaire de contact
-   `/mentions-legales` - Mentions légales
-   `/politique-confidentialite` - Politique de confidentialité
-   `/conditions-utilisation` - CGU

### Routes admin

-   `/admin` - Panel d'administration Filament

## Configuration

### Base de données

Le projet utilise MySQL par défaut. Pour changer :

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=noha_transports
DB_USERNAME=root
DB_PASSWORD=
```

### Cache

```env
CACHE_STORE=database
```

### Queue

```env
QUEUE_CONNECTION=database
```

## Tests

Exécuter les tests :

```bash
composer test
```

Ou directement :

```bash
php artisan test
```

## Scripts Composer personnalisés

-   `composer dev` : Lance tous les services en développement
-   `composer test` : Nettoie la config et lance les tests

## Sécurité

-   Validation des données côté serveur
-   Protection CSRF sur tous les formulaires
-   Sanitization des entrées utilisateur
-   Gestion sécurisée des fichiers uploadés

## Auteur

Ce projet a été développé par [Olivia](https://github.com/olivia-ctnl).
