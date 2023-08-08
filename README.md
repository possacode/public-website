# Possacode Website
Cette version du site est fait en PHP

| Techlogie    |                                                    |
|--------------|----------------------------------------------------|
| Laravel      | [https://laravel.com](https://laravel.com)         |
| Tailwind CSS | [https://tailwindcss.com](https://tailwindcss.com) |
| TailAdmin    | [https://tailadmin.com](https://tailadmin.com)     |
| And Heart    | 💓                                                 |

Pour débuter
````bash
git clone https://github.com/possacode/public-website
cd public-website
````

Créer le fichier d'environnement
````bash
cp .env.example .env
````

Installer les dépendances composer
```bash
composer install
```

Générer la clé de sallage
```bash
php artisan key:generate
```

Lancer les migrations
```bash
php artisan migrate
```

Lancer le serveur dev
```bash
php artisan serve
```

Lancer vite pour servir les assets
```bash
npm run dev
```

