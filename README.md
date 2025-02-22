Projet Blog Laravel
Un blog simple développé avec Laravel permettant aux utilisateurs de créer, modifier, voir et supprimer des articles, avec un système d'authentification intégré.
📌 Prérequis
Avant de commencer, assurez-vous d’avoir installé :
•	PHP 7.3 ou supérieur
•	Composer
•	Node.js & npm
•	MySQL
📥 Installation
Cloner le dépôt
git clone https://github.com/HajarSatlane/BlogLaravel.git  
cd BlogLaravel
Installer les dépendances PHP

composer install
Configurer l'environnement
Renommez le fichier .env.example en .env et mettez à jour vos paramètres de base de données :

DB_CONNECTION=mysql  
DB_HOST=127.0.0.1  
DB_PORT=3306  
DB_DATABASE=blog_laravel  
DB_USERNAME=root  
DB_PASSWORD=
Générer la clé d’application
php artisan key:generate
Exécuter les migrations de la base de données
php artisan migrate
Installer les dépendances frontend
npm install
Compiler les assets
npm run dev
 Lancer le serveur
php artisan serve
 Accédez à votre blog en ouvrant http://localhost:8000 dans votre navigateur.

