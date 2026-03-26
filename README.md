<p align="center">
  <a href="https://digitwace.com">
    <img src="https://nufisms.com/assets/img/partners/partner-4.png" alt="Digitwace Logo" width="200">
  </a>
</p>

# 🚀 Redesign Digitwace

Bienvenue sur le dépôt officiel de la **refonte du site web [Digitwace](https://digitwace.com/)**.

Ce projet vise à moderniser l'interface utilisateur, améliorer les performances et restructurer l'expérience client de la plateforme actuelle.

## 📋 Prérequis Techniques

Pour faire tourner ce projet correctement, assurez-vous que votre environnement de développement respecte les versions minimales suivantes :

*   **PHP** : Version **8.3** ou supérieure
*   **Node.js** : Version **24.0** ou supérieure
*   **Composer** : 2.x
*   **NPM** : 10.x

## 🛠 Installation

Pour installer le projet proprement sur votre machine locale, suivez ces étapes dans votre terminal :

### 1. Cloner le projet

```bash
git clone https://github.com/DIGITWACE-TEAM/digitwace-website.git
cd digitwace-website
```

### 2. Installer les dépendances Backend (PHP)
```bash
composer install
```

### 3. Installer les dépendances Frontend (Node)
```bash
npm install
```

### 4. Configuration de l'environnement
Copiez le fichier d'exemple pour créer votre configuration locale (base de données, clés API, etc.) :

```bash
cp .env.example .env
```
*(N'oubliez pas d'éditer le fichier `.env` avec vos paramètres locaux)*

---

## ▶️ Démarrage du projet

Pour lancer l'environnement de développement, vous aurez généralement besoin de deux terminaux ouverts.

### Terminal 1 : Compilation des Assets (Vite/Tailwind)
Lance le serveur de développement pour le CSS et le JS avec rechargement à chaud (HMR).

```bash
npm run dev
```

### Terminal 2 : Serveur Web
Lance le serveur local PHP.

```bash
# Si vous utilisez un Framework (Laravel/Symfony)
php artisan serve 
# ou
composer run serve
```

Le site devrait être accessible à l'adresse : `http://localhost:8000`

## 🏗 Build pour la production

Pour générer les fichiers CSS/JS optimisés pour la mise en ligne :

```bash
npm run build
```
