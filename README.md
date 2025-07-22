# Laravel 12 Library Management System (Complete)

## ✨ Features
- Laravel 12 + Filament Ready
- SQLite Database for Easy Setup
- Book CRUD (Create, Read, Update, Delete)
- Laravel Authentication (login, dashboard)
- Blade Views for UI
- Seeder and Factory for demo books
- Protected routes with middleware

## ✅ How to Install

```bash
composer install
cp .env.example .env
php artisan key:generate
touch database/database.sqlite
php artisan migrate --seed
php artisan serve
```

Then open `http://localhost:8000`

## 🔐 Login
Register a new user at `/register` and login to access the dashboard.
