# Laravel Blog - Qualification Work for Abkhazian State University
This is Laravel blog project with [Filament PHP](https://filamentphp.com/) admin panel, developed by Omar Otyrba.

## Installation

#### 1. Clone the project
```bash
git clone https://github.com/gs-developer-omar/laravel-blog-agu.git
```

#### 2. Run `composer install`
Navigate into project folder using terminal and run

```bash
composer install
```

#### 3. Copy `.env.example` into `.env`

```bash
cp .env.example .env
```

#### 4. Set encryption key

```bash
php artisan key:generate --ansi
```

#### 5. Run migrations

```bash
php artisan migrate
```

#### 6. Add Filament Admin user

```bash
php artisan make:filament-user
```

## 
