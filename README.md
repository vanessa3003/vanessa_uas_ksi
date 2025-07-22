# Laravel 12 Library Management System (Complete)

##  Features
- Laravel 12 + Filament Ready
- SQLite Database for Easy Setup
- Book CRUD (Create, Read, Update, Delete)
- Laravel Authentication (login, dashboard)
- Blade Views for UI
- Seeder and Factory for demo books
- Protected routes with middleware

##  How to Install

```bash
composer install
cp .env.example .env
php artisan key:generate
touch database/database.sqlite
php artisan migrate --seed
php artisan serve
```

Then open `http://localhost:8000`

##  Login
Register a new user at `/register` and login to access the dashboard.
# Library Management System – Laravel 12 + Filament v3

## Features
- User Authentication (Admin / Regular User)
- Book Management (Create, Edit, Delete)
- Borrow/Return Tracking
- Role-based Access Control using Filament
- SQLite database pre-configured

## Admin Login
Email: admin@example.com  
Password: password  
URL: /admin

## How to Run
1. Clone or download the project
2. Ensure you have PHP 8.2+, Composer, SQLite installed
3. Run:
```bash
composer install
php artisan key:generate
php artisan migrate
php artisan serve
```
4. Open `http://localhost:8000/admin`

## Author
Vanessa Dangremont – CIE406 Keamanan Informasi Project
