ProfitTrack
ProfitTrack est une application web de gestion financière conçue pour t'aider à suivre tes revenus, dépenses, et bénéfices issus de différents business. Avec une interface simple et intuitive, elle te permet de mieux organiser et analyser tes données financières.

Fonctionnalités
Gestion des businesses : Ajoute et organise tes sources de revenus.
Suivi des transactions : Enregistre les revenus et dépenses associés à chaque business.
Tableau de bord : Visualise rapidement tes données financières avec des graphiques et résumés clairs.
Statistiques en temps réel : Analyse tes bénéfices nets et performances au fil du temps.
Technologies utilisées
ProfitTrack est construit avec les technologies modernes suivantes :

Backend : Laravel (PHP Framework)
Frontend : HTML, CSS (avec Tailwind CSS), et JavaScript
Base de données : MySQL
Visualisation des données : Chart.js
Installation
Prérequis
PHP 8.x ou supérieur
Composer
Node.js et npm
MySQL
Étapes
Clone ce dépôt :

bash
Copier le code
git clone https://github.com/annalogues/ProfitTrack.git
cd ProfitTrack
Installe les dépendances PHP avec Composer :

bash
Copier le code
composer install
Installe les dépendances JavaScript :

bash
Copier le code
npm install
npm run dev
Configure le fichier .env :

Duplique le fichier .env.example et renomme-le en .env.
Configure les informations de ta base de données.
Génère la clé de l'application :

bash
Copier le code
php artisan key:generate
Lance les migrations pour créer les tables nécessaires :

bash
Copier le code
php artisan migrate
Démarre le serveur local :

bash
Copier le code
php artisan serve
Ouvre l'application dans ton navigateur à l'adresse http://localhost:8000.

Contribuer
Les contributions sont les bienvenues !

Fork ce dépôt.
Crée une branche pour tes modifications (git checkout -b feature/ma-fonctionnalite).
Pousse tes changements (git push origin feature/ma-fonctionnalite).
Soumets une Pull Request.
Licence
ProfitTrack est un logiciel open-source sous licence MIT.
