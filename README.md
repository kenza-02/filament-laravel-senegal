# 🚀 FILAMENT DEMO : Créer un Admin Panel en 5 Minutes

Bienvenue sur le dépôt de la démo présentée par **Mouhamadou MBALLO** lors du premier événement de la **Laravel Senegal Community** (Laravel & PHP Sénégal).

Ce projet illustre de manière pratique comment le framework [Filament](https://filamentphp.com/) permet de générer un panneau d'administration professionnel, sécurisé et fonctionnel en un temps record, en s'appuyant uniquement sur PHP et les outils de l'écosystème TALL Stack.

## ✨ Objectifs de la Démonstration

-   **Vitesse :** Démontrer la création complète d'une ressource CRUD (Créer, Lire, Mettre à jour, Supprimer) en moins de 5 minutes.
-   **Simplicité :** Montrer l'utilisation de l'API déclarative de Filament pour construire des formulaires (ex: champ `Select` pour le sexe) sans écrire de HTML ou de JavaScript.
-   **Architecture :** Mettre en lumière l'intégration parfaite avec le **TALL Stack** (Tailwind CSS, Alpine.js, Livewire, Laravel).

## 🛠️ Installation et Démarrage du Projet

Le projet a été pré-installé avec Filament pour assurer un démarrage rapide de la démo.

### Prérequis

-   PHP (version 8.1 ou supérieure)
-   Composer
-   Un système de base de données.

### 1. Cloner le Dépôt

```bash
git clone [https://github.com/kenza-02/filament-laravel-senegal.git](https://github.com/kenza-02/filament-laravel-senegal.git)
cd filament-laravel-senegal
```

### 2. Installer les Dépendances

composer install

### 3. Configurer l'Environnement et la Clé

Configurer l'Environnement et la Clé

### 4. Lancer la migration

php artisan migrate

### 5. Créer l'Utilisateur Administrateur

php artisan make:filament-user

### 6. Lancer le Serveur de Développement

php artisan serve

### 7. Accès à l'Admin Panel

Ouvrez votre navigateur et accédez à : http://127.0.0.1:8000/admin

Connectez-vous avec l'utilisateur créé à l'étape précédente.

Explorez la ressource Étudiants pour voir l'implémentation du formulaire et de la table.

## A propos de moi

Présenté par : Mouhamadou MBALLO

Événement : Laravel & PHP Sénégal

LinkedIn : Mouhamadou MBALLO (https://www.linkedin.com/in/mouhamadou-mballo-815808275/)

GitHub : kenza-02
